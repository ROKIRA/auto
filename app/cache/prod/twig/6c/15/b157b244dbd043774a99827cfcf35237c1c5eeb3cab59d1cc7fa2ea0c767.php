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
        echo twig_escape_filter($this->env, (isset($context["car_id"]) ? $context["car_id"] : null), "html", null, true);
        echo "\">
";
        // line 2
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_name"), "method"))) {
            // line 3
            echo "    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("add_comment");
            echo "\" method=\"post\" class=\"add_comment_form\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo ">
        <div class=\"fields\">
            <h4 class=\"title\">Добавить комментарий</h4>
            <div class=\"field\">
                ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'errors');
            echo "
                ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'label');
            echo "
                ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'widget');
            echo "
            </div>
            <div class=\"field\">
                ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors');
            echo "
                ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'label');
            echo "
                ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
            echo "
            </div>
            <div class=\"field description_field\">
                ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'errors');
            echo "
                ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'label');
            echo "
                ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'widget', array("attr" => array("cols" => "30", "rows" => "3")));
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo ">
        <div class=\"fields\">
            <h4 class=\"title\">Добавить комментарий</h4>
            <div class=\"field\">
                ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'errors');
            echo "
                ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'label');
            echo "
                ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'widget', array("attr" => array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_name"), "method"), "readonly" => "readonly")));
            echo "
            </div>
            <div class=\"field description_field\">
                ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'errors');
            echo "
                ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'label');
            echo "
                ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "text"), 'widget', array("attr" => array("cols" => "30", "rows" => "3")));
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
        if ((isset($context["comments"]) ? $context["comments"] : null)) {
            // line 46
            echo "
    ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 48
                echo "
        ";
                // line 49
                if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "parentId") == 0)) {
                    // line 50
                    echo "            <div class=\"comment\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id"), "html", null, true);
                    echo "\" data-level=\"1\">
                <div class=\"avatar\">
                    <img src=\"/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                </div>
                <div class=\"comment_content\">
                    <div class=\"comment_header\">
                        <p class=\"name\">";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "name"), "html", null, true);
                    echo "</p>
                        <p class=\"date_published\">";
                    // line 57
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                    echo "</p>
                        <br class=\"clear\"/>
                    </div>
                    <div class=\"comment_body\">
                        <p>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "text"), "html", null, true);
                    echo "</p>
                    </div>
                </div>
                <a class=\"comment_answer\" href=\"#\">Ответить</a>
                ";
                    // line 65
                    if ((isset($context["user"]) ? $context["user"] : null)) {
                        // line 66
                        echo "                    ";
                        if ((($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "idUser") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_id"), "method")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "idUser")))) {
                            // line 67
                            echo "                    <a class=\"comment_delete\" href=\"#\">Удалить</a>
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
                    $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                        // line 73
                        echo "                ";
                        if (($this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "parentId") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id"))) {
                            // line 74
                            echo "                    <div class=\"comment answer_comment\" data-id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "id"), "html", null, true);
                            echo "\" data-level=\"2\">
                        <div class=\"avatar\">
                            <img src=\"/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                        </div>
                        <div class=\"comment_content\">
                            <div class=\"comment_header\">
                                <p class=\"name\">";
                            // line 80
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "name"), "html", null, true);
                            echo "</p>
                                <p class=\"date_published\">";
                            // line 81
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                            echo "</p>
                                <br class=\"clear\"/>
                            </div>
                            <div class=\"comment_body\">
                                <p>";
                            // line 85
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "text"), "html", null, true);
                            echo "</p>
                            </div>
                        </div>
                        <a class=\"comment_answer\" href=\"#\">Ответить</a>
                        ";
                            // line 89
                            if ((isset($context["user"]) ? $context["user"] : null)) {
                                // line 90
                                echo "                            ";
                                if ((($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "idUser") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_id"), "method")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "idUser")))) {
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
                            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["answer2"]) {
                                // line 97
                                echo "                        ";
                                if (($this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "parentId") == $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), "id"))) {
                                    // line 98
                                    echo "                            <div class=\"comment answer2_comment\" data-id=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "id"), "html", null, true);
                                    echo "\" data-level=\"3\">
                                <div class=\"avatar\">
                                    <img src=\"/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                                </div>
                                <div class=\"comment_content\">
                                    <div class=\"comment_header\">
                                        <p class=\"name\">";
                                    // line 104
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "name"), "html", null, true);
                                    echo "</p>
                                        <p class=\"date_published\">";
                                    // line 105
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                                    echo "</p>
                                        <br class=\"clear\"/>
                                    </div>
                                    <div class=\"comment_body\">
                                        <p>";
                                    // line 109
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "text"), "html", null, true);
                                    echo "</p>
                                    </div>
                                </div>
                                <a class=\"comment_answer\" href=\"#\">Ответить</a>
                                ";
                                    // line 113
                                    if ((isset($context["user"]) ? $context["user"] : null)) {
                                        // line 114
                                        echo "                                    ";
                                        if ((($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "idUser") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_id"), "method")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "idUser")))) {
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
                                    $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["answer3"]) {
                                        // line 121
                                        echo "                                ";
                                        if (($this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : null), "parentId") == $this->getAttribute((isset($context["answer2"]) ? $context["answer2"] : null), "id"))) {
                                            // line 122
                                            echo "                                    <div class=\"comment answer3_comment\" data-id=\"";
                                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : null), "id"), "html", null, true);
                                            echo "\" data-level=\"4\">
                                        <div class=\"avatar\">
                                            <img src=\"/bundles/auto/images/avatar-50x50.gif\" alt=\"avatar\" />
                                        </div>
                                        <div class=\"comment_content\">
                                            <div class=\"comment_header\">
                                                <p class=\"name\">";
                                            // line 128
                                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : null), "name"), "html", null, true);
                                            echo "</p>
                                                <p class=\"date_published\">";
                                            // line 129
                                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : null), "dateAdd"), "d.m.Y, H:i"), "html", null, true);
                                            echo "</p>
                                                <br class=\"clear\"/>
                                            </div>
                                            <div class=\"comment_body\">
                                                <p>";
                                            // line 133
                                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer3"]) ? $context["answer3"] : null), "text"), "html", null, true);
                                            echo "</p>
                                            </div>
                                        </div>
                                        ";
                                            // line 136
                                            if ((isset($context["user"]) ? $context["user"] : null)) {
                                                // line 137
                                                echo "                                            ";
                                                if ((($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "idUser") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user_id"), "method")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id") == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "idUser")))) {
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
        return array (  377 => 155,  373 => 153,  366 => 151,  362 => 149,  356 => 148,  353 => 147,  347 => 146,  344 => 145,  338 => 144,  333 => 141,  330 => 140,  326 => 138,  323 => 137,  321 => 136,  315 => 133,  308 => 129,  304 => 128,  294 => 122,  291 => 121,  287 => 120,  283 => 118,  280 => 117,  276 => 115,  273 => 114,  271 => 113,  264 => 109,  257 => 105,  253 => 104,  232 => 94,  229 => 93,  222 => 90,  220 => 89,  206 => 81,  192 => 74,  189 => 73,  185 => 72,  178 => 69,  174 => 67,  171 => 66,  169 => 65,  162 => 61,  155 => 57,  151 => 56,  141 => 50,  139 => 49,  129 => 46,  127 => 45,  124 => 44,  106 => 35,  72 => 19,  68 => 18,  64 => 17,  58 => 14,  54 => 13,  44 => 9,  40 => 8,  26 => 3,  24 => 2,  84 => 28,  79 => 27,  73 => 25,  66 => 22,  55 => 19,  53 => 18,  36 => 7,  30 => 5,  25 => 4,  23 => 3,  19 => 1,  243 => 98,  240 => 97,  236 => 96,  233 => 85,  228 => 79,  225 => 91,  219 => 81,  217 => 78,  213 => 85,  210 => 75,  204 => 87,  202 => 80,  199 => 84,  197 => 75,  191 => 73,  187 => 50,  184 => 49,  181 => 70,  166 => 51,  164 => 48,  145 => 31,  142 => 30,  136 => 48,  132 => 47,  128 => 15,  123 => 14,  120 => 13,  114 => 37,  110 => 36,  105 => 8,  102 => 7,  96 => 31,  85 => 96,  82 => 26,  80 => 73,  76 => 71,  71 => 24,  69 => 67,  63 => 63,  48 => 19,  46 => 16,  41 => 12,  39 => 7,  103 => 26,  100 => 32,  97 => 24,  92 => 30,  90 => 24,  86 => 22,  81 => 19,  74 => 15,  70 => 14,  65 => 12,  61 => 21,  57 => 10,  50 => 12,  37 => 6,  35 => 6,  32 => 4,  29 => 2,);
    }
}
