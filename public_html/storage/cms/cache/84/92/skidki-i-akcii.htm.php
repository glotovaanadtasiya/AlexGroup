<?php 
class Cms65e5c1e092d10309015166_d2d853caf1d41f846d6c8c4cd4f42578Class extends Cms\Classes\PageCode
{
public function onLoadMore() {
    // получаем номер страницы
    $pageNumber = Input::get('page') + 1;
    // обращаемся к компоненту Posts с alias allPosts: 
    // выставляем номер страницы и готовим данные
    $this->components['stocks']->setProperty('pageNumber', $pageNumber);
    $this->components['stocks']->onRun();
    if ($pageNumber < $this->components['stocks']->records->lastPage()) {
        // для простоты мы генерируем html, но в принципе можно сделать и отдельный паршл для кнопки
        $more_link = '<button class="disc-prom__more-btn" data-request="onLoadMore" data-request-data="page: ' . $pageNumber . '"><span class="pagination__more-btn-text">ЕЩЕ</span></button>';
    } else {
        // если мы достигли последней страницы, кнопка больше не нужна
        $more_link = '';
    }
    return [
        // если перед селектором стоит @, новое содержимое будет добавляться в конец, а не заменять старое
        
        '@#all-stocks-content' => $this->renderPartial('blocks/stocksList.htm', ['stocks' => $this->components['stocks']->records]),
        '#load-more-button' => $more_link,
    ];
}
}
