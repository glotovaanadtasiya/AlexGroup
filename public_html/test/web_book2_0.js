/********************************************************************************************************/
/*                                      обслуга разная                                                  */
/********************************************************************************************************/

// показ заголовка текущей стадии
function StageTitle(stage) {
	var t = 'ХЗ';
	switch (stage) {
		case "set_mode": t = '&nbsp;Выбор&nbsp;ветки&nbsp;бронирования&nbsp;'; break;
		case "filter": t = '&nbsp;Параметры&nbsp;выборки&nbsp;доступных&nbsp;номеров&nbsp;'; break;
		case "room_adds": t = '&nbsp;Доступные&nbsp;номера&nbsp;и&nbsp;допы&nbsp;'; break;
		case "contacts": t = '&nbsp;Контакты&nbsp;'; break;
		case "payment": t = '&nbsp;Оплата&nbsp;или&nbsp;валидация&nbsp;'; break;
		case "booked": t = '&nbsp;Забронировано&nbsp;'; break;
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
/*                                      обработчики контролов фильтра									*/
/********************************************************************************************************/

function FilterDoAction(action) {
	var data = {};

	// болванка json
	CoreJsonOut_Fill(data, action, true);
	
	// что изменилось
	if (		action == 'set_time_in' ) 		data.filter["time_in"] = { "value": OurTime_ToJson($('#filter_time_in').datetimepicker('getDate')) };
	else if (	action == 'set_duration' ) 		data.filter["dur"] = { "value": parseInt($('#filter_dur_units').val()) };
	else if (	action == 'set_duration_meas' )	data.filter["dur"] = { "meas": $('#filter_dur_meas').val() };
	else if (	action == 'set_time_out' ) 		data.filter["time_out"] = { "value": OurTime_ToJson($('#filter_time_out').datetimepicker('getDate')) };
	
	// пассивные на всяк случай, могут перетереться в принципе, например отеля нет в это время
	data.filter["hotel"] = { id: parseInt($('#filter_hotel_id').val()) };
	data.filter["room_cat"] = { id: parseInt($('#filter_room_cat').val()) };
	data.filter["smoking"] = { id: parseInt($('#filter_smoking').val()) };
	
	PostJson(data);
}

function TimeInChanged() {
	// Обход 2+ срабатываний
	var nv = $('#filter_time_in').val();
	if ($('#filter_hid_time_in').val() == nv)
		return;

	$('#filter_hid_time_in').val(nv);

	FilterDoAction('set_time_in');
}

function TimeOutChanged() {
	// Обход 2+ срабатываний
	var nv = $('#filter_time_out').val();
	if ($('#filter_hid_time_out').val() == nv)
		return;

	$('#filter_hid_time_out').val(nv);

	FilterDoAction('set_time_out');
}




/********************************************************************************************************/
/*                                      обработчики интерфейсные неразобранные							*/
/********************************************************************************************************/

function WeStarted() {
	// ShowDirtyHtml();	// todo - грохнуть демо

	InitDateTimePicker($('#filter_time_in'));
	InitDateTimePicker($('#filter_time_out'));
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

// в варианте "дай все списки"
function ActionNothing(all_lists){
	var data = {};
	CoreJsonOut_Fill(data, 'nothing', false, false);
	if( all_lists )
		data["all_lists"] = all_lists;
	PostJson(data);
}

function SwitchToImmortalSession(id){
	$('#session').val(id);
	ActionNothing(1);
}


function FindRooms() {
	// чистим допы - чтоб по новой их нарисовало
	$('#adds').empty();

	FilterDoAction('find_rooms');
}

function RoomSelected(hotel_id, num_id) {

	var this_cb_id = '#cb_room_' + hotel_id + '_' + num_id;
	var checked = $(this_cb_id).prop('checked');


	hotel_id = checked ? hotel_id : 0;

	num_id = checked ? num_id : 0;


	// убрать галки с остальных и вообще адекватности добиться
	$(".cb_room").prop('checked', false); //:checked
	if (checked)
		$(this_cb_id).prop('checked', true);

	// доступность кнопки "Забронировать"
	$('#btn_go_contacts').prop('disabled', !checked);

	// отправить json
	var data = {};
	CoreJsonOut_Fill(data, 'select_room', false, true);
	data.booking["hotel"] = { "id": hotel_id };
	data.booking["room"] = { "id": num_id };
	CheckBox_SetToData('#booking_bath_fill', data.booking, "bath_fill");
	CheckBox_SetToData('#booking_changes_prohibited', data.booking, "changes_prohibited");

	PostJson(data);
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


function GoPayment(pay_type) {
	var data = {};
	CoreJsonOut_Fill(data, 'book', false, true);
	data["payment"] = {
		"type": pay_type
	};
	ContactsTable_ToData(data, '#contacts');
	PostJson(data);
}

function GoBook() {
	var data = {};
	CoreJsonOut_Fill(data, 'payment', false, false);

	data["payment"] = {
		"paid_by": $('#payment_paid_by').val()
		, "paid": parseFloat($('#payment_paid').html())
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

	if (!data.length) return;

	tgt.html('<tr class="tbl_select_room_hdr"><th>&nbsp;</th>' + (is_alt ? "<th>Время заезда</th><th>Отель</th>" : "") + '<th>Номер</th><th>Цена</th>');
	data.forEach(el => {
		var cb_id = 'cb_room_' + el.hotel.id + '_' + el.room.id;
		var html = '<tr'+( el.recommended ? ' class="tbl_select_room_recommended"' : '')+'>'
			+ '<td><input class="cb_room" id="' + cb_id + '" type="checkbox" onchange="RoomSelected(' + el.hotel.id + ',' + el.room.id + ');" title="Порождает action=\'select_room\'"/></td>'
			+ (is_alt ? '<td>' + OurTime_FromJson(el.time_in) + '</td><td>' + String_DataToHtml(el.hotel.name) + '</td>' : '')
			+ ' <td><label for="' + cb_id + '">' + String_DataToHtml(el.room.long_name) + '</label></td>'
			+ '<td><label for="' + cb_id + '">' + String_DataToHtml(el.price) + '</label></td>'
			+ '</tr>';
		tgt.append(html);
	});
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
		r = '<td><input type="number" size="3"'
			+ ' id="' + cid + '"'
			+ ' ' + AddsTable_OnChangeHtml(add_id, '', cid)
			+ ' title="Порождение action=\'calc_price\'"'
			+ '/></td>';
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

	tgt.html('<tr class="tbl_adds_hdr"><th>Что</th><th>Кол-во</th><th>Итог</th>');

	// База
	tgt.append(
		'<tr><td colspan="2">Базовая стоимость проживания</td>'
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
				html = '<td><select id="' + cid + '"'
					+ ' ' + AddsTable_OnChangeHtml(el.add_id, cid, '')
					+ ' title="Порождение action=\'calc_price\'"'
					+ '>'
					+ $('#select_source_' + el.list).html()
					+ '</select></td>';
			}
		}
		tgt.append(AddsTable_RowHtml(el.add_id, el.add_name, html));
	});

	// бабки итого
	tgt.append('<tr><td colspan="2">Итого:</td>' + AddsTable_TotalTdHtml('total') + '</tr>');
	
	tgt.append('<tr><td colspan="2">Обязательная предоплата:</td>' + AddsTable_TotalTdHtml('prepay') + '</tr>');
	
	/*
	// валидация по карте
	if (data.payment_rules.validation)
		tgt.append('<tr><td colspan="3" class="' + AddsTable_CtrlID('valid', 'total') + '"></td></tr>');
	*/
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
	if( d.price.prepay )
		AddsTable_SetTotalText('prepay', d.price.prepay);
	else
		AddsTable_SetTotalText('prepay','нет');
	/*
	// валидация
	AddsTable_SetTotalText('valid', data.payment_rules.validation ? 'Валидация по карте(или еще какой системе)' : '');
	*/

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

	$('#payment_paid').html(data.payment.must);			// бабло
	$('#payment_paid_by').val(data.payment.paid_by);	// плат.система
	$('#payment_details').val(data.payment.details);	// детали транзакции

	// время транзакции
	v = data.payment.time;
	if (v == null)
		v = new Date();
	$('#payment_time').val(OurTime_FromJson(v));

	$('#btn_payment').html(data.payment.must ? "Оплачено" : "Валидация прошла");

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

	StageTitle(stage);

	// прятки div
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
	$('#div_payment').css('display', (stage == "payment" ? "block" : "none"));
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
	$('.filter_time_out').html(OurTime_FromJson(data.filter.time_out.value));
	$('.filter_duration').html('&nbsp;('+data.filter.dur.meas_ru+':&nbsp;'+data.filter.dur.value+')');
	$('.filter_hotel_name').html(String_DataToHtml(data.filter.hotel.name));
	$('.filter_room_cat_name').html(String_DataToHtml(data.filter.room_cat.name));
	$('.filter_smoking_name').html(String_DataToHtml(data.filter.smoking.name));

	
	$('.booking_changes_prohibited').html(data.booking.changes_prohibited ? 'Да' : 'Нет');
	$('.booking_bath_fill').html(data.booking.bath_fill ? 'Да' : 'Нет');
	$('.b_hotel_name').html(String_DataToHtml(data.booking.hotel.name));
	$('.booking_time_in').html(OurTime_FromJson(data.booking.time_in));
	$('.booking_time_out').html(OurTime_FromJson(data.booking.time_out));
	$('.booking_duration').html('&nbsp;('+data.booking.dur.meas_ru+':&nbsp;'+data.booking.dur.value+')');
	$('.booking_room').html(String_DataToHtml(data.booking.room.long_name));
	// это не совсем статика - это ругательство про дебильную ванну/халявный завтрак - они в двух местах - "выбор номера/допов" и в статике
	$('.idiotic_bath').css('display', ( data.booking.room.idiotic_bath ? "block" : "none"));
	$('.free_breakfast').css('display', ( data.booking.free_breakfast ? "block" : "none"));
	$('.decoration').css('display', ( data.booking.decoration ? "block" : "none"));
	
	Contacts_ToStatic(data.booking.contacts);
	

	// занос в контролы
	switch (stage) {
		case 'filter':
		case 'room_adds':
			SetDateTimePickerValue( OurTime_FromJson(data.filter.time_in.value), '#filter_time_in', '#filter_hid_time_in');
			SetDateTimePickerValue( OurTime_FromJson(data.filter.time_out.value), '#filter_time_out', '#filter_hid_time_out');
			$('#filter_dur_meas').val(data.filter.dur.meas);
			InputNumber_SetFromData( '#filter_dur_units', data.filter.dur );
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
	
	// видимость кнопок вариантов оплаты
	if (stage == "contacts") {
		$('#btn_go_just_book').css('display', data.booking.price.can_just_book ?  'inline': 'none' );
		$('#btn_go_prepay_part').css('display', data.booking.price.can_prepay_part ?  'inline': 'none' );
		$('#btn_go_prepay_full').css('display', data.booking.price.can_prepay_full ?  'inline': 'none' );
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
	/*
	// побежали по списку основных номеров
	data.lists.rooms.forEach(el => {
		if( el.recommended ) {
			$('#cb_room_' + el.hotel.id + '_' + el.room.id).prop('checked',true);
			RoomSelected(el.hotel.id, el.room.id);
			return;
		}	
	});	
	*/
	
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
	obj["app_token"] = '9EFD4B81-DDEA-4805-A221-49E37E2AD387';		// наша веб-моська
	//obj["app_token"] = 'E0E055F2-BE97-4535-B2E8-323DFCB1C56D'		// боевой веб-модуль
	
	$("body").css("cursor", "progress");

	var s = JSON.stringify(obj);
	$('#json_out').html('<pre>' + JSON.stringify(obj, null, 4) + '</pre>');
	$.ajax({
		type: "POST",
		
		url: "api2_0.php",
		
		//url: "/WebBook2/api_proxy.php",								// работает на http в браузере
		
		// это должно породить CORS - породило бля
		// url: "https://26.247.36.235:9681/WebBook2/api2_0.php",
		//url: "http://26.247.36.235:8095/WebBook2/api2_0.php",

		//url: "/WebBook2/api2_0_dbg.php",
		
		//url: "/WebBook2/api2_0.php",								// работает на http в браузере
		// url: "https://5.17.30.142:9681/WebBook2/api2_0.php",		// работает на http/https если подтвердиться всякое в браузере
		
		// url: "https://motelspb.com/gate.php",				
		
		// а вот эта херня не работает
		// url: "https://motelspb.com/test/api2_0.php",				
		/* 
			http 
				Access to XMLHttpRequest at 'https://motelspb.com/test/api2_0.php' from origin 'http://5.17.30.142:8095' has been blocked by CORS policy: Response to preflight request doesn't pass access control check: No 'Access-Control-Allow-Origin' header is present on the requested resource.
			https:		
				5.17.30.142/:1 Access to XMLHttpRequest at 'https://motelspb.com/test/api2_0.php' from origin 'https://5.17.30.142:9681' has been blocked by CORS policy: Response to preflight request doesn't pass access control check: No 'Access-Control-Allow-Origin' header is present on the requested resource.		
		*/
		
		data: s,
		contentType: "application/json; charset=UTF-8",
		success: function (response) {
			$('#json_in').html('<pre>' + JSON.stringify(response, null, 4) + '</pre>');
			$("body").css("cursor", "default");
			GotJson(response);

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
