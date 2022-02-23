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

/* utilisateurs/update.html.twig */
class __TwigTemplate_838ba190371523750e1067172b8938e2e88e16c27513ca52ae468bd452a29992 extends Template
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
        return "baseCart.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/update.html.twig"));

        $this->parent = $this->loadTemplate("baseCart.html.twig", "utilisateurs/update.html.twig", 1);
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

        echo "<title>ProTECH | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "Nom", [], "any", false, false, false, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "Prenom", [], "any", false, false, false, 2), "html", null, true);
        echo "</title> ";
        
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
                            <li class=\"active\">Account</li>
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
                                    <h4 class=\"login-title\">Update Account</h4>
                                    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                                    <div class=\"row\">
                                        <div class=\"col-md-8 col-12 mb-10\">
                                           
                                          <td>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 39, $this->source); })()), "Prenom", [], "any", false, false, false, 39), 'label', ["label" => "First Name"]);
        echo "</td>
                                          <td>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 40, $this->source); })()), "Prenom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "</td>
                                         </div>
                                        <div class=\"col-md-8 col-12 mb-10\">
                                          
                                           ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 44, $this->source); })()), "Nom", [], "any", false, false, false, 44), 'label', ["label" => "Last Name"]);
        echo "
                                           ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 45, $this->source); })()), "Nom", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                         
                                        </div>
                                        <div class=\"col-md-8 mb-10\">
                                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 49, $this->source); })()), "Telephone", [], "any", false, false, false, 49), 'label', ["label" => "Telephone"]);
        echo "
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 50, $this->source); })()), "Telephone", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                           
                                         </div>
                                       <div class=\"col-12\">
                                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 54, $this->source); })()), "Update", [], "any", false, false, false, 54), 'row', ["attr" => ["label" => "Update", "class" => "register-button mt-0"]]);
        echo "
                                          
                                        </div>
                                        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 57, $this->source); })()), 'form_end');
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
        return "utilisateurs/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 57,  168 => 54,  161 => 50,  157 => 49,  150 => 45,  146 => 44,  139 => 40,  135 => 39,  127 => 34,  111 => 21,  92 => 4,  82 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseCart.html.twig\" %}
{% block title %}<title>ProTECH | {{app.user.Nom }} {{app.user.Prenom }}</title> {% endblock %}
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
                            <li class=\"active\">Account</li>
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
                                    <h4 class=\"login-title\">Update Account</h4>
                                    {{ form_start(userForm,{'attr': {'novalidate': 'novalidate'}} ) }}

                                    <div class=\"row\">
                                        <div class=\"col-md-8 col-12 mb-10\">
                                           
                                          <td>{{ form_label(userForm.Prenom,\"First Name\") }}</td>
                                          <td>{{ form_widget(userForm.Prenom,{'attr':{\"class\":\"mb-0\"}}) }}</td>
                                         </div>
                                        <div class=\"col-md-8 col-12 mb-10\">
                                          
                                           {{ form_label(userForm.Nom,\"Last Name\") }}
                                           {{ form_widget(userForm.Nom,{'attr':{\"class\":\"mb-0\"}}) }}
                                         
                                        </div>
                                        <div class=\"col-md-8 mb-10\">
                                            {{ form_label(userForm.Telephone,\"Telephone\") }}
                                            {{ form_widget(userForm.Telephone,{'attr':{\"class\":\"mb-0\"}}) }}
                                           
                                         </div>
                                       <div class=\"col-12\">
                                            {{ form_row(userForm.Update,{'attr':{ \"label\":\"Update\" ,\"class\":\"register-button mt-0\"}}) }}
                                          
                                        </div>
                                        {{ form_end(userForm) }}
                                    </div>
                                </div>
                        
                        </div>
                   
                </div>
            </div>
            <!-- Login Content Area End Here -->
         {% endblock %}", "utilisateurs/update.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/utilisateurs/update.html.twig");
    }
}
