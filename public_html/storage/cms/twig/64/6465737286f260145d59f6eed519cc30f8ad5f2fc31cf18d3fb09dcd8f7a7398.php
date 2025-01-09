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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/menu.htm */
class __TwigTemplate_ea3cc48d7775dae0c5d817cf7eab9f591d464c6ee48a8cdacf1ec27b431a34b4 extends \Twig\Template
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
  
  <title>Меню отелей с почасовой формой оплаты в СПБ </title>
  <meta name=\"description\" content=\"Забронировать отель на час с джакузи с включенным питанием, Меню нашей гостиницы на час, ужин в отеле с хорошим питанием «Мотель» можно заказать круглосуточно в любом отеле города.\">
  <meta name=\"keywords\" content=\"меню отеля на час\">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  
  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#1D1D1D\">
  <!-- Custom Browsers Color End -->
  
  <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.min.css");
        echo "?";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "YmdH"), "html", null, true);
        echo "\" />
 
";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/head-scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

</head>

<body class=\"js-body\">
  
  <div class=\"darkcommontheme headertheme\">
    <div class=\"header-group\">
    
        <!-- Header -->
        ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "    
        
    </div>
  </div>
  
  
  
  <!-- Main content -->
  <main class=\"main\">
    <div class=\"darkcommontheme headertheme\">
      <div class=\"section s-menu\">      
        <!-- Sky -->
        <div class=\"s-menu__stars starry-sky-canvas\">
          <div class=\"starry-sky js-starry-sky\" data-stars-amount=\"40\"></div>
        </div>
        <!-- /Sky -->
        
        <!-- Flame offer block (desktop) -->
        <div class=\"s-menu__offer\">
          ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "        </div>
\t\t
\t\t<div class=\"button-wrap\">
            <a href=\"/stocks/\" class=\"s-reviews__btn button button_ghost button_medium\" style=\"margin-top: 0; margin-bottom: 70px;\">Акции</a>
          </div>
\t\t  
\t\t  
        <!-- /Flame offer block (desktop) -->
        <div class=\"s-menu__container container\">
          <h1 class=\"s-menu__title h1\">Меню отелей</h1>  
        </div>
        
        <!-- Tabs -->
        <div class=\"s-menu__tabs tabs js-tabs\">         
          <!-- Tabs Buttons -->
          <div class=\"menu-tabs-switches-wrap tabs__switches-wrap\">
            <div class=\"s-menu__container tabs__switches-container container\">
              <div class=\"menu-tabs-switches tabs__switches\">
\t\t\t\t
                <div class=\"tabs__switch js-tabs__switch active\" data-menu-type=\"alco\">Алкогольные напитки</div>
\t\t\t\t
                <div class=\"tabs__switch js-tabs__switch\" data-menu-type=\"kitchen\" style=\"/*display: none;*/\">Кухня</div>
\t\t\t\t
\t\t\t\t<div class=\"tabs__switch js-tabs__switch\" data-menu-type=\"drink\">Безалкогольные напитки</div>
\t\t\t\t<div class=\"tabs__switch js-tabs__switch\" data-menu-type=\"choco\" style=\"/*display: none;*/\">Шоколад и снэки</div>
\t\t\t\t<!--<div class=\"tabs__switch js-tabs__switch\" data-menu-type=\"accessories\">Аксессуары</div>-->
\t\t\t\t
              </div>
            </div>
          </div>         
          <!-- /Tabs Buttons -->
          

         <div class=\"tabs__contents\">\t
\t\t 
<!--------------------------------- alco Tab --------------------------------------------------->
             <div class=\"menu-tabs-content tabs__content js-tabs__content active\" data-menu-type=\"alco\">
              <div class=\"s-menu__container container\">
\t\t\t\t<p style=\"text-align: center;\">В отеле на Косыгина алкогольная продукция не реализуется!<br><br><br><br></p>
                <div class=\"s-menu__content\">
                  
\t\t\t\t\t<!-- Menu Category sparkling_wine -->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
                        <!-- Retina image -->
