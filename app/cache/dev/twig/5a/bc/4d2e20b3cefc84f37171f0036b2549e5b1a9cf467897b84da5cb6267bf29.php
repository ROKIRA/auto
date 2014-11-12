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
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "year"), 'errors')) {
                // line 64
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'errors');
                echo "</div>
                                    ";
            }
            // line 66
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "year"), 'label');
            echo "
                                    ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "year"), 'widget', array("attr" => array("placeholder" => "Год выпуска автомобиля")));
            echo "
                                </div>
                                <script type=\"text/javascript\">
                                    \$('#add_zayavka_auto_year').empty().prepend('<option value=\"0\" selected>Укажите год выпуска</option>');
                                </script>

                                <div class=\"field\">
                                    ";
            // line 74
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "body"), 'errors')) {
                // line 75
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
                echo "</div>
                                    ";
            }
            // line 77
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "body"), 'label');
            echo "
                                    ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "body"), 'widget', array("attr" => array("placeholder" => "Тип кузова: ")));
            echo "
                                </div>

                                <div class=\"field\">
                                    ";
            // line 82
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "run"), 'errors')) {
                // line 83
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run"), 'errors');
                echo "</div>
                                    ";
            }
            // line 85
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "run"), 'label');
            echo "
                                    ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "run"), 'widget', array("attr" => array("placeholder" => "Пробег автомобиля")));
            echo "
                                </div>
                                <div class=\"field color\">
                                    ";
            // line 89
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "color"), 'errors')) {
                // line 90
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'errors');
                echo "</div>
                                    ";
            }
            // line 92
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "color"), 'label');
            echo "
                                    ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "color"), 'widget', array("attr" => array("placeholder" => "Цвет автомобиля", "class" => "add_zayavka_color_field")));
            echo "
                                    <span class=\"color_box\"></span>
                                </div>
                                <div class=\"field\">
                                    ";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "new"), 'label');
            echo "
                                    ";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "new"), 'widget');
            echo "
                                </div>
                                <div class=\"field\">
                                    ";
            // line 101
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price"), 'errors')) {
                // line 102
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price"), 'errors');
                echo "</div>
                                    ";
            }
            // line 104
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price"), 'label');
            echo "
                                    ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "price"), 'widget', array("attr" => array("placeholder" => "Цена автомобиля")));
            echo "
                                </div>
                                <div class=\"field description_field\">
                                    ";
            // line 108
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "description"), 'errors')) {
                // line 109
                echo "                                        <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "description"), 'errors');
                echo "</div>
                                    ";
            }
            // line 111
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "description"), 'label');
            echo "
                                    ";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "description"), 'widget', array("attr" => array("cols" => "30", "rows" => "5")));
            echo "
                                </div>

                                ";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_zayavka"]) ? $context["form_zayavka"] : $this->getContext($context, "form_zayavka")), "_token"), 'row');
            echo "

                                <input type=\"submit\" value=\"Добавить\" id=\"send_zayavka\"/>
                            </div><!-- .add_auto -->

                        </fieldset>

                    </form>
                ";
        } else {
            // line 124
            echo "                    <p class=\"notice\">Для добавления заявки необходимо авторизоваться!</p>
                ";
        }
        // line 126
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
        return array (  288 => 126,  284 => 124,  272 => 115,  266 => 112,  261 => 111,  255 => 109,  253 => 108,  247 => 105,  236 => 102,  234 => 101,  224 => 97,  217 => 93,  206 => 90,  204 => 89,  193 => 85,  187 => 83,  185 => 82,  178 => 78,  173 => 77,  167 => 75,  165 => 74,  155 => 67,  144 => 64,  142 => 63,  132 => 56,  127 => 55,  121 => 53,  119 => 52,  109 => 45,  104 => 44,  98 => 42,  81 => 33,  75 => 31,  59 => 24,  52 => 22,  43 => 19,  41 => 18,  24 => 4,  301 => 93,  296 => 90,  279 => 88,  275 => 87,  264 => 78,  228 => 98,  223 => 73,  205 => 64,  199 => 61,  195 => 60,  189 => 59,  175 => 57,  168 => 53,  162 => 49,  157 => 46,  140 => 44,  136 => 43,  125 => 34,  89 => 30,  84 => 29,  70 => 21,  60 => 17,  50 => 15,  36 => 13,  31 => 10,  29 => 9,  19 => 1,  245 => 84,  242 => 104,  239 => 82,  235 => 75,  232 => 79,  229 => 78,  225 => 76,  222 => 75,  219 => 72,  215 => 72,  212 => 92,  209 => 65,  198 => 86,  194 => 61,  190 => 60,  183 => 56,  179 => 55,  174 => 53,  170 => 54,  163 => 48,  159 => 47,  154 => 45,  150 => 66,  138 => 35,  134 => 34,  124 => 27,  120 => 26,  110 => 19,  106 => 18,  100 => 15,  96 => 41,  86 => 34,  83 => 8,  80 => 28,  73 => 30,  71 => 82,  68 => 27,  66 => 20,  63 => 77,  61 => 74,  58 => 73,  56 => 23,  53 => 69,  51 => 7,  47 => 5,  44 => 4,  40 => 89,  37 => 4,  34 => 3,);
    }
}
