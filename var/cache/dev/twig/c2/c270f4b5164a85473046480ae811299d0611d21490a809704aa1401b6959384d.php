<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4e8b44c469d15002fa75f67d15aba14975683263a306459d844fdaf9e98c83c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef43a345e4759c860b524ae8180bf1ee8b669ec962db01d32f6ea13d5315aa1c = $this->env->getExtension("native_profiler");
        $__internal_ef43a345e4759c860b524ae8180bf1ee8b669ec962db01d32f6ea13d5315aa1c->enter($__internal_ef43a345e4759c860b524ae8180bf1ee8b669ec962db01d32f6ea13d5315aa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef43a345e4759c860b524ae8180bf1ee8b669ec962db01d32f6ea13d5315aa1c->leave($__internal_ef43a345e4759c860b524ae8180bf1ee8b669ec962db01d32f6ea13d5315aa1c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf09a38397dfd2148c36e929bf22ab4dc29773ad46ee058b2517fcbb9be29c4e = $this->env->getExtension("native_profiler");
        $__internal_bf09a38397dfd2148c36e929bf22ab4dc29773ad46ee058b2517fcbb9be29c4e->enter($__internal_bf09a38397dfd2148c36e929bf22ab4dc29773ad46ee058b2517fcbb9be29c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bf09a38397dfd2148c36e929bf22ab4dc29773ad46ee058b2517fcbb9be29c4e->leave($__internal_bf09a38397dfd2148c36e929bf22ab4dc29773ad46ee058b2517fcbb9be29c4e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86ef7362efca9e4959bbd85cc395373abb4622a0b8f66cb757fb5192a574dd78 = $this->env->getExtension("native_profiler");
        $__internal_86ef7362efca9e4959bbd85cc395373abb4622a0b8f66cb757fb5192a574dd78->enter($__internal_86ef7362efca9e4959bbd85cc395373abb4622a0b8f66cb757fb5192a574dd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86ef7362efca9e4959bbd85cc395373abb4622a0b8f66cb757fb5192a574dd78->leave($__internal_86ef7362efca9e4959bbd85cc395373abb4622a0b8f66cb757fb5192a574dd78_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9499c2a13591feae4935b0e139da092ec31c30be8001651acebb43ccdcf33f8 = $this->env->getExtension("native_profiler");
        $__internal_f9499c2a13591feae4935b0e139da092ec31c30be8001651acebb43ccdcf33f8->enter($__internal_f9499c2a13591feae4935b0e139da092ec31c30be8001651acebb43ccdcf33f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9499c2a13591feae4935b0e139da092ec31c30be8001651acebb43ccdcf33f8->leave($__internal_f9499c2a13591feae4935b0e139da092ec31c30be8001651acebb43ccdcf33f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
