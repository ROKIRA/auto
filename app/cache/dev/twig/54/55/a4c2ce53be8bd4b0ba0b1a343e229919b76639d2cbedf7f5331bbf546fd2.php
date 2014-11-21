<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_5455a4c2ce53be8bd4b0ba0b1a343e229919b76639d2cbedf7f5331bbf546fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  351 => 155,  339 => 146,  313 => 135,  300 => 131,  248 => 109,  216 => 96,  178 => 78,  148 => 50,  146 => 49,  126 => 41,  375 => 153,  364 => 149,  358 => 148,  349 => 146,  346 => 145,  340 => 144,  335 => 141,  332 => 140,  328 => 142,  325 => 137,  323 => 136,  317 => 133,  310 => 129,  306 => 128,  289 => 120,  282 => 124,  222 => 80,  174 => 60,  58 => 73,  301 => 93,  228 => 101,  205 => 64,  195 => 60,  175 => 57,  84 => 20,  53 => 12,  263 => 109,  357 => 147,  354 => 146,  342 => 137,  338 => 135,  331 => 131,  320 => 139,  304 => 120,  293 => 127,  291 => 115,  280 => 123,  274 => 109,  272 => 108,  266 => 109,  261 => 113,  255 => 104,  253 => 101,  242 => 83,  234 => 94,  180 => 69,  160 => 62,  34 => 7,  113 => 33,  90 => 30,  65 => 17,  353 => 150,  348 => 148,  345 => 147,  333 => 143,  327 => 130,  307 => 127,  302 => 132,  288 => 126,  275 => 114,  256 => 112,  251 => 105,  236 => 104,  225 => 76,  223 => 73,  197 => 78,  186 => 65,  184 => 74,  155 => 67,  129 => 46,  124 => 27,  118 => 21,  104 => 44,  127 => 55,  81 => 33,  215 => 72,  210 => 94,  202 => 75,  190 => 86,  185 => 65,  170 => 52,  165 => 74,  137 => 51,  97 => 28,  150 => 66,  77 => 24,  316 => 125,  311 => 135,  308 => 134,  296 => 122,  290 => 122,  279 => 88,  277 => 117,  270 => 114,  265 => 113,  259 => 105,  257 => 110,  245 => 84,  239 => 82,  237 => 94,  231 => 86,  212 => 71,  207 => 80,  192 => 77,  181 => 78,  172 => 73,  167 => 75,  161 => 70,  134 => 44,  100 => 15,  70 => 21,  23 => 3,  250 => 110,  232 => 79,  226 => 91,  211 => 77,  206 => 83,  198 => 62,  194 => 68,  191 => 73,  188 => 85,  114 => 36,  110 => 19,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 155,  374 => 116,  368 => 151,  365 => 111,  362 => 149,  360 => 109,  355 => 157,  341 => 105,  337 => 103,  322 => 140,  314 => 131,  312 => 98,  309 => 121,  305 => 95,  298 => 118,  294 => 123,  285 => 118,  283 => 119,  278 => 115,  268 => 112,  264 => 78,  258 => 107,  252 => 80,  247 => 98,  241 => 105,  229 => 78,  220 => 94,  214 => 69,  177 => 62,  169 => 65,  140 => 44,  132 => 56,  128 => 42,  107 => 26,  61 => 16,  273 => 119,  269 => 118,  254 => 92,  243 => 97,  240 => 85,  238 => 96,  235 => 80,  230 => 102,  227 => 91,  224 => 90,  221 => 97,  219 => 74,  217 => 79,  208 => 93,  204 => 80,  179 => 61,  159 => 53,  143 => 56,  135 => 53,  119 => 52,  102 => 24,  71 => 82,  67 => 18,  63 => 77,  59 => 24,  38 => 6,  94 => 28,  89 => 30,  85 => 28,  75 => 31,  68 => 27,  56 => 23,  87 => 22,  21 => 2,  26 => 4,  93 => 30,  88 => 26,  78 => 26,  46 => 10,  27 => 4,  44 => 9,  31 => 3,  28 => 2,  201 => 89,  196 => 88,  183 => 56,  171 => 66,  166 => 57,  163 => 48,  158 => 67,  156 => 66,  151 => 56,  142 => 63,  138 => 35,  136 => 48,  121 => 53,  117 => 43,  105 => 36,  91 => 29,  62 => 17,  49 => 12,  24 => 3,  25 => 4,  19 => 1,  79 => 19,  72 => 19,  69 => 18,  47 => 11,  40 => 89,  37 => 7,  22 => 2,  246 => 90,  157 => 46,  145 => 54,  139 => 45,  131 => 52,  123 => 30,  120 => 29,  115 => 43,  111 => 37,  108 => 34,  101 => 33,  98 => 42,  96 => 41,  83 => 8,  74 => 17,  66 => 16,  55 => 15,  52 => 10,  50 => 12,  43 => 7,  41 => 18,  35 => 5,  32 => 4,  29 => 3,  209 => 76,  203 => 78,  199 => 69,  193 => 74,  189 => 59,  187 => 72,  182 => 71,  176 => 59,  173 => 77,  168 => 58,  164 => 48,  162 => 61,  154 => 52,  149 => 59,  147 => 60,  144 => 64,  141 => 50,  133 => 33,  130 => 40,  125 => 34,  122 => 43,  116 => 41,  112 => 27,  109 => 45,  106 => 33,  103 => 24,  99 => 29,  95 => 18,  92 => 30,  86 => 34,  82 => 26,  80 => 7,  73 => 30,  64 => 17,  60 => 17,  57 => 12,  54 => 13,  51 => 7,  48 => 9,  45 => 11,  42 => 11,  39 => 8,  36 => 6,  33 => 5,  30 => 4,);
    }
}
