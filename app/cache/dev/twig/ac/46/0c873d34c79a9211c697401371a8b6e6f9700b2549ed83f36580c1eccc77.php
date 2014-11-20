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
        <p><a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("cabinet");
            echo "\" id=\"goto_cabinet\">Кабинет</a></p>
        <p><a href=\"/logout\" id=\"logout\">Выйти</a></p>
    ";
        } else {
            // line 12
            echo "        <p id=\"auth\">
            <a href=\"#\" id=\"auth_enter\">Войти</a>
            или
            <a href=\"#\">Зарегестрироваться</a>
        </p>
        <section  id=\"auth_form\">
            <div class=\"auth_form_header\"><h3>Авторизация</h3><p id=\"auth_form_close\">X</p></div>
            
            <form action=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("auth");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), 'enctype');
            echo ">

                ";
            // line 22
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'errors')) {
                // line 23
                echo "                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'errors');
                echo "</div>
                ";
            }
            // line 25
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'label');
            echo "
                ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "email"), 'widget');
            echo "

                ";
            // line 28
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'errors')) {
                // line 29
                echo "                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'errors');
                echo "</div>
                ";
            }
            // line 31
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'label');
            echo "
                ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["auth_form"]) ? $context["auth_form"] : $this->getContext($context, "auth_form")), "password"), 'widget');
            echo "

                <input type=\"submit\" value=\"Войти\" />
            </form>
                
            <p><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("reg");
            echo "\">Зарегестрироваться</a></p>
        
        </section>

    ";
        }
        // line 42
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
        return array (  113 => 42,  105 => 37,  97 => 32,  92 => 31,  86 => 29,  84 => 28,  79 => 26,  74 => 25,  68 => 23,  66 => 22,  59 => 20,  49 => 12,  43 => 9,  39 => 8,  36 => 7,  30 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
