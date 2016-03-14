<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b9fb0f0a05645114e132fe66d983083b1904e959a1e83ba7fdd5ae5a042423ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2e2c8122b04403f5b2130a963fd0cee88b897370036d4c4e30bfa254e884af5 = $this->env->getExtension("native_profiler");
        $__internal_c2e2c8122b04403f5b2130a963fd0cee88b897370036d4c4e30bfa254e884af5->enter($__internal_c2e2c8122b04403f5b2130a963fd0cee88b897370036d4c4e30bfa254e884af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf8\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
            <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    </head>
    <body>


    <div class=\"container\">
        <div class=\"col-sm-12\" id=\"login\">
            <div class=\"col-sm-8\" id=\"login_left\">
      

        ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 24
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 25
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 26
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        <div>
            ";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 35
        echo "        </div>



            </div>
            <div class=\"col-sm-4\" id=\"login_right\">
               <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.svg"), "html", null, true);
        echo "\" class=\"center-block img-responsive img-circle\">
            </div>
        </div>
    </div>
       
    </body>
</html>
";
        
        $__internal_c2e2c8122b04403f5b2130a963fd0cee88b897370036d4c4e30bfa254e884af5->leave($__internal_c2e2c8122b04403f5b2130a963fd0cee88b897370036d4c4e30bfa254e884af5_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_5181330f7d381f50d2614963603379ab38420871b2ebc2d55364493a64c474c4 = $this->env->getExtension("native_profiler");
        $__internal_5181330f7d381f50d2614963603379ab38420871b2ebc2d55364493a64c474c4->enter($__internal_5181330f7d381f50d2614963603379ab38420871b2ebc2d55364493a64c474c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MMI NETWORK - LOGIN";
        
        $__internal_5181330f7d381f50d2614963603379ab38420871b2ebc2d55364493a64c474c4->leave($__internal_5181330f7d381f50d2614963603379ab38420871b2ebc2d55364493a64c474c4_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69d219b9f68945732017ad60f974a4fe07b0dad25d5fa347dacf6a86418cce6b = $this->env->getExtension("native_profiler");
        $__internal_69d219b9f68945732017ad60f974a4fe07b0dad25d5fa347dacf6a86418cce6b->enter($__internal_69d219b9f68945732017ad60f974a4fe07b0dad25d5fa347dacf6a86418cce6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "            ";
        
        $__internal_69d219b9f68945732017ad60f974a4fe07b0dad25d5fa347dacf6a86418cce6b->leave($__internal_69d219b9f68945732017ad60f974a4fe07b0dad25d5fa347dacf6a86418cce6b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 34,  135 => 33,  123 => 9,  108 => 41,  100 => 35,  98 => 33,  94 => 31,  91 => 30,  85 => 29,  76 => 26,  71 => 25,  66 => 24,  61 => 23,  59 => 22,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf8">*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="apple-mobile-web-app-capable" content="yes">*/
/*             <title>{% block title %}MMI NETWORK - LOGIN{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">*/
/*     </head>*/
/*     <body>*/
/* */
/* */
/*     <div class="container">*/
/*         <div class="col-sm-12" id="login">*/
/*             <div class="col-sm-8" id="login_left">*/
/*       */
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* */
/* */
/* */
/*             </div>*/
/*             <div class="col-sm-4" id="login_right">*/
/*                <img src="{{asset('images/logo.svg')}}" class="center-block img-responsive img-circle">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*        */
/*     </body>*/
/* </html>*/
/* */
