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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/forms/sendback.htm */
class __TwigTemplate_46de4d346db7345e0471f11c36da171bcc965aeadf122f5ff7bd7cda458da3ef extends \Twig\Template
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
        echo "<div class=\"s-contact-form__container container\">
          
          <!-- Moon -->
          <div class=\"s-contact-form__moon\">
            <div class=\"moon js-moon\">
              <div class=\"moon__inner moon__inner_bottom-right\">
                <img src=\"/themes/motel/assets/img/moon.svg\" alt=\"\" class=\"moon__image\">
              </div>
            </div>
          </div>
          <!-- /Moon -->
          
          <h2 class=\"h2\">Напишите нам</h2>
          <form class=\"contact-form\" data-request=\"onSubmitContactForm\"
                        \t\t\t              data-request-validate
                        \t\t\t              data-request-flash
                        \t\t\t              data-request-success=\"\$('.contact-form input').val('');\">
            <div class=\"contact-form__field form-field\">
              <input type=\"text\" name=\"name\" placeholder=\"Имя\" class=\"contact-form__input input\">
            </div>
            <div class=\"contact-form__field form-field\">
              <input type=\"email\" name=\"email\" placeholder=\"E-mail\" class=\"contact-form__input input\">
            </div>
            <div class=\"contact-form__field form-field\">
              <input type=\"tel\" name=\"phone\" placeholder=\"+7\" class=\"contact-form__input input js-phone-mask\" required>
            </div>
            <div class=\"contact-form__field form-field\">
              <input type=\"text\" name=\"question\" placeholder=\"Ваш вопрос\" class=\"contact-form__input input\">
            </div>
            <div class=\"contact-form__check-wrap\">
              <label class=\"checkbox\">
                <input type=\"checkbox\" class=\"checkbox__input visually-hidden\" required checked>
                <span class=\"checkbox__content\">
                  Нажимая кнопку «Отправить» Вы даете согласие на обработку своих персональных данных и соглашаетесь 
                  с <a href=\"/privacy-policy/\" class=\"checkbox__link\" target=\"_blank\">политикой конфиденциальности</a>
                </span>
              </label>
            </div>
            <div class=\"contact-form__send-wrap\">
              <button class=\"contact-form__send-btn button button_ghost\">Отправить</button>
            </div>
          </form>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/forms/sendback.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/forms/sendback.htm", "");
    }
}
