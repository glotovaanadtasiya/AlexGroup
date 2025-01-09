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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/partials/forms/send_review.htm */
class __TwigTemplate_b639748f21f88e11694849300c787922a17fb7b9be5ed0f1433de61dee5dcfbc extends \Twig\Template
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
          
          <h2 class=\"h2\">Оставьте отзыв</h2>
          <form class=\"contact-form contact-form_review\" data-request=\"onSubmitReviewForm\"
                                            \t\t\t              data-request-validate
                                            \t\t\t              data-request-flash
                                            \t\t\t              data-request-success=\"\$('.contact-form_review input').val('');\">
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
              <input type=\"text\" name=\"review\" placeholder=\"Ваш отзыв\" class=\"contact-form__input input\">
            </div>
            <div class=\"contact-form__features\">
              <!-- Feature -->
              <div class=\"contact-form__feature-item\">
                <div class=\"contact-form__feature-left\">
                  <div class=\"contact-form__feature-name\">Обслуживание</div>
                </div>
                <div class=\"contact-form__feature-right\">
                  <label class=\"contact-form__feature-check\">
                    <input name=\"service\" type=\"checkbox\" class=\"contact-form__feature-input visually-hidden\" checked>
                    <span class=\"contact-form__feature-sign contact-form__feature-sign_plus\">+</span>
                    <span class=\"contact-form__feature-sign contact-form__feature-sign_minus\">−</span>
                  </label>
                </div>
              </div>              
              <!-- /Feature -->

              <!-- Feature -->
              <div class=\"contact-form__feature-item\">
                  <div class=\"contact-form__feature-left\">
                    <div class=\"contact-form__feature-name\">Номер</div>
                  </div>
                  <div class=\"contact-form__feature-right\">
                    <label class=\"contact-form__feature-check\">
                      <input name=\"room\" type=\"checkbox\" class=\"contact-form__feature-input visually-hidden\" checked>
                      <span class=\"contact-form__feature-sign contact-form__feature-sign_plus\">+</span>
                      <span class=\"contact-form__feature-sign contact-form__feature-sign_minus\">−</span>
                    </label>
                  </div>
                </div>              
                <!-- /Feature -->
              
              <!-- Feature -->
              <div class=\"contact-form__feature-item\">
                  <div class=\"contact-form__feature-left\">
                    <div class=\"contact-form__feature-name\">Еда</div>
                  </div>
                  <div class=\"contact-form__feature-right\">
                    <label class=\"contact-form__feature-check\">
                      <input name=\"food\" type=\"checkbox\" class=\"contact-form__feature-input visually-hidden\" checked>
                      <span class=\"contact-form__feature-sign contact-form__feature-sign_plus\">+</span>
                      <span class=\"contact-form__feature-sign contact-form__feature-sign_minus\">−</span>
                    </label>
                  </div>
                </div>              
                <!-- /Feature -->
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
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/forms/send_review.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/partials/forms/send_review.htm", "");
    }
}
