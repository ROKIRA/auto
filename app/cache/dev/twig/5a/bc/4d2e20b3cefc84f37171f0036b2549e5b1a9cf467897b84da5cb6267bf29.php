<?php

/* AutoMainBundle:Default:zayavka.html.twig */
class __TwigTemplate_5abc4d2e20b3cefc84f37171f0036b2549e5b1a9cf467897b84da5cb6267bf29 extends Twig_Template
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
        echo "<section class=\"zayavka gradient_blue\">
    <h2>Оставить заявку на авто</h2>
    <div class=\"for_img\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/images/"), "html", null, true);
        echo "porshe_zayavka.jpg\" alt=\"\"/>
    </div>
    <article>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pellentesque id quam vitae ullamcorper. Maecenas a facilisis nisl. Sed nec velit a purus rutrum pulvinar. Integer tristique magna venenatis nisl commodo, quis dignissim diam faucibus. Proin a risus et justo pellentesque pulvinar. Etiam ut vestibulum purus, vitae volutpat velit. Phasellus sagittis elit a sollicitudin sodales. Vivamus tempor ornare aliquet. Aenean in posuere nisl. Aliquam orci nisi, molestie ut neque vel, dignissim convallis purus. Donec metus enim, tempus et tincidunt non, faucibus sed urna. Praesent sit amet sapien et lorem gravida commodo ut at velit.</article>
    <button id=\"submit_zayavka\">Оставить заявку</button>
