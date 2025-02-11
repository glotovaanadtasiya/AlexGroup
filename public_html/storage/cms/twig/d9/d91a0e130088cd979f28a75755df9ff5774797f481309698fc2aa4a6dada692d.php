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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/footer.htm */
class __TwigTemplate_e032b37c4eab052f940a6e699de60ca594e74c9542eb5ab1575aa6fab895d198 extends \Twig\Template
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
        echo "<div class=\"darkcommontheme darkgradtheme\">
      <!-- Contact Form -->
      <div class=\"s-contact-form section\">
        
        <!-- Sky -->
        <div class=\"s-contact-form__stars starry-sky-canvas\">
          <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\"></div>
        </div>
        <!-- /Sky -->
        ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "baseFileName", [], "any", false, false, false, 10) != "reviews")) {
            // line 11
            echo "            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("forms/sendback"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "        ";
        } else {
            // line 13
            echo "            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("forms/send_review"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "        ";
        }
        // line 15
        echo "      </div>
      <!-- /Contact Form -->
      
      <footer class=\"main-footer\">
        <div class=\"main-footer__container container\">
          
          <div class=\"main-footer__toprow row\">
            
            <!-- Footer Menu -->
            ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu/bottommenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "            <!-- /Footer Menu -->
            
            <!-- Footer Contacts -->
            <div class=\"main-footer__contacts-wrap col-md-4 col-lg-3\">
              <div class=\"main-footer__contacts\">
                <div class=\"main-footer__social social\">
                  <a href=\"https://vk.com/public9671914\" class=\"social__item\" target=\"_blank\">
                    <img src=\"/themes/motel/assets/img/vk.svg\" alt=\"\" class=\"social__icon js-svg\">
                  </a>
                  <!--<a href=\"https://www.instagram.com/motelspb/\" class=\"social__item\" target=\"_blank\">
                    <img src=\"/themes/motel/assets/img/inst.svg\" alt=\"\" class=\"social__icon js-svg\">
                  </a>-->
                </div>
                <a href=\"mailto:4687777@alex-group.net\" class=\"main-footer__link\">4687777@alex-group.net</a>
                <br>
                <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"main-footer__link\">+7 (812) 468-77-77</a>
              </div>  
            </div>
            <!-- /Footer Contacts -->
          
          </div>
        </div>
        <div class=\"main-footer__bottom\">
          <div class=\"main-footer__container container\">
            <div class=\"main-footer__botrow\">
              <a href=\"/storage/app/media/pravilaprojivaniya/pravilaprojivaniya.pdf\" class=\"main-footer__rules-link\" target=\"_blank\">Правила проживания в наших отелях</a>
              <div class=\"main-footer__agency\">
                <a href=\"http://serenity.agency\" class=\"serenity-agency\" target=\"_blank\">
                  <img class=\"serenity-agency__logo js-svg\" src=\"/themes/motel/assets/img/serenity-logo.svg\" alt=\"Serenity\">
                  <span class=\"serenity-agency__txt\">Разработано в Serenity</span>                
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

\t
<script>
function jivo_onMessageSent() {
\tfbq('track', 'jivo_onMessageSent');
};
</script>



\t
\t
<div class=\"fixed-banner\">\t
\t<a href=\"/goapp.php\" class=\"fixed-banner_banner\">
\t\t\t<img src=\"/themes/motel/assets/img/banner_intext1.png\" style=\"width: 300px;\">
\t\t\t<img src=\"/themes/motel/assets/img/qr-goapp.gif\" style=\"width: 270px; box-shadow: 0 0 10px #000; margin: 8px -5px 0 0 ;\">
\t</a>
\t<a class=\"fixed-banner_close\" onclick=\"closeBanner();\"></a>
</div>\t

<a class=\"fixed-banner_closed\" href=\"#\" onclick=\"showBanner();\"><img src=\"/themes/motel/assets/img/flame.svg\"  class=\"special-offer__icon js-svg\" alt=\"\"></a>

<style>
.fixed-banner {
\tdisplay: none;
\tposition: fixed;
\tbox-sizing: content-box;
\ttop:50%;
\tright:0;
\tmargin-top: -150px;
\tz-index: 99999;
\t}
\t
.fixed-banner_closed {
\tdisplay: none;
\tposition: fixed;
\tpadding: 10px 9px 10px 10px;
\twidth: 17px;
\theight: 30px;
\tbackground: #fbb03b;
\tbox-sizing: content-box;
\ttop:50%;
\tright:0;
\tmargin-top: -150px;
\tz-index: 99999;
\tborder-radius: 10px 0 0 10px ;
\t}
\t

@media (min-width: 800px) {
\t.fixed-banner.show-banner {display: block;}
\t.fixed-banner_closed.show-banner {display: block;}
\t}
\t
\t.fixed-banner_banner {display:block; width: 300px; box-sizing: content-box; margin: 0 auto;  text-align: center; background: #fbb03b; padding: 15px 5px 25px; }
\t.fixed-banner_banner img {width: 300px; }

\t.fixed-banner_close {position: absolute; right: 5px; top: 0;  width: 31px; height: 31px; cursor: pointer; background: #212121; }
\t.fixed-banner_close:hover:before, .fixed-banner_close:hover:after {background-color: #111;}
\t.fixed-banner_close:before, .fixed-banner_close:after {position: absolute;left: 20px; top: 7px; content: ' ';height: 25px;width: 2px; background-color: #333;}
\t.fixed-banner_close:before {transform: rotate(45deg);}
\t.fixed-banner_close:after {transform: rotate(-45deg);}

";
        // line 125
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125) == "prilozhenie")) {
            // line 126
            echo "\t.fixed-banner, .fixed-banner_closed {display: none !important;}
";
        }
        // line 128
        echo "\t\t\t\t\t   
</style>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 128,  185 => 126,  183 => 125,  81 => 25,  77 => 24,  66 => 15,  63 => 14,  58 => 13,  55 => 12,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/footer.htm", "");
    }
}
