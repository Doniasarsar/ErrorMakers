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
                        <h3 class=\"contact-page-title mt-20\">Tell Us Your Message</h3>
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
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'label', ["label" => "Your Email"]);
        echo "
                                        <span class=\"required\">*</span>
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), 'widget');
        echo "
                                    </div>

                                </div>

                            

                                <div class=\"form-group\">
                                    <div class=\"row\">
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 65, $this->source); })()), "type", [], "any", false, false, false, 65), 'label', ["label" => "Reclamation Type"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 67, $this->source); })()), "type", [], "any", false, false, false, 67), 'widget');
        echo "
                                    </div>
                                </div>

                                
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 74, $this->source); })()), "idCommande", [], "any", false, false, false, 74), 'label', ["label" => "Command ID"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 76, $this->source); })()), "idCommande", [], "any", false, false, false, 76), 'widget');
        echo "
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 82, $this->source); })()), "subject", [], "any", false, false, false, 82), 'label', ["label" => "Reclamation Subject"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 84, $this->source); })()), "subject", [], "any", false, false, false, 84), 'widget');
        echo "
                                    </div>

                                </div>
                                
                                <div class=\"form-group mt-20\">
                                    <div class=\"row\">
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 91, $this->source); })()), "message", [], "any", false, false, false, 91), 'label', ["label" => "Your Message"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 93, $this->source); })()), "message", [], "any", false, false, false, 93), 'widget');
        echo "
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 98, $this->source); })()), "Ajouter", [], "any", false, false, false, 98), 'row', ["label" => "Send"]);
        echo "
                                    </div>
                                </div>

                                ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 102, $this->source); })()), 'form_end');
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
        return array (  230 => 102,  223 => 98,  215 => 93,  210 => 91,  200 => 84,  195 => 82,  186 => 76,  181 => 74,  171 => 67,  166 => 65,  154 => 56,  149 => 54,  141 => 49,  136 => 47,  130 => 44,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
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
                        <h3 class=\"contact-page-title mt-20\">Tell Us Your Message</h3>
                        <div class=\"contact-form\">
                                {{ form_start(formA,{'attr': {'novalidate': 'novalidate'}} ) }}
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        {{ form_label(formA.name,\"Your Name\") }}
                                        <span class=\"required\">*</span>
                                        {{ form_widget(formA.name,{'attr':{\"class\":\"mb-0\"}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        {{ form_label(formA.email,\"Your Email\") }}
                                        <span class=\"required\">*</span>
                                        {{ form_widget(formA.email)}}
                                    </div>

                                </div>

                            

                                <div class=\"form-group\">
                                    <div class=\"row\">
                                    {{ form_label(formA.type,\"Reclamation Type\") }}
                                    <span class=\"required\">*</span>
                                    {{ form_widget(formA.type)}}
                                    </div>
                                </div>

                                
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                    {{ form_label(formA.idCommande,\"Command ID\") }}
                                    <span class=\"required\">*</span>
                                    {{ form_widget(formA.idCommande)}}
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                    {{ form_label(formA.subject,\"Reclamation Subject\") }}
                                    <span class=\"required\">*</span>
                                    {{ form_widget(formA.subject) }}
                                    </div>

                                </div>
                                
                                <div class=\"form-group mt-20\">
                                    <div class=\"row\">
                                    {{ form_label(formA.message,\"Your Message\") }}
                                    <span class=\"required\">*</span>
                                    {{ form_widget(formA.message) }}
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
