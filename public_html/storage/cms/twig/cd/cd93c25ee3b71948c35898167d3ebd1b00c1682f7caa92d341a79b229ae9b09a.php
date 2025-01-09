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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/hotel.htm */
class __TwigTemplate_90193ed55e85d85f7e3b5a77a78576736b3991847fdef5a00e399cbe463c7f4f extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</head>

<body class=\"js-body\">
    
    <!-- Main content -->
  <main class=\"main\">
  
  <div class=\"darkcommontheme headertheme\">
    <div class=\"header-group\">
    <!-- Header -->
    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "    <!-- /Header -->
    </div>
    <div class=\"hotel-main-descr\">
      <!-- Flame offer block (mobile cloned) -->
      <div class=\"hotel-main-descr__offer\">
        ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "      </div>
      <!-- /Flame offer block (mobile cloned) -->
      <div class=\"hotel-main-descr__container container\">
        <div class=\"hotel-main-descr__box\">
\t\t
<div class=\"beidj-container-on-hotel-page\">
";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "new", [], "any", false, false, false, 29)) {
            // line 30
            echo "<div class=\"beidj-new\">new</div>
";
        }
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "low_price", [], "any", false, false, false, 32)) {
            // line 33
            echo "<div class=\"beidj-lowprice\">цены снижены</div>
";
        }
        // line 35
        echo "</div>
\t\t  <h1 class=\"hotel-main-descr__title\">";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "full_name", [], "any", false, false, false, 36)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "full_name", [], "any", false, false, false, 36), "html", null, true);
        } else {
            echo "Отель ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
        }
        echo "</h1>


          <div class=\"hotel-main-descr__address\">
            <div class=\"hotel-main-descr__metro\">
              <span class=\"hotel-main-descr__metro-name\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro", [], "any", false, false, false, 41), "html", null, true);
        echo "</span>
              ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 42) == 1)) {
            // line 43
            echo "                ";
            $context["metro_color"] = "metro-icon_red";
            // line 44
            echo "              ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 44) == 2)) {
            // line 45
            echo "                ";
            $context["metro_color"] = "metro-icon_blue";
            // line 46
            echo "              ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 46) == 3)) {
            // line 47
            echo "                ";
            $context["metro_color"] = "metro-icon_green";
            // line 48
            echo "              ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 48) == 4)) {
            // line 49
            echo "                ";
            $context["metro_color"] = "metro-icon_orange";
            // line 50
            echo "              ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro_line", [], "any", false, false, false, 50) == 5)) {
            // line 51
            echo "                ";
            $context["metro_color"] = "metro-icon_purple";
            // line 52
            echo "              ";
        }
        // line 53
        echo "              <img src=\"/themes/motel/assets/img/metro.svg\" alt=\"metro sign\" class=\"hotel-main-descr__metro-icon metro-icon  ";
        echo twig_escape_filter($this->env, ($context["metro_color"] ?? null), "html", null, true);
        echo " js-svg\">
            </div>
            <div class=\"hotel-main-descr__address-text\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "address", [], "any", false, false, false, 55), "html", null, true);
        echo "</div>
          </div>

          <div class=\"hotel-main-descr__info\">
            <div class=\"hotel-main-descr__price\">От 
\t\t\t\t";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "min_price", [], "any", false, false, false, 60)) {
            // line 61
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "min_price", [], "any", false, false, false, 61), "html", null, true);
            echo "
\t\t\t\t";
        } else {
            // line 62
            echo " 
\t\t\t\t\t";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 63), 0, [], "any", false, false, false, 63), "tariffs", [], "any", false, false, false, 63)), "sun_thu", [], "any", false, false, false, 63), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t<span class=\"hotel-main-descr__price-currency\">рублей</span></div>
            <div class=\"hotel-main-descr__time\">
\t\t\t\t";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "min_price", [], "any", false, false, false, 67)) {
            // line 68
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "min_price_tarif_name", [], "any", false, false, false, 68), "html", null, true);
            echo "
\t\t\t\t";
        } else {
            // line 69
            echo " 
\t\t\t\t\tза ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 70), 0, [], "any", false, false, false, 70), "tariffs", [], "any", false, false, false, 70)), "price_name", [], "any", false, false, false, 70), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 72
        echo "\t\t\t</div>
          </div>

          <div class=\"hotel-main-descr__booking\">
            <a href=\"#booking\" onclick=\" yaCounter23472043.reachGoal('bronOpen'); fbq('track','bronOpen'); return true;\" class=\"hotel-main-descr__booking-btn js-top-booking-btn button button_medium button_ghost js-booking-link\">Забронировать</a>
          </div>
          
        </div>
      </div>
    </div>

\t
";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "description", [], "any", false, false, false, 84)) {
            echo "\t
<div class=\"hotel-main-descr\">
<div class=\"container text_container plaintext\">
";
            // line 87
            echo twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "description", [], "any", false, false, false, 87);
            echo "
