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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/hotels.htm */
class __TwigTemplate_a9a98474b8c204c1460c4b7a0a1b62a63b9be963c4557918c10f6ca4674c02d2 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "gallery", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 2
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "



<!DOCTYPE html>
<html lang=\"ru\">

<head>
<meta charset=\"utf-8\">
  <!-- <base href=\"/\"> -->
  
  <title>Мотель спб мини отели на час на карте Санкт-Петербурга</title>
  <meta name=\"description\" content=\"Мини отель спб недорого по станциям, отель на ночь для двоих спб, мини отель спб недорого почасовая оплата на карте, сеть отелей спб недорого сутки.\">
  <meta name=\"keywords\" content=\"Мини отели на час \">    
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  
  <!-- Basic Images Start -->
  <meta property=\"og:image\" content=\"path/to/image.jpg\">
  <link rel=\"icon\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/apple-touch-icon-180x180.png");
        echo "\">
  <link rel=\"mask-icon\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
  <!-- Basic Images End -->
  
  <!-- Custom Browsers Color Start -->
  <meta name=\"theme-color\" content=\"#1D1D1D\">
  <!-- Custom Browsers Color End -->
  
 <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.min.css");
        echo "\" />
 
";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/head-scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

</head>

<body class=\"js-body\">
  
  <div class=\"darkcommontheme darkblurtheme\">
    <div class=\"header-group\">
        <!-- Header -->
        ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "        <!-- /Header -->
    </div>
  </div>
  
<!-- map - map - map - map - map - map - map - map - map - map - map - map - map - map - map - map -->
  <script src=\"https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=cf3923d1-7a99-4510-8581-f0404b944dc2\" type=\"text/javascript\"></script>

  \t  
<script>
ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map('map', {
            center: [59.9376466, 30.3552034],
            zoom: 10,
\t\t\tcontrols: ['zoomControl']
        });
\tmyMap.behaviors.disable('scrollZoom'); // — это отключает зум колёсиком мышки, всё ок.
\t
\tvar collection = new ymaps.GeoObjectCollection(null, {
        // Запретим появление балуна.
        hasBalloon: false,
        iconColor: '#3b5998'
    });

    // Добавим геообъекты в коллекцию.
    collection
    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            echo "\t
        .add(new ymaps.Placemark( [";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "coordinates", [], "any", false, false, false, 73), "html", null, true);
            echo "], {
            balloonContent: '";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 74), "html", null, true);
            echo "'
        },\t
\t\t{
\t\t
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/themes/motel/assets/img/map-crystal";
            // line 81
            if (twig_get_attribute($this->env, $this->source, $context["hotel"], "new", [], "any", false, false, false, 81)) {
                echo "-pending";
            }
            echo ".svg',
            // Размеры метки.
            iconImageSize: [29, 21],
            // Смещение левого верхнего угла иконки относительно
            // её \"ножки\" (точки привязки).
            iconImageOffset: [-15, -21]
\t\t}
\t\t))
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t
\t\t/*
\t\t.add(new ymaps.Placemark( [60.034087, 30.448566], {
            balloonContent: 'ohta'
        },\t
\t\t{
\t\t
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/themes/motel/assets/img/map-crystal-pending.svg',
            // Размеры метки.
            iconImageSize: [29, 21],
            // Смещение левого верхнего угла иконки относительно
            // её \"ножки\" (точки привязки).
            iconImageOffset: [-15, -21]
\t\t}
\t\t))*/
\t\t
\t;
\t

\t
\t\t
    // Добавим коллекцию на карту.
    myMap.geoObjects.add(collection);

\t
\t
\tcollection.events.add('click', function (e) {
\t\t\tvar curMarker = e.get('target');\t
            var hotelName = curMarker.properties.get('balloonContent');
            //console.log('Marker ' + hotelName + ' has been clicked');
\t\t\t
            activateMarker(hotelName);

            if (curMarker.status !== 'pending') {
                \$(\".js-map-select\").val(hotelName).trigger(\"change\");
            }

            for (var j = 0; j < markers.length; j++) {
                markers[j].setIcon(normalIcon);
                markers[j].setAnimation(null);

                if (markers[j].status === \"pending\") {
                    markers[j].setIcon(normalIconPending);
                }
            }

            this.setIcon(activeIcon);

            if (curMarker.status === 'pending') {
                curMarker.setIcon(activeIconPending);
            }

            this.setAnimation(google.maps.Animation.BOUNCE);
            setTimeout(function() {
                curMarker.setAnimation(null);
            }, 1000);
            // change zIndex of active marker 

            zIndexMarker++;
            this.setZIndex(zIndexMarker);
\t\t\t
        });
  
\t
\t/*
    // Подпишемся на событие клика по коллекции.
    collection.events.add('click', function (e) {
        // Получим ссылку на геообъект, по которому кликнул пользователь.
        var target = e.get('target');
        // Зададим контент боковой панели.
        panel.setContent(target.properties.get('balloonContent'));
        // Переместим центр карты по координатам метки с учётом заданных отступов.
        map.panTo(target.geometry.getCoordinates(), {useMapMargin: true});
    });
\t*/

    //['";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 169), "html", null, true);
        echo "', 'Отель ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", [], "any", false, false, false, 169), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "coordinates", [], "any", false, false, false, 169), "html", null, true);
        echo ", 1, ,";
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "low_price", [], "any", false, false, false, 169)) {
            echo "'pending'";
        }
        echo "],
    
   

}
</script>\t 
<style>
.ymaps-2-1-79-ground-pane {
    -webkit-filter: grayscale(100%) invert(90%);
\tfilter: grayscale(100%) invert(90%);
\t
}
</style>


  <div class=\"gmap-box darkcommontheme\">
