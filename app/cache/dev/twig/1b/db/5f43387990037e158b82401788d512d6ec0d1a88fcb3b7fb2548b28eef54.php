<?php

/* AutoMainBundle:Default:reg.html.twig */
class __TwigTemplate_1bdb5f43387990037e158b82401788d512d6ec0d1a88fcb3b7fb2548b28eef54 extends Twig_Template
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

            <h2 class=\"page_title\">Регистрация нового пользователя</h2>

            ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "                <div class=\"success\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
                <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("reg");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"add_form\">
                    <fieldset>
                        <legend>Заполните поля</legend>

                        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "                            <div class=\"error\">
                                ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
                        <div class=\"reg\">
                            <div class=\"field\">
                                ";
        // line 25
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            // line 26
            echo "                                    <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
            echo "</div>
                                ";
        }
        // line 28
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("placeholder" => "Введите е-mail")));
        echo "
                            </div>

                            <div class=\"field\">
                                ";
        // line 33
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'errors')) {
            // line 34
            echo "                                    <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password1"), 'errors');
            echo "</div>
                                ";
        }
        // line 36
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo "
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget', array("attr" => array("placeholder" => "Введите пароль")));
        echo "
                            </div>

                            <div class=\"field\">
                                ";
        // line 41
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password2"), 'errors')) {
            // line 42
            echo "                                    <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password2"), 'errors');
            echo "</div>
                                ";
        }
        // line 44
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password2"), 'label');
        echo "
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password2"), 'widget', array("attr" => array("placeholder" => "Подтвердите пароль")));
        echo "
                            </div>

                            <div class=\"field\">
                                ";
        // line 49
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors')) {
            // line 50
            echo "                                    <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
            echo "</div>
                                ";
        }
        // line 52
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("placeholder" => "Введите имя")));
        echo "
                            </div>

                            <div class=\"field\">
                                ";
        // line 57
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors')) {
            // line 58
            echo "                                    <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors');
            echo "</div>
                                ";
        }
        // line 60
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label');
        echo "
                                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget', array("attr" => array("placeholder" => "Введите номер телефона")));
        echo "
                            </div>

                            <div class=\"field\">
                                ";
        // line 65
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'errors')) {
            // line 66
            echo "                                    <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'errors');
            echo "</div>
                                ";
        }
        // line 68
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'label');
        echo "
                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_city"))));
        echo "
                            </div>
                            <script type=\"text/javascript\">
                                \$('#user_name_region').prepend('<option selected>Выберите область</option>');
                            </script>

                            <div class=\"field\">
                                ";
        // line 76
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors')) {
            // line 77
            echo "                                    <div class=\"error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
            echo "</div>
                                ";
        }
        // line 79
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label');
        echo "
                                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "
                            </div>
                            <script type=\"text/javascript\">
                                \$('#user_name_city').empty().prepend('<option selected>Выберите город</option>');
                            </script>

                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "

                            <input type=\"submit\" value=\"Зарегестрироваться\" />
                        </div><!-- .add_auto -->

                    </fieldset>

                </form>

            <script type=\"text/javascript\"> if(\$('.success').length > 0){ \$('.add_form').hide(); }</script>

        </div>

    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:reg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 50,  146 => 49,  126 => 41,  375 => 153,  364 => 149,  358 => 148,  349 => 146,  346 => 145,  340 => 144,  335 => 141,  332 => 140,  328 => 138,  325 => 137,  323 => 136,  317 => 133,  310 => 129,  306 => 128,  289 => 120,  282 => 117,  222 => 80,  174 => 60,  58 => 73,  301 => 93,  228 => 74,  205 => 64,  195 => 60,  175 => 57,  84 => 20,  53 => 12,  263 => 109,  357 => 147,  354 => 146,  342 => 137,  338 => 135,  331 => 131,  320 => 126,  304 => 120,  293 => 121,  291 => 115,  280 => 111,  274 => 109,  272 => 108,  266 => 109,  261 => 104,  255 => 104,  253 => 101,  242 => 83,  234 => 94,  180 => 69,  160 => 62,  34 => 7,  113 => 33,  90 => 30,  65 => 17,  353 => 150,  348 => 148,  345 => 147,  333 => 138,  327 => 130,  307 => 127,  302 => 126,  288 => 120,  275 => 114,  256 => 106,  251 => 105,  236 => 95,  225 => 76,  223 => 73,  197 => 78,  186 => 65,  184 => 74,  155 => 57,  129 => 46,  124 => 27,  118 => 21,  104 => 33,  127 => 45,  81 => 22,  215 => 72,  210 => 78,  202 => 75,  190 => 60,  185 => 65,  170 => 52,  165 => 57,  137 => 51,  97 => 28,  150 => 44,  77 => 24,  316 => 125,  311 => 135,  308 => 134,  296 => 122,  290 => 122,  279 => 88,  277 => 117,  270 => 114,  265 => 113,  259 => 105,  257 => 110,  245 => 84,  239 => 82,  237 => 94,  231 => 86,  212 => 71,  207 => 80,  192 => 77,  181 => 78,  172 => 73,  167 => 72,  161 => 70,  134 => 44,  100 => 15,  70 => 21,  23 => 3,  250 => 106,  232 => 79,  226 => 91,  211 => 77,  206 => 83,  198 => 62,  194 => 68,  191 => 73,  188 => 66,  114 => 36,  110 => 19,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 155,  374 => 116,  368 => 151,  365 => 111,  362 => 149,  360 => 109,  355 => 147,  341 => 105,  337 => 103,  322 => 134,  314 => 131,  312 => 98,  309 => 121,  305 => 95,  298 => 118,  294 => 123,  285 => 118,  283 => 119,  278 => 115,  268 => 112,  264 => 78,  258 => 107,  252 => 80,  247 => 98,  241 => 77,  229 => 78,  220 => 94,  214 => 69,  177 => 62,  169 => 65,  140 => 44,  132 => 47,  128 => 42,  107 => 26,  61 => 16,  273 => 113,  269 => 94,  254 => 92,  243 => 97,  240 => 85,  238 => 96,  235 => 80,  230 => 82,  227 => 91,  224 => 90,  221 => 77,  219 => 74,  217 => 79,  208 => 81,  204 => 80,  179 => 61,  159 => 53,  143 => 56,  135 => 53,  119 => 37,  102 => 24,  71 => 82,  67 => 18,  63 => 77,  59 => 15,  38 => 9,  94 => 28,  89 => 30,  85 => 28,  75 => 21,  68 => 81,  56 => 13,  87 => 22,  21 => 2,  26 => 4,  93 => 30,  88 => 26,  78 => 26,  46 => 10,  27 => 4,  44 => 9,  31 => 3,  28 => 2,  201 => 78,  196 => 90,  183 => 56,  171 => 66,  166 => 57,  163 => 48,  158 => 67,  156 => 66,  151 => 56,  142 => 45,  138 => 35,  136 => 48,  121 => 22,  117 => 43,  105 => 36,  91 => 29,  62 => 17,  49 => 12,  24 => 3,  25 => 4,  19 => 1,  79 => 19,  72 => 19,  69 => 18,  47 => 11,  40 => 89,  37 => 7,  22 => 2,  246 => 90,  157 => 46,  145 => 54,  139 => 45,  131 => 52,  123 => 30,  120 => 29,  115 => 43,  111 => 37,  108 => 34,  101 => 33,  98 => 21,  96 => 23,  83 => 8,  74 => 17,  66 => 16,  55 => 15,  52 => 14,  50 => 12,  43 => 9,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 76,  203 => 78,  199 => 69,  193 => 74,  189 => 59,  187 => 72,  182 => 71,  176 => 59,  173 => 66,  168 => 58,  164 => 48,  162 => 61,  154 => 52,  149 => 59,  147 => 60,  144 => 58,  141 => 50,  133 => 33,  130 => 40,  125 => 34,  122 => 43,  116 => 41,  112 => 27,  109 => 26,  106 => 33,  103 => 24,  99 => 29,  95 => 18,  92 => 30,  86 => 25,  82 => 26,  80 => 7,  73 => 85,  64 => 17,  60 => 17,  57 => 10,  54 => 13,  51 => 7,  48 => 11,  45 => 11,  42 => 11,  39 => 8,  36 => 8,  33 => 7,  30 => 5,);
    }
}
