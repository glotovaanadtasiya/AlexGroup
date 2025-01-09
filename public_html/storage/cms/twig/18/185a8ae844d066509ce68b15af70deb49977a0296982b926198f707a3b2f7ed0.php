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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/pages/reviews.htm */
class __TwigTemplate_712616a517dd8eb5eecd388e752cc7388bcb6007ebcc388390fb15fd5f71b919 extends \Twig\Template
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
        $context["reviews"] = twig_get_attribute($this->env, $this->source, ($context["reviewList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        echo "<h1 class=\"s-feedback__title h1\">Отзывы гостей</h1>
          <div class=\"s-feedback__row row\">
            <div class=\"s-feedback__col col-md-4\">
              <aside class=\"s-feedback__sidebar\">
                <div class=\"s-feedback__select-wrap\">
                
                  <select class=\"select js-select-review\" onchange=\"\$.request('onChooseHotel', {redirect: '/reviews/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "currentPage", [], "any", false, false, false, 8), "html", null, true);
        echo "/'+\$(this).val()}); return false;\">
                  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 10
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\" ";
            if ((($context["get_hotel"] ?? null) == twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 10))) {
                echo "selected";
            }
            echo ">Мини отель \\n ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                  </select>
                </div>
              </aside>
            </div>
          </div>
          
          <div id=\"all-reviews-content\">
          ";
        // line 19
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['reviews'] = ($context["reviews"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/reviewsListItem"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "          </div>
          
          <div class=\"s-feedback__pagination\">
            <div class=\"s-feedback__pagination-row row\">
              <div class=\"col-xl-8 offset-xl-4\">
\t\t\t  
\t\t\t\t
                ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "lastPage", [], "any", false, false, false, 27) > 1)) {
            // line 28
            echo "                <!-- Pagination -->
                <div class=\"pagination\">
                  <div class=\"pagination__container\">
                    <div class=\"pagination__box d-none d-md-flex\">
                      
                      <a href=\"";
            // line 33
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 33), "baseFileName", [], "any", false, false, false, 33), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 33) - 1)]);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "currentPage", [], "any", false, false, false, 33) == 1)) {
                echo "class=\"disabled\"";
            }
            echo ">
                        <div class=\"pagination__prev\">
                          <img src=\"/themes/motel/assets/img/pagination-arrow-prev.svg\" alt=\"\" class=\"pagination__arrow-prev js-svg\">
                          <span class=\"pagination__prev-text\">Предыдущая</span>
                        </div>
                      </a>
                      
                      <!--div class=\"pagination__numbers\">
                      ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "lastPage", [], "any", false, false, false, 41)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "                          <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 42), "baseFileName", [], "any", false, false, false, 42), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\" class=\"pagination__number-item ";
                if ((twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "currentPage", [], "any", false, false, false, 42) == $context["page"])) {
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
            // line 44
            echo "                      </div-->
\t\t\t\t\t  
\t\t\t\t\t  &nbsp;&nbsp;&nbsp;
                      
\t\t\t\t\t  ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "currentPage", [], "any", false, false, false, 48) < twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "lastPage", [], "any", false, false, false, 48))) {
                // line 49
                echo "                      <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "baseFileName", [], "any", false, false, false, 49), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 49) + 1)]);
                echo "\">
                        <div class=\"pagination__next\">
                          <span class=\"pagination__next-text\">Следующая</span>
                          <img src=\"/themes/motel/assets/img/pagination-arrow-next.svg\" alt=\"\" class=\"pagination__arrow-next js-svg\">
                        </div>
                      </a>
                      ";
            }
            // line 56
            echo "\t\t\t\t\t  
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
        // line 69
        echo "              </div>
            </div>
          </div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/pages/reviews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 69,  155 => 56,  144 => 49,  142 => 48,  136 => 44,  121 => 42,  117 => 41,  102 => 33,  95 => 28,  93 => 27,  84 => 20,  79 => 19,  70 => 12,  55 => 10,  51 => 9,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/pages/reviews.htm", "");
    }
}
