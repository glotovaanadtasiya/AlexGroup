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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/additional_services.htm */
class __TwigTemplate_d2a0bf233fd4696fde5a24aeebbd58f1c64aac4784abb7a2139d961fe32645eb extends \Twig\Template
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
        echo "<div class=\"s-hotel-info__services\">
                    <div class=\"services-table js-services-table table d-none d-sm-block\" data-sum=\"0\">
                      <div class=\"table__head\">
                        <div class=\"table__tr table__tr_head\">
                          <div class=\"services-table__main-col services-table__th table__th\">
                            Романтическое предложение
                          </div>
                          ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 9
            echo "                          <div class=\"services-table__data-col services-table__th table__th\">
                            ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "
                          </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                        </div>
                      </div>
                      <div class=\"table__body\">
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 17
            echo "                        <div class=\"services-table__tr table__tr\">
                          <div class=\"services-table__main-col services-table__td table__td\">
                            <div class=\"services-table__td-has-image\">
                              ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "
                            </div>
                            ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 22), "path", [], "any", false, false, false, 22)) {
                // line 23
                echo "                              <div class=\"services-table__main-col-hover\">
                                <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 24), "path", [], "any", false, false, false, 24), "html", null, true);
                echo "\" alt=\"\" class=\"services-table__main-col-hover-img\">
                              </div>
                            ";
            }
            // line 27
            echo "                          </div>
                          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
                // line 29
                echo "                          <div class=\"services-table__data-col js-services-table-data services-table__td table__td\" data-rp=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
                            ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["offer"], "services", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["offer_service"]) {
                    // line 31
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["offer_service"], "id", [], "any", false, false, false, 31) == twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 31))) {
                        // line 32
                        echo "                                <span class=\"table__in-stock\"></span>
                                ";
                    }
                    // line 34
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer_service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                          </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                        
                        <div class=\"services-table__tr table__tr\">
                          <div class=\"services-table__main-col services-table__td table__td\">
                            Стоимость
                          </div>
                          ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 46
            echo "                          <div class=\"services-table__data-col js-services-table-data services-table__td table__td\" data-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "price", [], "any", false, false, false, 46), "html", null, true);
            echo "\" data-rp=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "price", [], "any", false, false, false, 47), "html", null, true);
            echo "
                          </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </div>
                        
                        <div class=\"services-table__tr table__tr\">
                          <div class=\"services-table__main-col services-table__td table__td\">
                            Выбор
                          </div>
                          ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 57
            echo "                          <div class=\"services-table__data-col js-services-table-data services-table__td table__td\" data-rp=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 57), "html", null, true);
            echo "\">
                            <span class=\"table__choose\"></span>
                          </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </div>
                      </div>
                    </div>                      
                    
                    <div class=\"hotel-services-mobile js-hotel-services-mobile\">

                      ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 68
            echo "                      <!-- Mobile Table -->
                      <div class=\"hotel-services-mobile__item\">
                        <div class=\"hotel-services-mobile__btn js-hotel-services-mobile-btn\">
                          <span class=\"hotel-services-mobile__num\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 71), "html", null, true);
            echo "</span>
                          <span class=\"hotel-services-mobile__title\">Романтическое предложение</span>
                          <div class=\"hotel-services-mobile__btn-right\">
                            <span class=\"hotel-services-mobile__price\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "price", [], "any", false, false, false, 74), "html", null, true);
            echo " <span class=\"hotel-services-mobile__currency\">руб</span></span>
                            <img src=\"/themes/motel/assets/img/arrow-down.svg\" alt=\"\" class=\"hotel-services-mobile__arrow js-svg\">
                          </div>
                        </div>
                        <div class=\"hotel-services-mobile__content\">

                          <div class=\"services-table table\">
                            
                            <div class=\"table__body\">

                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 85
                echo "                              <div class=\"services-table__tr table__tr\">
                                <div class=\"services-table__main-col services-table__td table__td\">
                                  <div class=\"services-table__td-has-image\">
                                      ";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 88), "html", null, true);
                echo "
                                  </div>                                  
                                  ";
                // line 90
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 90), "path", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "                                      <div class=\"services-table__main-col-hover\">
                                        <img src=\"";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 92), "path", [], "any", false, false, false, 92), "html", null, true);
                    echo "\" alt=\"\" class=\"services-table__main-col-hover-img\">
                                      </div>
                                    ";
                }
                // line 95
                echo "                                </div>
                                <div class=\"services-table__data-col  services-table__td table__td\">
                                ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["offer"], "services", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["offer_service"]) {
                    // line 98
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["offer_service"], "id", [], "any", false, false, false, 98) == twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 98))) {
                        // line 99
                        echo "                                    <span class=\"table__in-stock\"></span>
                                    ";
                    }
                    // line 101
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer_service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                                </div>
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "
                            </div>
                          </div>

                          
                          <div class=\"hotel-services-mobile__add-btn-wrap button-wrap\">
                            <button class=\"hotel-services-mobile__add-btn js-hotel-services-mobile-add-btn button button_ghost button_medium\" data-price=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "price", [], "any", false, false, false, 111), "html", null, true);
            echo "\">Добавить</button>
                          </div>
                          <div class=\"hotel-services-mobile__arrow-btn-wrap button-wrap\">
                            <button class=\"hotel-services-mobile__arrow-btn js-hotel-services-mobile-arrow-btn\" data-rp=\"";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 114), "html", null, true);
            echo "\">
                              <img src=\"/themes/motel/assets/img/arrow-down.svg\" alt=\"\" class=\"hotel-services-mobile__arrow-btn-icon js-svg\">
                            </button>
                          </div>
                        </div>
                      </div>
                      <!-- /Mobile Table -->
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
                    </div>

                  </div>
\t\t\t\t  
<p style=\"font-size: 12px; margin: 10px 0\">* - в данном предложении используются декоративные цветочные композиции, искусственные лепестки</p>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/additional_services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 122,  290 => 114,  284 => 111,  276 => 105,  268 => 102,  262 => 101,  258 => 99,  255 => 98,  251 => 97,  247 => 95,  241 => 92,  238 => 91,  236 => 90,  231 => 88,  226 => 85,  222 => 84,  209 => 74,  203 => 71,  198 => 68,  194 => 67,  186 => 61,  175 => 57,  171 => 56,  163 => 50,  154 => 47,  147 => 46,  143 => 45,  135 => 39,  128 => 37,  121 => 35,  115 => 34,  111 => 32,  108 => 31,  104 => 30,  99 => 29,  95 => 28,  92 => 27,  86 => 24,  83 => 23,  81 => 22,  76 => 20,  71 => 17,  67 => 16,  62 => 13,  53 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/additional_services.htm", "");
    }
}
