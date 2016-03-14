<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_54b2a4ca7fd124ec2d391dad4ae905879fdf30eba051f9e1fe7a3c9eb67765bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_baa043d8c336b704b027d49a38de788c25fc350b96dc18643bcc96cf0f757e1b = $this->env->getExtension("native_profiler");
        $__internal_baa043d8c336b704b027d49a38de788c25fc350b96dc18643bcc96cf0f757e1b->enter($__internal_baa043d8c336b704b027d49a38de788c25fc350b96dc18643bcc96cf0f757e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baa043d8c336b704b027d49a38de788c25fc350b96dc18643bcc96cf0f757e1b->leave($__internal_baa043d8c336b704b027d49a38de788c25fc350b96dc18643bcc96cf0f757e1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72f30c944e15103de67084432986a0d3f51498ac8d4f597fd381f25150ca0e9c = $this->env->getExtension("native_profiler");
        $__internal_72f30c944e15103de67084432986a0d3f51498ac8d4f597fd381f25150ca0e9c->enter($__internal_72f30c944e15103de67084432986a0d3f51498ac8d4f597fd381f25150ca0e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_72f30c944e15103de67084432986a0d3f51498ac8d4f597fd381f25150ca0e9c->leave($__internal_72f30c944e15103de67084432986a0d3f51498ac8d4f597fd381f25150ca0e9c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
