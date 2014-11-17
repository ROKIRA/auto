<?php

/* AutoMainBundle:Default:comments.html.twig */
class __TwigTemplate_6c15b157b244dbd043774a99827cfcf35237c1c5eeb3cab59d1cc7fa2ea0c767 extends Twig_Template
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
        echo "<section class=\"comments\" id=\"comments\" data-car=\"";
        echo twig_escape_filter($this->env, (isset($context["car_id"]) ? $context["car_id"] : $this->getContext($context, "car_id")), "html", null, true);
        echo "\">
";
        // line 2
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method"))) {
            // line 3
            echo "    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("add_comment");
            echo "\" method=\"post\" class=\"add_comment_form\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">
        <div class=\"fields\">
            <h4 class=\"title\">Добавить комментарий</h4>
            <div class=\"field\">
                ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
            echo "
                ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
            echo "
                ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
            echo "
            </div>
            <div class=\"field\">
                ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
            echo "
                ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
            echo "
                ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
            echo "
            </div>
            <div class=\"field description_field\">
                ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text"), 'errors');
            echo "
                ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text"), 'label');
            echo "
                ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text"), 'widget', array("attr" => array("cols" => "30", "rows" => "3")));
            echo "
            </div>
        </div>
        <br class=\"clear\"/>
        <input type=\"submit\" value=\"Добавить\"/>
    </form>
";
        } else {
            // line 26
            echo "    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("add_comment");
            echo "\" method=\"post\" class=\"add_comment_form\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">
        <div class=\"fields\">
            <h4 class=\"title\">Добавить комментарий</h4>
            <div class=\"field\">
                ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
            echo "
                ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
            echo "
                ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method"), "readonly" => "readonly")));
            echo "
            </div>
            <div class=\"field description_field\">
                ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text"), 'errors');
            echo "
                ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text"), 'label');
            echo "
                ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text"), 'widget', array("attr" => array("cols" => "30", "rows" => "3")));
            echo "
            </div>
        </div>
        <br class=\"clear\"/>
        <input type=\"submit\" value=\"Добавить\"/>
    </form>
";
        }
        // line 44
        echo "
