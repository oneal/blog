<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ceb2abcf8ee588aee9745c645a76fb80852716dd7fdfcfa6fe9de7a9023de05f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62edbb5d841ca80d403db31daef7e9d817c60de3de9bad56c1f74bd04faa7e66 = $this->env->getExtension("native_profiler");
        $__internal_62edbb5d841ca80d403db31daef7e9d817c60de3de9bad56c1f74bd04faa7e66->enter($__internal_62edbb5d841ca80d403db31daef7e9d817c60de3de9bad56c1f74bd04faa7e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62edbb5d841ca80d403db31daef7e9d817c60de3de9bad56c1f74bd04faa7e66->leave($__internal_62edbb5d841ca80d403db31daef7e9d817c60de3de9bad56c1f74bd04faa7e66_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39dfcd56ab7ae6161703a44cb5241b1c3e5596bc0f82797fad2c46bbaffb414d = $this->env->getExtension("native_profiler");
        $__internal_39dfcd56ab7ae6161703a44cb5241b1c3e5596bc0f82797fad2c46bbaffb414d->enter($__internal_39dfcd56ab7ae6161703a44cb5241b1c3e5596bc0f82797fad2c46bbaffb414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_39dfcd56ab7ae6161703a44cb5241b1c3e5596bc0f82797fad2c46bbaffb414d->leave($__internal_39dfcd56ab7ae6161703a44cb5241b1c3e5596bc0f82797fad2c46bbaffb414d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1c8a2a6b7ee68959839b62286194f44d1dcba02847e032a7fb2aa378d73d11c = $this->env->getExtension("native_profiler");
        $__internal_f1c8a2a6b7ee68959839b62286194f44d1dcba02847e032a7fb2aa378d73d11c->enter($__internal_f1c8a2a6b7ee68959839b62286194f44d1dcba02847e032a7fb2aa378d73d11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1c8a2a6b7ee68959839b62286194f44d1dcba02847e032a7fb2aa378d73d11c->leave($__internal_f1c8a2a6b7ee68959839b62286194f44d1dcba02847e032a7fb2aa378d73d11c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_03b98382be9e23448663706be53487db038ab72820cf1d02292a84c36e167a5a = $this->env->getExtension("native_profiler");
        $__internal_03b98382be9e23448663706be53487db038ab72820cf1d02292a84c36e167a5a->enter($__internal_03b98382be9e23448663706be53487db038ab72820cf1d02292a84c36e167a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_03b98382be9e23448663706be53487db038ab72820cf1d02292a84c36e167a5a->leave($__internal_03b98382be9e23448663706be53487db038ab72820cf1d02292a84c36e167a5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
