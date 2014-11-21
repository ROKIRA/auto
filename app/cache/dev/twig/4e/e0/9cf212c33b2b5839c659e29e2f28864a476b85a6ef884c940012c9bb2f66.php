<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_4ee09cf212c33b2b5839c659e29e2f28864a476b85a6ef884c940012c9bb2f66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_demo_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  351 => 155,  339 => 146,  313 => 135,  300 => 131,  248 => 109,  216 => 96,  178 => 78,  148 => 50,  146 => 49,  126 => 41,  375 => 153,  364 => 149,  358 => 148,  349 => 146,  346 => 145,  340 => 144,  335 => 141,  332 => 140,  328 => 142,  325 => 137,  323 => 136,  317 => 133,  310 => 129,  306 => 128,  289 => 120,  282 => 124,  222 => 80,  174 => 60,  58 => 17,  301 => 93,  228 => 101,  205 => 64,  195 => 60,  175 => 57,  84 => 29,  53 => 11,  263 => 109,  357 => 147,  354 => 146,  342 => 137,  338 => 135,  331 => 131,  320 => 139,  304 => 120,  293 => 127,  291 => 115,  280 => 123,  274 => 109,  272 => 108,  266 => 109,  261 => 113,  255 => 104,  253 => 101,  242 => 83,  234 => 94,  180 => 69,  160 => 62,  34 => 7,  113 => 33,  90 => 32,  65 => 17,  353 => 150,  348 => 148,  345 => 147,  333 => 143,  327 => 130,  307 => 127,  302 => 132,  288 => 126,  275 => 114,  256 => 112,  251 => 105,  236 => 104,  225 => 76,  223 => 73,  197 => 78,  186 => 65,  184 => 74,  155 => 67,  129 => 46,  124 => 27,  118 => 21,  104 => 44,  127 => 28,  81 => 33,  215 => 72,  210 => 94,  202 => 75,  190 => 86,  185 => 65,  170 => 52,  165 => 74,  137 => 51,  97 => 28,  150 => 66,  77 => 24,  316 => 125,  311 => 135,  308 => 134,  296 => 122,  290 => 122,  279 => 88,  277 => 117,  270 => 114,  265 => 113,  259 => 105,  257 => 110,  245 => 84,  239 => 82,  237 => 94,  231 => 86,  212 => 71,  207 => 80,  192 => 77,  181 => 78,  172 => 73,  167 => 75,  161 => 70,  134 => 44,  100 => 15,  70 => 21,  23 => 3,  250 => 110,  232 => 79,  226 => 91,  211 => 77,  206 => 83,  198 => 62,  194 => 68,  191 => 73,  188 => 85,  114 => 36,  110 => 22,  76 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 155,  374 => 116,  368 => 151,  365 => 111,  362 => 149,  360 => 109,  355 => 157,  341 => 105,  337 => 103,  322 => 140,  314 => 131,  312 => 98,  309 => 121,  305 => 95,  298 => 118,  294 => 123,  285 => 118,  283 => 119,  278 => 115,  268 => 112,  264 => 78,  258 => 107,  252 => 80,  247 => 98,  241 => 105,  229 => 78,  220 => 94,  214 => 69,  177 => 62,  169 => 65,  140 => 44,  132 => 56,  128 => 42,  107 => 26,  61 => 12,  273 => 119,  269 => 118,  254 => 92,  243 => 97,  240 => 85,  238 => 96,  235 => 80,  230 => 102,  227 => 91,  224 => 90,  221 => 97,  219 => 74,  217 => 79,  208 => 93,  204 => 80,  179 => 61,  159 => 53,  143 => 56,  135 => 53,  119 => 52,  102 => 17,  71 => 82,  67 => 18,  63 => 77,  59 => 13,  38 => 6,  94 => 34,  89 => 30,  85 => 28,  75 => 31,  68 => 27,  56 => 11,  87 => 22,  21 => 2,  26 => 9,  93 => 30,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 9,  31 => 3,  28 => 3,  201 => 89,  196 => 88,  183 => 56,  171 => 66,  166 => 57,  163 => 48,  158 => 67,  156 => 66,  151 => 56,  142 => 63,  138 => 35,  136 => 48,  121 => 53,  117 => 19,  105 => 18,  91 => 29,  62 => 17,  49 => 13,  24 => 3,  25 => 35,  19 => 1,  79 => 19,  72 => 19,  69 => 18,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 46,  145 => 54,  139 => 45,  131 => 52,  123 => 30,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 33,  98 => 42,  96 => 41,  83 => 8,  74 => 17,  66 => 16,  55 => 15,  52 => 14,  50 => 12,  43 => 11,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 76,  203 => 78,  199 => 69,  193 => 74,  189 => 59,  187 => 72,  182 => 71,  176 => 59,  173 => 77,  168 => 58,  164 => 48,  162 => 61,  154 => 52,  149 => 59,  147 => 60,  144 => 64,  141 => 50,  133 => 33,  130 => 40,  125 => 34,  122 => 43,  116 => 41,  112 => 27,  109 => 45,  106 => 33,  103 => 24,  99 => 29,  95 => 18,  92 => 30,  86 => 34,  82 => 28,  80 => 7,  73 => 16,  64 => 13,  60 => 17,  57 => 12,  54 => 13,  51 => 7,  48 => 9,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
