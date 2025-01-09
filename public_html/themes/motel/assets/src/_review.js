/* eslint-disable no-undef */
$(function() {
  $(".js-feedback-item__btn").click(function() {
    const item = $(this).closest(".feedback-item");
    const text = item.find(".js-feedback-item__text");
    const btn = item.find(".js-feedback-item__btn");

    text.toggleClass("active");
    btn.toggleClass("active");
  });
  
});