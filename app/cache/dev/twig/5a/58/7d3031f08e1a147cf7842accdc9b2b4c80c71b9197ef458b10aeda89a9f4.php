<?php

/* ::base.html.twig */
class __TwigTemplate_5a587d3031f08e1a147cf7842accdc9b2b4c80c71b9197ef458b10aeda89a9f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'auth' => array($this, 'block_auth'),
            'main' => array($this, 'block_main'),
            'leftbar' => array($this, 'block_leftbar'),
            'filter' => array($this, 'block_filter'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    <!--[if gte IE 9]>
    <style type=\"text/css\">
        .gradient {
            filter: none;
        }
    </style>
    <![endif]-->
</head>
<body>

    <div class=\"wrapper\">
        ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "        <nav class=\"navigation\">
            <ul>
                <li class=\"nav-main\"><a href=\"/app_dev.php/\">Главная</a></li>
                <li><a href=\"/cars\">Автомобили</a></li>
                ";
        // line 67
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 68
            echo "                    <li class=\"nav-add-auto\"><a href=\"/add-auto\">Добавить авто</a></li>
                    <li class=\"nav-add-auto\"><a href=\"/add-detail\">Добавить деталь</a></li>
                ";
        }
        // line 71
        echo "            </ul>
        </nav>
        ";
        // line 73
        $this->displayBlock('main', $context, $blocks);
        // line 90
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "    </div>


</body>
</html>

    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Auto";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/css/main_style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/css/colorpicker.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/script/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/script/main_script.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/script/colorpicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/script/jquery.lightbox_me.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        // line 31
        echo "        <header class=\"header\">
            <section class=\"header_top\">
                    <h1 class=\"logo\"><a href=\"#\">AutoName.com</a></h1>
                    <nav>
                        <ul>
                            <li><a href=\"#\" class=\"active\">Новости</a></li>
                            <li><a href=\"#\">Автозапчасти</a></li>
                            <li><a href=\"#\">Тест-драйв</a></li>
                            <li><a href=\"#\">Новинки</a></li>
                            <li><a href=\"#\">Предложения</a></li>
                        </ul>
                    </nav>
                    <!--<p id=\"auth\">
                        <a href=\"#\">Войти</a>
                        или
                        <a href=\"#\">Зарегестрироваться</a>
                    </p>--> 
                    ";
        // line 48
        $this->displayBlock('auth', $context, $blocks);
        // line 51
        echo "            </section>

            <section class=\"slider\">
                <p class=\"logo_slide\">autorich.com.ua</p>
                <div class=\"text\">
                    <p>За последние <strong>24</strong> часа</p>
                    <p>добавлено <strong>256</strong> объявлений</p>
                </div>
                <a href=\"#\">+ добавить объявление</a>
            </section>
        </header>
        ";
    }

    // line 48
    public function block_auth($context, array $blocks = array())
    {
        // line 49
        echo "                        ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AutoMainBundle:Auth:index"), array());
        // line 50
        echo "                    ";
    }

    // line 73
    public function block_main($context, array $blocks = array())
    {
        echo " 
            <div class=\"main\">
                ";
        // line 75
        $this->displayBlock('leftbar', $context, $blocks);
        // line 84
        echo "
                ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "            </div>
            
        ";
    }

    // line 75
    public function block_leftbar($context, array $blocks = array())
    {
        // line 76
        echo "                    <aside class=\"leftbar\">

                        ";
        // line 78
        $this->displayBlock('filter', $context, $blocks);
        // line 81
        echo "
                    </aside>
                ";
    }

    // line 78
    public function block_filter($context, array $blocks = array())
    {
        // line 79
        echo "
                        ";
    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
        // line 86
        echo "                ";
    }

    // line 90
    public function block_footer($context, array $blocks = array())
    {
        // line 91
        echo "            <br class=\"clear\"/>
            <footer class=\"footer\">
                <p>&copy; Харьков 2014</p>
            </footer>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 91,  240 => 90,  236 => 86,  233 => 85,  228 => 79,  225 => 78,  219 => 81,  217 => 78,  213 => 76,  210 => 75,  204 => 87,  202 => 85,  199 => 84,  197 => 75,  191 => 73,  187 => 50,  184 => 49,  181 => 48,  166 => 51,  164 => 48,  145 => 31,  142 => 30,  136 => 17,  132 => 16,  128 => 15,  123 => 14,  120 => 13,  114 => 10,  110 => 9,  105 => 8,  102 => 7,  96 => 6,  85 => 96,  82 => 90,  80 => 73,  76 => 71,  71 => 68,  69 => 67,  63 => 63,  48 => 19,  46 => 13,  41 => 12,  39 => 7,  103 => 26,  100 => 25,  97 => 24,  92 => 27,  90 => 24,  86 => 22,  81 => 19,  74 => 15,  70 => 14,  65 => 12,  61 => 30,  57 => 10,  50 => 9,  37 => 6,  35 => 6,  32 => 4,  29 => 2,);
    }
}
