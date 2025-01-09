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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/faqList.htm */
class __TwigTemplate_bdb8991ac696d7b1a1f9f15e6a01814b677600d261292bdb4fda52b895e1a012 extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["faqList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        echo "        ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["faqList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        echo "        ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["faqList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        echo "        ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["faqList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        echo "        ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["faqList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        echo "        ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["faqList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "        <div class=\"question__container container\">
              <div class=\"question__head-text\">
                    <h1 class=\"question__headline h1\">Часто задаваемые вопросы</h1>
                    <div class=\"question__subheading\">
                        <p>Мы составили список часто задаваемых вопросов по проживанию в наших отелях</p>
                    </div>
              </div>
              <div class=\"question__question-container\" id=\"all-posts-content\">
              ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/faqListForeach"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "                
            </div>
        </div>
        
        <div class=\"question__pagination\">
        <div class=\"container\">
          <div class=\"question__pagination-row row\">
            <div class=\"question__pagination-col col-xl-2\"></div>
            <div class=\"question__pagination-col col-xl-8\">
              ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 25) > 1)) {
            // line 26
            echo "                <!-- Pagination -->
                <div class=\"pagination\">
                  <div class=\"pagination__container\">
                    <div class=\"pagination__box d-none d-md-flex\">
                      
                      <a href=\"";
            // line 31
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 31), "baseFileName", [], "any", false, false, false, 31), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 31) - 1)]);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 31) == 1)) {
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
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 40)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 41
                echo "                          <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 41), "baseFileName", [], "any", false, false, false, 41), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\" class=\"pagination__number-item ";
                if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 41) == $context["page"])) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                      </div>
                      
\t\t\t\t\t  ";
            // line 45
            if (( !twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 45) <= twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 45))) {
                // line 46
                echo "                      <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 46), "baseFileName", [], "any", false, false, false, 46), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 46) + 1)]);
                echo "\" >
                        <div class=\"pagination__next\">
                          <span class=\"pagination__next-text\">Следующая</span>
                          <img src=\"/themes/motel/assets/img/pagination-arrow-next.svg\" alt=\"\" class=\"pagination__arrow-next js-svg\">
                        </div>
                      </a>
\t\t\t\t\t  ";
            }
            // line 53
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
        // line 66
        echo "            </div>          
          </div>
        </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/faqList.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  140 => 53,  129 => 46,  127 => 45,  123 => 43,  108 => 41,  104 => 40,  88 => 31,  81 => 26,  79 => 25,  68 => 16,  64 => 15,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/faqList.htm", "");
    }
}
