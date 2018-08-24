<?php

/* about.html */
class __TwigTemplate_14d1bde8f89c970c97b54d3726dd65d18a43d55aec7c5721b1a4efc7b58d8141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "about.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur
                    voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam
                    ducimus consectetur?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque
                    architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum
                    in officia voluptas voluptatibus, minus!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid
                    ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit
                    tempora!</p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "about.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html' %}*/
/* */
/* {% block content %}*/
/*     <!-- Main Content -->*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-md-10 mx-auto">*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur*/
/*                     voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam*/
/*                     ducimus consectetur?</p>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque*/
/*                     architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum*/
/*                     in officia voluptas voluptatibus, minus!</p>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid*/
/*                     ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit*/
/*                     tempora!</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
