<?php

/* AutoMainBundle:Cabinet:zayavka.html.twig */
class __TwigTemplate_fdb5ae5999acbd2799112f7d781d82ac2293bf21b494ce6a0af43085e8a2ed8d extends Twig_Template
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
            <h2 class=\"page_title add\">Изменение заявки на автомобиль</h2>
            ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 11
            echo "                <form action=\"";
            echo $this->env->getExtension('routing')->getPath("auto_main_homepage");
            echo "zayavka-edit/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " class=\"add_form\" id=\"form_zayavka\">
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
                                var region_select = \$('#add_zayavka_auto_region');
                                var region = region_select.data('region');
                                if(region != 'Любой'){
                                    region_select.find('option:contains('+ region +')').attr('selected', 'selected');
                                }else{
                                    region_select.prepend('<option value=\"any\" selected>Любой</option>');
                                }
                            </script>

                            <div class=\"field\">
                                ";
            // line 34
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'errors')) {
                // line 35
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'errors');
                echo "</div>
                                ";
            }
            // line 37
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'label');
            echo "
                                ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mark"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_model"), "data-mark" => (isset($context["mark"]) ? $context["mark"] : $this->getContext($context, "mark")))));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                var mark_select = \$('#add_zayavka_auto_mark');
                                var mark = mark_select.data('mark');
                                    mark_select.find('option:contains('+ mark +')').attr('selected', 'selected');
                            </script>

                            <div class=\"field\">
                                ";
            // line 47
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'errors')) {
                // line 48
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'errors');
                echo "</div>
                                ";
            }
            // line 50
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'label');
            echo "
                                ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_year"), "data-model" => (isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")))));
            echo "
                            </div>

                            <div class=\"field\">
                                ";
            // line 55
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_from"), 'errors')) {
                // line 56
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_from"), 'errors');
                echo "</div>
                                ";
            }
            // line 58
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_from"), 'label');
            echo "
                                ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_from"), 'widget', array("attr" => array("placeholder" => "Год выпуска автомобиля", "data-year" => (isset($context["year_from"]) ? $context["year_from"] : $this->getContext($context, "year_from")))));
            echo "
                            </div>
                            <div class=\"field\">
                                ";
            // line 62
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_to"), 'errors')) {
                // line 63
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_to"), 'errors');
                echo "</div>
                                ";
            }
            // line 65
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_to"), 'label');
            echo "
                                ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year_to"), 'widget', array("attr" => array("placeholder" => "Год выпуска автомобиля", "data-year" => (isset($context["year_to"]) ? $context["year_to"] : $this->getContext($context, "year_to")))));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                var year_select =  \$('#add_zayavka_auto_year_from, #add_zayavka_auto_year_to');
                                var year = year_select.data('year');
                                if(year != ''){
                                    year_select.find('option:contains('+ year +')').attr('selected', 'selected');
                                }else{
                                    year_select.empty().prepend('<option value=\"0\" selected>Укажите год выпуска</option>');
                                }
                            </script>

                            <div class=\"field\">
                                ";
            // line 79
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors')) {
                // line 80
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
                echo "</div>
                                ";
            }
            // line 82
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'label');
            echo "
                                ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'widget', array("attr" => array("placeholder" => "Тип кузова: ")));
            echo "
                            </div>

                            <div class=\"field\">
                                ";
            // line 87
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run_from"), 'errors')) {
                // line 88
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run_from"), 'errors');
                echo "</div>
                                ";
            }
            // line 90
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run_from"), 'label');
            echo "
                                ";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run_from"), 'widget', array("attr" => array("placeholder" => "Пробег автомобиля")));
            echo "
                            </div>
                            <div class=\"field\">
                                ";
            // line 94
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run_to"), 'errors')) {
                // line 95
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run_to"), 'errors');
                echo "</div>
                                ";
            }
            // line 97
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run_to"), 'label');
            echo "
                                ";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "run_to"), 'widget', array("attr" => array("placeholder" => "Пробег автомобиля")));
            echo "
                            </div>

                            <div class=\"field color\">
                                ";
            // line 102
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'errors')) {
                // line 103
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'errors');
                echo "</div>
                                ";
            }
            // line 105
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'label');
            echo "
                                ";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color"), 'widget', array("attr" => array("placeholder" => "Цвет автомобиля")));
            echo "
                                <span class=\"color_box\"></span>
                            </div>

                            <div class=\"field\">
                                ";
            // line 111
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), 'label');
            echo "
                                ";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), 'widget');
            echo "
                            </div>

                            <div class=\"field\">
                                ";
            // line 116
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_from"), 'errors')) {
                // line 117
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_from"), 'errors');
                echo "</div>
                                ";
            }
            // line 119
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_from"), 'label');
            echo "
                                ";
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_from"), 'widget', array("attr" => array("placeholder" => "Цена автомобиля")));
            echo "
                            </div>
                            <div class=\"field\">
                                ";
            // line 123
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_to"), 'errors')) {
                // line 124
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_to"), 'errors');
                echo "</div>
                                ";
            }
            // line 126
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_to"), 'label');
            echo "
                                ";
            // line 127
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price_to"), 'widget', array("attr" => array("placeholder" => "Цена автомобиля")));
            echo "
                            </div>

                            <div class=\"field description_field\">
                                ";
            // line 131
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors')) {
                // line 132
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
                echo "</div>
                                ";
            }
            // line 134
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
            echo "
                                ";
            // line 135
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("cols" => "30", "rows" => "5")));
            echo "
                            </div>

                            ";
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
            echo "

                            <input type=\"submit\" value=\"Сохранить\" />
                        </div><!-- .add_auto -->

                    </fieldset>

                </form>
            ";
        } else {
            // line 147
            echo "                <p class=\"notice\">Для добавления заявки необходимо сначала <strong>авторизоваться</strong></p>
                <p><a href=\"";
            // line 148
            echo $this->env->getExtension('routing')->getPath("reg");
            echo "\">Зарегестрироваться</a></p>
            ";
        }
        // line 150
        echo "
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Cabinet:zayavka.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 150,  348 => 148,  345 => 147,  333 => 138,  327 => 135,  307 => 127,  302 => 126,  288 => 120,  275 => 116,  256 => 106,  251 => 105,  236 => 98,  225 => 95,  223 => 94,  197 => 83,  186 => 80,  184 => 79,  155 => 62,  129 => 51,  124 => 50,  118 => 48,  104 => 38,  127 => 47,  81 => 22,  215 => 79,  210 => 78,  202 => 75,  190 => 66,  185 => 65,  170 => 58,  165 => 57,  137 => 46,  97 => 30,  150 => 50,  77 => 21,  316 => 132,  311 => 135,  308 => 134,  296 => 124,  290 => 122,  279 => 119,  277 => 117,  270 => 114,  265 => 113,  259 => 111,  257 => 110,  245 => 103,  239 => 103,  237 => 102,  231 => 97,  212 => 90,  207 => 88,  192 => 82,  181 => 78,  172 => 73,  167 => 72,  161 => 70,  134 => 56,  100 => 30,  70 => 20,  23 => 1,  250 => 106,  232 => 78,  226 => 87,  211 => 87,  206 => 88,  198 => 73,  194 => 50,  191 => 49,  188 => 48,  114 => 44,  110 => 34,  76 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 134,  314 => 131,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 123,  285 => 121,  283 => 119,  278 => 86,  268 => 112,  264 => 111,  258 => 81,  252 => 80,  247 => 90,  241 => 77,  229 => 73,  220 => 94,  214 => 69,  177 => 62,  169 => 60,  140 => 55,  132 => 16,  128 => 15,  107 => 36,  61 => 30,  273 => 96,  269 => 94,  254 => 92,  243 => 102,  240 => 85,  238 => 85,  235 => 79,  230 => 82,  227 => 81,  224 => 95,  221 => 77,  219 => 76,  217 => 91,  208 => 68,  204 => 87,  179 => 63,  159 => 55,  143 => 56,  135 => 53,  119 => 39,  102 => 7,  71 => 19,  67 => 18,  63 => 16,  59 => 15,  38 => 8,  94 => 28,  89 => 31,  85 => 96,  75 => 21,  68 => 18,  56 => 14,  87 => 25,  21 => 2,  26 => 6,  93 => 35,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 10,  31 => 5,  28 => 5,  201 => 86,  196 => 90,  183 => 82,  171 => 61,  166 => 51,  163 => 65,  158 => 67,  156 => 66,  151 => 63,  142 => 40,  138 => 56,  136 => 55,  121 => 46,  117 => 41,  105 => 36,  91 => 34,  62 => 17,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 18,  47 => 10,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 63,  145 => 49,  139 => 47,  131 => 52,  123 => 45,  120 => 27,  115 => 43,  111 => 37,  108 => 25,  101 => 32,  98 => 31,  96 => 6,  83 => 24,  74 => 20,  66 => 17,  55 => 14,  52 => 13,  50 => 17,  43 => 8,  41 => 13,  35 => 5,  32 => 4,  29 => 3,  209 => 85,  203 => 78,  199 => 85,  193 => 73,  189 => 71,  187 => 80,  182 => 66,  176 => 59,  173 => 65,  168 => 66,  164 => 48,  162 => 57,  154 => 58,  149 => 59,  147 => 60,  144 => 58,  141 => 48,  133 => 32,  130 => 42,  125 => 41,  122 => 43,  116 => 47,  112 => 39,  109 => 38,  106 => 36,  103 => 32,  99 => 37,  95 => 33,  92 => 27,  86 => 28,  82 => 90,  80 => 23,  73 => 19,  64 => 18,  60 => 6,  57 => 25,  54 => 13,  51 => 12,  48 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 7,  33 => 10,  30 => 7,);
    }
}
