<?php

/* siteBundle::base.html.twig */
class __TwigTemplate_e836ba2c161b2148c77868d51ed2bee3c54f374790ed4dae24d593d80612a800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'filtre' => array($this, 'block_filtre'),
            'titre_page' => array($this, 'block_titre_page'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35635cd8351ff9a768286911549a0bab9b4e1a3b34a43572b9abec5746056848 = $this->env->getExtension("native_profiler");
        $__internal_35635cd8351ff9a768286911549a0bab9b4e1a3b34a43572b9abec5746056848->enter($__internal_35635cd8351ff9a768286911549a0bab9b4e1a3b34a43572b9abec5746056848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "siteBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
    <meta charset=\"utf8\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">

</head>

<body>
    <div id=\"global\">
        <div class=\"container-fluid\">
            <div class=\"col-lg-12\">
                <div class=\"col-lg-2 col-sm-3\" id=\"leftside\">
                    <nav class=\"navbar navbar-default\" id=\"nav\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/login.png"), "html", null, true);
        echo "\" class=\"center-block img-responsive img-circle\">
                            <h3 class=\"text-center\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h3>
                            <hr>
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li id=\"show\">
                                    <div class=\"input-group\">
                                      <input type=\"text\" class=\"form-control\" placeholder=\"Recherche...\">
                                      <span class=\"input-group-btn\">
                                        <button class=\"btn btn-default\" type=\"button\">Go!</button>
                                      </span>
                                    </div>
                                    <hr>
                                </li>
                                <li class=\"active\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("site_homepage");
        echo "\">ACCUEIL<span class=\"sr-only\">(current)</span></a></li>
                                <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("cours_liste");
        echo "\">COURS</a></li>
                                <!--<li class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("cours_liste");
        echo "\">COURS
                                        <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Anglais</a></li>
                                        <li><a href=\"#\">Communication</a></li>
                                        <li><a href=\"#\">Esthétique</a></li>
                                        <li><a href=\"#\">Métiers numériques</a></li>
                                        <li><a href=\"#\">Conduite de projet</a></li>
                                        <li><a href=\"#\">PPP</a></li>
                                        <li><a href=\"#\">Environnement juridique</a></li>
                                        <li><a href=\"#\">Culture scientifique</a></li>
                                        <li><a href=\"#\">Développement</a></li>
                                        <li><a href=\"#\">Programmation objet</a></li>
                                        <li><a href=\"#\">Réseau</a></li>
                                        <li><a href=\"#\">Infographie</a></li>
                                        <li><a href=\"#\">Intégration</a></li>
                                        <li><a href=\"#\">Audiovisuelle</a></li>
                                        <li><a href=\"#\">PHP</a></li>
                                    </ul>
                                </li>-->
                            </ul>
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">ÉVALUATIONS
                                        <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Exercices</a></li>
                                        <li><a href=\"#\">Exercices corrigés</a></li>
                                        <li><a href=\"#\">Quizz</a></li>
                                    </ul>
                                </li>          
                            </ul>
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">GÉRER MES COURS
                                        <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Ajouter</a></li>
                                        <li><a href=\"#\">Editer</a></li>
                                        <li><a href=\"#\">Supprimer</a></li>
                                    </ul>
                                </li>          
                            </ul>
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li id=\"hide\">
                                    <hr>
                                    <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profil</a>
                                    <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                                </li>    
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class=\"col-lg-10 col-sm-9\" id=\"nav-header\">
                    <div class=\"col-lg-12 nav navbar-static\">
                        <div class=\"col-lg-7 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"col-xs-2\">
                                <div class=\"bouton\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/search.svg"), "html", null, true);
        echo "\" alt=\"\"></div>
                            </div>
                            <div class=\"col-lg-10 col-sm-10 col-xs-10\">
                                <input type=\"search\" class=\"input-sm form-control chercher\" placeholder=\"Rechercher un cour, une vidéo, un exercice...\">
                            </div>
                        </div>
                        <div class=\"col-lg-5 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"col-md-8 col-sm-6 col-xs-6 reseau\">
                                <a href=\"#\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/fb1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <a href=\"#\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/tw1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <a href=\"#\"><img height=\"70px\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo_mmi.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                            <div class=\"col-md-4 col-sm-6 col-xs-6 connexion\">
                                <a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/user.svg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/power.svg"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 124
        $this->displayBlock('filtre', $context, $blocks);
        // line 125
        echo "                
            <section>

                <div class=\"col-lg-10 col-sm-9\" id=\"contenu\">
                <div class=\"col-lg-12\">
                ";
        // line 130
        $this->displayBlock('titre_page', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 132
        echo "                </div>
                </div>
            </section>
                <footer>
                    <div class=\"col-lg-10 col-sm-9\" id=\"footer\">
                        <div class=\"col-lg-2 col-xs-4 liens\">
                            <a href=\"#\">Cours</a>
                            <a href=\"#\">Evaluations</a>
                        </div>
                        <div class=\"col-lg-2 col-xs-6 reseau2\">
                            <a href=\"#\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/fb1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                            <a href=\"#\"><img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/tw1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
<script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/navigation.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script>
    new WOW().init();
</script>

</html>";
        
        $__internal_35635cd8351ff9a768286911549a0bab9b4e1a3b34a43572b9abec5746056848->leave($__internal_35635cd8351ff9a768286911549a0bab9b4e1a3b34a43572b9abec5746056848_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d015e4b5aa2591a7775deb9680a5cbef83bd823bdecb434760ffcfad4eb952e = $this->env->getExtension("native_profiler");
        $__internal_9d015e4b5aa2591a7775deb9680a5cbef83bd823bdecb434760ffcfad4eb952e->enter($__internal_9d015e4b5aa2591a7775deb9680a5cbef83bd823bdecb434760ffcfad4eb952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MMI NETWORK - ACCUEIL";
        
        $__internal_9d015e4b5aa2591a7775deb9680a5cbef83bd823bdecb434760ffcfad4eb952e->leave($__internal_9d015e4b5aa2591a7775deb9680a5cbef83bd823bdecb434760ffcfad4eb952e_prof);

    }

    // line 124
    public function block_filtre($context, array $blocks = array())
    {
        $__internal_2b7f5241ec899553589c8ac5b203efca44334f01cb725cbf544b8cf54b402ddb = $this->env->getExtension("native_profiler");
        $__internal_2b7f5241ec899553589c8ac5b203efca44334f01cb725cbf544b8cf54b402ddb->enter($__internal_2b7f5241ec899553589c8ac5b203efca44334f01cb725cbf544b8cf54b402ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filtre"));

        
        $__internal_2b7f5241ec899553589c8ac5b203efca44334f01cb725cbf544b8cf54b402ddb->leave($__internal_2b7f5241ec899553589c8ac5b203efca44334f01cb725cbf544b8cf54b402ddb_prof);

    }

    // line 130
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_ebd2e68ceaae8c3f1d0352cf7d28ea79e509b10cb52dc91ade72a09e2358ef01 = $this->env->getExtension("native_profiler");
        $__internal_ebd2e68ceaae8c3f1d0352cf7d28ea79e509b10cb52dc91ade72a09e2358ef01->enter($__internal_ebd2e68ceaae8c3f1d0352cf7d28ea79e509b10cb52dc91ade72a09e2358ef01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        
        $__internal_ebd2e68ceaae8c3f1d0352cf7d28ea79e509b10cb52dc91ade72a09e2358ef01->leave($__internal_ebd2e68ceaae8c3f1d0352cf7d28ea79e509b10cb52dc91ade72a09e2358ef01_prof);

    }

    // line 131
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9ac4cdad2c1f279aa544c6fafcfa18c1baa58ad0e93107f6feb8a346fe9a1806 = $this->env->getExtension("native_profiler");
        $__internal_9ac4cdad2c1f279aa544c6fafcfa18c1baa58ad0e93107f6feb8a346fe9a1806->enter($__internal_9ac4cdad2c1f279aa544c6fafcfa18c1baa58ad0e93107f6feb8a346fe9a1806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        
        $__internal_9ac4cdad2c1f279aa544c6fafcfa18c1baa58ad0e93107f6feb8a346fe9a1806->leave($__internal_9ac4cdad2c1f279aa544c6fafcfa18c1baa58ad0e93107f6feb8a346fe9a1806_prof);

    }

    public function getTemplateName()
    {
        return "siteBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 131,  301 => 130,  290 => 124,  278 => 10,  265 => 155,  261 => 154,  257 => 153,  253 => 152,  249 => 151,  238 => 143,  234 => 142,  222 => 132,  219 => 131,  217 => 130,  210 => 125,  208 => 124,  198 => 119,  192 => 118,  186 => 115,  182 => 114,  178 => 113,  167 => 105,  152 => 95,  148 => 94,  99 => 48,  94 => 46,  90 => 45,  75 => 33,  71 => 32,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  26 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* */
/* <head>*/
/*     <meta charset="utf8">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <title>{% block title %}MMI NETWORK - ACCUEIL{% endblock %}</title>*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">*/
/* */
/* </head>*/
/* */
/* <body>*/
/*     <div id="global">*/
/*         <div class="container-fluid">*/
/*             <div class="col-lg-12">*/
/*                 <div class="col-lg-2 col-sm-3" id="leftside">*/
/*                     <nav class="navbar navbar-default" id="nav">*/
/*                         <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                             <img src="{{asset('images/login.png')}}" class="center-block img-responsive img-circle">*/
/*                             <h3 class="text-center">{{app.user.username}}</h3>*/
/*                             <hr>*/
/*                             <ul class="nav nav-pills nav-stacked">*/
/*                                 <li id="show">*/
/*                                     <div class="input-group">*/
/*                                       <input type="text" class="form-control" placeholder="Recherche...">*/
/*                                       <span class="input-group-btn">*/
/*                                         <button class="btn btn-default" type="button">Go!</button>*/
/*                                       </span>*/
/*                                     </div>*/
/*                                     <hr>*/
/*                                 </li>*/
/*                                 <li class="active"><a href="{{ path('site_homepage') }}">ACCUEIL<span class="sr-only">(current)</span></a></li>*/
/*                                 <li><a href="{{ path('cours_liste') }}">COURS</a></li>*/
/*                                 <!--<li class="dropdown">*/
/*                                     <a class="dropdown-toggle" data-toggle="dropdown" href="{{ path('cours_liste') }}">COURS*/
/*                                         <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="#">Anglais</a></li>*/
/*                                         <li><a href="#">Communication</a></li>*/
/*                                         <li><a href="#">Esthétique</a></li>*/
/*                                         <li><a href="#">Métiers numériques</a></li>*/
/*                                         <li><a href="#">Conduite de projet</a></li>*/
/*                                         <li><a href="#">PPP</a></li>*/
/*                                         <li><a href="#">Environnement juridique</a></li>*/
/*                                         <li><a href="#">Culture scientifique</a></li>*/
/*                                         <li><a href="#">Développement</a></li>*/
/*                                         <li><a href="#">Programmation objet</a></li>*/
/*                                         <li><a href="#">Réseau</a></li>*/
/*                                         <li><a href="#">Infographie</a></li>*/
/*                                         <li><a href="#">Intégration</a></li>*/
/*                                         <li><a href="#">Audiovisuelle</a></li>*/
/*                                         <li><a href="#">PHP</a></li>*/
/*                                     </ul>*/
/*                                 </li>-->*/
/*                             </ul>*/
/*                             <ul class="nav nav-pills nav-stacked">*/
/*                                 <li class="dropdown">*/
/*                                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">ÉVALUATIONS*/
/*                                         <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="#">Exercices</a></li>*/
/*                                         <li><a href="#">Exercices corrigés</a></li>*/
/*                                         <li><a href="#">Quizz</a></li>*/
/*                                     </ul>*/
/*                                 </li>          */
/*                             </ul>*/
/*                             <ul class="nav nav-pills nav-stacked">*/
/*                                 <li class="dropdown">*/
/*                                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">GÉRER MES COURS*/
/*                                         <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="#">Ajouter</a></li>*/
/*                                         <li><a href="#">Editer</a></li>*/
/*                                         <li><a href="#">Supprimer</a></li>*/
/*                                     </ul>*/
/*                                 </li>          */
/*                             </ul>*/
/*                             <ul class="nav nav-pills nav-stacked">*/
/*                                 <li id="hide">*/
/*                                     <hr>*/
/*                                     <a href="{{ path('fos_user_profile_show') }}">Profil</a>*/
/*                                     <a href="{{ path('fos_user_security_logout') }}">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>*/
/*                                 </li>    */
/*                             </ul>*/
/*                         </div>*/
/*                     </nav>*/
/*                 </div>*/
/*                 <div class="col-lg-10 col-sm-9" id="nav-header">*/
/*                     <div class="col-lg-12 nav navbar-static">*/
/*                         <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">*/
/*                             <div class="col-xs-2">*/
/*                                 <div class="bouton"><img src="{{asset('images/search.svg')}}" alt=""></div>*/
/*                             </div>*/
/*                             <div class="col-lg-10 col-sm-10 col-xs-10">*/
/*                                 <input type="search" class="input-sm form-control chercher" placeholder="Rechercher un cour, une vidéo, un exercice...">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">*/
/*                             <div class="col-md-8 col-sm-6 col-xs-6 reseau">*/
/*                                 <a href="#"><img src="{{asset('images/fb1.png')}}" alt=""></a>*/
/*                                 <a href="#"><img src="{{asset('images/tw1.png')}}" alt=""></a>*/
/*                                 <a href="#"><img height="70px" src="{{asset('images/logo_mmi.png')}}" alt=""></a>*/
/*                             </div>*/
/*                             <div class="col-md-4 col-sm-6 col-xs-6 connexion">*/
/*                                 <a href="{{ path('fos_user_profile_show') }}"><img src="{{asset('images/user.svg')}}" alt=""></a>*/
/*                                 <a href="{{ path('fos_user_security_logout') }}"><img src="{{asset('images/power.svg')}}" alt=""></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% block filtre %}{% endblock %}*/
/*                 */
/*             <section>*/
/* */
/*                 <div class="col-lg-10 col-sm-9" id="contenu">*/
/*                 <div class="col-lg-12">*/
/*                 {% block titre_page %}{% endblock %}*/
/*                 {% block contenu %}{% endblock %}*/
/*                 </div>*/
/*                 </div>*/
/*             </section>*/
/*                 <footer>*/
/*                     <div class="col-lg-10 col-sm-9" id="footer">*/
/*                         <div class="col-lg-2 col-xs-4 liens">*/
/*                             <a href="#">Cours</a>*/
/*                             <a href="#">Evaluations</a>*/
/*                         </div>*/
/*                         <div class="col-lg-2 col-xs-6 reseau2">*/
/*                             <a href="#"><img src="{{asset('images/fb1.png')}}" alt=""></a>*/
/*                             <a href="#"><img src="{{asset('images/tw1.png')}}" alt=""></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </footer>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </body>*/
/* <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>*/
/* <script type="text/javascript" src"{{asset('js/navigation.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>*/
/* <script src="{{asset('js/wow.min.js')}}"></script>*/
/* <script>*/
/*     new WOW().init();*/
/* </script>*/
/* */
/* </html>*/
