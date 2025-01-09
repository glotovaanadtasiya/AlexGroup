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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/discount.htm */
class __TwigTemplate_fa72d2f222aa8e8f38dcaf4f1a176aa739a63fa029ef8b4a935959b7633ad7da extends \Twig\Template
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





<!DOCTYPE html>
<html lang=\"ru\">

<head>
<meta charset=\"utf-8\">
  <!-- <base href=\"/\"> -->
  
  <title>Дисконтная система бронирования номеров в отеле на час СПБ </title>
  <meta name=\"description\" content=\"Скидки в отелях с джакзи с почасовой оплатой Санкт-Петербург до 20% цена со скидкой 1450 за 3 часа бронирования номера с джакузи в любом районе города. \">
  <meta name=\"keywords\" content=\"отель на час спб со скидкой \">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  
  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#1D1D1D\">
  <!-- Custom Browsers Color End -->
  
 <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.min.css");
        echo "\" />
 
 ";
        // line 34
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
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "    
        
    </div>
  </div>
  
  
  
  
  
  <!-- Main content -->
  <main class=\"main\">

    <div class=\"previw\" style=\"background-image: url(";
        // line 56
        echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["block1_img_title"] ?? null));
        echo ")\">
        <div class=\"previw__container container\">
          <div class=\"previw__box\">
            <span class=\"previw__headline\">Просто. Премиум</span>
            <div class=\"previw__subheading plaintext\">
                <p>";
        // line 61
        echo twig_escape_filter($this->env, ($context["block1_text_1"] ?? null), "html", null, true);
        echo "</p>
            </div>
            <div class=\"previw__discount-container\">
                ";
        // line 64
        echo ($context["block1_text_2"] ?? null);
        echo "
            </div>
            <a href=\"#\" class=\"previw__more\">
                <span class=\"previw__more-text\">Подробнее</span>
                <img src=\"/themes/motel/assets/img/more-arrow.svg\" alt=\"\" class=\"previw__more-img js-svg\">
            </a>
        </div>
      </div>
    </div>
    
    <div class=\"darkblurtheme darkcommontheme\">
    <div class=\"system section\">
      
        <!-- Sky -->
        <div class=\"system__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"30\"></div>
        </div>
        <!-- /Sky -->
        
        <div class=\"system__offer\">
          <div class=\"special-offer-outer js-special-offer-outer\">
            <div class=\"special-offer js-special-offer\">
              <div class=\"special-offer__icon-wrap\">
                <img src=\"/themes/motel/assets/img/flame.svg\"  class=\"special-offer__icon js-svg\" alt=\"\">
              </div>
              <div class=\"special-offer__content\">
                <div class=\"special-offer__title\">ТАРИФ «ВЫХОДНОЙ»</div>
                <div class=\"special-offer__txt\">
                  <p>12 часовое проживание</p>
                  <p>Действует в период с 11:00 СБ до 11:00 ПН. Бронирование осуществляется в день заезда или за день до него.</p>
                </div>
                <a href=\"#\" class=\"special-offer__link\">Подробнее <img src=\"/themes/motel/assets/img/arrow-right.svg\" class=\"special-offer__link-icon js-svg\" alt=\"\"></a>
              </div>
            </div>
          </div>
        </div>
        <div class=\"system__container container\">
            <h1 class=\"system__headline h1\">";
        // line 101
        echo twig_escape_filter($this->env, ($context["block2_title"] ?? null), "html", null, true);
        echo "</h1>
            <div class=\"system__information\">
                <div class=\"system__text plaintext\">
                    ";
        // line 104
        echo ($context["block2_text"] ?? null);
        echo "
                </div>
                <div class=\"system__img\" style=\"background-image: url(";
        // line 106
        echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["block2_img"] ?? null));
        echo ")\"></div>
            </div>
        </div>
    </div>
    </div>
    <div class=\"darktheme darkcommontheme\">
    <div class=\"conditions\">
        <div class=\"conditions__container container\">
            <div class=\"conditions__content\">
                <div class=\"conditions__headlines\">
                    <span class=\"conditions__headlines-desc\">Скидка</span>
                    <span class=\"conditions__headlines-cond\">Условия предоставления</span>
                </div>
                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "discountlist", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 120
            echo "<div class=\"conditions__item\">
                      <div class=\"conditions__discount\">";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fields"], "procent", [], "any", false, false, false, 121), "html", null, true);
            echo "</div>
                      <div class=\"conditions__cond\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fields"], "condition", [], "any", false, false, false, 122), "html", null, true);
            echo "</div>
                    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "            </div>
        </div>
    </div>
    </div>
  </main>
  <!-- /Main content -->

  
  
  <!-- Footer -->
  ";
        // line 135
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 136
        echo "  <!-- /Footer -->
  
  
  ";
        // line 139
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 140
        echo "  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/discount.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 140,  238 => 139,  233 => 136,  229 => 135,  217 => 125,  208 => 122,  204 => 121,  201 => 120,  197 => 119,  181 => 106,  176 => 104,  170 => 101,  130 => 64,  124 => 61,  116 => 56,  99 => 44,  84 => 34,  79 => 32,  69 => 25,  65 => 24,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/discount.htm", "");
    }
}
