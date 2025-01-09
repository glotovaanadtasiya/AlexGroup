let room_cats = [
  "Все равно",
  "Стандарт",
  "Полулюкс",
  "Люкс",
];


/********************************************************************************************************/
/*                                      обслуга разная                                                  */
/********************************************************************************************************/

// показ заголовка текущей стадии
function StageTitle(stage) {
	var t = 'неизвестно';
	switch (stage) {
		case "set_mode": t = 'Выбор&nbsp;ветки&nbsp;бронирования'; break;
		case "filter": t = 'Выбор&nbsp;отеля'; break;
		case "room_adds": t = 'Доступные&nbsp;номера&nbsp;и&nbsp;допы'; break;
		case "contacts": t = 'Контакты'; break;
		case "payment": t = 'Оплата&nbsp;или&nbsp;валидация'; break;
		case "booked": t = 'Забронировано'; break;
	}
	LineTitle('#stage_title', t);
}

// базовое заполнение исходящего JSON
function CoreJsonOut_Fill(data, action, add_filter, add_booking) {
	// в data засунуть sessionid, action, filter если add_filter, booking если add_booking
	data["session"] = $('#session').val();
	data["action"] = action;
	if (add_filter)
		data["filter"] = {};
	if (add_booking)
		data["booking"] = {};
}

/********************************************************************************************************/
/*                                      обработчики интерфейсных событий								*/
/********************************************************************************************************/

function WeStarted() {
	// ShowDirtyHtml();	// todo - грохнуть демо

	InitDateTimePicker($('#filter_time_in'));
	InitDateTimePicker($('#payment_time'));

	// заголовочки текст в линии
	LineTitle('#json_out_title', '&nbsp;JSON&nbsp;-&nbsp;запрос&nbsp;на&nbsp;сервер&nbsp;');
	LineTitle('#json_in_title', '&nbsp;JSON&nbsp;-&nbsp;ответ&nbsp;сервера&nbsp;');

	// пнули сервер
	var data = {
		"action": "start"
		, "ext_client_info": "Пришлите что нить"
		, "auth": {
			"login": "guest"
			, "pass": ""
		}
	};
	PostJson(data);
	
}


function FakeAction(action) {
	var data = {};
	CoreJsonOut_Fill(data, action, false, false);
	PostJson(data);
}

function FilterDoAction(action) {
	var data = {};

	// болванка json
	CoreJsonOut_Fill(data, action, true);
	
	
	// что изменилось
//	if (action == 'set_time_in') data.filter["time_in"] = { "value": OurTime_ToJson($('#filter_time_in').datetimepicker('getDate')) };

	if (action == 'set_time_in') data.filter["time_in"] = { "value":
	OurTime_ToJson(new Date(2024, 1, $('.date-select_div.date-selected').attr('data-day') , $('#filter_hours_in_new').val(), $('#filter_minutes_in_new').val(), 0, 0))
	};
	
	
	if (action == 'set_duration') {
		data.filter["dur"] = { "value": parseInt($('#filter_dur_units').val()) };
		parseInt($('#filter_dur_units').val())>12 ? $(".13plusAdds").show() : $(".13plusAdds").hide();
		}

	// пассивные - чтоб не перетерлись
	data.filter["hotel"] = { id: parseInt($('#filter_hotel_id').val()) };
	data.filter["room_cat"] = { id: parseInt($('#filter_room_cat').val()) };
	data.filter["smoking"] = { id: parseInt($('#filter_smoking').val()) };

	PostJson(data);
}

function TimeInChanged() {
	// Обход 2+ срабатываний
	var nv = $('#filter_time_in').val();
	
	//if ($('#filter_hid_time_in').val() == nv)
	//	return;

	$('#filter_hid_time_in').val(nv);

	FilterDoAction('set_time_in');
}

function DurHoursChanged() {
	FilterDoAction('set_dur');
}

function SetMode(strMode) {
	var data = {};

	// болванка json
	CoreJsonOut_Fill(data, 'set_mode');
	data['mode'] = strMode;
	PostJson(data);
}

function FindRooms() {
	// чистим допы - чтоб по новой их нарисовало
	$('#adds').empty();

	FilterDoAction('find_rooms');
	
    $('#room_select').show();
	$('#room_calc').hide();
}

