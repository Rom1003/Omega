<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_57a0298899b92cbe0506ce8abd922b436709fe1f68d3233b625c8119bc4c09c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre_page' => array($this, 'block_titre_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb389cef457c13f3f0677748fa906892b9d45786464a455dd6fa6032a403e213 = $this->env->getExtension("native_profiler");
        $__internal_fb389cef457c13f3f0677748fa906892b9d45786464a455dd6fa6032a403e213->enter($__internal_fb389cef457c13f3f0677748fa906892b9d45786464a455dd6fa6032a403e213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        $this->displayBlock('titre_page', $context, $blocks);
        echo "   

    <div class=\"col-lg-12\" id=\"navigation\">
    \t<div class=\"col-sm-1\"></div>
    \t<div class=\"col-lg-2\"><a href=\"#\" id=\"profil\"><button class=\"btn-profil\">Mon profil</button></a></div>
    \t<div class=\"col-lg-2\"><a href=\"#\" id=\"avancement\"><button class=\"btn-profil\">Avancement de mes cours</button></a></div>
    \t<div class=\"col-lg-2\"><a href=\"#\" id=\"favoris\"><button class=\"btn-profil\">Mes cours favoris</button></a></div>
    \t<div class=\"col-lg-2\"><a href=\"#\" id=\"commentaires\"><button class=\"btn-profil\">Mes derniers commentaires</button></a></div>
    \t<div class=\"col-lg-2\"><a href=\"#\" id=\"resultats\"><button class=\"btn-profil\">Mes résultats d'évaluations</button></a></div>
    \t<div class=\"col-sm-1\"></div>
    </div>



    <div class=\"col-lg-12\" id=\"profil_contenu\">
    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mofifier votre mot de passe ?</a></p>
    </div>



";
        
        $__internal_fb389cef457c13f3f0677748fa906892b9d45786464a455dd6fa6032a403e213->leave($__internal_fb389cef457c13f3f0677748fa906892b9d45786464a455dd6fa6032a403e213_prof);

    }

    // line 2
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_c95429d7b3240868a8d3d8a3b8aeee1f193b801b3c499d95c224f95b692fac9d = $this->env->getExtension("native_profiler");
        $__internal_c95429d7b3240868a8d3d8a3b8aeee1f193b801b3c499d95c224f95b692fac9d->enter($__internal_c95429d7b3240868a8d3d8a3b8aeee1f193b801b3c499d95c224f95b692fac9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        echo "<h1>Profil de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h1><hr>";
        
        $__internal_c95429d7b3240868a8d3d8a3b8aeee1f193b801b3c499d95c224f95b692fac9d->leave($__internal_c95429d7b3240868a8d3d8a3b8aeee1f193b801b3c499d95c224f95b692fac9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 2,  53 => 19,  47 => 18,  41 => 17,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block titre_page %}<h1>Profil de {{app.user.username}}</h1><hr>{% endblock %}   */
/* */
/*     <div class="col-lg-12" id="navigation">*/
/*     	<div class="col-sm-1"></div>*/
/*     	<div class="col-lg-2"><a href="#" id="profil"><button class="btn-profil">Mon profil</button></a></div>*/
/*     	<div class="col-lg-2"><a href="#" id="avancement"><button class="btn-profil">Avancement de mes cours</button></a></div>*/
/*     	<div class="col-lg-2"><a href="#" id="favoris"><button class="btn-profil">Mes cours favoris</button></a></div>*/
/*     	<div class="col-lg-2"><a href="#" id="commentaires"><button class="btn-profil">Mes derniers commentaires</button></a></div>*/
/*     	<div class="col-lg-2"><a href="#" id="resultats"><button class="btn-profil">Mes résultats d'évaluations</button></a></div>*/
/*     	<div class="col-sm-1"></div>*/
/*     </div>*/
/* */
/* */
/* */
/*     <div class="col-lg-12" id="profil_contenu">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/*     <p><a href="{{ path('fos_user_resetting_request') }}">Mofifier votre mot de passe ?</a></p>*/
/*     </div>*/
/* */
/* */
/* */
/* */
