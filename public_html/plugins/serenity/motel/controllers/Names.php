<?php namespace Serenity\Motel\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Names extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend.Behaviors.ImportExportController',
    ];
    
    public $listConfig = 'config_list.yaml';
    public $importExportConfig  = 'config_import_export.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'view_names_list' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Serenity.Motel', 'main-menu-names');
    }
}
