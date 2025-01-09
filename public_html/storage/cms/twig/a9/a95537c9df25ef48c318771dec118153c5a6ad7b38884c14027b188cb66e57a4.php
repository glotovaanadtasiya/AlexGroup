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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/price.htm */
class __TwigTemplate_104bcb7046e77d64d47d06834ea1ed943a880abf4965570791d473f28e8e94b7 extends \Twig\Template
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
  
<meta charset=\"utf-8\">
  <!-- <base href=\"/\"> -->
  
  <title>Забронировать номер на час с джакузи в Санкт-Петербурге </title>
  <meta name=\"description\" content=\"Рейтинг ⭐⭐⭐⭐⭐ 5  на основе ‎326 голосов. Забронировать недорогой номер в мини отеле на час с джакузи во всех районах города Санкт-Петербурга по лучшей доступной и всегда актуальной цене 12 часов 2900 рублей.\">
  <meta name=\"keywords\" content=\"Забронировать номер на час в Мотель Спб\">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  
  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#1D1D1D\">
  <!-- Custom Browsers Color End -->
  
 <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.min.css");
        echo "?";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "YmdH"), "html", null, true);
        echo "\" />
 
";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/head-scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
  
</head>

<body class=\"js-body\">
  
  <div class=\"darkcommontheme darkblurtheme\">
      
    <div class=\"header-group\">
      <!-- Header -->
      ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "      <!-- /Header -->
    </div>
    
  </div>

  
  
  
  
  
  <!-- Main content -->
  <main class=\"main\">
    
    <div class=\"darkcommontheme darkblurtheme\">      
      
      <div class=\"s-hotel-info s-hotel-info_indent\">   
        
        <!-- Flame offer block (desktop) -->
        <div class=\"s-hotel-info__offer s-hotel-info__offer_reset\">
          ";
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        echo "        </div>
        <!-- /Flame offer block (desktop) -->
        
        <div class=\"container\">
          <h1 class=\"s-hotel-info__heading h1\">Цены на проживание</h1>
        </div>
        
        <!-- Tabs -->
        <div class=\"tabs js-tabs\">         
          <!-- Tabs Buttons -->
          <div class=\"hotel-tabs-switches-wrap tabs__switches-wrap\">
            <div class=\"s-hotel-info__container tabs__switches-container container\">
              <div class=\"hotel-tabs-switches tabs__switches\">
                <div class=\"tabs__switch js-tabs__switch active\" data-number-type=\"standard\"><span class=\"d-none d-md-inline\">Номера</span> стандарт</div>
                <div class=\"tabs__switch js-tabs__switch\" data-number-type=\"suite\"><span class=\"d-none d-md-inline\">Номера</span> полу-люкс</div>
                <div class=\"tabs__switch js-tabs__switch\" data-number-type=\"lux\"><span class=\"d-none d-md-inline\">Номера</span> люкс</div>
              </div>
            </div>
          </div>         
          <!-- /Tabs Buttons -->
          
          <div class=\"tabs__contents\">
            <!-- Standard Tab Content -->
            <div class=\"hotel-tabs-content tabs__content js-tabs__content active\" data-number-type=\"standard\">
              
              
              <div class=\"s-hotel-info__container container\">
                
                <div class=\"s-hotel-info__select-row\">
                  <div class=\"s-hotel-info__select-wrap select-wrap js-find-room\">
                    <select class=\"select js-select-price\" name=\"hotel-select\" onchange=\"document.getElementsByClassName('s-hotel-info__about-link')[0].setAttribute('href', '/hotels/' + this.value);\" autocomplete=\"off\">
                      <option disabled hidden value=\"\">Отель</option>
                      ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 93
            echo "                      <option hotelid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 93), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 93), "html", null, true);
            echo "\">Отель \\n ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 93), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                    </select>
                  </div>
                  
                  <a href=\"/hotels/";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotels"] ?? null), "first", [], "any", false, false, false, 98), "slug", [], "any", false, false, false, 98), "html", null, true);
        echo "\" class=\"s-hotel-info__about-link\">
                    <span class=\"s-hotel-info__about-link-text\">Об отеле</span>
                    <img src=\"/themes/motel/assets/img/arrow-right.svg\" alt=\"\" class=\"s-hotel-info__about-link-arrow js-svg\">
                  </a>
                </div>
                
                <div class=\"s-hotel-info__calc-wrap js-calc-wrap\">  
                 
                  <div class=\"s-hotel-info__title h4\">Выберите тариф</div>