\t
</div>\t
</div>\t
";
        }
        // line 91
        echo "\t


        <div class=\"s-hotel-info\">          
          
          <!-- Tabs -->
          <div class=\"tabs js-tabs\">         
            <!-- Tabs Buttons -->
            <div class=\"hotel-tabs-switches-wrap tabs__switches-wrap\">
              <div class=\"s-hotel-info__container tabs__switches-container container\">
                <div class=\"hotel-tabs-switches tabs__switches\">
                  ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 102)) {
            echo "<div class=\"tabs__switch js-tabs__switch active\" data-number-type=\"lux\"><span class=\"d-none d-md-inline\">Номера</span> люкс</div>";
        }
        // line 103
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_prop", [], "any", false, false, false, 103)) {
            echo "<div class=\"tabs__switch js-tabs__switch ";
            if ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 103) == false)) {
                echo "active";
            }
            echo "\" data-number-type=\"suite\"><span class=\"d-none d-md-inline\">Номера</span> полу-люкс</div>";
        }
        // line 104
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 104)) {
            echo "<div class=\"tabs__switch js-tabs__switch\" data-number-type=\"standard\"><span class=\"d-none d-md-inline\">Номера</span> стандарт</div>";
        }
        // line 105
        echo "                </div>
              </div>
            </div>         
            <!-- /Tabs Buttons -->

            <div class=\"tabs__contents\">
              ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 111)) {
            // line 112
            echo "                <!-- Lux Tab Content -->
                <div class=\"hotel-tabs-content tabs__content js-tabs__content active\" data-number-type=\"lux\">

                  <div class=\"photo-slider js-photo-slider owl-carousel\" data-desktop-dots=\"1\">
                    ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_photos", [], "any", false, false, false, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 117
                echo "                      <div class=\"photo-slider__item\">
                        <!-- NOT lazy load image -->
\t\t\t\t\t  <img src=\"";
                // line 119
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 119)]);
                echo "\" srcset=\"";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 119), 320]);
                echo " 320w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                // line 120
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 120), 640]);
                echo " 640w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                // line 121
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 121), 1024]);
                echo " 1024w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                // line 122
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 122)]);
                echo " 1920w\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   alt=\"";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 124), "html", null, true);
                echo "\" class=\"photo-slider__img\"> 
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                  </div>

                  <div class=\"s-hotel-info__container container\">
                    <div class=\"s-hotel-info__prices-row\">
                      <div class=\"s-hotel-info__price-item\">
                        <div class=\"s-hotel-info__price-val\">От ";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 132), 0, [], "any", false, false, false, 132), "tariffs", [], "any", false, false, false, 132)), "sun_thu", [], "any", false, false, false, 132), "html", null, true);
            echo " <span class=\"s-hotel-info__price-currency\">рублей</span></div>
                        <div class=\"s-hotel-info__price-term\">за ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 133), 0, [], "any", false, false, false, 133), "tariffs", [], "any", false, false, false, 133)), "price_name", [], "any", false, false, false, 133), "html", null, true);
            echo "</div>
                      </div>
                      <div class=\"s-hotel-info__price-item\">
                        <div class=\"s-hotel-info__price-val\">";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 136), 0, [], "any", false, false, false, 136), "tariffs", [], "any", false, false, false, 136)), "sun_thu", [], "any", false, false, false, 136), "html", null, true);
            echo " <span class=\"s-hotel-info__price-currency\">рублей</span></div>
                        <div class=\"s-hotel-info__price-term\">за ";
            // line 137
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 137), 0, [], "any", false, false, false, 137), "tariffs", [], "any", false, false, false, 137)), "price_name", [], "any", false, false, false, 137)), "html", null, true);
            echo "</div>
                      </div>
                    </div>

                    <div class=\"s-hotel-info__text plaintext\">
                      ";
            // line 142
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 142), 0, [], "any", false, false, false, 142), "type_description", [], "any", false, false, false, 142);
            echo "
                    </div>

                    <div class=\"s-hotel-info__calc-wrap js-calc-wrap\">

\t\t\t\t\t<div class=\"s-hotel-info__title h4\">Выберите тариф</div>
\t\t\t\t\t
\t\t

                      <div class=\"s-hotel-info__tariffs\">
                        <div class=\"tar-table js-tar-table table\" data-sum=\"0\">
                          <div class=\"table__head\">
                            <div class=\"table__tr table__tr_head\">
                              <div class=\"tar-table__main-col table__th\">
\t\t\t\t\t\t\t\tОсновные тарифы
                              </div>
                              <div class=\"tar-table__data-col table__th\">
                                Вс-Чт
                              </div>
                              <div class=\"tar-table__data-col table__th\">
                                ПТ-Сб
                              </div>
                            </div>
                          </div>
                          <div class=\"table__body\">

                            ";
            // line 168
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['hotel'] = ($context["hotel"] ?? null)            ;
            $context['__cms_partial_params']['type'] = "lux"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/tariffsForPrice"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 169
            echo "
                          </div>
                        </div>


