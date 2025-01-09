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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/visa.htm */
class __TwigTemplate_7a028bdf18e514c49427a3a16e89e237cbe8225f599e6b064bb08da83c3037fd extends \Twig\Template
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
  
  <title>МотельСПБ - Сеть Мини-Отелей во всех районах в Санкт-Петербурге </title>
  <meta name=\"description\" content=\"Сеть мини отелей с джакузи на час в Питере с единой службой бронирования номеров по часово по телефону 8 (812) 468-77-77 цены от 640 за час \">
  <meta name=\"keywords\" content=\"Сеть отелей с часовой оплатой в спб \">    
  
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
            <!-- /Header -->

        </div>
    </div>


<!-- Main content -->
<main class=\"main\">
    



  <div class=\"darktheme darkcommontheme\">
    <div class=\"s-contacts-descr section\">
      <div class=\"s-contacts-descr__container container\">
        <h1 class=\"s-contacts-descr__title h2\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 54), "html", null, true);
        echo "</h1>
        <div class=\"s-contacts-descr__text plaintext\">
            ";
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "content", [], "any", false, false, false, 56);
        echo "
        </div>      
\t\t
\t
\t\t</div>
    </div>
  </div>
</main>
<!-- /Main content -->


<!-- Footer -->
";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "<!-- /Footer -->



";
        // line 73
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 74
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
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/visa.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 74,  144 => 73,  138 => 69,  134 => 68,  119 => 56,  114 => 54,  93 => 38,  78 => 28,  73 => 26,  63 => 19,  59 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/visa.htm", "");
    }
}
