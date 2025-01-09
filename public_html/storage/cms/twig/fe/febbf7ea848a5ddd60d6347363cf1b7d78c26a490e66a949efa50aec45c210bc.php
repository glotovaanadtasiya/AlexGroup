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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/scripts.htm */
class __TwigTemplate_c5e2ce246bc2a4841a7690268ee97a15c11ddfbd6dc0ce311fccad4770ca469a extends \Twig\Template
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
        echo "<!-- minified libs file -->
  <script src=\"/themes/motel/assets/js/libs.min.js\"></script>
  <!-- scipts file -->
  <script src=\"/themes/motel/assets/js/common.js\"></script>
  ";
        // line 5
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 6
        echo "
  <?php if (!isset(\$_SERVER['HTTP_USER_AGENT']) || stripos(\$_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>
 <meta name=\"google-site-verification\" content=\"eIupZehJt_v6i1-Ze7VwR5x-DhtRdIP1Zz8jfpmnBfo\" />
  <script type=\"text/javascript\">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-177822-h9LpO';</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-72910469-20\"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-72910469-20');
</script>


<!--END Otclick-->\t


<!-- Google Code for motelspb.com -->
<!-- Google Code for Remarketing Tag -->
<script type=\"text/javascript\">
/* <![CDATA[ */
var google_conversion_id = 984861273;
var google_conversion_label = \"1UgSCK2Y4m0Q2ZTP1QM\";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<!--<script type=\"text/javascript\" src=\"//www.googleadservices.com/pagead/conversion.js\">
</script>-->
<noscript>
<div style=\"display:inline;\">
<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"//googleads.g.doubleclick.net/pagead/viewthroughconversion/984861273/?value=1.00&amp;currency_code=RUB&amp;label=1UgSCK2Y4m0Q2ZTP1QM&amp;guid=ON&amp;script=0\"/>
</div>
</noscript>
<?php endif; ?>


 <script type=\"text/javascript\" src=\"/themes/motel/assets/js/jquery.cookie.js\"></script>
\t<script>
\tif ( \$.cookie('dontShowBanner') != 1 ) \$('.fixed-banner').addClass('show-banner');
\telse \$('.fixed-banner_closed').addClass('show-banner');

\t
\tfunction closeBanner() {
\t\t\$('.fixed-banner').removeClass('show-banner');
\t\t\$('.fixed-banner_closed').addClass('show-banner');
\t\t\$.cookie('dontShowBanner', '1', { expires: 7, path: '/' });
\t};

\t\tfunction showBanner() {
\t\t\$('.fixed-banner').addClass('show-banner');
\t\t\$('.fixed-banner_closed').removeClass('show-banner');
\t\t\$.cookie('dontShowBanner', '1', { expires: 7, path: '/' });
\t};
\t
\tif (!(document.location.pathname.indexOf('prilozhenie')==-1)) closeBanner();
\t
\t</script>
\t
\t
\t
\t
    <script src=\"/themes/motel/assets/js/jquery.smartbanner.js\"></script>
    <script type=\"text/javascript\">
\t\$(function() {
\t\t\$.smartbanner({
\t\ttitle: 'Приложение MotelSPb', // What the title of the app should be in the banner (defaults to <title>)
\t\tauthor: '', // What the author of the app should be in the banner (defaults to <meta name=\"author\"> or hostname)
\t\tprice: 'бесплатно', // Price of the app
\t\tappStoreLanguage: 'ru', // Language code for App Store
\t\tinAppStore: 'в App Store', // Text of price for iOS
\t\tinGooglePlay: 'в Google Play', // Text of price for Android
\t\ticon: null, // The URL of the icon (defaults to <link>)
\t\ticonGloss: null, // Force gloss effect for iOS even for precomposed (true or false)
\t\tbutton: 'ПЕРЕЙТИ', // Text on the install button
\t\tlayer: false, // Display as overlay layer or slide down the page
\t\tdaysHidden: 0, // Duration to hide the banner after being closed (0 = always show banner)
\t\tdaysReminder: 0, // Duration to hide the banner after \"VIEW\" is clicked (0 = always show banner)
\t\t/*
\t\tscale: 'auto', // Scale based on viewport size (set to 1 to disable)
\t\tspeedIn: 300, // Show animation speed of the banner
\t\tspeedOut: 400, // Close animation speed of the banner
\t\t
\t\tforce: null // Choose 'ios' or 'android'. Don't do a browser check, just always show this banner
\t\t*/
\t\t})
\t})
  </script>
  
  
  <script src=\"/themes/motel/assets/js/onlinechat.js\"></script>
  

<script src=\"/themes/motel/assets/js/snowstorm-min.js\"></script>
<img src=\"/themes/motel/assets/img/ng3.png\" class=\"xmastree\">
<style>
.xmastree {display: none;}
@media (min-width: 1200px) {
\t.xmastree {display: block; width:200px; height: 200px; position: fixed; bottom: 0; left: 0; z-index: 999;}
}
</style>




<script src=\"/themes/motel/assets/js/readmore.js\"></script>
<script>
\$(document).ready(function() {
\t\$(\".read-more\").readMore({ previewHeight: 350 });
}); 
</script>
<link rel=\"stylesheet\" href=\"/themes/motel/assets/css/readmore.css\">

<!-- Top.Mail.Ru counter -->
<script type=\"text/javascript\">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: \"3588141\", type: \"pageView\", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement(\"script\"); ts.type = \"text/javascript\"; ts.async = true; ts.id = id;
  ts.src = \"https://top-fwz1.mail.ru/js/code.js\";
  var f = function () {var s = d.getElementsByTagName(\"script\")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == \"[object Opera]\") { d.addEventListener(\"DOMContentLoaded\", f, false); } else { f(); }
})(document, window, \"tmr-code\");
</script>
<noscript><div><img src=\"https://top-fwz1.mail.ru/counter?id=3588141;js=na\" style=\"position:absolute;left:-9999px;\" alt=\"Top.Mail.Ru\" /></div></noscript>
<!-- /Top.Mail.Ru counter -->

<!-- Top.Mail.Ru counter 
<script type=\"text/javascript\">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: \"3376790\", type: \"pageView\", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement(\"script\"); ts.type = \"text/javascript\"; ts.async = true; ts.id = id;
  ts.src = \"https://top-fwz1.mail.ru/js/code.js\";
  var f = function () {var s = d.getElementsByTagName(\"script\")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == \"[object Opera]\") { d.addEventListener(\"DOMContentLoaded\", f, false); } else { f(); }
})(document, window, \"tmr-code\");
</script>
<noscript><div><img src=\"https://top-fwz1.mail.ru/counter?id=3376790;js=na\" style=\"position:absolute;left:-9999px;\" alt=\"Top.Mail.Ru\" /></div></noscript>
<!-- /Top.Mail.Ru counter -->


<!-- Google Tag Manager (noscript) 123454321-->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-KSXLBKBP\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/scripts.htm";
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/basic/scripts.htm", "");
    }
}