<p style=\"margin: 20px 0;\">с 1 апреля 2024 года в соответствии с законом Санкт-Петербурга от 28.06.2023 N 419-81, при заселении в отель более чем на 24 часа, проживающие  обязаны уплатить курортный сбор в размере 100 руб в сутки с человека. От уплаты курортного сбора освобождена льготная категория граждан. Подробнее можно узнать в <a href=\"https://motelspb.com/rules/\"  style=\"text-decoration: underline;color:#fbb03b;\">правилах проживания пункт 7</a></p>
<p>
— Забронированный и оплаченный тариф НЕВОЗМОЖНО изменить/пересчитать в течение проживания.<br>
— Почасовое бронирование осуществляется в день заезда либо за день по телефону.<br>
— Тариф \"Ночной\" не действует в праздничные и предпраздничные дни.<br>
— В случае размещения в номере третьего и последующего гостя, с Вас взимается дополнительная плата в размере 50% от стоимости тарифа за каждого гостя.
</p>
                      </div>
\t\t\t\t\t  
\t\t\t\t\t  
\t\t\t\t\t  

                    <div class=\"payments-pictures-block-outer d-none d-md-block\">
                      <div class=\"payments-pictures-block\">
                        <img src=\"/themes/motel/assets/img/paymentsline.png\" alt=\"\" class=\"payments-pictures-block-img\">
                      </div>
                    </div>

                      ";
            // line 192
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['services'] = ($context["services"] ?? null)            ;
            $context['__cms_partial_params']['offers'] = ($context["offers"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/additional_services"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 193
            echo "
                      <div class=\"hotel-total-box\">
                        <div class=\"hotel-total-box__item h4\">
                          <span class=\"hotel-total-box__text\">Итого:</span>
                          <span class=\"hotel-total-box__number\"><span class=\"hotel-total-box__sum js-hotel-sum\">5 000</span> <span class=\"hotel-total-box__currency\">рублей</span></span>
                        </div>

                        <div class=\"hotel-total-box__booking-wrap\">
                          <a href=\"#booking\" onclick=\" yaCounter23472043.reachGoal('bronOpen'); fbq('track','bronOpen'); return true;\" class=\"hotel-total-box__booking-btn js-top-booking-btn button button_medium button_ghost js-booking-link\">Забронировать</a>
                        </div>


                      </div>

                    </div>

                  </div>
                </div>
                <!-- /Lux Tab Content -->
              ";
        }
        // line 213
        echo "

              ";
        // line 215
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_prop", [], "any", false, false, false, 215)) {
            // line 216
            echo "              <!-- Suite Tab Content -->
              <div class=\"hotel-tabs-content tabs__content js-tabs__content ";
            // line 217
            if ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 217) == false)) {
                echo "active";
            }
            echo "\" data-number-type=\"suite\">

                <div class=\"photo-slider js-photo-slider owl-carousel\" data-desktop-dots=\"1\">
                  ";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_photos", [], "any", false, false, false, 220));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 221
                echo "                    <div class=\"photo-slider__item\">
                      <!-- NOT lazy load image -->
\t\t\t\t\t  <img src=\"";
                // line 223
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 223)]);
                echo "\" srcset=\"";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 223), 320]);
                echo " 320w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                // line 224
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 224), 640]);
                echo " 640w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                // line 225
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 225), 1024]);
                echo " 1024w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                // line 226
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 226)]);
                echo " 1920w\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   alt=\"\" class=\"photo-slider__img\">   
                      
                    </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "                </div>

                

                <div class=\"s-hotel-info__container container\">
                  <div class=\"s-hotel-info__prices-row\">
                    <div class=\"s-hotel-info__price-item\">
                      <div class=\"s-hotel-info__price-val\">От ";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_prop", [], "any", false, false, false, 238), 0, [], "any", false, false, false, 238), "tariffs", [], "any", false, false, false, 238)), "sun_thu", [], "any", false, false, false, 238), "html", null, true);
            echo " <span class=\"s-hotel-info__price-currency\">рублей</span></div>
                      <div class=\"s-hotel-info__price-term\">за ";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_prop", [], "any", false, false, false, 239), 0, [], "any", false, false, false, 239), "tariffs", [], "any", false, false, false, 239)), "price_name", [], "any", false, false, false, 239), "html", null, true);
            echo "</div>
                    </div>
                    <div class=\"s-hotel-info__price-item\">
                      <div class=\"s-hotel-info__price-val\">";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_prop", [], "any", false, false, false, 242), 0, [], "any", false, false, false, 242), "tariffs", [], "any", false, false, false, 242)), "sun_thu", [], "any", false, false, false, 242), "html", null, true);
            echo " <span class=\"s-hotel-info__price-currency\">рублей</span></div>
                      <div class=\"s-hotel-info__price-term\">за ";
            // line 243
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_prop", [], "any", false, false, false, 243), 0, [], "any", false, false, false, 243), "tariffs", [], "any", false, false, false, 243)), "price_name", [], "any", false, false, false, 243)), "html", null, true);
            echo "</div>
                    </div>
                  </div>

                  <div class=\"s-hotel-info__text plaintext\">
                  ";
            // line 248
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_prop", [], "any", false, false, false, 248), 0, [], "any", false, false, false, 248), "type_description", [], "any", false, false, false, 248);
            echo "
                  </div>

                  <div class=\"s-hotel-info__calc-wrap js-calc-wrap\">
