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
        echo "    <!-- Begin Contact Main Page Area -->
    <div class=\"contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40\">
        <div class=\"container mb-60\">
            <div id=\"google-map\"></div>
        </div>
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
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"form-group\">
                                    <td>";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), 'label', ["label" => "Your Name"]);
        echo "</td>
                                    <td>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), 'widget');
        echo "</td>
                                    <td>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), 'errors');
        echo "</td>
                                </div>
                                <div class=\"form-group\">
                                    <td>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'label', ["label" => "Your Email"]);
        echo "</td>
                                    <td>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget');
        echo "</td>
                                    <td>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'errors');
        echo "</td>
                                </div>
                                <div class=\"form-group\">
                                        <td>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 47, $this->source); })()), "date", [], "any", false, false, false, 47), 'label', ["label" => "Date"]);
        echo "</td>
                                        <td>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 48, $this->source); })()), "date", [], "any", false, false, false, 48), 'widget');
        echo "</td>
                                        <td>";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 49, $this->source); })()), "date", [], "any", false, false, false, 49), 'errors');
        echo "</td>


                                        <td>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 52, $this->source); })()), "time", [], "any", false, false, false, 52), 'label', ["label" => "Time"]);
        echo "</td>
                                        <td>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 53, $this->source); })()), "time", [], "any", false, false, false, 53), 'widget');
        echo "</td>
                                        <td>";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 54, $this->source); })()), "time", [], "any", false, false, false, 54), 'errors');
        echo "</td>
                                   
                                </div>
                                <div class=\"form-group\">
                                    <td>";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), 'label', ["label" => "Reclamation Type"]);
        echo "</td>
                                    <td>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), 'widget');
        echo "</td>
                                    <td>";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60), 'errors');
        echo "</td>
                                </div>
                                <div class=\"form-group\">
                                    <td>";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 63, $this->source); })()), "idCommande", [], "any", false, false, false, 63), 'label', ["label" => "Command ID"]);
        echo "</td>
                                    <td>";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 64, $this->source); })()), "idCommande", [], "any", false, false, false, 64), 'widget');
        echo "</td>
                                    <td>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 65, $this->source); })()), "idCommande", [], "any", false, false, false, 65), 'errors');
        echo "</td>
                                </div>
                                <div class=\"form-group\">
                                    <td>";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 68, $this->source); })()), "subject", [], "any", false, false, false, 68), 'label', ["label" => "Reclamation Subject"]);
        echo "</td>
                                    <td>";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 69, $this->source); })()), "subject", [], "any", false, false, false, 69), 'widget');
        echo "</td>
                                    <td>";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 70, $this->source); })()), "subject", [], "any", false, false, false, 70), 'errors');
        echo "</td>
                                </div>
                                <div class=\"form-group mb-30\">
                                    <td>";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 73, $this->source); })()), "message", [], "any", false, false, false, 73), 'label', ["label" => "Your Message"]);
        echo "</td>
                                    <td>";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 74, $this->source); })()), "message", [], "any", false, false, false, 74), 'widget');
        echo "</td>
                                    <td>";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 75, $this->source); })()), "message", [], "any", false, false, false, 75), 'errors');
        echo "</td>
                                </div>
                                <div class=\"form-group\">
                                    <td>";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 78, $this->source); })()), "Ajouter", [], "any", false, false, false, 78), 'row', ["label" => "Send"]);
        echo "</td>
                                </div>

                                ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 81, $this->source); })()), 'form_end');
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
        return array (  245 => 81,  239 => 78,  233 => 75,  229 => 74,  225 => 73,  219 => 70,  215 => 69,  211 => 68,  205 => 65,  201 => 64,  197 => 63,  191 => 60,  187 => 59,  183 => 58,  176 => 54,  172 => 53,  168 => 52,  162 => 49,  158 => 48,  154 => 47,  148 => 44,  144 => 43,  140 => 42,  134 => 39,  130 => 38,  126 => 37,  121 => 35,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.twig'%}
{% block title %}<title>Reclamation</title> {% endblock %}
{% block body %}
    <!-- Begin Contact Main Page Area -->
    <div class=\"contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40\">
        <div class=\"container mb-60\">
            <div id=\"google-map\"></div>
        </div>
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
                                    <td>{{ form_label(formA.name,\"Your Name\") }}</td>
                                    <td>{{ form_widget(formA.name) }}</td>
                                    <td>{{ form_errors(formA.name) }}</td>
                                </div>
                                <div class=\"form-group\">
                                    <td>{{ form_label(formA.email,\"Your Email\") }}</td>
                                    <td>{{ form_widget(formA.email)}}</td>
                                    <td>{{ form_errors(formA.email) }}</td>
                                </div>
                                <div class=\"form-group\">
                                        <td>{{ form_label(formA.date,\"Date\") }}</td>
                                        <td>{{ form_widget(formA.date)}}</td>
                                        <td>{{ form_errors(formA.date) }}</td>


                                        <td>{{ form_label(formA.time,\"Time\") }}</td>
                                        <td>{{ form_widget(formA.time)}}</td>
                                        <td>{{ form_errors(formA.time) }}</td>
                                   
                                </div>
                                <div class=\"form-group\">
                                    <td>{{ form_label(formA.type,\"Reclamation Type\") }}</td>
                                    <td>{{ form_widget(formA.type)}}</td>
                                    <td>{{ form_errors(formA.type) }}</td>
                                </div>
                                <div class=\"form-group\">
                                    <td>{{ form_label(formA.idCommande,\"Command ID\") }}</td>
                                    <td>{{ form_widget(formA.idCommande)}}</td>
                                    <td>{{ form_errors(formA.idCommande) }}</td>
                                </div>
                                <div class=\"form-group\">
                                    <td>{{ form_label(formA.subject,\"Reclamation Subject\") }}</td>
                                    <td>{{ form_widget(formA.subject) }}</td>
                                    <td>{{ form_errors(formA.subject) }}</td>
                                </div>
                                <div class=\"form-group mb-30\">
                                    <td>{{ form_label(formA.message,\"Your Message\") }}</td>
                                    <td>{{ form_widget(formA.message) }}</td>
                                    <td>{{ form_errors(formA.message) }}</td>
                                </div>
                                <div class=\"form-group\">
                                    <td>{{ form_row(formA.Ajouter, {'label': 'Send'}) }}</td>
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
