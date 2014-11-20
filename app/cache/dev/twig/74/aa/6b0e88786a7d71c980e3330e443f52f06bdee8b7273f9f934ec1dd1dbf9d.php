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
        return array (  124 => 23,  121 => 22,  118 => 21,  110 => 28,  106 => 26,  102 => 24,  100 => 21,  95 => 18,  80 => 15,  66 => 13,  49 => 11,  46 => 10,  42 => 9,  39 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