function RoomSelected(hotel_id, num_id, fiz_num, room_class) {

	var this_cb_id = '#cb_room_' + hotel_id + '_' + num_id;
	//var checked = $(this_cb_id).prop('checked');


	//hotel_id = checked ? hotel_id : 0;

	//num_id = checked ? num_id : 0;


	// убрать галки с остальных и вообще адекватности добиться
	//$(".cb_room").prop('checked', false); //:checked
	//if (checked)
	//	$(this_cb_id).prop('checked', true);

	// доступность кнопки "Забронировать"
	//$('#btn_go_contacts').prop('disabled', !checked);

	// отправить json
	var data = {};
	CoreJsonOut_Fill(data, 'select_room', false, true);
	data.booking["hotel"] = { "id": hotel_id };
	data.booking["room"] = { "id": num_id };
	CheckBox_SetToData('#booking_bath_fill', data.booking, "bath_fill");
	CheckBox_SetToData('#booking_changes_prohibited', data.booking, "changes_prohibited");

	PostJson(data);
	
	$('#room_select').hide();
	$('#room_calc').show();
	$('.filter_nomer').text(room_class + ' №' + fiz_num);
	
}

// обработчик изменения в таблице допов
function AddsTable_ValueChanged(add_id, value_id, qty_id) {
	var data = {};
	CoreJsonOut_Fill(data, 'calc_price', false, true);
	CheckBox_SetToData('#booking_bath_fill', data.booking, "bath_fill");
	CheckBox_SetToData('#booking_changes_prohibited', data.booking, "changes_prohibited");
	if (add_id !== undefined) {
		data["add"] = {
			"add_id": add_id
			, "value": (value_id == '' ? 0 : parseInt($('#' + value_id).val()))
			, "qty": (qty_id == '' ? 1 : parseInt($('#' + qty_id).val()))
		}
	}
	PostJson(data);
}

function GoContacts() {
	var data = {};
	CoreJsonOut_Fill(data, 'room_adds', false, true);
	CheckBox_SetToData('#booking_bath_fill', data.booking, "bath_fill");
	CheckBox_SetToData('#booking_changes_prohibited', data.booking, "changes_prohibited");
	PostJson(data);
}


function GoPayment() {
	var data = {};
	CoreJsonOut_Fill(data, 'book', false, true);
	ContactsTable_ToData(data, '#contacts');
	PostJson(data);
	setTimeout("GoBook();", 1000);
}

function GoBook() {
	var data = {};
	CoreJsonOut_Fill(data, 'payment', false, false);

	data["payment"] = {
		"valid_by": $('#payment_valid_by').val()
		, "paid_by": $('#payment_paid_by').val()
		, "money": parseFloat($('#payment_money').val())
		, "time": OurTime_ToJson($('#payment_time').datetimepicker('getDate'))
		, "details": $('#payment_details').val()
	};

	PostJson(data);
}


function StageBack() {
	var data = {};
	var stage = $('#stage').val();

	// создали базовый json
	CoreJsonOut_Fill(data, 'stage_back', false);

	// запихнули пассивных по stage
	// todo: отработка значений - на предмет - существует, чекнуто или значение какое
	if (stage === 'room_adds') {
		data["booking"] = {};
		CheckBox_SetToData('#booking_bath_fill', data.booking, "bath_fill");
		CheckBox_SetToData('#booking_changes_prohibited', data.booking, "changes_prohibited");
	}
	else if (stage === "contacts") {
		data["booking"] = {};
		ContactsTable_ToData(data, '#contacts');
	}
	// пнули сервер
	PostJson(data);
}


/********************************************************************************************************/
/*                              Заполнение списков                                                      */
/********************************************************************************************************/
function FreshSelects_Fill(data) {
	if (data.lists.fresh.hotels) Select_FillFromData(data.lists.hotels, ".filter_hotel_id");

	if (data.lists.fresh.room_cats) Select_FillFromData(data.lists.room_cats, ".filter_room_cat");
	if (data.lists.fresh.smoking) Select_FillFromData(data.lists.smoking, ".filter_smoking");
	if (data.lists.fresh.rp) Select_FillFromData(data.lists.rp, "#select_source_rp");
	// сопля чтоб РП "на лету" меняло
	if (data.lists.fresh.rp) Select_FillFromData(data.lists.rp, "#add_rp_value");
}

