<?php 
use Serenity\Motel\Models\NewsPost;class Cms65e5e0917408b892635200_49d13e59c817d2b8422df64e37784103Class extends Cms\Classes\PageCode
{

public function onInit()
{
    $post = NewsPost::where('slug', $this->param('slug'))->first();
    if(!$post)
        return $this->controller->run('404');
    
    $this['post'] = $post;
}
}
