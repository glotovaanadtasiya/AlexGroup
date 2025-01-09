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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/newsList.htm */
class __TwigTemplate_3cf2b2b5468d0ebade14dee7773cbc8ec5e9eaaef2937c9be03614ea233cd484 extends \Twig\Template
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
        $context["records"] = ($context["news"] ?? null);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
";
        // line 8
        $context["mnths"] = [0 => "", 1 => "января", 2 => "февраля", 3 => "марта", 4 => "апреля", 5 => "мая", 6 => "июня", 7 => "июля", 8 => "августа", 9 => "сентября", 10 => "октября", 11 => "ноября", 12 => "декабря"];
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "    <div class=\"article-prev\">
    ";
            // line 12
            ob_start(function () { return ''; });
            // line 13
            echo "        <a href=\"/news/post/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 13), "html", null, true);
            echo "/\" class=\"article-prev__fill-link fill-link\"></a>
        <div class=\"article-prev__photo\">
            <img class=\"article-prev__image\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "img_title", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), "html", null, true);
            echo "\" alt=\"\">
        </div>
        <div class=\"article-prev__descr\">
        <div class=\"article-prev__date\">
          ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, false, 19), "j"), "html", null, true);
            echo " 
          ";
            // line 20
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["mnths"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, false, 20), "n")] ?? null) : null), "html", null, true);
            echo " 
          ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, false, 21), "Y"), "html", null, true);
            echo "
        </div>
        <div class=\"article-prev__title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
            <div class=\"article-prev__text\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["record"], "introtext", [], "any", false, false, false, 24);
            echo "</div>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 27
            echo "    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "    <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/newsList.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  103 => 27,  97 => 24,  93 => 23,  88 => 21,  84 => 20,  80 => 19,  73 => 15,  67 => 13,  65 => 12,  62 => 11,  57 => 10,  54 => 9,  52 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/newsList.htm", "");
    }
}
