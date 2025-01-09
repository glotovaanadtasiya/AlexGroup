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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/menu/bottommenu.htm */
class __TwigTemplate_37a3cccfbbcb466546c3a575c4ba8bd87fdff4b9f12b37c0b3d6cc457cfadc58 extends \Twig\Template
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
        echo "<nav class=\"main-footer__nav footer-menu-nav col-md-8 col-lg-9 order-1 order-md-0\">
              <ul class=\"main-footer__menu footer-menu\">
              ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["bottomMenu"] ?? null), "menuItems", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "                
                ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 5)) {
                // line 6
                echo "                
                <li class=\"footer-menu__item\"><a href=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 7), "html", null, true);
                echo "/\" class=\"footer-menu__link\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 7), "html", null, true);
                echo "</a></li>
                
            \t";
            } else {
                // line 10
                echo "            \t
            \t<li class=\"footer-menu__item\"><a href=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 11), "html", null, true);
                echo "/\" class=\"footer-menu__link\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 11), "html", null, true);
                echo "</a></li>
            \t
                ";
            }
            // line 14
            echo "                
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "              </ul>
            </nav>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/menu/bottommenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  72 => 14,  64 => 11,  61 => 10,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/menu/bottommenu.htm", "");
    }
}
