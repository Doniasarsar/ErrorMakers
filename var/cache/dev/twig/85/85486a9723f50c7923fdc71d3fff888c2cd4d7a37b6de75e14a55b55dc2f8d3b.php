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

/* dashboard/update.html.twig */
class __TwigTemplate_0f6bc7f19eabccb18f3a52746028413ef0d89c3f8f202c2f917b2929141a947f extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/update.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "dashboard/update.html.twig", 1);
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
        echo "
 <!-- Content Wrapper. Contains page content -->
 <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>General Form</h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <!-- left column -->
          <div class=\"col-md-6\">
            <!-- general form elements -->
            <div class=\"card card-primary\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Update User</h3>
              </div>
              <!-- /.card-header -->
              ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"card-body\">
                  <div class=\"form-group\">
                    <td>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 38, $this->source); })()), "Prenom", [], "any", false, false, false, 38), 'label', ["label" => "First Name"]);
        echo "</td>
                    <td>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 39, $this->source); })()), "Prenom", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                   
                  </div>
                  <div class=\"form-group\">
                    <td>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 43, $this->source); })()), "Nom", [], "any", false, false, false, 43), 'label', ["label" => "Last Name"]);
        echo "</td>
                    <td>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 44, $this->source); })()), "Nom", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                  </div>
                  <div class=\"form-group\">
                    <td>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 47, $this->source); })()), "Email", [], "any", false, false, false, 47), 'label', ["label" => "Email Adress"]);
        echo "</td>
                    <td>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 48, $this->source); })()), "Email", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                  </div>
                  <div class=\"form-group\">
                    <td>";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 51, $this->source); })()), "Telephone", [], "any", false, false, false, 51), 'label', ["label" => "Telephone Number"]);
        echo "</td>
                    <td>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 52, $this->source); })()), "Telephone", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                  </div> 
                  <div class=\"form-group\">
                    <td>";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 55, $this->source); })()), "Password", [], "any", false, false, false, 55), 'label', ["label" => "Password"]);
        echo "</td>
                    <td>";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 56, $this->source); })()), "Password", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "</td>
                  </div> 
                  <div class=\"form-check\">
                    <td>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 59, $this->source); })()), "Update", [], "any", false, false, false, 59), 'row', ["attr" => ["label" => "Save", "class" => "btn btn-warning"]]);
        echo "</td> 
                  </div>
                </div>
                ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 62, $this->source); })()), 'form_end');
        echo "  
                <!-- /.card-body -->

            
          </div>
          <!--/.col (left) -->
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 62,  159 => 59,  153 => 56,  149 => 55,  143 => 52,  139 => 51,  133 => 48,  129 => 47,  123 => 44,  119 => 43,  112 => 39,  108 => 38,  102 => 35,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseBack.html.twig\" %} 
{% block body %}

 <!-- Content Wrapper. Contains page content -->
 <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>General Form</h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <!-- left column -->
          <div class=\"col-md-6\">
            <!-- general form elements -->
            <div class=\"card card-primary\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Update User</h3>
              </div>
              <!-- /.card-header -->
              {{ form_start(userForm,{'attr': {'novalidate': 'novalidate'}} ) }}
                <div class=\"card-body\">
                  <div class=\"form-group\">
                    <td>{{ form_label(userForm.Prenom,\"First Name\") }}</td>
                    <td>{{ form_widget(userForm.Prenom,{'attr':{\"class\":\"form-control\"}}) }}</td>
                   
                  </div>
                  <div class=\"form-group\">
                    <td>{{ form_label(userForm.Nom,\"Last Name\") }}</td>
                    <td>{{ form_widget(userForm.Nom,{'attr':{\"class\":\"form-control\"}}) }}</td>
                  </div>
                  <div class=\"form-group\">
                    <td>{{ form_label(userForm.Email,\"Email Adress\") }}</td>
                    <td>{{ form_widget(userForm.Email,{'attr':{\"class\":\"form-control\"}}) }}</td>
                  </div>
                  <div class=\"form-group\">
                    <td>{{ form_label(userForm.Telephone,\"Telephone Number\") }}</td>
                    <td>{{ form_widget(userForm.Telephone,{'attr':{\"class\":\"form-control\"}}) }}</td>
                  </div> 
                  <div class=\"form-group\">
                    <td>{{ form_label(userForm.Password,\"Password\") }}</td>
                    <td>{{ form_widget(userForm.Password,{'attr':{\"class\":\"hidden\"}}) }}</td>
                  </div> 
                  <div class=\"form-check\">
                    <td>{{ form_row(userForm.Update,{'attr':{ \"label\":\"Save\" ,\"class\":\"btn btn-warning\"}}) }}</td> 
                  </div>
                </div>
                {{ form_end(userForm) }}  
                <!-- /.card-body -->

            
          </div>
          <!--/.col (left) -->
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
  {% endblock %}", "dashboard/update.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/dashboard/update.html.twig");
    }
}
