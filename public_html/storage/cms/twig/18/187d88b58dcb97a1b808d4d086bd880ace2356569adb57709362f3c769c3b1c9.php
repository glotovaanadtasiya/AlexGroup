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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/hotelCard.htm */
class __TwigTemplate_fa65342a5c08c8f67e1994e35c5b9da528e74104f3236e4f748dedb1eb6e7e7d extends \Twig\Template
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
        echo "<div class=\"hotel-cards-box__item hotel-card\">
                  <div class=\"hotel-card__inner\">
                    <div class=\"hotel-card__descr hotel-card__col hotel-card__col_left\">
\t\t\t\t\t  <div class=\"map-card__title\"><a href=\"/hotels/";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 4), "html", null, true);
        echo "/\">";
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "full_name", [], "any", false, false, false, 4)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "full_name", [], "any", false, false, false, 4), "html", null, true);
        } else {
            echo "Отель ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        }
        echo "</a></div>
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "new", [], "any", false, false, false, 5)) {
            // line 6
            echo "<div class=\"beidj-new\">new</div>
";
        }
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "low_price", [], "any", false, false, false, 8)) {
            // line 9
            echo "<div class=\"beidj-lowprice\">цены снижены</div>
";
        }
        // line 11
        echo "\t\t\t\t\t  
                      <div class=\"hotel-card__metro\">
\t\t\t\t\t\t<span class=\"map-card__metro-name\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro", [], "any", false, false, false, 13), "html", null, true);
        echo "</span>
                        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 14) == 1)) {
            // line 15
            echo "                            ";
            $context["metro_color"] = "metro-icon_red";
            // line 16
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 16) == 2)) {
            // line 17
            echo "                            ";
            $context["metro_color"] = "metro-icon_blue";
            // line 18
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 18) == 3)) {
            // line 19
            echo "                            ";
            $context["metro_color"] = "metro-icon_green";
            // line 20
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 20) == 4)) {
            // line 21
            echo "                            ";
            $context["metro_color"] = "metro-icon_orange";
            // line 22
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 22) == 5)) {
            // line 23
            echo "                            ";
            $context["metro_color"] = "metro-icon_purple";
            // line 24
            echo "                        ";
        }
        // line 25
        echo "                        <img src=\"/themes/motel/assets/img/metro.svg\" alt=\"\" class=\"map-card__metro-icon metro-icon ";
        echo twig_escape_filter($this->env, ($context["metro_color"] ?? null), "html", null, true);
        echo " js-svg\">                        
                      </div>
                      <div class=\"hotel-card__address\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "address", [], "any", false, false, false, 27), "html", null, true);
        echo "</div>
                      <!--<a href=\"/hotels/";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 28), "html", null, true);
        echo "#how-get\" class=\"hotel-card__how-get\">Как добраться</a>-->
                      
                    </div>
                    <div class=\"hotel-card__phone-wrap hotel-card__col hotel-card__col_left\">
                      <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"hotel-card__phone\">+7-812-468-77-77</a>
                    </div>
                    
                    <div class=\"hotel-card__tabs-wrap hotel-card__col hotel-card__col_right\">
                      <div class=\"hotel-card__tabs js-map-card__tabs\">
                        <div class=\"hotel-card__tabs-btns-box\">
                          ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 38)), "path", [], "any", false, false, false, 38)) {
            // line 39
            echo "                            <span data-number-type=\"lux\" class=\"hotel-card__tab-btn js-map-card__tab-btn active\">Люкс</span>
                          ";
        }
        // line 41
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_photos", [], "any", false, false, false, 41)), "path", [], "any", false, false, false, 41)) {
            // line 42
            echo "                            <span data-number-type=\"suite\" class=\"hotel-card__tab-btn js-map-card__tab-btn ";
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 42)), "path", [], "any", false, false, false, 42) == false)) {
                echo "active";
            }
            echo "\">Полу-люкс</span>
                          ";
        }
        // line 44
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_photos", [], "any", false, false, false, 44)), "path", [], "any", false, false, false, 44)) {
            // line 45
            echo "                            <span data-number-type=\"standard\" class=\"hotel-card__tab-btn js-map-card__tab-btn \">Стандарт</span>
                          ";
        }
        // line 47
        echo "                        </div>
                        <div class=\"hotel-card__tab-contents-wrap\">
                          <div class=\"hotel-card__tabs-contents\">

                            ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 51)), "path", [], "any", false, false, false, 51)) {
            // line 52
            echo "                              <div class=\"hotel-card__tab-content js-hotel-card-tab-content active\">
                                <div class=\"hotel-card__tab-photo-wrap\">
                                  <!-- Default active photo, lazy loading -->
                                  <img src=\"";
            // line 55
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 55)), "path", [], "any", false, false, false, 55), 300, false]);
            echo "\" alt=\"Фото номера люкс\" class=\"hotel-card__tab-photo\">
                                </div>
                              </div>
                            ";
        }
        // line 59
        echo "
                            ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_photos", [], "any", false, false, false, 60)), "path", [], "any", false, false, false, 60)) {
            // line 61
            echo "                            <div class=\"hotel-card__tab-content js-hotel-card-tab-content ";
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 61)), "path", [], "any", false, false, false, 61) == false)) {
                echo "active";
            }
            echo "\">
                              <div class=\"hotel-card__tab-photo-wrap\">
                                <img ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 63)), "path", [], "any", false, false, false, 63) == false)) {
                echo "src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_photos", [], "any", false, false, false, 63)), "path", [], "any", false, false, false, 63), "html", null, true);
                echo "\"";
            } else {
                echo "data-src=\"";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_photos", [], "any", false, false, false, 63)), "path", [], "any", false, false, false, 63), 300, false]);
                echo "\"";
            }
            echo " alt=\"Фото номера полу-люкс\" class=\"hotel-card__tab-photo\">
                              </div>                        
                            </div>
                            ";
        }
        // line 67
        echo "
                            ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_photos", [], "any", false, false, false, 68)), "path", [], "any", false, false, false, 68)) {
            // line 69
            echo "                              <div class=\"hotel-card__tab-content js-hotel-card-tab-content\">
                                <div class=\"hotel-card__tab-photo-wrap\">
                                  <img data-src=\"";
            // line 71
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_photos", [], "any", false, false, false, 71)), "path", [], "any", false, false, false, 71), 300, false]);
            echo "\" alt=\"Фото стандартного номера\" class=\"hotel-card__tab-photo\">
                                </div>
                              </div>
                            ";
        }
        // line 75
        echo "
                          </div>
                          <div class=\"hotel-card__rating\">
                            <span class=\"hotel-card__rating-value\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "rating", [], "any", false, false, false, 78), "html", null, true);
        echo "</span>
                            <span class=\"hotel-card__rating-text\"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class=\"hotel-card__price-wrap hotel-card__col hotel-card__col_right\">
                      <div class=\"hotel-card__price\">
                        <strong>От 
