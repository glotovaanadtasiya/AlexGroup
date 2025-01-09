<?php 
use Serenity\Motel\Models\NewsPost;class Cms65e5b35d9219c651088450_d76d1c9c4a055c0c96bff2482e8854f7Class extends Cms\Classes\PartialCode
{

public function onStart()
{
    $this['news'] = NewsPost::orderBy('created_at', 'desc')->take(10)->get();
}
}