\t\t\t\t\t\t<img src=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sparkling_wine"] ?? null), "image", [], "any", false, false, false, 103), "path", [], "any", false, false, false, 103), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!--<img src=\"/themes/motel/assets/img/menu/shampanskoe-2-bokala.png\" srcset=\"/themes/motel/assets/img/menu/shampanskoe-2-bokala@1.5x.png 1.5x,/themes/motel/assets/img/menu/shampanskoe-2-bokala@2x.png 2x\" class=\"menu-group__pic menu-group__pic_champagne\">-->
                      </div>
                      
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sparkling_wine"] ?? null), "name", [], "any", false, false, false, 108), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sparkling_wine"] ?? null), "menu_list", [], "any", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 111
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 114), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 116), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t    <!-- Menu Category sparkling_wine_2 -->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
                        <!-- Retina image -->
\t\t\t\t\t\t<img src=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sparkling_wine_2"] ?? null), "image", [], "any", false, false, false, 131), "path", [], "any", false, false, false, 131), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!--<img src=\"/themes/motel/assets/img/menu/shampanskoe-2-bokala.png\" srcset=\"/themes/motel/assets/img/menu/shampanskoe-2-bokala@1.5x.png 1.5x,/themes/motel/assets/img/menu/shampanskoe-2-bokala@2x.png 2x\" class=\"menu-group__pic menu-group__pic_champagne\">-->
                      </div>
\t\t\t\t\t   <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">Игристые вина в&nbsp;полубутылках 0,18л</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sparkling_wine_2"] ?? null), "menu_list", [], "any", false, false, false, 137));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 138
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 141), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 143), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
\t\t\t\t\t
\t\t\t\t\t
                    
                    <!-- Menu Category wines_half_bottles-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["wines_half_bottles"] ?? null), "image", [], "any", false, false, false, 157), "path", [], "any", false, false, false, 157), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!--<img src=\"/themes/motel/assets/img/menu/bokal-krasnogo.png\" 
                        srcset=\"/themes/motel/assets/img/menu/bokal-krasnogo@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/bokal-krasnogo@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_red\">-->
                      </div>
                      
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["wines_half_bottles"] ?? null), "name", [], "any", false, false, false, 166), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["wines_half_bottles"] ?? null), "menu_list", [], "any", false, false, false, 168));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 169
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 172), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 174), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                        </div>   
                      </div>
                    </div>
                    <!-- /Menu Category -->
\t\t\t\t\t
\t\t\t\t\t
                    <!-- Menu Category wines_half_bottles_white-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["wines_half_bottles_white"] ?? null), "image", [], "any", false, false, false, 187), "path", [], "any", false, false, false, 187), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!-- Retina image <img src=\"/themes/motel/assets/img/menu/bokal-belogo.png\" srcset=\"/themes/motel/assets/img/menu/bokal-belogo@1.5x.png 1.5x,/themes/motel/assets/img/menu/bokal-belogo@2x.png 2x\" class=\"menu-group__pic menu-group__pic_white\">-->
                      </div>
                      
                      <div class=\"menu-group__content menu-group__content_narrow\">
              
                        <div class=\"menu-group__title h4\">";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["wines_half_bottles_white"] ?? null), "name", [], "any", false, false, false, 193), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["wines_half_bottles_white"] ?? null), "menu_list", [], "any", false, false, false, 195));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 196
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 199), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 201), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->\t\t\t\t\t
                    
\t\t\t\t\t
                    <!-- Menu Category wines_half_bottles_red-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["wines_half_bottles_red"] ?? null), "image", [], "any", false, false, false, 214), "path", [], "any", false, false, false, 214), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!-- Retina image
                        <img src=\"/themes/motel/assets/img/menu/konjachnyj.png\" 
                        srcset=\"/themes/motel/assets/img/menu/konjachnyj@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/konjachnyj@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_cognac\"> -->
                      </div>
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["wines_half_bottles_red"] ?? null), "name", [], "any", false, false, false, 223), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["wines_half_bottles_red"] ?? null), "menu_list", [], "any", false, false, false, 225));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 226
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 229), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 231), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
                    
