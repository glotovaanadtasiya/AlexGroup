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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/roomtypeselect.htm */
class __TwigTemplate_8b04cd85255b31e54f7441bc8d4d46e507f64a4d86a09c3a6780370ab4812e11 extends \Twig\Template
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
        echo "<option disabled selected hidden>Тип номера</option>
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 2)) {
            // line 3
            echo "<option value=\"lux\">Люкс</option>
";
        }
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_prop", [], "any", false, false, false, 5)) {
            // line 6
            echo "<option value=\"suite\">Полу-люкс</option>
";
        }
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 8)) {
            // line 9
            echo "<option value=\"standard\">Cтандарт</option>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/roomtypeselect.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  52 => 8,  48 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/roomtypeselect.htm", "");
    }
}
