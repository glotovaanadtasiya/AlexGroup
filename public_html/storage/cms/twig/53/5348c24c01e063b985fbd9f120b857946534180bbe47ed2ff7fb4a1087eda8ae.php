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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/pages/article.htm */
class __TwigTemplate_385cb9c86eed025b0d093037d9d3e231984e050b7c2e4320871b03f63e80ba26 extends \Twig\Template
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
        $context["mnths"] = [0 => "", 1 => "января", 2 => "февраля", 3 => "марта", 4 => "апреля", 5 => "мая", 6 => "июня", 7 => "июля", 8 => "августа", 9 => "сентября", 10 => "октября", 11 => "ноября", 12 => "декабря"];
        // line 2
        echo "
<h1 class=\"a-news__title h5\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "</h1>
        <div class=\"a-news__date\">
          ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 5), "j"), "html", null, true);
        echo " 
          ";
        // line 6
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["mnths"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 6), "n")] ?? null) : null), "html", null, true);
        echo " 
          ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 7), "Y"), "html", null, true);
        echo "
        </div>
        <div class=\"a-news__photo\">
          <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "img_title", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"\" class=\"a-news__photo-inner img-responsive\">
        </div>
        <div class=\"a-news__text plaintext\">
          ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 13);
        echo "
        </div>
\t\t

\t\t     ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "slider", [], "any", false, false, false, 17) == true)) {
            // line 18
            echo "                <div class=\"s-stock-info__carousel\">
                  <div class=\"rooms-carousel\">
                    <div class=\"rooms-carousel__container container\">
                      <div class=\"rooms-carousel__inner js-rooms-carousel owl-carousel\">
                       ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "slider", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 23
                echo "                          <div class=\"rooms-carousel__item\">
                            <div class=\"rooms-carousel__photo\">
                              <img src=\"";
                // line 25
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["slide"], "img", [], "any", false, false, false, 25));
                echo "\" alt=\"\" class=\"rooms-carousel__img\">
                            </div>
                            <div class=\"rooms-carousel__title\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["slide"], "text", [], "any", false, false, false, 27);
                echo "</div>
                          </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                      </div>
                    </div>
                  </div>
                </div>
             ";
        }
        // line 35
        echo "\t\t\t 
        

        <div class=\"a-news__pagination\">
          <!-- Pagination -->
          <div class=\"pagination\">
            <div class=\"pagination__container\">
              <div class=\"pagination__box\">
                <a href=\"/news/post/";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nextPost", [], "any", false, false, false, 43), "slug", [], "any", false, false, false, 43), "html", null, true);
        echo "/\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nextPost", [], "any", false, false, false, 43), "slug", [], "any", false, false, false, 43) == false)) {
            echo "class=\"disabled\"";
        }
        echo ">
                  <div class=\"pagination__prev\">
                    <img src=\"/themes/motel/assets/img/pagination-arrow-prev.svg\" alt=\"\" class=\"pagination__arrow-prev js-svg\">
                    <span class=\"pagination__prev-text\">Предыдущая</span>
                  </div>
                </a>    
                <div class=\"pagination__numbers\">
                </div>
\t\t\t\t";
        // line 51
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "previousPost", [], "any", false, false, false, 51), "slug", [], "any", false, false, false, 51) == false)) {
            // line 52
            echo "                <a href=\"/news/post/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "previousPost", [], "any", false, false, false, 52), "slug", [], "any", false, false, false, 52), "html", null, true);
            echo "/\" >
                  <div class=\"pagination__next\">
                    <span class=\"pagination__next-text\">Следующая</span>
                    <img src=\"/themes/motel/assets/img/pagination-arrow-next.svg\" alt=\"\" class=\"pagination__arrow-next js-svg\">
                  </div>
                </a>
\t\t\t\t";
        }
        // line 59
        echo "              </div>
            </div>              
          </div>
          <!-- /Pagination -->
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/pages/article.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 59,  138 => 52,  136 => 51,  121 => 43,  111 => 35,  104 => 30,  95 => 27,  90 => 25,  86 => 23,  82 => 22,  76 => 18,  74 => 17,  67 => 13,  61 => 10,  55 => 7,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/pages/article.htm", "");
    }
}
