<?php

/* contact.html */
class __TwigTemplate_0e379a87030ebd9b780538be3ada7fac22ad51940ab20c22adabc05a3a6a3509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "contact.html", 1);
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
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon
                    as possible!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                    <div class=\"control-group\">
                        <div class=\"form-group floating-label-form-group controls\">
                            <label>Name</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Name\" id=\"name\" required
                                   data-validation-required-message=\"Please enter your name.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <div class=\"form-group floating-label-form-group controls\">
                            <label>Email Address</label>
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"email\" required
                                   data-validation-required-message=\"Please enter your email address.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                            <label>Phone Number</label>
                            <input type=\"tel\" class=\"form-control\" placeholder=\"Phone Number\" id=\"phone\" required
                                   data-validation-required-message=\"Please enter your phone number.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <div class=\"form-group floating-label-form-group controls\">
                            <label>Message</label>
                            <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" id=\"message\" required
                                      data-validation-required-message=\"Please enter a message.\"></textarea>
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <br>
                    <div id=\"success\"></div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"sendMessageButton\">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "contact.html";
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
/*                 <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon*/
/*                     as possible!</p>*/
/*                 <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->*/
/*                 <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->*/
/*                 <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->*/
/*                 <form name="sentMessage" id="contactForm" novalidate>*/
/*                     <div class="control-group">*/
/*                         <div class="form-group floating-label-form-group controls">*/
/*                             <label>Name</label>*/
/*                             <input type="text" class="form-control" placeholder="Name" id="name" required*/
/*                                    data-validation-required-message="Please enter your name.">*/
/*                             <p class="help-block text-danger"></p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <div class="form-group floating-label-form-group controls">*/
/*                             <label>Email Address</label>*/
/*                             <input type="email" class="form-control" placeholder="Email Address" id="email" required*/
/*                                    data-validation-required-message="Please enter your email address.">*/
/*                             <p class="help-block text-danger"></p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <div class="form-group col-xs-12 floating-label-form-group controls">*/
/*                             <label>Phone Number</label>*/
/*                             <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required*/
/*                                    data-validation-required-message="Please enter your phone number.">*/
/*                             <p class="help-block text-danger"></p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <div class="form-group floating-label-form-group controls">*/
/*                             <label>Message</label>*/
/*                             <textarea rows="5" class="form-control" placeholder="Message" id="message" required*/
/*                                       data-validation-required-message="Please enter a message."></textarea>*/
/*                             <p class="help-block text-danger"></p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <br>*/
/*                     <div id="success"></div>*/
/*                     <div class="form-group">*/
/*                         <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
