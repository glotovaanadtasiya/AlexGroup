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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/tariffsForPrice.htm */
class __TwigTemplate_97a94d69ce881d4a33fbd3a31a1c0d6deff06a76e1188a56dfe475f8170ec1e7 extends \Twig\Template
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
        if ((($context["type"] ?? null) == "standard")) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "standart_prop", [], "any", false, false, false, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["standart_prop"]) {
                // line 3
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["standart_prop"], "tariffs", [], "any", false, false, false, 3));
                foreach ($context['_seq'] as $context["_key"] => $context["standart_price"]) {
                    // line 4
                    echo "\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_hide", [], "any", false, false, false, 4)) {
                        // line 5
                        echo "    <div class=\"table__tr\" ";
                        if ((twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_desc", [], "any", false, false, false, 5) == "[day]")) {
                            echo "style=\"color: #fbb03b !important\"";
                        }
                        echo ">
        <div class=\"tar-table__main-col table__td\">
        ";
                        // line 7
                        if (twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_desc", [], "any", false, false, false, 7)) {
                            // line 8
                            echo "            <div class=\"table__hint-point\"><span class=\"table__hint-point-secondary\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_name", [], "any", false, false, false, 8), "html", null, true);
                            echo "</span>
                <div class=\"table__hint\">
                    <img class=\"table__hint-icon js-svg\" src=\"/themes/motel/assets/img/table-hint.svg\" alt=\"\">
                    <div class=\"table__hint-info\">
\t\t\t\t\t\t";
                            // line 12
                            if ((twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_desc", [], "any", false, false, false, 12) == "[night]")) {
                                // line 13
                                echo "\t\t\t\t\t\t\tтариф «Ночной» — 12 часовой тариф, действует в Вс-Чт с 23:00 до 13:00
\t\t\t\t\t\t";
                            } else {
                                // line 15
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_desc", [], "any", false, false, false, 15) == "[day]")) {
                                    // line 16
                                    echo "\t\t\t\t\t\t\t\t\tтариф «Дневной» — 12 часовой тариф, действует в Сб с 09:00 до 21:00, в Вс-Пн с 09:00 до 23:00.
\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 18
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_desc", [], "any", false, false, false, 18), "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 20
                                echo "\t\t\t\t\t\t";
                            }
                            // line 21
                            echo "                    </div>
                </div>
            </div>
\t\t\t
\t\t\t";
                            // line 26
                            echo "\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_desc", [], "any", false, false, false, 26) == "[night]")) {
                                // line 27
                                echo "\t\t\t\t(с 23:00 до 13:00)
\t\t\t";
                            }
                            // line 29
                            echo "\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_desc", [], "any", false, false, false, 29) == "[day]")) {
                                // line 30
                                echo "\t\t\t\t(Сб-Пн) New!
\t\t\t";
                            }
                            // line 31
                            echo "            
\t\t\t";
                        } else {
                            // line 33
                            echo "            ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_name", [], "any", false, false, false, 33), "html", null, true);
                            echo "
        ";
                        }
                        // line 35
                        echo "        </div>
        <div class=\"tar-table__data-col table__td ";
                        // line 36
                        if (((twig_get_attribute($this->env, $this->source, $context["standart_price"], "best_price", [], "any", false, false, false, 36) == 1) && (twig_get_attribute($this->env, $this->source, $context["standart_price"], "sun_thu", [], "any", false, false, false, 36) > 0))) {
                            echo " best_price ";
                        }
                        echo " ";
                        if (((twig_get_attribute($this->env, $this->source, $context["standart_price"], "type", [], "any", false, false, false, 36) != "prolongation") && (twig_get_attribute($this->env, $this->source, $context["standart_price"], "sun_thu", [], "any", false, false, false, 36) > 0))) {
                            echo "js-tar-table-data";
                        } else {
                            echo "no-hover";
                        }
                        echo "\" data-price=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "sun_thu", [], "any", false, false, false, 36), "html", null, true);
                        echo "\" data-time=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_name", [], "any", false, false, false, 36), "html", null, true);
                        echo "\">
            ";
                        // line 37
                        if (twig_get_attribute($this->env, $this->source, $context["standart_price"], "sun_thu", [], "any", false, false, false, 37)) {
                            echo " 
\t\t\t\t";
                            // line 38
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "sun_thu", [], "any", false, false, false, 38), "html", null, true);
                            echo " 
