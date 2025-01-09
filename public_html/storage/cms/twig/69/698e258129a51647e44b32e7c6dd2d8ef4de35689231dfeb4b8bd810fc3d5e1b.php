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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/zakaz.htm */
class __TwigTemplate_de49c24c8224fc79e7dc46d95997a10040d95427eb27e22b5d5d9b6f0cfb3d35 extends \Twig\Template
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
        echo "






";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "offer_items", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 9
            echo "
    
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "gallery", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 15
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "




";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "succes", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 23
            echo "
    
    
    
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "




<!DOCTYPE html>
<html lang=\"ru\">

<head>
<meta charset=\"utf-8\">
  <!-- <base href=\"/\"> -->


  <title>";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 42), "meta_title", [], "any", false, false, false, 42)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 42), "meta_title", [], "any", false, false, false, 42), "html", null, true);
        } else {
            echo "Снять номер в мини отель на час с джакузи в Санкт-Петербурге";
        }
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 43), "meta_description", [], "any", false, false, false, 43)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 43), "meta_description", [], "any", false, false, false, 43), "html", null, true);
        } else {
            echo "Мини отель на час в Санкт-Петербурге, Гостиница с почасовой оплатой, Снять номер на час в СПб, Апартаменты на час, Отель на час с джакузи в Питере Цена номера в отеле на час в любом районе Saint Petersburg 1900 руб за 12 часов забронировать по номеру  8 (812) 468-77-77";
        }
        echo "\">
  
  
  <meta name=\"keywords\" content=\"Отель на час\">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"google-site-verification\" content=\"eIupZehJt_v6i1-Ze7VwR5x-DhtRdIP1Zz8jfpmnBfo\" />
  <meta name=\"yandex-verification\" content=\"399ee3ca9aaabaaf\" />
  <meta name=\"cmsmagazine\" content=\"368f23d768f15ec06b6bc7e64cf9a5b7\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  
  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#1D1D1D\">
  <!-- Custom Browsers Color End -->
  
  <meta name=\"apple-itunes-app\" content=\"app-id=1029435175\">
  <meta name=\"google-play-app\" content=\"app-id=com.wideweb.motelspb\">
  <link rel=\"stylesheet\" href=\"/themes/motel/assets/css/jquery.smartbanner.css\" type=\"text/css\" media=\"screen\">

  <meta name=\"cmsmagazine\" content=\"368f23d768f15ec06b6bc7e64cf9a5b7\" />
  
 <link rel=\"stylesheet\" href=\"/themes/motel/assets/css/main.min.css\" />
 
";
        // line 73
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/head-scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

</head>

<body class=\"js-body\">
  
 
  

  
   
    
    
<!-- Booking Popup -->
    <div class=\"booking js-booking new22032021\" id=\"booking\">
      <div class=\"darkcommontheme darkblurtheme\">
          <!-- Stars -->
          <div class=\"booking__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\">              
            </div>
          </div>
          <!-- /Stars -->
          <div class=\"booking__inner section\">
            <div class=\"booking__container container\">
              <div class=\"booking__content\">
                <div class=\"booking__title h1\">Бронирование отеля</div>
                
                <form class=\"booking__form\" data-request=\"onSubmitBooking\"
                        \t\t\t        data-request-validate
                        \t\t\t        data-request-success=\"\$.magnificPopup.close(); openSuccessPopup(); if(isCheck('connect-type').value==1) startChat(); \"

                        \t\t\t        >
                  <div class=\"booking__form-content\">
                    <div class=\"booking__col\">
                      <div class=\"booking__field form-field\">
                        <div class=\"booking__select-wrap select-wrap\">
                          <select class=\"booking__select select select_bot-border\" name=\"booking-hotel-select\" required>
                            <option disabled hidden value=\"\">Отель</option>
                            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 112
            echo "                            <option data-hotel-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 112), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 112), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 112), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                          </select>
                        </div>
                      </div>
                      
                      <div class=\"booking__field form-field\">
                        <div class=\"booking__select-wrap select-wrap\">
                          <select class=\"booking__select select select_bot-border\" name=\"booking-roomtype-select\" required>
                            <option disabled hidden value=\"\">Тип номера</option>
                            <option selected value=\"standard\">Cтандарт</option>
                            <option value=\"suite\">Полу-люкс</option>
                            <option value=\"lux\">Люкс</option>
                          </select>
                        </div>
                      </div>
