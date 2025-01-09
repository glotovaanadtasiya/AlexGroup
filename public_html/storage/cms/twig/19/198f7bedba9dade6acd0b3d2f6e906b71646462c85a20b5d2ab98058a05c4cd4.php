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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/menu/topmenu.htm */
class __TwigTemplate_131b768af9ad95a1a6748cffce8560df86de46d5302fa757aa074b7222ddd7fc extends \Twig\Template
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
        echo "<ul class=\"main-menu js-main-menu\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["topMenu"] ?? null), "menuItems", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "    
    ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 4)) {
                // line 5
                echo "    
    <li class=\"main-menu__item\">
        <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 7), "html", null, true);
                echo "\" class=\"main-menu__link\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 7), "html", null, true);
                echo "</a>
        
        ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "            <ul>
            ";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 12
                        echo "            <li ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "viewBag", [], "any", false, false, false, 12), "cssClass", [], "any", false, false, false, 12)) {
                            echo "class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "viewBag", [], "any", false, false, false, 12), "cssClass", [], "any", false, false, false, 12), "html", null, true);
                            echo "\"";
                        }
                        echo "><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "url", [], "any", false, false, false, 12), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "title", [], "any", false, false, false, 12), "html", null, true);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "            </ul>
        ";
                }
                // line 16
                echo "        
    </li>
    
\t";
            } else {
                // line 20
                echo "\t
\t<li class=\"main-menu__item\">
\t    <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 22), "html", null, true);
                echo "\" class=\"main-menu__link\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</a>
\t    
\t    ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "            <ul>
            ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 27
                        echo "\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "viewBag", [], "any", false, false, false, 27), "isHidden", [], "any", false, false, false, 27) == 0)) {
                            echo "<li ";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "viewBag", [], "any", false, false, false, 27), "cssClass", [], "any", false, false, false, 27)) {
                                echo "class=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "viewBag", [], "any", false, false, false, 27), "cssClass", [], "any", false, false, false, 27), "html", null, true);
                                echo "\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "url", [], "any", false, false, false, 27), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "title", [], "any", false, false, false, 27), "html", null, true);
                            echo "</a></li>";
                        }
                        // line 28
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "            </ul>
        ";
                }
                // line 31
                echo "        
\t</li>
\t
    ";
            }
            // line 35
            echo "    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/menu/topmenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 37,  147 => 35,  141 => 31,  137 => 29,  131 => 28,  116 => 27,  112 => 26,  109 => 25,  107 => 24,  100 => 22,  96 => 20,  90 => 16,  86 => 14,  69 => 12,  65 => 11,  62 => 10,  60 => 9,  53 => 7,  49 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/menu/topmenu.htm", "");
    }
}