\t\t\t\t\t
                    <!-- Menu Category vodka-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["vodka"] ?? null), "image", [], "any", false, false, false, 244), "path", [], "any", false, false, false, 244), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!-- Retina image 
                        <img src=\"/themes/motel/assets/img/menu/shot.png\" 
                        srcset=\"/themes/motel/assets/img/menu/shot@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/shot@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_vodka\">-->
                      </div>
                      
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vodka"] ?? null), "name", [], "any", false, false, false, 254), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["vodka"] ?? null), "menu_list", [], "any", false, false, false, 256));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 257
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 260), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 262), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
                    
                 
                    <!-- Menu Category cognac-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cognac"] ?? null), "image", [], "any", false, false, false, 275), "path", [], "any", false, false, false, 275), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!-- Retina image 
                        <img src=\"/themes/motel/assets/img/menu/viski.png\" 
                        srcset=\"/themes/motel/assets/img/menu/viski@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/viski@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_whiskey\">-->
                      </div>                      
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 284
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cognac"] ?? null), "name", [], "any", false, false, false, 284), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                         ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cognac"] ?? null), "menu_list", [], "any", false, false, false, 286));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 287
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 290), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 292), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->\t\t
\t\t\t\t\t\t
                    <!-- Menu Category whiskey-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 304
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["whiskey"] ?? null), "image", [], "any", false, false, false, 304), "path", [], "any", false, false, false, 304), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                      </div>                      
\t\t\t\t\t  <div class=\"menu-group__content menu-group__content_narrow\"> 
                        
\t\t\t\t\t\t<div class=\"menu-group__title h4\">";
        // line 308
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["whiskey"] ?? null), "name", [], "any", false, false, false, 308), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                            ";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["whiskey"] ?? null), "menu_list", [], "any", false, false, false, 310));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 311
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 314), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 316), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
\t\t\t\t\t\t

                    <!-- Menu Category rum-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 329
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rum"] ?? null), "image", [], "any", false, false, false, 329), "path", [], "any", false, false, false, 329), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                      </div>                      
\t\t\t\t\t  <div class=\"menu-group__content menu-group__content_narrow\"> 
                        
\t\t\t\t\t\t<div class=\"menu-group__title h4\">";
        // line 333
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rum"] ?? null), "name", [], "any", false, false, false, 333), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                            ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["rum"] ?? null), "menu_list", [], "any", false, false, false, 335));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 336
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 339
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 339), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 341), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->

\t\t\t\t\t<!-- Menu Category gin-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gin"] ?? null), "image", [], "any", false, false, false, 353), "path", [], "any", false, false, false, 353), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                      </div>                      
\t\t\t\t\t  <div class=\"menu-group__content menu-group__content_narrow\"> 
                        
\t\t\t\t\t\t<div class=\"menu-group__title h4\">";
        // line 357
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gin"] ?? null), "name", [], "any", false, false, false, 357), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                            ";
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gin"] ?? null), "menu_list", [], "any", false, false, false, 359));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 360
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 363), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 365), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
\t\t\t\t
                    
                    <!-- Menu Category vermut-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 378
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["vermut"] ?? null), "image", [], "any", false, false, false, 378), "path", [], "any", false, false, false, 378), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!-- Retina image 
                        <img src=\"/themes/motel/assets/img/menu/vermut.png\" 
                        srcset=\"/themes/motel/assets/img/menu/vermut@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/vermut@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_vermouth\">-->
                      </div>
                      
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 388
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vermut"] ?? null), "name", [], "any", false, false, false, 388), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["vermut"] ?? null), "menu_list", [], "any", false, false, false, 390));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 391
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 394
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 394), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 396
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 396), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
                    
                    <!-- Menu Category beer-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 408
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "image", [], "any", false, false, false, 408), "path", [], "any", false, false, false, 408), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!-- Retina image 
                        <img src=\"/themes/motel/assets/img/menu/pivo.png\" 
                        srcset=\"/themes/motel/assets/img/menu/pivo@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/pivo@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_beer\">-->
                      </div>
                      
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 418
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "name", [], "any", false, false, false, 418), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "menu_list", [], "any", false, false, false, 420));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 421
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 424
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 424), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 426
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 426), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
\t\t\t\t\t
                    <!-- Menu Category -->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
                      </div>
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 440
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cigarets"] ?? null), "name", [], "any", false, false, false, 440), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 442
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cigarets"] ?? null), "menu_list", [], "any", false, false, false, 442));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 443
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 446
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 446), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 448
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 448), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->\t\t\t\t\t
\t\t\t\t  
                </div>
              </div>
            </div>
<!--------------------------------------- /alco Tab Content -------------------------------------->


