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

/* utilisateurs/compte.html.twig */
class __TwigTemplate_e2749cc550c88168b1c72c665dfc48115b08d920c179186041e4e3aee7133dde extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/compte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/compte.html.twig"));

        $this->parent = $this->loadTemplate("baseCart.html.twig", "utilisateurs/compte.html.twig", 1);
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
        echo "
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
                            <li><a href=\"";
        // line 22
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

                                    <h5 class=\"login-title\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userupdate", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">Update Info</a></h5>
                                    <h5 class=\"login-title\"><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirmuser");
        echo "\">Or Update Password</a></h5>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-md-8 col-12 mb-10\">
                                           
                                            <label>First Name</label>
                                            <input class=\"mb-0\" type=\"text\" 
                                            value= ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "Prenom", [], "any", false, false, false, 43), "html", null, true);
        echo " readonly>
                                         </div>
                                        <div class=\"col-md-8 col-12 mb-10\">
                                          
                                            <label>Last Name</label>
                                            <input class=\"mb-0\" type=\"text\" 
                                            value= ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "Nom", [], "any", false, false, false, 49), "html", null, true);
        echo " readonly>
                                         
                                        </div>
                                        <div class=\"col-md-8 mb-10\">
                                            <label>Telephone</label>
                                            <input class=\"mb-0\" type=\"text\" 
                                            value= ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "Telephone", [], "any", false, false, false, 55), "html", null, true);
        echo " readonly>
                                           
                                         </div>
                                        <div class=\"col-md-8 mb-10\">
                                            <label>Email</label>
                                            <input class=\"mb-0\" type=\"text\" 
                                            value= ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "Email", [], "any", false, false, false, 61), "html", null, true);
        echo " readonly>
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
        return "utilisateurs/compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 61,  160 => 55,  151 => 49,  142 => 43,  132 => 36,  128 => 35,  112 => 22,  92 => 4,  82 => 3,  59 => 2,  36 => 1,);
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

                                    <h5 class=\"login-title\"><a href=\"{{path(\"userupdate\",{'id':app.user.id}) }}\">Update Info</a></h5>
                                    <h5 class=\"login-title\"><a href=\"{{path('confirmuser') }}\">Or Update Password</a></h5>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-md-8 col-12 mb-10\">
                                           
                                            <label>First Name</label>
                                            <input class=\"mb-0\" type=\"text\" 
                                            value= {{app.user.Prenom}} readonly>
                                         </div>
                                        <div class=\"col-md-8 col-12 mb-10\">
                                          
                                            <label>Last Name</label>
                                            <input class=\"mb-0\" type=\"text\" 
                                            value= {{app.user.Nom}} readonly>
                                         
                                        </div>
                                        <div class=\"col-md-8 mb-10\">
                                            <label>Telephone</label>
                                            <input class=\"mb-0\" type=\"text\" 
                                            value= {{app.user.Telephone}} readonly>
                                           
                                         </div>
                                        <div class=\"col-md-8 mb-10\">
                                            <label>Email</label>
                                            <input class=\"mb-0\" type=\"text\" 
                                            value= {{app.user.Email}} readonly>
                                          </div>
                                         
                                    </div>
                                </div>
                        
                        </div>
                   
                </div>
            </div>
            <!-- Login Content Area End Here -->
         {% endblock %}", "utilisateurs/compte.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/utilisateurs/compte.html.twig");
    }
}
