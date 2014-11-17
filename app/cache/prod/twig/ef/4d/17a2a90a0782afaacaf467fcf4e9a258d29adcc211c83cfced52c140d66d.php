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
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 5
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 6
                echo "                ";
                $context["i"] = 0;
                // line 7
                echo "                ";
                if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "type") == "actions")) {
                    // line 8
                    echo "                    ";
                    if (((isset($context["i"]) ? $context["i"] : null) == 0)) {
                        // line 9
                        echo "                        <div class=\"news_block\">
                            <div class=\"news_image\">
                                <img src=\"/bundles/auto/userfiles/";
                        // line 11
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "image"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "title"), "html", null, true);
                        echo "\"/>
                            </div>
                            <h4 class=\"news_block_title\"><a href=\"#\">";
                        // line 13
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "title"), "html", null, true);
                        echo "</a></h4>
                            <article>";
                        // line 14
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "description"), "html", null, true);
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
        return array (  85 => 28,  77 => 24,  64 => 17,  55 => 14,  49 => 12,  45 => 11,  38 => 9,  26 => 5,  288 => 126,  284 => 124,  272 => 115,  266 => 112,  261 => 111,  255 => 109,  253 => 108,  247 => 105,  236 => 102,  234 => 101,  224 => 97,  217 => 93,  206 => 90,  204 => 89,  193 => 85,  187 => 83,  185 => 82,  178 => 78,  173 => 77,  167 => 75,  165 => 74,  155 => 67,  144 => 64,  142 => 63,  132 => 56,  127 => 55,  121 => 53,  119 => 52,  109 => 45,  104 => 44,  98 => 42,  81 => 26,  75 => 31,  59 => 24,  52 => 22,  43 => 19,  41 => 18,  24 => 4,  301 => 93,  296 => 90,  279 => 88,  275 => 87,  264 => 78,  228 => 98,  223 => 73,  205 => 64,  199 => 61,  195 => 60,  189 => 59,  175 => 57,  168 => 53,  162 => 49,  157 => 46,  140 => 44,  136 => 43,  125 => 34,  89 => 30,  84 => 29,  70 => 21,  60 => 17,  50 => 15,  36 => 13,  31 => 6,  29 => 9,  19 => 1,  245 => 84,  242 => 104,  239 => 82,  235 => 75,  232 => 79,  229 => 78,  225 => 76,  222 => 75,  219 => 72,  215 => 72,  212 => 92,  209 => 65,  198 => 86,  194 => 61,  190 => 60,  183 => 56,  179 => 55,  174 => 53,  170 => 54,  163 => 48,  159 => 47,  154 => 45,  150 => 66,  138 => 35,  134 => 34,  124 => 27,  120 => 26,  110 => 19,  106 => 18,  100 => 15,  96 => 41,  86 => 34,  83 => 8,  80 => 28,  73 => 30,  71 => 23,  68 => 22,  66 => 20,  63 => 77,  61 => 17,  58 => 73,  56 => 23,  53 => 69,  51 => 13,  47 => 5,  44 => 11,  40 => 9,  37 => 8,  34 => 7,);
    }
}
