<?php

/* siteBundle::base.html.twig */
class __TwigTemplate_25f066b01854264f78898a085eb618d07b861e2245c6519c6dbef45594253094 extends Twig_Template
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
        $__internal_81c088d3239c4574c3d25dcd5db8bfe010eb3ee63d9790be66658a0fcb0dedf7 = $this->env->getExtension("native_profiler");
        $__internal_81c088d3239c4574c3d25dcd5db8bfe010eb3ee63d9790be66658a0fcb0dedf7->enter($__internal_81c088d3239c4574c3d25dcd5db8bfe010eb3ee63d9790be66658a0fcb0dedf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "siteBundle::base.html.twig"));

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
                            </ul>
                             <ul class=\"nav nav-pills nav-stacked\">
                                <li class=\"dropdown\">
                                    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("cours_liste");
        echo "\">COURS</a>
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
        // line 66
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profil</a>
                                    <a href=\"";
        // line 67
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
        // line 77
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
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/fb1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <a href=\"#\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/tw1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <a href=\"#\"><img height=\"70px\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo_mmi.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                            <div class=\"col-md-4 col-sm-6 col-xs-6 connexion\">
                                <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/user.svg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/power.svg"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 96
        $this->displayBlock('filtre', $context, $blocks);
        // line 97
        echo "                
            <section>

                <div class=\"col-lg-10 col-sm-9\" id=\"contenu\">
                <div class=\"col-lg-12\">
                ";
        // line 102
        $this->displayBlock('titre_page', $context, $blocks);
        // line 103
        echo "                ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 104
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
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/fb1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                            <a href=\"#\"><img src=\"";
        // line 115
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
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/navigation.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script>
    new WOW().init();
</script>

</html>";
        
        $__internal_81c088d3239c4574c3d25dcd5db8bfe010eb3ee63d9790be66658a0fcb0dedf7->leave($__internal_81c088d3239c4574c3d25dcd5db8bfe010eb3ee63d9790be66658a0fcb0dedf7_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_90621d220f724ca4a89f35acb19e83767e4349aad31dab38fbbf175f5f61c23b = $this->env->getExtension("native_profiler");
        $__internal_90621d220f724ca4a89f35acb19e83767e4349aad31dab38fbbf175f5f61c23b->enter($__internal_90621d220f724ca4a89f35acb19e83767e4349aad31dab38fbbf175f5f61c23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MMI NETWORK - ACCUEIL";
        
        $__internal_90621d220f724ca4a89f35acb19e83767e4349aad31dab38fbbf175f5f61c23b->leave($__internal_90621d220f724ca4a89f35acb19e83767e4349aad31dab38fbbf175f5f61c23b_prof);

    }

    // line 96
    public function block_filtre($context, array $blocks = array())
    {
        $__internal_f48979d9e8ae42e4009c2b94ca4e4e4160ecdbc2445e6558c15d5944a8f1084d = $this->env->getExtension("native_profiler");
        $__internal_f48979d9e8ae42e4009c2b94ca4e4e4160ecdbc2445e6558c15d5944a8f1084d->enter($__internal_f48979d9e8ae42e4009c2b94ca4e4e4160ecdbc2445e6558c15d5944a8f1084d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filtre"));

        
        $__internal_f48979d9e8ae42e4009c2b94ca4e4e4160ecdbc2445e6558c15d5944a8f1084d->leave($__internal_f48979d9e8ae42e4009c2b94ca4e4e4160ecdbc2445e6558c15d5944a8f1084d_prof);

    }

    // line 102
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_bb59f91b94585c08d25386d2be4622684b80b772eefe7ed1cb9273f15d8c9437 = $this->env->getExtension("native_profiler");
        $__internal_bb59f91b94585c08d25386d2be4622684b80b772eefe7ed1cb9273f15d8c9437->enter($__internal_bb59f91b94585c08d25386d2be4622684b80b772eefe7ed1cb9273f15d8c9437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        
        $__internal_bb59f91b94585c08d25386d2be4622684b80b772eefe7ed1cb9273f15d8c9437->leave($__internal_bb59f91b94585c08d25386d2be4622684b80b772eefe7ed1cb9273f15d8c9437_prof);

    }

    // line 103
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_78a907bcfdcb8c89e067ceefec95c47cdf8f587b1fd5c1dcdcb3af5320db5f0c = $this->env->getExtension("native_profiler");
        $__internal_78a907bcfdcb8c89e067ceefec95c47cdf8f587b1fd5c1dcdcb3af5320db5f0c->enter($__internal_78a907bcfdcb8c89e067ceefec95c47cdf8f587b1fd5c1dcdcb3af5320db5f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        
        $__internal_78a907bcfdcb8c89e067ceefec95c47cdf8f587b1fd5c1dcdcb3af5320db5f0c->leave($__internal_78a907bcfdcb8c89e067ceefec95c47cdf8f587b1fd5c1dcdcb3af5320db5f0c_prof);

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
        return array (  281 => 103,  270 => 102,  259 => 96,  247 => 10,  234 => 127,  230 => 126,  226 => 125,  222 => 124,  218 => 123,  207 => 115,  203 => 114,  191 => 104,  188 => 103,  186 => 102,  179 => 97,  177 => 96,  167 => 91,  161 => 90,  155 => 87,  151 => 86,  147 => 85,  136 => 77,  121 => 67,  117 => 66,  97 => 49,  90 => 45,  75 => 33,  71 => 32,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  26 => 1,);
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
/*                             </ul>*/
/*                              <ul class="nav nav-pills nav-stacked">*/
/*                                 <li class="dropdown">*/
/*                                     <a href="{{ path('cours_liste') }}">COURS</a>*/
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
/*                             </ul>   */
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
