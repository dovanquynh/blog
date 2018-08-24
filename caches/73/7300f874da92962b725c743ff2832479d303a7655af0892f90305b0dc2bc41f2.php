<?php

/* home.html */
class __TwigTemplate_f99b4f63e54fa58341ec5d474b4b32c7f7cdef55f2fce51ed0d1b32094e953d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "home.html", 1);
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
        echo "    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                <div class=\"post-preview\">
                    <a href=\"?m=posts&a=detail&id=";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">
                        <h2 class=\"post-title\">
                            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "
                        </h2>
                        <h3 class=\"post-subtitle\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "short_less", array()), "html", null, true);
            echo "
                        </h3>
                    </a>
                    <p class=\"post-meta\">Posted on
                        ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "created_at", array())), "html", null, true);
            echo "</p>
                </div>
                <hr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                <!-- Pager -->
                <div class=\"clearfix\">
                    <a class=\"btn btn-primary float-right\" href=\"?m=posts&a=list\">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  62 => 18,  55 => 14,  49 => 11,  44 => 9,  41 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html' %}*/
/* {% block content %}*/
/*     <!-- Main Content -->*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-md-10 mx-auto">*/
/*                 {% for item in items %}*/
/*                 <div class="post-preview">*/
/*                     <a href="?m=posts&a=detail&id={{ item.id }}">*/
/*                         <h2 class="post-title">*/
/*                             {{ item.title }}*/
/*                         </h2>*/
/*                         <h3 class="post-subtitle">*/
/*                             {{ item.short_less }}*/
/*                         </h3>*/
/*                     </a>*/
/*                     <p class="post-meta">Posted on*/
/*                         {{ item.created_at | date }}</p>*/
/*                 </div>*/
/*                 <hr>*/
/*                 {% endfor %}*/
/*                 <!-- Pager -->*/
/*                 <div class="clearfix">*/
/*                     <a class="btn btn-primary float-right" href="?m=posts&a=list">Older Posts &rarr;</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
