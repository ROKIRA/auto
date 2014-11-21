<?php

/* AutoMainBundle:Default:cars.html.twig */
class __TwigTemplate_74aa6b0e88786a7d71c980e3330e443f52f06bdee8b7273f9f934ec1dd1dbf9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
        <div class=\"content\">
            <h2 class=\"page_title\">Все автомобили </h2>
            ";
        // line 7
        if ((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto"))) {
            // line 8
            echo "                <ul class=\"cars\">
                    ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")));
            foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                // line 10
                echo "                        <li class=\"item\">
                            <h3 class=\"auto_title\"><a href=\"/auto/";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "model"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "mark"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "model"), "html", null, true);
                echo " ";
                if (($this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "new") == 0)) {
                    echo " (б/у) ";
                }
                echo " </a></h3>
                            <div class=\"for_img\">
                                <a href=\"/auto/";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "model"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "img"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "model"), "html", null, true);
                echo "\"/></a>
                            </div><!-- .for_img -->
                            <p class=\"info about\"><span class=\"price\">";
                // line 15
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "price"), 0, ".", " "), "html", null, true);
                echo "</span> грн <br/> <a href=\"/app_dev.php/auto/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "model"), "html", null, true);
                echo "\">Подробнее...</a></p>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </ul>
                <br class=\"clear\"/>

                ";
            // line 21
            $this->displayBlock('pagination', $context, $blocks);
            // line 24
            echo "
            ";
        } else {
            // line 26
            echo "                <p>Автомобилей пока нет!</p>
            ";
        }
        // line 28
        echo "
        </div><!-- .content -->


    ";
    }

    // line 21
    public function block_pagination($context, array $blocks = array())
    {
        // line 22
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:pagination.html.twig")->display($context);
        // line 23
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:cars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 93,  228 => 74,  205 => 64,  195 => 60,  175 => 57,  84 => 29,  53 => 13,  263 => 109,  357 => 147,  354 => 146,  342 => 137,  338 => 135,  331 => 131,  320 => 126,  304 => 120,  293 => 116,  291 => 115,  280 => 111,  274 => 109,  272 => 108,  266 => 105,  261 => 104,  255 => 106,  253 => 101,  242 => 97,  234 => 94,  180 => 70,  160 => 62,  34 => 7,  113 => 33,  90 => 30,  65 => 12,  353 => 150,  348 => 148,  345 => 147,  333 => 138,  327 => 130,  307 => 127,  302 => 126,  288 => 120,  275 => 87,  256 => 106,  251 => 105,  236 => 95,  225 => 95,  223 => 73,  197 => 78,  186 => 75,  184 => 74,  155 => 62,  129 => 51,  124 => 23,  118 => 21,  104 => 33,  127 => 44,  81 => 22,  215 => 79,  210 => 78,  202 => 75,  190 => 66,  185 => 65,  170 => 54,  165 => 57,  137 => 51,  97 => 28,  150 => 55,  77 => 24,  316 => 125,  311 => 135,  308 => 134,  296 => 90,  290 => 122,  279 => 88,  277 => 117,  270 => 114,  265 => 113,  259 => 111,  257 => 110,  245 => 103,  239 => 103,  237 => 94,  231 => 97,  212 => 85,  207 => 80,  192 => 77,  181 => 78,  172 => 73,  167 => 72,  161 => 70,  134 => 42,  100 => 21,  70 => 21,  23 => 3,  250 => 106,  232 => 93,  226 => 91,  211 => 87,  206 => 83,  198 => 73,  194 => 50,  191 => 49,  188 => 73,  114 => 40,  110 => 28,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 149,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 134,  314 => 131,  312 => 98,  309 => 121,  305 => 95,  298 => 118,  294 => 123,  285 => 112,  283 => 119,  278 => 86,  268 => 112,  264 => 78,  258 => 107,  252 => 80,  247 => 98,  241 => 77,  229 => 73,  220 => 94,  214 => 69,  177 => 62,  169 => 60,  140 => 44,  132 => 16,  128 => 15,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 97,  240 => 85,  238 => 85,  235 => 75,  230 => 82,  227 => 81,  224 => 90,  221 => 77,  219 => 72,  217 => 86,  208 => 68,  204 => 82,  179 => 63,  159 => 55,  143 => 56,  135 => 53,  119 => 35,  102 => 24,  71 => 23,  67 => 18,  63 => 21,  59 => 15,  38 => 8,  94 => 28,  89 => 30,  85 => 28,  75 => 21,  68 => 18,  56 => 16,  87 => 22,  21 => 2,  26 => 5,  93 => 30,  88 => 29,  78 => 26,  46 => 10,  27 => 4,  44 => 11,  31 => 10,  28 => 2,  201 => 78,  196 => 90,  183 => 82,  171 => 61,  166 => 51,  163 => 65,  158 => 67,  156 => 66,  151 => 63,  142 => 45,  138 => 56,  136 => 43,  121 => 22,  117 => 43,  105 => 36,  91 => 29,  62 => 17,  49 => 11,  24 => 4,  25 => 4,  19 => 1,  79 => 18,  72 => 24,  69 => 18,  47 => 10,  40 => 9,  37 => 7,  22 => 2,  246 => 90,  157 => 46,  145 => 54,  139 => 52,  131 => 52,  123 => 45,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 33,  98 => 31,  96 => 31,  83 => 27,  74 => 17,  66 => 13,  55 => 14,  52 => 13,  50 => 15,  43 => 9,  41 => 13,  35 => 5,  32 => 4,  29 => 3,  209 => 65,  203 => 78,  199 => 61,  193 => 74,  189 => 59,  187 => 80,  182 => 71,  176 => 59,  173 => 66,  168 => 53,  164 => 48,  162 => 49,  154 => 58,  149 => 59,  147 => 60,  144 => 58,  141 => 48,  133 => 32,  130 => 40,  125 => 34,  122 => 43,  116 => 41,  112 => 29,  109 => 38,  106 => 26,  103 => 32,  99 => 32,  95 => 18,  92 => 27,  86 => 23,  82 => 21,  80 => 15,  73 => 19,  64 => 18,  60 => 17,  57 => 10,  54 => 12,  51 => 11,  48 => 11,  45 => 9,  42 => 9,  39 => 8,  36 => 13,  33 => 10,  30 => 5,);
    }
}
