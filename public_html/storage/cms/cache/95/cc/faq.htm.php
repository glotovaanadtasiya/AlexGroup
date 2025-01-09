<?php 
class Cms65e600183c31f413676418_5b6d2e9112d1568a93a7afff1a69dc63Class extends Cms\Classes\PageCode
{
public function onLoadMore() {
    // получаем номер страницы
    $pageNumber = Input::get('page') + 1;
    // обращаемся к компоненту Posts с alias allPosts: 
    // выставляем номер страницы и готовим данные
    $this->components['faqList']->setProperty('pageNumber', $pageNumber);
    $this->components['faqList']->onRun();
    if ($pageNumber < $this->components['faqList']->records->lastPage()) {
        // для простоты мы генерируем html, но в принципе можно сделать и отдельный паршл для кнопки
        $more_link = '<div class="pagination__more-btn"><button class="pagination__more-btn-text" data-request="onLoadMore" data-request-data="page: ' . $pageNumber . '">ЕЩЕ</button></div>';
    } else {
        // если мы достигли последней страницы, кнопка больше не нужна
        $more_link = '';
    }
    return [
        // если перед селектором стоит @, новое содержимое будет добавляться в конец, а не заменять старое
        '@#all-posts-content' => $this->components['faqList']->renderPartial('blocks/faqListForeach.htm'),
        '#load-more-button' => $more_link,
    ];
}
}
