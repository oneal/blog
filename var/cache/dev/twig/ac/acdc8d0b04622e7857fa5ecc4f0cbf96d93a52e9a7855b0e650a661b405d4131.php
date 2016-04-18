<?php

/* base.html.twig */
class __TwigTemplate_0588e42a33857031a9999afc43ee81b9a615ee50e62346eb9551e138e7b13f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10abd0a07118cdb527338067e987f167872fb774f8d96ab406e52d0f134bd50a = $this->env->getExtension("native_profiler");
        $__internal_10abd0a07118cdb527338067e987f167872fb774f8d96ab406e52d0f134bd50a->enter($__internal_10abd0a07118cdb527338067e987f167872fb774f8d96ab406e52d0f134bd50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->loadTemplate("_header.html.twig", "base.html.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->loadTemplate("_footer.html.twig", "base.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_10abd0a07118cdb527338067e987f167872fb774f8d96ab406e52d0f134bd50a->leave($__internal_10abd0a07118cdb527338067e987f167872fb774f8d96ab406e52d0f134bd50a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64654fc31eddc69b2a13c4af647d09664ac57d1953ec7d19ac1496ebf14eee6b = $this->env->getExtension("native_profiler");
        $__internal_64654fc31eddc69b2a13c4af647d09664ac57d1953ec7d19ac1496ebf14eee6b->enter($__internal_64654fc31eddc69b2a13c4af647d09664ac57d1953ec7d19ac1496ebf14eee6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_64654fc31eddc69b2a13c4af647d09664ac57d1953ec7d19ac1496ebf14eee6b->leave($__internal_64654fc31eddc69b2a13c4af647d09664ac57d1953ec7d19ac1496ebf14eee6b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfea77f8b77a8639ab3896bf61f8e4dab6c57d510dbcb16cbd1df2cf30a97aae = $this->env->getExtension("native_profiler");
        $__internal_cfea77f8b77a8639ab3896bf61f8e4dab6c57d510dbcb16cbd1df2cf30a97aae->enter($__internal_cfea77f8b77a8639ab3896bf61f8e4dab6c57d510dbcb16cbd1df2cf30a97aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cfea77f8b77a8639ab3896bf61f8e4dab6c57d510dbcb16cbd1df2cf30a97aae->leave($__internal_cfea77f8b77a8639ab3896bf61f8e4dab6c57d510dbcb16cbd1df2cf30a97aae_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed74029b0d0a2c6d450ed7f5a4170dbcbfa6836e4ee528e77d5dc288a8367e5c = $this->env->getExtension("native_profiler");
        $__internal_ed74029b0d0a2c6d450ed7f5a4170dbcbfa6836e4ee528e77d5dc288a8367e5c->enter($__internal_ed74029b0d0a2c6d450ed7f5a4170dbcbfa6836e4ee528e77d5dc288a8367e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed74029b0d0a2c6d450ed7f5a4170dbcbfa6836e4ee528e77d5dc288a8367e5c->leave($__internal_ed74029b0d0a2c6d450ed7f5a4170dbcbfa6836e4ee528e77d5dc288a8367e5c_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4a1e86d3c25f41fc61f444bafb7246c920e456340c0afd8cf4a77151c080273 = $this->env->getExtension("native_profiler");
        $__internal_d4a1e86d3c25f41fc61f444bafb7246c920e456340c0afd8cf4a77151c080273->enter($__internal_d4a1e86d3c25f41fc61f444bafb7246c920e456340c0afd8cf4a77151c080273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d4a1e86d3c25f41fc61f444bafb7246c920e456340c0afd8cf4a77151c080273->leave($__internal_d4a1e86d3c25f41fc61f444bafb7246c920e456340c0afd8cf4a77151c080273_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  88 => 11,  77 => 6,  65 => 5,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% include "_header.html.twig" %}*/
/*         {% block body %}{% endblock %}*/
/*         {% include "_footer.html.twig" %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
