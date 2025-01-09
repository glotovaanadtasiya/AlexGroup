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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/main.htm */
class __TwigTemplate_154a03701ce198f9721b81087c808d98b3d6b00b29ef554da46765850e60fd9e extends \Twig\Template
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
  
  <!-- Main content -->
  <main class=\"main\">
  
  <div class=\"darkcommontheme darkblurtheme\">
    
    <div class=\"header-group\">
        <!-- Header -->
        ";
        // line 86
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 87
        echo "        <!-- /Header -->
        
        <!-- Booking -->
        ";
        // line 90
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/booking"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  
        <!-- /Booking -->
    </div>
\t
\t
\t<a href=\"/goapp.php\" class=\"temp_banner\">
\t\t\t<img src=\"/themes/motel/assets/img/banner_intext1.png\">
\t</a>
\t
\t<style>
\t\t.temp_banner {display: none;}
\t\t@media (max-width: 799px) {
\t\t\t.temp_banner {display: block; padding: 0 20px; margin: 20px auto 0; text-align: center;}
\t\t\t.temp_banner img {max-width: 100%; }
\t\t}
\t</style>
 

 
\t

<div style=\"\" class=\"linkblock s-map__title h3\">\t\t
";
        // line 112
        echo ($context["linkblock"] ?? null);
        echo "\t  
</div>