\t<div id=\"map\" style=\"height: 600px; position: absolute; left: 0; top: 0; width: 100%; height: 100%;\"></div>
\t<div class=\"gmap-box__cards-box js-s-map-cards-box\">
      <div class=\"gmap-box__cards-container container\">
        
        ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 190
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['hotel'] = $context["hotel"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/hotelCardOnMap"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 191
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "
\t\t<!----------------temp ohta card--------------------------
\t\t<div class=\"map-card js-map-card gmap-box__card js-s-map-card\" data-hotel=\"ohta\">
          <div class=\"map-card__box\">
                  <button class=\"map-card__close js-map-card__close\">
                    <img src=\"/themes/motel/assets/img/close.svg\" alt=\"\" class=\"map-card__close-icon js-svg\">
                  </button>
                  <div class=\"map-card__title\"><a href=\"/news/post/otkrytie-otelya-aleks-novaya-ohta/\">Отель Новая Охта<br>Открытие в 2025 году</a></div>




                  <div class=\"map-card__address\">Даниила Хармса ул., 4</div>
                  <a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"map-card__phone\">+7-812-468-77-77</a>
                 
                  
                  <a href=\"/news/post/otkrytie-otelya-aleks-novaya-ohta/\" class=\"map-card__btn button button_medium button_ghost\">Подробнее <img src=\"/themes/motel/assets/img/arrow-right.svg\" alt=\"\" class=\"map-card__btn-img js-svg\"></a>
                </div>
        </div>
\t\t--------------/temp ohta card---------------------------->

      </div> 
    </div>
  </div>
  <!-- map - map - map - map - map - map - map - map - map - map - map - map - map - map - map - map -->
  
  
  

";
        // line 236
        echo "  

  <!-- Main content -->
  <main class=\"main\">
      <div class=\"darkcommontheme darkblurtheme\">        
        
        <div class=\"s-hotels section\">
          <div class=\"s-hotels__container\">
              <!-- Flame offer block -->
              <div class=\"s-hotels__offer\">
                ";
        // line 246
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/special_offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 247
        echo "              </div>
              <!-- /Flame offer block -->

            <h1 class=\"s-hotels__title h1\">Все отели</h1>
          </div>          

          <div class=\"hotel-cards-box\">
            <div class=\"hotel-cards-box__container container\">
              <div class=\"hotel-cards-box__inner js-hotel-cards\">
                ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 257
            echo "                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['hotel'] = $context["hotel"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/hotelCard"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 258
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "\t\t\t\t


              </div>
            </div>
          </div>
        </div>
      </div>

 
";
        // line 269
        if (($context["seo_text"] ?? null)) {
            echo "\t
<div class=\"s-main-about section\">
\t<div class=\"s-main-about__container container\">
\t\t<div class=\"read-more special-text\">
\t\t\t";
            // line 273
            echo ($context["seo_text"] ?? null);
            echo "
\t\t\t<p class=\"prompt\"><a href=\"#\">читать дальше</a></p>
\t\t</div>
\t</div>
</div>
";
        }
        // line 278
        echo " 



  
    
    <div class=\"photo-slider js-photo-slider owl-carousel\">
";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 286
            echo "        <div class=\"photo-slider__item\">
          <img data-src=\"";
            // line 287
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["photo"], "photo", [], "any", false, false, false, 287)), 1920]);
            echo "\" alt=\"\" class=\"photo-slider__img owl-lazy\">
        </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "\t\t
    </div>
      
  </main>
  <!-- /Main content -->
  
  
  <!-- Footer -->
  ";
        // line 298
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 299
        echo "  <!-- /Footer -->
  
  
  
  <script>
    // Data for the markers consisting of a name, title, a LatLng, zIndex  and state (optional)
    var gMapHotels = [
    ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 307
            echo "    ['";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 307), "html", null, true);
            echo "', 'Отель ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 307), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "coordinates", [], "any", false, false, false, 307), "html", null, true);
            echo ", 1, ,";
            if (twig_get_attribute($this->env, $this->source, $context["hotel"], "low_price", [], "any", false, false, false, 307)) {
                echo "'pending'";
            }
            echo "],
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "\t//['frunzenskaya', 'Отель на Фрунзенской', 59.905765, 30.318091, 1, ,'pending'],
    ];
  </script>
  
  <!-- google maps api -->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAosLw6LPVOHPdiVUr8mClGPM6hKzTt1v4\"></script>
  ";
        // line 315
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 316
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
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/hotels.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 316,  484 => 315,  476 => 309,  459 => 307,  455 => 306,  446 => 299,  442 => 298,  432 => 290,  423 => 287,  420 => 286,  416 => 285,  407 => 278,  398 => 273,  391 => 269,  379 => 259,  373 => 258,  367 => 257,  363 => 256,  352 => 247,  348 => 246,  336 => 236,  305 => 192,  299 => 191,  293 => 190,  289 => 189,  258 => 169,  177 => 90,  160 => 81,  150 => 74,  146 => 73,  140 => 72,  111 => 45,  107 => 44,  93 => 35,  88 => 33,  78 => 26,  74 => 25,  70 => 24,  48 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/hotels.htm", "");
    }
}
