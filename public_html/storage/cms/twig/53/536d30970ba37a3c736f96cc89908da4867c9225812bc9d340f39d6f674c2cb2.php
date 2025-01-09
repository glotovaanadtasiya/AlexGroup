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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/booking-popup.htm */
class __TwigTemplate_d633fbb7cdbd636647169d09cda3f5d9f788244bad879f4c0c254ff0dd1f902c extends \Twig\Template
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
        echo "<!-- Booking Popup -->
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 27
            echo "                            <option data-hotel-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
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
        // line 54
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t<select class=\"booking__select select select_bot-border  select-notfullwidth\" name=\"booking-minutes\">
\t\t\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
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
        // line 60
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
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotels"] ?? null), "first", [], "any", false, false, false, 74), "standart_prop", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["standart_prop"]) {
            // line 75
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["standart_prop"], "tariffs", [], "any", false, false, false, 75));
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
                // line 76
                echo "\t\t\t\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_hide", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_name", [], "any", false, false, false, 77), "html", null, true);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 77)) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_name", [], "any", false, false, false, 77), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 79
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
            // line 80
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['standart_prop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                          </select>
\t\t\t\t\t\t  <script>
\t\t\t\t\t\t\t\tvar i = setInterval(function() {
\t\t\t\t\t\t\t\tif (\$) {
\t\t\t\t\t\t\t\tclearInterval(i);
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\$(function () {
\t\t\t\t\t\t\t\t\tvar form = \$('.js-booking');
\t\t\t\t\t\t\t\t\tform.on('change', 'select[name=\"booking-time-select\"]',function () {
\t\t\t\t\t\t\t\t\t\t\$(\".booking-time-select-desc\").hide();
\t\t\t\t\t\t\t\t\t\tif(\$(this).val()==\"12 часов «Ночной»\") {
\t\t\t\t\t\t\t\t\t\t\t\$(\".booking-time-select-desc\").show();
\t\t\t\t\t\t\t\t\t     }\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t }
\t\t\t\t\t\t\t\t}, 1000)

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t

\t\t\t\t\t     </script>
\t\t\t\t\t\t <div class=\"booking-time-select-desc\" style=\"display: none; padding-top: 5px; font-size: 12px;\">Тариф «Ночной» действует с воскресенья по четверг с 23:00 до 13:00. Не действует в праздничные и предпраздничные дни.</div>
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

\t\t\t\t\t\t<p style=\"margin-top: 20px;\">с 1 апреля 2024 года в соответствии с законом Санкт-Петербурга от 28.06.2023 N 419-81, при заселении в отель более чем на 24 часа, проживающие  обязаны уплатить курортный сбор в размере 100 руб в сутки с человека. От уплаты курортного сбора освобождена льготная категория граждан. Подробнее можно узнать в <a href=\"https://motelspb.com/rules/\">правилах проживания пункт 7</a></p>  
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
    <!-- /Booking Popup -->";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/booking-popup.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 81,  219 => 80,  205 => 79,  193 => 77,  190 => 76,  172 => 75,  168 => 74,  152 => 60,  135 => 58,  131 => 57,  126 => 54,  109 => 52,  105 => 51,  81 => 29,  68 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/booking-popup.htm", "");
    }
}
