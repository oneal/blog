<?php

/* default/index.html.twig */
class __TwigTemplate_263f05ba84cd3c88d209fd0bbf7b21722ffe8e620944a6fb940dffa00afb6bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad2e0498a4c6675965e25857216d5bbeff45214b95db61a12b88e253462d3073 = $this->env->getExtension("native_profiler");
        $__internal_ad2e0498a4c6675965e25857216d5bbeff45214b95db61a12b88e253462d3073->enter($__internal_ad2e0498a4c6675965e25857216d5bbeff45214b95db61a12b88e253462d3073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad2e0498a4c6675965e25857216d5bbeff45214b95db61a12b88e253462d3073->leave($__internal_ad2e0498a4c6675965e25857216d5bbeff45214b95db61a12b88e253462d3073_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2efa63d9b48bfa99c1a4a7e4f33936efed80d478cf99dae2e025d0c39379ec7 = $this->env->getExtension("native_profiler");
        $__internal_f2efa63d9b48bfa99c1a4a7e4f33936efed80d478cf99dae2e025d0c39379ec7->enter($__internal_f2efa63d9b48bfa99c1a4a7e4f33936efed80d478cf99dae2e025d0c39379ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 7
            echo "                <p>
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "getTitle", array()), "html", null, true);
            echo "
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "getContent", array()), "html", null, true);
            echo "
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "getName", array()), "html", null, true);
            echo "
                ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "getFecha", array())), "html", null, true);
            echo "
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showDetail", array("show" => $this->getAttribute($context["entry"], "getId", array()), "slug" => $this->getAttribute($context["entry"], "getslug", array()))), "html", null, true);
            echo "\">Ver mas</a></p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_f2efa63d9b48bfa99c1a4a7e4f33936efed80d478cf99dae2e025d0c39379ec7->leave($__internal_f2efa63d9b48bfa99c1a4a7e4f33936efed80d478cf99dae2e025d0c39379ec7_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cecfb2e78395f5f3a5c980d6cdef75ac64e62b79745bb7514b35df8625a87ef = $this->env->getExtension("native_profiler");
        $__internal_5cecfb2e78395f5f3a5c980d6cdef75ac64e62b79745bb7514b35df8625a87ef->enter($__internal_5cecfb2e78395f5f3a5c980d6cdef75ac64e62b79745bb7514b35df8625a87ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5cecfb2e78395f5f3a5c980d6cdef75ac64e62b79745bb7514b35df8625a87ef->leave($__internal_5cecfb2e78395f5f3a5c980d6cdef75ac64e62b79745bb7514b35df8625a87ef_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  76 => 14,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  49 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             {% for entry in entries %}*/
/*                 <p>*/
/*                 {{ entry.getTitle }}*/
/*                 {{ entry.getContent }}*/
/*                 {{ entry.getName }}*/
/*                 {{ entry.getFecha | date }}*/
/*                 <a href="{{ path("showDetail", {'show':entry.getId,'slug':entry.getslug}) }}">Ver mas</a></p>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* */