\t\t\t\t\t  
\t\t\t\t\t  
                      <div class=\"booking__field form-field\">
                        <div class=\"booking__select-wrap select-wrap\">
\t\t\t\t\t\t  <div class=\"booking-line-title\">Время заезда</div>
\t\t\t\t\t\t  <div class=\"floatright\">
\t\t\t\t\t\t\t<option disabled hidden value=\"\">часов</option>
\t\t\t\t\t\t\t<select class=\"booking__select select select_bot-border select-notfullwidth\" name=\"booking-hours\">
\t\t\t\t\t\t\t\t";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 137
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            if (($context["i"] < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            if (($context["i"] < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t<select class=\"booking__select select select_bot-border  select-notfullwidth\" name=\"booking-minutes\">
\t\t\t\t\t\t\t\t";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 143
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            if (($context["i"] < 2)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, ($context["i"] * 5), "html", null, true);
            echo "\">";
            if (($context["i"] < 2)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, ($context["i"] * 5), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t  </div>
                        </div>
                      </div>

                      
                      <div class=\"booking__field form-field\">
                        <input type=\"text\" class=\"booking__input js-datepicker input select select_bot-border\" placeholder=\"Дата заезда\" name=\"arrival_date\" required>
                      </div>
                      
                      <div class=\"booking__field form-field\">
                        <div class=\"booking__select-wrap select-wrap\">
                          <select class=\"booking__select select select_bot-border\" name=\"booking-time-select\" required>                            
                            <option disabled hidden value=\"\">Время бронирования</option>
                            ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotels"] ?? null), "first", [], "any", false, false, false, 159), "standart_prop", [], "any", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["standart_prop"]) {
            // line 160
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["standart_prop"], "tariffs", [], "any", false, false, false, 160));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["standart_price"]) {
                // line 161
                echo "\t\t\t\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_hide", [], "any", false, false, false, 161)) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_name", [], "any", false, false, false, 162), "html", null, true);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 162)) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_name", [], "any", false, false, false, 162), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['standart_price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['standart_prop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                          </select>
                        </div>
                      </div>
                      
                      <div class=\"booking__field form-field\">
                        <div class=\"booking__select-wrap select-wrap\">
                          <select class=\"booking__select select select_bot-border\" name=\"booking-rp-select\">                                                  
                            <option disabled selected hidden>Романтическое оформление номера</option>

                            <option>Без романтического предложения</option>
                            <option data-price=\"1500\" value=\"Bronze\">Романт. предл. Bronze (1500р)</option>
                            <option data-price=\"1200\" value=\"Silver\">Романт. предл. Silver (1200р)</option>
                            <option data-price=\"2000\" value=\"Gold\">Романт. предл. Gold (2000р)</option>
                          </select>
                        </div>
                      </div>
\t\t\t\t\t  
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"booking__field form-field\">
                        <div class=\"booking__select-wrap select-wrap\">
                          <select class=\"booking__select select select_bot-border\" name=\"booking-smocking\">
                            <option disabled hidden selected value=\"\">Номер для курящих?</option>
                            <option>не важно</option>
                            <option>для курящих</option>
                            <option>для не курящих</option>
                          </select>
                        </div>
                      </div>
                      
                      
                    </div>
                    <div class=\"booking__col\">
                      <div class=\"booking__field form-field\">
                        <input type=\"text\" class=\"booking__input input\" placeholder=\"Имя\" name=\"fname\" required>
                      </div>
                      
                      <div class=\"booking__field form-field\">
                        <input type=\"tel\" class=\"booking__input js-phone-mask input\" placeholder=\"Телефон\" name=\"phone\" required>
                      </div>
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"booking__field form-field\">
                        <input type=\"email\" class=\"booking__input input\" placeholder=\"E-mail\" name=\"email\">
                      </div>
\t\t\t\t\t  
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"booking__field form-field\">
                        <div class=\"booking__select-wrap select-wrap\">
\t\t\t\t\t\t  <h3>Подтверждение бронирования</h3>
\t\t\t\t\t\t  <p class=\"radiobutton-line\"><input name=\"connect-type\" type=\"radio\" id=\"r1\" value=\"0\" checked=\"checked\"> <label for=\"r1\">По телефону</label></p>
\t\t\t\t\t\t  <p class=\"radiobutton-line\"><input name=\"connect-type\" type=\"radio\" id=\"r2\" value=\"1\"> <label for=\"r2\">Онлайн (в чате)</label></p>
\t\t\t\t\t\t  
\t\t\t\t\t\t  <style>
\t\t\t\t\t\t  .radiobutton-line {margin: 10px 0; font-size: 20px;}
\t\t\t\t\t\t  </style>

\t\t\t\t\t\t  <!--
\t\t\t\t\t\t <select class=\"booking__select select select_bot-border\" name=\"connect-type\">
                            <option disabled hidden selected value=\"\">Подтвердить бронирование</option>
                            <option value=\"phone\">Подтверждение по телефону</option>
                            <option value=\"chat\">Подтверждение Online (в чате)</option>
                          </select>
\t\t\t\t\t\t  -->
                        </div>
                      </div>\t\t\t\t  
                      
\t\t\t\t\t  
\t\t\t\t\t  
                      <div class=\"booking__price\">
                        <span class=\"booking__price-title\">Итого</span>
                        
                        <span class=\"booking__price-sum\">
                          <span class=\"booking__price-num\">5 000</span>
                          <span class=\"booking__price-currency\">рублей</span>
                        </span>
                      </div>
\t\t\t\t\t  

\t\t\t\t\t\t  
\t\t\t\t\t  
                      
                      <div class=\"booking__send-wrap\">
                        <button onclick=\" yaCounter23472043.reachGoal('bronSubmit'); ga('send', 'pageview','/bronSubmit'); fbq('track','bronSubmit'); return true;\" class=\"booking__send-btn button button_ghost\">Бронировать</button>
                      </div>
                      
                      <div class=\"booking__check-wrap\">
                        <label class=\"checkbox\">
                          <input type=\"checkbox\" class=\"checkbox__input visually-hidden\" required=\"\" checked=\"\">
                          <span class=\"checkbox__content\">
                            Нажимая кнопку «Бронировать» Вы даете согласие на обработку своих персональных данных и соглашаетесь 
                            с <a href=\"/privacy-policy/\" class=\"checkbox__link\" target=\"_blank\">политикой конфиденциальности</a>
                          </span>
                        </label>
                      </div>
                      
                    </div>
                  </div>            
                </form>
              </div>
            </div>
          </div>

      </div>
    </div>
    <!-- /Booking Popup -->\t
\t
\t
\t

  

  ";
        // line 276
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 277
        echo "  
  <script>
    \$('[name=\"hotel-select\"]').on('change', function(){
        \$.request('onChangeHotel', {data: {hotel_id: \$(this).find('option:selected').attr('hotelid')}})
    });
  </script>
  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/zakaz.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 277,  480 => 276,  368 => 166,  362 => 165,  348 => 164,  336 => 162,  333 => 161,  315 => 160,  311 => 159,  295 => 145,  278 => 143,  274 => 142,  269 => 139,  252 => 137,  248 => 136,  224 => 114,  211 => 112,  207 => 111,  164 => 73,  146 => 58,  142 => 57,  138 => 56,  118 => 43,  110 => 42,  95 => 29,  84 => 23,  80 => 22,  73 => 17,  66 => 15,  62 => 14,  59 => 13,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/zakaz.htm", "");
    }
}
