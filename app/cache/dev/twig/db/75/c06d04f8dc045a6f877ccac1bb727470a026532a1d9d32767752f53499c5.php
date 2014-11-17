<?php

/* AutoMainBundle:Cabinet:auto.html.twig */
class __TwigTemplate_db75c06d04f8dc045a6f877ccac1bb727470a026532a1d9d32767752f53499c5 extends Twig_Template
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
            <h2 class=\"page_title add\">Изменение объявления</h2>
            ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 11
            echo "                <form action=\"";
            echo $this->env->getExtension('routing')->getPath("auto_main_homepage");
            echo "auto-edit/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " class=\"add_form\">
                    <fieldset>
                        <legend>Измените необходимые поля</legend>

                        <div class=\"add_auto\">
                            <div class=\"field\">
                                ";
            // line 17
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'errors')) {
                // line 18
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'errors');
                echo "</div>
                                ";
            }
            // line 20
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'label');
            echo "
                                ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'widget', array("attr" => array("data-region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")))));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                var region_select = \$('#add_auto_region');
                                var region = region_select.data('region');
                                region_select.find('option:contains('+ region +')').attr('selected', 'selected');
                            </script>

                            <div class=\"field\">
                                ";
            // line 30
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'errors')) {
                // line 31
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'errors');
                echo "</div>
                                ";
            }
            // line 33
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'label');
            echo "
                                ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_model"), "data-mark" => (isset($context["mark"]) ? $context["mark"] : $this->getContext($context, "mark")))));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                var mark_select = \$('#add_auto_mark');
                                var mark = mark_select.data('mark');
                                mark_select.find('option:contains('+ mark +')').attr('selected', 'selected');
                            </script>

                            <div class=\"field\">
                                ";
            // line 43
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'errors')) {
                // line 44
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'errors');
                echo "</div>
                                ";
            }
            // line 46
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'label');
            echo "
                                ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_year"), "data-model" => (isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")))));
            echo "
                            </div>
";
            // line 54
            echo "
                            <div class=\"field\">
                                ";
            // line 56
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'errors')) {
                // line 57
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'errors');
                echo "</div>
                                ";
            }
            // line 59
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'label');
            echo "
                                ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget', array("attr" => array("placeholder" => "Год выпуска автомобиля", "data-year" => (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")))));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                var year_select =  \$('#add_auto_year');
                                var year = year_select.data('year');
                                year_select.find('option:contains('+ year +')').attr('selected', 'selected');
                            </script>

                            <div class=\"field\">
                                ";
            // line 69
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors')) {
                // line 70
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
                echo "</div>
                                ";
            }
            // line 72
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'label');
            echo "
                                ";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'widget', array("attr" => array("placeholder" => "Тип кузова: ")));
            echo "
                            </div>

                            <div class=\"field\">
                                ";
            // line 77
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run"), 'errors')) {
                // line 78
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run"), 'errors');
                echo "</div>
                                ";
            }
            // line 80
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run"), 'label');
            echo "
                                ";
            // line 81
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run"), 'widget', array("attr" => array("placeholder" => "Пробег автомобиля")));
            echo "
                            </div>

                            <div class=\"field color\">
                                ";
            // line 85
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'errors')) {
                // line 86
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'errors');
                echo "</div>
                                ";
            }
            // line 88
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'label');
            echo "
                                ";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'widget', array("attr" => array("placeholder" => "Цвет автомобиля")));
            echo "
                                <span class=\"color_box\"></span>
                            </div>

                            <div class=\"field\">
                                ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), 'label');
            echo "
                                ";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), 'widget');
            echo "
                            </div>

                            <div class=\"loaded_img\">
                                <img src=\"/bundles/auto/userfiles/";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
            echo "\" alt=\"Автомобиль\"/>
                            </div>
                            <div class=\"field\">
                                ";
            // line 102
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors')) {
                // line 103
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors');
                echo "</div>
                                ";
            }
            // line 105
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
            echo "
                                ";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
            echo "
                            </div>

                            <div class=\"field\">
                                ";
            // line 110
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'errors')) {
                // line 111
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'errors');
                echo "</div>
                                ";
            }
            // line 113
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'label');
            echo "
                                ";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'widget', array("attr" => array("placeholder" => "Цена автомобиля")));
            echo "
                            </div>

                            <div class=\"field description_field\">
                                ";
            // line 118
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors')) {
                // line 119
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
                echo "</div>
                                ";
            }
            // line 121
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
            echo "
                                ";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("cols" => "30", "rows" => "5")));
            echo "
                            </div>

                            ";
            // line 125
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
            echo "

                            <input type=\"submit\" value=\"Сохранить\" />
                        </div><!-- .add_auto -->

                    </fieldset>

                </form>
            ";
        } else {
            // line 134
            echo "                <p class=\"notice\">Для добавления автомобиля необходимо сначала <strong>авторизоваться</strong></p>
                <p><a href=\"";
            // line 135
            echo $this->env->getExtension('routing')->getPath("reg");
            echo "\">Зарегестрироваться</a></p>
            ";
        }
        // line 137
        echo "
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Cabinet:auto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 137,  311 => 135,  308 => 134,  296 => 125,  290 => 122,  285 => 121,  279 => 119,  277 => 118,  270 => 114,  265 => 113,  259 => 111,  257 => 110,  250 => 106,  245 => 105,  239 => 103,  237 => 102,  231 => 99,  224 => 95,  220 => 94,  212 => 89,  207 => 88,  201 => 86,  199 => 85,  192 => 81,  187 => 80,  181 => 78,  179 => 77,  172 => 73,  167 => 72,  161 => 70,  159 => 69,  147 => 60,  142 => 59,  136 => 57,  134 => 56,  130 => 54,  125 => 47,  120 => 46,  114 => 44,  112 => 43,  100 => 34,  95 => 33,  89 => 31,  87 => 30,  75 => 21,  70 => 20,  64 => 18,  62 => 17,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
