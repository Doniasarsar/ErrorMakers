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
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"alert alert-success\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
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
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 50, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'label', ["label" => "Your Name"]);
        echo "
                                        <span class=\"required\">*</span>
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), 'label', ["label" => "Your Email"]);
        echo "
                                        <span class=\"required\">*</span>
                                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'widget');
        echo "
                                    </div>

                                </div>

                            

                                <div class=\"form-group\">
                                    <div class=\"row\">
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 71, $this->source); })()), "type", [], "any", false, false, false, 71), 'label', ["label" => "Reclamation Type"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 73, $this->source); })()), "type", [], "any", false, false, false, 73), 'widget');
        echo "
                                    </div>
                                </div>

                                
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 80, $this->source); })()), "idCommande", [], "any", false, false, false, 80), 'label', ["label" => "Command ID"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 82, $this->source); })()), "idCommande", [], "any", false, false, false, 82), 'widget');
        echo "
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 88, $this->source); })()), "subject", [], "any", false, false, false, 88), 'label', ["label" => "Reclamation Subject"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 90, $this->source); })()), "subject", [], "any", false, false, false, 90), 'widget');
        echo "
                                    </div>

                                </div>
                                
                                <div class=\"form-group mt-20\">
                                    <div class=\"row\">
                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 97, $this->source); })()), "message", [], "any", false, false, false, 97), 'label', ["label" => "Your Message"]);
        echo "
                                    <span class=\"required\">*</span>
                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 99, $this->source); })()), "message", [], "any", false, false, false, 99), 'widget');
        echo "
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 104, $this->source); })()), "Ajouter", [], "any", false, false, false, 104), 'row', ["label" => "Send"]);
        echo "
                                    </div>
                                </div>

                                ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 108, $this->source); })()), 'form_end');
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
        return array (  249 => 108,  242 => 104,  234 => 99,  229 => 97,  219 => 90,  214 => 88,  205 => 82,  200 => 80,  190 => 73,  185 => 71,  173 => 62,  168 => 60,  160 => 55,  155 => 53,  149 => 50,  117 => 20,  108 => 17,  105 => 16,  101 => 15,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
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
    {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
    {% endfor %}

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
