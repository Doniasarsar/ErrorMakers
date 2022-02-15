<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* reclamation/add.html.twig */
class __TwigTemplate_6acabd02c61ba0052bfc90dbaf097a2439d19ccb4ad0e7cd044673229c7bbd60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/add.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.twig", "reclamation/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Reclamation</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Begin Li's Breadcrumb Area -->
    <div class=\"breadcrumb-area\">
        <div class=\"container\">
            <div class=\"breadcrumb-content\">
                <ul>
                    <li><a href=\"index.html\">Home</a></li>
                    <li class=\"active\">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Contact Main Page Area -->
   
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2\">
                    <div class=\"contact-page-side-content\">
                        <h3 class=\"contact-page-title\">Contact Us</h3>
                        <p class=\"contact-page-message mb-25\"></p>
                        <div class=\"single-contact-block\">
                            <h4><i class=\"fa fa-fax\"></i> Address</h4>
                            <p>1, 2 rue André Ampère - 2083 - Pôle Technologique - El Ghazala.</p>
                        </div>
                        <div class=\"single-contact-block\">
                            <h4><i class=\"fa fa-phone\"></i> Phone</h4>
                            <p>Mobile: (+216) 23 880 872</p>
                            <p>Hotline: 77 000 000</p>
                        </div>
                        <div class=\"single-contact-block last-child\">
                            <h4><i class=\"fa fa-envelope-o\"></i> Email</h4>
                            <p>protech@domain.tn</p>
                            <p>support@protech.tn</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 order-2 order-lg-1\">
                    <div class=\"contact-form-content pt-sm-55 pt-xs-55\">
                        <h3 class=\"contact-page-title\">Tell Us Your Message</h3>
                        <div class=\"contact-form\">
                                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), 'label', ["label" => "Your Name"]);
        echo "
                                        <span class=\"required\">*</span>
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'label', ["label" => "Your Email"]);
        echo "
                                        <span class=\"required\">*</span>
                                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'widget');
        echo "
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), 'errors');
        echo "
                                    </div>

                                </div>

                            

                                <div class=\"form-group mt-4\">
                                    <div class=\"row\"
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 67, $this->source); })()), "type", [], "any", false, false, false, 67), 'label', ["label" => "Reclamation Type"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 69, $this->source); })()), "type", [], "any", false, false, false, 69), 'widget');
        echo "
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 70, $this->source); })()), "type", [], "any", false, false, false, 70), 'errors');
        echo "
                                </div>

                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\"
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 76, $this->source); })()), "idCommande", [], "any", false, false, false, 76), 'label', ["label" => "Command ID"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 78, $this->source); })()), "idCommande", [], "any", false, false, false, 78), 'widget');
        echo "
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 79, $this->source); })()), "idCommande", [], "any", false, false, false, 79), 'errors');
        echo "
                                </div>

                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\"
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 85, $this->source); })()), "subject", [], "any", false, false, false, 85), 'label', ["label" => "Reclamation Subject"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 87, $this->source); })()), "subject", [], "any", false, false, false, 87), 'widget');
        echo "
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 88, $this->source); })()), "subject", [], "any", false, false, false, 88), 'errors');
        echo "
                                    </div>

                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"row\"
                                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 95, $this->source); })()), "date", [], "any", false, false, false, 95), 'label', ["label" => "Date"]);
        echo "
                                        <span class=\"required\">*</span>
                                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 97, $this->source); })()), "date", [], "any", false, false, false, 97), 'widget');
        echo "
                                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 98, $this->source); })()), "date", [], "any", false, false, false, 98), 'errors');
        echo "
                                    </div>

                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"row\"
                                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 104, $this->source); })()), "time", [], "any", false, false, false, 104), 'label', ["label" => "Time"]);
        echo "
                                        <span class=\"required\">*</span>
                                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 106, $this->source); })()), "time", [], "any", false, false, false, 106), 'widget');
        echo "
                                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 107, $this->source); })()), "time", [], "any", false, false, false, 107), 'errors');
        echo "
                                    </div>

                                    </div>
                                </div>
                                <div class=\"form-group mb-30\">
                                    <div class=\"row\"
                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 114, $this->source); })()), "message", [], "any", false, false, false, 114), 'label', ["label" => "Your Message"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 116, $this->source); })()), "message", [], "any", false, false, false, 116), 'widget');
        echo "
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 117, $this->source); })()), "message", [], "any", false, false, false, 117), 'errors');
        echo "
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 122, $this->source); })()), "Ajouter", [], "any", false, false, false, 122), 'row', ["label" => "Send"]);
        echo "
                                    </div>
                                </div>

                                ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 126, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <p class=\"form-messege\"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Main Page Area End Here -->

   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 126,  283 => 122,  275 => 117,  271 => 116,  266 => 114,  256 => 107,  252 => 106,  247 => 104,  238 => 98,  234 => 97,  229 => 95,  219 => 88,  215 => 87,  210 => 85,  201 => 79,  197 => 78,  192 => 76,  183 => 70,  179 => 69,  174 => 67,  162 => 58,  158 => 57,  153 => 55,  145 => 50,  141 => 49,  136 => 47,  130 => 44,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.twig'%}
{% block title %}<title>Reclamation</title> {% endblock %}
{% block body %}
    <!-- Begin Li's Breadcrumb Area -->
    <div class=\"breadcrumb-area\">
        <div class=\"container\">
            <div class=\"breadcrumb-content\">
                <ul>
                    <li><a href=\"index.html\">Home</a></li>
                    <li class=\"active\">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Contact Main Page Area -->
   
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2\">
                    <div class=\"contact-page-side-content\">
                        <h3 class=\"contact-page-title\">Contact Us</h3>
                        <p class=\"contact-page-message mb-25\"></p>
                        <div class=\"single-contact-block\">
                            <h4><i class=\"fa fa-fax\"></i> Address</h4>
                            <p>1, 2 rue André Ampère - 2083 - Pôle Technologique - El Ghazala.</p>
                        </div>
                        <div class=\"single-contact-block\">
                            <h4><i class=\"fa fa-phone\"></i> Phone</h4>
                            <p>Mobile: (+216) 23 880 872</p>
                            <p>Hotline: 77 000 000</p>
                        </div>
                        <div class=\"single-contact-block last-child\">
                            <h4><i class=\"fa fa-envelope-o\"></i> Email</h4>
                            <p>protech@domain.tn</p>
                            <p>support@protech.tn</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 order-2 order-lg-1\">
                    <div class=\"contact-form-content pt-sm-55 pt-xs-55\">
                        <h3 class=\"contact-page-title\">Tell Us Your Message</h3>
                        <div class=\"contact-form\">
                                {{ form_start(formA,{'attr': {'novalidate': 'novalidate'}} ) }}
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        {{ form_label(formA.name,\"Your Name\") }}
                                        <span class=\"required\">*</span>
                                        {{ form_widget(formA.name,{'attr':{\"class\":\"mb-0\"}}) }}
                                        {{ form_errors(formA.name,{'attr':{\"class\":\"mb-0\"}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        {{ form_label(formA.email,\"Your Email\") }}
                                        <span class=\"required\">*</span>
                                        {{ form_widget(formA.email)}}
                                        {{ form_errors(formA.email) }}
                                    </div>

                                </div>

                            

                                <div class=\"form-group mt-4\">
                                    <div class=\"row\"
                                    {{ form_label(formA.type,\"Reclamation Type\") }}
                                    <span class=\"required\">*</span>
                                    {{ form_widget(formA.type)}}
                                    {{ form_errors(formA.type) }}
                                </div>

                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\"
                                    {{ form_label(formA.idCommande,\"Command ID\") }}
                                    <span class=\"required\">*</span>
                                    {{ form_widget(formA.idCommande)}}
                                    {{ form_errors(formA.idCommande) }}
                                </div>

                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\"
                                    {{ form_label(formA.subject,\"Reclamation Subject\") }}
                                    <span class=\"required\">*</span>
                                    {{ form_widget(formA.subject) }}
                                    {{ form_errors(formA.subject) }}
                                    </div>

                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"row\"
                                        {{ form_label(formA.date,\"Date\") }}
                                        <span class=\"required\">*</span>
                                        {{ form_widget(formA.date)}}
                                        {{ form_errors(formA.date) }}
                                    </div>

                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"row\"
                                        {{ form_label(formA.time,\"Time\") }}
                                        <span class=\"required\">*</span>
                                        {{ form_widget(formA.time)}}
                                        {{ form_errors(formA.time) }}
                                    </div>

                                    </div>
                                </div>
                                <div class=\"form-group mb-30\">
                                    <div class=\"row\"
                                    {{ form_label(formA.message,\"Your Message\") }}
                                    <span class=\"required\">*</span>
                                    {{ form_widget(formA.message) }}
                                    {{ form_errors(formA.message) }}
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    {{ form_row(formA.Ajouter, {\"label\":\"Send\"},{'attr':{ \"class\":\"btn btn-primary btn-lg\" }}) }}
                                    </div>
                                </div>

                                {{ form_end(formA) }}
                        </div>
                        <p class=\"form-messege\"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Main Page Area End Here -->

   
{% endblock %}", "reclamation/add.html.twig", "C:\\Users\\mariem\\Documents\\piDEV\\ErrorMakers-3A45\\templates\\reclamation\\add.html.twig");
    }
}
