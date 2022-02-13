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

/* utilisateurs/register.html.twig */
class __TwigTemplate_d0a2bcedc91ef735b181c29a599ac151a6c73c7ebbc9f50d43673b52800ef6b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/register.html.twig"));

        $this->parent = $this->loadTemplate("header-footer.html.twig", "utilisateurs/register.html.twig", 1);
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
                            <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Home</a></li>
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
              
                       
                            <form action=\"#\">
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\">Register</h4>
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                            <label>First Name</label>
                                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserAdd"]) || array_key_exists("UserAdd", $context) ? $context["UserAdd"] : (function () { throw new RuntimeError('Variable "UserAdd" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                            <label>Last Name</label>
                                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserAdd"]) || array_key_exists("UserAdd", $context) ? $context["UserAdd"] : (function () { throw new RuntimeError('Variable "UserAdd" does not exist.', 43, $this->source); })()), "prenom", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            <label>Role</label>
                                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserAdd"]) || array_key_exists("UserAdd", $context) ? $context["UserAdd"] : (function () { throw new RuntimeError('Variable "UserAdd" does not exist.', 47, $this->source); })()), "role", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "mb-0", "value" => "Client"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-12 mb-20\">
                                            <label>Phone Number</label>
                                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserAdd"]) || array_key_exists("UserAdd", $context) ? $context["UserAdd"] : (function () { throw new RuntimeError('Variable "UserAdd" does not exist.', 51, $this->source); })()), "telephone", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            <label>Email Address*</label>
                                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserAdd"]) || array_key_exists("UserAdd", $context) ? $context["UserAdd"] : (function () { throw new RuntimeError('Variable "UserAdd" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        
                                        <div class=\"col-md-6 mb-20\">
                                            <label>Password</label>
                                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserAdd"]) || array_key_exists("UserAdd", $context) ? $context["UserAdd"] : (function () { throw new RuntimeError('Variable "UserAdd" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        
                                        <div class=\"col-12\">
                                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["UserAdd"]) || array_key_exists("UserAdd", $context) ? $context["UserAdd"] : (function () { throw new RuntimeError('Variable "UserAdd" does not exist.', 64, $this->source); })()), "Ajouter", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "register-button mt-0"]]);
        echo "
                                            <button class=\"register-button mt-0\">";
        // line 65
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 65, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                                          
                                           
                                        </div>
                                    </div>
                                </div>
                            </form>
                      
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
        return "utilisateurs/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 65,  152 => 64,  145 => 60,  137 => 55,  130 => 51,  123 => 47,  116 => 43,  109 => 39,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
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
                            <li><a href=\"{{path('front')}}\">Home</a></li>
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
              
                       
                            <form action=\"#\">
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\">Register</h4>
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                            <label>First Name</label>
                                            {{ form_widget(UserAdd.nom,{'attr':{\"class\":\"mb-0\" ,}}) }}
                                        </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                            <label>Last Name</label>
                                            {{ form_widget(UserAdd.prenom,{'attr':{\"class\":\"mb-0\" ,}}) }}
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            <label>Role</label>
                                            {{ form_widget(UserAdd.role,{'attr':{\"class\":\"mb-0\" ,\"value\":\"Client\",}}) }}
                                        </div>
                                        <div class=\"col-md-12 mb-20\">
                                            <label>Phone Number</label>
                                            {{ form_widget(UserAdd.telephone,{'attr':{\"class\":\"mb-0\" ,}}) }}
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            <label>Email Address*</label>
                                            {{ form_widget(UserAdd.email,{'attr':{\"class\":\"mb-0\" ,}}) }}
                                        </div>
                                        
                                        <div class=\"col-md-6 mb-20\">
                                            <label>Password</label>
                                            {{ form_widget(UserAdd.password,{'attr':{\"class\":\"mb-0\" ,}}) }}
                                        </div>
                                        
                                        <div class=\"col-12\">
                                            {{ form_widget(UserAdd.Ajouter,{'attr':{\"class\":\"register-button mt-0\" ,}}) }}
                                            <button class=\"register-button mt-0\">{{ button_label|default('Save') }}</button>
                                          
                                           
                                        </div>
                                    </div>
                                </div>
                            </form>
                      
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
         {% endblock %}", "utilisateurs/register.html.twig", "/Users/skanderzouaoui/Documents/ProTECH/templates/utilisateurs/register.html.twig");
    }
}
