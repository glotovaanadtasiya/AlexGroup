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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/additional_services_table.htm */
class __TwigTemplate_3a2cc820d3978397d98883b625e98a67730ee92095e053cef040eb8f8159f957 extends \Twig\Template
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
        echo "<div class=\"s-stock-info__services\">
            <div class=\"services-table services-table_no-hover table table_darktheme d-none d-sm-block\">
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
            echo "                    <div class=\"services-table__data-col services-table__th table__th\">
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
        echo "                </div>
              </div>
              <div class=\"table__body\">
              ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 17
            echo "                <div class=\"services-table__tr table__tr\">
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
                echo "                            <div class=\"services-table__main-col-hover\">
                                <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 24), "path", [], "any", false, false, false, 24), "html", null, true);
                echo "\" alt=\"\" class=\"services-table__main-col-hover-img\">
                            </div>
                        ";
            }
            // line 27
            echo "                    </div>
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
                // line 29
                echo "                    <div class=\"services-table__data-col services-table__td table__td\">
                        ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["offer"], "services", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["offer_service"]) {
                    // line 31
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["offer_service"], "id", [], "any", false, false, false, 31) == twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 31))) {
                        // line 32
                        echo "                            <span class=\"table__in-stock\"></span>
                            ";
                    }
                    // line 34
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer_service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </div>
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 45
            echo "                    <div class=\"services-table__data-col services-table__td table__td\" data-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "price", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
                        ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "price", [], "any", false, false, false, 46), "html", null, true);
            echo "
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </div>

              </div>
            </div>

            <div class=\"hotel-services-mobile js-hotel-services-mobile\">
              ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 56
            echo "              <!-- Mobile Table 1 -->
              <div class=\"hotel-services-mobile__item\">
                <div class=\"hotel-services-mobile__btn js-hotel-services-mobile-btn\">
                    <span class=\"hotel-services-mobile__num\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>
                    <span class=\"hotel-services-mobile__title\">Романтическое предложение</span>
                    <div class=\"hotel-services-mobile__btn-right\">
                        <span class=\"hotel-services-mobile__price\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "price", [], "any", false, false, false, 62), "html", null, true);
            echo " <span class=\"hotel-services-mobile__currency\">руб</span></span>
                        <img src=\"/themes/motel/assets/img/arrow-down.svg\" alt=\"\" class=\"hotel-services-mobile__arrow js-svg\">
                    </div>
                </div>
                <div class=\"hotel-services-mobile__content\">
                  <!-- Mobile Table -->
                  <div class=\"services-table table\">

                    <div class=\"table__body\">
                    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 72
                echo "                        <div class=\"services-table__tr table__tr\">
                            <div class=\"services-table__main-col services-table__td table__td\">
                                <div class=\"services-table__td-has-image\">
                                    ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 75), "html", null, true);
                echo "
                                </div>
                                ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 77), "path", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                                  <div class=\"services-table__main-col-hover\">
                                    <img src=\"";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 79), "path", [], "any", false, false, false, 79), "html", null, true);
                    echo "\" alt=\"\" class=\"services-table__main-col-hover-img\">
                                  </div>
                                ";
                }
                // line 82
                echo "                            </div>
                            <div class=\"services-table__data-col  services-table__td table__td\">
                            ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["offer"], "services", [], "any", false, false, false, 84));
                foreach ($context['_seq'] as $context["_key"] => $context["offer_service"]) {
                    // line 85
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["offer_service"], "id", [], "any", false, false, false, 85) == twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 85))) {
                        // line 86
                        echo "                                <span class=\"table__in-stock\"></span>
                                ";
                    }
                    // line 88
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer_service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
                    </div>
                  </div>
                  <!-- /Mobile Table -->

                  <div class=\"hotel-services-mobile__arrow-btn-wrap button-wrap\">
                    <button class=\"hotel-services-mobile__arrow-btn js-hotel-services-mobile-arrow-btn\">
                      <img src=\"/themes/motel/assets/img/arrow-down.svg\" alt=\"\" class=\"hotel-services-mobile__arrow-btn-icon js-svg\">
                    </button>
                  </div>
                </div>
              </div>
              <!-- /Mobile Table 1 -->

              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            </div>

          </div>
\t\t  
\t\t  <p style=\"font-size: 12px; margin: 10px 0\">* - в данном предложении используются декоративные цветочные композиции, искусственные лепестки</p>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/additional_services_table.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 107,  247 => 92,  239 => 89,  233 => 88,  229 => 86,  226 => 85,  222 => 84,  218 => 82,  212 => 79,  209 => 78,  207 => 77,  202 => 75,  197 => 72,  193 => 71,  181 => 62,  175 => 59,  170 => 56,  166 => 55,  158 => 49,  149 => 46,  144 => 45,  140 => 44,  133 => 39,  126 => 37,  119 => 35,  113 => 34,  109 => 32,  106 => 31,  102 => 30,  99 => 29,  95 => 28,  92 => 27,  86 => 24,  83 => 23,  81 => 22,  76 => 20,  71 => 17,  67 => 16,  62 => 13,  53 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/additional_services_table.htm", "");
    }
}
