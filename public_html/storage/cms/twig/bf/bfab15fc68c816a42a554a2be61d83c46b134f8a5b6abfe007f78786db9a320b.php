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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/hotelCardOnMap.htm */
class __TwigTemplate_c1c7fe62300582f00ce14ed8e5d5e1992345c536bb628b6affa95fa933f2664d extends \Twig\Template
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
        echo "<!-- Hotel Card -->
        <div class=\"map-card js-map-card gmap-box__card js-s-map-card\" data-hotel=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
          <div class=\"map-card__box\">
                  <button class=\"map-card__close js-map-card__close\">
                    <img src=\"/themes/motel/assets/img/close.svg\" alt=\"\" class=\"map-card__close-icon js-svg\">
                  </button>
                  <div class=\"map-card__title\"><a href=\"/hotels/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 7), "html", null, true);
        echo "/\">";
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "full_name", [], "any", false, false, false, 7)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "full_name", [], "any", false, false, false, 7), "html", null, true);
        } else {
            echo "Отель ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        }
        echo "</a></div>
";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "new", [], "any", false, false, false, 8)) {
            // line 9
            echo "<div class=\"beidj-new\">new</div>
";
        }
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "low_price", [], "any", false, false, false, 11)) {
            // line 12
            echo "<div class=\"beidj-lowprice\">цены снижены</div>
";
        }
        // line 13
        echo "                 

\t\t\t\t\t<div class=\"map-card__metro\">
                    <span class=\"map-card__metro-name\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                    ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 17) == 1)) {
            // line 18
            echo "                        ";
            $context["metro_color"] = "metro-icon_red";
            // line 19
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 19) == 2)) {
            // line 20
            echo "                        ";
            $context["metro_color"] = "metro-icon_blue";
            // line 21
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 21) == 3)) {
            // line 22
            echo "                        ";
            $context["metro_color"] = "metro-icon_green";
            // line 23
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 23) == 4)) {
            // line 24
            echo "                        ";
            $context["metro_color"] = "metro-icon_orange";
            // line 25
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 25) == 5)) {
            // line 26
            echo "                        ";
            $context["metro_color"] = "metro-icon_purple";
            // line 27
            echo "                    ";
        }
        // line 28
        echo "                    <img src=\"/themes/motel/assets/img/metro.svg\" alt=\"metro sign\" class=\"map-card__metro-icon metro-icon ";
        echo twig_escape_filter($this->env, ($context["metro_color"] ?? null), "html", null, true);
        echo " js-svg\">
                  </div>
                  <div class=\"map-card__address\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "address", [], "any", false, false, false, 30), "html", null, true);
        echo "</div>
                  <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"map-card__phone\">+7-812-468-77-77</a>
                  <!--
\t\t\t\t  <div class=\"map-card__how-get-wrap\">
                    <a href=\"/hotels/";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 34), "html", null, true);
        echo "#how-get\" class=\"map-card__how-get\">
                      <span class=\"map-card__how-get-text\">Как добраться</span>
                      <img src=\"/themes/motel/assets/img/arrow-right.svg\" alt=\"\" class=\"map-card__how-get-arrow js-svg\">
                    </a>
                  </div>
\t\t\t\t  -->
                  
                  
                  <div class=\"map-card__tabs js-map-card__tabs\">
                    <div class=\"map-card__tabs-btns-box\">
                        ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 44)), "path", [], "any", false, false, false, 44)) {
            echo "<span data-number-type=\"lux\" class=\"map-card__tab-btn js-map-card__tab-btn active\">Люкс</span>";
        }
        // line 45
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_photos", [], "any", false, false, false, 45)), "path", [], "any", false, false, false, 45)) {
            echo "<span data-number-type=\"suite\" class=\"map-card__tab-btn js-map-card__tab-btn ";
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 45)), "path", [], "any", false, false, false, 45) == false)) {
                echo "active";
            }
            echo "\">Полу-люкс</span>";
        }
        // line 46
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_photos", [], "any", false, false, false, 46)), "path", [], "any", false, false, false, 46)) {
            echo "<span data-number-type=\"standard\" class=\"map-card__tab-btn js-map-card__tab-btn\">Стандарт</span>";
        }
        // line 47
        echo "                    </div>
                    <div class=\"map-card__tabs-contents\">
                        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 49)), "path", [], "any", false, false, false, 49)) {
            // line 50
            echo "                            <div class=\"map-card__tab-content js-hotel-card-tab-content active\">
                                <div class=\"map-card__tab-photo-wrap\">
                                    <img data-src=\"";
            // line 52
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 52)), "path", [], "any", false, false, false, 52), false, 230]);
            echo "\" alt=\"Фото номера люкс\" class=\"map-card__tab-photo\">
                                </div>
                            </div>
                        ";
        }
        // line 56
        echo "
                          ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_photos", [], "any", false, false, false, 57)), "path", [], "any", false, false, false, 57)) {
            // line 58
            echo "                          <div class=\"map-card__tab-content js-hotel-card-tab-content ";
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 58)), "path", [], "any", false, false, false, 58) == false)) {
                echo "active";
            }
            echo "\">
                            <div class=\"map-card__tab-photo-wrap\">
                              <img data-src=\"";
            // line 60
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_photos", [], "any", false, false, false, 60)), "path", [], "any", false, false, false, 60), false, 230]);
            echo "\" alt=\"Фото номера полу-люкс\" class=\"map-card__tab-photo\">
                            </div>
                          </div>
                          ";
        }
        // line 64
        echo "

                        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_photos", [], "any", false, false, false, 66)), "path", [], "any", false, false, false, 66)) {
            // line 67
            echo "                            <div class=\"map-card__tab-content js-hotel-card-tab-content\">
                                <div class=\"map-card__tab-photo-wrap\">
                                    <img data-src=\"";
            // line 69
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_photos", [], "any", false, false, false, 69)), "path", [], "any", false, false, false, 69), false, 230]);
            echo "\" alt=\"Фото стандартного номера\" class=\"map-card__tab-photo\">
                                </div>
                            </div>
                        ";
        }
        // line 73
        echo "                    </div>
                  </div>
                  <a href=\"/hotels/";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 75), "html", null, true);
        echo "/\" class=\"map-card__btn button button_medium button_ghost\">На страницу отеля <img src=\"/themes/motel/assets/img/arrow-right.svg\" alt=\"\" class=\"map-card__btn-img js-svg\"></a>
                </div>
        </div>
        <!-- /Hotel Card -->";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/hotelCardOnMap.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 75,  210 => 73,  203 => 69,  199 => 67,  197 => 66,  193 => 64,  186 => 60,  178 => 58,  176 => 57,  173 => 56,  166 => 52,  162 => 50,  160 => 49,  156 => 47,  151 => 46,  142 => 45,  138 => 44,  125 => 34,  118 => 30,  112 => 28,  109 => 27,  106 => 26,  103 => 25,  100 => 24,  97 => 23,  94 => 22,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  80 => 17,  76 => 16,  71 => 13,  67 => 12,  65 => 11,  61 => 9,  59 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/hotelCardOnMap.htm", "");
    }
}
