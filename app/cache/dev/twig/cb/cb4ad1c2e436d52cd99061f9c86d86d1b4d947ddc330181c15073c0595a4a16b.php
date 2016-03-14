<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9b0705f5d23811b02107fad9bb05dd1a444454ced8924bc8143ae2770a6504f5 extends Twig_Template
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
        $__internal_711793416b4eac60919ff7ac6fbafc11e7a1464b0051771e33d96bc2dd4ba1d8 = $this->env->getExtension("native_profiler");
        $__internal_711793416b4eac60919ff7ac6fbafc11e7a1464b0051771e33d96bc2dd4ba1d8->enter($__internal_711793416b4eac60919ff7ac6fbafc11e7a1464b0051771e33d96bc2dd4ba1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711793416b4eac60919ff7ac6fbafc11e7a1464b0051771e33d96bc2dd4ba1d8->leave($__internal_711793416b4eac60919ff7ac6fbafc11e7a1464b0051771e33d96bc2dd4ba1d8_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7c38dc5b3d235a12c2574b328dd3b5acbc6894427b72666dcf4b074872757b43 = $this->env->getExtension("native_profiler");
        $__internal_7c38dc5b3d235a12c2574b328dd3b5acbc6894427b72666dcf4b074872757b43->enter($__internal_7c38dc5b3d235a12c2574b328dd3b5acbc6894427b72666dcf4b074872757b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7c38dc5b3d235a12c2574b328dd3b5acbc6894427b72666dcf4b074872757b43->leave($__internal_7c38dc5b3d235a12c2574b328dd3b5acbc6894427b72666dcf4b074872757b43_prof);

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
