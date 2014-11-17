<?php

/* AutoMainBundle:Default:add_detail.html.twig */
class __TwigTemplate_f3485cfbd7331827041a2613913b511a04cb5b6e75a0eb91e2ce73003a6cb700 extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "        <div class=\"content\">
            <h2 class=\"page_title add\">Добавление детали</h2>
            ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_name"), "method")) {
            // line 6
            echo "                <form action=\"";
            echo $this->env->getExtension('routing')->getPath("detail_new");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo " class=\"add_form\">
                    <fieldset>
                        <legend>Заполните поля</legend>

                        ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 11
                echo "                            <div class=\"success\">
                                ";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
                        <div class=\"add_auto\">
                            <div class=\"field\">
                                ";
            // line 18
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region"), 'errors')) {
                // line 19
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region"), 'errors');
                echo "</div>
                                ";
            }
            // line 21
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region"), 'label');
            echo "
                                ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region"), 'widget');
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                \$('#add_auto_region').prepend('<option selected>Выберите регион</option>');
                            </script>

                            <div class=\"field\">
                                ";
            // line 29
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mark"), 'errors')) {
                // line 30
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mark"), 'errors');
                echo "</div>
                                ";
            }
            // line 32
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mark"), 'label');
            echo "
                                ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mark"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_model"))));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                \$('#add_auto_mark').prepend('<option selected>Выберите марку</option>');
                            </script>

                            <div class=\"field\">
                                ";
            // line 40
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "model"), 'errors')) {
                // line 41
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "model"), 'errors');
                echo "</div>
                                ";
            }
            // line 43
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "model"), 'label');
            echo "
                                ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "model"), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("AutoMainBundle_ajax_update_mydata_year"))));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                \$('#add_auto_model').empty().prepend('<option selected>Выберите модель</option>');
                            </script>

                            <div class=\"field\">
                                ";
            // line 51
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year"), 'errors')) {
                // line 52
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year"), 'errors');
                echo "</div>
                                ";
            }
            // line 54
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year"), 'label');
            echo "
                                ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year"), 'widget', array("attr" => array("placeholder" => "Год выпуска автомобиля")));
            echo "
                            </div>
                            <script type=\"text/javascript\">
                                \$('#add_auto_year').empty().prepend('<option selected>Укажите год выпуска</option>');
                            </script>

                            <div class=\"field\">
                                ";
            // line 62
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'errors')) {
                // line 63
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'errors');
                echo "</div>
                                ";
            }
            // line 65
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'label');
            echo "
                                ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'widget', array("attr" => array("placeholder" => "Наименование: ")));
            echo "
                            </div>

                            <div class=\"loaded_auto\">
                                <img src=\"/bundles/auto/userfiles/no_image.jpg\" alt=\"auto image\" />
                            </div>
                            
                            <div class=\"field\">
                                ";
            // line 74
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'errors')) {
                // line 75
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'errors');
                echo "</div>
                                ";
            }
            // line 77
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'label');
            echo "
                                ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'widget');
            echo "
                            </div>

                            <div class=\"field\">
                                ";
            // line 82
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price"), 'errors')) {
                // line 83
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price"), 'errors');
                echo "</div>
                                ";
            }
            // line 85
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price"), 'label');
            echo "
                                ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price"), 'widget', array("attr" => array("placeholder" => "Цена автомобиля")));
            echo "
                            </div>

                            <div class=\"field description_field\">
                                ";
            // line 90
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'errors')) {
                // line 91
                echo "                                    <div class=\"error\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'errors');
                echo "</div>
                                ";
            }
            // line 93
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'label');
            echo "
                                ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'widget', array("attr" => array("cols" => "30", "rows" => "5")));
            echo "
                            </div>

                            ";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token"), 'row');
            echo "

                            <input type=\"submit\" value=\"Добавить\" />
                        </div><!-- .add_auto -->

                    </fieldset>

                </form>
            ";
        } else {
            // line 106
            echo "                <p class=\"notice\">Для добавления детали необходимо сначала <strong>авторизоваться</strong></p>
                <p><a href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("reg");
            echo "\">Зарегестрироваться</a></p>
            ";
        }
        // line 109
        echo "
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:add_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 109,  258 => 107,  255 => 106,  243 => 97,  237 => 94,  232 => 93,  226 => 91,  224 => 90,  217 => 86,  212 => 85,  206 => 83,  204 => 82,  197 => 78,  192 => 77,  186 => 75,  184 => 74,  173 => 66,  168 => 65,  162 => 63,  160 => 62,  150 => 55,  145 => 54,  139 => 52,  137 => 51,  127 => 44,  122 => 43,  116 => 41,  114 => 40,  104 => 33,  99 => 32,  93 => 30,  91 => 29,  81 => 22,  76 => 21,  70 => 19,  68 => 18,  63 => 15,  54 => 12,  51 => 11,  47 => 10,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