\t\t\t\t  
                    <div class=\"s-hotel-info__title h4\">Выберите тариф</div>
\t\t\t\t\t
\t\t\t\t\t\t

                    <div class=\"s-hotel-info__tariffs\">
                      <div class=\"tar-table js-tar-table table\" data-sum=\"0\">
                        <div class=\"table__head\">
                          <div class=\"table__tr table__tr_head\">
                            <div class=\"tar-table__main-col table__th\">
\t\t\t\t\t\t\t\tОсновные тарифы
                            </div>
                            <div class=\"tar-table__data-col table__th\">
                              Вс-Чт
                            </div>
                            <div class=\"tar-table__data-col table__th\">
                              ПТ-Сб
                            </div>
                          </div>
                        </div>
                        <div class=\"table__body\">

                        ";
            // line 274
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['hotel'] = ($context["hotel"] ?? null)            ;
            $context['__cms_partial_params']['type'] = "suite"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/tariffsForPrice"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 275
            echo "
                        </div>
                      </div>

<p style=\"margin: 20px 0;\">с 1 апреля 2024 года в соответствии с законом Санкт-Петербурга от 28.06.2023 N 419-81, при заселении в отель более чем на 24 часа, проживающие  обязаны уплатить курортный сбор в размере 100 руб в сутки с человека. От уплаты курортного сбора освобождена льготная категория граждан. Подробнее можно узнать в <a href=\"https://motelspb.com/rules/\"  style=\"text-decoration: underline;color:#fbb03b;\">правилах проживания пункт 7</a></p>
<p>
— Забронированный и оплаченный тариф НЕВОЗМОЖНО изменить/пересчитать в течение проживания.<br>
— Почасовое бронирование осуществляется в день заезда либо за день по телефону.<br>
— Тариф \"Ночной\" не действует в праздничные и предпраздничные дни.<br>
— В случае размещения в номере третьего и последующего гостя, с Вас взимается дополнительная плата в размере 50% от стоимости тарифа за каждого гостя.
</p>

                    </div>\t

\t

                    <div class=\"payments-pictures-block-outer d-none d-md-block\">
                      <div class=\"payments-pictures-block\">
                        <img src=\"/themes/motel/assets/img/paymentsline.png\" alt=\"\" class=\"payments-pictures-block-img\">
                      </div>
                    </div>

                    ";
            // line 297
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['services'] = ($context["services"] ?? null)            ;
            $context['__cms_partial_params']['offers'] = ($context["offers"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/additional_services"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 298
            echo "
                    <div class=\"hotel-total-box\">
                      <div class=\"hotel-total-box__item h4\">
                        <span class=\"hotel-total-box__text\">Итого:</span>
                        <span class=\"hotel-total-box__number\"><span class=\"hotel-total-box__sum js-hotel-sum\">5 000</span> <span class=\"hotel-total-box__currency\">рублей</span></span>
                      </div>

                      <div class=\"hotel-total-box__booking-wrap\">
                        <a href=\"#booking\" onclick=\" yaCounter23472043.reachGoal('bronOpen'); fbq('track','bronOpen'); return true;\" class=\"hotel-total-box__booking-btn js-top-booking-btn button button_medium button_ghost js-booking-link\">Забронировать</a>
                      </div>


                    </div>

                  </div>

                </div>

              </div>
              <!-- /Suite Tab Content -->
              ";
        }
        // line 319
        echo "
              ";
        // line 320
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 320)) {
            // line 321
            echo "                <!-- Standard Tab Content -->
                <div class=\"hotel-tabs-content tabs__content js-tabs__content\" data-number-type=\"standard\">

                  <div class=\"photo-slider js-photo-slider owl-carousel\" data-desktop-dots=\"1\">
                    ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_photos", [], "any", false, false, false, 325));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 326
                echo "                      <div class=\"photo-slider__item\">
                        <!-- NOT lazy load image -->
\t\t\t\t\t  <img src=\"";
                // line 328
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 328)]);
                echo "\" srcset=\"";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 328), 320]);
                echo " 320w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                // line 329
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 329), 640]);
                echo " 640w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                // line 330
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 330), 1024]);
                echo " 1024w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                // line 331
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["slider"], "path", [], "any", false, false, false, 331)]);
                echo " 1920w\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   alt=\"\" class=\"photo-slider__img\">
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "                  </div>

                  <div class=\"s-hotel-info__container container\">
                    <div class=\"s-hotel-info__prices-row\">
                      <div class=\"s-hotel-info__price-item\">
                        <div class=\"s-hotel-info__price-val\">От ";
            // line 340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 340), 0, [], "any", false, false, false, 340), "tariffs", [], "any", false, false, false, 340)), "sun_thu", [], "any", false, false, false, 340), "html", null, true);
            echo " <span class=\"s-hotel-info__price-currency\">рублей</span></div>
                        <div class=\"s-hotel-info__price-term\">за ";
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 341), 0, [], "any", false, false, false, 341), "tariffs", [], "any", false, false, false, 341)), "price_name", [], "any", false, false, false, 341), "html", null, true);
            echo "</div>
                      </div>
                      <div class=\"s-hotel-info__price-item\">
                        <div class=\"s-hotel-info__price-val\">";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 344), 0, [], "any", false, false, false, 344), "tariffs", [], "any", false, false, false, 344)), "sun_thu", [], "any", false, false, false, 344), "html", null, true);
            echo " <span class=\"s-hotel-info__price-currency\">рублей</span></div>
                        <div class=\"s-hotel-info__price-term\">за ";
            // line 345
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 345), 0, [], "any", false, false, false, 345), "tariffs", [], "any", false, false, false, 345)), "price_name", [], "any", false, false, false, 345)), "html", null, true);
            echo "</div>
                      </div>
                    </div>

                    <div class=\"s-hotel-info__text plaintext\">
                      ";
            // line 350
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 350), 0, [], "any", false, false, false, 350), "type_description", [], "any", false, false, false, 350);
            echo "
                    </div>

                    <div class=\"s-hotel-info__calc-wrap js-calc-wrap\">
