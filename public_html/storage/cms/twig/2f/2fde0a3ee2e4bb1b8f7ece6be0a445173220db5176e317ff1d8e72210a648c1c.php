<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/program.htm */
class __TwigTemplate_4bc1355ce3e5f98ae5b3d4a1557b922d44e7e90093d71b7125a25c11c25f3099 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>
<meta charset=\"utf-8\">
  <!-- <base href=\"/\"> -->
  
  <title>Романтические пакеты от сети почасовых отелей Санкт-Петербурга</title>
  <meta name=\"description\" content=\"Отели, квартиры, апартаменты на час в Санкт-Петербурге. Если Вы хотите снять квартиру, комнату или номер с почасовой оплатой, то Вам сюда!\">
  <meta name=\"keywords\" content=\"Романтика в отеле на час \">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  
  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#1D1D1D\">
  <!-- Custom Browsers Color End -->
  
 <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.min.css");
        echo "\" />
 
";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/head-scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

</head>

<body class=\"js-body\">
  
  
  <div class=\"darkcommontheme headertheme\">
    <div class=\"header-group\">
    
        <!-- Header -->
        ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "    
        
    </div>
  </div>
  
  
  
  
  
  <!-- Main content -->
  <main class=\"main\">
    <div class=\"darkcommontheme darktheme\">
      <div class=\"s-program\">
        
        <!-- Flame offer block (mobile cloned) -->
        <div class=\"s-program__offer js-cloned-offer d-block d-md-none\">
          
        </div>
        <!-- /Flame offer block (mobile cloned) -->
        <div class=\"s-program__container container\">
          <div class=\"s-program__box\">
            <div class=\"program-item\">
              <img src=\"/themes/motel/assets/img/program1_1.jpg\" alt=\"\" class=\"program-item__img\">
              <div class=\"program-item__darken\"></div>
              <div class=\"program-item__content\">
                <div class=\"program-item__title h4\">
                  Номер люкс с джакузи
                </div>
                <div class=\"program-item__details\">
                  <span class=\"program-item__details-text\">Подробнее</span>
                  <img src=\"/themes/motel/assets/img/arrow-right.svg\" class=\"program-item__details-arrow js-svg\" alt=\"\">
                </div>
              </div>
              <a href=\"https://alexhotels.ru/specs/5060/\" class=\"program-item__fill-link fill-link\"></a>
            </div>
            
            <div class=\"program-item\">
              <img src=\"/themes/motel/assets/img/program2.jpg\" alt=\"\" class=\"program-item__img\">
              <div class=\"program-item__darken\"></div>
              <div class=\"program-item__content\">
                <div class=\"program-item__title h4\">
                  Премиум-автомобиль + отель
                </div>
                <div class=\"program-item__details\">
                  <span class=\"program-item__details-text\">Подробнее</span>
                  <img src=\"/themes/motel/assets/img/arrow-right.svg\" class=\"program-item__details-arrow js-svg\" alt=\"\">
                </div>
              </div>
              <a href=\"https://alexhotels.ru/specs/2562\" class=\"program-item__fill-link fill-link\"></a>
            </div>
          </div>
        </div>
      </div>
      
      <div class=\"s-program-couple section\">
        
        
        <!-- Flame offer block (desktop) -->
        <div class=\"s-program-couple__offer js-special-offer-outer-clone d-none d-md-block\">
          ";
        // line 98
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 99
        echo "        </div>
        <!-- /Flame offer block (desktop) -->
        
        <div class=\"s-program-couple__container container\">
          <h1 class=\"s-program-couple__title h1\">Для молодоженов</h1>
          <div class=\"s-program-couple__text plaintext\">
              В наших отелях вы можете провести брачную ночь в романтической обстановке номера люкс с джакузи. А также у вас есть возможность совершить прогулку по городу на автомобиле премиум класса.
          </div>
          <div class=\"s-program-couple__btn-wrap button-wrap\">
            <a href=\"/hotels\" class=\"s-program-couple__btn button button_ghost\">Выбрать отель</a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- /Main content -->
  
  
  <!-- Footer -->
  ";
        // line 118
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 119
        echo "  <!-- /Footer -->
  
  
  
  
  
  ";
        // line 125
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 126
        echo "  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/program.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 126,  195 => 125,  187 => 119,  183 => 118,  162 => 99,  158 => 98,  94 => 39,  78 => 28,  73 => 26,  63 => 19,  59 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/program.htm", "");
    }
}
