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

/* utilisateurs/addActeurS.html.twig */
class __TwigTemplate_f3beed83515dc4a40167e62746a892b959fb3bc5bab1f709acf9d05be8f032da extends Template
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/addActeurS.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/addActeurS.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "utilisateurs/addActeurS.html.twig", 1);
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

        echo "<title>ProTECH | Register</title> ";
        
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
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
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
                       
                          
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\">Register</h4>
                                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                           
                                          <td>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 40, $this->source); })()), "Prenom", [], "any", false, false, false, 40), 'label', ["label" => "First Name"]);
        echo "</td>
                                          <td>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 41, $this->source); })()), "Prenom", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "</td>
                                        </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                          
                                           ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 45, $this->source); })()), "Nom", [], "any", false, false, false, 45), 'label', ["label" => "Last Name"]);
        echo "
                                           ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 46, $this->source); })()), "Nom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 49, $this->source); })()), "Telephone", [], "any", false, false, false, 49), 'label', ["label" => "Telephone"]);
        echo "
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 50, $this->source); })()), "Telephone", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                           
                                         </div>
                                        <div class=\"col-md-6 mb-20\">
                                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 54, $this->source); })()), "Email", [], "any", false, false, false, 54), 'label', ["label" => "Email Adress"]);
        echo "
                                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 55, $this->source); })()), "Email", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                           ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 58, $this->source); })()), "Password", [], "any", false, false, false, 58), 'label', ["label" => "Password"]);
        echo "
                                           ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 59, $this->source); })()), "Password", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 63, $this->source); })()), "ConfirmPassword", [], "any", false, false, false, 63), 'label', ["label" => "Confirm Password"]);
        echo "
                                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 64, $this->source); })()), "ConfirmPassword", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                         
                                         </div>
                                        <div class=\"col-md-6 mb-20\">
                                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 68, $this->source); })()), "Boutique", [], "any", false, false, false, 68), 'label', ["label" => "Boutique"]);
        echo "
                                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 69, $this->source); })()), "Boutique", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 70, $this->source); })()), "Boutique", [], "any", false, false, false, 70), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                         </div>
                                         <div class=\"col-md-6 mb-20\">
                                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 73, $this->source); })()), "Role", [], "any", false, false, false, 73), 'label', ["label" => "Rôles"]);
        echo "
                                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 74, $this->source); })()), "Role", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 75, $this->source); })()), "Role", [], "any", false, false, false, 75), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                         </div>
                                       
                                         
                                        <div class=\"col-12\">
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 80, $this->source); })()), "Register", [], "any", false, false, false, 80), 'row', ["attr" => ["label" => "Register", "class" => "register-button mt-0"]]);
        echo "
                                        </div>
                                        ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ActeurSForm"]) || array_key_exists("ActeurSForm", $context) ? $context["ActeurSForm"] : (function () { throw new RuntimeError('Variable "ActeurSForm" does not exist.', 82, $this->source); })()), 'form_end');
        echo "
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
        return "utilisateurs/addActeurS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 82,  226 => 80,  218 => 75,  214 => 74,  210 => 73,  204 => 70,  200 => 69,  196 => 68,  189 => 64,  185 => 63,  178 => 59,  174 => 58,  168 => 55,  164 => 54,  157 => 50,  153 => 49,  147 => 46,  143 => 45,  136 => 41,  132 => 40,  125 => 36,  107 => 21,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseFront.html.twig\" %}
{% block title %}<title>ProTECH | Register</title> {% endblock %}
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
                            <li><a href=\"{{path('home')}}\">Home</a></li>
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
                       
                          
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\">Register</h4>
                                    {{ form_start(ActeurSForm,{'attr': {'novalidate': 'novalidate'}} ) }}
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                           
                                          <td>{{ form_label(ActeurSForm.Prenom,\"First Name\") }}</td>
                                          <td>{{ form_widget(ActeurSForm.Prenom,{'attr':{\"class\":\"mb-0\"}}) }}</td>
                                        </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                          
                                           {{ form_label(ActeurSForm.Nom,\"Last Name\") }}
                                           {{ form_widget(ActeurSForm.Nom,{'attr':{\"class\":\"mb-0\"}}) }}
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            {{ form_label(ActeurSForm.Telephone,\"Telephone\") }}
                                            {{ form_widget(ActeurSForm.Telephone,{'attr':{\"class\":\"mb-0\"}}) }}
                                           
                                         </div>
                                        <div class=\"col-md-6 mb-20\">
                                            {{ form_label(ActeurSForm.Email,\"Email Adress\") }}
                                            {{ form_widget(ActeurSForm.Email,{'attr':{\"class\":\"mb-0\"}}) }}
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                           {{ form_label(ActeurSForm.Password,\"Password\") }}
                                           {{ form_widget(ActeurSForm.Password,{'attr':{\"class\":\"mb-0\"}}) }}
                                        
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            {{ form_label(ActeurSForm.ConfirmPassword,\"Confirm Password\") }}
                                            {{ form_widget(ActeurSForm.ConfirmPassword,{'attr':{\"class\":\"mb-0\"}}) }}
                                         
                                         </div>
                                        <div class=\"col-md-6 mb-20\">
                                            {{ form_label(ActeurSForm.Boutique,\"Boutique\") }}
                                            {{ form_widget(ActeurSForm.Boutique,{'attr':{\"class\":\"mb-0\"}}) }}
                                            {{ form_errors(ActeurSForm.Boutique,{'attr':{\"class\":\"mb-0\"}}) }}
                                         </div>
                                         <div class=\"col-md-6 mb-20\">
                                            {{ form_label(ActeurSForm.Role,\"Rôles\") }}
                                            {{ form_widget(ActeurSForm.Role,{'attr':{\"class\":\"mb-0\"}}) }}
                                            {{ form_errors(ActeurSForm.Role,{'attr':{\"class\":\"mb-0\"}}) }}
                                         </div>
                                       
                                         
                                        <div class=\"col-12\">
                                            {{ form_row(ActeurSForm.Register,{'attr':{ \"label\":\"Register\" ,\"class\":\"register-button mt-0\"}}) }}
                                        </div>
                                        {{ form_end(ActeurSForm) }}
                                    </div>
                                </div>
                        
                        </div>
                  
                </div>
            </div>
            <!-- Login Content Area End Here -->
         {% endblock %}", "utilisateurs/addActeurS.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/utilisateurs/addActeurS.html.twig");
    }
}
