<?php

/* posts/list.html */
class __TwigTemplate_08e2f076cc9feff64b3672fdefb4e42215db60dec8bd073cae4491c8c23ced7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "posts/list.html", 1);
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
            echo "                    <div class=\"post-preview\">
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
                    ";
        // line 24
        echo twig_escape_filter($this->env, pager_function((isset($context["totalPage"]) ? $context["totalPage"] : null), (isset($context["currentPage"]) ? $context["currentPage"] : null), "/?m=posts&a=list&page={page}"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "posts/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  72 => 22,  62 => 18,  55 => 14,  49 => 11,  44 => 9,  41 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html' %}*/
/* {% block content %}*/
/*     <!-- Main Content -->*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-md-10 mx-auto">*/
/*                 {% for item in items %}*/
/*                     <div class="post-preview">*/
/*                         <a href="?m=posts&a=detail&id={{ item.id }}">*/
/*                             <h2 class="post-title">*/
/*                                 {{ item.title }}*/
/*                             </h2>*/
/*                             <h3 class="post-subtitle">*/
/*                                 {{ item.short_less }}*/
/*                             </h3>*/
/*                         </a>*/
/*                         <p class="post-meta">Posted on*/
/*                             {{ item.created_at | date }}</p>*/
/*                     </div>*/
/*                     <hr>*/
/*                 {% endfor %}*/
/*                 <!-- Pager -->*/
/*                 <div class="clearfix">*/
/*                     {{ pager(totalPage, currentPage, '/?m=posts&a=list&page={page}') }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
