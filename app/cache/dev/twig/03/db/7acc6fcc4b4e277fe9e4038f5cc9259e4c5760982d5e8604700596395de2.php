<?php

/* AutoMainBundle:Default:about.html.twig */
class __TwigTemplate_03db7acc6fcc4b4e277fe9e4038f5cc9259e4c5760982d5e8604700596395de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'comments' => array($this, 'block_comments'),
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
        ";
        // line 5
        if ((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto"))) {
            // line 6
            echo "        <h2 class=\"page_title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "mark"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "model"), "html", null, true);
            echo " ";
            if (($this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "new") == 0)) {
                echo " (б/у) ";
            }
            echo "</h2>

        <div class=\"auto\">
            <img class=\"auto_img\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "img"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "model"), "html", null, true);
            echo "\"/>
            <p class=\"info\"><span>Год выпуска:</span> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "year"), "html", null, true);
            echo "</p>
            <p class=\"info\"><span>Пробег:</span> ";
            // line 11
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "run"), 0, ".", " "), "html", null, true);
            echo " км</p>
            <p class=\"info\"><span>Цвет:</span> <span class=\"color_box\" data-hex=\"#";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "color"), "html", null, true);
            echo "\"></span> </p>
            <script type=\"text/javascript\"> \$(\".color_box\").css('background', \$('.color_box').data('hex')); </script>
            
            <p>
                ";
            // line 16
            if ((!(null === $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "url")))) {
                // line 17
                echo "                    <button>Связаться с консультантом</button>
                ";
            } else {
                // line 19
                echo "                    <button>Связаться с продавцом</button>
                ";
            }
            // line 21
            echo "            </p>
            
            <article class=\"description\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "description"), "html", null, true);
            echo "</article>
            <p class=\"info clearfix\"><span>Цена:</span>  <span class=\"price\">";
            // line 24
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "price"), 0, ".", " "), "html", null, true);
            echo "</span> грн </p>
        </div>

        ";
        } else {
            // line 28
            echo "        <h2 class=\"page_title\">Ошибка!!!</h2>
        <p class=\"not_find\">Нет запрашиваемого автомобиля!!!</p>
        ";
        }
        // line 31
        echo "
        <hr/>
    ";
        // line 33
        $this->displayBlock('comments', $context, $blocks);
        // line 36
        echo "
    ";
    }

    // line 33
    public function block_comments($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $this->env->loadTemplate("AutoMainBundle:Default:comments.html.twig")->display($context);
        // line 35
        echo "    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  116 => 34,  113 => 33,  108 => 36,  106 => 33,  102 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 21,  78 => 19,  74 => 17,  72 => 16,  65 => 12,  61 => 11,  57 => 10,  50 => 9,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
