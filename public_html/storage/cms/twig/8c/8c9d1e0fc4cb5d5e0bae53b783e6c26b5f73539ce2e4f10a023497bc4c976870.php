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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/faq_list_on_main.htm */
class __TwigTemplate_997d8ed62020b86daad727e2c28c1bab19e148ca7d784a3779079170468e083e extends \Twig\Template
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
        echo "<div class=\"s-faq-prev section\">
          
          <div class=\"s-faq-prev__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\"></div>
          </div>
          
          <div class=\"s-faq-prev__container container\">
            <div class=\"s-faq-prev__title h2\">Часто задаваемые <br> вопросы</div>
            
            <div class=\"s-faq-prev__row row\">
              ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 12
            echo "              <div class=\"s-faq-prev__col col-md-4\">
                <div class=\"s-faq-prev__item\">
                  <div class=\"s-faq-prev__question h4\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 14), "html", null, true);
            echo "</div>
                  <div class=\"s-faq-prev__answer\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "answer", [], "any", false, false, false, 15), "html", null, true);
            echo "</div>
                </div>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "              
              
            </div>
            
            <div class=\"button-wrap\">
              <a href=\"/faq/\" class=\"s-faq-prev__btn button button_ghost button_medium\">Все вопросы</a>
            </div>
            
          </div> 
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/faq_list_on_main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  61 => 15,  57 => 14,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/faq_list_on_main.htm", "");
    }
}
