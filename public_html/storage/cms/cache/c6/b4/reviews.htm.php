<?php 
use Serenity\Motel\Models\Hotel;use Serenity\Motel\Models\Review;class Cms65e5b3cc179ca159466255_d229f9d12cd2af9427e4e2462a082457Class extends Cms\Classes\PageCode
{


public function onStart()
{
    $this['get_hotel'] = $this->param('scope');
    $this['hotels'] = Hotel::all();
}
public function onLoadMore() {
    // получаем номер страницы
    $pageNumber = Input::get('page') + 1;
    // обращаемся к компоненту Posts с alias allPosts: 
    // выставляем номер страницы и готовим данные
    $this->components['reviewList']->setProperty('pageNumber', $pageNumber);
    $this->components['reviewList']->onRun();
    if ($pageNumber < $this->components['reviewList']->records->lastPage()) {
        // для простоты мы генерируем html, но в принципе можно сделать и отдельный паршл для кнопки
        $more_link = '<div class="pagination__more-btn"><button class="pagination__more-btn-text" data-request="onLoadMore" data-request-data="page: ' . $pageNumber . '">ЕЩЕ</button></div>';
    } else {
        // если мы достигли последней страницы, кнопка больше не нужна
        $more_link = '';
    }
    return [
        // если перед селектором стоит @, новое содержимое будет добавляться в конец, а не заменять старое
        
        '@#all-reviews-content' => $this->renderPartial('blocks/reviewsListItem.htm', ['reviews' => $this->components['reviewList']->records]),
        '#load-more-button' => $more_link,
    ];
}
public function onChooseHotel(){

}
}
