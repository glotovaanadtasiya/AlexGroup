<?php 
use RainLab\Pages\Classes\Page;class Cms65e5b87538b67006161797_0ecafbf0512cd8ef50989d04521f1228Class extends Cms\Classes\PartialCode
{

public function onStart() {
    $this['mainpage'] = Page::loadCached($this->theme, 'index');
}
}
