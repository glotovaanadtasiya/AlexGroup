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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/reviewsListItem.htm */
class __TwigTemplate_6962a072515a9fdb7ee71e3177fa7d481c9b8cfdbceb0924688a20caa3659e45 extends \Twig\Template
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
        echo "<div class=\"s-feedback__items\">
          
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 4
            echo "\t<div class=\"feedback-item\">
\t\t<div class=\"h4\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 5), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "hotel", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5)) {
                echo "— про отель ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "hotel", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
            }
            echo "</div>
\t\t<!--div class=\"feedback-item__date\">
                ";
            // line 7
            $context["mnths"] = [0 => "", 1 => "января", 2 => "февраля", 3 => "марта", 4 => "апреля", 5 => "мая", 6 => "июня", 7 => "июля", 8 => "августа", 9 => "сентября", 10 => "октября", 11 => "ноября", 12 => "декабря"];
            // line 8
            echo "                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "created_at", [], "any", false, false, false, 8), "j"), "html", null, true);
            echo " 
                ";
            // line 9
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["mnths"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "created_at", [], "any", false, false, false, 9), "n")] ?? null) : null), "html", null, true);
            echo " 
                ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "created_at", [], "any", false, false, false, 10), "Y"), "html", null, true);
            echo "
\t\t</div-->
\t\t<br/>

\t\t<div class=\"plaintext\">
                    ";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 15);
            echo "
\t\t</div>
\t</div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/reviewsListItem.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  77 => 15,  69 => 10,  65 => 9,  60 => 8,  58 => 7,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/reviewsListItem.htm", "");
    }
}
