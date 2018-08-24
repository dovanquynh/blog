<?php

/* header.html */
class __TwigTemplate_bd96fdabea0b93904e9e602e726e6a816b49d20c297b87a7031e1e8e53941406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cssExtends' => array($this, 'block_cssExtends'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 15
        $this->displayBlock('cssExtends', $context, $blocks);
        // line 18
        echo "    <!-- Custom fonts for this template -->
    <link href=\"assets/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href=\"assets/css/clean-blog.min.css\" rel=\"stylesheet\">

</head>";
    }

    // line 15
    public function block_cssExtends($context, array $blocks = array())
    {
        // line 16
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  52 => 15,  38 => 18,  36 => 15,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Clean Blog - Start Bootstrap Theme</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">*/
/*     {% block cssExtends %}*/
/* */
/*     {% endblock %}*/
/*     <!-- Custom fonts for this template -->*/
/*     <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/*     <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'*/
/*           type='text/css'>*/
/*     <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'*/
/*           rel='stylesheet' type='text/css'>*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="assets/css/clean-blog.min.css" rel="stylesheet">*/
/* */
/* </head>*/