<style>
.linkblock { max-width: 1080px; margin: 50px auto 0px; padding: 0 20px; position: relative; text-align: center; text-decoration: underline; color: #fff; }

.linkblock p {margin-bottom: 25px;}

</style>

        <!-- Map Section -->
        <div class=\"s-map section\">\t\t  
\t\t  
          
          <div class=\"s-map__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\"></div>
          </div>
          
          <div class=\"s-map__inner js-map__inner\">
            <div class=\"s-map__container container\">
              
              <div class=\"map-box\">                
                <div class=\"map-box__hint js-map-hint\">Кликните на кристалл</div>
                
                <div class=\"map js-map\">
                  <img src=\"/themes/motel/assets/img/map-spb.png\" srcset=\"/themes/motel/assets/img/map-spb@2x.png 2x\" alt=\"\" class=\"map__img\">
                  
                  <div class=\"map__markers js-map__markers\">
                    <!-- Just for fix first crystall animation speed bug in Edge -->
                    <div class=\"marker js-map-marker map__marker visually-hidden\" data-hotel=\"fake-for-edge\">
                      <img src=\"/themes/motel/assets/img/map-crystall.svg\" alt=\"\" class=\"marker__img map__marker-img js-svg\">
                      <div class=\"marker__canvas-wrap\">
                        <canvas class=\"marker__canvas js-marker-canvas\"></canvas>
                      </div>
                    </div>
                    <!-- Just for fix first crystall animation speed bug in Edge -->

                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 150
            echo "                    <div class=\"marker js-map-marker map__marker ";
            if (twig_get_attribute($this->env, $this->source, $context["hotel"], "new", [], "any", false, false, false, 150)) {
                echo "map__marker_pending";
            }
            echo "\" data-hotel=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 150), "html", null, true);
            echo "\">
\t\t\t\t\t  ";
            // line 151
            if (twig_get_attribute($this->env, $this->source, $context["hotel"], "low_price", [], "any", false, false, false, 151)) {
                echo "<div class=\"map-on-main-discount\">%</div>";
            }
            // line 152
            echo "\t\t\t\t\t  ";
            if (twig_get_attribute($this->env, $this->source, $context["hotel"], "new", [], "any", false, false, false, 152)) {
                echo "<!--<div class=\"map-on-main-new\">new</div>-->";
            }
            // line 153
            echo "                      <img src=\"/themes/motel/assets/img/map-crystall.svg\" alt=\"\" class=\"marker__img map__marker-img js-svg\">
                      <div class=\"marker__canvas-wrap\">
                        <canvas class=\"marker__canvas js-marker-canvas ";
            // line 155
            if (twig_get_attribute($this->env, $this->source, $context["hotel"], "low_price", [], "any", false, false, false, 155)) {
                echo "js-marker-pending-canvas";
            }
            echo "\"></canvas>
                      </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!---temp ohta
\t\t\t\t\t<div class=\"marker js-map-marker map__marker\" data-hotel=\"ohta\">
\t\t\t\t\t<img src=\"/themes/motel/assets/img/map-crystall.svg\" alt=\"\" class=\"marker__img map__marker-img js-svg map__marker_pending\">
                    <div class=\"marker__canvas-wrap\">
                    <canvas class=\"marker__canvas js-marker-canvas js-marker-pending-canvas\"></canvas>
                    </div>
                    </div>
\t\t\t\t\t/temp ohta--->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
                    
\t
                    
                  </div>
                  
                </div>
                
              </div>
              
            </div>
            
            <svg class=\"s-map__inner-svg js-map-inner-svg hidden\">
              <defs>
                <linearGradient id=\"paint0_linear_line\">
                  <stop offset=\"0\" stop-color=\"#FFD64C\"/>
                  <stop offset=\"1\" stop-color=\"white\"/>
                </linearGradient>
              </defs>
              <line class=\"s-map__inner-line js-map-line\" stroke=\"url(#paint0_linear_line)\"></line>
            </svg>
          </div>
          
          <div class=\"s-map__cards-box js-s-map-cards-box\">
            <div class=\"s-map__cards-container container\">
            
            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 198
            echo "            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['hotel'] = $context["hotel"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/hotelCardOnMapMain"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 199
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "\t\t\t
\t\t\t<!-------------------------temp--------------------------->
\t\t\t            <!-- Hotel Card 
<div class=\"map-card js-map-card s-map__card js-s-map-card\" data-hotel=\"ohta\">
    <div class=\"map-card__box\">
        <button class=\"map-card__close js-map-card__close\">
            <img src=\"/themes/motel/assets/img/close.svg\" alt=\"\" class=\"map-card__close-icon js-svg\">
        </button>
        <div class=\"map-card__title\"><a href=\"/news/post/otkrytie-otelya-aleks-novaya-ohta/\">Отель Новая Охта<br>открытие в 2025 году</a></div>
        <div class=\"map-card__metro\">
        <img src=\"/themes/motel/assets/img/metro.svg\" alt=\"metro sign\" class=\"map-card__metro-icon metro-icon metro-icon_red js-svg\">
\t\t\t<span class=\"map-card__metro-name\">Гражданский проспект</span>            
        </div>
        <div class=\"map-card__address\">Даниила Хармса ул., 4</div>
        <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"map-card__phone\">+7-812-468-77-77</a>

        
        <a href=\"/news/post/otkrytie-otelya-aleks-novaya-ohta/\" class=\"map-card__btn button button_medium button_ghost\">подробнее <img src=\"/themes/motel/assets/img/arrow-right.svg\" alt=\"\" class=\"map-card__btn-img js-svg\"></a>
    </div>
</div>
 /Hotel Card -->   
\t\t\t<!-------------------------temp--------------------------->\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
            
            <!--
            <div class=\"map-card js-map-card s-map__card js-s-map-card\" data-hotel=\"fontanka\">
              <div class=\"map-card__box\">
                <button class=\"map-card__close js-map-card__close\">
                  <img src=\"/themes/motel/assets/img/close.svg\" alt=\"\" class=\"map-card__close-icon js-svg\">
                </button>
                <div class=\"map-card__title\">Отель на Фонтанке</div>
                <div class=\"map-card__metro\">
                  <span class=\"map-card__metro-name\">Гостиный двор</span>
                  <img src=\"/themes/motel/assets/img/metro.svg\" alt=\"metro sign\" class=\"map-card__metro-icon metro-icon metro-icon_green js-svg\">
                </div>
                <div class=\"map-card__address\">открытие 11 декабря 2019</div>
                <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"map-card__phone\">+7 (812) 468-77-77</a>
              </div>
            </div>
\t\t\t-->
\t\t\t
\t\t\t<!--
            <div class=\"map-card js-map-card s-map__card js-s-map-card\" data-hotel=\"frunzenskaya\">
              <div class=\"map-card__box\">
                <button class=\"map-card__close js-map-card__close\">
                  <img src=\"/themes/motel/assets/img/close.svg\" alt=\"\" class=\"map-card__close-icon js-svg\">
                </button>
                <div class=\"map-card__title\">Отель на Фрунзенской</div>
                <div class=\"map-card__metro\">
                  <span class=\"map-card__metro-name\">Фрунзенская</span>
                  <img src=\"/themes/motel/assets/img/metro.svg\" alt=\"metro sign\" class=\"map-card__metro-icon metro-icon metro-icon_blue js-svg\">
                </div>
                <div class=\"map-card__address\">открытие июнь 2020</div>
                <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"map-card__phone\">+7 (812) 468-77-77</a>
\t\t\t\t<img src=\"/fru.jpg\" style=\"width: 100%;\">
              </div>
            </div>\t\t\t
\t\t\t-->
            
            </div> 
          </div>
          
          
          <!-- Flame offer block -->
          <div class=\"s-map__offer\">
          ";
        // line 269
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 270
        echo "          </div>
          <!-- /Flame offer block -->
          
          
        </div>
        <!-- /Map Section -->
\t\t

\t\t
<div style=\"max-width: 800px; margin: 50px auto 0px; padding: 0 20px;\">\t\t
         
\t\t  <h2 class=\"s-map__title h3\">Сеть романтических отелей №1<br>в Петербурге</h2>
\t
</div>\t
\t\t
        
        
        <div class=\"s-main-about section\">
          <div class=\"s-main-about__container container\">
            
            <div class=\"main-about\">
              <h1 class=\"main-about__title h1\">";
        // line 291
        echo twig_escape_filter($this->env, ($context["block1_text_1"] ?? null), "html", null, true);
        echo "</h1>
              <div class=\"main-about__subtitle h3\">";
        // line 292
        echo twig_escape_filter($this->env, ($context["block1_text_2"] ?? null), "html", null, true);
        echo "</div>
              <div class=\"main-about__text plaintext\">
                ";
        // line 294
        echo ($context["block1_text_3"] ?? null);
        echo "
              </div>
              
              
               <div class=\"main-about__heroes\">
                <div class=\"main-about__man\">
                  <div class=\"main-about__man-head\">
                    <canvas class=\"main-about__man-canvas js-man-head\"></canvas>
                  </div>
                  <img src=\"/themes/motel/assets/img/man.png\" srcset=\"/themes/motel/assets/img/man@2x.png 2x\" alt=\"\" class=\"main-about__man-image\">
                </div>
                
                <div class=\"main-about__woman\">
                  <div class=\"main-about__woman-head\">
                    <canvas class=\"main-about__woman-canvas js-woman-head\"></canvas>
                  </div>
                  <img src=\"/themes/motel/assets/img/woman.png\" srcset=\"/themes/motel/assets/img/woman@2x.png 2x\" alt=\"\" class=\"main-about__woman-image\">
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
        
        <div class=\"s-main-why section\">
          <!-- Sky -->
          <div class=\"s-main-why__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"15\"></div>
          </div>
          <!-- /Sky -->
          <div class=\"s-main-why__container container\">
            <div class=\"main-why\">
              <div class=\"main-why__title h2\">";
        // line 327
        echo twig_escape_filter($this->env, ($context["block2_text_1"] ?? null), "html", null, true);
        echo "</div>
              <div class=\"main-why__text plaintext\">
                ";
        // line 329
        echo ($context["block2_text_2"] ?? null);
        echo "
              </div>
            </div>
          </div>
          
          <div class=\"offer-items\">
            <div class=\"offer-items__container container\">
              <div class=\"offer-items__row row\">
              
              ";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offer_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer_item"]) {
            // line 339
            echo "                  <div class=\"offer-items__col col-md-4 col-sm-12\">
                      <div class=\"offer-item\">
                        <div class=\"offer-item__icon-wrap\">
                          <img src=\"";
            // line 342
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["offer_item"], "offer_items_img", [], "any", false, false, false, 342));
            echo "\" alt=\"\" class=\"offer-item__icon\">
                        </div>
                        <div class=\"offer-item__descr\">
                          <div class=\"offer-item__title\">";
            // line 345
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer_item"], "offer_item_name", [], "any", false, false, false, 345), "html", null, true);
            echo "</div>
                          <div class=\"offer-item__txt\">";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer_item"], "offer_item_desc", [], "any", false, false, false, 346), "html", null, true);
            echo "</div>
                        </div>
                      </div>
                    </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "
              </div>
            </div>
          </div>
          
        </div>
      </div>
    
    <div class=\"photo-slider js-photo-slider owl-carousel\"  data-desktop-dots=\"1\">

      ";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 362
            echo "\t\t<img src=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["photo"], "photo", [], "any", false, false, false, 362)), 1920]);
            echo "\" srcset=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["photo"], "photo", [], "any", false, false, false, 362)), 320]);
            echo " 320w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 363
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["photo"], "photo", [], "any", false, false, false, 363)), 640]);
            echo " 640w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 364
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["photo"], "photo", [], "any", false, false, false, 364)), 1024]);
            echo " 1024w,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 365
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["photo"], "photo", [], "any", false, false, false, 365)), 1920]);
            echo " 1920w\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   alt=\"";
            // line 367
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["photo"], "photo", [], "any", false, false, false, 367));
            echo "\" class=\"photo-slider__img \">

