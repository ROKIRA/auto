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
        if (((isset($context["slidecount_new"]) ? $context["slidecount_new"] : $this->getContext($context, "slidecount_new")) != 0)) {
            // line 10
            echo "            <div class=\"slider-body new_slider_body\">
                <div class=\"slide active_slide new_slide new_active_slide\" data-page=\"1\">
                    <div class=\"large_car\">
                        <a href=\"/auto/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "mark"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "model"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "img"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "model"), "html", null, true);
            echo "\" /></a>
                        <div>
                            <p class=\"carname\">";
            // line 15
            echo "<span class=\"auto_field_name\">Марка:</span> <span class=\"car_mark\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "mark"), "html", null, true);
            echo "</span>";
            echo "</p>
                            <p class=\"carname\"><span class=\"auto_field_name\">Модель:</span> <span class=\"car_model\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "model"), "html", null, true);
            echo "</span></p>
                            <p class=\"caryear\"><span class=\"auto_field_name\">Год выпуска:</span> <span class=\"car_year\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "year"), "html", null, true);
            echo "</span></p>
                        </div>
                        <div>
                            <p class=\"carrun\"><span class=\"auto_field_name\">Пробег:</span> <span class=\"car_run\">";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "run"), 0, ".", " "), "html", null, true);
            echo " км</span></p>
                            <p class=\"carprice\"><span class=\"auto_field_name\">Цена:</span> <span class=\"car_price\">";
            // line 21
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), 0, array(), "array"), "price"), 0, ".", " "), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["slidecount_new"]) ? $context["slidecount_new"] : $this->getContext($context, "slidecount_new")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "                                    <div class=\"small_car\" id=\"car-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "\">
                                        <a href=\"#\"><img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "img"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\"/></a>
                                        <p class=\"info_about_car\" data-link=\"/auto/";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\" data-mark=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "\" data-model=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\" data-year=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "year"), "html", null, true);
                echo "\" data-run=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "price"), 0, ".", " "), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "year"), "html", null, true);
                echo " г.в., ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo " км, цена: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "price"), 0, ".", " "), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["slidecount_new"]) ? $context["slidecount_new"] : $this->getContext($context, "slidecount_new")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 44
                echo "                        <h3 class=\"carname\"><a href=\"/auto/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\"><span class=\"car_mark\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "</span> <span class=\"car_model\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_new"]) ? $context["slider_new"] : $this->getContext($context, "slider_new")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
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
        if (((isset($context["slidecount_bu"]) ? $context["slidecount_bu"] : $this->getContext($context, "slidecount_bu")) != 0)) {
            // line 54
            echo "            <div class=\"slider-body bu_slider_body\">
                <div class=\"slide active_slide bu_slide bu_active_slide\" data-page=\"1\">
                        <div class=\"large_car\">
                            <a href=\"/auto/";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "mark"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "model"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "img"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "model"), "html", null, true);
            echo "\" /></a>
                            <div>
                                <p class=\"carname\">";
            // line 59
            echo "<span class=\"auto_field_name\">Марка:</span> <span class=\"car_mark\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "mark"), "html", null, true);
            echo "</span>";
            echo "</p>
                                <p class=\"carname\"><span class=\"auto_field_name\">Модель:</span> <span class=\"car_model\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "model"), "html", null, true);
            echo "</span></p>
                                <p class=\"caryear\"><span class=\"auto_field_name\">Год выпуска:</span> <span class=\"car_year\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "year"), "html", null, true);
            echo "</span></p>
                            </div>
                            <div>
                                <p class=\"carrun\"><span class=\"auto_field_name\">Пробег:</span> <span class=\"car_run\">";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "run"), 0, ".", " "), "html", null, true);
            echo " км</span></p>
                                <p class=\"carprice\"><span class=\"auto_field_name\">Цена:</span> <span class=\"car_price\">";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), 0, array(), "array"), "price"), 0, ".", " "), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["slidecount_bu"]) ? $context["slidecount_bu"] : $this->getContext($context, "slidecount_bu")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 73
                echo "                                        <div class=\"small_car\" id=\"car-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "\">
                                            <a href=\"#\"><img src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/auto/userfiles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "img"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\"/></a>
                                            <p class=\"info_about_car\" data-link=\"/auto/";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\" data-mark=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "\" data-model=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\" data-year=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "year"), "html", null, true);
                echo "\" data-run=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "price"), 0, ".", " "), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "year"), "html", null, true);
                echo " г.в., ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "run"), 0, ".", " "), "html", null, true);
                echo " км, цена: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "price"), 0, ".", " "), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["slidecount_bu"]) ? $context["slidecount_bu"] : $this->getContext($context, "slidecount_bu")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 88
                echo "                        <h3 class=\"carname\"><a href=\"/auto/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
                echo "\"><span class=\"car_mark\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "mark"), "html", null, true);
                echo "</span> <span class=\"car_model\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider_bu"]) ? $context["slider_bu"] : $this->getContext($context, "slider_bu")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "model"), "html", null, true);
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
        return array (  301 => 93,  228 => 74,  205 => 64,  195 => 60,  175 => 57,  84 => 29,  53 => 13,  263 => 109,  357 => 147,  354 => 146,  342 => 137,  338 => 135,  331 => 131,  320 => 126,  304 => 120,  293 => 116,  291 => 115,  280 => 111,  274 => 109,  272 => 108,  266 => 105,  261 => 104,  255 => 106,  253 => 101,  242 => 97,  234 => 94,  180 => 70,  160 => 62,  34 => 7,  113 => 33,  90 => 30,  65 => 12,  353 => 150,  348 => 148,  345 => 147,  333 => 138,  327 => 130,  307 => 127,  302 => 126,  288 => 120,  275 => 87,  256 => 106,  251 => 105,  236 => 95,  225 => 95,  223 => 73,  197 => 78,  186 => 75,  184 => 74,  155 => 62,  129 => 51,  124 => 50,  118 => 48,  104 => 33,  127 => 44,  81 => 22,  215 => 79,  210 => 78,  202 => 75,  190 => 66,  185 => 65,  170 => 54,  165 => 57,  137 => 51,  97 => 28,  150 => 55,  77 => 24,  316 => 125,  311 => 135,  308 => 134,  296 => 90,  290 => 122,  279 => 88,  277 => 117,  270 => 114,  265 => 113,  259 => 111,  257 => 110,  245 => 103,  239 => 103,  237 => 94,  231 => 97,  212 => 85,  207 => 80,  192 => 77,  181 => 78,  172 => 73,  167 => 72,  161 => 70,  134 => 42,  100 => 30,  70 => 21,  23 => 3,  250 => 106,  232 => 93,  226 => 91,  211 => 87,  206 => 83,  198 => 73,  194 => 50,  191 => 49,  188 => 73,  114 => 40,  110 => 34,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 149,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 134,  314 => 131,  312 => 98,  309 => 121,  305 => 95,  298 => 118,  294 => 123,  285 => 112,  283 => 119,  278 => 86,  268 => 112,  264 => 78,  258 => 107,  252 => 80,  247 => 98,  241 => 77,  229 => 73,  220 => 94,  214 => 69,  177 => 62,  169 => 60,  140 => 44,  132 => 16,  128 => 15,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 97,  240 => 85,  238 => 85,  235 => 75,  230 => 82,  227 => 81,  224 => 90,  221 => 77,  219 => 72,  217 => 86,  208 => 68,  204 => 82,  179 => 63,  159 => 55,  143 => 56,  135 => 53,  119 => 35,  102 => 31,  71 => 23,  67 => 18,  63 => 21,  59 => 15,  38 => 8,  94 => 28,  89 => 30,  85 => 28,  75 => 21,  68 => 18,  56 => 16,  87 => 22,  21 => 2,  26 => 5,  93 => 30,  88 => 29,  78 => 26,  46 => 10,  27 => 4,  44 => 11,  31 => 10,  28 => 2,  201 => 78,  196 => 90,  183 => 82,  171 => 61,  166 => 51,  163 => 65,  158 => 67,  156 => 66,  151 => 63,  142 => 45,  138 => 56,  136 => 43,  121 => 46,  117 => 43,  105 => 36,  91 => 29,  62 => 17,  49 => 19,  24 => 4,  25 => 4,  19 => 1,  79 => 18,  72 => 24,  69 => 18,  47 => 10,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 46,  145 => 54,  139 => 52,  131 => 52,  123 => 45,  120 => 27,  115 => 43,  111 => 37,  108 => 36,  101 => 33,  98 => 31,  96 => 31,  83 => 27,  74 => 17,  66 => 20,  55 => 14,  52 => 13,  50 => 15,  43 => 9,  41 => 13,  35 => 5,  32 => 4,  29 => 9,  209 => 65,  203 => 78,  199 => 61,  193 => 74,  189 => 59,  187 => 80,  182 => 71,  176 => 59,  173 => 66,  168 => 53,  164 => 48,  162 => 49,  154 => 58,  149 => 59,  147 => 60,  144 => 58,  141 => 48,  133 => 32,  130 => 40,  125 => 34,  122 => 43,  116 => 41,  112 => 29,  109 => 38,  106 => 33,  103 => 32,  99 => 32,  95 => 33,  92 => 27,  86 => 23,  82 => 21,  80 => 28,  73 => 19,  64 => 18,  60 => 17,  57 => 10,  54 => 12,  51 => 11,  48 => 11,  45 => 9,  42 => 8,  39 => 8,  36 => 13,  33 => 10,  30 => 5,);
    }
}