\t\t\t\t  
\t\t\t\t\t  
                  
                  <div class=\"s-hotel-info__tariffs\">
                    <div class=\"tar-table js-tar-table table\" data-sum=\"0\">
                      <div class=\"table__head\">
                        <div class=\"table__tr table__tr_head\">
                          <div class=\"tar-table__main-col table__th\">
                            Основные тарифы
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
        // line 126
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['hotel'] = twig_get_attribute($this->env, $this->source, ($context["hotels"] ?? null), "first", [], "any", false, false, false, 126)        ;
        $context['__cms_partial_params']['type'] = "standard"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/tariffsForPrice"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 127
        echo "                      </div>
                    </div>
                    
                  </div>
\t\t\t\t  
\t\t\t\t  
\t<!---------------------------------------------------------->\t\t\t\t

                     <div class=\"s-hotel-info__tariffs dop-marata\" style=\"display: none;\">
                        <div class=\"tar-table table\" >
                          <div class=\"table__head\">
                            <div class=\"table__tr table__tr_head\">
                              <div class=\"tar-table__main-col table__th\">
\t\t\t\t\t\t\t\tДополнительный тариф
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

<p style=\"margin: 20px 0;\">с 1 апреля 2024 года в соответствии с законом Санкт-Петербурга от 28.06.2023 N 419-81, при заселении в отель более чем на 24 часа, проживающие  обязаны уплатить курортный сбор в размере 100 руб в сутки с человека. От уплаты курортного сбора освобождена льготная категория граждан. Подробнее можно узнать в <a href=\"https://motelspb.com/rules/\" style=\"text-decoration: underline;color:#fbb03b;\">правилах проживания пункт 7</a></p>
<p>
— Забронированный и оплаченный тариф НЕВОЗМОЖНО изменить/пересчитать в течение проживания.<br>
— Почасовое бронирование осуществляется в день заезда либо за день по телефону.<br>
— Тариф \"Ночной\" не действует в праздничные и предпраздничные дни.<br>
— В случае размещения в номере третьего и последующего гостя, с Вас взимается дополнительная плата в размере 50% от стоимости тарифа за каждого гостя.
</p>\t<br><br>\t\t\t\t\t\t  
\t<!----------------------------------------------------------->\t\t\t\t  
\t\t\t\t  

                    <div class=\"payments-pictures-block-outer d-none d-md-block\">
                      <div class=\"payments-pictures-block\">
                        <img src=\"/themes/motel/assets/img/paymentsline.png\" alt=\"\" class=\"payments-pictures-block-img\">
                      </div>
                    </div>

                  <div class=\"s-hotel-info__title h4\">Выберите дополнительтные услуги</div>
                  ";
        // line 171
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['services'] = ($context["services"] ?? null)        ;
        $context['__cms_partial_params']['offers'] = ($context["offers"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/additional_services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 172
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
            
            <!-- Suite Tab Content -->
            <div class=\"hotel-tabs-content tabs__content js-tabs__content\" data-number-type=\"suite\">
              
              <div class=\"s-hotel-info__container container\">
                
                <div class=\"s-hotel-info__select-row\">
                  <div class=\"s-hotel-info__select-wrap select-wrap js-find-room\">
                    <select class=\"select js-select-price\" name=\"hotel-select\" onchange=\"document.getElementsByClassName('s-hotel-info__about-link')[1].setAttribute('href', '/hotels/' + this.value);\" autocomplete=\"off\">
                      <option disabled hidden value=\"\">Отель</option>
                      ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 200
            echo "                      <option hotelid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 200), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 200), "html", null, true);
            echo "\">Отель \\n ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 200), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "                    </select>
                  </div>
                  
                  <a href=\"/hotels/";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotels"] ?? null), "first", [], "any", false, false, false, 205), "slug", [], "any", false, false, false, 205), "html", null, true);
        echo "\" class=\"s-hotel-info__about-link\">
                    <span class=\"s-hotel-info__about-link-text\">Об отеле</span>
                    <img src=\"/themes/motel/assets/img/arrow-right.svg\" alt=\"\" class=\"s-hotel-info__about-link-arrow js-svg\">
                  </a>
                </div>
                
                <div class=\"s-hotel-info__calc-wrap js-calc-wrap\">   
            
                  <div class=\"s-hotel-info__title h4\">Выберите тариф</div>
\t\t\t\t  
\t\t\t\t\t  
\t\t\t\t  
                  
                  <div class=\"s-hotel-info__tariffs\">
                    <div class=\"tar-table js-tar-table table\" data-sum=\"0\">
                      <div class=\"table__head\">
                        <div class=\"table__tr table__tr_head\">
                          <div class=\"tar-table__main-col table__th\">
                            Основные тарифы
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
        // line 234
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['hotel'] = twig_get_attribute($this->env, $this->source, ($context["hotels"] ?? null), "first", [], "any", false, false, false, 234)        ;
        $context['__cms_partial_params']['type'] = "suite"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/tariffsForPrice"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 235
        echo "                      </div>
                    </div>
\t\t\t\t\t
\t\t\t\t\t
<p style=\"margin: 20px 0;\">с 1 апреля 2024 года в соответствии с законом Санкт-Петербурга от 28.06.2023 N 419-81, при заселении в отель более чем на 24 часа, проживающие  обязаны уплатить курортный сбор в размере 100 руб в сутки с человека. От уплаты курортного сбора освобождена льготная категория граждан. Подробнее можно узнать в <a href=\"https://motelspb.com/rules/\" style=\"text-decoration: underline;color:#fbb03b;\">правилах проживания пункт 7</a></p>
<p>
— Забронированный и оплаченный тариф НЕВОЗМОЖНО изменить/пересчитать в течение проживания.<br>
— Почасовое бронирование осуществляется в день заезда либо за день по телефону.<br>
— Тариф \"Ночной\" не действует в праздничные и предпраздничные дни.<br>
— В случае размещения в номере третьего и последующего гостя, с Вас взимается дополнительная плата в размере 50% от стоимости тарифа за каждого гостя.
</p>
                    
                  </div>
\t\t\t\t  

\t\t  
\t\t\t\t  

                  <div class=\"payments-pictures-block-outer d-none d-md-block\">
                      <div class=\"payments-pictures-block\">
                        <img src=\"/themes/motel/assets/img/paymentsline.png\" alt=\"\" class=\"payments-pictures-block-img\">
                      </div>
                    </div>

                  <div class=\"s-hotel-info__title h4\">Выберите дополнительтные услуги</div>

                  ";
        // line 261
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['services'] = ($context["services"] ?? null)        ;
        $context['__cms_partial_params']['offers'] = ($context["offers"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/additional_services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 262
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
            
            <!-- Lux Tab Content -->
            <div class=\"hotel-tabs-content tabs__content js-tabs__content\" data-number-type=\"lux\">
              <div class=\"s-hotel-info__container container\">
                
                <div class=\"s-hotel-info__select-row\">
                  <div class=\"s-hotel-info__select-wrap select-wrap js-find-room\">
                    <select class=\"select js-select-price\" name=\"hotel-select\" onchange=\"document.getElementsByClassName('s-hotel-info__about-link')[2].setAttribute('href', '/hotels/' + this.value);\" autocomplete=\"off\">
                      <option disabled hidden value=\"\">Отель</option>
                      ";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 288
            echo "                      <option hotelid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 288), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 288), "html", null, true);
            echo "\">Отель \\n ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 288), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "                    </select>
                  </div>
                  
                  <a href=\"/hotels/";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotels"] ?? null), "first", [], "any", false, false, false, 293), "slug", [], "any", false, false, false, 293), "html", null, true);
        echo "\" class=\"s-hotel-info__about-link\">
                    <span class=\"s-hotel-info__about-link-text\">Об отеле</span>
                    <img src=\"/themes/motel/assets/img/arrow-right.svg\" alt=\"\" class=\"s-hotel-info__about-link-arrow js-svg\">
                  </a>
                </div>
                
                <div class=\"s-hotel-info__calc-wrap js-calc-wrap\">    
  
                  <div class=\"s-hotel-info__title h4\">Выберите тариф</div>
\t\t\t\t  
\t\t\t\t\t  
                  
                  <div class=\"s-hotel-info__tariffs\">
                    <div class=\"tar-table js-tar-table table\" data-sum=\"0\">
                      <div class=\"table__head\">
                        <div class=\"table__tr table__tr_head\">
                          <div class=\"tar-table__main-col table__th\">
                            Основные тарифы
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
        // line 321
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['hotel'] = twig_get_attribute($this->env, $this->source, ($context["hotels"] ?? null), "first", [], "any", false, false, false, 321)        ;
        $context['__cms_partial_params']['type'] = "lux"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/tariffsForPrice"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 322
        echo "                      </div>
                    </div>
\t\t\t\t\t<br>
\t\t\t\t\t
<p style=\"margin: 20px 0;\">с 1 апреля 2024 года в соответствии с законом Санкт-Петербурга от 28.06.2023 N 419-81, при заселении в отель более чем на 24 часа, проживающие  обязаны уплатить курортный сбор в размере 100 руб в сутки с человека. От уплаты курортного сбора освобождена льготная категория граждан. Подробнее можно узнать в <a href=\"https://motelspb.com/rules/\" style=\"text-decoration: underline;color:#fbb03b;\">правилах проживания пункт 7</a></p>\t\t\t\t\t
<p>
— Забронированный и оплаченный тариф НЕВОЗМОЖНО изменить/пересчитать в течение проживания.<br>
— Почасовое бронирование осуществляется в день заезда либо за день по телефону.<br>
— Тариф \"Ночной\" не действует в праздничные и предпраздничные дни.<br>
— В случае размещения в номере третьего и последующего гостя, с Вас взимается дополнительная плата в размере 50% от стоимости тарифа за каждого гостя.
</p>
                    
                  </div>
\t\t\t\t  

\t\t\t\t  

                  <div class=\"payments-pictures-block-outer d-none d-md-block\">
                      <div class=\"payments-pictures-block\">
                        <img src=\"/themes/motel/assets/img/paymentsline.png\" alt=\"\" class=\"payments-pictures-block-img\">
                      </div>
                    </div>

                  <div class=\"s-hotel-info__title h4\">Выберите дополнительтные услуги</div>

                  ";
        // line 347
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['services'] = ($context["services"] ?? null)        ;
        $context['__cms_partial_params']['offers'] = ($context["offers"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/additional_services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 348
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
            <!-- /Lux Tab Content -->
          </div>
        </div>
        <!-- /Tabs -->
        
      </div>
      
    </div>
  </div>
    
 
<!-- map - map - map - map - map - map - map - map - map - map - map - map - map - map - map - map -->
  <script src=\"https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=cf3923d1-7a99-4510-8581-f0404b944dc2\" type=\"text/javascript\"></script>

  \t  
<script>
ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map('map', {
            center: [59.9376466, 30.3552034],
            zoom: 10,
\t\t\tcontrols: ['zoomControl']
        });
\tmyMap.behaviors.disable('scrollZoom'); // — это отключает зум колёсиком мышки, всё ок.
\t
\tvar collection = new ymaps.GeoObjectCollection(null, {
        // Запретим появление балуна.
        hasBalloon: false,
        iconColor: '#3b5998'
    });

    // Добавим геообъекты в коллекцию.
    collection
    ";
        // line 396
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            echo "\t
        .add(new ymaps.Placemark( [";
            // line 397
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "coordinates", [], "any", false, false, false, 397), "html", null, true);
            echo "], {
            balloonContent: '";
            // line 398
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 398), "html", null, true);
            echo "'
        },\t
\t\t{
\t\t
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/themes/motel/assets/img/map-crystal.svg',
            // Размеры метки.
            iconImageSize: [29, 21],
            // Смещение левого верхнего угла иконки относительно
            // её \"ножки\" (точки привязки).
            iconImageOffset: [-15, -21]
\t\t}
\t\t))
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "\t;
\t

\t
\t\t
    // Добавим коллекцию на карту.
    myMap.geoObjects.add(collection);

\t
\t
\tcollection.events.add('click', function (e) {
\t\t\tvar curMarker = e.get('target');\t
            var hotelName = curMarker.properties.get('balloonContent');
            //console.log('Marker ' + hotelName + ' has been clicked');
\t\t\t
            activateMarker(hotelName);

            if (curMarker.status !== 'pending') {
                \$(\".js-map-select\").val(hotelName).trigger(\"change\");
            }

            for (var j = 0; j < markers.length; j++) {
                markers[j].setIcon(normalIcon);
                markers[j].setAnimation(null);

                if (markers[j].status === \"pending\") {
                    markers[j].setIcon(normalIconPending);
                }
            }

            this.setIcon(activeIcon);

            if (curMarker.status === 'pending') {
                curMarker.setIcon(activeIconPending);
            }

            this.setAnimation(google.maps.Animation.BOUNCE);
            setTimeout(function() {
                curMarker.setAnimation(null);
            }, 1000);
            // change zIndex of active marker 

            zIndexMarker++;
            this.setZIndex(zIndexMarker);
\t\t\t
        });
  
\t
\t/*
    // Подпишемся на событие клика по коллекции.
    collection.events.add('click', function (e) {
        // Получим ссылку на геообъект, по которому кликнул пользователь.
        var target = e.get('target');
        // Зададим контент боковой панели.
        panel.setContent(target.properties.get('balloonContent'));
        // Переместим центр карты по координатам метки с учётом заданных отступов.
        map.panTo(target.geometry.getCoordinates(), {useMapMargin: true});
    });
\t*/

    //['";
        // line 474
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 474), "html", null, true);
        echo "', 'Отель ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", [], "any", false, false, false, 474), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "coordinates", [], "any", false, false, false, 474), "html", null, true);
        echo ", 1, ,";
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "low_price", [], "any", false, false, false, 474)) {
            echo "'pending'";
        }
        echo "],
    
   

}
</script>\t 
<style>
.ymaps-2-1-79-ground-pane {
    -webkit-filter: grayscale(100%) invert(90%);
\tfilter: grayscale(100%) invert(90%);
\t
}
</style>


  <div class=\"gmap-box darkcommontheme\">