\t\t  

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        echo "
    </div>
    
    ";
        // line 375
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/reviews_slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 376
        echo "    
    <div class=\"darkcommontheme darkblurtheme\">
        ";
        // line 378
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/faq_list_on_main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 379
        echo "    
        ";
        // line 380
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/news_slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 381
        echo "    </div>
\t
";
        // line 383
        if (($context["seo_text"] ?? null)) {
            echo "\t
<div class=\"s-main-about section\">
\t<div class=\"s-main-about__container container\">
\t\t<div class=\"read-more special-text\">
\t\t\t";
            // line 387
            echo ($context["seo_text"] ?? null);
            echo "
\t\t\t<p class=\"prompt\"><a href=\"#\">читать дальше</a></p>
\t\t</div>
\t</div>
</div>
";
        }
        // line 392
        echo " 
    
  </main>
  <!-- /Main content -->
  
  
  <!-- Footer -->
  ";
        // line 399
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 400
        echo "  <!-- /Footer -->
  
  <!-- Modals -->
  <div class=\"modals hidden\">    
    
    ";
        // line 405
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/booking-popup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "    
  </div>
  <!-- /Modals -->  
  

  ";
        // line 410
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 411
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
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  667 => 411,  663 => 410,  653 => 405,  646 => 400,  642 => 399,  633 => 392,  624 => 387,  617 => 383,  613 => 381,  609 => 380,  606 => 379,  602 => 378,  598 => 376,  594 => 375,  589 => 372,  578 => 367,  573 => 365,  569 => 364,  565 => 363,  558 => 362,  554 => 361,  542 => 351,  531 => 346,  527 => 345,  521 => 342,  516 => 339,  512 => 338,  500 => 329,  495 => 327,  459 => 294,  454 => 292,  450 => 291,  427 => 270,  423 => 269,  352 => 200,  346 => 199,  340 => 198,  336 => 197,  296 => 159,  284 => 155,  280 => 153,  275 => 152,  271 => 151,  262 => 150,  258 => 149,  218 => 112,  191 => 90,  186 => 87,  182 => 86,  164 => 73,  146 => 58,  142 => 57,  138 => 56,  118 => 43,  110 => 42,  95 => 29,  84 => 23,  80 => 22,  73 => 17,  66 => 15,  62 => 14,  59 => 13,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/main.htm", "");
    }
}
