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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/pages/skidki-i-akcii.htm */
class __TwigTemplate_4cf966eab3b16c96c657cf732b40319862ca7257796947d2fe3ee8d13a92163c extends \Twig\Template
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
        $context["stocks"] = twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context["paginationEnabled"] = (((twig_get_attribute($this->env, $this->source,         // line 4
($context["stocks"] ?? null), "currentPage", [], "any", false, false, false, 4) > 1) || (twig_get_attribute($this->env, $this->source,         // line 5
($context["stocks"] ?? null), "lastPage", [], "any", false, false, false, 5) > 1)) || (twig_get_attribute($this->env, $this->source,         // line 6
($context["stocks"] ?? null), "lastPage", [], "any", false, false, false, 6) > twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "currentPage", [], "any", false, false, false, 6)));
        // line 8
        echo "
    ";
        // line 9
        if (($context["paginationEnabled"] ?? null)) {
            // line 10
            echo "        ";
            // line 11
            echo "        ";
            $context["n"] = 2;
            // line 12
            echo "    
        ";
            // line 13
            $context["currentPageZeroBased"] = (twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "currentPage", [], "any", false, false, false, 13) - 1);
            // line 14
            echo "    
        ";
            // line 15
            $context["pageLinks"] = [];
            // line 16
            echo "        ";
            $context["pageSet"] = [];
            // line 17
            echo "    
        ";
            // line 18
            $context["startOffset"] = max((($context["currentPageZeroBased"] ?? null) - ($context["n"] ?? null)), 0);
            // line 19
            echo "        ";
            if ((((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1) > (twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "lastPage", [], "any", false, false, false, 19) - 1))) {
                // line 20
                echo "        ";
                $context["startOffset"] = max(((twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "lastPage", [], "any", false, false, false, 20) - (2 * ($context["n"] ?? null))) - 1), 0);
                // line 21
                echo "        ";
            }
            // line 22
            echo "    
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "lastPage", [], "any", false, false, false, 23)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 24
                echo "        ";
                $context["pageLinks"] = twig_array_merge(($context["pageLinks"] ?? null), [0 => $context["page"]]);
                // line 25
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    
        ";
            // line 27
            $context["activeBlock"] = twig_slice($this->env, ($context["pageLinks"] ?? null), ($context["startOffset"] ?? null), ((2 * ($context["n"] ?? null)) + 1));
            // line 28
            echo "    
        ";
            // line 29
            if ((($context["startOffset"] ?? null) > 0)) {
                // line 30
                echo "        ";
                $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => 1]);
                // line 31
                echo "    
        ";
                // line 32
                if ((($context["startOffset"] ?? null) > 1)) {
                    // line 33
                    echo "        ";
                    $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => "..."]);
                    // line 34
                    echo "        ";
                }
                // line 35
                echo "        ";
            }
            // line 36
            echo "    
        ";
            // line 37
            $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), ($context["activeBlock"] ?? null));
            // line 38
            echo "    
        ";
            // line 39
            $context["diffToEnd"] = (((twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "lastPage", [], "any", false, false, false, 39) - 1) - ((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1)) + 1);
            // line 40
            echo "    
        ";
            // line 41
            if ((($context["diffToEnd"] ?? null) > 0)) {
                // line 42
                echo "        ";
                if ((($context["diffToEnd"] ?? null) > 1)) {
                    // line 43
                    echo "        ";
                    $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => "..."]);
                    // line 44
                    echo "        ";
                }
                // line 45
                echo "    
        ";
                // line 46
                $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "lastPage", [], "any", false, false, false, 46)]);
                // line 47
                echo "    ";
            }
        }
        // line 49
        echo "
<div class=\"disc-prom__container container\">
        <div class=\"disc-prom__promo-cards\" id=\"all-stocks-content\">
        ";
        // line 52
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['stocks'] = ($context["stocks"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/stocksList"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "        </div>
        
        ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "lastPage", [], "any", false, false, false, 55) > 1)) {
            // line 56
            echo "        <div class=\"disc-prom__pagination\">
            <div class=\"disc-prom__pagination-row row\">
              <div class=\"col-xl-8 offset-xl-2\">
              
                <!-- Pagination -->
                <div class=\"pagination\">
                  <div class=\"pagination__container\">
                    <div class=\"pagination__box d-none d-md-flex\">
                      <a href=\"";
            // line 64
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 64), "baseFileName", [], "any", false, false, false, 64), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "currentPage", [], "any", false, false, false, 64) - 1)]);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "previousPageUrl", [], "any", false, false, false, 64) == false)) {
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
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageSet"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 72
                echo "                            ";
                if (($context["page"] == "...")) {
                    // line 73
                    echo "                                <a>";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                            ";
                } else {
                    // line 75
                    echo "                            <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 75), "baseFileName", [], "any", false, false, false, 75), [($context["pageParam"] ?? null) => $context["page"]]);
                    echo "\" class=\"pagination__number-item ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "currentPage", [], "any", false, false, false, 75) == $context["page"])) {
                        echo "active";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                            ";
                }
                // line 77
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                      </div>
\t\t\t\t\t  
\t\t\t\t\t  ";
            // line 80
            if (( !twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "nextPageUrl", [], "any", false, false, false, 80) == false)) {
                // line 81
                echo "                      <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 81), "baseFileName", [], "any", false, false, false, 81), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["stocks"] ?? null), "currentPage", [], "any", false, false, false, 81) + 1)]);
                echo "\">
                        <div class=\"pagination__next\">
                          <span class=\"pagination__next-text\">Следующая</span>
                          <img src=\"/themes/motel/assets/img/pagination-arrow-next.svg\" alt=\"\" class=\"pagination__arrow-next js-svg\">
                        </div>
                      </a>
\t\t\t\t\t  ";
            }
            // line 88
            echo "                    </div>
                    
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
                
              </div>
            </div>
          </div>
          ";
        }
        // line 106
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/pages/skidki-i-akcii.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 106,  248 => 88,  237 => 81,  235 => 80,  231 => 78,  225 => 77,  213 => 75,  207 => 73,  204 => 72,  200 => 71,  186 => 64,  176 => 56,  174 => 55,  170 => 53,  165 => 52,  160 => 49,  156 => 47,  154 => 46,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  140 => 41,  137 => 40,  135 => 39,  132 => 38,  130 => 37,  127 => 36,  124 => 35,  121 => 34,  118 => 33,  116 => 32,  113 => 31,  110 => 30,  108 => 29,  105 => 28,  103 => 27,  100 => 26,  94 => 25,  91 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  54 => 11,  52 => 10,  50 => 9,  47 => 8,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/pages/skidki-i-akcii.htm", "");
    }
}
