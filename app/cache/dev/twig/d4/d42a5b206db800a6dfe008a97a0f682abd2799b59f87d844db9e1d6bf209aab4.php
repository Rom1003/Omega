<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d65afdb6b027004ad9522e06a2282cb1a81e82b9974d21ead28aaed1458877a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_0ea74f7ed046ec7ec5c727c48201a3e7c6f84cb1a5987af4629a66dfb7109909 = $this->env->getExtension("native_profiler");
        $__internal_0ea74f7ed046ec7ec5c727c48201a3e7c6f84cb1a5987af4629a66dfb7109909->enter($__internal_0ea74f7ed046ec7ec5c727c48201a3e7c6f84cb1a5987af4629a66dfb7109909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ea74f7ed046ec7ec5c727c48201a3e7c6f84cb1a5987af4629a66dfb7109909->leave($__internal_0ea74f7ed046ec7ec5c727c48201a3e7c6f84cb1a5987af4629a66dfb7109909_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_563b8fcf821204f81fef5b96223f99be7b1cc7d2f1165243f22b94c89d81e02d = $this->env->getExtension("native_profiler");
        $__internal_563b8fcf821204f81fef5b96223f99be7b1cc7d2f1165243f22b94c89d81e02d->enter($__internal_563b8fcf821204f81fef5b96223f99be7b1cc7d2f1165243f22b94c89d81e02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<h1>Connexion</h1>

<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <div class=\"form-group\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t</div>

\t<div class=\"form-group\">
    <label for=\"username\"><!--";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "--></label>
    <input class=\"form-control\" placeholder=\"Identifiant\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div class=\"form-group\">
    <label for=\"password\"><!--";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "--></label>
    <input class=\"form-control\" placeholder=\"Mot de passe\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>

    <div class=\"form-group\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>

    <div class=\"col-sm-4\">
    <div class=\"form-group\">
    <input class=\"btn-login\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    </div>
       
    <div class=\"col-sm-8\">
    <div class=\"form-group\">
    ";
        // line 39
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 45
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><!--";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "-->C'est votre première connexion ?</a>
    ";
        }
        // line 47
        echo "    </div>
    </div>
    

    <div class=\"col-sm-12\">
    <hr> 
    <div class=\"form-group\">
    <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "<a/>
    </div>
    </div>
</form>
";
        
        $__internal_563b8fcf821204f81fef5b96223f99be7b1cc7d2f1165243f22b94c89d81e02d->leave($__internal_563b8fcf821204f81fef5b96223f99be7b1cc7d2f1165243f22b94c89d81e02d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 54,  126 => 47,  118 => 45,  112 => 42,  108 => 41,  103 => 40,  101 => 39,  92 => 33,  84 => 28,  75 => 22,  68 => 18,  64 => 17,  57 => 13,  52 => 11,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <h1>Connexion</h1>*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <div class="form-group">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/*     <label for="username"><!--{{ 'security.login.username'|trans }}--></label>*/
/*     <input class="form-control" placeholder="Identifiant" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*     <label for="password"><!--{{ 'security.login.password'|trans }}--></label>*/
/*     <input class="form-control" placeholder="Mot de passe" type="password" id="password" name="_password" required="required" />*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*     </div>*/
/* */
/*     <div class="col-sm-4">*/
/*     <div class="form-group">*/
/*     <input class="btn-login" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans}}" />*/
/*     </div>*/
/*     </div>*/
/*        */
/*     <div class="col-sm-8">*/
/*     <div class="form-group">*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*         <a href="{{ path('fos_user_security_logout') }}">*/
/*             {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*         </a>*/
/*     {% else %}*/
/*         <a href="{{ path('fos_user_registration_register') }}"><!--{{ 'layout.register'|trans({}, 'FOSUserBundle') }}-->C'est votre première connexion ?</a>*/
/*     {% endif %}*/
/*     </div>*/
/*     </div>*/
/*     */
/* */
/*     <div class="col-sm-12">*/
/*     <hr> */
/*     <div class="form-group">*/
/*     <a href="{{ path('fos_user_resetting_request') }}">{{ 'resetting.request.submit'|trans }}<a/>*/
/*     </div>*/
/*     </div>*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
