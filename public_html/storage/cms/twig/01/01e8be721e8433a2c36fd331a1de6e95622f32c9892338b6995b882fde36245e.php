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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/head.htm */
class __TwigTemplate_1d404e22dba63679adf2c86fff5035d02e4d40cc392ea76c72f519dda61285c2 extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">

  <!-- <base href=\"/\"> -->
  
  <title>";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "meta_title", [], "any", false, false, false, 5)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "meta_title", [], "any", false, false, false, 5), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "meta_title", [], "any", false, false, false, 5)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "meta_title", [], "any", false, false, false, 5), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", false, false, false, 5)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        }
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "meta_description", [], "any", false, false, false, 6)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "meta_description", [], "any", false, false, false, 6)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        }
        echo "\">
  <meta name=\"keywords\" content=\"Отель на час\">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"cmsmagazine\" content=\"368f23d768f15ec06b6bc7e64cf9a5b7\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#1D1D1f\">
  <!-- Custom Browsers Color End -->
  
  <meta name=\"apple-itunes-app\" content=\"app-id=1029435175\">
  
  
 <link rel=\"stylesheet\" href=\"/themes/motel/assets/css/main.min.css\" />

 <?php if (!isset(\$_SERVER['HTTP_USER_AGENT']) || stripos(\$_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>
 
<meta name=\"yandex-verification\" content=\"399ee3ca9aaabaaf\" />

<meta name=\"google-site-verification\" content=\"eIupZehJt_v6i1-Ze7VwR5x-DhtRdIP1Zz8jfpmnBfo\" />

";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/head-scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

<?php endif; ?>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  77 => 17,  73 => 16,  69 => 15,  53 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/head.htm", "");
    }
}
