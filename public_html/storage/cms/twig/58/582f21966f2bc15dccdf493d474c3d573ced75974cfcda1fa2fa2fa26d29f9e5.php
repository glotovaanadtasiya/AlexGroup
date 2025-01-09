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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/pages/news.htm */
class __TwigTemplate_57836df339ae463fc3fdf35fdd7e2578665d1c099ffc406a5759735813706a46 extends \Twig\Template
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
        $context["paginationEnabled"] = (((twig_get_attribute($this->env, $this->source,         // line 2
($context["news"] ?? null), "currentPage", [], "any", false, false, false, 2) > 1) || (twig_get_attribute($this->env, $this->source,         // line 3
($context["news"] ?? null), "lastPage", [], "any", false, false, false, 3) > 1)) || (twig_get_attribute($this->env, $this->source,         // line 4
($context["news"] ?? null), "lastPage", [], "any", false, false, false, 4) > twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "currentPage", [], "any", false, false, false, 4)));
        // line 6
        echo "
    ";
        // line 7
        if (($context["paginationEnabled"] ?? null)) {
            // line 8
            echo "    ";
            // line 9
            echo "    ";
            $context["n"] = 2;
            // line 10
            echo "
    ";
            // line 11
            $context["currentPageZeroBased"] = (twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "currentPage", [], "any", false, false, false, 11) - 1);
            // line 12
            echo "
    ";
            // line 13
            $context["pageLinks"] = [];
            // line 14
            echo "    ";
            $context["pageSet"] = [];
            // line 15
            echo "
    ";
            // line 16
            $context["startOffset"] = max((($context["currentPageZeroBased"] ?? null) - ($context["n"] ?? null)), 0);
            // line 17
            echo "    ";
            if ((((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1) > (twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "lastPage", [], "any", false, false, false, 17) - 1))) {
                // line 18
                echo "    ";
                $context["startOffset"] = max(((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "lastPage", [], "any", false, false, false, 18) - (2 * ($context["n"] ?? null))) - 1), 0);
                // line 19
                echo "    ";
            }
            // line 20
            echo "
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "lastPage", [], "any", false, false, false, 21)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                echo "    ";
                $context["pageLinks"] = twig_array_merge(($context["pageLinks"] ?? null), [0 => $context["page"]]);
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
    ";
            // line 25
            $context["activeBlock"] = twig_slice($this->env, ($context["pageLinks"] ?? null), ($context["startOffset"] ?? null), ((2 * ($context["n"] ?? null)) + 1));
            // line 26
            echo "
    ";
            // line 27
            if ((($context["startOffset"] ?? null) > 0)) {
                // line 28
                echo "    ";
                $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => 1]);
                // line 29
                echo "
    ";
                // line 30
                if ((($context["startOffset"] ?? null) > 1)) {
                    // line 31
                    echo "    ";
                    $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => "..."]);
                    // line 32
                    echo "    ";
                }
                // line 33
                echo "    ";
            }
            // line 34
            echo "
    ";
            // line 35
            $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), ($context["activeBlock"] ?? null));
            // line 36
            echo "
    ";
            // line 37
            $context["diffToEnd"] = (((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "lastPage", [], "any", false, false, false, 37) - 1) - ((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1)) + 1);
            // line 38
            echo "
    ";
            // line 39
            if ((($context["diffToEnd"] ?? null) > 0)) {
                // line 40
                echo "    ";
                if ((($context["diffToEnd"] ?? null) > 1)) {
                    // line 41
                    echo "    ";
                    $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => "..."]);
                    // line 42
                    echo "    ";
                }
                // line 43
                echo "
    ";
                // line 44
                $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "lastPage", [], "any", false, false, false, 44)]);
            }
        }
        // line 47
        echo "

<div class=\"news-prev-box\" id=\"all-posts-content\">
            ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/newsList"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "          </div>
          <div class=\"s-news-prev__pagination\">
            <div class=\"s-news-prev__pagination-row row\">
              <div class=\"col-xl-8 offset-xl-2\">
              ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "lastPage", [], "any", false, false, false, 55) > 1)) {
            // line 56
            echo "                <!-- Pagination -->
                <div class=\"pagination\">
                  <div class=\"pagination__container\">
                    <div class=\"pagination__box d-none d-md-flex\">
                      
                      <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "previousPageUrl", [], "any", false, false, false, 61), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "previousPageUrl", [], "any", false, false, false, 61) == false)) {
                echo "class=\"disabled\"";
            }
            echo ">
                        <div class=\"pagination__prev\">
                          <img src=\"/themes/motel/assets/img/pagination-arrow-prev.svg\" alt=\"\" class=\"pagination__arrow-prev js-svg\">
                          <span class=\"pagination__prev-text\">Предыдущая</span>
                        </div>
                      </a>
                      
                      <div class=\"pagination__numbers\">
                      ";
            // line 70
            echo "                      ";
            // line 73
            echo "                      
                      ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageSet"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 75
                echo "                        ";
                if (($context["page"] == "...")) {
                    // line 76
                    echo "                            <a>";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 78
                    echo "                        <a href=\"?page=";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "\" class=\"pagination__number-item ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "currentPage", [], "any", false, false, false, 78) == $context["page"])) {
                        echo "active";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                        ";
                }
                // line 80
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                      </div>
                      
                      
                      ";
            // line 84
            if (( !twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "nextPageUrl", [], "any", false, false, false, 84) == false)) {
                // line 85
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "nextPageUrl", [], "any", false, false, false, 85), "html", null, true);
                echo "\" >
                        <div class=\"pagination__next\">
                          <span class=\"pagination__next-text\">Следующая</span>
                          <img src=\"/themes/motel/assets/img/pagination-arrow-next.svg\" alt=\"\" class=\"pagination__arrow-next js-svg\">
                        </div>
                      </a>
\t\t\t\t\t  ";
            }
            // line 92
            echo "                      
                    </div>
                    <div id=\"load-more-button\">
                        <button class=\"pagination__more-btn d-md-none\" data-request=\"onLoadMore\" data-request-data=\"page: 1\">
                          <span class=\"pagination__more-btn-text\">
                            ЕЩЕ
                          </span>
                        </button>
                    </div>
                  </div>              
                </div>
                <!-- /Pagination -->
                ";
        }
        // line 105
        echo "              </div>
            </div>
          </div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/pages/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 105,  246 => 92,  235 => 85,  233 => 84,  228 => 81,  222 => 80,  210 => 78,  204 => 76,  201 => 75,  197 => 74,  194 => 73,  192 => 70,  177 => 61,  170 => 56,  168 => 55,  162 => 51,  158 => 50,  153 => 47,  149 => 44,  146 => 43,  143 => 42,  140 => 41,  137 => 40,  135 => 39,  132 => 38,  130 => 37,  127 => 36,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  111 => 30,  108 => 29,  105 => 28,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  89 => 23,  86 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  68 => 16,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  49 => 9,  47 => 8,  45 => 7,  42 => 6,  40 => 4,  39 => 3,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/pages/news.htm", "");
    }
}
