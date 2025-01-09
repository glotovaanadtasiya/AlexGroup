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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/hotelCardContacts.htm */
class __TwigTemplate_18ffa3892ea85284f7e937a0931262a6ca9de3314f10e770c06eec9c3d9f6e43 extends \Twig\Template
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
        echo "<div>
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "new", [], "any", false, false, false, 2)) {
            // line 3
            echo "<div class=\"beidj-new\">new</div>
";
        }
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "low_price", [], "any", false, false, false, 5)) {
            // line 6
            echo "<div class=\"beidj-lowprice\">цены снижены</div>
";
        }
        // line 8
        echo "
<a href=\"/hotels/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 9), "html", null, true);
        echo "/\" class=\"contact-hotelname\">";
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "full_name", [], "any", false, false, false, 9)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "full_name", [], "any", false, false, false, 9), "html", null, true);
        } else {
            echo "Отель ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        }
        echo "</a>

<div class=\"map-card__metro\">
                    
                    ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 13) == 1)) {
            // line 14
            echo "                        ";
            $context["metro_color"] = "metro-icon_red";
            // line 15
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 15) == 2)) {
            // line 16
            echo "                        ";
            $context["metro_color"] = "metro-icon_blue";
            // line 17
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 17) == 3)) {
            // line 18
            echo "                        ";
            $context["metro_color"] = "metro-icon_green";
            // line 19
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 19) == 4)) {
            // line 20
            echo "                        ";
            $context["metro_color"] = "metro-icon_orange";
            // line 21
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 21) == 5)) {
            // line 22
            echo "                        ";
            $context["metro_color"] = "metro-icon_purple";
            // line 23
            echo "                    ";
        }
        // line 24
        echo "                    <img src=\"/themes/motel/assets/img/metro.svg\" alt=\"metro sign\" class=\"map-card__metro-icon metro-icon ";
        echo twig_escape_filter($this->env, ($context["metro_color"] ?? null), "html", null, true);
        echo " js-svg\">
\t\t\t\t\t<span class=\"map-card__metro-name\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro", [], "any", false, false, false, 25), "html", null, true);
        echo "</span>
</div>

<div class=\"hotel-card__address\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "address", [], "any", false, false, false, 28), "html", null, true);
        echo "</div>

<!--<a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"hotel-card__phone\">+7-812-468-77-77</a>-->

";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "yandex_map_link", [], "any", false, false, false, 32)) {
            // line 33
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "yandex_map_link", [], "any", false, false, false, 33), "html", null, true);
            echo "\">на Яндекс картах →</a><br>
";
        } else {
            // line 34
            echo "<br>
";
        }
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "google_map_link", [], "any", false, false, false, 36)) {
            // line 37
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "google_map_link", [], "any", false, false, false, 37), "html", null, true);
            echo "\">на Google картах →</a>
";
        }
        // line 39
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/hotelCardContacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 39,  133 => 37,  131 => 36,  127 => 34,  121 => 33,  119 => 32,  112 => 28,  106 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  69 => 13,  55 => 9,  52 => 8,  48 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/hotelCardContacts.htm", "");
    }
}
