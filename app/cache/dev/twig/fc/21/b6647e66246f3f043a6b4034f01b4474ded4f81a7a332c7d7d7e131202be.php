<?php

/* AutoMainBundle:Form:fields.html.twig */
class __TwigTemplate_fc21b6647e66246f3f043a6b4034f01b4474ded4f81a7a332c7d7d7e131202be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tel_widget' => array($this, 'block_tel_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php

    ";
        // line 3
        $this->displayBlock('tel_widget', $context, $blocks);
    }

    public function block_tel_widget($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        ob_start();
        // line 5
        echo "            ";
        $context["type"] = "tel";
        // line 6
        echo "            ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "

        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "AutoMainBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  36 => 6,  33 => 5,  30 => 4,  24 => 3,  20 => 1,);
    }
}