function RoomsTable_Fill(data, ctrl_id, is_alt) {
	var tgt = $(ctrl_id);
	tgt.empty();

	console.log(data.length);
	
	if (!data.length) {
		if (!is_alt) tgt.append('<h2 class="h2_form_title">На эту дату и время нет свободных номеров с выбранными параметрами.</h2>'); 
		return;
		}

	/*add_html = "На эту дату и время нет свободных номеров, попробуйте поиск с другими параметрами или позвоните в службу бронирования.";*/
	
	/*
	add_html = "<h2>на эту дату и время нет свободных номеров.<br>Нашли для вас несколько похожих вариантов.</h2>";*/
	
	
	
	//tgt.html('<tr class="tbl_select_room_hdr"><th>&nbsp;</th>' + (is_alt ? "<th>Время заезда</th><th>Отель</th>" : "") + '<th>Номер</th><th>Цена</th>');
	
	/*
	data.forEach(el => {
		var cb_id = 'cb_room_' + el.hotel.id + '_' + el.room.id;
		var html = '<tr>'
			+ '<td><input class="cb_room" id="' + cb_id + '" type="checkbox" onchange="RoomSelected(' + el.hotel.id + ',' + el.room.id + ');" title="Порождает action=\'select_room\'"/></td>'
			+ (is_alt ? '<td>' + OurTime_FromJson(el.time_in) + '</td><td>' + String_DataToHtml(el.hotel.name) + '</td>' : '')
			+ ' <td><label for="' + cb_id + '">' + String_DataToHtml(el.room.long_name) + '</label></td>'
			+ '<td><label for="' + cb_id + '">' + String_DataToHtml(el.price) + '</label></td>'
			+ '</tr>';
		tgt.append(html);
	});*/
	var images = [
				"https://motelspb.com/storage/app/uploads/public/9ef/98a/628/thumb__640_0_0_0_auto.jpg",
				"https://motelspb.com/storage/app/uploads/public/adc/0b0/98a/thumb__640_0_0_0_auto.jpg",
				"https://motelspb.com/storage/app/uploads/public/d64/ee6/92c/thumb__640_0_0_0_auto.jpg"
				
				];

	var html = "";
	if (is_alt) html = '<h2 class="h2_form_title">Нашли для вас несколько похожих вариантов:</h2>';
	
	data.forEach(el => {
		var cb_id = 'cb_room_' + el.hotel.id + '_' + el.room.id;
		
		html += '<div class="room_card" onclick="RoomSelected(' + el.hotel.id + ',' + el.room.id + ',' + el.room.fiz_num + ', \'' + room_cats[parseInt(el.room.room_cat.id)] + '\');">'
			+ '<img src="'
			+ images[Math.floor(Math.random()*images.length)]
			+ '">'
			+ '<span class="hotel_name_on_card">Отель ' + String_DataToHtml(el.hotel.name) + '</span>'
			+ '<span class="room_price">' + String_DataToHtml(el.price) + ' рублей</span>'
			+ '<span class="room_title">'+ room_cats[parseInt(el.room.room_cat.id)] +' №' + parseInt(el.room.fiz_num) + '</span> '
			+ '<a href="#" class="button button_medium button_ghost room_card_choose_btn">Выбрать >></a>'

			+ '</div>';
		
	});
	
	
	
	
	
	tgt.append(html);
	

}



function CheckSelectedRoomFromJson(data) {
	$(".cb_room").prop('checked', false); // сбросили галки у всех номеров
	// выставили галку у избранного
	var id = '#cb_room_' + data.booking.hotel.id + '_' + data.booking.room.id;
	$(id).prop('checked', true);
}


/********************************************************************************************************/
/*                              Таблица допов для stage="room_adds"										*/
/********************************************************************************************************/

// генератор id для контролов
function AddsTable_CtrlID(add_id, part) {
	return 'add_' + add_id + '_' + part;
}

// генератор onChange
function AddsTable_OnChangeHtml(add_id, value_ctrl_id, qty_ctrl_id) {
	return 'onchange="AddsTable_ValueChanged(\'' + add_id + '\', \'' + value_ctrl_id + '\', \'' + qty_ctrl_id + '\');"';
}

