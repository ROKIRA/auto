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
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_admin"), "method")) {
            // line 4
            echo "        <p>Добро пожаловать, <span>Admin ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method"), "html", null, true);
            echo "</span></p>
        <p><a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("cabinet");
            echo "\" id=\"goto_cabinet\">Кабинет</a></p>
        <p><a href=\"/logout\" id=\"logout\">Выйти</a></p>
    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 7
            echo "    
        <p>Добро пожаловать, <span>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method"), "html", null, true);
            echo "</span></p>
        <p><strong>Баланс: </strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_balance"), "method"), "html", null, true);
            echo "</p>
        <p><a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("cabinet");
            echo "\" id=\"goto_cabinet\">Кабинет</a></p>
        <p><a href=\"/logout\" id=\"logout\">Выйти</a></p>
    ";
        } else {
            // line 13
            echo "        <p id=\"auth\">
            <a href=\"#\" id=\"auth_enter\">Войти</a>
            или
            <a href=\"#\">Зарегестрироваться</a>
        </p>
        <section  id=\"auth_form\">
            <div class=\"auth_form_header\"><h3>Авторизация</h3><p id=\"auth_form_close\">X</p></div>
            
            <form action=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("auth");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), 'enctype');
            echo ">

                ";
            // line 23
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'errors')) {
                // line 24
                echo "                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'errors');
                echo "</div>
                ";
            }
            // line 26
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'label');
            echo "
                ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'widget');
            echo "

                ";
            // line 29
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'errors')) {
                // line 30
                echo "                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'errors');
                echo "</div>
                ";
            }
            // line 32
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'label');
            echo "
                ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'widget');
            echo "

                <input type=\"submit\" value=\"Войти\" />
            </form>
                
            <p><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("reg");
            echo "\">Зарегестрироваться</a></p>
        
        </section>

    ";
        }
        // line 43
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
        return array (  117 => 43,  109 => 38,  101 => 33,  90 => 30,  88 => 29,  83 => 27,  78 => 26,  72 => 24,  70 => 23,  53 => 13,  47 => 10,  43 => 9,  36 => 7,  30 => 5,  25 => 4,  23 => 3,  19 => 1,  250 => 91,  247 => 90,  243 => 86,  240 => 85,  235 => 79,  232 => 78,  226 => 81,  224 => 78,  220 => 76,  217 => 75,  211 => 87,  209 => 85,  206 => 84,  204 => 75,  198 => 73,  194 => 50,  191 => 49,  188 => 48,  176 => 59,  166 => 51,  164 => 48,  145 => 31,  142 => 30,  136 => 17,  132 => 16,  128 => 15,  123 => 14,  120 => 13,  114 => 10,  110 => 9,  105 => 8,  102 => 7,  96 => 32,  85 => 96,  82 => 90,  80 => 73,  76 => 71,  71 => 68,  69 => 67,  63 => 21,  61 => 30,  48 => 19,  46 => 13,  41 => 12,  39 => 8,  35 => 6,  29 => 2,);
    }
}
