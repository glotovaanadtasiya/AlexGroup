/* eslint-disable no-undef */
$(function() {
  
  // current selected hotel
  var currentRoomtype;
  function changecurrentRoomtypeByTab(tab) {
    if (tab.data('numberType')) {
      currentRoomtype = tab.data('numberType');
    }
    $('.js-booking select[name="booking-roomtype-select"]').val(currentRoomtype).trigger('change');
  }
  
  // 
  // Tabs START
  // 
  // Set active tab from localStorage if page is reloaded
  $('.js-tabs').each(function(i) {
    if (performance.navigation.type == 1) {    
      let storage = localStorage.getItem('tab' + i);
      if (storage) {
        $(this).find('.js-tabs__switch').removeClass('active').eq(storage).addClass('active')
        .closest('.js-tabs').find('.js-tabs__content').removeClass('active').eq(storage).addClass('active');
      }
    }
	});
  $('.js-tabs').on('click', '.js-tabs__switch:not(.active)', function (e) {
    e.preventDefault();

    //remember scroll position
    let initialScrollPos = $(window).scrollTop();

    $(this)
    .addClass('active').siblings().removeClass('active')
    .closest('.js-tabs').find('.js-tabs__content').removeClass('active').eq($(this).index()).addClass('active');

    changecurrentRoomtypeByTab($(this));

    // prevent scroll jumping when tab change
    window.scrollTo(0, initialScrollPos);

    // save active tab in localStorage
    let tabsIndex = $('.js-tabs').index($(this).parents('.js-tabs'));
		localStorage.removeItem('tab' + tabsIndex);
    localStorage.setItem('tab' + tabsIndex, $(this).index());
  });

  // IF PAGE IS NOT RELOADED
  if (performance.navigation.type != 1) {
    // SET ACTIVE TAB BY PAGE HASH
    const pageHash = window.location.hash.replace("#", "");    
    // Roomtype
    $('.js-tabs__switch[data-number-type="' + pageHash +'"]').click();
    // Menu
    $('.js-tabs__switch[data-menu-type="' + pageHash +'"]').click();
  }
  if ($('.hotel-tabs-switches').length) {
    changecurrentRoomtypeByTab($('.hotel-tabs-switches .js-tabs__switch.active'));
  }
  // 
  // Tabs END
  // 

  calcHotels();

  // choose tariffs table cell
  $(".js-tar-table").on("click", ".js-tar-table-data", function() {
    let cell = $(this);
    let sum  = cell.data("price");
    let time = cell.data("time")
    let table = cell.closest(".js-tar-table");
    if (!cell.hasClass("active")) {
      table.data("sum", sum).attr("data-sum", sum);
      table.find(".js-tar-table-data").removeClass("active");
      cell.addClass("active");
      $('.js-booking select[name="booking-time-select"]').val(time).trigger('change');
    }
    else {
      table.data("sum", 0).attr("data-sum", 0);
      $('.js-booking select[name="booking-time-select"]').val("").trigger('change');
      cell.removeClass("active");
    }

    calcHotels(); 
  });

  
  // choose additional services table col
  $(".js-services-table").on("click", ".js-services-table-data", function() {
    let cell = $(this);
    let index = cell.index() - 1;
    let rp = cell.data("rp");
    let table  = cell.closest(".js-services-table");
    if (!cell.hasClass("active")) {
      table.find(".table__body .table__tr").each(function() {
        $(this).find(".js-services-table-data").removeClass("active")
        .eq(index).addClass("active");
      });
      let sum = table.find(".active").filter("[data-price]").attr("data-price");
      table.data("sum", sum).attr("data-sum", sum);
      $('.js-booking select[name="booking-rp-select"]').val(rp).trigger('change');
    }
    else {
      table.find(".js-services-table-data").removeClass("active");
      table.data("sum", 0).attr("data-sum", 0);
      $('.js-booking select[name="booking-rp-select"]').val("").trigger('change');
    }

    calcHotels();
  });

  $(".js-hotel-services-mobile").on("click", ".js-hotel-services-mobile-add-btn", function() {
    let btn = $(this);
    let rp = btn.data("rp");
    let sum = btn.data("price");
    let calcBlock = btn.closest(".js-calc-wrap");
    let table = calcBlock.find(".js-services-table");
    let btns = calcBlock.find(".js-hotel-services-mobile-add-btn");
    if (!btn.hasClass("active")) {
      btns.removeClass("active");
      btn.addClass("active");
      table.data("sum", sum).attr("data-sum", sum);
      $('.js-booking select[name="booking-rp-select"]').val(rp).trigger('change');
    }
    else {
      sum = 0
      btn.removeClass("active");
      table.data("sum", sum).attr("data-sum", sum);
      $('.js-booking select[name="booking-rp-select"]').val("").trigger('change');
    }

    calcHotels();
  });

  $(".js-hotel-services-mobile-btn, .js-hotel-services-mobile-arrow-btn").click(function() {
    
    let item = $(this).closest(".hotel-services-mobile__item");
    let btn = item.find(".hotel-services-mobile__btn");
    let content = item.find(".hotel-services-mobile__content");

    btn.toggleClass("active");
    content.slideToggle();
  });

  
});

function calcHotels() {
  $(".js-calc-wrap").each(function() {
    let calcBlock = $(this);
    
    let tarSum = parseInt(calcBlock.find(".js-tar-table").data("sum"), 10);
    let servicesSum = parseInt(calcBlock.find(".js-services-table").data("sum"), 10);
    let total = tarSum + servicesSum;
    let totalString = new Intl.NumberFormat('ru-RU').format(total);
    let totalBlock =  calcBlock.find(".js-hotel-sum");
    totalBlock.text(totalString);
  });
}