";
        // line 45
        if ((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) {
            // line 46
            echo "
    ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 48
                echo "
        ";
                // line 49
                if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "parentId") == 0)) {
                    // line 50
                    echo "            <div class=\"comment\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                    echo "\" data-level=\"1\">
                <div class=\"avatar\">
                    <img src=\"/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                </div>
                <div class=\"comment_content\">
                    <div class=\"comment_header\">
                        <p class=\"name\">";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "name"), "html", null, true);
                    echo "</p>
                        <p class=\"date_published\">";
                    // line 57
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                    echo "</p>
                        <br class=\"clear\"/>
                    </div>
                    <div class=\"comment_body\">
                        <p>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "text"), "html", null, true);
                    echo "</p>
                    </div>
                </div>
                <a class=\"comment_answer\" href=\"#\">Ответить</a>
                ";
                    // line 65
                    if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                        // line 66
                        echo "                    ";
                        if ((($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "idUser") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "idUser")))) {
                            // line 67
                            echo "                    <a class=\"comment_delete\" href=\"#\" data-id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                            echo "\">Удалить</a>
                    ";
                        }
                        // line 69
                        echo "                ";
                    }
                    // line 70
                    echo "            </div>

            ";
                    // line 72
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
                    foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                        // line 73
                        echo "                ";
                        if (($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "parentId") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"))) {
                            // line 74
                            echo "                    <div class=\"comment answer_comment\" data-id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "id"), "html", null, true);
                            echo "\" data-level=\"2\">
                        <div class=\"avatar\">
                            <img src=\"/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                        </div>
                        <div class=\"comment_content\">
                            <div class=\"comment_header\">
                                <p class=\"name\">";
                            // line 80
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "name"), "html", null, true);
                            echo "</p>
                                <p class=\"date_published\">";
                            // line 81
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                            echo "</p>
                                <br class=\"clear\"/>
                            </div>
                            <div class=\"comment_body\">
                                <p>";
                            // line 85
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "text"), "html", null, true);
                            echo "</p>
                            </div>
                        </div>
                        <a class=\"comment_answer\" href=\"#\">Ответить</a>
                        ";
                            // line 89
                            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                                // line 90
                                echo "                            ";
                                if ((($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "idUser") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "idUser")))) {
                                    // line 91
                                    echo "                            <a class=\"comment_delete\" href=\"#\">Удалить</a>
                            ";
                                }
                                // line 93
                                echo "                        ";
                            }
                            // line 94
                            echo "                    </div>

                    ";
                            // line 96
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
                            foreach ($context['_seq'] as $context["_key"] => $context["answer2"]) {
                                // line 97
                                echo "                        ";
                                if (($this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : $this->getContext($context, "answer2")), "parentId") == $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "id"))) {
                                    // line 98
                                    echo "                            <div class=\"comment answer2_comment\" data-id=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : $this->getContext($context, "answer2")), "id"), "html", null, true);
                                    echo "\" data-level=\"3\">
                                <div class=\"avatar\">
                                    <img src=\"/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                                </div>
                                <div class=\"comment_content\">
                                    <div class=\"comment_header\">
                                        <p class=\"name\">";
                                    // line 104
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : $this->getContext($context, "answer2")), "name"), "html", null, true);
                                    echo "</p>
                                        <p class=\"date_published\">";
                                    // line 105
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : $this->getContext($context, "answer2")), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                                    echo "</p>
                                        <br class=\"clear\"/>
                                    </div>
                                    <div class=\"comment_body\">
                                        <p>";
                                    // line 109
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : $this->getContext($context, "answer2")), "text"), "html", null, true);
                                    echo "</p>
                                    </div>
                                </div>
                                <a class=\"comment_answer\" href=\"#\">Ответить</a>
                                ";
                                    // line 113
                                    if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                                        // line 114
                                        echo "                                    ";
                                        if ((($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "idUser") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "idUser")))) {
                                            // line 115
                                            echo "                                    <a class=\"comment_delete\" href=\"#\">Удалить</a>
                                    ";
                                        }
                                        // line 117
                                        echo "                                ";
                                    }
                                    // line 118
                                    echo "                            </div>

                            ";
                                    // line 120
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
                                    foreach ($context['_seq'] as $context["_key"] => $context["answer3"]) {
                                        // line 121
                                        echo "                                ";
                                        if (($this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : $this->getContext($context, "answer3")), "parentId") == $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : $this->getContext($context, "answer2")), "id"))) {
                                            // line 122
                                            echo "                                    <div class=\"comment answer3_comment\" data-id=\"";
                                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : $this->getContext($context, "answer3")), "id"), "html", null, true);
                                            echo "\" data-level=\"4\">
                                        <div class=\"avatar\">
                                            <img src=\"/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                                        </div>
                                        <div class=\"comment_content\">
                                            <div class=\"comment_header\">
                                                <p class=\"name\">";
                                            // line 128
                                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : $this->getContext($context, "answer3")), "name"), "html", null, true);
                                            echo "</p>
                                                <p class=\"date_published\">";
                                            // line 129
                                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : $this->getContext($context, "answer3")), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                                            echo "</p>
                                                <br class=\"clear\"/>
                                            </div>
                                            <div class=\"comment_body\">
                                                <p>";
                                            // line 133
                                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : $this->getContext($context, "answer3")), "text"), "html", null, true);
                                            echo "</p>
                                            </div>
                                        </div>
                                        ";
                                            // line 136
                                            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                                                // line 137
                                                echo "                                            ";
                                                if ((($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "idUser") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "idUser")))) {
                                                    // line 138
                                                    echo "                                            <a class=\"comment_delete\" href=\"#\">Удалить</a>
                                            ";
                                                }
                                                // line 140
                                                echo "                                        ";
                                            }
                                            // line 141
                                            echo "                                    </div>

                                ";
                                        }
                                        // line 144
                                        echo "                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer3'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 145
                                    echo "                        ";
                                }
                                // line 146
                                echo "                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer2'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 147
                            echo "                ";
                        }
                        // line 148
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    echo "
        ";
                }
                // line 151
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 153
            echo "    <p>Комментариев пока нет!</p>
";
        }
        // line 155
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Default:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 155,  375 => 153,  368 => 151,  364 => 149,  358 => 148,  355 => 147,  349 => 146,  346 => 145,  340 => 144,  335 => 141,  332 => 140,  328 => 138,  325 => 137,  323 => 136,  317 => 133,  310 => 129,  306 => 128,  296 => 122,  293 => 121,  289 => 120,  285 => 118,  282 => 117,  278 => 115,  275 => 114,  273 => 113,  266 => 109,  259 => 105,  255 => 104,  245 => 98,  242 => 97,  238 => 96,  234 => 94,  231 => 93,  227 => 91,  224 => 90,  222 => 89,  215 => 85,  208 => 81,  204 => 80,  194 => 74,  191 => 73,  187 => 72,  183 => 70,  180 => 69,  174 => 67,  171 => 66,  169 => 65,  162 => 61,  155 => 57,  151 => 56,  141 => 50,  139 => 49,  136 => 48,  132 => 47,  129 => 46,  127 => 45,  124 => 44,  114 => 37,  110 => 36,  106 => 35,  100 => 32,  96 => 31,  92 => 30,  82 => 26,  72 => 19,  68 => 18,  64 => 17,  58 => 14,  54 => 13,  50 => 12,  44 => 9,  40 => 8,  36 => 7,  26 => 3,  24 => 2,  19 => 1,);
    }
}
