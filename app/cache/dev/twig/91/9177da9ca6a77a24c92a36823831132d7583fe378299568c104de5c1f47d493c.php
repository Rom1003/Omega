<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2a979e1c3b68489a00cc3d304312478bdadd45e6192f1e87320e74d9b8d6dea4 extends Twig_Template
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
        $__internal_d01fd2f8bd869dc21bbbabbb7a9248ccceb2e5d30dd11d676f074f6fd695a81b = $this->env->getExtension("native_profiler");
        $__internal_d01fd2f8bd869dc21bbbabbb7a9248ccceb2e5d30dd11d676f074f6fd695a81b->enter($__internal_d01fd2f8bd869dc21bbbabbb7a9248ccceb2e5d30dd11d676f074f6fd695a81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d01fd2f8bd869dc21bbbabbb7a9248ccceb2e5d30dd11d676f074f6fd695a81b->leave($__internal_d01fd2f8bd869dc21bbbabbb7a9248ccceb2e5d30dd11d676f074f6fd695a81b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ff4648aa342a4c690dd386d0433fad13ed72a6ce8e8a43afd2e53a2552ef422 = $this->env->getExtension("native_profiler");
        $__internal_7ff4648aa342a4c690dd386d0433fad13ed72a6ce8e8a43afd2e53a2552ef422->enter($__internal_7ff4648aa342a4c690dd386d0433fad13ed72a6ce8e8a43afd2e53a2552ef422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ff4648aa342a4c690dd386d0433fad13ed72a6ce8e8a43afd2e53a2552ef422->leave($__internal_7ff4648aa342a4c690dd386d0433fad13ed72a6ce8e8a43afd2e53a2552ef422_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c84ab2adc0f4d20df3dc1c42169da180349ed3ccbf10b642dca6a0e92bce26d9 = $this->env->getExtension("native_profiler");
        $__internal_c84ab2adc0f4d20df3dc1c42169da180349ed3ccbf10b642dca6a0e92bce26d9->enter($__internal_c84ab2adc0f4d20df3dc1c42169da180349ed3ccbf10b642dca6a0e92bce26d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c84ab2adc0f4d20df3dc1c42169da180349ed3ccbf10b642dca6a0e92bce26d9->leave($__internal_c84ab2adc0f4d20df3dc1c42169da180349ed3ccbf10b642dca6a0e92bce26d9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_673ef798d7a4b9d62f933fd5d10b6a8afc700596a9adcd37f1d21df89c96794f = $this->env->getExtension("native_profiler");
        $__internal_673ef798d7a4b9d62f933fd5d10b6a8afc700596a9adcd37f1d21df89c96794f->enter($__internal_673ef798d7a4b9d62f933fd5d10b6a8afc700596a9adcd37f1d21df89c96794f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_673ef798d7a4b9d62f933fd5d10b6a8afc700596a9adcd37f1d21df89c96794f->leave($__internal_673ef798d7a4b9d62f933fd5d10b6a8afc700596a9adcd37f1d21df89c96794f_prof);

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