\t\t\t\t\t
                      <div class=\"s-hotel-info__title h4\">Выберите тариф</div>
\t\t\t\t\t  
\t\t\t\t\t  

                      <div class=\"s-hotel-info__tariffs\">
                        <div class=\"tar-table js-tar-table table\" data-sum=\"0\">
                          <div class=\"table__head\">
                            <div class=\"table__tr table__tr_head\">
                              <div class=\"tar-table__main-col table__th\">
\t\t\t\t\t\t\t\tОсновные тарифы
                              </div>
                              <div class=\"tar-table__data-col table__th\">
                                Вс-Чт
                              </div>
                              <div class=\"tar-table__data-col table__th\">
                                ПТ-Сб
                              </div>
                            </div>
                          </div>
                          <div class=\"table__body\">

                            ";
            // line 376
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['hotel'] = ($context["hotel"] ?? null)            ;
            $context['__cms_partial_params']['type'] = "standard"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/tariffsForPrice"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 377
            echo "
                          </div>\t\t\t\t  
\t\t\t\t\t\t\t
                        </div>
\t\t\t\t\t\t
                      </div>
\t\t\t\t\t  
\t<!---------------------------------------------------------->\t\t\t\t

";
            // line 386
            if ((twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 386) == "marata")) {
                echo "\t
                      <div class=\"s-hotel-info__tariffs\">
                        <div class=\"tar-table table\" >
                          <div class=\"table__head\">
                            <div class=\"table__tr table__tr_head\">
                              <div class=\"tar-table__main-col table__th\">
\t\t\t\t\t\t\t\tДополнительные тарифы
                              </div>
                              <div class=\"tar-table__data-col table__th\">
                                Стоимость
                              </div>
                            </div>
                          </div>
                          <div class=\"table__body\">
<div class=\"table__tr\">
\t<div class=\"tar-table__main-col table__td\"><a href=\"/stocks/stock/tarif-vyhodnoj/\">Выходные дни<br>суббота-воскресенье<br>(цена за 2 суток)</a></div>
\t<div class=\"tar-table__data-col table__td  js-tar-table-data\">5000</div>
</div>
</div></div></div>\t
";
            }
            // line 406
            echo "
<p style=\"margin: 20px 0;\">с 1 апреля 2024 года в соответствии с законом Санкт-Петербурга от 28.06.2023 N 419-81, при заселении в отель более чем на 24 часа, проживающие  обязаны уплатить курортный сбор в размере 100 руб в сутки с человека. От уплаты курортного сбора освобождена льготная категория граждан. Подробнее можно узнать в <a href=\"https://motelspb.com/rules/\"  style=\"text-decoration: underline;color:#fbb03b;\">правилах проживания пункт 7</a></p>


