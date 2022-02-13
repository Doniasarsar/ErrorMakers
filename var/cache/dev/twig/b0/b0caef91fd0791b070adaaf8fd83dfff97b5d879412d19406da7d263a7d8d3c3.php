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

/* utilisateurs/add.html.twig */
class __TwigTemplate_0c956c439d0ee387d0ff871a6b0661077710ae3121ed9ba67cb110a61d0267bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "header-footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/add.html.twig"));

        $this->parent = $this->loadTemplate("header-footer.html.twig", "utilisateurs/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "                <!-- Begin Mobile Menu Area -->
                <div class=\"mobile-menu-area d-lg-none d-xl-none col-12\">
                    <div class=\"container\"> 
                        <div class=\"row\">
                            <div class=\"mobile-menu\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class=\"breadcrumb-area\">
                <div class=\"container\">
                    <div class=\"breadcrumb-content\">
                        <ul>
                            <li><a href=\"index.html\">Home</a></li>
                            <li class=\"active\">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class=\"page-section mb-60\">
                <div class=\"container\">
                    <div class=\"row\">         
                        <div class=\"col-sm-12 col-md-12 col-lg-6 col-xs-12\">
                          
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\">Register</h4>
                                    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                           
                                          <td>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 39, $this->source); })()), "Prenom", [], "any", false, false, false, 39), 'label', ["label" => "First Name"]);
        echo "</td>
                                          <td>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 40, $this->source); })()), "Prenom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "</td>
                                          <td>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 41, $this->source); })()), "Prenom", [], "any", false, false, false, 41), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "</td>              
                                        </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                          
                                           ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 45, $this->source); })()), "Nom", [], "any", false, false, false, 45), 'label', ["label" => "Last Name"]);
        echo "
                                           ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 46, $this->source); })()), "Nom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                           ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 47, $this->source); })()), "Nom", [], "any", false, false, false, 47), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-12 mb-20\">
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 50, $this->source); })()), "Email", [], "any", false, false, false, 50), 'label', ["label" => "Email Adress"]);
        echo "
                                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 51, $this->source); })()), "Email", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 52, $this->source); })()), "Email", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                           ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 55, $this->source); })()), "Password", [], "any", false, false, false, 55), 'label', ["label" => "Password"]);
        echo "
                                           ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 56, $this->source); })()), "Password", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "mb-0", "type" => "PasswordType"]]);
        echo "
                                           ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 57, $this->source); })()), "Password", [], "any", false, false, false, 57), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                           ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 60, $this->source); })()), "Telephone", [], "any", false, false, false, 60), 'label', ["label" => "Telephone"]);
        echo "
                                           ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 61, $this->source); })()), "Telephone", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                           ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 62, $this->source); })()), "Telephone", [], "any", false, false, false, 62), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                      
                                        <div class=\"col-12\">
                                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 66, $this->source); })()), "Register", [], "any", false, false, false, 66), 'row', ["attr" => ["label" => "Register", "class" => "register-button mt-0"]]);
        echo "
                                        </div>
                                        ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
                                    </div>
                                </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateurs/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 68,  181 => 66,  174 => 62,  170 => 61,  166 => 60,  160 => 57,  156 => 56,  152 => 55,  146 => 52,  142 => 51,  138 => 50,  132 => 47,  128 => 46,  124 => 45,  117 => 41,  113 => 40,  109 => 39,  102 => 35,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"header-footer.html.twig\" %}
{% block body %}
                <!-- Begin Mobile Menu Area -->
                <div class=\"mobile-menu-area d-lg-none d-xl-none col-12\">
                    <div class=\"container\"> 
                        <div class=\"row\">
                            <div class=\"mobile-menu\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class=\"breadcrumb-area\">
                <div class=\"container\">
                    <div class=\"breadcrumb-content\">
                        <ul>
                            <li><a href=\"index.html\">Home</a></li>
                            <li class=\"active\">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class=\"page-section mb-60\">
                <div class=\"container\">
                    <div class=\"row\">         
                        <div class=\"col-sm-12 col-md-12 col-lg-6 col-xs-12\">
                          
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\">Register</h4>
                                    {{ form_start(userForm,{'attr': {'novalidate': 'novalidate'}} ) }}
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                           
                                          <td>{{ form_label(userForm.Prenom,\"First Name\") }}</td>
                                          <td>{{ form_widget(userForm.Prenom,{'attr':{\"class\":\"mb-0\"}}) }}</td>
                                          <td>{{ form_errors(userForm.Prenom,{'attr':{\"class\":\"mb-0\"}}) }}</td>              
                                        </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                          
                                           {{ form_label(userForm.Nom,\"Last Name\") }}
                                           {{ form_widget(userForm.Nom,{'attr':{\"class\":\"mb-0\"}}) }}
                                           {{ form_errors(userForm.Nom,{'attr':{\"class\":\"mb-0\"}}) }}
                                        </div>
                                        <div class=\"col-md-12 mb-20\">
                                            {{ form_label(userForm.Email,\"Email Adress\") }}
                                            {{ form_widget(userForm.Email,{'attr':{\"class\":\"mb-0\"}}) }}
                                            {{ form_errors(userForm.Email,{'attr':{\"class\":\"mb-0\"}}) }}
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                           {{ form_label(userForm.Password,\"Password\") }}
                                           {{ form_widget(userForm.Password,{'attr':{\"class\":\"mb-0\" ,\"type\":\"PasswordType\"}}) }}
                                           {{ form_errors(userForm.Password,{'attr':{\"class\":\"mb-0\"}}) }}
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                           {{ form_label(userForm.Telephone,\"Telephone\") }}
                                           {{ form_widget(userForm.Telephone,{'attr':{\"class\":\"mb-0\"}}) }}
                                           {{ form_errors(userForm.Telephone,{'attr':{\"class\":\"mb-0\"}}) }}
                                        </div>
                                      
                                        <div class=\"col-12\">
                                            {{ form_row(userForm.Register,{'attr':{ \"label\":\"Register\" ,\"class\":\"register-button mt-0\"}}) }}
                                        </div>
                                        {{ form_end(userForm) }}
                                    </div>
                                </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
         {% endblock %}", "utilisateurs/add.html.twig", "/Users/skanderzouaoui/Documents/ProTECH/templates/utilisateurs/add.html.twig");
    }
}
