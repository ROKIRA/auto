<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_ebd822fa82e4d58172b9993bc03604227db757efc4d10d09b3e3f68bb588a050 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  329 => 131,  315 => 125,  303 => 122,  286 => 112,  267 => 101,  262 => 98,  233 => 87,  213 => 78,  200 => 72,  153 => 69,  20 => 1,  351 => 141,  339 => 146,  313 => 135,  300 => 121,  248 => 94,  216 => 79,  178 => 64,  148 => 50,  146 => 49,  126 => 41,  375 => 153,  364 => 149,  358 => 148,  349 => 146,  346 => 145,  340 => 144,  335 => 134,  332 => 140,  328 => 142,  325 => 129,  323 => 128,  317 => 133,  310 => 129,  306 => 128,  289 => 113,  282 => 124,  222 => 80,  174 => 74,  58 => 17,  301 => 93,  228 => 101,  205 => 64,  195 => 60,  175 => 57,  84 => 24,  53 => 12,  263 => 109,  357 => 147,  354 => 146,  342 => 137,  338 => 135,  331 => 131,  320 => 127,  304 => 120,  293 => 127,  291 => 115,  280 => 123,  274 => 109,  272 => 108,  266 => 109,  261 => 113,  255 => 104,  253 => 101,  242 => 83,  234 => 94,  180 => 69,  160 => 62,  34 => 7,  113 => 48,  90 => 27,  65 => 17,  353 => 150,  348 => 140,  345 => 147,  333 => 143,  327 => 130,  307 => 127,  302 => 132,  288 => 126,  275 => 105,  256 => 96,  251 => 105,  236 => 104,  225 => 76,  223 => 73,  197 => 71,  186 => 65,  184 => 74,  155 => 67,  129 => 46,  124 => 27,  118 => 49,  104 => 42,  127 => 60,  81 => 23,  215 => 72,  210 => 94,  202 => 75,  190 => 86,  185 => 75,  170 => 52,  165 => 60,  137 => 51,  97 => 41,  150 => 55,  77 => 24,  316 => 125,  311 => 135,  308 => 134,  296 => 122,  290 => 122,  279 => 88,  277 => 117,  270 => 102,  265 => 113,  259 => 105,  257 => 110,  245 => 84,  239 => 82,  237 => 94,  231 => 86,  212 => 71,  207 => 75,  192 => 77,  181 => 65,  172 => 62,  167 => 71,  161 => 70,  134 => 54,  100 => 15,  70 => 19,  23 => 3,  250 => 110,  232 => 79,  226 => 84,  211 => 77,  206 => 83,  198 => 62,  194 => 70,  191 => 77,  188 => 76,  114 => 36,  110 => 22,  76 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 155,  374 => 116,  368 => 151,  365 => 111,  362 => 149,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 140,  314 => 131,  312 => 124,  309 => 121,  305 => 95,  298 => 120,  294 => 123,  285 => 118,  283 => 119,  278 => 106,  268 => 112,  264 => 78,  258 => 107,  252 => 80,  247 => 98,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 62,  169 => 65,  140 => 44,  132 => 56,  128 => 42,  107 => 26,  61 => 12,  273 => 119,  269 => 118,  254 => 92,  243 => 97,  240 => 85,  238 => 96,  235 => 80,  230 => 102,  227 => 91,  224 => 90,  221 => 97,  219 => 74,  217 => 79,  208 => 93,  204 => 78,  179 => 61,  159 => 53,  143 => 56,  135 => 62,  119 => 40,  102 => 41,  71 => 82,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 30,  85 => 32,  75 => 31,  68 => 27,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 30,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 9,  31 => 3,  28 => 3,  201 => 89,  196 => 88,  183 => 56,  171 => 73,  166 => 57,  163 => 48,  158 => 79,  156 => 58,  151 => 56,  142 => 63,  138 => 56,  136 => 48,  121 => 50,  117 => 19,  105 => 34,  91 => 29,  62 => 17,  49 => 14,  24 => 3,  25 => 35,  19 => 1,  79 => 19,  72 => 19,  69 => 18,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 93,  157 => 46,  145 => 54,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 42,  96 => 37,  83 => 33,  74 => 27,  66 => 16,  55 => 16,  52 => 14,  50 => 12,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 76,  203 => 73,  199 => 69,  193 => 74,  189 => 59,  187 => 72,  182 => 71,  176 => 63,  173 => 77,  168 => 61,  164 => 70,  162 => 59,  154 => 52,  149 => 59,  147 => 54,  144 => 64,  141 => 51,  133 => 33,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 27,  109 => 45,  106 => 45,  103 => 24,  99 => 31,  95 => 18,  92 => 30,  86 => 34,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 17,  57 => 12,  54 => 13,  51 => 7,  48 => 9,  45 => 10,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