\t<div id=\"map\" style=\"height: 600px; position: absolute; left: 0; top: 0; width: 100%; height: 100%;\"></div>
\t<div class=\"gmap-box__cards-box js-s-map-cards-box\">
      <div class=\"gmap-box__cards-container container\">
        
        ";
        // line 494
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 495
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['hotel'] = $context["hotel"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/hotelCardOnMap"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 496
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 497
        echo "

      </div> 
    </div>
  </div>
  <!-- map - map - map - map - map - map - map - map - map - map - map - map - map - map - map - map --> 
\t
\t
\t
\t
  </main>
  <!-- /Main content -->
  
  
  <!-- Footer -->
  ";
        // line 512
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 513
        echo "  <!-- /Footer -->
  
  
  
  <!-- Modals -->
  <div class=\"modals hidden\">    
    
    ";
        // line 520
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/booking-popup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "   
  </div>
  <!-- /Modals -->  
  
  <script>
    // Data for the markers consisting of a name, title, a LatLng, zIndex  and state (optional)
    var gMapHotels = [
      ";
        // line 527
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 528
            echo "      ['";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 528), "html", null, true);
            echo "', 'Отель ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 528), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "coordinates", [], "any", false, false, false, 528), "html", null, true);
            echo ", 1],
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        echo "    ];
  </script>
  
  <!-- google maps api -->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAosLw6LPVOHPdiVUr8mClGPM6hKzTt1v4\"></script>
  ";
        // line 535
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 536
        echo "  
  <script>
  /*repair problem with focus on field outside the popup*/
  \$.magnificPopup.instance._onFocusIn = function(e) {
            return true;
\t\t\t};
  
 

