<?php

/* base.twig */
class __TwigTemplate_da8d5123ab76bd4ad39f376f51e160ee1d297e1224204a3d9a055cf2286ce070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wrap\">
    ";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 3
        echo "</div>
";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 3,  23 => 2,  20 => 1,  163 => 82,  159 => 81,  152 => 77,  144 => 72,  140 => 71,  136 => 70,  128 => 65,  118 => 58,  108 => 51,  101 => 47,  86 => 35,  77 => 29,  72 => 27,  65 => 23,  60 => 21,  49 => 13,  39 => 10,  31 => 4,  28 => 3,);
    }
}