\t\t\t\t";
                            // line 39
                            if (((twig_get_attribute($this->env, $this->source, $context["standart_price"], "best_price", [], "any", false, false, false, 39) == 1) && (twig_get_attribute($this->env, $this->source, $context["standart_price"], "sun_thu", [], "any", false, false, false, 39) > 0))) {
                                echo " <div class=\"best-price-icon\">%</div> ";
                            }
                            // line 40
                            echo "            ";
                        } else {
                            // line 41
                            echo "            -
            ";
                        }
                        // line 43
                        echo "        </div>
        <div class=\"tar-table__data-col table__td ";
                        // line 44
                        if (((twig_get_attribute($this->env, $this->source, $context["standart_price"], "best_price", [], "any", false, false, false, 44) == 1) && (twig_get_attribute($this->env, $this->source, $context["standart_price"], "fri_sat", [], "any", false, false, false, 44) > 0))) {
                            echo " best_price ";
                        }
                        echo " ";
                        if (((twig_get_attribute($this->env, $this->source, $context["standart_price"], "type", [], "any", false, false, false, 44) != "prolongation") && (twig_get_attribute($this->env, $this->source, $context["standart_price"], "fri_sat", [], "any", false, false, false, 44) > 0))) {
                            echo "js-tar-table-data";
                        } else {
                            echo "no-hover";
                        }
                        echo "\" data-price=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "fri_sat", [], "any", false, false, false, 44), "html", null, true);
                        echo "\" data-time=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "price_name", [], "any", false, false, false, 44), "html", null, true);
                        echo "\">
            ";
                        // line 45
                        if (twig_get_attribute($this->env, $this->source, $context["standart_price"], "fri_sat", [], "any", false, false, false, 45)) {
                            // line 46
                            echo "                ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["standart_price"], "fri_sat", [], "any", false, false, false, 46), "html", null, true);
                            echo " 
\t\t\t\t";
                            // line 47
                            if (((twig_get_attribute($this->env, $this->source, $context["standart_price"], "best_price", [], "any", false, false, false, 47) == 1) && (twig_get_attribute($this->env, $this->source, $context["standart_price"], "fri_sat", [], "any", false, false, false, 47) > 0))) {
                                echo " <div class=\"best-price-icon\">%</div> ";
                            }
                            // line 48
                            echo "            ";
                        } else {
                            // line 49
                            echo "                -
            ";
                        }
                        // line 51
                        echo "        </div>
    </div>
\t";
                    }
                    // line 54
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['standart_price'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['standart_prop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((        // line 61
($context["type"] ?? null) == "suite")) {
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "suite_prop", [], "any", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["suite_prop"]) {
                // line 63
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["suite_prop"], "tariffs", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["suite_price"]) {
                    // line 64
                    echo "\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_hide", [], "any", false, false, false, 64)) {
                        // line 65
                        echo "    <div class=\"table__tr\" ";
                        if ((twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_desc", [], "any", false, false, false, 65) == "[day]")) {
                            echo "style=\"color: #fbb03b !important\"";
                        }
                        echo ">
        <div class=\"tar-table__main-col table__td\">
        ";
                        // line 67
                        if (twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_desc", [], "any", false, false, false, 67)) {
                            // line 68
                            echo "            <div class=\"table__hint-point\"><span class=\"table__hint-point-secondary\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_name", [], "any", false, false, false, 68), "html", null, true);
                            echo "</span>
                <div class=\"table__hint\">
                    <img class=\"table__hint-icon js-svg\" src=\"/themes/motel/assets/img/table-hint.svg\" alt=\"\">
                    <div class=\"table__hint-info\">
\t\t\t\t\t\t";
                            // line 72
                            if ((twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_desc", [], "any", false, false, false, 72) == "[night]")) {
                                // line 73
                                echo "\t\t\t\t\t\t\tтариф «Ночной» — 12 часовой тариф, действует в Вс-Чт с 23:00 до 13:00
\t\t\t\t\t\t";
                            } else {
                                // line 75
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_desc", [], "any", false, false, false, 75) == "[day]")) {
                                    // line 76
                                    echo "\t\t\t\t\t\t\t\t\tтариф «Дневной» — 12 часовой тариф, действует в Сб с 09:00 до 21:00, в Вс-Пн с 09:00 до 23:00.
\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 78
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_desc", [], "any", false, false, false, 78), "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 80
                                echo "\t\t\t\t\t\t";
                            }
                            // line 81
                            echo "                        
                    </div>
                </div>
            </div>
\t\t\t
\t\t\t";
                            // line 87
                            echo "\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_desc", [], "any", false, false, false, 87) == "[night]")) {
                                // line 88
                                echo "\t\t\t\t(с 23:00 до 13:00)
\t\t\t";
                            }
                            // line 90
                            echo "\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_desc", [], "any", false, false, false, 90) == "[day]")) {
                                // line 91
                                echo "\t\t\t\t(Сб-Пн) New!
\t\t\t";
                            }
                            // line 92
                            echo " \t\t\t