\t\t\t\t\t\t\t";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "min_price", [], "any", false, false, false, 88)) {
            // line 89
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "min_price", [], "any", false, false, false, 89), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 90
            echo " 
\t\t\t\t\t\t\t\t";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 91), 0, [], "any", false, false, false, 91), "tariffs", [], "any", false, false, false, 91)), "sun_thu", [], "any", false, false, false, 91), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t\t<span class=\"hotel-card__price-currency\">рублей</span></strong><br>
\t\t\t\t\t\t\t";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "min_price", [], "any", false, false, false, 94)) {
            // line 95
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "min_price_tarif_name", [], "any", false, false, false, 95), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 96
            echo " 
\t\t\t\t\t\t\t\tза ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 97), 0, [], "any", false, false, false, 97), "tariffs", [], "any", false, false, false, 97)), "price_name", [], "any", false, false, false, 97), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 99
        echo "                      </div>
                    </div>
\t\t\t\t\t
                    <div class=\"hotel-card__details js-hotel-card-details hotel-card__col hotel-card__col_left hotel-card__col_fullwidth\">
                      <div class=\"hotel-card__details-top js-hotel-card-spoiler\">
                        <span class=\"hotel-card__details-title\">Подробнее</span>
                        <img src=\"/themes/motel/assets/img/arrow-down.svg\" alt=\"\" class=\"hotel-card__details-arrow js-svg\">
                      </div>
                      <div class=\"hotel-card__details-list js-hotel-card-list\">
                        <div class=\"hotel-card__details-item\">
                          <span class=\"hotel-card__details-text\">Обслуживание</span>
                          <span class=\"hotel-card__details-sign\">
                            ";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "rating_service", [], "any", false, false, false, 111) == "true")) {
            // line 112
            echo "                              +
                            ";
        } else {
            // line 114
            echo "                              -
                            ";
        }
        // line 116
        echo "                          </span>
                        </div>
                        <div class=\"hotel-card__details-item\">
                          <span class=\"hotel-card__details-text\">Номер</span>
                          <span class=\"hotel-card__details-sign\">
                            ";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "rating_room", [], "any", false, false, false, 121) == "true")) {
            // line 122
            echo "                              +
                            ";
        } else {
            // line 124
            echo "                              -
                            ";
        }
        // line 126
        echo "                          </span>
                        </div>
                        <div class=\"hotel-card__details-item\">
                          <span class=\"hotel-card__details-text\">Еда</span>
                          <span class=\"hotel-card__details-sign\">
                            ";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "rating_food", [], "any", false, false, false, 131) == "true")) {
            // line 132
            echo "                              +
                            ";
        } else {
            // line 134
            echo "                              -
                            ";
        }
        // line 136
        echo "                          </span>
                        </div>
                      </div>
                    </div>
\t\t\t\t
\t\t\t\t\t
                    <div class=\"hotel-card__btn-wrap hotel-card__col hotel-card__col_right\">
                      <a href=\"/hotels/";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 143), "html", null, true);
        echo "/\" class=\"hotel-card__btn button button_medium button_ghost\">
                        На страницу отеля
                      </a>
                    </div>
                  </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/hotelCard.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 143,  327 => 136,  323 => 134,  319 => 132,  317 => 131,  310 => 126,  306 => 124,  302 => 122,  300 => 121,  293 => 116,  289 => 114,  285 => 112,  283 => 111,  269 => 99,  264 => 97,  261 => 96,  255 => 95,  253 => 94,  250 => 93,  245 => 91,  242 => 90,  236 => 89,  234 => 88,  221 => 78,  216 => 75,  209 => 71,  205 => 69,  203 => 68,  200 => 67,  185 => 63,  177 => 61,  175 => 60,  172 => 59,  165 => 55,  160 => 52,  158 => 51,  152 => 47,  148 => 45,  145 => 44,  137 => 42,  134 => 41,  130 => 39,  128 => 38,  115 => 28,  111 => 27,  105 => 25,  102 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  73 => 14,  69 => 13,  65 => 11,  61 => 9,  59 => 8,  55 => 6,  53 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/hotelCard.htm", "");
    }
}
