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
        return array (  351 => 155,  339 => 146,  313 => 135,  300 => 131,  248 => 109,  216 => 96,  178 => 78,  148 => 50,  146 => 49,  126 => 41,  375 => 153,  364 => 149,  358 => 148,  349 => 146,  346 => 145,  340 => 144,  335 => 141,  332 => 140,  328 => 142,  325 => 137,  323 => 136,  317 => 133,  310 => 129,  306 => 128,  289 => 120,  282 => 124,  222 => 80,  174 => 60,  58 => 73,  301 => 93,  228 => 101,  205 => 64,  195 => 60,  175 => 57,  84 => 20,  53 => 12,  263 => 109,  357 => 147,  354 => 146,  342 => 137,  338 => 135,  331 => 131,  320 => 139,  304 => 120,  293 => 127,  291 => 115,  280 => 123,  274 => 109,  272 => 108,  266 => 109,  261 => 113,  255 => 104,  253 => 101,  242 => 83,  234 => 94,  180 => 69,  160 => 62,  34 => 7,  113 => 33,  90 => 30,  65 => 17,  353 => 150,  348 => 148,  345 => 147,  333 => 143,  327 => 130,  307 => 127,  302 => 132,  288 => 126,  275 => 114,  256 => 112,  251 => 105,  236 => 104,  225 => 76,  223 => 73,  197 => 78,  186 => 65,  184 => 74,  155 => 67,  129 => 46,  124 => 27,  118 => 21,  104 => 44,  127 => 55,  81 => 33,  215 => 72,  210 => 94,  202 => 75,  190 => 86,  185 => 65,  170 => 52,  165 => 74,  137 => 51,  97 => 28,  150 => 66,  77 => 24,  316 => 125,  311 => 135,  308 => 134,  296 => 122,  290 => 122,  279 => 88,  277 => 117,  270 => 114,  265 => 113,  259 => 105,  257 => 110,  245 => 84,  239 => 82,  237 => 94,  231 => 86,  212 => 71,  207 => 80,  192 => 77,  181 => 78,  172 => 73,  167 => 75,  161 => 70,  134 => 44,  100 => 15,  70 => 21,  23 => 3,  250 => 110,  232 => 79,  226 => 91,  211 => 77,  206 => 83,  198 => 62,  194 => 68,  191 => 73,  188 => 85,  114 => 36,  110 => 19,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 155,  374 => 116,  368 => 151,  365 => 111,  362 => 149,  360 => 109,  355 => 157,  341 => 105,  337 => 103,  322 => 140,  314 => 131,  312 => 98,  309 => 121,  305 => 95,  298 => 118,  294 => 123,  285 => 118,  283 => 119,  278 => 115,  268 => 112,  264 => 78,  258 => 107,  252 => 80,  247 => 98,  241 => 105,  229 => 78,  220 => 94,  214 => 69,  177 => 62,  169 => 65,  140 => 44,  132 => 56,  128 => 42,  107 => 26,  61 => 16,  273 => 119,  269 => 118,  254 => 92,  243 => 97,  240 => 85,  238 => 96,  235 => 80,  230 => 102,  227 => 91,  224 => 90,  221 => 97,  219 => 74,  217 => 79,  208 => 93,  204 => 80,  179 => 61,  159 => 53,  143 => 56,  135 => 53,  119 => 52,  102 => 24,  71 => 82,  67 => 18,  63 => 77,  59 => 24,  38 => 9,  94 => 28,  89 => 30,  85 => 28,  75 => 31,  68 => 27,  56 => 23,  87 => 22,  21 => 2,  26 => 4,  93 => 30,  88 => 26,  78 => 26,  46 => 10,  27 => 4,  44 => 9,  31 => 3,  28 => 2,  201 => 89,  196 => 88,  183 => 56,  171 => 66,  166 => 57,  163 => 48,  158 => 67,  156 => 66,  151 => 56,  142 => 63,  138 => 35,  136 => 48,  121 => 53,  117 => 43,  105 => 36,  91 => 29,  62 => 17,  49 => 12,  24 => 4,  25 => 4,  19 => 1,  79 => 19,  72 => 19,  69 => 18,  47 => 11,  40 => 89,  37 => 7,  22 => 2,  246 => 90,  157 => 46,  145 => 54,  139 => 45,  131 => 52,  123 => 30,  120 => 29,  115 => 43,  111 => 37,  108 => 34,  101 => 33,  98 => 42,  96 => 41,  83 => 8,  74 => 17,  66 => 16,  55 => 15,  52 => 22,  50 => 12,  43 => 19,  41 => 18,  35 => 5,  32 => 4,  29 => 3,  209 => 76,  203 => 78,  199 => 69,  193 => 74,  189 => 59,  187 => 72,  182 => 71,  176 => 59,  173 => 77,  168 => 58,  164 => 48,  162 => 61,  154 => 52,  149 => 59,  147 => 60,  144 => 64,  141 => 50,  133 => 33,  130 => 40,  125 => 34,  122 => 43,  116 => 41,  112 => 27,  109 => 45,  106 => 33,  103 => 24,  99 => 29,  95 => 18,  92 => 30,  86 => 34,  82 => 26,  80 => 7,  73 => 30,  64 => 17,  60 => 17,  57 => 10,  54 => 13,  51 => 7,  48 => 11,  45 => 11,  42 => 11,  39 => 8,  36 => 8,  33 => 7,  30 => 5,);
    }
}
