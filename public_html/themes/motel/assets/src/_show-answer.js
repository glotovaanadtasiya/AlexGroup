/* eslint-disable no-undef */
$(function() {
    var questions = document.querySelectorAll('.js-question__question-box');
    try {
        questions.forEach((item) => {
            item.addEventListener('click', () => {
                var questionsActive = document.querySelectorAll('.js-question__question-box.active');

                item.classList.contains('active') ? item.classList.remove('active') : item.classList.add('active');

                questionsActive.forEach(it => {
                    it.classList.remove('active')
                })
            });
        });
    }
    catch (err) {}

});