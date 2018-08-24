<?php

/* page-header.html */
class __TwigTemplate_f8e4d86e88b13764dc8ac2f1a71f989a00d2de57ae45ca40b79b3320c7a778bd extends Twig_Template
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
        // line 1
        echo "<!-- Page Header -->
<header class=\"masthead\" style=\"background-image: url('";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["bg_image"]) ? $context["bg_image"] : null), "html", null, true);
        echo "')\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"site-heading\">
                    <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, (isset($context["site_heading"]) ? $context["site_heading"] : null)), "html", null, true);
        echo "</h1>
                    <span class=\"subheading\">";
        // line 9
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, (isset($context["sub_heading"]) ? $context["sub_heading"] : null)), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "page-header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  31 => 8,  22 => 2,  19 => 1,);
    }
}
/* <!-- Page Header -->*/
/* <header class="masthead" style="background-image: url('{{ bg_image }}')">*/
/*     <div class="overlay"></div>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-md-10 mx-auto">*/
/*                 <div class="site-heading">*/
/*                     <h1>{{ site_heading | title }}</h1>*/
/*                     <span class="subheading">{{ sub_heading | title }}</span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
