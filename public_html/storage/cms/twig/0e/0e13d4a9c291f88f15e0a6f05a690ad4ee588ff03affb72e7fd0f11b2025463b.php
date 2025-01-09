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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/stock.htm */
class __TwigTemplate_3f916c429fc4f7894223fc489087730c156ac2c368249a734e2af0bd0ef87128 extends \Twig\Template
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
  
  <title>Акции и специальные предложения на бронирование гостиниц и мини-отелей на час Петербурга.</title>
  <meta name=\"description\" content=\"Скидки в отелях Санкт-Петербурга. Отели на час с широким выбором акций и специальных предложений на аренду и бронирование номеров с джакузи по всему городу.\">
  <meta name=\"keywords\" content=\"акции в отелях на час\">    
  
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
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "    
        
    </div>
  </div>

  
  <!-- Main content -->
  <main class=\"main\">
    <div class=\"darkcommontheme darktheme\">
      <div class=\"s-stock-top section\" style=\"background-image: url(";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["stock"] ?? null), "img_title", [], "any", false, false, false, 47), "path", [], "any", false, false, false, 47), "html", null, true);
        echo ")\">
        <div class=\"s-stock-top__container container\">
          <div class=\"s-stock-top__box\">
            <h1 class=\"s-stock-top__title h1\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stock"] ?? null), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "</h1>
          </div>
        </div>
      </div>
      <div class=\"section s-stock-info\">       
        
        <!-- Flame offer block (desktop) -->
        <div class=\"s-stock-info__offer\">
          ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "        </div>
        <!-- /Flame offer block (desktop) -->
        <div class=\"container container_narrow\">
          <div class=\"s-stock-info__text plaintext\">
          ";
        // line 63
        echo twig_get_attribute($this->env, $this->source, ($context["stock"] ?? null), "content", [], "any", false, false, false, 63);
        echo "
          </div>

            ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, ($context["stock"] ?? null), "view_add_service", [], "any", false, false, false, 66) == true)) {
            // line 67
            echo "            <div class=\"s-stock-info__title h4\">Дополнительные услуги</div>
            ";
            // line 68
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['services'] = ($context["services"] ?? null)            ;
            $context['__cms_partial_params']['offers'] = ($context["offers"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/additional_services_table"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 69
            echo "            ";
        }
        // line 70
        echo "            
            </div>
            
            ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["stock"] ?? null), "slider", [], "any", false, false, false, 73) == true)) {
            // line 74
            echo "                <!-- Rooms Carousel -->
                <div class=\"s-stock-info__carousel\">
                  <div class=\"rooms-carousel\">
                    <div class=\"rooms-carousel__container container\">
                      <div class=\"rooms-carousel__inner js-rooms-carousel owl-carousel\">
                       ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stock"] ?? null), "slider", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 80
                echo "                          <div class=\"rooms-carousel__item\">
                            <div class=\"rooms-carousel__photo\">
                              <img src=\"";
                // line 82
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["slide"], "img", [], "any", false, false, false, 82));
                echo "\" alt=\"\" class=\"rooms-carousel__img\">
                            </div>
                            <div class=\"rooms-carousel__title\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["slide"], "text", [], "any", false, false, false, 84);
                echo "</div>
                          </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Rooms Carousel -->
             ";
        }
        // line 93
        echo "
            <div class=\"container\">

              <div class=\"s-stock-info__btn-wrap button-wrap\">
                <a href=\"/hotels/\" class=\"s-stock-info__choose-btn button button_ghost\">Выбрать отель</a>
              </div>
            </div>

      </div>
    </div>

  </main>
  <!-- /Main content -->
  
  
  <!-- Footer -->
  ";
        // line 109
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "  <!-- /Footer -->

  
  ";
        // line 113
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 114
        echo "  
  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/stock.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 114,  225 => 113,  220 => 110,  216 => 109,  198 => 93,  190 => 87,  181 => 84,  176 => 82,  172 => 80,  168 => 79,  161 => 74,  159 => 73,  154 => 70,  151 => 69,  145 => 68,  142 => 67,  140 => 66,  134 => 63,  128 => 59,  124 => 58,  113 => 50,  107 => 47,  93 => 38,  78 => 28,  73 => 26,  63 => 19,  59 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/stock.htm", "");
    }
}