// генератор для input/number
function AddsTable_InputNumberTdHtml(add_id, part, stat) {
	var cid = AddsTable_CtrlID(add_id, part);
	var r = '';
	if (stat)
		r = '<td class="' + cid + '">&nbsp;</td>'
	else
		r = '<td><div class="booking__field form-field"><input type="number" size="3"'
			+ ' id="' + cid + '"'
			+ ' ' + AddsTable_OnChangeHtml(add_id, '', cid)
			+ ' title="Порождение action=\'calc_price\'"'
			+ ' class="booking__input input"'
			+ '/></div></td>';
	return r;
}

// генератор для <td total>
function AddsTable_TotalTdHtml(add_id) {
	return '<td class="' + AddsTable_CtrlID(add_id, 'total') + '">&nbsp;</td>';
}

// генератор для строки допов
function AddsTable_RowHtml(add_id, capt, ctrl_td) {
	return '<tr><td>' + String_DataToHtml(capt) + '</td>' + ctrl_td + AddsTable_TotalTdHtml(add_id) + '</tr>';
}

// пустая таблица
function AddsTable_Create(data, stat) {
	var tgt = $(stat ? "#adds_static" : "#adds");
	// повторно не рисуем
	if (!tgt.is(':empty')) return;

	var html, cid;

	//tgt.html('<tr class="tbl_adds_hdr"><th>Что</th><th>Кол-во</th><th>Итог</th>');

	// База
	tgt.append(
		'<tr><td colspan="2">Стоимость номера</td>'
		+ AddsTable_TotalTdHtml('base')
		+ '</tr>'
	);

	// Гости
	tgt.append(AddsTable_RowHtml('guests', 'Количество гостей', AddsTable_InputNumberTdHtml('guests', 'qty', stat)));

	data.booking.adds.forEach(el => {
		// input/number
		if (el.list == "") {
			html = AddsTable_InputNumberTdHtml(el.add_id, 'qty', stat);
		}
		// combo
		else {
			if (stat)
				html = AddsTable_InputNumberTdHtml(el.add_id, 'value', stat);
			else {
				cid = AddsTable_CtrlID(el.add_id, 'value');
				// todo: onchange
				html = '<td><div class="booking__field form-field"><select id="' + cid + '"'
					+ ' ' + AddsTable_OnChangeHtml(el.add_id, cid, '')
					+ ' title="Порождение action=\'calc_price\'"'
					+ ' class="select select_bot-border"'
					+ '>'
					+ $('#select_source_' + el.list).html()
					+ '</select></td>';
			
			}
		}
		tgt.append(AddsTable_RowHtml(el.add_id, el.add_name, html));
	});

	// бабки итого
	tgt.append('<tr><td colspan="2">Итого:</td>' + AddsTable_TotalTdHtml('total') + '</tr>');

	// предоплата
	if (data.payment_rules.prepay_units)
		tgt.append('<tr><td colspan="2">Предоплата:</td>' + AddsTable_TotalTdHtml('prepay') + '</tr>');

	// валидация по карте
	if (data.payment_rules.validation)
		tgt.append('<tr><td colspan="3" class="' + AddsTable_CtrlID('valid', 'total') + '"></td></tr>');
}

function AddsTable_SetTotalText(add_id, val, prefix = '') {
	var cid = AddsTable_CtrlID(add_id, 'total');
	var txt = '&nbsp;';
	if (val != null && val != 0)
		txt = prefix + val.toString();
	$('.' + cid).html(txt);
}

function AddsTable_SetNumberValue(add_id, el) {
	var cid = AddsTable_CtrlID(add_id, 'qty');
	InputNumber_SetFromData('#' + cid, el);
	$('.' + cid).html(el.value);
}

// занос значений по местам
function AddsTable_FillValues(data, stat = false) {
	var d = data.booking, cid;
	// базовая цена
	AddsTable_SetTotalText('base', d.price.base);
	// гости
	AddsTable_SetNumberValue('guests', d.guests);
	AddsTable_SetTotalText('guests', d.price.guests, '+');
	// итого
	AddsTable_SetTotalText('total', d.price.total);
	// предоплата
	AddsTable_SetTotalText('prepay', d.price.prepay);
	// валидация
	//AddsTable_SetTotalText('valid', data.payment_rules.validation ? 'Валидация по карте(или еще какой системе)' : '');

	d.adds.forEach(el => {
		// total
		AddsTable_SetTotalText(el.add_id, el.total, '+');
		// input/number
		if (el.list == "") {
			AddsTable_SetNumberValue(el.add_id, el.qty);
		}
		// combo
		else {
			cid = AddsTable_CtrlID(el.add_id, 'value')
			$('#' + cid).val(el.value);
			$('.' + cid).html(el.name);
		}
	});
}

