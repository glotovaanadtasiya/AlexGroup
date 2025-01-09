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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/news_slider.htm */
class __TwigTemplate_e6e69684ab7dd67144bffacee2d91cbf2f6cc9b8d3b07055063f4c95a1f316af extends \Twig\Template
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
        echo "<div class=\"s-news-prev section\">
        <div class=\"s-news-prev__container container\">
          
          <h2 class=\"s-news-prev__title h2\">Наши новости</h2>
          
          <div class=\"news-prev-carousel js-news-prev-carousel owl-carousel\">
          
          ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "           <div class=\"article-prev\">
              <!-- link -->
              <a href=\"/news/post/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 11), "html", null, true);
            echo "/\" class=\"article-prev__fill-link fill-link\"></a>
              <div class=\"article-prev__photo\">
                <!-- lazy load image -->
\t\t\t\t";
            // line 14
            $context["img_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "img_title", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14);
            // line 15
            echo "                <img class=\"article-prev__image owl-lazy\" data-src=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [($context["img_path"] ?? null), 292, 257]);
            echo "\" alt=\"\">
              </div>
              <div class=\"article-prev__descr\">
                <div class=\"article-prev__date\">";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 18), "d.m.Y"), "html", null, true);
            echo "</div>
                <div class=\"article-prev__title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
                <div class=\"article-prev__text\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["post"], "introtext", [], "any", false, false, false, 20);
            echo "</div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
          </div>
        </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/news_slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  77 => 20,  73 => 19,  69 => 18,  62 => 15,  60 => 14,  54 => 11,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/news_slider.htm", "");
    }
}
