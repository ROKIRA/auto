<?php

/* AutoMainBundle:Default:add_auto.html.twig */
class __TwigTemplate_46759d194408f13ab56a0188c18b37ca89f9a90b601fa8d0cbc138ffee11986c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "        <div class=\"content\">
            <h2 class=\"page_title add\">Добавление автомобиля</h2>
            ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 6
            echo "                <form action=\"";
            echo $this->env->getExtension('routing')->getPath("auto_new");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " class=\"add_form\">
                    <fieldset>
                        <legend>Заполните поля</legend>

                        ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 11
                echo "                            <div class=\"success\">
                                ";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
                        <div class=\"add_auto\">
                            <div class=\"field\">
                                ";
            // line 18
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'errors')) {
                // line 19
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'errors');
                echo "</div>
                                ";
            }
            // line 21
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'label');
            echo "
                                ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'widget');
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                \$('#add_auto_region').prepend('<option selected>Выберите регион</option>');
                            </script>

                            <div class=\"field\">
                                ";
            // line 29
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'errors')) {
                // line 30
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'errors');
                echo "</div>
                                ";
            }
            // line 32
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'label');
            echo "
                                ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_model"))));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                \$('#add_auto_mark').prepend('<option selected>Выберите марку</option>');
                            </script>

                            <div class=\"field\">
                                ";
            // line 40
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'errors')) {
                // line 41
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'errors');
                echo "</div>
                                ";
            }
            // line 43
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'label');
            echo "
                                ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_year"))));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                \$('#add_auto_model').empty().prepend('<option selected>Выберите модель</option>');
                            </script>

                            <div class=\"field\">
                                ";
            // line 51
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'errors')) {
                // line 52
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'errors');
                echo "</div>
                                ";
            }
            // line 54
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'label');
            echo "
                                ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget', array("attr" => array("placeholder" => "Год выпуска автомобиля")));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                \$('#add_auto_year').empty().prepend('<option selected>Укажите год выпуска</option>');
                            </script>

                            <div class=\"field\">
                                ";
            // line 62
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors')) {
                // line 63
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
                echo "</div>
                                ";
            }
            // line 65
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'label');
            echo "
                                ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'widget', array("attr" => array("placeholder" => "Тип кузова: ")));
            echo "
                            </div>

                            <div class=\"field\">
                                ";
            // line 70
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run"), 'errors')) {
                // line 71
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run"), 'errors');
                echo "</div>
                                ";
            }
            // line 73
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run"), 'label');
            echo "
                                ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run"), 'widget', array("attr" => array("placeholder" => "Пробег автомобиля")));
            echo "
                            </div>
                            <div class=\"field color\">
                                ";
            // line 77
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'errors')) {
                // line 78
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'errors');
                echo "</div>
                                ";
            }
            // line 80
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'label');
            echo "
                                ";
            // line 81
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'widget', array("attr" => array("placeholder" => "Цвет автомобиля")));
            echo "
                                <span class=\"color_box\"></span>
                            </div>
                            <div class=\"field\">
                                ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), 'label');
            echo "
                                ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), 'widget');
            echo "
                            </div>
                            
                            <div class=\"loaded_auto\">
                                <img src=\"/bundles/auto/userfiles/no_image.jpg\" alt=\"auto image\" />
                            </div>
                            
                            <div class=\"field\">
                                ";
            // line 94
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors')) {
                // line 95
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors');
                echo "</div>
                                ";
            }
            // line 97
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
            echo "
                                ";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
            echo "
                            </div>
                            <div class=\"field\">
                                ";
            // line 101
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'errors')) {
                // line 102
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'errors');
                echo "</div>
                                ";
            }
            // line 104
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'label');
            echo "
                                ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'widget', array("attr" => array("placeholder" => "Цена автомобиля")));
            echo "
                            </div>
                            <div class=\"field description_field\">
                                ";
            // line 108
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors')) {
                // line 109
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
                echo "</div>
                                ";
            }
            // line 111
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
            echo "
                                ";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("cols" => "30", "rows" => "5")));
            echo "
                            </div>
                            
                            ";
            // line 115
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_admin"), "method")) {
                // line 116
                echo "                                <div class=\"field\">
                                ";
                // line 117
                if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url"), 'errors')) {
                    // line 118
                    echo "                                    <div class=\"error\">";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url"), 'errors');
                    echo "</div>
                                ";
                }
                // line 120
                echo "                                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url"), 'label');
                echo "
                                ";
                // line 121
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url"), 'widget', array("attr" => array("placeholder" => "Ссылка на автомобиль")));
                echo "
                            </div>
                            
                             <div class=\"field\">
                                ";
                // line 125
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confiscat"), 'label');
                echo "
                                ";
                // line 126
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confiscat"), 'widget');
                echo "
                            </div>
                            
                             <div class=\"field\">
                                ";
                // line 130
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "xRank"), 'label');
                echo "
                                ";
                // line 131
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "xRank"), 'widget');
                echo "
                            </div>
                            
                            ";
            }
            // line 135
            echo "                            

                            ";
            // line 137
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
            echo "

                            <input type=\"submit\" value=\"Добавить\" />
                        </div><!-- .add_auto -->

                    </fieldset>

                </form>
            ";
        } else {
            // line 146
            echo "                <p class=\"notice\">Для добавления автомобиля необходимо сначала <strong>авторизоваться</strong></p>
                <p><a href=\"";
            // line 147
            echo $this->env->getExtension('routing')->getPath("reg");
            echo "\">Зарегестрироваться</a></p>
            ";
        }
        // line 149
        echo "
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:add_auto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 149,  357 => 147,  354 => 146,  342 => 137,  338 => 135,  331 => 131,  327 => 130,  320 => 126,  316 => 125,  309 => 121,  304 => 120,  298 => 118,  296 => 117,  293 => 116,  291 => 115,  285 => 112,  280 => 111,  274 => 109,  272 => 108,  266 => 105,  261 => 104,  255 => 102,  253 => 101,  247 => 98,  242 => 97,  236 => 95,  234 => 94,  223 => 86,  219 => 85,  212 => 81,  207 => 80,  201 => 78,  199 => 77,  193 => 74,  188 => 73,  182 => 71,  180 => 70,  173 => 66,  168 => 65,  162 => 63,  160 => 62,  150 => 55,  145 => 54,  139 => 52,  137 => 51,  127 => 44,  122 => 43,  116 => 41,  114 => 40,  104 => 33,  99 => 32,  93 => 30,  91 => 29,  81 => 22,  76 => 21,  70 => 19,  68 => 18,  63 => 15,  54 => 12,  51 => 11,  47 => 10,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
