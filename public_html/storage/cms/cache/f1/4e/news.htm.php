<?php 
use Serenity\Motel\Models\NewsPost;class Cms65e5b3a059d14834286228_69ad557eff4c4f35db1fd993f304537fClass extends Cms\Classes\PageCode
{

public function onStart(){
    $this['news'] = NewsPost::orderBy('created_at', 'desc')->paginate(3);
    $this['domain'] = Request::root();
}
public function onLoadMore() {
    // получаем номер страницы
    $pageNumber = Input::get('page') + 1;
    // обращаемся к компоненту Posts с alias allPosts: 
    // выставляем номер страницы и готовим данные
    //$this['news']->setProperty('pageNumber', $pageNumber);
    $this['pageNumber'] = $pageNumber;
    $this['news']= NewsPost::paginate(3, $pageNumber);
    if ($pageNumber < $this['news']->lastPage()) {
        // для простоты мы генерируем html, но в принципе можно сделать и отдельный паршл для кнопки
        $more_link = '<button class="pagination__more-btn d-md-none" data-request="onLoadMore" data-request-data="page: ' . $pageNumber . '">
                          <span class="pagination__more-btn-text">
                            ЕЩЕ
                          </span>
                        </button>';
    } else {
        // если мы достигли последней страницы, кнопка больше не нужна
        $more_link = '';
    }
    return [
        // если перед селектором стоит @, новое содержимое будет добавляться в конец, а не заменять старое
        '@#all-posts-content' => $this->renderPartial('blocks/newsList.htm'),
        '#load-more-button' => $more_link,
    ];
}
}
