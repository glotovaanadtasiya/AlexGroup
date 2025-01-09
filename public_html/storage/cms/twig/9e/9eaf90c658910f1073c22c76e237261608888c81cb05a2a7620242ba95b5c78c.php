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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/wedding.htm */
class __TwigTemplate_cce9a3a8efc281e43b31127e299dcc85011d91a79df576beae9ddaeec4c80b25 extends \Twig\Template
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
        echo "






";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "offer_items", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 9
            echo "
    
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "gallery", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 15
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "




";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "succes", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 23
            echo "
    
    
    
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
<!DOCTYPE html>
<html lang=\"ru\">

<head>
<meta charset=\"utf-8\">
  <!-- <base href=\"/\"> -->
  
  <title>Снять номер в мини отель на час с джакузи в Санкт-Петербурге </title>
  <meta name=\"description\" content=\"Мини отель на час в Санкт-Петербурге, Гостиница с почасовой оплатой, Снять номер на час в СПб, Апартаменты на час, Отель на час с джакузи в Питере Цена номера в отеле на час в любом районе Saint Petersburg 1900 руб за 12 часов забронировать по номеру  8 (812) 468-77-77\">
  <meta name=\"keywords\" content=\"Отель на час\">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"google-site-verification\" content=\"eIupZehJt_v6i1-Ze7VwR5x-DhtRdIP1Zz8jfpmnBfo\" />
  <meta name=\"yandex-verification\" content=\"399ee3ca9aaabaaf\" />
  <meta name=\"cmsmagazine\" content=\"368f23d768f15ec06b6bc7e64cf9a5b7\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  
  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#f5f5dc\">
  <!-- Custom Browsers Color End -->
  
  <meta name=\"apple-itunes-app\" content=\"app-id=1029435175\">
  <meta name=\"google-play-app\" content=\"app-id=com.wideweb.motelspb\">
  <link rel=\"stylesheet\" href=\"/themes/motel/assets/css/jquery.smartbanner.css\" type=\"text/css\" media=\"screen\">

  <meta name=\"cmsmagazine\" content=\"368f23d768f15ec06b6bc7e64cf9a5b7\" />
  
 <link rel=\"stylesheet\" href=\"/themes/motel/assets/css/main.min.css\" />
  <!-- <link rel=\"stylesheet\" href=\"/themes/motel/assets/css/light.css\" /> -->
 
";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/head-scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

</head>

<body class=\"js-body lighttheme\">
  
  <!-- Main content -->
  <main class=\"main animated-hearts-bg\" style=\"background: url(/i/hearts-bg.jpg);\">
  
  <style>

  .animated-hearts-bg\t{ 
  -webkit-animation: bg-scrolling 30s infinite; 
  -moz-animation:    bg-scrolling 30s infinite; 
  -o-animation:      bg-scrolling 30s infinite;
  animation:         bg-scrolling 30s infinite; 
  -webkit-animation-timing-function: linear;
  -moz-animation-timing-function:    linear;
  -o-animation-timing-function:      linear;
  animation-timing-function:         linear;
  }
  
  @keyframes bg-scrolling {
  0% { background-position: -1920px 1175px; }
\t}
  </style>
  
  <div class=\"darkcommontheme\">
    
    <div class=\"header-group\">
        <!-- Header -->
        ";
        // line 98
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 99
        echo "        <!-- /Header -->
        

    </div>
\t
\t<div class=\"container\" style=\"\">
\t\t\t<div style=\"text-align: center; z-index:9999;position: relative\"><img src=\"/i/rings.png\" style=\"margin-top: -5%; width: 15%; margin-bottom: -0%;\"></div>
\t\t</div>
\t
    <div class=\"photo-slider js-photo-slider owl-carousel\">

      ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 111
            echo "        <div class=\"photo-slider__item\">
          <img data-src=\"";
            // line 112
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["photo"], "photo", [], "any", false, false, false, 112)), 1920]);
            echo "\" alt=\"\" class=\"photo-slider__img owl-lazy\">
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
    </div>\t
        

\t

\t\t
\t\t<div class=\"container\" style=\"height: 0;\">
\t\t\t<div style=\"text-align: center; z-index:9999;position: relative\"><img src=\"/i/twohearts.png\" style=\"margin-top: -23%; width: 25%;\"></div>
\t\t</div>
        
        
        <div class=\"s-main-about section\">
          <div class=\"s-main-about__container container\">
            
            <div class=\"main-about\">
              <h1 class=\"main-about__title h1\">";
        // line 131
        echo twig_escape_filter($this->env, ($context["block1_text_1"] ?? null), "html", null, true);
        echo "</h1>
              <div class=\"main-about__subtitle h3\" style=\"max-width: 100%;\">";
        // line 132
        echo twig_escape_filter($this->env, ($context["block1_text_2"] ?? null), "html", null, true);
        echo "</div>
     
              

              ";
        // line 136
        echo twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "content", [], "any", false, false, false, 136);
        echo "
\t\t\t  
             <div class=\"main-about__subtitle h3\">";
        // line 138
        echo twig_escape_filter($this->env, ($context["block1_text_3"] ?? null), "html", null, true);
        echo "</div>\t\t\t  
              
            </div>
          </div>
        </div>
\t\t
\t\t
\t\t<!--
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
        </div>\t\t
\t\t-->
\t\t
\t\t
      </div>
    

    

    
    
  </main>
  <!-- /Main content -->
  
  
  <!-- Footer -->
  ";
        // line 194
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 195
        echo "  <!-- /Footer -->
  
  <!-- Modals -->
  <div class=\"modals hidden\">    
    
    ";
        // line 200
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/booking-popup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "   
  </div>
  <!-- /Modals -->  
  

  ";
        // line 205
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 206
        echo "  
  <script>
    \$('[name=\"hotel-select\"]').on('change', function(){
        \$.request('onChangeHotel', {data: {hotel_id: \$(this).find('option:selected').attr('hotelid')}})
    });
  </script>
  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/wedding.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 206,  327 => 205,  317 => 200,  310 => 195,  306 => 194,  247 => 138,  242 => 136,  235 => 132,  231 => 131,  213 => 115,  204 => 112,  201 => 111,  197 => 110,  184 => 99,  180 => 98,  144 => 67,  125 => 51,  121 => 50,  117 => 49,  95 => 29,  84 => 23,  80 => 22,  73 => 17,  66 => 15,  62 => 14,  59 => 13,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/wedding.htm", "");
    }
}
