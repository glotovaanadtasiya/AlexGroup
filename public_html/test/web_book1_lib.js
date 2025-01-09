
	/********************************************************************************************************/
    /*                              Дата-время - борьба с кривым часовым поясом								*/
    /********************************************************************************************************/
	/*
	Короче в браузере (или на компе) часовой пояс отличный от требуемого
	1) Задача номер 1 - входящее с сервера время превратить в требуемое
	2) Задача номер 2 - перед отправкой на сервер превратить в кривое
	*/
	
	const Forced_TZ_OffSet = -180;	//+03:00
	
	function OurTime_FromJson(sDt){
		var dt = new Date(sDt);				// получили дату время
		var os = dt.getTimezoneOffset();	// получили поджопный offset
		if( os != Forced_TZ_OffSet )		
			dt.setMinutes( dt.getMinutes() + (os-Forced_TZ_OffSet) );	// сдвинули если разный offset
        return dateFormat(dt, 'dd.mm.yyyy HH:MM');
    }

    function OurTime_ToJson(val) {
		var dt = new Date(val);
		var os = dt.getTimezoneOffset();
		if( os != Forced_TZ_OffSet )
			dt.setMinutes( dt.getMinutes() + (Forced_TZ_OffSet-os) );
        var fix_it = dateFormat(dt, "yyyy-mm-dd'T'HH:MM:ss.lo");
        var l = fix_it.length;
        var res = fix_it.substring(0, l - 2) + ':' + fix_it.substring(l - 2, l);
        return res;
    }
    
	/********************************************************************************************************/
    /*                              Интерфейсная хрень                                                      */
    /********************************************************************************************************/

    function InitDateTimePicker(ctrl) {
        ctrl.datetimepicker({
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            firstDay: 1,
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd.mm.yy',
            yearRange: '2023:2024',
            timeText: 'Время',
            hourText: 'Часы',
            minuteText: 'Минуты',
            secondText: 'Секунды',
            currentText: 'Сейчас',
            closeText: 'Закрыть',
			stepMinute: 5
        });
    }
	

    function SetDateTimePickerValue(val, ctrl, hid) {
        $(ctrl).val(val);
        $(hid).val(val);
    }
	
	function LineTitle(tgt_id, capt){
		$(tgt_id).html('<h2>'+capt+'</h2>');
	}

	/********************************************************************************************************/
    /*                              Экранирование html-символов												*/
    /********************************************************************************************************/
	
	// экранирование < > " ' &
	// todo: IsString или что-то типа - или toString юзать
	function String_DataToHtml(s){
		if( s == null || s==undefined ) return "";
		s = s.toString();
		var trash = [	"&",		"\"",		"<",	">",	"'" ];
		var norm =	[	"&amp;",	"&quot;", 	"&lt;",	"&gt;",	"&#039;"];
		for( i=0; i<trash.length; i++){
			// просто replace - меняет 
			s = s.replaceAll( trash[i], norm[i]);
		}
		return s;
	}

	/********************************************************************************************************/
    /*                              Заполнение select по данным												*/
    /********************************************************************************************************/
	
	function Select_FillFromData(data, ctrl_id, curr_val) {
        var tgt = $(ctrl_id);
        tgt.empty();
		
		

        data.forEach(el => {
            var html = '<option value="' + el.id + '"' + (el.id == curr_val ? ' selected' : '') + ' >' + el.name + '</option>';
            tgt.append(html);
        });
    }

	/********************************************************************************************************/
    /*                              Input type=number установка значения и min/max							*/
    /********************************************************************************************************/
	
	function InputNumber_SetFromData(id_input, data){
		var tgt= $(id_input);
		tgt.val(data.value);
		tgt.attr("min",data.min);
		tgt.attr("max",data.max);
	}

	/********************************************************************************************************/
    /*                              Checkbox																*/
    /********************************************************************************************************/
	function CheckBox_SetFromData(id, val){
		$(id).prop("checked", !!val);
	}
	
	function CheckBox_SetToData(id, data, node){
		data[node] = $(id).prop("checked") ? 1:0;
	}
	