<!--------------------------------------- Kitchen Tab Content -------------------------------------->   
            <div class=\"menu-tabs-content tabs__content js-tabs__content active\" data-menu-type=\"kitchen\">
              <div class=\"s-menu__container container\">
                <div class=\"s-menu__content\">

                    <!-- Menu Category breakfast-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic\">
\t\t\t\t\t\t<img src=\"";
        // line 471
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["breakfast"] ?? null), "image", [], "any", false, false, false, 471), "path", [], "any", false, false, false, 471), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!-- Retina image 
                        <img src=\"/themes/motel/assets/img/menu/kasha.png\" 
                        srcset=\"/themes/motel/assets/img/menu/kasha@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/kasha@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_kasha\">

                        <img src=\"/themes/motel/assets/img/menu/bliny.png\" 
                        srcset=\"/themes/motel/assets/img/menu/bliny@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/bliny@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_bliny\">-->
                      </div>
                      
                      <div class=\"menu-group__content\">
                        <div class=\"menu-group__title h4\">";
        // line 487
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["breakfast"] ?? null), "name", [], "any", false, false, false, 487), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                        ";
        // line 489
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["breakfast"] ?? null), "menu_list", [], "any", false, false, false, 489));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 490
            echo "                          <!-- Position -->
                          <div class=\"menu-group__pos\">
                            <div class=\"menu-group__pos-name\">
                              ";
            // line 493
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 493), "html", null, true);
            echo "
                            </div>
                            <div class=\"menu-group__pos-price h4\">";
            // line 495
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 495), "html", null, true);
            echo "</div>
                          </div> 
                          <!-- /Position -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 499
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
                    
                    <!-- Menu Category sandwiches-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic\">
\t\t\t\t\t\t<img src=\"";
        // line 507
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sandwiches"] ?? null), "image", [], "any", false, false, false, 507), "path", [], "any", false, false, false, 507), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!-- Retina image 
                        <img src=\"/themes/motel/assets/img/menu/sendvich.png\" 
                        srcset=\"/themes/motel/assets/img/menu/sendvich@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/sendvich@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_sandwich\">-->
                      </div>
                      
                      <div class=\"menu-group__content\">
                        <div class=\"menu-group__title h4\">";
        // line 517
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sandwiches"] ?? null), "name", [], "any", false, false, false, 517), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                            ";
        // line 519
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sandwiches"] ?? null), "menu_list", [], "any", false, false, false, 519));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 520
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name\">
                                  ";
            // line 523
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 523), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 525
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 525), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 529
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
                    
                  
                    <!-- Menu Category cakes-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic\">
\t\t\t\t\t\t<img src=\"";
        // line 538
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cakes"] ?? null), "image", [], "any", false, false, false, 538), "path", [], "any", false, false, false, 538), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!-- Retina image 
                        <img src=\"/themes/motel/assets/img/menu/pirozhnoe.png\" 
                        srcset=\"/themes/motel/assets/img/menu/pirozhnoe@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/pirozhnoe@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_cake\">

                        <img src=\"/themes/motel/assets/img/menu/frukty.png\" 
                        srcset=\"/themes/motel/assets/img/menu/frukty@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/frukty@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_fruits\">-->
                      </div>
                      
                      <div class=\"menu-group__content\">
                        <div class=\"menu-group__title h4\">";
        // line 554
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cakes"] ?? null), "name", [], "any", false, false, false, 554), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 556
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cakes"] ?? null), "menu_list", [], "any", false, false, false, 556));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 557
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name\">
                                  ";
            // line 560
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 560), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 562
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 562), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 566
        echo "                          
\t\t\t\t\t\t  <!--
                          <img src=\"/themes/motel/assets/img/menu/frukty.png\" 
                          srcset=\"/themes/motel/assets/img/menu/frukty@1.5x.png 1.5x,
                          /themes/motel/assets/img/menu/frukty@2x.png 2x\"                          
                          alt=\"\" 
                          class=\"menu-group__pic menu-group__pic_fruits-mob\">-->
                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
                    

                </div>
              </div>
            </div>
<!--------------------------------------- /Kitchen Tab Content --------------------------------------> 



<!--------------------------------------- drink Tab Content -------------------------------------->         
\t\t  <div class=\"tabs__contents\">
            <div class=\"menu-tabs-content tabs__content js-tabs__content active\" data-menu-type=\"drink\">
              <div class=\"s-menu__container container\">
                <div class=\"s-menu__content\">\t