\t\t\t
            ";
                        } else {
                            // line 95
                            echo "            ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_name", [], "any", false, false, false, 95), "html", null, true);
                            echo "
        ";
                        }
                        // line 97
                        echo "        </div>
        <div class=\"tar-table__data-col table__td ";
                        // line 98
                        if (((twig_get_attribute($this->env, $this->source, $context["suite_price"], "best_price", [], "any", false, false, false, 98) == 1) && (twig_get_attribute($this->env, $this->source, $context["suite_price"], "sun_thu", [], "any", false, false, false, 98) > 0))) {
                            echo " best_price ";
                        }
                        echo " ";
                        if (((twig_get_attribute($this->env, $this->source, $context["suite_price"], "type", [], "any", false, false, false, 98) != "prolongation") && (twig_get_attribute($this->env, $this->source, $context["suite_price"], "sun_thu", [], "any", false, false, false, 98) > 0))) {
                            echo "js-tar-table-data";
                        } else {
                            echo "no-hover";
                        }
                        echo "\" data-price=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suite_price"], "sun_thu", [], "any", false, false, false, 98), "html", null, true);
                        echo "\" data-time=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_name", [], "any", false, false, false, 98), "html", null, true);
                        echo "\">
            ";
                        // line 99
                        if (twig_get_attribute($this->env, $this->source, $context["suite_price"], "sun_thu", [], "any", false, false, false, 99)) {
                            // line 100
                            echo "\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suite_price"], "sun_thu", [], "any", false, false, false, 100), "html", null, true);
                            echo " 
\t\t\t\t";
                            // line 101
                            if (((twig_get_attribute($this->env, $this->source, $context["suite_price"], "best_price", [], "any", false, false, false, 101) == 1) && (twig_get_attribute($this->env, $this->source, $context["suite_price"], "sun_thu", [], "any", false, false, false, 101) > 0))) {
                                echo " <div class=\"best-price-icon\">%</div> ";
                            }
                            // line 102
                            echo "            ";
                        } else {
                            // line 103
                            echo "            -
            ";
                        }
                        // line 105
                        echo "        </div>
        <div class=\"tar-table__data-col table__td ";
                        // line 106
                        if (((twig_get_attribute($this->env, $this->source, $context["suite_price"], "best_price", [], "any", false, false, false, 106) == 1) && (twig_get_attribute($this->env, $this->source, $context["suite_price"], "fri_sat", [], "any", false, false, false, 106) > 0))) {
                            echo " best_price ";
                        }
                        echo " ";
                        if (((twig_get_attribute($this->env, $this->source, $context["suite_price"], "type", [], "any", false, false, false, 106) != "prolongation") && (twig_get_attribute($this->env, $this->source, $context["suite_price"], "fri_sat", [], "any", false, false, false, 106) > 0))) {
                            echo "js-tar-table-data";
                        } else {
                            echo "no-hover";
                        }
                        echo "\" data-price=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suite_price"], "fri_sat", [], "any", false, false, false, 106), "html", null, true);
                        echo "\" data-time=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suite_price"], "price_name", [], "any", false, false, false, 106), "html", null, true);
                        echo "\">
            ";
                        // line 107
                        if (twig_get_attribute($this->env, $this->source, $context["suite_price"], "fri_sat", [], "any", false, false, false, 107)) {
                            // line 108
                            echo "                ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suite_price"], "fri_sat", [], "any", false, false, false, 108), "html", null, true);
                            echo " 
\t\t\t\t";
                            // line 109
                            if (((twig_get_attribute($this->env, $this->source, $context["suite_price"], "best_price", [], "any", false, false, false, 109) == 1) && (twig_get_attribute($this->env, $this->source, $context["suite_price"], "fri_sat", [], "any", false, false, false, 109) > 0))) {
                                echo " <div class=\"best-price-icon\">%</div> ";
                            }
                            // line 110
                            echo "            ";
                        } else {
                            // line 111
                            echo "                -
            ";
                        }
                        // line 113
                        echo "        </div>
    </div>
