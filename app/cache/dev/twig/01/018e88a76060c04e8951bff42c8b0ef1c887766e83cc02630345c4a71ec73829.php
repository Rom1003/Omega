<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eb0f24cc7bb1559ec63b15c24245ffc3f5c7d604ec34a7e6af6313e8076e049a extends Twig_Template
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
        $__internal_57e37f36ee65ebf04dfc6e290ba7380cfb20c7c1195cf9b064012bdd980f6276 = $this->env->getExtension("native_profiler");
        $__internal_57e37f36ee65ebf04dfc6e290ba7380cfb20c7c1195cf9b064012bdd980f6276->enter($__internal_57e37f36ee65ebf04dfc6e290ba7380cfb20c7c1195cf9b064012bdd980f6276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e37f36ee65ebf04dfc6e290ba7380cfb20c7c1195cf9b064012bdd980f6276->leave($__internal_57e37f36ee65ebf04dfc6e290ba7380cfb20c7c1195cf9b064012bdd980f6276_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0fa2153332e8ff5ca806c2dc3bb67f352daf03a27c3a955c0f6a12a2d9d5185b = $this->env->getExtension("native_profiler");
        $__internal_0fa2153332e8ff5ca806c2dc3bb67f352daf03a27c3a955c0f6a12a2d9d5185b->enter($__internal_0fa2153332e8ff5ca806c2dc3bb67f352daf03a27c3a955c0f6a12a2d9d5185b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0fa2153332e8ff5ca806c2dc3bb67f352daf03a27c3a955c0f6a12a2d9d5185b->leave($__internal_0fa2153332e8ff5ca806c2dc3bb67f352daf03a27c3a955c0f6a12a2d9d5185b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_caf0f805a754bffbee7b0f80ffe3cd64d5723f480cd071b60128e996df734a1d = $this->env->getExtension("native_profiler");
        $__internal_caf0f805a754bffbee7b0f80ffe3cd64d5723f480cd071b60128e996df734a1d->enter($__internal_caf0f805a754bffbee7b0f80ffe3cd64d5723f480cd071b60128e996df734a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_caf0f805a754bffbee7b0f80ffe3cd64d5723f480cd071b60128e996df734a1d->leave($__internal_caf0f805a754bffbee7b0f80ffe3cd64d5723f480cd071b60128e996df734a1d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32a65962f80dd770ab834681dae5cf88f1e1db8515794b9b12538efe6588bb4d = $this->env->getExtension("native_profiler");
        $__internal_32a65962f80dd770ab834681dae5cf88f1e1db8515794b9b12538efe6588bb4d->enter($__internal_32a65962f80dd770ab834681dae5cf88f1e1db8515794b9b12538efe6588bb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_32a65962f80dd770ab834681dae5cf88f1e1db8515794b9b12538efe6588bb4d->leave($__internal_32a65962f80dd770ab834681dae5cf88f1e1db8515794b9b12538efe6588bb4d_prof);

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
