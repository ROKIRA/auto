<?php

/* AutoMainBundle:Default:index.html.twig */
class __TwigTemplate_9dc533d8ef31ffde780bf41391e870fed89022415f08875a06d5b8bb4652535f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
            'filter' => array($this, 'block_filter'),
            'slider' => array($this, 'block_slider'),
            'zayavka' => array($this, 'block_zayavka'),
            'news' => array($this, 'block_news'),
            'actions' => array($this, 'block_actions'),
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
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "    ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "            <div class=\"content homepage\">

                ";
        // line 7
        $this->displayBlock('filter', $context, $blocks);
        // line 69
        echo "
                ";
        // line 70
        $this->displayBlock('slider', $context, $blocks);
        // line 73
        echo "
                ";
        // line 74
        $this->displayBlock('zayavka', $context, $blocks);
        // line 77
        echo "
                ";
        // line 78
        $this->displayBlock('news', $context, $blocks);
        // line 81
        echo "
                ";
        // line 82
        $this->displayBlock('actions', $context, $blocks);
        // line 85
        echo "
            </div><!-- .content -->
            <br class=\"clear\"/>
        ";
    }

    // line 7
    public function block_filter($context, array $blocks = array())
    {
        // line 8
        echo "                    <div class=\"filter gradient_blue\">
                        <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("filter_auto");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), 'enctype');
        echo " class=\"filter_form\">
                            <div class=\"fields\">

                                <h3 class=\"filter_title\">Поиск авто</h3>

                                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "new"), 'errors');
        echo "
                                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "new"), 'widget');
        echo "

                                <div class=\"filter-field\">
                                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "mark"), 'label');
        echo "
                                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "mark"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_model"))));
        echo "
                                    <script type=\"text/javascript\">
                                        \$('#filter_auto_mark').prepend('<option value=\"0\" selected>Выберите марку</option>');
                                    </script>
                                </div>

                                <div class=\"filter-field\">
                                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "model"), 'label');
        echo "
                                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "model"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_year"))));
        echo "
                                    <script type=\"text/javascript\">
                                        \$('#filter_auto_model').empty().prepend('<option value=\"0\" selected>Выберите модель</option>');
                                    </script>
                                </div>

                                <div class=\"filter-field\">
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "region"), 'label');
        echo "
                                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "region"), 'widget');
        echo "
                                    <script type=\"text/javascript\">
                                        \$('#filter_auto_region').prepend('<option value=\"0\" selected>Любой</option>');
                                    </script>
                                </div>

                                <div class=\"filter-field-small\">
                                    <div>
                                        <h4>Цена:</h4>
                                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "price_from"), 'errors');
        echo "
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "price_from"), 'widget', array("attr" => array("placeholder" => "От", "name" => "price_from")));
        echo "

                                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "price_to"), 'errors');
        echo "
                                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "price_to"), 'widget', array("attr" => array("placeholder" => "до", "name" => "price_to")));
        echo "
                                    </div>
                                    <div>
                                        <h4>Год выпуска:</h4>
                                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "year_from"), 'errors');
        echo "
                                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "year_from"), 'widget', array("attr" => array("placeholder" => "С", "name" => "year_from")));
        echo "

                                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "year_to"), 'errors');
        echo "
                                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "year_to"), 'widget', array("attr" => array("placeholder" => "по", "name" => "year_to")));
        echo "
                                    </div>
                                </div>
                            </div>
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "photo"), 'errors');
        echo "
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "photo"), 'widget');
        echo "
                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "photo"), 'label');
        echo "

                            <input type=\"submit\" value=\"Найти\" name=\"find\" />

                        </form>
                    </div>
                ";
    }

    // line 70
    public function block_slider($context, array $blocks = array())
    {
        // line 71
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:auto_slider.html.twig")->display($context);
        // line 72
        echo "                ";
    }

    // line 74
    public function block_zayavka($context, array $blocks = array())
    {
        // line 75
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:zayavka.html.twig")->display($context);
        // line 76
        echo "                ";
    }

    // line 78
    public function block_news($context, array $blocks = array())
    {
        // line 79
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:news.html.twig")->display($context);
        // line 80
        echo "                ";
    }

    // line 82
    public function block_actions($context, array $blocks = array())
    {
        // line 83
        echo "                    ";
        $this->env->loadTemplate("AutoMainBundle:Default:actions.html.twig")->display($context);
        // line 84
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 84,  242 => 83,  239 => 82,  235 => 80,  232 => 79,  229 => 78,  225 => 76,  222 => 75,  219 => 74,  215 => 72,  212 => 71,  209 => 70,  198 => 62,  194 => 61,  190 => 60,  183 => 56,  179 => 55,  174 => 53,  170 => 52,  163 => 48,  159 => 47,  154 => 45,  150 => 44,  138 => 35,  134 => 34,  124 => 27,  120 => 26,  110 => 19,  106 => 18,  100 => 15,  96 => 14,  86 => 9,  83 => 8,  80 => 7,  73 => 85,  71 => 82,  68 => 81,  66 => 78,  63 => 77,  61 => 74,  58 => 73,  56 => 70,  53 => 69,  51 => 7,  47 => 5,  44 => 4,  40 => 89,  37 => 4,  34 => 3,);
    }
}