\t\t\t\t
                    <!-- Menu Category nonalco-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
                        <img src=\"";
        // line 595
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["nonalco"] ?? null), "image", [], "any", false, false, false, 595), "path", [], "any", false, false, false, 595), "html", null, true);
        echo "\" class=\"menu-group__pic\">
\t\t\t\t\t\t<!-- Retina image 
                        <img src=\"/themes/motel/assets/img/menu/voda-2.png\" 
                        srcset=\"/themes/motel/assets/img/menu/voda-2@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/voda-2@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_water\">-->
                      </div>
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 604
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["nonalco"] ?? null), "name", [], "any", false, false, false, 604), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 606
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["nonalco"] ?? null), "menu_list", [], "any", false, false, false, 606));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 607
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 610
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 610), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 612
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 612), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 616
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
                    
                    <!-- Menu Category hotdrinks-->
                    <div class=\"menu-group\">
                      <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 624
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hotdrinks"] ?? null), "image", [], "any", false, false, false, 624), "path", [], "any", false, false, false, 624), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                        <!-- Retina image 
                        <img src=\"/themes/motel/assets/img/menu/sok.png\" 
                        srcset=\"/themes/motel/assets/img/menu/sok@1.5x.png 1.5x,
                        /themes/motel/assets/img/menu/sok@2x.png 2x\"                          
                        alt=\"\" 
                        class=\"menu-group__pic menu-group__pic_juice\">-->
                      </div>
                      
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 634
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotdrinks"] ?? null), "name", [], "any", false, false, false, 634), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 636
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hotdrinks"] ?? null), "menu_list", [], "any", false, false, false, 636));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 637
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 640
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 640), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 642
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 642), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 646
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->\t\t\t\t
\t\t\t\t
                </div>
              </div>
            </div>
          </div>\t\t\t\t
<!--------------------------------------- /drink Tab Content -------------------------------------->   



            
<!--------------------------------------- choco Tab Content -------------------------------------->  
            <div class=\"menu-tabs-content tabs__content js-tabs__content\" data-menu-type=\"choco\">
              <div class=\"s-menu__container container\">
                <div class=\"s-menu__content\">

\t\t\t\t  
                    <!-- Menu Category snacks-->
                    <div class=\"menu-group\">
                      <!--
\t\t\t\t\t  <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t<img src=\"";
        // line 670
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["snacks"] ?? null), "image", [], "any", false, false, false, 670), "path", [], "any", false, false, false, 670), "html", null, true);
        echo "\" class=\"menu-group__pic\">
                      </div>\t\t\t\t\t  -->
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 673
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["snacks"] ?? null), "name", [], "any", false, false, false, 673), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["snacks"] ?? null), "menu_list", [], "any", false, false, false, 675));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 676
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 679
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 679), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 681
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 681), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 685
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
                    
\t\t\t\t\t
                    <img class=\"s-menu__illustration\" src=\"/themes/motel/assets/img/about-pic.png\"  srcset=\"/themes/motel/assets/img/about-pic@2x.png 2x\" alt=\"\">
\t\t\t\t\t

                </div>
              </div>
            </div>
<!--------------------------------------- /choco Tab Content -------------------------------------->  \t\t


<!--------------------------------------- choco Tab Content -------------------------------------->  
            <div class=\"menu-tabs-content tabs__content js-tabs__content\" data-menu-type=\"accessories\"  style=\"display: none;\">
              <div class=\"s-menu__container container\">
                <div class=\"s-menu__content\">

\t\t\t\t  
                    <!-- Menu Category -->
                    <div class=\"menu-group\">
\t\t\t\t\t\t<!--
\t\t\t\t\t  <div class=\"menu-group__graphic menu-group__graphic_narrow\">
\t\t\t\t\t\t\t<img src=\"";
        // line 710
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["accessories"] ?? null), "image", [], "any", false, false, false, 710), "path", [], "any", false, false, false, 710), "html", null, true);
        echo "\" class=\"menu-group__pic\">
\t\t\t\t\t  </div>-->

