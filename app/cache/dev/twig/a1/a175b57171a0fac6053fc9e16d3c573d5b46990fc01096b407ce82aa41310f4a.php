<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45c99509f2c90f2491fd1b1122741f0e2a136dd1a18a8d8ff73e120f2c825b34 extends Twig_Template
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
        $__internal_c57c3c4560d94b8344d654dda57f53ae99fb4af2ba5e46fe627fee92713d8ef2 = $this->env->getExtension("native_profiler");
        $__internal_c57c3c4560d94b8344d654dda57f53ae99fb4af2ba5e46fe627fee92713d8ef2->enter($__internal_c57c3c4560d94b8344d654dda57f53ae99fb4af2ba5e46fe627fee92713d8ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c57c3c4560d94b8344d654dda57f53ae99fb4af2ba5e46fe627fee92713d8ef2->leave($__internal_c57c3c4560d94b8344d654dda57f53ae99fb4af2ba5e46fe627fee92713d8ef2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdc241de94323f55cd82e911c332faa17e4b489b00f36166997106b56e845f88 = $this->env->getExtension("native_profiler");
        $__internal_bdc241de94323f55cd82e911c332faa17e4b489b00f36166997106b56e845f88->enter($__internal_bdc241de94323f55cd82e911c332faa17e4b489b00f36166997106b56e845f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bdc241de94323f55cd82e911c332faa17e4b489b00f36166997106b56e845f88->leave($__internal_bdc241de94323f55cd82e911c332faa17e4b489b00f36166997106b56e845f88_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25db26521bc7fe5283c946c24d0f5fe996e04cf169217ea6febf617de116881e = $this->env->getExtension("native_profiler");
        $__internal_25db26521bc7fe5283c946c24d0f5fe996e04cf169217ea6febf617de116881e->enter($__internal_25db26521bc7fe5283c946c24d0f5fe996e04cf169217ea6febf617de116881e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_25db26521bc7fe5283c946c24d0f5fe996e04cf169217ea6febf617de116881e->leave($__internal_25db26521bc7fe5283c946c24d0f5fe996e04cf169217ea6febf617de116881e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_325697654cd337a5312d4f1b0bb4e34fee24021552fab536242a0693de9f6f83 = $this->env->getExtension("native_profiler");
        $__internal_325697654cd337a5312d4f1b0bb4e34fee24021552fab536242a0693de9f6f83->enter($__internal_325697654cd337a5312d4f1b0bb4e34fee24021552fab536242a0693de9f6f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_325697654cd337a5312d4f1b0bb4e34fee24021552fab536242a0693de9f6f83->leave($__internal_325697654cd337a5312d4f1b0bb4e34fee24021552fab536242a0693de9f6f83_prof);

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