function isCheck(name) {
    return document.querySelector('input[name=\"' + name + '\"]:checked');
}
 
  
  
  \$('[name=\"hotel-select\"]').change(function(){
  
  
      var hotel_id = 0;
      var hotel_type = \$(this).closest('.js-tabs__content').attr('data-number-type');
\t  
\t  
\t  var select_val = \$(this).val();
\t  var select_text;
\t  
\t  //set booking hotel
\t   \$('.js-booking select[name=\"booking-hotel-select\"]').val(select_val).trigger('change');
\t  
      \$(this).find('option').each(function() {
          if(\$(this).prop('selected') == true){
            hotel_id = \$(this).attr('hotelid');
\t\t\tselect_text = \$(this).text();
          }
      });
\t  
\t  \$('.s-hotel-info__tariffs .js-tar-table .table__body').html('');
\t  
\t  \$.request('onChangeHotel',{
        data:{ hotel_id:hotel_id, hotel_type:hotel_type},
      });
\t  
\t  if(hotel_id==7) \$(\".dop-marata\").show();
\t  else \$(\".dop-marata\").hide();
\t  
\t  select_text = select_text.replace(\"\\\\n\", \"<br />\");
\t  \$('.select2-selection__rendered span').html( select_text );
      \$('[name=\"hotel-select\"] option[value=\"'+ select_val +'\"]').prop('selected', true);
     
  });
  
  //add class to not filled required fields
  \$('.booking__input[required], .booking__select[required]').change(function(){
  \t\t\t\$('input.booking__input[required]').each(function() {
\t\t\t\t\$( this ).removeClass(\"js-notFill\");
\t\t\t\tif( \$( this ).val() == \"\" ) \$( this ).addClass(\"js-notFill\");
\t\t\t});
  });
  \$('.booking__send-wrap').on(\"mouseenter\", function(){
\t\$( \".js-notFill\").addClass(\"notFill\");
  });

  
  </script>
  
  <style>
   .mfp-wrap {-webkit-overflow-scrolling: touch}
   </style>
  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/price.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  773 => 536,  769 => 535,  762 => 530,  749 => 528,  745 => 527,  733 => 520,  724 => 513,  720 => 512,  703 => 497,  697 => 496,  691 => 495,  687 => 494,  656 => 474,  594 => 414,  572 => 398,  568 => 397,  562 => 396,  512 => 348,  506 => 347,  479 => 322,  473 => 321,  442 => 293,  437 => 290,  424 => 288,  420 => 287,  393 => 262,  387 => 261,  359 => 235,  353 => 234,  321 => 205,  316 => 202,  303 => 200,  299 => 199,  270 => 172,  264 => 171,  218 => 127,  212 => 126,  181 => 98,  176 => 95,  163 => 93,  159 => 92,  125 => 60,  121 => 59,  100 => 40,  96 => 39,  81 => 29,  74 => 27,  64 => 20,  60 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/price.htm", "");
    }
}
