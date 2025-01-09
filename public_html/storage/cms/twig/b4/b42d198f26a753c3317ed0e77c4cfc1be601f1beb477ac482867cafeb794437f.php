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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/app.htm */
class __TwigTemplate_69f992a218f129178a77ac990e3fc38f22bb408df58f69d9f35926b7a33becc9 extends \Twig\Template
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
  
  <title>Скачать приложение по бронированию отелей Санкт-петербурга </title>
  <meta name=\"description\" content=\"Простое бронирование Онлайн, Система бронирования отелей онлайн Motelspb.com  Приложений для бронирования отелей в Санкт-Петербурге. Установи приложение MOTELSPB и получи бесплатно VIP карту\">
  <meta name=\"keywords\" content=\"приложение по бронированию отелей \">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  
  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#1D1D1D\">
  <!-- Custom Browsers Color End -->
  
 <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.min.css");
        echo "\" />
 
";
        // line 30
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
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "    
        
    </div>
  </div>
  
  
  <!-- Main content -->
  <main class=\"main\">
      <div class=\"darkcommontheme darkblurtheme\">
        <div class=\"section s-app\">        
          <!-- Sky -->
          <div class=\"s-app__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"20\"></div>
          </div>
          <!-- /Sky -->

          <!-- Flame offer block -->
          <div class=\"s-about-main__offer\">
          ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "          </div>
          <!-- /Flame offer block -->
          
          <div class=\"s-app__container container\">
            <h1 class=\"s-app__title h1\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 63), "title", [], "any", false, false, false, 63), "html", null, true);
        echo "</h1>
            
            <div class=\"s-app__box row\">
              <div class=\"s-app__box-col col-lg-7 col-md-6\">
                <div class=\"s-app__phone\">
                  <!-- Animated UFO -->
                  <div class=\"s-app__ufo\">
                    <canvas class=\"s-app__ufo-canvas js-ufo-canvas\"></canvas>
                  </div>
                  <!-- Retina img -->
                  <div class=\"s-app__phone-img-wrap\">
                    <img src=\"/themes/motel/assets/img/ufo.png\" srcset=\"/themes/motel/assets/img/ufo@2x.png 2x, /themes/motel/assets/img/ufo@1.5x.png 1.5x\" alt=\"\" class=\"s-app__phone-img\">
                  </div>
                </div>
              </div>
              <div class=\"s-app__box-col col-lg-5 col-md-6\">
                <div class=\"s-app__descr plaintext\">
                  <div class=\"s-app__text\">
                    ";
        // line 81
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 82
        echo "                  </div>
                  <div class=\"s-app__links\">
                    
\t\t\t\t\t<div class=\"s-app__links-item\">
                      <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["google_play"] ?? null), "html", null, true);
        echo "\" class=\"s-app__links-link\" target=\"_blank\" onclick=\"yaCounter23472043.reachGoal('googleplay'); ga('send', 'pageview','/googleplay'); fbq('track', 'googleplay'); return true;\">
                        <img src=\"/themes/motel/assets/img/google-play.svg\" alt=\"\" class=\"s-app__links-img\">
                      </a>
                    </div>
\t\t\t\t\t
                    <div class=\"s-app__links-item\">
                      <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["appstore"] ?? null), "html", null, true);
        echo "\" class=\"s-app__links-link\" target=\"_blank\" onclick=\"yaCounter23472043.reachGoal('iosappstore'); ga('send', 'pageview','/iosappstore'); fbq('track', 'iosappstore'); return true;\">
                        <img src=\"/themes/motel/assets/img/appstore.svg\" alt=\"\" class=\"s-app__links-img\">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
\t\t\t  
\t\t\t  <div style=\"text-align: center; font-size: 22px;width: 100%; margin: 70px auto 20px;\" class=\"hide-on-mobile\">
\t\t\t  <img src=\"/themes/motel/assets/img/qr-goapp.gif\" style=\"\"><br><br>
\t\t\t  Сканируйте и устанавливайте
\t\t\t  </div>
\t\t\t  <style>
\t\t\t\t@media (max-width: 800px) {.hide-on-mobile {display: none;}}
\t\t\t  </style>
\t\t\t  
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
        // line 121
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 122
        echo "  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/app.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 122,  203 => 121,  199 => 119,  195 => 118,  166 => 92,  157 => 86,  151 => 82,  149 => 81,  128 => 63,  122 => 59,  118 => 58,  95 => 40,  80 => 30,  75 => 28,  65 => 21,  61 => 20,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/app.htm", "");
    }
}