/********************************************************************************************************/
/*                              Таблица контактов для stage="contacts"									*/
/********************************************************************************************************/
function ContactsTable_CtrlID(el) {
	var r = "contact_fld_" + el.id;
	return r;
}

function ContactsTable_Create(data, ctrl_id) {
	tgt = $(ctrl_id);

	// т.к. при переключении моды может измениться список полей, то чистим нах
	tgt.empty();

	/*
	data.forEach(el => {
		if (el.mode != 'hide') {
			var cid = ContactsTable_CtrlID(el);
			var html = '<tr>'
				+ '<td>' + el.name + (el.mode == 'required' ? ' *' : '') + '</td>'
				+ '<td><'
				+ (el.id == 'comment' ? 'textarea' : 'input')
				+ ' id="' + cid + '"'
				+ (el.mode == 'required' ? ' required' : '')
				+ ' class="contact_fld"'
				+ ' short_id="' + el.id + '"'
				+ '/></td>'
				+ '</tr>';
			tgt.append(html);
			$('#' + cid).val(el.value);
		}
	});*/


				 
				 
	data.forEach(el => {
		if (el.mode != 'hide') {
			var cid = ContactsTable_CtrlID(el);
			var html = 
				'<label for="' + /*+ cid + */ '">'
				+ el.name + (el.mode == 'required' ? ' *' : '') 
				+ '</label>'
				+ '<div class="booking__field form-field">'
				+ '<'
				+ (el.id == 'comment' ? 'textarea' : 'input')
				+ ' id="' + cid + '"'
				+ (el.mode == 'required' ? ' required' : '')
				+ ' class="contact_fld booking__input input"'
				+ ' short_id="' + el.id + '"'
				+ '/></div>';
				
			tgt.append(html);
			$('#' + cid).val(el.value);
		}
	});

}

function ContactsTable_ToData(data, ctrl_id) {
	var tgt = $(ctrl_id);
	var cont = {};
	// найти всех уродов у которых class=contact_fld
	$('.contact_fld').each(function () {
		var el = $(this);
		var id = el.attr('short_id');
		// добить в объект
		cont[id] = el.val();
	});
	data.booking["contacts"] = cont;
}

function Contacts_ToStatic(data) {
	data.forEach(el => {
		if (el.mode != 'hide') {
			var cid = ContactsTable_CtrlID(el);
			var v = el.value;
			if (v == null) v = '';
			$('.' + cid).html(String_DataToHtml(v));
		}
	});
}

/********************************************************************************************************/
/*                              Липовое бабло                                                           */
/********************************************************************************************************/

function FakePayment_ToControls(data) {
	$('#payment_valid_by').val(data.payment.valid_by);
	$('#payment_paid_by').val(data.payment.paid_by);
	$('#payment_details').val(data.payment.details);

	var v = data.payment.money;
	if (v == null || v == "" || v == 0) {
		if (data.booking.price.prepay)
			v = data.booking.price.prepay;
		else
			v = 0;
	}
	$('#payment_money').val(v);

	v = data.payment.time;
	if (v == null)
		v = new Date();
	$('#payment_time').val(OurTime_FromJson(v));

	//$('#btn_payment').html(data.booking.price.prepay ? "Оплачено" : "Валидация прошла");

}

