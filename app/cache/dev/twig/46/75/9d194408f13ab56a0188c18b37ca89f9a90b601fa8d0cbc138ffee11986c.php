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
        return array (  357 => 147,  354 => 146,  342 => 137,  338 => 135,  331 => 131,  320 => 126,  304 => 120,  293 => 116,  291 => 115,  280 => 111,  274 => 109,  272 => 108,  266 => 105,  261 => 104,  255 => 102,  253 => 101,  242 => 97,  234 => 94,  180 => 70,  160 => 62,  34 => 7,  113 => 33,  90 => 24,  65 => 12,  353 => 150,  348 => 148,  345 => 147,  333 => 138,  327 => 130,  307 => 127,  302 => 126,  288 => 120,  275 => 116,  256 => 106,  251 => 105,  236 => 95,  225 => 95,  223 => 86,  197 => 83,  186 => 80,  184 => 79,  155 => 62,  129 => 51,  124 => 50,  118 => 48,  104 => 33,  127 => 44,  81 => 22,  215 => 79,  210 => 78,  202 => 75,  190 => 66,  185 => 65,  170 => 58,  165 => 57,  137 => 51,  97 => 28,  150 => 55,  77 => 24,  316 => 125,  311 => 135,  308 => 134,  296 => 117,  290 => 122,  279 => 119,  277 => 117,  270 => 114,  265 => 113,  259 => 111,  257 => 110,  245 => 103,  239 => 103,  237 => 102,  231 => 97,  212 => 81,  207 => 80,  192 => 82,  181 => 78,  172 => 73,  167 => 72,  161 => 70,  134 => 42,  100 => 30,  70 => 19,  23 => 1,  250 => 106,  232 => 78,  226 => 87,  211 => 87,  206 => 88,  198 => 73,  194 => 50,  191 => 49,  188 => 73,  114 => 40,  110 => 34,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 149,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 134,  314 => 131,  312 => 98,  309 => 121,  305 => 95,  298 => 118,  294 => 123,  285 => 112,  283 => 119,  278 => 86,  268 => 112,  264 => 111,  258 => 81,  252 => 80,  247 => 98,  241 => 77,  229 => 73,  220 => 94,  214 => 69,  177 => 62,  169 => 60,  140 => 55,  132 => 16,  128 => 15,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 102,  240 => 85,  238 => 85,  235 => 79,  230 => 82,  227 => 81,  224 => 95,  221 => 77,  219 => 85,  217 => 91,  208 => 68,  204 => 87,  179 => 63,  159 => 55,  143 => 56,  135 => 53,  119 => 35,  102 => 31,  71 => 23,  67 => 18,  63 => 15,  59 => 15,  38 => 8,  94 => 28,  89 => 23,  85 => 28,  75 => 21,  68 => 18,  56 => 14,  87 => 22,  21 => 2,  26 => 5,  93 => 30,  88 => 6,  78 => 19,  46 => 10,  27 => 4,  44 => 11,  31 => 3,  28 => 2,  201 => 78,  196 => 90,  183 => 82,  171 => 61,  166 => 51,  163 => 65,  158 => 67,  156 => 66,  151 => 63,  142 => 45,  138 => 56,  136 => 55,  121 => 46,  117 => 41,  105 => 36,  91 => 29,  62 => 17,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 18,  47 => 10,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 63,  145 => 54,  139 => 52,  131 => 52,  123 => 45,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 27,  98 => 31,  96 => 6,  83 => 24,  74 => 17,  66 => 17,  55 => 14,  52 => 13,  50 => 9,  43 => 8,  41 => 13,  35 => 5,  32 => 4,  29 => 3,  209 => 85,  203 => 78,  199 => 77,  193 => 74,  189 => 71,  187 => 80,  182 => 71,  176 => 59,  173 => 66,  168 => 65,  164 => 48,  162 => 63,  154 => 58,  149 => 59,  147 => 60,  144 => 58,  141 => 48,  133 => 32,  130 => 40,  125 => 34,  122 => 43,  116 => 41,  112 => 29,  109 => 38,  106 => 33,  103 => 32,  99 => 32,  95 => 33,  92 => 27,  86 => 23,  82 => 21,  80 => 23,  73 => 19,  64 => 18,  60 => 6,  57 => 10,  54 => 12,  51 => 11,  48 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 7,  33 => 10,  30 => 7,);
    }
}
