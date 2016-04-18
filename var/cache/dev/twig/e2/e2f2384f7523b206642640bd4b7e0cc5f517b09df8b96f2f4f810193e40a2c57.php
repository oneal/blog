<?php

/* default/detailEntry.html.twig */
class __TwigTemplate_77b9643ec7de0618667b608f5d1a754e654dbee477912ddaf4f1d697b8080ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/detailEntry.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a449e68ef9967bdce80981d8efe91b9762663ea3c725c99d3076f27ecde18d7 = $this->env->getExtension("native_profiler");
        $__internal_6a449e68ef9967bdce80981d8efe91b9762663ea3c725c99d3076f27ecde18d7->enter($__internal_6a449e68ef9967bdce80981d8efe91b9762663ea3c725c99d3076f27ecde18d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/detailEntry.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a449e68ef9967bdce80981d8efe91b9762663ea3c725c99d3076f27ecde18d7->leave($__internal_6a449e68ef9967bdce80981d8efe91b9762663ea3c725c99d3076f27ecde18d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aad03d7eebd812b149ed2485a7e67e067c9d16f6c33becc3618a1e0d6a35e8b = $this->env->getExtension("native_profiler");
        $__internal_8aad03d7eebd812b149ed2485a7e67e067c9d16f6c33becc3618a1e0d6a35e8b->enter($__internal_8aad03d7eebd812b149ed2485a7e67e067c9d16f6c33becc3618a1e0d6a35e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">

        </div>
    </div>
";
        
        $__internal_8aad03d7eebd812b149ed2485a7e67e067c9d16f6c33becc3618a1e0d6a35e8b->leave($__internal_8aad03d7eebd812b149ed2485a7e67e067c9d16f6c33becc3618a1e0d6a35e8b_prof);

    }

    public function getTemplateName()
    {
        return "default/detailEntry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
