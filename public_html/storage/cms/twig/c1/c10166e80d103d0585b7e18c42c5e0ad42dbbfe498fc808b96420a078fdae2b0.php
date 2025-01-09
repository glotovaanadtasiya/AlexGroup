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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/about.htm */
class __TwigTemplate_fbbfa924fec2134714663c93f67a99293a8fbf1909c1a87c30a343871348ab6f extends \Twig\Template
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
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "offer_items", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 5
            echo "
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "block3_slides", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 11
            echo "
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "


";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "workers", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 18
            echo "
  
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "


";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "certificates", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 26
            echo "
  
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "





";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "suggestions", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 37
            echo "
  
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>
<meta charset=\"utf-8\">
  <!-- <base href=\"/\"> -->
  
  <title>Сеть романтических отелей №1 джакузи в Санкт-Петербурге </title>
  <meta name=\"description\" content=\"МотельСПБ Сеть романтических отелей на час №1 с джакузи в Санкт-Петербурге и Москве. Лушие почасовые отели в Москве и Санкт-Петербурге с посуточной арендой без паспорта \">
  <meta name=\"keywords\" content=\"МотельСПБ\">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  
  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#1D1D1D\">
  <!-- Custom Browsers Color End -->
  
 <link rel=\"stylesheet\" href=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.min.css");
        echo "\" />
 
";
        // line 68
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
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "      <!-- /Header --> 
        
      <!-- Booking -->
      ";
        // line 84
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/booking"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  
      <!-- /Booking -->
    </div>
  
    <!-- Map Section -->
        <div class=\"s-map section\">
          
          <div class=\"s-map__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\"></div>
          </div>
          
          <div class=\"s-map__inner js-map__inner\">
            <div class=\"s-map__container container\">
              <h2 class=\"s-map__title h3\">Сеть романтических отелей №1</h2>
              
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
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 116
            echo "                    <div class=\"marker js-map-marker map__marker\" data-hotel=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 116), "html", null, true);
            echo "\">
                      <img src=\"/themes/motel/assets/img/map-crystall.svg\" alt=\"\" class=\"marker__img map__marker-img js-svg\">
                      <div class=\"marker__canvas-wrap\">
                        <canvas class=\"marker__canvas js-marker-canvas\"></canvas>
                      </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                    
\t\t\t\t\t<!--
                    <div class=\"marker js-map-marker map__marker map__marker_pending\" data-hotel=\"fontanka\">
                      <img src=\"/themes/motel/assets/img/map-crystall.svg\" alt=\"\" class=\"marker__img map__marker-img js-svg\">
                      <div class=\"marker__canvas-wrap\">
                        <canvas class=\"marker__canvas js-marker-pending-canvas\"></canvas>
                      </div>
                    </div>
