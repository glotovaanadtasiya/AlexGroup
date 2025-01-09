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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/header.htm */
class __TwigTemplate_dbb37daadf6dc34184a68f13b8d38ba8b099e7128a7a9746efcff56089ef44e9 extends \Twig\Template
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
        echo "<!--div style=\"padding: 20px; text-align: center; margin: 5px auto 20px; max-width: 1070px; border: 2px solid #fbb03b\">
Уважаемые гости, по техническим причинам временно не работает бронирование в мобильном приложении. <br>

Приносим свои извинения за доставленные неудобства!
</div-->
 <div class=\"main-header__container container\">
        <div class=\"main-header__content\">
          
          <div class=\"main-header__logo logo\">
            <a href=\"/\" class=\"logo__inner\">
              <div class=\"logo__icon\">
                <canvas class=\"logo__canvas js-marker-canvas\"></canvas>
              </div>              
              <div class=\"logo__descr\">
                <div class=\"logo__name\">Алекс Отель</div>
                <div class=\"logo__slogan\">создан для двоих</div>
              </div>
            </a>
          </div>

          <div class=\"main-header__menu\">
            <!-- Menu Nav -->
            <nav class=\"main-menu-nav js-main-menu-nav\">
                <div class=\"main-menu-nav__stars starry-sky-canvas\">
                  <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"30\"></div>
                </div>  
                <div class=\"main-menu-nav__inner\">
                  <div class=\"main-menu-nav__container container\">\t\t\t
                    <!-- Menu -->
                    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu/topmenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "                    <!-- /Menu -->
                    
                    <div class=\"main-menu-nav__mobile-box\">
                      <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"main-menu-nav__phone\">8 (812) 468-<div style=\"display:inline-block;width: 1px;\"></div>7<div style=\"display:inline-block;width: 1px;\"></div>7-<div style=\"display:inline-block;width: 1px;\"></div>77</a>\t\t\t\t\t\t  
\t\t\t\t\t  <br>
\t\t\t\t\t  <a href=\"tel:+78124030091\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"main-header__phone\">8 (812) 403-00-91</a>
\t\t\t\t\t  \t\t\t  
                      <div class=\"main-header__contact-descr\">единая служба бронирования<br>круглосуточно, без выходных</div>
                      <div class=\"main-menu-nav__social social\">
                        <a href=\"https://vk.com/public9671914\" class=\"social__item\" target=\"_blank\">
                          <img src=\"/themes/motel/assets/img/vk.svg\" alt=\"\" class=\"social__icon js-svg\">
                        </a>
\t\t\t\t\t\t  <!--
\t\t\t\t\t\t  <a href=\"https://www.instagram.com/motelspb/\" class=\"social__item\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"/themes/motel/assets/img/inst.svg\" alt=\"\" class=\"social__icon js-svg\">
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  -->
\t\t\t\t\t\t  <a href=\"https://api.whatsapp.com/send?phone=79812400110\" class=\"social__item\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"/themes/motel/assets/img/whatsapp.svg\" alt=\"\" class=\"social__icon js-svg\">
\t\t\t\t\t\t  </a>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
              <!-- /Menu Nav -->
          </div>

          
          <div class=\"main-header__contact\">
            <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"main-header__phone\">8 (812) 468-<div style=\"display:inline-block;width: 1px;\"></div>7<div style=\"display:inline-block;width: 1px;\"></div>7-<div style=\"display:inline-block;width: 1px;\"></div>77</a>
\t\t\t<br>
\t\t\t<a href=\"tel:+78124030091\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"main-header__phone\">8 (812) 403-00-91</a>
\t\t\t
\t\t\t
            <div class=\"main-header__contact-descr\">единая служба бронирования<br>круглосуточно, без выходных</div>
          </div>
          
\t\t  <a href=\"https://api.whatsapp.com/send?phone=79812400110\" class=\"main-header__mob-phone\"><img class=\"main-header__mob-phone-icon js-svg\" src=\"/themes/motel/assets/img/whatsapp.svg\" alt=\"\"></a>
\t\t  
\t\t  \t\t\t 

\t\t  
          <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"main-header__mob-phone\"><img class=\"main-header__mob-phone-icon js-svg\" src=\"/themes/motel/assets/img/phone.svg\" alt=\"\"></a>
          
          <!-- Burger Menu  Controls -->
          <div class=\"main-header__menu-btn\">
            <div class=\"menu-opener js-menu-opener\">
              <div class=\"menu-opener__inner  js-menu-opener__inner\"></div>\t\t\t
            </div>
          </div>
          <!-- /Burger Menu  Controls -->
          
        </div>
      </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 31,  68 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/header.htm", "");
    }
}
