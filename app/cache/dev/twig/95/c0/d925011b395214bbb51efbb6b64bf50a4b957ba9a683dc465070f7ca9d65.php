<?php

/* AutoMainBundle:Default:filter.html.twig */
class __TwigTemplate_95c0d925011b395214bbb51efbb6b64bf50a4b957ba9a683dc465070f7ca9d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
            <h2 class=\"page_title\">Найденные автомобили </h2>

            ";
        // line 9
        echo "
            ";
        // line 10
        if ((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto"))) {
            // line 11
            echo "                <ul class=\"cars\">
                    ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")));
            foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                // line 13
                echo "                        <li class=\"item\">
                            <h3 class=\"auto_title\"><a href=\"/Symfony/web/app_dev.php/auto/";
                // line 14
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
                                <a href=\"/Symfony/web/app_dev.php/auto/";
                // line 16
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
                // line 18
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "price"), 0, ".", " "), "html", null, true);
                echo "</span> грн <br/> <a href=\"/Symfony/web/app_dev.php/auto/";
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
            // line 21
            echo "                </ul>
                <br class=\"clear\"/>
            ";
        } else {
            // line 24
            echo "                <p>Автомобилей пока нет!</p>
            ";
        }
        // line 26
        echo "        </div><!-- .content -->


    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 26,  103 => 24,  98 => 21,  83 => 18,  69 => 16,  52 => 14,  49 => 13,  45 => 12,  42 => 11,  40 => 10,  37 => 9,  31 => 4,  28 => 3,);
    }
}