\t";
                    }
                    // line 116
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suite_price'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suite_prop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((        // line 118
($context["type"] ?? null) == "lux")) {
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "lux_prop", [], "any", false, false, false, 119));
            foreach ($context['_seq'] as $context["_key"] => $context["lux_prop"]) {
                // line 120
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lux_prop"], "tariffs", [], "any", false, false, false, 120));
                foreach ($context['_seq'] as $context["_key"] => $context["lux_price"]) {
                    // line 121
                    echo "\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_hide", [], "any", false, false, false, 121)) {
                        // line 122
                        echo "    <div class=\"table__tr\" ";
                        if ((twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_desc", [], "any", false, false, false, 122) == "[day]")) {
                            echo "style=\"color: #fbb03b !important\"";
                        }
                        echo " >
        <div class=\"tar-table__main-col table__td\">
        ";
                        // line 124
                        if (twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_desc", [], "any", false, false, false, 124)) {
                            // line 125
                            echo "            <div class=\"table__hint-point\"><span class=\"table__hint-point-secondary\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_name", [], "any", false, false, false, 125), "html", null, true);
                            echo "</span>
                <div class=\"table__hint\">
                    <img class=\"table__hint-icon js-svg\" src=\"/themes/motel/assets/img/table-hint.svg\" alt=\"\">
                    <div class=\"table__hint-info\">
\t\t\t\t\t\t";
                            // line 129
                            if ((twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_desc", [], "any", false, false, false, 129) == "[night]")) {
                                // line 130
                                echo "\t\t\t\t\t\t\tтариф «Ночной» — 12 часовой тариф, действует в Вс-Чт с 23:00 до 13:00
\t\t\t\t\t\t";
                            } else {
                                // line 132
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_desc", [], "any", false, false, false, 132) == "[day]")) {
                                    // line 133
                                    echo "\t\t\t\t\t\t\t\t\tтариф «Дневной» — 12 часовой тариф, действует в Сб с 09:00 до 21:00, в Вс-Пн с 09:00 до 23:00.
\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 135
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_desc", [], "any", false, false, false, 135), "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 137
                                echo "\t\t\t\t\t\t";
                            }
                            // line 138
                            echo "                        
                    </div>
                </div>
            </div>
\t\t\t
\t\t\t";
                            // line 144
                            echo "\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_desc", [], "any", false, false, false, 144) == "[night]")) {
                                // line 145
                                echo "\t\t\t\t(с 23:00 до 13:00)
\t\t\t";
                            }
                            // line 147
                            echo "\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_desc", [], "any", false, false, false, 147) == "[day]")) {
                                // line 148
                                echo "\t\t\t\t(Сб-Пн) New!
\t\t\t";
                            }
                            // line 149
                            echo " \t\t\t
\t\t\t
            ";
                        } else {
                            // line 152
                            echo "            ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_name", [], "any", false, false, false, 152), "html", null, true);
                            echo "
        ";
                        }
                        // line 154
                        echo "        </div>
        <div class=\"tar-table__data-col table__td ";
                        // line 155
                        if (((twig_get_attribute($this->env, $this->source, $context["lux_price"], "best_price", [], "any", false, false, false, 155) == 1) && (twig_get_attribute($this->env, $this->source, $context["lux_price"], "sun_thu", [], "any", false, false, false, 155) > 0))) {
                            echo " best_price ";
                        }
                        echo " ";
                        if (((twig_get_attribute($this->env, $this->source, $context["lux_price"], "type", [], "any", false, false, false, 155) != "prolongation") && (twig_get_attribute($this->env, $this->source, $context["lux_price"], "sun_thu", [], "any", false, false, false, 155) > 0))) {
                            echo "js-tar-table-data";
                        } else {
                            echo "no-hover";
                        }
                        echo "\" data-price=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lux_price"], "sun_thu", [], "any", false, false, false, 155), "html", null, true);
                        echo "\" data-time=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_name", [], "any", false, false, false, 155), "html", null, true);
                        echo "\">
            ";
                        // line 156
                        if (twig_get_attribute($this->env, $this->source, $context["lux_price"], "sun_thu", [], "any", false, false, false, 156)) {
                            // line 157
                            echo "\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lux_price"], "sun_thu", [], "any", false, false, false, 157), "html", null, true);
                            echo " 