<p>
— Забронированный и оплаченный тариф НЕВОЗМОЖНО изменить/пересчитать в течение проживания.<br>
— Почасовое бронирование осуществляется в день заезда либо за день по телефону.<br>
— Тариф \"Ночной\" не действует в праздничные и предпраздничные дни.<br>
— В случае размещения в номере третьего и последующего гостя, с Вас взимается дополнительная плата в размере 50% от стоимости тарифа за каждого гостя.
</p>\t<br><br>\t\t\t\t\t\t  
\t<!----------------------------------------------------------->\t\t\t\t\t\t  

                    <div class=\"payments-pictures-block-outer d-none d-md-block\">
                      <div class=\"payments-pictures-block\">
                        <img src=\"/themes/motel/assets/img/paymentsline.png\" alt=\"\" class=\"payments-pictures-block-img\">
                      </div>
                    </div>

                      <div class=\"s-hotel-info__title h4\">Выберите дополнительтные услуги</div>

                      ";
            // line 426
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['services'] = ($context["services"] ?? null)            ;
            $context['__cms_partial_params']['offers'] = ($context["offers"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/additional_services"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 427
            echo "
                      <div class=\"hotel-total-box\">
                        <div class=\"hotel-total-box__item h4\">
                          <span class=\"hotel-total-box__text\">Итого:</span>
                          <span class=\"hotel-total-box__number\"><span class=\"hotel-total-box__sum js-hotel-sum\">5 000</span> <span class=\"hotel-total-box__currency\">рублей</span></span>
                        </div>

                        <div class=\"hotel-total-box__booking-wrap\">
                          <a href=\"#booking\" onclick=\" yaCounter23472043.reachGoal('bronOpen'); fbq('track','bronOpen'); return true;\" class=\"hotel-total-box__booking-btn js-top-booking-btn button button_medium button_ghost js-booking-link\">Забронировать</a>
                        </div>


                      </div>

                    </div>

                  </div>

                </div>
                <!-- /Standard Tab Content -->
              ";
        }
        // line 448
        echo "

            </div>
          </div>
          <!-- /Tabs -->

          <div class=\"hotel-illustration\">
            <!-- Sky -->
            <div class=\"hotel-illustration__stars starry-sky-canvas\">
              <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"25\"></div>
            </div>
            <!-- /Sky -->

                      
          
            <!-- Flame offer block (tablet) -->
            <div class=\"hotel-illustration__offer d-none d-md-block d-lg-none\">
              <div class=\"special-offer-outer js-special-offer-outer js-special-offer-outer-clone\">
                <div class=\"special-offer js-special-offer\">
                  <div class=\"special-offer__icon-wrap\">
                    <img src=\"/themes/motel/assets/img/flame.svg\"  class=\"special-offer__icon js-svg\" alt=\"\">
                  </div>
                  <div class=\"special-offer__content\">
                    <div class=\"special-offer__title\">ТАРИФ «ВЫХОДНОЙ»</div>
                    <div class=\"special-offer__txt\">
                      <p>12 часовое проживание</p>
                      <p>Действует в период с 11:00 СБ до 11:00 ПН. Бронирование осуществляется в день заезда или за день до него.</p>
                    </div>
                    <a href=\"#\" class=\"special-offer__link\">Подробнее <img src=\"/themes/motel/assets/img/arrow-right.svg\" class=\"special-offer__link-icon js-svg\" alt=\"\"></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Flame offer block (tablet) -->

            <div class=\"hotel-illustration__container container\">
              <img src=\"/themes/motel/assets/img/hotel-illustration.png\" srcset=\"/themes/motel/assets/img/hotel-illustration@2x.png 2x\" alt=\"illustration\" class=\"hotel-illustration__img\">
            </div>

          </div>

        </div>
      
    </div>
\t
\t
\t<div class=\"photo-slider js-photo-slider owl-carousel\">
      ";
        // line 495
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slider", [], "any", false, false, false, 495));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 496
            echo "        <div class=\"photo-slider__item\">
\t\t\t\t\t  <img src=\"";
            // line 497
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "path", [], "any", false, false, false, 497)]);
            echo "\" srcset=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "path", [], "any", false, false, false, 497), 320]);
            echo " 320w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 498
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "path", [], "any", false, false, false, 498), 640]);
            echo " 640w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 499
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "path", [], "any", false, false, false, 499), 1024]);
            echo " 1024w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 500
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "path", [], "any", false, false, false, 500)]);
            echo " 1920w\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   alt=\"\" class=\"photo-slider__img\">\t\t  
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 504
        echo "    </div>
