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

/* /home/m/motelspb/motelspb.com/public_html/themes/motel/pages/privacy-policy.htm */
class __TwigTemplate_372b825ddd2b6c21654f05bec84e1a375e1083430a762e76a742868267028882 extends \Twig\Template
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
        echo "<h1>Политика конфиденциальности</h1>

<p>Конфиденциальность информации пользователей приложения очень важна для нас. Эта страница описывает нашу политику в отношении личной информации. Используя приложение, Вы принимаете правила, описанные в настоящей политике конфиденциальности. Мы можем периодически обновлять информацию о политике конфиденциальности с учетом изменений требований в технологиях и законодательстве. Просим Вас возвращаться к этой странице время от времени, чтобы Вам стало известно о таких изменениях.</p>

<h2>Какая личная информация собирается, когда я посещаю сайт?</h2>

<p>Мы не собираем личную информацию о Вас, когда Вы просматриваете информацию в приложении и на сайте. Однако, если Вы хотите забронировать номер, Вам потребуется предоставить нам определенную информацию, которая может включать в себя следующее:</p>

<ul>
\t<li>Имя</li>
\t<li>телефон</li>
</ul>

<h2>Как компания использует мои личные данные?</h2>

<p>Мы используем вашу персональную информацию, чтобы идентифицировать вас как клиента, для оформления бронирования. Мы можем связаться с Вами с помощью любых средств связи, для которых вы дали нам контактную информацию, в том числе по электронной почте, факсу и телефону. Мы никогда не передаем личные данные третьим лицам или организациям.</p>

<h2>Связаться с нами</h2>

<p>Если у вас возникли другие вопросы, предложения, касательно конфиденциальности на сайте, пожалуйста, свяжитесь с нами по электронной почте, info@motelspb.com</p>";
    }

    public function getTemplateName()
    {
        return "/home/m/motelspb/motelspb.com/public_html/themes/motel/pages/privacy-policy.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/m/motelspb/motelspb.com/public_html/themes/motel/pages/privacy-policy.htm", "");
    }
}
