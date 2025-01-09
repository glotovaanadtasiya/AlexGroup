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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/reviews.htm */
class __TwigTemplate_5c44c24930453f755b82e17d428780f317975140709fb8bd7b6b428d69537fcf extends \Twig\Template
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
  
  <title>Отзывы о сети отелей на час с джакузи Мотель СПБ</title>
  <meta name=\"description\" content=\"⭐⭐⭐⭐⭐5  на основе ‎326 голосов. Читать отзыв об отеле на час в Санкт-Петерберге: Очень хорошее отношение к гостям. После форс-мажора с коммунальными проблемами в отеле на Косыгина очень приятно было получить комплимент в виде бутылки шампанского (кстати, очень вкусного) и иметь личный разговор с представителем сети.\">
  <meta name=\"keywords\" content=\"отель на час спб отзывы\">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  
  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#1D1D1D\">
  <!-- Custom Browsers Color End -->
  
 <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.min.css");
        echo "\" />
 
";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/head-scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
  
</head>

<body class=\"js-body\">
  
  <!-- Main content -->
  <main class=\"main\">
  <div class=\"darkcommontheme darkblurtheme\">
    
    <div class=\"header-group\">
      <!-- Header -->
      ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "    
      <!-- /Header -->
    </div>
  
  
  
  
  
    <div class=\"s-feedback section\">

        <!-- Sky -->
        <div class=\"s-feedback__stars starry-sky-canvas\">
          <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"30\"></div>
        </div>
        <!-- /Sky -->
      <div class=\"s-feedback__content\">
        <div class=\"s-feedback__offer\">
          ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "        </div>
        <div class=\"s-feedback__container container\">
        
          ";
        // line 62
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 63
        echo "          
        </div>
      </div>
    </div>
</div>
  
    
  </main>
  <!-- /Main content -->
  
  <!-- Footer -->
  ";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "  <!-- /Footer -->
  
  
  
  
  
  ";
        // line 81
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 82
        echo "  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/reviews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 82,  154 => 81,  146 => 75,  142 => 74,  129 => 63,  127 => 62,  122 => 59,  118 => 58,  96 => 41,  79 => 29,  74 => 27,  64 => 20,  60 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/reviews.htm", "");
    }
}
