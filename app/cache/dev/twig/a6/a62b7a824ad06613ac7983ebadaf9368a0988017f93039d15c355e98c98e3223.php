<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_564cbbfd9657e43ef29378050dda99b5954a6ef0347f7389c6db3fa16400fa52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abea2d12d5acbbdb367a27165549c4e94ff6773275e431bd0f3250695d9ffa09 = $this->env->getExtension("native_profiler");
        $__internal_abea2d12d5acbbdb367a27165549c4e94ff6773275e431bd0f3250695d9ffa09->enter($__internal_abea2d12d5acbbdb367a27165549c4e94ff6773275e431bd0f3250695d9ffa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<h1>Première connexion</h1>

<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"post\">
                <div class=\"form-group\">
        \t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username*")));
        echo "
        \t\t</div>
        \t\t<div class=\"form-group\">
        \t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "E-mail*")));
        echo "
        \t\t</div>
        \t\t<div class=\"form-group\">
        \t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password*")));
        echo "
        \t\t</div>
        \t\t<div class=\"form-group\">
        \t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Verification*")));
        echo "
        \t\t</div>
        \t\t\t
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <p>* : champs obligatoires</p>
            <p>N'oublier pas de vérifier votre boîte aux lettres pour valider votre compte !</p>
\t             \t<div class=\"col-sm-4\">
\t\t             \t<div class=\"form-group\">
\t\t        \t\t<input class=\"btn-login\" type=\"submit\" value=\"S'enregistrer\" />
\t\t        \t\t<!--<input class=\"btn-login\" type=\"submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit"), "html", null, true);
        echo "\" />\tau k ou-->
\t\t    \t\t\t</div>
\t    \t\t\t</div>
\t             \t<div class=\"col-sm-8\">
\t    \t\t
\t\t\t\t\t    ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "\t\t\t\t\t        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
\t\t\t\t\t        <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t    ";
        } else {
            // line 32
            echo "\t\t\t\t\t        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><!--";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "-->Vous avez déja un compte ?</a>
\t\t\t\t\t    ";
        }
        // line 34
        echo "\t\t\t\t\t
\t\t\t\t\t</div>


    \t\t\t<!-- BASE AU K OU
";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit"), "html", null, true);
        echo "\" />
    </div>
";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t-->
";
        
        $__internal_abea2d12d5acbbdb367a27165549c4e94ff6773275e431bd0f3250695d9ffa09->leave($__internal_abea2d12d5acbbdb367a27165549c4e94ff6773275e431bd0f3250695d9ffa09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 44,  118 => 42,  113 => 40,  109 => 39,  102 => 34,  94 => 32,  87 => 30,  82 => 29,  80 => 28,  72 => 23,  63 => 17,  55 => 14,  47 => 11,  39 => 8,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <h1>Première connexion</h1>*/
/* */
/* <form action="{{ path("fos_user_registration_register") }}" method="post">*/
/*                 <div class="form-group">*/
/*         		{{ form_errors(form.username) }} {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder':'Username*'}}) }}*/
/*         		</div>*/
/*         		<div class="form-group">*/
/*         		{{ form_errors(form.email) }} {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder':'E-mail*'}}) }}*/
/*         		</div>*/
/*         		<div class="form-group">*/
/*         		{{ form_errors(form.plainPassword.first) }} {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder':'Password*'}}) }}*/
/*         		</div>*/
/*         		<div class="form-group">*/
/*         		{{ form_errors(form.plainPassword.second) }} {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder':'Verification*'}}) }}*/
/*         		</div>*/
/*         			*/
/*   {{ form_rest(form) }}*/
/*                 <p>* : champs obligatoires</p>*/
/*             <p>N'oublier pas de vérifier votre boîte aux lettres pour valider votre compte !</p>*/
/* 	             	<div class="col-sm-4">*/
/* 		             	<div class="form-group">*/
/* 		        		<input class="btn-login" type="submit" value="S'enregistrer" />*/
/* 		        		<!--<input class="btn-login" type="submit" value="{{ 'registration.submit'|trans }}" />	au k ou-->*/
/* 		    			</div>*/
/* 	    			</div>*/
/* 	             	<div class="col-sm-8">*/
/* 	    		*/
/* 					    {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 					        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/* 					        <a href="{{ path('fos_user_security_logout') }}">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>*/
/* 					    {% else %}*/
/* 					        <a href="{{ path('fos_user_security_login') }}"><!--{{ 'layout.login'|trans({}, 'FOSUserBundle') }}-->Vous avez déja un compte ?</a>*/
/* 					    {% endif %}*/
/* 					*/
/* 					</div>*/
/* */
/* */
/*     			<!-- BASE AU K OU*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* 				-->*/
/* */
