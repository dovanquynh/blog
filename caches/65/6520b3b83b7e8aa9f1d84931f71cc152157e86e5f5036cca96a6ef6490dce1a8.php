<?php

/* nav.html */
class __TwigTemplate_56b707512e1ba38ca3a2d1037bfa27e94e35b00f2ad81448b8b1416c994a586e extends Twig_Template
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
        echo "<body>

<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/\">Home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"?a=about\">About</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"?m=posts&a=list\">Sample Post</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"?a=contact\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "nav.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <body>*/
/* */
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">*/
/*     <div class="container">*/
/*         <a class="navbar-brand" href="/">Start Bootstrap</a>*/
/*         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"*/
/*                 data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"*/
/*                 aria-label="Toggle navigation">*/
/*             Menu*/
/*             <i class="fa fa-bars"></i>*/
/*         </button>*/
/*         <div class="collapse navbar-collapse" id="navbarResponsive">*/
/*             <ul class="navbar-nav ml-auto">*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="/">Home</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="?a=about">About</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="?m=posts&a=list">Sample Post</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="?a=contact">Contact</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