\t

    ";
        // line 507
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/reviews_slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 508
        echo "
    <div class=\"darkcommontheme darkblurtheme\">
      
      <div class=\"darkgradtheme__inner-blured\">
        <div class=\"s-convenience section\">
          <!-- Sky -->
          <div class=\"s-convenience__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\"></div>
          </div>
          <!-- /Sky -->
          <div class=\"s-convenience__container container\">
            <div class=\"s-convenience__title h2\">Удобства отеля</div>
          </div>
          
          <div class=\"offer-items\">
            <div class=\"offer-items__container container\">
              <div class=\"offer-items__row row\">
                
                <div class=\"offer-items__col col-lg-4 col-md-6\">
                  <div class=\"offer-item\">
                    <div class=\"offer-item__icon-wrap\">
                      <img src=\"/themes/motel/assets/img/convenience1.svg\" alt=\"\" class=\"offer-item__icon\">
                    </div>
                    <div class=\"offer-item__descr\">
                      <div class=\"offer-item__title\">Роскошные современные интерьеры</div>
                    </div>
                  </div>
                </div>
                
                <div class=\"offer-items__col col-lg-4 col-md-6\">
                  <div class=\"offer-item\">
                    <div class=\"offer-item__icon-wrap\">
                      <img src=\"/themes/motel/assets/img/convenience2.svg\" alt=\"\" class=\"offer-item__icon\">
                    </div>
                    <div class=\"offer-item__descr\">
                      <div class=\"offer-item__title\">SPA ванны</div>
                    </div>
                  </div>
                </div>
                
                <div class=\"offer-items__col col-lg-4 col-md-6\">
                  <div class=\"offer-item\">
                    <div class=\"offer-item__icon-wrap\">
                      <img src=\"/themes/motel/assets/img/convenience3.svg\" alt=\"\" class=\"offer-item__icon\">
                    </div>
                    <div class=\"offer-item__descr\">
                      <div class=\"offer-item__title\">Квалифицированный персонал
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class=\"offer-items__col col-lg-4 col-md-6\">
                  <div class=\"offer-item\">
                    <div class=\"offer-item__icon-wrap\">
                      <img src=\"/themes/motel/assets/img/convenience4.svg\" alt=\"\" class=\"offer-item__icon\">
                    </div>
                    <div class=\"offer-item__descr\">
                      <div class=\"offer-item__title\">Почасовая оплата</div>
                    </div>
                  </div>
                </div>
                
                <div class=\"offer-items__col col-lg-4 col-md-6\">
                  <div class=\"offer-item\">
                    <div class=\"offer-item__icon-wrap\">
                      <img src=\"/themes/motel/assets/img/convenience5.svg\" alt=\"\" class=\"offer-item__icon\">
                    </div>
                    <div class=\"offer-item__descr\">
                      <div class=\"offer-item__title\">Бар с напитками</div>
                    </div>
                  </div>
                </div>
                
                <div class=\"offer-items__col col-lg-4 col-md-6\">
                  <div class=\"offer-item\">
                    <div class=\"offer-item__icon-wrap\">
                      <img src=\"/themes/motel/assets/img/convenience6.svg\" alt=\"\" class=\"offer-item__icon\">
                    </div>
                    <div class=\"offer-item__descr\">
                      <div class=\"offer-item__title\">Кондиционеры</div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    <div class=\"darkcommontheme darkgradtheme\">
                
      
      <div class=\"s-how-get section\" id=\"how-get\">
        <!-- Sky -->
        <div class=\"s-how-get__starry starry-sky-canvas\">
          <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\"></div>
        </div>
        <!-- /Sky -->
        <div class=\"s-how-get__container container\">
          <h2 class=\"s-how-get__title h2\">Как добраться</h2>
          <div class=\"s-how-get__box row\">
            <div class=\"s-how-get__col col-md-6\">
              <div class=\"s-how-get__hotel-title h5\">Отель ";
        // line 614
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", [], "any", false, false, false, 614), "html", null, true);
        echo "</div>
              <!-- mobile scheme -->
              <div class=\"s-how-get__scheme d-md-none\">
                ";
        // line 617
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "how_to_get_to_map", [], "any", false, false, false, 617), "path", [], "any", false, false, false, 617)) {
            // line 618
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "how_to_get_to_map", [], "any", false, false, false, 618), "path", [], "any", false, false, false, 618), "html", null, true);
            echo "\" alt=\"Схема проезда\" class=\"s-how-get__scheme-img\">
                ";
        }
        // line 620
        echo "              </div>
              <!-- /mobile scheme -->
              <div class=\"s-how-get__hotel-location\">
                <div class=\"s-how-get__location-title h4\">Адрес:</div>
                <div class=\"s-how-get__location-info\">
                  <div class=\"s-how-get__metro\">
                    <span class=\"s-how-get__metro-name\">";
        // line 626
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "metro", [], "any", false, false, false, 626), "html", null, true);
        echo "</span>

                      <img src=\"/themes/motel/assets/img/metro.svg\" alt=\"metro sign\" class=\"hotel-main-descr__metro-icon metro-icon  ";
        // line 628
        echo twig_escape_filter($this->env, ($context["metro_color"] ?? null), "html", null, true);
        echo " js-svg\">
                  </div>
                  <div class=\"s-how-get__address\">";
        // line 630
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "address", [], "any", false, false, false, 630), "html", null, true);
        echo "
\t\t\t\t  
\t\t\t\t<br><br>
\t\t\t\t";
        // line 633
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "yandex_map_link", [], "any", false, false, false, 633)) {
            // line 634
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "yandex_map_link", [], "any", false, false, false, 634), "html", null, true);
            echo "\">на Яндекс картах →</a><br>
\t\t\t\t";
        }
        // line 636
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "google_map_link", [], "any", false, false, false, 636)) {
            // line 637
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "google_map_link", [], "any", false, false, false, 637), "html", null, true);
            echo "\">на Google картах →</a>
\t\t\t\t";
        }
        // line 638
        echo "\t\t\t\t  
\t\t\t\t  
\t\t\t\t  </div>
                </div>
              </div>
              <div class=\"s-how-get__hotel-contact\">
                <span class=\"s-how-get__contact-title h4\">Телефон:</span>
\t\t\t\t<div style=\"display: inline-block; vertical-align: top;;\">
                <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"s-how-get__contact-phone\">+7-812-468-77-77</a><br>
