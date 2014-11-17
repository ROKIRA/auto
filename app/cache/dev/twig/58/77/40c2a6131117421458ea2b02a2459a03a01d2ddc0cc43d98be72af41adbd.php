<?php

/* AutoMainBundle:Cabinet:profile.html.twig */
class __TwigTemplate_587740c2a6131117421458ea2b02a2459a03a01d2ddc0cc43d98be72af41adbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'leftbar' => array($this, 'block_leftbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_leftbar($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->env->loadTemplate("AutoMainBundle:Cabinet:cabmenu.html.twig")->display($context);
        // line 5
        echo "    ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "        <div class=\"content\">

            <h2 class=\"page_title\">Редактирование профиля</h2>

            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "                <div class=\"success\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
            <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("change_profile");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"add_form\">
                <fieldset>
                    <legend>Измените необходимые поля</legend>

                    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "                        <div class=\"error\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
                    <div class=\"reg\">
                        <div class=\"field\">
                            ";
        // line 30
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            // line 31
            echo "                                <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
            echo "</div>
                            ";
        }
        // line 33
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("placeholder" => "Введите е-mail")));
        echo "
                        </div>

                        <div class=\"field\">
                            ";
        // line 38
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'errors')) {
            // line 39
            echo "                                <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password1"), 'errors');
            echo "</div>
                            ";
        }
        // line 41
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo "
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget', array("attr" => array("placeholder" => "Введите пароль")));
        echo "
                        </div>

                        <div class=\"field\">
                            ";
        // line 46
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors')) {
            // line 47
            echo "                                <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
            echo "</div>
                            ";
        }
        // line 49
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("placeholder" => "Введите имя")));
        echo "
                        </div>

                        <div class=\"field\">
                            ";
        // line 54
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors')) {
            // line 55
            echo "                                <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors');
            echo "</div>
                            ";
        }
        // line 57
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label');
        echo "
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget', array("attr" => array("placeholder" => "Введите номер телефона")));
        echo "
                        </div>

                        <div class=\"field\">
                            ";
        // line 62
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'errors')) {
            // line 63
            echo "                                <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'errors');
            echo "</div>
                            ";
        }
        // line 65
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'label');
        echo "
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_city"), "data-region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")))));
        echo "
                        </div>
                        <script type=\"text/javascript\">
                            var region_select = \$('#user_name_region');
                            var region = region_select.data('region');
                            region_select.find('option:contains('+ region +')').attr('selected', 'selected');
                        </script>

                        <div class=\"field\">
                            ";
        // line 75
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors')) {
            // line 76
            echo "                                <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
            echo "</div>
                            ";
        }
        // line 78
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label');
        echo "
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget', array("attr" => array("data-city" => (isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")))));
        echo "
                        </div>
                        <script type=\"text/javascript\">
                            var city_select = \$('#user_name_city');
                            var city = city_select.data('city');
                            city_select.find('option:contains('+ city +')').attr('selected', 'selected');
                        </script>

                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "

                        <input type=\"submit\" value=\"Сохранить\" />
                    </div><!-- .add_auto -->

                </fieldset>

            </form>

            <script type=\"text/javascript\"> if(\$('.success').length > 0){ \$('.add_form').hide(); }</script>

        </div>

    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Cabinet:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 87,  215 => 79,  210 => 78,  204 => 76,  202 => 75,  190 => 66,  185 => 65,  179 => 63,  177 => 62,  170 => 58,  165 => 57,  159 => 55,  157 => 54,  150 => 50,  145 => 49,  139 => 47,  137 => 46,  130 => 42,  125 => 41,  119 => 39,  117 => 38,  110 => 34,  105 => 33,  99 => 31,  97 => 30,  92 => 27,  83 => 24,  80 => 23,  76 => 22,  67 => 18,  64 => 17,  55 => 14,  52 => 13,  48 => 12,  42 => 8,  39 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
