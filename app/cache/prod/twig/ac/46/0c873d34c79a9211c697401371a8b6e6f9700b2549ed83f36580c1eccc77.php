<?php

/* AutoMainBundle:Default:auth.html.twig */
class __TwigTemplate_ac460c873d34c79a9211c697401371a8b6e6f9700b2549ed83f36580c1eccc77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<section class=\"auth_form auth\">
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_name"), "method")) {
            // line 4
            echo "        <p>Добро пожаловать, <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_name"), "method"), "html", null, true);
            echo "</span></p>
        <p><a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("cabinet");
            echo "\" id=\"goto_cabinet\">Кабинет</a></p>
        <p><a href=\"/logout\" id=\"logout\">Выйти</a></p>
    ";
        } else {
            // line 8
            echo "        <p id=\"auth\">
            <a href=\"#\" id=\"auth_enter\">Войти</a>
            или
            <a href=\"#\">Зарегестрироваться</a>
        </p>
        <section  id=\"auth_form\">
            <div class=\"auth_form_header\"><h3>Авторизация</h3><p id=\"auth_form_close\">X</p></div>
            
            <form action=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("auth");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["auth_form"]) ? $context["auth_form"] : null), 'enctype');
            echo ">

                ";
            // line 18
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : null), "email"), 'errors')) {
                // line 19
                echo "                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : null), "email"), 'errors');
                echo "</div>
                ";
            }
            // line 21
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : null), "email"), 'label');
            echo "
                ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : null), "email"), 'widget');
            echo "

                ";
            // line 24
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : null), "password"), 'errors')) {
                // line 25
                echo "                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : null), "password"), 'errors');
                echo "</div>
                ";
            }
            // line 27
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : null), "password"), 'label');
            echo "
                ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : null), "password"), 'widget');
            echo "

                <input type=\"submit\" value=\"Войти\" />
            </form>
                
            <p><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("reg");
            echo "\">Зарегестрироваться</a></p>
        
        </section>

    ";
        }
        // line 38
        echo "
</section>
<br class=\"clear\"/>

";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  79 => 27,  73 => 25,  66 => 22,  55 => 19,  53 => 18,  36 => 8,  30 => 5,  25 => 4,  23 => 3,  19 => 1,  243 => 91,  240 => 90,  236 => 86,  233 => 85,  228 => 79,  225 => 78,  219 => 81,  217 => 78,  213 => 76,  210 => 75,  204 => 87,  202 => 85,  199 => 84,  197 => 75,  191 => 73,  187 => 50,  184 => 49,  181 => 48,  166 => 51,  164 => 48,  145 => 31,  142 => 30,  136 => 17,  132 => 16,  128 => 15,  123 => 14,  120 => 13,  114 => 10,  110 => 9,  105 => 8,  102 => 7,  96 => 6,  85 => 96,  82 => 90,  80 => 73,  76 => 71,  71 => 24,  69 => 67,  63 => 63,  48 => 19,  46 => 16,  41 => 12,  39 => 7,  103 => 26,  100 => 38,  97 => 24,  92 => 33,  90 => 24,  86 => 22,  81 => 19,  74 => 15,  70 => 14,  65 => 12,  61 => 21,  57 => 10,  50 => 9,  37 => 6,  35 => 6,  32 => 4,  29 => 2,);
    }
}
