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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/stocksList.htm */
class __TwigTemplate_9513340ccbd0cba491ceecaa0ebc9eaea963eef2aa4e30ef2489268768f052d0 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 2
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, $context["stock"], "active", [], "any", false, false, false, 2)) {
                // line 3
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["stock"], "favorite", [], "any", false, false, false, 3)) {
                    // line 4
                    echo "
        <a href=\"";
                    // line 5
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["stock"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 5)]);
                    echo "\" class=\"disc-prom__promo-cards-item\" style=\"background-image: url('";
                    echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stock"], "img_title", [], "any", false, false, false, 5), "path", [], "any", false, false, false, 5), 700]);
                    echo "')\">
            <div class=\"disc-prom__card-text-container\">
              <span class=\"disc-prom__card-headline h4\">";
                    // line 7
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "name", [], "any", false, false, false, 7), "html", null, true);
                    echo "</span>
              <span class=\"disc-prom__more\">
                  <span class=\"disc-prom__more-text\">Подробнее</span>
                  <img src=\"/themes/motel/assets/img/more-arrow.svg\" alt=\"\" class=\"disc-prom__more-img js-svg\">
              </span>
            </div>
        </a>
        ";
                } else {
                    // line 15
                    echo "        <div class=\"disc-prom__promo-cards-item disc-prom__card-offer\">
            <div class=\"disc-prom__offer-content\">
                <h3 class=\"disc-prom__offer-headline h3\">";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "name", [], "any", false, false, false, 17), "html", null, true);
                    echo "</h3>
                <div class=\"disc-prom__offer-sentence\">
                    ";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["stock"], "anons", [], "any", false, false, false, 19);
                    echo "
                </div>
                        
                <a href=\"/stocks/";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "slug", [], "any", false, false, false, 22), "html", null, true);
                    echo "\" class=\"disc-prom__more\">
                    <span class=\"disc-prom__more-text\">Подробнее</span>
                    <img src=\"/themes/motel/assets/img/more-arrow.svg\" alt=\"\" class=\"disc-prom__more-img js-svg\">
                </a>
            </div>
        </div>
        ";
                }
                // line 29
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/stocksList.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  83 => 22,  77 => 19,  72 => 17,  68 => 15,  57 => 7,  50 => 5,  47 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/stocksList.htm", "");
    }
}