\t\t\t\t\t -->
\t\t\t\t\t
                    <div class=\"marker js-map-marker map__marker\" data-hotel=\"frunzenskaya\">
                      <img src=\"/themes/motel/assets/img/map-crystall.svg\" alt=\"\" class=\"marker__img map__marker-img js-svg\">
                      <div class=\"marker__canvas-wrap\">
                        <canvas class=\"marker__canvas js-marker-pending-canvas\"></canvas>
                      </div>
                    </div>\t\t\t\t\t
                    
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
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 163
            echo "            
            ";
            // line 164
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['hotel'] = $context["hotel"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/hotelCardOnMapMain"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 165
            echo "              
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "            
            
\t\t\t<!--
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
                <div class=\"map-card__address\">открытие осенью 2019</div>
                <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"map-card__phone\">+7 (812) 468-77-77</a>
              </div>
            </div>
\t\t\t-->
\t\t\t
            
            </div> 
          </div>
          
          
          <!-- Flame offer block -->
          <div class=\"s-map__offer\">
          ";
        // line 193
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 194
        echo "          </div>
          <!-- /Flame offer block -->
          
          
        </div>
        <!-- /Map Section -->
  
    


        <div class=\"s-about-main section\">         
          
          
          <!-- Flame offer block (desktop) -->
          <div class=\"s-about-main__offer\">
          ";
        // line 209
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 210
        echo "          </div>
          <!-- /Flame offer block (desktop) -->
          <!-- Sky -->
          <div class=\"s-about-main__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\"></div>
          </div>
          <!-- /Sky -->
          <div class=\"s-about-main__container container\">
            <div class=\"s-about-main__box\">
              <div class=\"s-about-main__descr\">
                <h1 class=\"s-about-main__title h3\">";
        // line 220
        echo twig_escape_filter($this->env, ($context["block1_text_1"] ?? null), "html", null, true);
        echo "</h1>
                <div class=\"s-about-main__text plaintext\">
                  ";
        // line 222
        echo twig_escape_filter($this->env, ($context["block1_text_2"] ?? null), "html", null, true);
        echo "
                </div>
              </div>
              <div class=\"s-about-main__pic\">
                <img src=\"/themes/motel/assets/img/about-pic.png\" srcset=\"/themes/motel/assets/img/about-pic@2x.png 2x\" alt=\"\" class=\"s-about-main__pic-inner\">
              </div>
            </div>
          </div>
        </div>
      </div>
    

    <div class=\"darkcommontheme darktheme\">
      <div class=\"s-standards section\">
        <div class=\"s-standards__container container\">
          <div class=\"s-standards__title h2\">Наши стандарты размещения</div>          
        </div>
        <!-- Rooms Carousel -->
        <div class=\"s-standards__carousel\">
          <div class=\"rooms-carousel\">
            <div class=\"rooms-carousel__container container\">
              <div class=\"rooms-carousel__inner js-rooms-carousel owl-carousel\">
                ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offer_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer_item"]) {
            // line 245
            echo "                  <div class=\"rooms-carousel__item\">
                    <div class=\"rooms-carousel__photo\">
                      <img src=\"";
            // line 247
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["offer_item"], "offer_items_img", [], "any", false, false, false, 247)), 500]);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer_item"], "offer_item_name", [], "any", false, false, false, 247), "html", null, true);
            echo "\" class=\"rooms-carousel__img\">
                    </div>
                    <div class=\"rooms-carousel__title\">";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer_item"], "offer_item_name", [], "any", false, false, false, 249), "html", null, true);
            echo "</div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "              </div>
            </div>
          </div>
        </div>        
        <!-- /Rooms Carousel -->

      </div>
    </div>
    
    <div class=\"darkcommontheme darkblurtheme\">
      
        <div class=\"s-about-descr section\">
          <!-- Sky -->
          <div class=\"s-about-descr__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"30\"></div>
          </div>
          <!-- /Sky -->

          <div class=\"s-about-descr__container container\">
            <div class=\"s-about-descr__text plaintext\">
              ";
        // line 272
        echo ($context["block3_text_1"] ?? null);
        echo "
            </div>
          </div>
          
            <!-- Rooms Carousel -->
            <div class=\"s-about-descr__carousel\">
              <div class=\"rooms-carousel\">
                <div class=\"rooms-carousel__container container\">
                  <div class=\"rooms-carousel__inner js-rooms-carousel owl-carousel\">
                    ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block3_slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 282
            echo "                      <div class=\"rooms-carousel__item\">
                        <div class=\"rooms-carousel__photo\">
                          <img src=\"";
            // line 284
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 284)), 500]);
            echo "\" alt=\"\" class=\"rooms-carousel__img\">
                        </div>
                        <div class=\"rooms-carousel__title\">";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 286), "html", null, true);
            echo "</div>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "                  </div>
                </div>
              </div>
            </div>        
            <!-- /Rooms Carousel -->
          
          <div class=\"s-about-descr__container container\">
            <div class=\"s-about-descr__text plaintext\">
              ";
        // line 297
        echo ($context["block3_text_2"] ?? null);
        echo "
            </div>
          </div>
        </div>


      <div class=\"s-workers section\">
        <div class=\"s-workers__container container\">
          <div class=\"s-workers__title h2\">";
        // line 305
        echo ($context["block4_text_1"] ?? null);
        echo "</div>
        </div>
        <!-- Workers 
        <div class=\"s-workers__box\">
          <div class=\"s-workers__box-container container\">
            <div class=\"workers js-workers\">
              ";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["workers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 312
            echo "                <div class=\"workers__item\">
                  <div class=\"workers__photo\">
                    <img src=\"";
            // line 314
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["worker"], "worker_img", [], "any", false, false, false, 314)), 500]);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "worker_name", [], "any", false, false, false, 314), "html", null, true);
            echo "\" class=\"workers__photo-inner\">
                  </div>
                  <div class=\"workers__name h4\">";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "worker_name", [], "any", false, false, false, 316), "html", null, true);
            echo "</div>
                  <div class=\"workers__position\">";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "worker_position", [], "any", false, false, false, 317), "html", null, true);
            echo "</div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "            </div>
          </div>         
        </div> 
        <!-- /Workers -->
        <div class=\"s-workers__container container\">
          <div class=\"s-workers__text plaintext\">
            ";
        // line 326
        echo ($context["block4_text_2"] ?? null);
        echo "
          </div>
        </div>
      </div>


      
        <div class=\"s-rewards section\">
          <!-- Sky -->
          <div class=\"s-rewards__stars starry-sky-canvas\">
            <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"50\"></div>
          </div>
          <!-- /Sky -->
          
          <div class=\"s-rewards__container container\">
            <div class=\"s-rewards__title h1\">";
        // line 341
        echo ($context["block5_text_1"] ?? null);
        echo "</div>
          </div>
          
          
          <!-- Rewards -->
          <div class=\"s-rewards__carousel\">
            <div class=\"s-rewards__carousel-container container\">
              <div class=\"rewards-carousel js-rewards-carousel owl-carousel\">
                ";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["certificates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["certificate"]) {
            // line 350
            echo "                  <div class=\"rewards-carousel__item\">
                    <div class=\"reward\">
                      <a href=\"";
            // line 352
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["certificate"], "img", [], "any", false, false, false, 352));
            echo "\" class=\"reward__fill-link fill-link\"></a>
                      <div class=\"reward__content\">
                        <div class=\"reward__title h4\">";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "name", [], "any", false, false, false, 354), "html", null, true);
            echo "</div>
                        <div class=\"reward__subtitle\">";
            // line 355
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "desc", [], "any", false, false, false, 355), "html", null, true);
            echo "</div>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
        echo "              </div>
            </div>
          </div>            
          <!-- /Rewards -->
        </div>
    </div>

    <div class=\"darkcommontheme darktheme\">
      <div class=\"section s-add-services\">
        
        <div class=\"container container_narrow\">
          <div class=\"s-add-services__title h2\">
            ";
        // line 372
        echo ($context["block6_text_1"] ?? null);
        echo "
          </div>
          <div class=\"s-add-services__text plaintext\">
            ";
        // line 375
        echo ($context["block6_text_2"] ?? null);
        echo "
          </div>
          
          ";
        // line 378
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['services'] = ($context["services"] ?? null)        ;
        $context['__cms_partial_params']['offers'] = ($context["offers"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/additional_services_table"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 379
        echo "
        </div>
        
      </div>
    </div>

\t
\t";
        // line 425
        echo "\t
  </main>
  <!-- /Main content -->
  
  
  <!-- Footer -->
  ";
        // line 431
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 432
        echo "  <!-- /Footer -->
  
  <!-- Modals -->
  <div class=\"modals hidden\">    
    
    ";
        // line 437
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/booking-popup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  
\t
  </div>
  <!-- /Modals -->  
  
  
  ";
        // line 443
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 444
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
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 444,  677 => 443,  666 => 437,  659 => 432,  655 => 431,  647 => 425,  638 => 379,  632 => 378,  626 => 375,  620 => 372,  606 => 360,  595 => 355,  591 => 354,  586 => 352,  582 => 350,  578 => 349,  567 => 341,  549 => 326,  541 => 320,  532 => 317,  528 => 316,  521 => 314,  517 => 312,  513 => 311,  504 => 305,  493 => 297,  483 => 289,  474 => 286,  469 => 284,  465 => 282,  461 => 281,  449 => 272,  427 => 252,  418 => 249,  411 => 247,  407 => 245,  403 => 244,  378 => 222,  373 => 220,  361 => 210,  357 => 209,  340 => 194,  336 => 193,  308 => 167,  301 => 165,  296 => 164,  293 => 163,  289 => 162,  248 => 123,  234 => 116,  230 => 115,  194 => 84,  189 => 81,  185 => 80,  168 => 68,  163 => 66,  153 => 59,  149 => 58,  145 => 57,  127 => 41,  118 => 37,  114 => 36,  106 => 30,  97 => 26,  93 => 25,  88 => 22,  79 => 18,  75 => 17,  70 => 14,  62 => 11,  58 => 10,  54 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/about.htm", "");
    }
}
