<?php namespace Serenity\Motel\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Reviews extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController' /*,    'Backend\Behaviors\ReorderController'   */ ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    /*public $reorderConfig = 'config_reorder.yaml';*/

    public $requiredPermissions = [
        'view_reviews_list'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Serenity.Motel', 'main-menu-reviews');
    }
}
