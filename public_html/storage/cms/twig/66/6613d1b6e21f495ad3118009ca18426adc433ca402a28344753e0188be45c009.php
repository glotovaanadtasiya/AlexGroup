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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/booking.htm */
class __TwigTemplate_27f55c69166fb2b23ddb0097903d0f7e410d087c9a318bd524c5b0966602a2ef extends \Twig\Template
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
        echo "<div class=\"find-room js-find-room\">
      <div class=\"find-room__container container\">
        <div class=\"find-room__row\">
          <div class=\"find-room__field\">
            <div class=\"select-wrap\">
              <select class=\"select js-select-find-room-bg js-map-select\" name=\"hotel-select\">
                <option disabled selected hidden value=\"\">Отель</option>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 9
            echo "                <option hotelid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 9), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["hotel"], "low_price", [], "any", false, false, false, 9)) {
                echo "<div style=\"color: #a62b81\">-%</div>";
            }
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "              </select>
            </div>
          </div>
          
          <div class=\"find-room__field\">
            <div class=\"select-wrap\">
              <select class=\"select js-select-find-room-bg js-roomtype-select\" name=\"roomtype-select\">
                <option disabled selected hidden>Тип номера</option>
                <option value=\"lux\">Люкс</option>
                <option value=\"suite\">Полу-люкс</option>
                <option value=\"standard\">Cтандарт</option>
              </select>
            </div>
          </div>
          
          <!-- <div class=\"find-room__field\">
            <input class=\"datepicker-input js-datepicker\" placeholder=\"Когда\" readonly>
          </div> -->
          
          <div class=\"find-room__field\">
            <div class=\"select-wrap\">
              <select class=\"select js-select-find-room-bg  js-time-select\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotels"] ?? null), "first", [], "any", false, false, false, 33), "standart_prop", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["standart_prop"]) {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["standart_prop"], "tariffs", [], "any", false, false, false, 34));
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
                // line 35
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["standart_price"], "type", [], "any", false, false, false, 35) != "prolongation")) {
                    // line 36
                    echo "\t\t\t\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_hide", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "\t\t\t\t\t\t  <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_name", [], "any", false, false, false, 37), "html", null, true);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 37)) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_name", [], "any", false, false, false, 37), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t\t  ";
                }
                // line 40
                echo "                    ";
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
            // line 41
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['standart_prop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "              </select>
            </div>
          </div>
          
          <div class=\"find-room__btn-wrap\">
            <a href=\"#booking\" onclick=\" yaCounter23472043.reachGoal('bronOpen'); fbq('track','bronOpen'); return true;\" class=\"find-room__btn button button_ghost button_medium js-booking-link\">
              Забронировать
            </a>
          </div>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/booking.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 42,  148 => 41,  134 => 40,  131 => 39,  119 => 37,  116 => 36,  113 => 35,  95 => 34,  91 => 33,  67 => 11,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/booking.htm", "");
    }
}
