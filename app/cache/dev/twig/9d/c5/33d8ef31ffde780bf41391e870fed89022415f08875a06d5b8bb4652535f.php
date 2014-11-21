<?php

/* AutoMainBundle:Default:index.html.twig */
class __TwigTemplate_9dc533d8ef31ffde780bf41391e870fed89022415f08875a06d5b8bb4652535f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
            'filter' => array($this, 'block_filter'),
            'slider' => array($this, 'block_slider'),
            'zayavka' => array($this, 'block_zayavka'),
            'news' => array($this, 'block_news'),
            'actions' => array($this, 'block_actions'),
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
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "    ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "            <div class=\"content homepage\">

                ";
        // line 7
        $this->displayBlock('filter', $context, $blocks);
        // line 69
        echo "
                ";
        // line 70
        $this->displayBlock('slider', $context, $blocks);
        // line 73
        echo "
                ";
        // line 74
        $this->displayBlock('zayavka', $context, $blocks);
        // line 77
        echo "
                ";
        // line 78
        $this->displayBlock('news', $context, $blocks);
        // line 81
        echo "
                ";
        // line 82
        $this->displayBlock('actions', $context, $blocks);
        // line 85
        echo "
            </div><!-- .content -->
            <br class=\"clear\"/>
        ";
    }

    // line 7
    public function block_filter($context, array $blocks = array())
    {
        // line 8
        echo "                    <div class=\"filter gradient_blue\">
                        <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("filter_auto");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), 'enctype');
        echo " class=\"filter_form\">
                            <div class=\"fields\">

                                <h3 class=\"filter_title\">Поиск авто</h3>

                                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "new"), 'errors');
        echo "
                                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "new"), 'widget');
        echo "

                                <div class=\"filter-field\">
                                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "mark"), 'label');
        echo "
                                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "mark"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_model"))));
        echo "
                                    <script type=\"text/javascript\">
                                        \$('#filter_auto_mark').prepend('<option value=\"0\" selected>Выберите марку</option>');
                                    </script>
                                </div>

                                <div class=\"filter-field\">
                                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "model"), 'label');
        echo "
                                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "model"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_year"))));
        echo "
                                    <script type=\"text/javascript\">
                                        \$('#filter_auto_model').empty().prepend('<option value=\"0\" selected>Выберите модель</option>');
                                    </script>
                                </div>

                                <div class=\"filter-field\">
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "region"), 'label');
        echo "
                                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "region"), 'widget');
        echo "
                                    <script type=\"text/javascript\">
                                        \$('#filter_auto_region').prepend('<option value=\"0\" selected>Любой</option>');
                                    </script>
                                </div>

                                <div class=\"filter-field-small\">
                                    <div>
                                        <h4>Цена:</h4>
                                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "price_from"), 'errors');
        echo "
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "price_from"), 'widget', array("attr" => array("placeholder" => "От", "name" => "price_from")));
        echo "

                                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "price_to"), 'errors');
        echo "
                                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "price_to"), 'widget', array("attr" => array("placeholder" => "до", "name" => "price_to")));
        echo "
                                    </div>
                                    <div>
                                        <h4>Год выпуска:</h4>
                                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "year_from"), 'errors');
        echo "
                                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "year_from"), 'widget', array("attr" => array("placeholder" => "С", "name" => "year_from")));
        echo "

                                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "year_to"), 'errors');
        echo "
                                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "year_to"), 'widget', array("attr" => array("placeholder" => "по", "name" => "year_to")));
        echo "
                                    </div>
                                </div>
                            </div>
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "photo"), 'errors');
        echo "
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "photo"), 'widget');
        echo "
                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "photo"), 'label');
        echo "

                            <input type=\"submit\" value=\"Найти\" name=\"find\" />

                        </form>
                    </div>
                ";
    }

    // line 70
    public function block_slider($context, array $blocks = array())
    {
        // line 71
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:auto_slider.html.twig")->display($context);
        // line 72
        echo "                ";
    }

    // line 74
    public function block_zayavka($context, array $blocks = array())
    {
        // line 75
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:zayavka.html.twig")->display($context);
        // line 76
        echo "                ";
    }

    // line 78
    public function block_news($context, array $blocks = array())
    {
        // line 79
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:news.html.twig")->display($context);
        // line 80
        echo "                ";
    }

    // line 82
    public function block_actions($context, array $blocks = array())
    {
        // line 83
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:actions.html.twig")->display($context);
        // line 84
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 153,  364 => 149,  358 => 148,  349 => 146,  346 => 145,  340 => 144,  335 => 141,  332 => 140,  328 => 138,  325 => 137,  323 => 136,  317 => 133,  310 => 129,  306 => 128,  289 => 120,  282 => 117,  222 => 75,  174 => 53,  58 => 73,  301 => 93,  228 => 74,  205 => 64,  195 => 60,  175 => 57,  84 => 29,  53 => 69,  263 => 109,  357 => 147,  354 => 146,  342 => 137,  338 => 135,  331 => 131,  320 => 126,  304 => 120,  293 => 121,  291 => 115,  280 => 111,  274 => 109,  272 => 108,  266 => 109,  261 => 104,  255 => 104,  253 => 101,  242 => 83,  234 => 94,  180 => 69,  160 => 62,  34 => 3,  113 => 33,  90 => 30,  65 => 12,  353 => 150,  348 => 148,  345 => 147,  333 => 138,  327 => 130,  307 => 127,  302 => 126,  288 => 120,  275 => 114,  256 => 106,  251 => 105,  236 => 95,  225 => 76,  223 => 73,  197 => 78,  186 => 75,  184 => 74,  155 => 57,  129 => 46,  124 => 27,  118 => 21,  104 => 33,  127 => 45,  81 => 22,  215 => 72,  210 => 78,  202 => 75,  190 => 60,  185 => 65,  170 => 52,  165 => 57,  137 => 51,  97 => 28,  150 => 44,  77 => 24,  316 => 125,  311 => 135,  308 => 134,  296 => 122,  290 => 122,  279 => 88,  277 => 117,  270 => 114,  265 => 113,  259 => 105,  257 => 110,  245 => 84,  239 => 82,  237 => 94,  231 => 93,  212 => 71,  207 => 80,  192 => 77,  181 => 78,  172 => 73,  167 => 72,  161 => 70,  134 => 34,  100 => 15,  70 => 21,  23 => 3,  250 => 106,  232 => 79,  226 => 91,  211 => 87,  206 => 83,  198 => 62,  194 => 61,  191 => 73,  188 => 73,  114 => 37,  110 => 19,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 155,  374 => 116,  368 => 151,  365 => 111,  362 => 149,  360 => 109,  355 => 147,  341 => 105,  337 => 103,  322 => 134,  314 => 131,  312 => 98,  309 => 121,  305 => 95,  298 => 118,  294 => 123,  285 => 118,  283 => 119,  278 => 115,  268 => 112,  264 => 78,  258 => 107,  252 => 80,  247 => 98,  241 => 77,  229 => 78,  220 => 94,  214 => 69,  177 => 62,  169 => 65,  140 => 44,  132 => 47,  128 => 15,  107 => 26,  61 => 74,  273 => 113,  269 => 94,  254 => 92,  243 => 97,  240 => 85,  238 => 96,  235 => 80,  230 => 82,  227 => 91,  224 => 90,  221 => 77,  219 => 74,  217 => 86,  208 => 81,  204 => 80,  179 => 55,  159 => 47,  143 => 56,  135 => 53,  119 => 35,  102 => 24,  71 => 82,  67 => 18,  63 => 77,  59 => 15,  38 => 8,  94 => 28,  89 => 30,  85 => 28,  75 => 21,  68 => 81,  56 => 70,  87 => 22,  21 => 2,  26 => 3,  93 => 30,  88 => 29,  78 => 26,  46 => 10,  27 => 4,  44 => 4,  31 => 4,  28 => 3,  201 => 78,  196 => 90,  183 => 56,  171 => 66,  166 => 51,  163 => 48,  158 => 67,  156 => 66,  151 => 56,  142 => 45,  138 => 35,  136 => 48,  121 => 22,  117 => 43,  105 => 36,  91 => 29,  62 => 17,  49 => 13,  24 => 2,  25 => 4,  19 => 1,  79 => 18,  72 => 19,  69 => 16,  47 => 5,  40 => 89,  37 => 4,  22 => 2,  246 => 90,  157 => 46,  145 => 54,  139 => 49,  131 => 52,  123 => 45,  120 => 26,  115 => 43,  111 => 37,  108 => 36,  101 => 33,  98 => 21,  96 => 14,  83 => 8,  74 => 17,  66 => 78,  55 => 14,  52 => 14,  50 => 12,  43 => 9,  41 => 13,  35 => 5,  32 => 4,  29 => 3,  209 => 70,  203 => 78,  199 => 61,  193 => 74,  189 => 59,  187 => 72,  182 => 71,  176 => 59,  173 => 66,  168 => 53,  164 => 48,  162 => 61,  154 => 45,  149 => 59,  147 => 60,  144 => 58,  141 => 50,  133 => 32,  130 => 40,  125 => 34,  122 => 43,  116 => 41,  112 => 29,  109 => 38,  106 => 18,  103 => 24,  99 => 32,  95 => 18,  92 => 30,  86 => 9,  82 => 26,  80 => 7,  73 => 85,  64 => 17,  60 => 17,  57 => 10,  54 => 13,  51 => 7,  48 => 11,  45 => 12,  42 => 11,  39 => 8,  36 => 7,  33 => 10,  30 => 5,);
    }
}