/********************************************************************************************************/
/*                              Входящий JSON                                                           */
/********************************************************************************************************/
// todo: передать по значению надо ли отрабатывать выбор номера
function GotGoodJson(data) {
	$('#session').val(data.session);
	$('#stage').val(data.stage);
	$('#message').html(String_DataToHtml(data.warning.txt));

	var stage = data.stage
		, session = data.session
		, mode = data.mode
		;

	// заполнение select списков - два списка присылают на старте - поэтому тут
	FreshSelects_Fill(data);

	/*
	// по умолчанию короткие брони
	*/
	

	if (stage == "set_mode") {
		var data = {
			"session": session
			, "action": "set_mode"
			, "mode": "short"
		};
		PostJson(data);
		return;
	} /**/

	StageTitle(stage);

	// прятки div
	// две кнопки - короткое-длинное
	$('#div_set_mode').css('display', (stage == "set_mode" ? "block" : "none"));
	// контролы фильтра
	$('#div_filter').css('display', (stage == "filter" ? "block" : "none"));
	// статика фильтра
	$('#div_filter_static').css('display', (stage == "room_adds" ? "block" : "none"));
	// контролы номера и допов
	$('#div_room_adds').css('display', (stage == "room_adds" ? "block" : "none"));
	// статика номера и допов - через массив
	$('#div_room_adds_static').css('display', (["contacts", "payment"].includes(stage) ? "block" : "none"));
	// контролы контактов 
	$('#div_contacts').css('display', (stage == "contacts" ? "block" : "none"));
	// статика контактов
	$('#div_contacts_static').css('display', (stage == "payment" ? "block" : "none"));
	// контролы платежа
	//$('#div_payment').css('display', (stage == "payment" ? "block" : "none"));
	// контролы "забронировано"
	$('#div_booked').css('display', (stage == "booked" ? "block" : "none"));


	// занос номеров в таблицу (основных)
	if (data.lists.fresh.rooms)
		RoomsTable_Fill(data.lists.rooms, '#rooms', false);
	// занос номеров в таблицу (альтернативы)
	if (data.lists.fresh.alt_rooms)
		RoomsTable_Fill(data.lists.alt_rooms, '#alt_rooms', true);


	// занос статики - потом в отдельную процу?
	$('.filter_time_in').html(OurTime_FromJson(data.filter.time_in.value));
	
	//alert(data.filter.time_in.value);
	updateDateTimeFromJson(OurTime_FromJson(data.filter.time_in.value));
			
	$('.filter_time_out').html(OurTime_FromJson(data.filter.time_out.value));
	$('.filter_dur_hours').html(data.filter.dur.value);
	$('.filter_hotel_name').html(String_DataToHtml(data.filter.hotel.name));
	$('.filter_room_cat_name').html(String_DataToHtml(data.filter.room_cat.name));
	$('.filter_smoking_name').html(String_DataToHtml(data.filter.smoking.name));
	$('.booking_changes_prohibited').html(data.booking.changes_prohibited ? 'Да' : 'Нет');
	$('.booking_bath_fill').html(data.booking.bath_fill ? 'Да' : 'Нет');
	$('.b_hotel_name').html(String_DataToHtml(data.booking.hotel.name));
	$('.booking_time_in').html(OurTime_FromJson(data.booking.time_in));
	$('.booking_time_out').html(OurTime_FromJson(data.booking.time_out));
	$('.booking_dur_hours').html(data.booking.dur.value);
	$('.booking_room').html(String_DataToHtml(data.booking.room.long_name));
	// это не совсем статика - это ругательство про дебильную ванну/халявный завтрак - они в двух местах - "выбор номера/допов" и в статике
	$('.idiotic_bath').css('display', ( data.booking.room.idiotic_bath ? "block" : "none"));
	$('.free_breakfast').css('display', ( data.booking.room.free_breakfast ? "block" : "none"));
	$('.decoration').css('display', ( data.booking.decoration ? "block" : "none"));

	Contacts_ToStatic(data.booking.contacts);

	// прятки набирать ванну - уже не актуально
	// $('.bath_fill').css('display', data.booking.room.bath_fill ? 'block' : 'none');

	// занос в контролы  - для short
	switch (stage) {
		case 'filter':
		case 'room_adds':
			SetDateTimePickerValue(OurTime_FromJson(data.filter.time_in.value), '#filter_time_in', '#filter_hid_time_in');
			InputNumber_SetFromData('#filter_dur_units', data.filter.dur);
			$('#filter_hotel_id').val(data.filter.hotel.id);
			$('#filter_room_cat').val(data.filter.room_cat.id);
			$('#filter_smoking').val(data.filter.smoking.id);
			if( data.booking.room.have_bath )
				$('#lbl_booking_bath_fill' ).show();
			else 
				$('#lbl_booking_bath_fill' ).hide();
			CheckBox_SetFromData('#booking_bath_fill', data.booking.bath_fill);
			// чекбокс на выбранном номере
			CheckSelectedRoomFromJson(data);
			break;
	}


	// создание таблицы контролов под допы
	if (stage == "room_adds")
		AddsTable_Create(data, false);
	// создание статичной таблицы под допы
	if (stage == "contacts")
		AddsTable_Create(data, true);
	// занос значений допов вовсюды
	AddsTable_FillValues(data);

	// создание таблицы контролов под контакты с заносом значений
	if (stage == "contacts") {
		ContactsTable_Create(data.booking.contacts, "#contacts");
	}

	// липовое бабло в контролы
	if (stage == 'payment')
		FakePayment_ToControls(data);
	
}