\t\t\t\t";
                            // line 158
                            if (((twig_get_attribute($this->env, $this->source, $context["lux_price"], "best_price", [], "any", false, false, false, 158) == 1) && (twig_get_attribute($this->env, $this->source, $context["lux_price"], "sun_thu", [], "any", false, false, false, 158) > 0))) {
                                echo " <div class=\"best-price-icon\">%</div> ";
                            }
                            // line 159
                            echo "            ";
                        } else {
                            // line 160
                            echo "            -
            ";
                        }
                        // line 162
                        echo "        </div>
        <div class=\"tar-table__data-col table__td ";
                        // line 163
                        if (((twig_get_attribute($this->env, $this->source, $context["lux_price"], "best_price", [], "any", false, false, false, 163) == 1) && (twig_get_attribute($this->env, $this->source, $context["lux_price"], "fri_sat", [], "any", false, false, false, 163) > 0))) {
                            echo " best_price ";
                        }
                        echo " ";
                        if (((twig_get_attribute($this->env, $this->source, $context["lux_price"], "type", [], "any", false, false, false, 163) != "prolongation") && (twig_get_attribute($this->env, $this->source, $context["lux_price"], "fri_sat", [], "any", false, false, false, 163) > 0))) {
                            echo "js-tar-table-data";
                        } else {
                            echo "no-hover";
                        }
                        echo "\" data-price=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lux_price"], "fri_sat", [], "any", false, false, false, 163), "html", null, true);
                        echo "\" data-time=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lux_price"], "price_name", [], "any", false, false, false, 163), "html", null, true);
                        echo "\">
            ";
                        // line 164
                        if (twig_get_attribute($this->env, $this->source, $context["lux_price"], "fri_sat", [], "any", false, false, false, 164)) {
                            // line 165
                            echo "                ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lux_price"], "fri_sat", [], "any", false, false, false, 165), "html", null, true);
                            echo " 
\t\t\t\t";
                            // line 166
                            if (((twig_get_attribute($this->env, $this->source, $context["lux_price"], "best_price", [], "any", false, false, false, 166) == 1) && (twig_get_attribute($this->env, $this->source, $context["lux_price"], "fri_sat", [], "any", false, false, false, 166) > 0))) {
                                echo " <div class=\"best-price-icon\">%</div> ";
                            }
                            // line 167
                            echo "            ";
                        } else {
                            // line 168
                            echo "                -
            ";
                        }
                        // line 170
                        echo "        </div>
    </div>
\t";
                    }
                    // line 173
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lux_price'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lux_prop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/tariffsForPrice.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 173,  546 => 170,  542 => 168,  539 => 167,  535 => 166,  530 => 165,  528 => 164,  512 => 163,  509 => 162,  505 => 160,  502 => 159,  498 => 158,  493 => 157,  491 => 156,  475 => 155,  472 => 154,  466 => 152,  461 => 149,  457 => 148,  454 => 147,  450 => 145,  447 => 144,  440 => 138,  437 => 137,  431 => 135,  427 => 133,  424 => 132,  420 => 130,  418 => 129,  410 => 125,  408 => 124,  400 => 122,  397 => 121,  392 => 120,  388 => 119,  386 => 118,  376 => 116,  371 => 113,  367 => 111,  364 => 110,  360 => 109,  355 => 108,  353 => 107,  337 => 106,  334 => 105,  330 => 103,  327 => 102,  323 => 101,  318 => 100,  316 => 99,  300 => 98,  297 => 97,  291 => 95,  286 => 92,  282 => 91,  279 => 90,  275 => 88,  272 => 87,  265 => 81,  262 => 80,  256 => 78,  252 => 76,  249 => 75,  245 => 73,  243 => 72,  235 => 68,  233 => 67,  225 => 65,  222 => 64,  217 => 63,  213 => 62,  211 => 61,  201 => 54,  196 => 51,  192 => 49,  189 => 48,  185 => 47,  180 => 46,  178 => 45,  162 => 44,  159 => 43,  155 => 41,  152 => 40,  148 => 39,  144 => 38,  140 => 37,  124 => 36,  121 => 35,  115 => 33,  111 => 31,  107 => 30,  104 => 29,  100 => 27,  97 => 26,  91 => 21,  88 => 20,  82 => 18,  78 => 16,  75 => 15,  71 => 13,  69 => 12,  61 => 8,  59 => 7,  51 => 5,  48 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/tariffsForPrice.htm", "");
    }
}
