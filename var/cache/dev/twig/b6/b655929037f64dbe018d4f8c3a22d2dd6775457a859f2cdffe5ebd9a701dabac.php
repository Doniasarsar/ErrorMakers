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

/* demande/addActeur.html.twig */
class __TwigTemplate_9729c691783e1d43adf3a4bcdd065dfcfae0f82390fa6ba2612e38a11fbd4e57 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/addActeur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/addActeur.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "demande/addActeur.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                           
                                          <td>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 40, $this->source); })()), "Prenom", [], "any", false, false, false, 40), 'label', ["label" => "First Name"]);
        echo "</td>
                                          <td>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 41, $this->source); })()), "Prenom", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "</td>
                                        </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                          
                                           ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 45, $this->source); })()), "Nom", [], "any", false, false, false, 45), 'label', ["label" => "Last Name"]);
        echo "
                                           ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 46, $this->source); })()), "Nom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 49, $this->source); })()), "Telephone", [], "any", false, false, false, 49), 'label', ["label" => "Telephone"]);
        echo "
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 50, $this->source); })()), "Telephone", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                           
                                         </div>
                                        <div class=\"col-md-6 mb-20\">
                                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 54, $this->source); })()), "Email", [], "any", false, false, false, 54), 'label', ["label" => "Email Adress"]);
        echo "
                                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 55, $this->source); })()), "Email", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                           ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 58, $this->source); })()), "Password", [], "any", false, false, false, 58), 'label', ["label" => "Password"]);
        echo "
                                           ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 59, $this->source); })()), "Password", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                        
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 63, $this->source); })()), "ConfirmPassword", [], "any", false, false, false, 63), 'label', ["label" => "Confirm Password"]);
        echo "
                                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 64, $this->source); })()), "ConfirmPassword", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                         
                                         </div>   
                                    </div>    

                                    
                                        <h4 class=\"login-title\">Security Questions</h4>
                                        <div class=\"row\">
                                              <div class=\"col-md-6 mb-20\">
                                                 ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 73, $this->source); })()), "QuestionSecurite1", [], "any", false, false, false, 73), 'label', ["label" => "What is the name of the town where you were born?"]);
        echo "
                                                 ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 74, $this->source); })()), "QuestionSecurite1", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                 
                                              </div>
                                              <div class=\"col-md-6 mb-20\">
                                                 ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 78, $this->source); })()), "QuestionSecurite2", [], "any", false, false, false, 78), 'label', ["label" => "Where was your best family vacation as a kid?"]);
        echo "
                                                 ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 79, $this->source); })()), "QuestionSecurite2", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                 
                                              </div>
                                              <div class=\"col-md-6 mb-20\">
                                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 83, $this->source); })()), "Role", [], "any", false, false, false, 83), 'label', ["label" => "Rôles"]);
        echo "
                                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 84, $this->source); })()), "Role", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 85, $this->source); })()), "Role", [], "any", false, false, false, 85), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                             </div>
                                        <div class=\"col-12\">
                                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 88, $this->source); })()), "Register", [], "any", false, false, false, 88), 'row', ["attr" => ["label" => "Register", "class" => "register-button mt-0"]]);
        echo "
                                        </div>
                                        ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ActeurForm"]) || array_key_exists("ActeurForm", $context) ? $context["ActeurForm"] : (function () { throw new RuntimeError('Variable "ActeurForm" does not exist.', 90, $this->source); })()), 'form_end');
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
        return "demande/addActeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 90,  237 => 88,  231 => 85,  227 => 84,  223 => 83,  216 => 79,  212 => 78,  205 => 74,  201 => 73,  189 => 64,  185 => 63,  178 => 59,  174 => 58,  168 => 55,  164 => 54,  157 => 50,  153 => 49,  147 => 46,  143 => 45,  136 => 41,  132 => 40,  125 => 36,  107 => 21,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
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
                                    {{ form_start(ActeurForm,{'attr': {'novalidate': 'novalidate'}} ) }}
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                           
                                          <td>{{ form_label(ActeurForm.Prenom,\"First Name\") }}</td>
                                          <td>{{ form_widget(ActeurForm.Prenom,{'attr':{\"class\":\"mb-0\"}}) }}</td>
                                        </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                          
                                           {{ form_label(ActeurForm.Nom,\"Last Name\") }}
                                           {{ form_widget(ActeurForm.Nom,{'attr':{\"class\":\"mb-0\"}}) }}
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            {{ form_label(ActeurForm.Telephone,\"Telephone\") }}
                                            {{ form_widget(ActeurForm.Telephone,{'attr':{\"class\":\"mb-0\"}}) }}
                                           
                                         </div>
                                        <div class=\"col-md-6 mb-20\">
                                            {{ form_label(ActeurForm.Email,\"Email Adress\") }}
                                            {{ form_widget(ActeurForm.Email,{'attr':{\"class\":\"mb-0\"}}) }}
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                           {{ form_label(ActeurForm.Password,\"Password\") }}
                                           {{ form_widget(ActeurForm.Password,{'attr':{\"class\":\"mb-0\"}}) }}
                                        
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            {{ form_label(ActeurForm.ConfirmPassword,\"Confirm Password\") }}
                                            {{ form_widget(ActeurForm.ConfirmPassword,{'attr':{\"class\":\"mb-0\"}}) }}
                                         
                                         </div>   
                                    </div>    

                                    
                                        <h4 class=\"login-title\">Security Questions</h4>
                                        <div class=\"row\">
                                              <div class=\"col-md-6 mb-20\">
                                                 {{ form_label(ActeurForm.QuestionSecurite1,\"What is the name of the town where you were born?\") }}
                                                 {{ form_widget(ActeurForm.QuestionSecurite1,{'attr':{\"class\":\"mb-0\"}}) }}
                                                 
                                              </div>
                                              <div class=\"col-md-6 mb-20\">
                                                 {{ form_label(ActeurForm.QuestionSecurite2,\"Where was your best family vacation as a kid?\") }}
                                                 {{ form_widget(ActeurForm.QuestionSecurite2,{'attr':{\"class\":\"mb-0\"}}) }}
                                                 
                                              </div>
                                              <div class=\"col-md-6 mb-20\">
                                                {{ form_label(ActeurForm.Role,\"Rôles\") }}
                                                {{ form_widget(ActeurForm.Role,{'attr':{\"class\":\"mb-0\"}}) }}
                                                {{ form_errors(ActeurForm.Role,{'attr':{\"class\":\"mb-0\"}}) }}
                                             </div>
                                        <div class=\"col-12\">
                                            {{ form_row(ActeurForm.Register,{'attr':{ \"label\":\"Register\" ,\"class\":\"register-button mt-0\"}}) }}
                                        </div>
                                        {{ form_end(ActeurForm) }}
                                    </div>
                                </div>
                        
                        </div>
                  
                </div>
            </div>
            <!-- Login Content Area End Here -->
         {% endblock %}", "demande/addActeur.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/demande/addActeur.html.twig");
    }
}