// авто выбор рекомендованного номера
function SelectRecomendedRoom(data){
	// стадия не "рум и допы"
	if(data.stage != 'room_adds' ) return;
	// уже выбран номер
	if( data.booking.room.id ) return;
	// нет свежих основных
	if( !data.lists.rooms ) return;
	
	// побежали по списку основных номеров
	data.lists.rooms.forEach(el => {
		if( el.recommended ) {
			$('#cb_room_' + el.hotel.id + '_' + el.room.id).prop('checked',true);
			//RoomSelected(el.hotel.id, el.room.id);
			return;
		}	
	});	
	
}
function GotJson(data) {
	var err = data.error.txt;
	if (err == null || err == '') {
		GotGoodJson(data);
		SelectRecomendedRoom(data);
	}
	else {
		$('#message').html(
			'Случилась какая-то глобальная фигня.<br>Начинайте сначала<br>' + String_DataToHtml(err)
		);
		return;
	}

}

/********************************************************************************************************/
/*                              Исходящий JSON                                                          */
/********************************************************************************************************/


function PostJson(obj) {
	// app_token
	//obj["app_token"] = '9EFD4B81-DDEA-4805-A221-49E37E2AD387';	// наша веб-моська
	//obj["app_token"] = '35CE9672-8E4F-4DAE-8665-68FF915287A7'		// боевой веб-модуль
	
	$("body").css("cursor", "progress");

	var s = JSON.stringify(obj);
	$('#json_out').html('<pre>' + JSON.stringify(obj, null, 4) + '</pre>');
	$.ajax({
		type: "POST",
		url: 'https://motelspb.com/gate.php',	// проверка чтоб работало с того ip, потом снести
		data: s,
		contentType: "application/json; charset=UTF-8",
		success: function (response) {
			$('#json_in').html('<pre>' + JSON.stringify(response, null, 4) + '</pre>');
			$("body").css("cursor", "default");
			GotJson(response);
			//alert(JSON.stringify({ 'now': new Date() }));

		},
		statusCode: {
			403: function () {
				// Only if your server returns a 403 status code can it come in this block. :-)
				alert("Username already exist");
				$("body").css("cursor", "default");
			}
		},
		error: function (e) {
			$('#json_in').html('<pre>' + e.responseText + '</pre>');
			$("body").css("cursor", "default");
		}
	});
}

function recalcFullDate() {
	tempDate = $('.date-select_div.date-selected').attr('data-date') 
				+ ' '
				+ $('#filter_hours_in_new').val()
				+ ':'
				+ $('#filter_minutes_in_new').val();
	$('#filter_time_in').val(tempDate);
	TimeInChanged();
}

function updateDateTimeFromJson(time) {
  
  day = time.slice(0, 2)
  $('.date-select_div').removeClass('date-selected');

  $('.date-select_div').each(function() {
	//alert($(this).attr('data-day') + day);
	if ( $(this).attr('data-day')==day) $(this).addClass('date-selected');
	});
	
	time = time.slice(-5);
	minutes = time.split(":").pop();
	hours = time.split(":").reverse().pop();
	console.log(hours + minutes);
	$('#filter_hours_in_new option[value='+hours+']').prop('selected', true);
	$('#filter_minutes_in_new option[value='+minutes+']').prop('selected', true);
		
  
}

$(document).ready(function() {
	
	var tmpdate = new Date();
	$('.date-select_div').each(function() {
		$(this).attr('data-date', tmpdate.toLocaleDateString());
		$(this).attr('data-day', ("0" + tmpdate.getDate()).slice(-2));
		$(this).html( tmpdate.toLocaleString("ru", { month: 'long', day: 'numeric', timezone: 'UTC'
}));
		tmpdate.setDate(tmpdate.getDate() + 1);
	});


	$('.date-select_div').click(function(){
		$('.date-select_div').removeClass('date-selected');
		$(this).addClass('date-selected');
		recalcFullDate();
	});
	
	//show data ?test=1

	const urlParams = new URLSearchParams(window.location.search);
	const testing = urlParams.get('test');
	if (testing) $(".debug").show();
	
});