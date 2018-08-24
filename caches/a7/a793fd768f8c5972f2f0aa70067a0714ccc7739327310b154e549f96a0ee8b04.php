<?php

/* posts/detail.html */
class __TwigTemplate_dfff06bcd2c18232de72f075cb9487547cf8b5e7354748cb53a219e00fb6e3de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "posts/detail.html", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Post Content -->
    <article>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            ";
        // line 8
        echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "content", array());
        echo "
          </div>
        </div>
      </div>
    </article>

";
    }

    public function getTemplateName()
    {
        return "posts/detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html' %}*/
/* {% block content %}*/
/*     <!-- Post Content -->*/
/*     <article>*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-lg-8 col-md-10 mx-auto">*/
/*             {{ item.content | raw }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </article>*/
/* */
/* {% endblock %}*/
/* */