</section>
<br class=\"clear\"/>

    <section id=\"zayavka_form_layout\">
        <div class=\"zayavka_form\" id=\"zayavka_form\">
            <div class=\"zayavka_form_header\">
                <h2 class=\"page_title_popup\">Оставление заявки на авто</h2>
                <p class=\"close_zayavka_form\">Закрыть</p>
            </div>
            <div id=\"zayavka_form_content\">
                ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 19
            echo "                    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("zayavka_new");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), 'enctype');
            echo " class=\"add_form\" id=\"form_zayavka\">
                        <fieldset>
                            <legend>Заполните поля</legend>
                            ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 23
                echo "                                <div class=\"success\">
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
                            <div class=\"add_auto\">
                                <div class=\"field\">
                                    ";
            // line 30
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "region"), 'errors')) {
                // line 31
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "region"), 'errors');
                echo "</div>
                                    ";
            }
            // line 33
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "region"), 'label');
            echo "
                                    ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "region"), 'widget');
            echo "
                                </div>
                                <script type=\"text/javascript\">
                                    \$('#add_zayavka_auto_region').prepend('<option value=\"any\" selected>Любой</option>');
                                </script>

                                <div class=\"field\">
                                    ";
            // line 41
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "mark"), 'errors')) {
                // line 42
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "mark"), 'errors');
                echo "</div>
                                    ";
            }
            // line 44
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "mark"), 'label');
            echo "
                                    ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "mark"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_model"))));
            echo "
                                </div>
                                <script type=\"text/javascript\">
                                    \$('#add_zayavka_auto_mark').prepend('<option value=\"0\" selected>Выберите марку</option>');
                                </script>

                                <div class=\"field\">
                                    ";
            // line 52
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "model"), 'errors')) {
                // line 53
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "model"), 'errors');
                echo "</div>
                                    ";
            }
            // line 55
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "model"), 'label');
            echo "
                                    ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "model"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_year"))));
            echo "
                                </div>
                                <script type=\"text/javascript\">
                                    \$('#add_zayavka_auto_model').empty().prepend('<option value=\"0\" selected>Выберите модель</option>');
                                </script>

                                <div class=\"field\">
                                    ";
            // line 63
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "year_from"), 'errors')) {
                // line 64
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_from"), 'errors');
                echo "</div>
                                    ";
            }
            // line 66
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "year_from"), 'label');
            echo "
                                    ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "year_from"), 'widget', array("attr" => array("placeholder" => "Год выпуска автомобиля")));
            echo "
                                </div>
                                <script type=\"text/javascript\">
                                    \$('#add_zayavka_auto_year_from').empty().prepend('<option value=\"0\" selected>Укажите год выпуска</option>');
                                </script>

                                <div class=\"field\">
                                    ";
            // line 74
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "year_to"), 'errors')) {
                // line 75
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_to"), 'errors');
                echo "</div>
                                    ";
            }
            // line 77
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "year_to"), 'label');
            echo "
                                    ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "year_to"), 'widget', array("attr" => array("placeholder" => "Год выпуска автомобиля")));
            echo "
                                </div>
                                <script type=\"text/javascript\">
                                    \$('#add_zayavka_auto_year_to').empty().prepend('<option value=\"0\" selected>Укажите год выпуска</option>');
                                </script>

                                <div class=\"field\">
                                    ";
            // line 85
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "body"), 'errors')) {
                // line 86
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
                echo "</div>
                                    ";
            }
            // line 88
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "body"), 'label');
            echo "
                                    ";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "body"), 'widget', array("attr" => array("placeholder" => "Тип кузова: ")));
            echo "
                                </div>

                                <div class=\"field\">
                                    ";
            // line 93
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "run_from"), 'errors')) {
                // line 94
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run_from"), 'errors');
                echo "</div>
                                    ";
            }
            // line 96
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "run_from"), 'label');
            echo "
                                    ";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "run_from"), 'widget', array("attr" => array("placeholder" => "Пробег автомобиля")));
            echo "
                                </div>
                                
                                <div class=\"field\">
                                    ";
            // line 101
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "run_to"), 'errors')) {
                // line 102
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run_to"), 'errors');
                echo "</div>
                                    ";
            }
            // line 104
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "run_to"), 'label');
            echo "
                                    ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "run_to"), 'widget', array("attr" => array("placeholder" => "Пробег автомобиля")));
            echo "
                                </div>
                                
                                <div class=\"field color\">
                                    ";
            // line 109
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "color"), 'errors')) {
                // line 110
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'errors');
                echo "</div>
                                    ";
            }
            // line 112
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "color"), 'label');
            echo "
                                    ";
            // line 113
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "color"), 'widget', array("attr" => array("placeholder" => "Цвет автомобиля", "class" => "add_zayavka_color_field")));
            echo "
                                    <span class=\"color_box\"></span>
                                </div>
                                    
                                <div class=\"field\">
                                    ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "new"), 'label');
            echo "
                                    ";
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "new"), 'widget');
            echo "
                                </div>
                                
                                <div class=\"field\">
                                    ";
            // line 123
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price_from"), 'errors')) {
                // line 124
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price_from"), 'errors');
                echo "</div>
                                    ";
            }
            // line 126
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price_from"), 'label');
            echo "
                                    ";
            // line 127
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price_from"), 'widget', array("attr" => array("placeholder" => "Цена автомобиля")));
            echo "
                                </div>
                                
                                <div class=\"field\">
                                    ";
            // line 131
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price_to"), 'errors')) {
                // line 132
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price_to"), 'errors');
                echo "</div>
                                    ";
            }
            // line 134
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price_to"), 'label');
            echo "
                                    ";
            // line 135
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price_to"), 'widget', array("attr" => array("placeholder" => "Цена автомобиля")));
            echo "
                                </div>
                                
                                <div class=\"field description_field\">
                                    ";
            // line 139
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "description"), 'errors')) {
                // line 140
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "description"), 'errors');
                echo "</div>
                                    ";
            }
            // line 142
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "description"), 'label');
            echo "
                                    ";
            // line 143
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "description"), 'widget', array("attr" => array("cols" => "30", "rows" => "5")));
            echo "
                                </div>

                                ";
            // line 146
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "_token"), 'row');
            echo "

                                <input type=\"submit\" value=\"Добавить\" id=\"send_zayavka\"/>
                            </div><!-- .add_auto -->

                        </fieldset>

                    </form>
                ";
        } else {
            // line 155
            echo "                    <p class=\"notice\">Для добавления заявки необходимо авторизоваться!</p>
                ";
        }
        // line 157
        echo "            </div>

        </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:zayavka.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 157,  351 => 155,  339 => 146,  333 => 143,  328 => 142,  322 => 140,  320 => 139,  313 => 135,  308 => 134,  302 => 132,  300 => 131,  293 => 127,  288 => 126,  282 => 124,  280 => 123,  273 => 119,  269 => 118,  261 => 113,  256 => 112,  250 => 110,  248 => 109,  241 => 105,  236 => 104,  230 => 102,  228 => 101,  221 => 97,  216 => 96,  210 => 94,  208 => 93,  201 => 89,  196 => 88,  190 => 86,  188 => 85,  178 => 78,  173 => 77,  167 => 75,  165 => 74,  155 => 67,  150 => 66,  144 => 64,  142 => 63,  132 => 56,  127 => 55,  121 => 53,  119 => 52,  109 => 45,  104 => 44,  98 => 42,  96 => 41,  86 => 34,  81 => 33,  75 => 31,  73 => 30,  68 => 27,  59 => 24,  56 => 23,  52 => 22,  43 => 19,  41 => 18,  24 => 4,  19 => 1,);
    }
}
