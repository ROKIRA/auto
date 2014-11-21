<?php

/* AutoMainBundle:Default:actions.html.twig */
class __TwigTemplate_ef4d17a2a90a0782afaacaf467fcf4e9a258d29adcc211c83cfced52c140d66d extends Twig_Template
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
        echo "<section class=\"news actions gradient_blue\">
    <h3 class=\"news_title\">Акции</h3>
    <div class=\"all_news_block\">
        ";
        // line 4
        if ((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news"))) {
            // line 5
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 6
                echo "                ";
                $context["i"] = 0;
                // line 7
                echo "                ";
                if (($this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "type") == "actions")) {
                    // line 8
                    echo "                    ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                        // line 9
                        echo "                        <div class=\"news_block\">
                            <div class=\"news_image\">
                                <img src=\"/bundles/auto/userfiles/";
                        // line 11
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "image"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "title"), "html", null, true);
                        echo "\"/>
                            </div>
                            <h4 class=\"news_block_title\"><a href=\"#\">";
                        // line 13
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "title"), "html", null, true);
                        echo "</a></h4>
                            <article>";
                        // line 14
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "description"), "html", null, true);
                        echo "</article>
                        </div>
                    ";
                    } else {
                        // line 17
                        echo "                        <h4>Также в акциях</h4>
                        <div>

                        </div>
                    ";
                    }
                    // line 22
                    echo "                ";
                }
                // line 23
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            <br class=\"clear\"/>
        ";
        } else {
            // line 26
            echo "            <p>Акций пока нет!</p>
        ";
        }
        // line 28
        echo "
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  113 => 33,  90 => 24,  65 => 12,  353 => 150,  348 => 148,  345 => 147,  333 => 138,  327 => 135,  307 => 127,  302 => 126,  288 => 120,  275 => 116,  256 => 106,  251 => 105,  236 => 98,  225 => 95,  223 => 94,  197 => 83,  186 => 80,  184 => 79,  155 => 62,  129 => 51,  124 => 50,  118 => 48,  104 => 28,  127 => 47,  81 => 26,  215 => 79,  210 => 78,  202 => 75,  190 => 66,  185 => 65,  170 => 58,  165 => 57,  137 => 43,  97 => 28,  150 => 50,  77 => 24,  316 => 132,  311 => 135,  308 => 134,  296 => 124,  290 => 122,  279 => 119,  277 => 117,  270 => 114,  265 => 113,  259 => 111,  257 => 110,  245 => 103,  239 => 103,  237 => 102,  231 => 97,  212 => 90,  207 => 88,  192 => 82,  181 => 78,  172 => 73,  167 => 72,  161 => 70,  134 => 42,  100 => 30,  70 => 20,  23 => 1,  250 => 106,  232 => 78,  226 => 87,  211 => 87,  206 => 88,  198 => 73,  194 => 50,  191 => 49,  188 => 48,  114 => 44,  110 => 34,  76 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 134,  314 => 131,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 123,  285 => 121,  283 => 119,  278 => 86,  268 => 112,  264 => 111,  258 => 81,  252 => 80,  247 => 90,  241 => 77,  229 => 73,  220 => 94,  214 => 69,  177 => 62,  169 => 60,  140 => 55,  132 => 16,  128 => 15,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 102,  240 => 85,  238 => 85,  235 => 79,  230 => 82,  227 => 81,  224 => 95,  221 => 77,  219 => 76,  217 => 91,  208 => 68,  204 => 87,  179 => 63,  159 => 55,  143 => 56,  135 => 53,  119 => 35,  102 => 31,  71 => 23,  67 => 18,  63 => 16,  59 => 15,  38 => 8,  94 => 28,  89 => 23,  85 => 28,  75 => 21,  68 => 22,  56 => 14,  87 => 22,  21 => 2,  26 => 5,  93 => 25,  88 => 6,  78 => 19,  46 => 10,  27 => 4,  44 => 11,  31 => 6,  28 => 5,  201 => 86,  196 => 90,  183 => 82,  171 => 61,  166 => 51,  163 => 65,  158 => 67,  156 => 66,  151 => 63,  142 => 45,  138 => 56,  136 => 55,  121 => 46,  117 => 41,  105 => 36,  91 => 34,  62 => 17,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 18,  47 => 11,  40 => 9,  37 => 8,  22 => 2,  246 => 90,  157 => 63,  145 => 49,  139 => 47,  131 => 52,  123 => 45,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 27,  98 => 31,  96 => 6,  83 => 24,  74 => 17,  66 => 17,  55 => 14,  52 => 13,  50 => 9,  43 => 8,  41 => 13,  35 => 5,  32 => 4,  29 => 3,  209 => 85,  203 => 78,  199 => 85,  193 => 73,  189 => 71,  187 => 80,  182 => 66,  176 => 59,  173 => 65,  168 => 66,  164 => 48,  162 => 57,  154 => 58,  149 => 59,  147 => 60,  144 => 58,  141 => 48,  133 => 32,  130 => 40,  125 => 34,  122 => 43,  116 => 34,  112 => 29,  109 => 38,  106 => 33,  103 => 32,  99 => 37,  95 => 33,  92 => 27,  86 => 23,  82 => 21,  80 => 23,  73 => 19,  64 => 18,  60 => 6,  57 => 10,  54 => 13,  51 => 13,  48 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 7,  33 => 10,  30 => 7,);
    }
}