\t\t\t\t<a href=\"tel:+78124030091\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"s-how-get__contact-phone\">+7-812-403-00-91</a>
\t\t\t\t</div>
\t\t\t\t
              </div>
              <div class=\"s-how-get__hotel-note\">";
        // line 651
        echo twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "comment_how_to_get_to", [], "any", false, false, false, 651);
        echo "</div>
            </div>
            <div class=\"s-how-get__col col-md-6\">
              <!-- desktop scheme -->
              <div class=\"s-how-get__scheme d-none d-md-block\">
                ";
        // line 656
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "how_to_get_to_map", [], "any", false, false, false, 656), "path", [], "any", false, false, false, 656)) {
            // line 657
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "how_to_get_to_map", [], "any", false, false, false, 657), "path", [], "any", false, false, false, 657), "html", null, true);
            echo "\" alt=\"Схема проезда\" class=\"s-how-get__scheme-img\">
                ";
        }
        // line 659
        echo "              </div>
              <!-- /desktop scheme -->
            </div>
          </div>
        </div>
      </div>

        ";
        // line 666
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "how_to_get_to_photo", [], "any", false, false, false, 666), "path", [], "any", false, false, false, 666)) {
            // line 667
            echo "        <div class=\"photo-slider__item\">
            <img src=\"";
            // line 668
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "how_to_get_to_photo", [], "any", false, false, false, 668), "path", [], "any", false, false, false, 668), "html", null, true);
            echo "\" alt=\"\" class=\"photo-slider__img\">
        </div>
        ";
        }
        // line 671
        echo "
      
    </div>
\t
\t";
        // line 675
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "seo_text", [], "any", false, false, false, 675)) {
            echo "\t
\t<div class=\"s-main-about section\">
\t\t<div class=\"s-main-about__container container\">\t
\t\t\t<div class=\"read-more special-text\">
\t\t\t\t";
            // line 679
            echo twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "seo_text", [], "any", false, false, false, 679);
            echo "
\t\t\t\t<p class=\"prompt\"><a href=\"#\">читать дальше</a></p>
\t\t\t</div>
\t\t</div>\t
\t</div>
\t";
        }
        // line 684
        echo "\t
\t
    
  </main>
  <!-- /Main content -->
  
    
  <!-- Footer -->
  ";
        // line 692
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 693
        echo "  <!-- /Footer -->
  
  <!-- Modals -->
  <div class=\"modals hidden\">    
    
\t";
        // line 698
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/booking-popup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  
  </div>
  <!-- /Modals -->  
  
  
  <script>
    // Data for the markers consisting of a name, title, a LatLng, zIndex  and state (optional)
    var gMapHotels = [
      ['";
        // line 706
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 706), "html", null, true);
        echo "', 'Отель ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", [], "any", false, false, false, 706), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "coordinates", [], "any", false, false, false, 706), "html", null, true);
        echo ", 1],
    ";
        // line 710
        echo "    ];
  </script>
  
  <!-- google maps api -->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAosLw6LPVOHPdiVUr8mClGPM6hKzTt1v4\"></script> <!--AIzaSyDO0Hiz_xAaWmeF9QUlqTHPAyDwWoZ9Bxk*--Ю
  
  ";
        // line 716
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 717
        echo "  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/hotel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1164 => 717,  1160 => 716,  1152 => 710,  1144 => 706,  1131 => 698,  1124 => 693,  1120 => 692,  1110 => 684,  1101 => 679,  1094 => 675,  1088 => 671,  1082 => 668,  1079 => 667,  1077 => 666,  1068 => 659,  1062 => 657,  1060 => 656,  1052 => 651,  1037 => 638,  1031 => 637,  1028 => 636,  1022 => 634,  1020 => 633,  1014 => 630,  1009 => 628,  1004 => 626,  996 => 620,  990 => 618,  988 => 617,  982 => 614,  874 => 508,  870 => 507,  865 => 504,  855 => 500,  851 => 499,  847 => 498,  841 => 497,  838 => 496,  834 => 495,  785 => 448,  762 => 427,  756 => 426,  734 => 406,  711 => 386,  700 => 377,  694 => 376,  665 => 350,  657 => 345,  653 => 344,  647 => 341,  643 => 340,  636 => 335,  626 => 331,  622 => 330,  618 => 329,  612 => 328,  608 => 326,  604 => 325,  598 => 321,  596 => 320,  593 => 319,  570 => 298,  564 => 297,  540 => 275,  534 => 274,  505 => 248,  497 => 243,  493 => 242,  487 => 239,  483 => 238,  474 => 231,  463 => 226,  459 => 225,  455 => 224,  449 => 223,  445 => 221,  441 => 220,  433 => 217,  430 => 216,  428 => 215,  424 => 213,  402 => 193,  396 => 192,  371 => 169,  365 => 168,  336 => 142,  328 => 137,  324 => 136,  318 => 133,  314 => 132,  307 => 127,  298 => 124,  293 => 122,  289 => 121,  285 => 120,  279 => 119,  275 => 117,  271 => 116,  265 => 112,  263 => 111,  255 => 105,  250 => 104,  241 => 103,  237 => 102,  224 => 91,  216 => 87,  210 => 84,  196 => 72,  191 => 70,  188 => 69,  182 => 68,  180 => 67,  176 => 65,  171 => 63,  168 => 62,  162 => 61,  160 => 60,  152 => 55,  146 => 53,  143 => 52,  140 => 51,  137 => 50,  134 => 49,  131 => 48,  128 => 47,  125 => 46,  122 => 45,  119 => 44,  116 => 43,  114 => 42,  110 => 41,  97 => 36,  94 => 35,  90 => 33,  88 => 32,  84 => 30,  82 => 29,  74 => 23,  70 => 22,  63 => 17,  59 => 16,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/hotel.htm", "");
    }
}
