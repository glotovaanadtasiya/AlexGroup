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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/404.htm */
class __TwigTemplate_ff8f82f06c4b7889cc8eab86752f7ef59c030fbde3bc7f8bad3a6c892a664bec extends \Twig\Template
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

  ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "  
</head>

<body class=\"js-body\">
  
  <div class=\"darkcommontheme headertheme\">
    <div class=\"header-group\">
    
        <!-- Header -->
        ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "    
        
    </div>
  </div>
  
  
  
  
  
  <!-- Main content -->
  <main class=\"main\">
    <div class=\"darkcommontheme darkblurtheme\">
      <div class=\"s-error section\">
        
        <!-- Sky -->
        <div class=\"s-error__stars starry-sky-canvas\">
          <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"15\"></div>
        </div>
        <!-- /Sky -->
        <div class=\"s-error__container container\">
          <!-- Moon -->
          <div class=\"s-error__moon\">
            <div class=\"moon js-moon\">
              <div class=\"moon__inner moon__inner_bottom-right\">
                <img src=\"/themes/motel/assets/img/moon.svg\" alt=\"\" class=\"moon__image\">
              </div>
            </div>
          </div>
          <!-- /Moon -->
          
          <div class=\"s-error__box\">
            <div class=\"s-error__illustration\">
              <!-- Retina img -->
              <img src=\"/themes/motel/assets/img/error-illustration.png\" srcset=\"/themes/motel/assets/img/error-illustration@2x.png 2x, /themes/motel/assets/img/error-illustration@1.5x.png 1.5x\" alt=\"error image\" class=\"s-error__illustration-img\">
            </div>
            <div class=\"s-error__descr\">
              <div class=\"s-error__number\">404</div>
              <div class=\"s-error__text\">отказ оборудования</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- /Main content -->
  
  
  <!-- Footer -->
  ";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "  <!-- /Footer -->
  
  ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 69,  121 => 68,  117 => 66,  113 => 65,  59 => 16,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/404.htm", "");
    }
}
