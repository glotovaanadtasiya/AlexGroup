
 
 /*repair problem with focus on field outside the popup*/
  $.magnificPopup.instance._onFocusIn = function(e) {
            return true;
			};
  
 

function isCheck(name) {
    return document.querySelector('input[name="' + name + '"]:checked');
}
 
  
  function startChat() {
 
 
var hotel=$(".booking__form  [name='booking-hotel-select'] option:selected").text();
var roomtype=$(".booking__form  [name='booking-roomtype-select'] option:selected").text();
var date=$(".booking__form  [name='arrival_date']").val();
var tarif=$(".booking__form  [name='booking-time-select']").val();
var rp=$(".booking__form  [name='booking-rp-select']").val();
var name=$(".booking__form  [name='fname']").val();
var phone=$(".booking__form  [name='phone']").val();
var hours=$(".booking__form  [name='booking-hours']").val();
var minutes=$(".booking__form  [name='booking-minutes']").val();
var smoking=$(".booking__form  [name='booking-smocking']").val();
var email=$(".booking__form  [name='email']").val();


TalkMe("setClientInfo", {name: name, phone: phone, email: email});


TalkMe("openSupport");


rp = rp ? rp= "\nРомантический пакет " + rp : "";
smoking = smoking ? "\nНомер для курящих: " +  smoking : "";


TalkMe("sendMessage", "Отель " + hotel + "\nНомер " + roomtype + "\nДата " + date + "\nТариф " + tarif + rp + "\nВремя заезда " + hours + ":" + minutes + smoking  );

TalkMe("receiveMessage", "Подождите немного, ищем подходящий вариант.");

ym(23472043,'reachGoal','start_online_booking')
}