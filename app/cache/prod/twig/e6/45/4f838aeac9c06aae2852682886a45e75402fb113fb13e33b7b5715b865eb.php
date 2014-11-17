<?php

/* AutoMainBundle:Default:pagination.html.twig */
class __TwigTemplate_e6454f838aeac9c06aae2852682886a45e75402fb113fb13e33b7b5715b865eb extends Twig_Template
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
        if (((isset($context["pagescount"]) ? $context["pagescount"] : null) > 1)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if (((isset($context["page"]) ? $context["page"] : null) > 3)) {
                // line 4
                echo "            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("cars");
                echo "page/1\">Первая</a></li>
            <span>...</span>
        ";
            }
            // line 7
            echo "        ";
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 8
                echo "            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("cars");
                echo "page/";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - 1), "html", null, true);
                echo "\">Назад</a></li>
        ";
            }
            // line 10
            echo "        ";
            if ((((isset($context["page"]) ? $context["page"] : null) > 1) && ((isset($context["page"]) ? $context["page"] : null) < 4))) {
                // line 11
                echo "            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("cars");
                echo "page/1\">1</a></li>
        ";
            }
            // line 13
            echo "        ";
            if (((isset($context["page"]) ? $context["page"] : null) > 3)) {
                // line 14
                echo "            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("cars");
                echo "page/";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - 2), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - 2), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 16
            echo "        ";
            if (((isset($context["page"]) ? $context["page"] : null) > 2)) {
                // line 17
                echo "            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("cars");
                echo "page/";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - 1), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - 1), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 19
            echo "        <li class=\"active_page_link\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</li>
        ";
            // line 20
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["pagescount"]) ? $context["pagescount"] : null))) {
                // line 21
                echo "            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("cars");
                echo "page/";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 1), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 1), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 23
            echo "        ";
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) < (isset($context["pagescount"]) ? $context["pagescount"] : null))) {
                // line 24
                echo "            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("cars");
                echo "page/";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 2), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 2), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 26
            echo "        ";
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["pagescount"]) ? $context["pagescount"] : null))) {
                // line 27
                echo "            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("cars");
                echo "page/";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 1), "html", null, true);
                echo "\">Вперед</a></li>
        ";
            }
            // line 29
            echo "        ";
            if ((((isset($context["page"]) ? $context["page"] : null) + 3) <= (isset($context["pagescount"]) ? $context["pagescount"] : null))) {
                // line 30
                echo "            <span>...</span>
            <li><a href=\"";
                // line 31
                echo $this->env->getExtension('routing')->getPath("cars");
                echo "page/";
                echo twig_escape_filter($this->env, (isset($context["pagescount"]) ? $context["pagescount"] : null), "html", null, true);
                echo "\">Последняя</a></li>
        ";
            }
            // line 33
            echo "
    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 33,  126 => 31,  123 => 30,  120 => 29,  112 => 27,  109 => 26,  99 => 24,  96 => 23,  86 => 21,  84 => 20,  79 => 19,  69 => 17,  56 => 14,  53 => 13,  47 => 11,  44 => 10,  36 => 8,  33 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,  124 => 23,  121 => 22,  118 => 21,  110 => 28,  106 => 26,  102 => 24,  100 => 21,  95 => 18,  80 => 15,  66 => 16,  49 => 11,  46 => 10,  42 => 9,  39 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
