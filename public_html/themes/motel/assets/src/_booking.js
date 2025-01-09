/* eslint-disable no-undef */
$(function () {
  
  let form = $('.js-booking');
  let hotelData;
  let hotelInput = form.find('select[name="booking-hotel-select"]');
  let hotelInputIdVal = hotelInput.find(':selected').data('hotelId');
  form.on('change', 'select[name="booking-hotel-select"]', function() {
    hotelInputIdVal = hotelInput.find(':selected').data('hotelId');
    getHotelData(hotelInputIdVal);
  })
  form.on('change', 
  'select[name="booking-roomtype-select"], .js-datepicker, select[name="booking-time-select"], select[name="booking-rp-select"]' , 
  function() {
    bookingFormCalc(hotelData);
  });

  if ((form.length) && (hotelInputIdVal))  {
    
    getHotelData(hotelInputIdVal);
  }

  function getHotelData(hotelId) {
    $.get(
      '/api/v1/hotels/' + hotelId + '.json',
      function (data) {
        hotelData = data; 
        // console.log(hotelData);
        bookingFormCalc(data);
      }    
    ).fail(function() {
      // alert( "error" );
    });
  }

});



function bookingFormCalc (data) {
  let form = $('.js-booking');
  let formBtn = form.find('.booking__send-btn');

  let resultBlock = form.find('.booking__price-num');
  let result = 0;
  let priceMain;

  let errorTxt;
  function setError(errorTxt) {
    resultBlock.addClass('empty').text(errorTxt);
    formBtn.prop('disabled', true);
  }

  let hotelInput = form.find('select[name="booking-hotel-select"]');
  let hotelInputIdVal = hotelInput.find(':selected').data('hotelId');

  let roomtypeInput = form.find('select[name="booking-roomtype-select"]');
  let roomtypeInputVal = roomtypeInput.val();
  let roomtypeMap = {
    'standard': 'standart_prop',
    'suite': 'suite_prop',
    'lux': 'lux_prop',
  }
  let roomtypeMapVal = roomtypeMap[roomtypeInputVal];

  let dateInput = form.find('.js-datepicker');
  let dateInputVal = dateInput.val();
  let isDateValid = moment(dateInputVal, "DD.MM.YYYY", true).isValid();
  let dayName;
  if (!isDateValid) {
    dayName = null; 
  }
  else {
    dayName = dateInput.datepicker('getDayName', true, true); 
  }

  let timeInput = form.find('select[name="booking-time-select"]');
  let timeInputVal = timeInput.val();

  let rpInput = form.find('select[name="booking-rp-select"]');
  let rpInputPriceVal = rpInput.find(':selected').data('price');

  try {
    let tariffs
    try {

      if (!data[roomtypeMapVal][0]) {
        errorTxt = roomtypeInput.find('option:selected').text() + ' недоступен';
        setError(errorTxt);
        return;
      }

      tariffs = data[roomtypeMapVal][0].tariffs;
    }
    catch(ex) {
      errorTxt = 'Выберите все опции для подсчета';
      setError(errorTxt);
      return;
    }

    let selectedTariff;    
    // find selected tariff
    for (let prop in tariffs) {
      for (let nestedProp in tariffs[prop]) {
        if (tariffs[prop][nestedProp] === timeInputVal) {
          selectedTariff = tariffs[prop];
        }
      }
    }
    

    if (dayName == 'Пт' || dayName == 'Сб' || dayName == 'Вс') {
      priceMain = selectedTariff.fri_sat;
    }
    else if (dayName !== null) {
      priceMain = selectedTariff.sun_thu;
    }

    if (rpInputPriceVal) {
      result = parseFloat(priceMain) + parseFloat(rpInputPriceVal);
    }
    else {
      result = parseFloat(priceMain);
    }

    if (!(hotelInputIdVal && roomtypeInputVal && dayName && timeInputVal)) {
      errorTxt = 'Выберите все опции для подсчета';
      setError(errorTxt);
    }
    else if (isNaN(result) || result == 0) {
      errorTxt = 'Тариф недоступен для выбора';
      setError(errorTxt);
    }
    else {
      resultBlock.removeClass('empty').text( new Intl.NumberFormat('ru-RU').format(result));
      formBtn.prop('disabled', false);
    }
  }
  catch (ex) {
    // let message = ex.message;
    // console.error(message);
    errorTxt = 'Тариф недоступен для выбора';
    setError(errorTxt);
    formBtn.prop('disabled', true);
  }
}


