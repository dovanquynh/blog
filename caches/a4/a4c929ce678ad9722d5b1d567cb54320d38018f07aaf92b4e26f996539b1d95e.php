<?php

/* layout.html */
class __TwigTemplate_d8f65c9c9adb095a995aaaa9afe8049e60b53acb9c826b5748f1e7265befc239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'jsExtends' => array($this, 'block_jsExtends'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("header.html", "layout.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("nav.html", "layout.html", 3)->display($context);
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("page-header.html", "layout.html", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("footer.html", "layout.html", 11)->display($context);
        // line 12
        echo "
<!-- Bootstrap core JavaScript -->
<script src=\"assets/vendor/jquery/jquery.min.js\"></script>
<script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

<!-- Custom scripts for this template -->
<script src=\"assets/js/clean-blog.min.js\"></script>
";
        // line 19
        $this->displayBlock('jsExtends', $context, $blocks);
        // line 22
        echo "
</body>

</html>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    // line 19
    public function block_jsExtends($context, array $blocks = array())
    {
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  70 => 19,  65 => 8,  62 => 7,  54 => 22,  52 => 19,  43 => 12,  41 => 11,  38 => 10,  36 => 7,  33 => 6,  31 => 5,  28 => 4,  26 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% include 'header.html' %}*/
/* */
/* {% include 'nav.html' %}*/
/* */
/* {% include 'page-header.html' %}*/
/* */
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* */
/* {% include 'footer.html' %}*/
/* */
/* <!-- Bootstrap core JavaScript -->*/
/* <script src="assets/vendor/jquery/jquery.min.js"></script>*/
/* <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>*/
/* */
/* <!-- Custom scripts for this template -->*/
/* <script src="assets/js/clean-blog.min.js"></script>*/
/* {% block jsExtends %}*/
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
