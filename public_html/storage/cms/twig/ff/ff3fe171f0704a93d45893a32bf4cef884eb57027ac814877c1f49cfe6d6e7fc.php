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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/successPopup.htm */
class __TwigTemplate_972b5bcf773690ab4b8386633c87f5e94b21181b3e43982758abff2d26acdee7 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["name"] ?? null), "first", [], "any", false, false, false, 1), "gender", [], "any", false, false, false, 1) == "women")) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainpage"] ?? null), "succes", [], "any", false, false, false, 2));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 3) == 1)) {
                    // line 4
                    echo "    <!-- Success Popup 1 -->
    <div class=\"booking-success js-success-window\">
      <div class=\"darkgradtheme\">
        <div class=\"darkcommontheme darkblurtheme\">
          <!-- Stars -->
          <div class=\"booking-success__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\">              
            </div>
          </div>
          <!-- /Stars -->
          <div class=\"booking-success__inner section\">
            <div class=\"booking-success__container container\">
              <div class=\"booking-success__content\">
                <div class=\"booking-success__title h1\">";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17);
                    echo "</div>
                <div class=\"booking-success__subtitle\">
                  ";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "subtitle", [], "any", false, false, false, 19);
                    echo "
                </div>
                
                <div class=\"booking-success__row row\">
                  <div class=\"booking-success__col col-xl-5\">
                    <div class=\"booking-success__txt plaintext\">
                       <!-- ";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 25);
                    echo " -->
                    </div>
                  </div>
                  <div class=\"booking-success__col col-xl-7\">
                    <div class=\"booking-success__graphics\">
                      <div class=\"booking-success__say booking-success__say_1 say\">
                        <div class=\"say__txt\">
                          ";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "text2", [], "any", false, false, false, 32);
                    echo "
                        </div>
                      </div>
                      <div class=\"booking-success__pic booking-success__pic_1\">
                        <img src=\"";
                    // line 36
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 36));
                    echo "\" srcset=\"";
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 36));
                    echo " 2x\" alt=\"\" class=\"booking-success__pic-img\">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <!-- /Success Popup 1 -->
    ";
                }
                // line 49
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["name"] ?? null), "first", [], "any", false, false, false, 50), "gender", [], "any", false, false, false, 50) == "men")) {
            // line 51
            echo "
";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainpage"] ?? null), "succes", [], "any", false, false, false, 52));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 53
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53) == 2)) {
                    // line 54
                    echo "    <!-- Success Popup 2 -->
    <div class=\"booking-success js-success-window\">
      <div class=\"darkgradtheme\">
        <div class=\"darkcommontheme darkblurtheme\">
          <!-- Stars -->
          <div class=\"booking-success__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\">              
            </div>
          </div>
          <!-- /Stars -->
          <div class=\"booking-success__inner section\">
            <div class=\"booking-success__container container\">
              <div class=\"booking-success__content\">
                <div class=\"booking-success__title h1\">";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 67);
                    echo "</div>
                <div class=\"booking-success__subtitle\">
                  ";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "subtitle", [], "any", false, false, false, 69);
                    echo "
                </div>
                
                <div class=\"booking-success__row row\">
                  <div class=\"booking-success__col col-xl-5\">
                    <div class=\"booking-success__txt plaintext\">
                      <!-- ";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 75);
                    echo "  -->
                    </div>
                  </div>
                  <div class=\"booking-success__col col-xl-7\">
                    <div class=\"booking-success__graphics\">
                      <div class=\"booking-success__say booking-success__say_2 say\">
                        <div class=\"say__txt\">
                          ";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "text2", [], "any", false, false, false, 82);
                    echo "
                        </div>
                      </div>
                      <div class=\"booking-success__pic booking-success__pic_2\">
                        <img src=\"";
                    // line 86
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 86));
                    echo "\" srcset=\"";
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 86));
                    echo " 2x\" alt=\"\" class=\"booking-success__pic-img\">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <!-- /Success Popup 2 -->
    ";
                }
                // line 99
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 101
            echo "
";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainpage"] ?? null), "succes", [], "any", false, false, false, 102));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 103
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 103) == 3)) {
                    // line 104
                    echo "    <!-- Success Popup 3 -->
    <div class=\"booking-success js-success-window\">
      <div class=\"darkgradtheme\">
        <div class=\"darkcommontheme darkblurtheme\">
          <!-- Stars -->
          <div class=\"booking-success__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\">              
            </div>
          </div>
          <!-- /Stars -->
          <div class=\"booking-success__inner section\">
            <div class=\"booking-success__container container\">
              <div class=\"booking-success__content\">
                <div class=\"booking-success__title h1\">";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 117);
                    echo "</div>
                <div class=\"booking-success__subtitle\">
                  ";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "subtitle", [], "any", false, false, false, 119);
                    echo "
                </div>
                
                <div class=\"booking-success__row row\">
                  <div class=\"booking-success__col col-xl-5\">
                    <div class=\"booking-success__txt plaintext\">
                      <!-- ";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 125);
                    echo "  -->
                    </div>
                  </div>
                  <div class=\"booking-success__col col-xl-7\">
                    <div class=\"booking-success__graphics\">
                      <div class=\"booking-success__say booking-success__say_3 say\">
                        <div class=\"say__txt\">
                          ";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "text2", [], "any", false, false, false, 132);
                    echo "
                        </div>
                      </div>
                      <div class=\"booking-success__pic booking-success__pic_3\">
                        <img src=\"";
                    // line 136
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 136));
                    echo "\" srcset=\"";
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 136));
                    echo " 2x\" alt=\"\" class=\"booking-success__pic-img\">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <!-- /Success Popup 3 -->
    ";
                }
                // line 149
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/successPopup.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 149,  311 => 136,  304 => 132,  294 => 125,  285 => 119,  280 => 117,  265 => 104,  262 => 103,  245 => 102,  242 => 101,  227 => 99,  209 => 86,  202 => 82,  192 => 75,  183 => 69,  178 => 67,  163 => 54,  160 => 53,  143 => 52,  140 => 51,  138 => 50,  124 => 49,  106 => 36,  99 => 32,  89 => 25,  80 => 19,  75 => 17,  60 => 4,  57 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/blocks/successPopup.htm", "");
    }
}
