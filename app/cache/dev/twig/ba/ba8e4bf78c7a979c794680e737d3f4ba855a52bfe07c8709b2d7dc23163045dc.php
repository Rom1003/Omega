<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_dfbc190d1fe59d53b24dedb59fb39cb670c8ec19a5a164c25f721cc8a21b964f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0248bfbe0e46e7590f6e8b99d88326b322bb586ec849af985a19b611dbc9c5d6 = $this->env->getExtension("native_profiler");
        $__internal_0248bfbe0e46e7590f6e8b99d88326b322bb586ec849af985a19b611dbc9c5d6->enter($__internal_0248bfbe0e46e7590f6e8b99d88326b322bb586ec849af985a19b611dbc9c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0248bfbe0e46e7590f6e8b99d88326b322bb586ec849af985a19b611dbc9c5d6->leave($__internal_0248bfbe0e46e7590f6e8b99d88326b322bb586ec849af985a19b611dbc9c5d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e18fc5648961c19ae2e256af850ce13d4e456c043580764c29c8174ba565a96d = $this->env->getExtension("native_profiler");
        $__internal_e18fc5648961c19ae2e256af850ce13d4e456c043580764c29c8174ba565a96d->enter($__internal_e18fc5648961c19ae2e256af850ce13d4e456c043580764c29c8174ba565a96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e18fc5648961c19ae2e256af850ce13d4e456c043580764c29c8174ba565a96d->leave($__internal_e18fc5648961c19ae2e256af850ce13d4e456c043580764c29c8174ba565a96d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
