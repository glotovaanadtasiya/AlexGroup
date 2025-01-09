<?php namespace Serenity\Motel;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Serenity\Motel\Components\ReviewList' => 'reviewList'
        ];
    }

    public function registerSettings()
    {
    }
}
