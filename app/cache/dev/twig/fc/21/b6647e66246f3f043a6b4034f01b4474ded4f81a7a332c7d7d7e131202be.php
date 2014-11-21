<?php

/* AutoMainBundle:Form:fields.html.twig */
class __TwigTemplate_fc21b6647e66246f3f043a6b4034f01b4474ded4f81a7a332c7d7d7e131202be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tel_widget' => array($this, 'block_tel_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php

    ";
        // line 3
        $this->displayBlock('tel_widget', $context, $blocks);
    }

    public function block_tel_widget($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        ob_start();
        // line 5
        echo "            ";
        $context["type"] = "tel";
        // line 6
        echo "            ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "

        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  20 => 1,  379 => 155,  375 => 153,  368 => 151,  364 => 149,  358 => 148,  355 => 147,  349 => 146,  346 => 145,  340 => 144,  335 => 141,  332 => 140,  328 => 138,  325 => 137,  323 => 136,  317 => 133,  310 => 129,  306 => 128,  296 => 122,  293 => 121,  289 => 120,  285 => 118,  282 => 117,  278 => 115,  275 => 114,  273 => 113,  266 => 109,  259 => 105,  255 => 104,  245 => 98,  242 => 97,  238 => 96,  234 => 94,  231 => 93,  227 => 91,  222 => 89,  215 => 85,  208 => 81,  187 => 72,  183 => 70,  180 => 69,  174 => 67,  171 => 66,  169 => 65,  162 => 61,  155 => 57,  151 => 56,  141 => 50,  139 => 49,  129 => 46,  127 => 45,  124 => 44,  106 => 35,  100 => 32,  92 => 30,  68 => 18,  64 => 17,  58 => 14,  54 => 13,  50 => 12,  44 => 9,  40 => 8,  26 => 3,  24 => 3,  117 => 43,  109 => 38,  101 => 33,  90 => 30,  88 => 29,  83 => 27,  78 => 26,  72 => 19,  70 => 23,  53 => 13,  47 => 10,  43 => 9,  36 => 6,  30 => 4,  25 => 4,  23 => 3,  19 => 1,  250 => 91,  247 => 90,  243 => 86,  240 => 85,  235 => 79,  232 => 78,  226 => 81,  224 => 90,  220 => 76,  217 => 75,  211 => 87,  209 => 85,  206 => 84,  204 => 80,  198 => 73,  194 => 74,  191 => 73,  188 => 48,  176 => 59,  166 => 51,  164 => 48,  145 => 31,  142 => 30,  136 => 48,  132 => 47,  128 => 15,  123 => 14,  120 => 13,  114 => 37,  110 => 36,  105 => 8,  102 => 7,  96 => 31,  85 => 96,  82 => 26,  80 => 73,  76 => 71,  71 => 68,  69 => 67,  63 => 21,  61 => 30,  48 => 19,  46 => 13,  41 => 12,  39 => 8,  35 => 6,  29 => 2,);
    }
}
