<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f9c7fbe374ed530fda950bcfc39b99f8e39060902e08443eff7ba811b9bc3dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("siteBundle::base.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "siteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9af63e0ff5f8f6eaef63df0195b7cd564727f4af6060128f16fa6253dc9f6be4 = $this->env->getExtension("native_profiler");
        $__internal_9af63e0ff5f8f6eaef63df0195b7cd564727f4af6060128f16fa6253dc9f6be4->enter($__internal_9af63e0ff5f8f6eaef63df0195b7cd564727f4af6060128f16fa6253dc9f6be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9af63e0ff5f8f6eaef63df0195b7cd564727f4af6060128f16fa6253dc9f6be4->leave($__internal_9af63e0ff5f8f6eaef63df0195b7cd564727f4af6060128f16fa6253dc9f6be4_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b27345d92d0dd0eb880d2932bdc2840b42f2a3a75fc2fb13599ea55e91f1d403 = $this->env->getExtension("native_profiler");
        $__internal_b27345d92d0dd0eb880d2932bdc2840b42f2a3a75fc2fb13599ea55e91f1d403->enter($__internal_b27345d92d0dd0eb880d2932bdc2840b42f2a3a75fc2fb13599ea55e91f1d403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b27345d92d0dd0eb880d2932bdc2840b42f2a3a75fc2fb13599ea55e91f1d403->leave($__internal_b27345d92d0dd0eb880d2932bdc2840b42f2a3a75fc2fb13599ea55e91f1d403_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% extends 'siteBundle::base.html.twig' %}*/
/* */
/* {% block contenu %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock contenu %}*/
/* */
