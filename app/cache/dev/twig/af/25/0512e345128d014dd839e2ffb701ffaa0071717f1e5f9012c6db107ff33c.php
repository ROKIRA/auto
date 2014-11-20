<?php

/* AutoMainBundle:Cabinet:zayavka_list.html.twig */
class __TwigTemplate_af250512e345128d014dd839e2ffb701ffaa0071717f1e5f9012c6db107ff33c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'leftbar' => array($this, 'block_leftbar'),
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
    public function block_leftbar($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->env->loadTemplate("AutoMainBundle:Cabinet:cabmenu.html.twig")->display($context);
        // line 5
        echo "    ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
        <div class=\"content\">
            <h2 class=\"page_title\">Мои заявки на авто</h2>
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "                <div class=\"success\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            ";
        if ((isset($context["zayavka"]) ? $context["zayavka"] : $this->getContext($context, "zayavka"))) {
            // line 17
            echo "                <ul class=\"zayavki\">
                    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["zayavka"]) ? $context["zayavka"] : $this->getContext($context, "zayavka")));
            foreach ($context['_seq'] as $context["_key"] => $context["z"]) {
                // line 19
                echo "                        <li class=\"myitem\">
                            <h3 class=\"auto_title\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "mark"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "model"), "html", null, true);
                echo " ";
                if (($this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "new") == 0)) {
                    echo " (б/у) ";
                }
                echo "</h3>
                            <p class=\"info about\">
                                    ";
                // line 22
                if (((null === $this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "priceFrom")) || (null === $this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "priceTo")))) {
                    // line 23
                    echo "                                      <span class=\"null\">Цена не указана</span>
                                    ";
                } else {
                    // line 25
                    echo "                                        <span class=\"price\">Цена от ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "priceFrom"), 0, ".", " "), "html", null, true);
                    echo " до ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "priceTo"), 0, ".", " "), "html", null, true);
                    echo " </span> грн
                                    ";
                }
                // line 27
                echo "                                <br/>
                                <a href=\"/app_dev.php/zayavka/";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "model"), "html", null, true);
                echo "\">Посмотреть</a>
                                <a href=\"";
                // line 29
                echo $this->env->getExtension('routing')->getPath("auto_main_homepage");
                echo "zayavka-edit/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["z"]) ? $context["z"] : $this->getContext($context, "z")), "id"), "html", null, true);
                echo "\">Изменить</a>
                            </p>
                        </li>
                        <br class=\"clear\"/>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </ul>


                ";
            // line 40
            echo "
            ";
        } else {
            // line 42
            echo "                <p>Заявок пока нет!</p>
                <p><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("auto_new");
            echo "\">Добавить объявление</a></p>
            ";
        }
        // line 45
        echo "
        </div><!-- .content -->


    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Cabinet:zayavka_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  137 => 43,  134 => 42,  130 => 40,  125 => 34,  112 => 29,  104 => 28,  101 => 27,  93 => 25,  89 => 23,  87 => 22,  76 => 20,  73 => 19,  69 => 18,  66 => 17,  63 => 16,  54 => 13,  51 => 12,  47 => 11,  42 => 8,  39 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
