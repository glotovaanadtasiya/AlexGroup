<?php 
use RainLab\Pages\Classes\Page;class Cms65e5b35d87ae0450329703_e2e23bc686853c8e5347d63b5ef55f29Class extends Cms\Classes\PartialCode
{

public function onStart() {
    $this['mainpage'] = Page::loadCached($this->theme, 'index');
}
}
