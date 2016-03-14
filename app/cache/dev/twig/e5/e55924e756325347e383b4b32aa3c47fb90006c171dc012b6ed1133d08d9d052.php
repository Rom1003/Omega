<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cc6720bd893181ddb4eb5ecf8d4736daff91d1ee9bac848bfc04017ecc1a53fa extends Twig_Template
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
        $__internal_e9a3e29b98c5a84722a6c9e980a6a5eaf7c1370f85ce7e35b4f82e7858774aaa = $this->env->getExtension("native_profiler");
        $__internal_e9a3e29b98c5a84722a6c9e980a6a5eaf7c1370f85ce7e35b4f82e7858774aaa->enter($__internal_e9a3e29b98c5a84722a6c9e980a6a5eaf7c1370f85ce7e35b4f82e7858774aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a3e29b98c5a84722a6c9e980a6a5eaf7c1370f85ce7e35b4f82e7858774aaa->leave($__internal_e9a3e29b98c5a84722a6c9e980a6a5eaf7c1370f85ce7e35b4f82e7858774aaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26d0e187de5c1295e7cc7191d5195b0e20d1897a4041a848c0c88fb948da38c0 = $this->env->getExtension("native_profiler");
        $__internal_26d0e187de5c1295e7cc7191d5195b0e20d1897a4041a848c0c88fb948da38c0->enter($__internal_26d0e187de5c1295e7cc7191d5195b0e20d1897a4041a848c0c88fb948da38c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26d0e187de5c1295e7cc7191d5195b0e20d1897a4041a848c0c88fb948da38c0->leave($__internal_26d0e187de5c1295e7cc7191d5195b0e20d1897a4041a848c0c88fb948da38c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_246b712062d535fa261a3cee11922e9e58c6806c8ecdd47c9c5ef46ed01832ac = $this->env->getExtension("native_profiler");
        $__internal_246b712062d535fa261a3cee11922e9e58c6806c8ecdd47c9c5ef46ed01832ac->enter($__internal_246b712062d535fa261a3cee11922e9e58c6806c8ecdd47c9c5ef46ed01832ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_246b712062d535fa261a3cee11922e9e58c6806c8ecdd47c9c5ef46ed01832ac->leave($__internal_246b712062d535fa261a3cee11922e9e58c6806c8ecdd47c9c5ef46ed01832ac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76e29ed0c7cc5d7fe7b8e9d544e045460836032e86607d325f455b9fae355de7 = $this->env->getExtension("native_profiler");
        $__internal_76e29ed0c7cc5d7fe7b8e9d544e045460836032e86607d325f455b9fae355de7->enter($__internal_76e29ed0c7cc5d7fe7b8e9d544e045460836032e86607d325f455b9fae355de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_76e29ed0c7cc5d7fe7b8e9d544e045460836032e86607d325f455b9fae355de7->leave($__internal_76e29ed0c7cc5d7fe7b8e9d544e045460836032e86607d325f455b9fae355de7_prof);

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