\t\t\t\t\t  
                      <div class=\"menu-group__content menu-group__content_narrow\">
                        <div class=\"menu-group__title h4\">";
        // line 715
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["accessories"] ?? null), "name", [], "any", false, false, false, 715), "html", null, true);
        echo "</div>
                        <div class=\"menu-group__pos-group\">
                          ";
        // line 717
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["accessories"] ?? null), "menu_list", [], "any", false, false, false, 717));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 718
            echo "                              <!-- Position -->
                              <div class=\"menu-group__pos\">
                                <div class=\"menu-group__pos-name menu-group__pos-name_narrow\">
                                  ";
            // line 721
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "group_menu_list", [], "any", false, false, false, 721), "html", null, true);
            echo "
                                </div>
                                <div class=\"menu-group__pos-price h4\">";
            // line 723
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "price", [], "any", false, false, false, 723), "html", null, true);
            echo "</div>
                              </div> 
                              <!-- /Position -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 727
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /Menu Category -->
                    
\t\t\t\t\t
                    <img class=\"s-menu__illustration\" src=\"/themes/motel/assets/img/about-pic.png\"  srcset=\"/themes/motel/assets/img/about-pic@2x.png 2x\" alt=\"\">
\t\t\t\t\t

                </div>
              </div>
            </div>
<!--------------------------------------- /choco Tab Content -------------------------------------->  \t\t
\t\t\t
\t\t\t
          </div>
    
          </div>
          
        </div>
        
      </div>
    </div>
    
  </main>
  <!-- /Main content -->
  
  
  <!-- Footer -->
  ";
        // line 756
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 757
        echo "  <!-- /Footer -->
  
    ";
        // line 759
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 760
        echo "  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1269 => 760,  1265 => 759,  1261 => 757,  1257 => 756,  1226 => 727,  1216 => 723,  1211 => 721,  1206 => 718,  1202 => 717,  1197 => 715,  1189 => 710,  1162 => 685,  1152 => 681,  1147 => 679,  1142 => 676,  1138 => 675,  1133 => 673,  1127 => 670,  1101 => 646,  1091 => 642,  1086 => 640,  1081 => 637,  1077 => 636,  1072 => 634,  1059 => 624,  1049 => 616,  1039 => 612,  1034 => 610,  1029 => 607,  1025 => 606,  1020 => 604,  1008 => 595,  977 => 566,  967 => 562,  962 => 560,  957 => 557,  953 => 556,  948 => 554,  929 => 538,  918 => 529,  908 => 525,  903 => 523,  898 => 520,  894 => 519,  889 => 517,  876 => 507,  866 => 499,  856 => 495,  851 => 493,  846 => 490,  842 => 489,  837 => 487,  818 => 471,  797 => 452,  787 => 448,  782 => 446,  777 => 443,  773 => 442,  768 => 440,  756 => 430,  746 => 426,  741 => 424,  736 => 421,  732 => 420,  727 => 418,  714 => 408,  704 => 400,  694 => 396,  689 => 394,  684 => 391,  680 => 390,  675 => 388,  662 => 378,  651 => 369,  641 => 365,  636 => 363,  631 => 360,  627 => 359,  622 => 357,  615 => 353,  605 => 345,  595 => 341,  590 => 339,  585 => 336,  581 => 335,  576 => 333,  569 => 329,  558 => 320,  548 => 316,  543 => 314,  538 => 311,  534 => 310,  529 => 308,  522 => 304,  512 => 296,  502 => 292,  497 => 290,  492 => 287,  488 => 286,  483 => 284,  471 => 275,  460 => 266,  450 => 262,  445 => 260,  440 => 257,  436 => 256,  431 => 254,  418 => 244,  407 => 235,  397 => 231,  392 => 229,  387 => 226,  383 => 225,  378 => 223,  366 => 214,  355 => 205,  345 => 201,  340 => 199,  335 => 196,  331 => 195,  326 => 193,  317 => 187,  306 => 178,  296 => 174,  291 => 172,  286 => 169,  282 => 168,  277 => 166,  265 => 157,  253 => 147,  243 => 143,  238 => 141,  233 => 138,  229 => 137,  220 => 131,  207 => 120,  197 => 116,  192 => 114,  187 => 111,  183 => 110,  178 => 108,  170 => 103,  123 => 58,  119 => 57,  95 => 38,  80 => 28,  73 => 26,  63 => 19,  59 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/menu.htm", "");
    }
}
