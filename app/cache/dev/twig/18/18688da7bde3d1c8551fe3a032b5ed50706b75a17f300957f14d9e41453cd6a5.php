<?php

/* siteBundle:Default:index.html.twig */
class __TwigTemplate_540d94e173d2495dd059b2ad05094b36b34ed03dc46e2ea88bccdc722f423b51 extends Twig_Template
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
        $__internal_aefb636579e9986135ec4c1633719faa4f873ccd845cc84bda07afd7f1d88645 = $this->env->getExtension("native_profiler");
        $__internal_aefb636579e9986135ec4c1633719faa4f873ccd845cc84bda07afd7f1d88645->enter($__internal_aefb636579e9986135ec4c1633719faa4f873ccd845cc84bda07afd7f1d88645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "siteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aefb636579e9986135ec4c1633719faa4f873ccd845cc84bda07afd7f1d88645->leave($__internal_aefb636579e9986135ec4c1633719faa4f873ccd845cc84bda07afd7f1d88645_prof);

    }

    // line 2
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_e019d52e18db7b2ba05b43cb2d08603a54f685807b3ed62f9171dbeece0405c2 = $this->env->getExtension("native_profiler");
        $__internal_e019d52e18db7b2ba05b43cb2d08603a54f685807b3ed62f9171dbeece0405c2->enter($__internal_e019d52e18db7b2ba05b43cb2d08603a54f685807b3ed62f9171dbeece0405c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        echo "<h1>Accueil</h1><hr>";
        
        $__internal_e019d52e18db7b2ba05b43cb2d08603a54f685807b3ed62f9171dbeece0405c2->leave($__internal_e019d52e18db7b2ba05b43cb2d08603a54f685807b3ed62f9171dbeece0405c2_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_bebbf11e6366d55aae792cce7259fb1c57760e17bda91829a098d8b9193d4a0a = $this->env->getExtension("native_profiler");
        $__internal_bebbf11e6366d55aae792cce7259fb1c57760e17bda91829a098d8b9193d4a0a->enter($__internal_bebbf11e6366d55aae792cce7259fb1c57760e17bda91829a098d8b9193d4a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
            <p class=\"titre\">Mes cours favoris</p>
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
            <p class=\"titre\">Cours avec vidéos</p>
            <p class=\"text\">Retrouvez tous les cours contenant une vidéo offrant une nouvelle aproche en termes d'apprentissage.</p>
            </a>
        </div>
    
    
        <div class=\"col-lg-8 eval rubrique\" id=\"eval\">
             <a href=\"#\">            
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/eval.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
            <p class=\"titre\">Accéder à mon profil</p>
            <p class=\"text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </a>
        </div>
    
";
        
        $__internal_bebbf11e6366d55aae792cce7259fb1c57760e17bda91829a098d8b9193d4a0a->leave($__internal_bebbf11e6366d55aae792cce7259fb1c57760e17bda91829a098d8b9193d4a0a_prof);

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
/*             <p class="titre">Mes cours favoris</p>*/
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
/*             <p class="titre">Cours avec vidéos</p>*/
/*             <p class="text">Retrouvez tous les cours contenant une vidéo offrant une nouvelle aproche en termes d'apprentissage.</p>*/
/*             </a>*/
/*         </div>*/
/*     */
/*     */
/*         <div class="col-lg-8 eval rubrique" id="eval">*/
/*              <a href="#">            */
/*             <img src="{{asset('images/eval.jpg')}}" class="img-responsive" alt="">*/
/*             <p class="titre">Accéder à mon profil</p>*/
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
