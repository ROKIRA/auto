<?php

/* AutoMainBundle:Auto:layout.html.twig */
class __TwigTemplate_417277782cc95e6645a4c4a03bff36dba0c3359957ab51d33abb015ed3b55ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div class=\"wrapper\">
    <header></header>
    ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    <footer></footer>
</div>
";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Auto";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Auto:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  250 => 91,  232 => 78,  226 => 81,  211 => 87,  206 => 84,  198 => 73,  194 => 50,  191 => 49,  188 => 48,  114 => 10,  110 => 9,  76 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 90,  241 => 77,  229 => 73,  220 => 76,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 16,  128 => 15,  107 => 36,  61 => 30,  273 => 96,  269 => 94,  254 => 92,  243 => 86,  240 => 85,  238 => 85,  235 => 79,  230 => 82,  227 => 81,  224 => 78,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 75,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 7,  71 => 13,  67 => 15,  63 => 6,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 96,  75 => 17,  68 => 12,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 15,  27 => 4,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 51,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 30,  138 => 54,  136 => 17,  121 => 46,  117 => 44,  105 => 8,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 67,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 31,  139 => 45,  131 => 52,  123 => 14,  120 => 13,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 6,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 18,  50 => 17,  43 => 8,  41 => 12,  35 => 7,  32 => 4,  29 => 5,  209 => 85,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 59,  173 => 65,  168 => 72,  164 => 48,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 90,  80 => 73,  73 => 19,  64 => 17,  60 => 6,  57 => 5,  54 => 10,  51 => 14,  48 => 19,  45 => 17,  42 => 7,  39 => 7,  36 => 5,  33 => 6,  30 => 7,);
    }
}
