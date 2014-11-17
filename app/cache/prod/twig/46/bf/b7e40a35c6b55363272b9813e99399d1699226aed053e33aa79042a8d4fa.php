<?php

/* AutoMainBundle:Default:auto_slider.html.twig */
class __TwigTemplate_46bfb7e40a35c6b55363272b9813e99399d1699226aed053e33aa79042a8d4fa extends Twig_Template
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
        echo "<div class=\"slider-wrapper\">
    <nav>
        <ul>
            <li class=\"tab_slider active_slider\" data-slider=\"bu\" ><a href=\"#\" >С ПРОБЕГОМ</a></li>
            <li class=\"tab_slider\" data-slider=\"new\"><a href=\"#\" >Новые</a></li>
        </ul>
    </nav>
    <section class=\"slider-block new_slider_block gradient_orange\">
        ";
        // line 9
        if (((isset($context["slidecount_new"]) ? $context["slidecount_new"] : null) != 0)) {
            // line 10
            echo "            <div class=\"slider-body new_slider_body\">
                <div class=\"slide active_slide new_slide new_active_slide\" data-page=\"1\">
                    <div class=\"large_car\">
                        <a href=\"/auto/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), 0, array(), "array"), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), 0, array(), "array"), "mark"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), 0, array(), "array"), "model"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), 0, array(), "array"), "img"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), 0, array(), "array"), "model"), "html", null, true);
            echo "\" /></a>
                        <div>
                            <p class=\"carname\">";
            // line 15
            echo "<span class=\"auto_field_name\">Марка:</span> <span class=\"car_mark\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), 0, array(), "array"), "mark"), "html", null, true);
            echo "</span>";
            echo "</p>
                            <p class=\"carname\"><span class=\"auto_field_name\">Модель:</span> <span class=\"car_model\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), 0, array(), "array"), "model"), "html", null, true);
            echo "</span></p>
                            <p class=\"caryear\"><span class=\"auto_field_name\">Год выпуска:</span> <span class=\"car_year\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), 0, array(), "array"), "year"), "html", null, true);
            echo "</span></p>
                        </div>
                        <div>
                            <p class=\"carrun\"><span class=\"auto_field_name\">Пробег:</span> <span class=\"car_run\">";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), 0, array(), "array"), "run"), 0, ".", " "), "html", null, true);
            echo " км</span></p>
                            <p class=\"carprice\"><span class=\"auto_field_name\">Цена:</span> <span class=\"car_price\">";
            // line 21
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), 0, array(), "array"), "price"), 0, ".", " "), "html", null, true);
            echo " грн</span></p>
                        </div>
                    </div>
                    <div class=\"mini_slider new_mini_slider\">
                        <div class=\"previous_car\"></div>
                        <div class=\"body_mini_slider\">
                            <div class=\"mini_slider_items\">
                                ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["slidecount_new"]) ? $context["slidecount_new"] : null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "                                    <div class=\"small_car\" id=\"car-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo "\">
                                        <a href=\"#\"><img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "img"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "model"), "html", null, true);
                echo "\"/></a>
                                        <p class=\"info_about_car\" data-link=\"/auto/";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "model"), "html", null, true);
                echo "\" data-mark=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "mark"), "html", null, true);
                echo "\" data-model=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "model"), "html", null, true);
                echo "\" data-year=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "year"), "html", null, true);
                echo "\" data-run=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "price"), 0, ".", " "), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "year"), "html", null, true);
                echo " г.в., ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo " км, цена: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "price"), 0, ".", " "), "html", null, true);
                echo " грн</p>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                            </div>
                        </div>
                        <div class=\"next_car\"></div>
                    </div>

                </div>
            </div>
            <div class=\"items_headers\">
                <div class=\"headers_slider\">
                    ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["slidecount_new"]) ? $context["slidecount_new"] : null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 44
                echo "                        <h3 class=\"carname\"><a href=\"/auto/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "model"), "html", null, true);
                echo "\"><span class=\"car_mark\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "mark"), "html", null, true);
                echo "</span> <span class=\"car_model\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "model"), "html", null, true);
                echo "</span></a></h3>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </div>
            </div>
        ";
        }
        // line 49
        echo "        <br class=\"clear\"/>
    </section>

    <section class=\"slider-block bu_slider_block gradient_orange\">
        ";
        // line 53
        if (((isset($context["slidecount_bu"]) ? $context["slidecount_bu"] : null) != 0)) {
            // line 54
            echo "            <div class=\"slider-body bu_slider_body\">
                <div class=\"slide active_slide bu_slide bu_active_slide\" data-page=\"1\">
                        <div class=\"large_car\">
                            <a href=\"/auto/";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), 0, array(), "array"), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), 0, array(), "array"), "mark"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), 0, array(), "array"), "model"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), 0, array(), "array"), "img"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), 0, array(), "array"), "model"), "html", null, true);
            echo "\" /></a>
                            <div>
                                <p class=\"carname\">";
            // line 59
            echo "<span class=\"auto_field_name\">Марка:</span> <span class=\"car_mark\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), 0, array(), "array"), "mark"), "html", null, true);
            echo "</span>";
            echo "</p>
                                <p class=\"carname\"><span class=\"auto_field_name\">Модель:</span> <span class=\"car_model\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), 0, array(), "array"), "model"), "html", null, true);
            echo "</span></p>
                                <p class=\"caryear\"><span class=\"auto_field_name\">Год выпуска:</span> <span class=\"car_year\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), 0, array(), "array"), "year"), "html", null, true);
            echo "</span></p>
                            </div>
                            <div>
                                <p class=\"carrun\"><span class=\"auto_field_name\">Пробег:</span> <span class=\"car_run\">";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), 0, array(), "array"), "run"), 0, ".", " "), "html", null, true);
            echo " км</span></p>
                                <p class=\"carprice\"><span class=\"auto_field_name\">Цена:</span> <span class=\"car_price\">";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), 0, array(), "array"), "price"), 0, ".", " "), "html", null, true);
            echo " грн</span></p>
                            </div>
                        </div>
                        <div class=\"mini_slider bu_mini_slider\">
                            <div class=\"previous_car\"></div>
                            <div class=\"body_mini_slider\">
                                <div class=\"mini_slider_items\">
                                    ";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["slidecount_bu"]) ? $context["slidecount_bu"] : null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 73
                echo "                                        <div class=\"small_car\" id=\"car-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo "\">
                                            <a href=\"#\"><img src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "img"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "model"), "html", null, true);
                echo "\"/></a>
                                            <p class=\"info_about_car\" data-link=\"/auto/";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "model"), "html", null, true);
                echo "\" data-mark=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "mark"), "html", null, true);
                echo "\" data-model=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "model"), "html", null, true);
                echo "\" data-year=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "year"), "html", null, true);
                echo "\" data-run=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "price"), 0, ".", " "), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "year"), "html", null, true);
                echo " г.в., ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo " км, цена: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "price"), 0, ".", " "), "html", null, true);
                echo " грн</p>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                                </div>
                            </div>
                            <div class=\"next_car\"></div>
                        </div>

                </div>
            </div>
            <div class=\"items_headers\">
                <div class=\"headers_slider\">
                    ";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["slidecount_bu"]) ? $context["slidecount_bu"] : null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 88
                echo "                        <h3 class=\"carname\"><a href=\"/auto/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "model"), "html", null, true);
                echo "\"><span class=\"car_mark\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "mark"), "html", null, true);
                echo "</span> <span class=\"car_model\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "model"), "html", null, true);
                echo "</span></a></h3>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                </div>
            </div>
        ";
        }
        // line 93
        echo "        <br class=\"clear\"/>
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:auto_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 93,  296 => 90,  279 => 88,  275 => 87,  264 => 78,  228 => 74,  223 => 73,  205 => 64,  199 => 61,  195 => 60,  189 => 59,  175 => 57,  168 => 53,  162 => 49,  157 => 46,  140 => 44,  136 => 43,  125 => 34,  89 => 30,  84 => 29,  70 => 21,  60 => 17,  50 => 15,  36 => 13,  31 => 10,  29 => 9,  19 => 1,  245 => 84,  242 => 83,  239 => 82,  235 => 75,  232 => 79,  229 => 78,  225 => 76,  222 => 75,  219 => 72,  215 => 72,  212 => 71,  209 => 65,  198 => 62,  194 => 61,  190 => 60,  183 => 56,  179 => 55,  174 => 53,  170 => 54,  163 => 48,  159 => 47,  154 => 45,  150 => 44,  138 => 35,  134 => 34,  124 => 27,  120 => 26,  110 => 19,  106 => 18,  100 => 15,  96 => 31,  86 => 9,  83 => 8,  80 => 28,  73 => 85,  71 => 82,  68 => 81,  66 => 20,  63 => 77,  61 => 74,  58 => 73,  56 => 16,  53 => 69,  51 => 7,  47 => 5,  44 => 4,  40 => 89,  37 => 4,  34 => 3,);
    }
}
