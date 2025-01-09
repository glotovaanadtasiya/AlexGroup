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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/contacts.htm */
class __TwigTemplate_63623388ba5a59087016b40a22daab3a159d0b06abe3237a43d9d34e0970828e extends \Twig\Template
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
  
  <title>МотельСПБ - Сеть Мини-Отелей во всех районах в Санкт-Петербурге </title>
  <meta name=\"description\" content=\"Сеть мини отелей с джакузи на час в Питере с единой службой бронирования номеров по часово по телефону 8 (812) 468-77-77 цены от 640 за час \">
  <meta name=\"keywords\" content=\"Сеть отелей с часовой оплатой в спб \">    
  
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
            <!-- /Header -->

        </div>
    </div>


<!-- Main content -->
<main class=\"main\">
    

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
            iconImageHref: '/themes/motel/assets/img/map-crystal.svg',
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
        echo "\t
\t/*
\t.add(new ymaps.Placemark( [60.034087, 30.448566], {
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
\t;

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
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, false, 167), "html", null, true);
        echo "', 'Отель ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "name", [], "any", false, false, false, 167), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "coordinates", [], "any", false, false, false, 167), "html", null, true);
        echo ", 1, ,";
        if (twig_get_attribute($this->env, $this->source, ($context["hotel"] ?? null), "low_price", [], "any", false, false, false, 167)) {
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
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 188
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['hotel'] = $context["hotel"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/hotelCardOnMap"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 189
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "

\t\t<!----------------temp ohta card---------------------------
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
\t\t---------------/temp ohta card---------------------------->
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
      </div> 
    </div>
  </div>
  <!-- map - map - map - map - map - map - map - map - map - map - map - map - map - map - map - map -->

  <div class=\"darktheme darkcommontheme\">
    <div class=\"s-contacts-descr section\">
      <div class=\"s-contacts-descr__container container\">
        <h1 class=\"s-contacts-descr__title h2\">";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 231), "html", null, true);
        echo "</h1>
        <div class=\"s-contacts-descr__text plaintext\">
            ";
        // line 233
        echo twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "content", [], "any", false, false, false, 233);
        echo "
        </div>        
\t\t
\t\t<div class=\"hotels-on-contact\">
\t\t";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 238
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['hotel'] = $context["hotel"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blocks/hotelCardContacts"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 239
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "\t\t
\t\t
\t\t
<!---------------temp ohta card--------------------------
<div>
<a href=\"/news/post/otkrytie-otelya-aleks-novaya-ohta/\" class=\"contact-hotelname\">Отель Новая Охта<br>Открытие в 2025 году</a>

<div class=\"map-card__metro\">
                    
                                                                                    <img src=\"/themes/motel/assets/img/metro.svg\" alt=\"metro sign\" class=\"map-card__metro-icon metro-icon metro-icon_red js-svg\">
\t\t\t\t\t<span class=\"map-card__metro-name\">Гражданский проспект</span>
</div>
 


<div class=\"hotel-card__address\">Даниила Хармса ул., 4</div>

<a href=\"tel:+78124687777\" onclick=\"yaCounter23472043.reachGoal('clickPhoneLink'); ga('send', 'pageview','/clickPhoneLink'); fbq('track', 'clickPhoneLink'); return true;\" class=\"hotel-card__phone\">+7-812-468-77-77</a>

<a href=\"https://yandex.ru/maps/org/aleks_otel_na_fontanke/182874485114/\">на Яндекс картах →</a><br>
<a href=\"https://goo.gl/maps/ER49o2614edp8ebEA\">на Google картах →</a>

</div> 
--------------/temp ohta card---------------------------->\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t</div>
\t\t
\t
\t\t</div>
    </div>
  </div>
</main>
<!-- /Main content -->


<!-- Footer -->
";
        // line 280
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 281
        echo "<!-- /Footer -->




  <script>
    // Data for the markers consisting of a name, title, a LatLng, zIndex  and state (optional)
    var gMapHotels = [
    ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 290
            echo "    ['";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "slug", [], "any", false, false, false, 290), "html", null, true);
            echo "', 'Отель ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 290), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "coordinates", [], "any", false, false, false, 290), "html", null, true);
            echo ", 1, ,";
            if (twig_get_attribute($this->env, $this->source, $context["hotel"], "low_price", [], "any", false, false, false, 290)) {
                echo "'pending'";
            }
            echo "],
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "\t<!--['frunzenskaya', 'Отель на Фрунзенской', 59.905765, 30.318091, 1, ,'pending'],-->
    ];
  </script>

<!-- google maps api -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAosLw6LPVOHPdiVUr8mClGPM6hKzTt1v4\"></script>

";
        // line 299
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("basic/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 300
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
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 300,  447 => 299,  438 => 292,  421 => 290,  417 => 289,  407 => 281,  403 => 280,  361 => 240,  355 => 239,  349 => 238,  345 => 237,  338 => 233,  333 => 231,  290 => 190,  284 => 189,  278 => 188,  274 => 187,  243 => 167,  164 => 90,  142 => 74,  138 => 73,  132 => 72,  93 => 38,  78 => 28,  73 => 26,  63 => 19,  59 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/layouts/contacts.htm", "");
    }
}
