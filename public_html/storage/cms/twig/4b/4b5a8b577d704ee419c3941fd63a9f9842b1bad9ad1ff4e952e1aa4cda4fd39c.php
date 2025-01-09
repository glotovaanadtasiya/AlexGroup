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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/reviews_slider.htm */
class __TwigTemplate_f5fc2cd2bd270324e42cf94c20863e4b734434a54e6ca0b6eaea9c407dff8a2a extends \Twig\Template
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
        echo "<div class=\"darkcommontheme darktheme\">
      <div class=\"s-reviews section\">
        <div class=\"s-reviews__container container\">
          <div class=\"s-reviews__title h2\">О нас говорят</div>
          <div class=\"s-reviews__carousel-wrap\">
            <div class=\"reviews-carousel owl-carousel js-reviews-carousel\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 8
            echo "                <div class=\"reviews-carousel__item\">
                    <blockquote class=\"reviews-carousel__content\">
                        <img src=\"/themes/motel/assets/img/quote.svg\" alt=\"\" class=\"reviews-carousel__quotes\">
                        <div>";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 11);
            echo "</div>
                    </blockquote>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </div>
          </div>
          
          <div class=\"button-wrap\">
            <a href=\"/reviews/\" class=\"s-reviews__btn button button_ghost button_medium\">Смотреть все отзывы</a>
          </div>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/reviews_slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  54 => 11,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/reviews_slider.htm", "");
    }
}
