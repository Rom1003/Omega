<?php

/* siteBundle:Default:index.html.twig */
class __TwigTemplate_40a115e9a902e1b9ad0802238629cadde3c28003d5a2115c90748e46e4a4b8f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("siteBundle::base.html.twig", "siteBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'titre_page' => array($this, 'block_titre_page'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "siteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30a5dbc995e02e1ae2c7d4a7da8282b594021b8d7740dd99da9587731def02b3 = $this->env->getExtension("native_profiler");
        $__internal_30a5dbc995e02e1ae2c7d4a7da8282b594021b8d7740dd99da9587731def02b3->enter($__internal_30a5dbc995e02e1ae2c7d4a7da8282b594021b8d7740dd99da9587731def02b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "siteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a5dbc995e02e1ae2c7d4a7da8282b594021b8d7740dd99da9587731def02b3->leave($__internal_30a5dbc995e02e1ae2c7d4a7da8282b594021b8d7740dd99da9587731def02b3_prof);

    }

    // line 2
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_9dbda3d4405993a9292f3e292b6c82d7a0d7cc655593bb40a658f237cdfa667a = $this->env->getExtension("native_profiler");
        $__internal_9dbda3d4405993a9292f3e292b6c82d7a0d7cc655593bb40a658f237cdfa667a->enter($__internal_9dbda3d4405993a9292f3e292b6c82d7a0d7cc655593bb40a658f237cdfa667a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        echo "<h1>Accueil</h1><hr>";
        
        $__internal_9dbda3d4405993a9292f3e292b6c82d7a0d7cc655593bb40a658f237cdfa667a->leave($__internal_9dbda3d4405993a9292f3e292b6c82d7a0d7cc655593bb40a658f237cdfa667a_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_494956aa0b0b3a197615dc4d9d2b02f838ee5b27d2b0364d054c2e6466c0f57e = $this->env->getExtension("native_profiler");
        $__internal_494956aa0b0b3a197615dc4d9d2b02f838ee5b27d2b0364d054c2e6466c0f57e->enter($__internal_494956aa0b0b3a197615dc4d9d2b02f838ee5b27d2b0364d054c2e6466c0f57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "    
        <div class=\"col-lg-6 rubrique\" id=\"cour1\">
            <a href=\"#\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cour1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
            <p class=\"titre\">Derniers cours publiés</p>
            <p class=\"text\">Retrouvez les derniers cours publiés récement facilitant votre avancé sur le site.</p>
            </a>
        </div>
       
        <div class=\"col-lg-5 col-lg-offset-1 cour2 rubrique\" id=\"cour2\">
            <a href=\"#\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cour2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
            <p class=\"titre\">Cours les plus regardés</p>
            <p class=\"text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </a>
        </div>
    
    
        <div class=\"col-lg-3 video rubrique\" id=\"video\">
            <a href=\"#\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/video.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
            <p class=\"titre\">Dernières vidéos</p>
            <p class=\"text\">Retrouvez tous les cours contenant une vidéo offrant une nouvelle aproche en termes d'apprentissage.</p>
            </a>
        </div>
    
    
        <div class=\"col-lg-8 eval rubrique\" id=\"eval\">
             <a href=\"#\">            
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/eval.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
            <p class=\"titre\">Dernières évaluations publiées</p>
            <p class=\"text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </a>
        </div>
    
";
        
        $__internal_494956aa0b0b3a197615dc4d9d2b02f838ee5b27d2b0364d054c2e6466c0f57e->leave($__internal_494956aa0b0b3a197615dc4d9d2b02f838ee5b27d2b0364d054c2e6466c0f57e_prof);

    }

    public function getTemplateName()
    {
        return "siteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  86 => 29,  69 => 15,  58 => 7,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'siteBundle::base.html.twig' %}*/
/* {% block titre_page %}<h1>Accueil</h1><hr>{% endblock %}*/
/* {% block contenu %}*/
/*     */
/*         <div class="col-lg-6 rubrique" id="cour1">*/
/*             <a href="#">*/
/*             <img src="{{asset('images/cour1.jpg')}}" class="img-responsive" alt="">*/
/*             <p class="titre">Derniers cours publiés</p>*/
/*             <p class="text">Retrouvez les derniers cours publiés récement facilitant votre avancé sur le site.</p>*/
/*             </a>*/
/*         </div>*/
/*        */
/*         <div class="col-lg-5 col-lg-offset-1 cour2 rubrique" id="cour2">*/
/*             <a href="#">*/
/*             <img src="{{asset('images/cour2.jpg')}}" class="img-responsive" alt="">*/
/*             <p class="titre">Cours les plus regardés</p>*/
/*             <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>*/
/*             </a>*/
/*         </div>*/
/*     */
/*     */
/*         <div class="col-lg-3 video rubrique" id="video">*/
/*             <a href="#">*/
/*             <img src="{{asset('images/video.jpg')}}" class="img-responsive" alt="">*/
/*             <p class="titre">Dernières vidéos</p>*/
/*             <p class="text">Retrouvez tous les cours contenant une vidéo offrant une nouvelle aproche en termes d'apprentissage.</p>*/
/*             </a>*/
/*         </div>*/
/*     */
/*     */
/*         <div class="col-lg-8 eval rubrique" id="eval">*/
/*              <a href="#">            */
/*             <img src="{{asset('images/eval.jpg')}}" class="img-responsive" alt="">*/
/*             <p class="titre">Dernières évaluations publiées</p>*/
/*             <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>*/
/*             </a>*/
/*         </div>*/
/*     */
/* {% endblock %}*/
