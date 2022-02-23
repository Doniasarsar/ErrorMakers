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

/* reponse/addReponse.html.twig */
class __TwigTemplate_f89e43b37576e5d93efc9379a0578c7dbc2ea686c4410fcb1f6b220aec100662 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/addReponse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/addReponse.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reponse/addReponse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    
    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <!-- left column -->
          <div class=\"col-md-12\">
            <!-- general form elements -->
            <div class=\"card card-primary\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Ajouter Reponse</h3>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
        
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                <div class=\"card-body\">
                  <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">id Commande</label>
                     ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 27, $this->source); })()), "idCommande", [], "any", false, false, false, 27), 'widget', ["attr" => ["value" => (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 27, $this->source); })()), "readonly" => true]]);
        echo " 
                     ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 28, $this->source); })()), "idCommande", [], "any", false, false, false, 28), 'errors');
        echo "
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Subject</label>
                   ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 32, $this->source); })()), "subject", [], "any", false, false, false, 32), 'widget', ["attr" => ["value" => (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 32, $this->source); })()), "readonly" => true]]);
        echo " 
                   ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 33, $this->source); })()), "subject", [], "any", false, false, false, 33), 'errors');
        echo "
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Reponse </label>
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 37, $this->source); })()), "message", [], "any", false, false, false, 37), 'widget');
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 38, $this->source); })()), "message", [], "any", false, false, false, 38), 'errors');
        echo "
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class=\"card-footer\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 45, $this->source); })()), "Add", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "btn btn-primary "]]);
        echo "

                </div>
             ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
              
            </div>
            <!-- /.card -->

          

          </div>

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
        return "reponse/addReponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  132 => 45,  122 => 38,  118 => 37,  111 => 33,  107 => 32,  100 => 28,  96 => 27,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}
  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    
    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <!-- left column -->
          <div class=\"col-md-12\">
            <!-- general form elements -->
            <div class=\"card card-primary\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Ajouter Reponse</h3>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
        
                {{ form_start(formA,{'attr': {'novalidate': 'novalidate'}} ) }}

                <div class=\"card-body\">
                  <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">id Commande</label>
                     {{ form_widget(formA.idCommande, {attr: { value : reclamation,readonly:true }}) }} 
                     {{ form_errors(formA.idCommande) }}
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Subject</label>
                   {{ form_widget(formA.subject, {attr: { value : subject,readonly:true }}) }} 
                   {{ form_errors(formA.subject) }}
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Reponse </label>
                    {{ form_widget(formA.message) }}
                    {{ form_errors(formA.message) }}
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class=\"card-footer\">
                {{ form_widget(formA.Add,{'attr':{ \"class\":\"btn btn-primary \" }}) }}

                </div>
             {{ form_end(formA) }}
              
            </div>
            <!-- /.card -->

          

          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
{% endblock %}", "reponse/addReponse.html.twig", "C:\\Users\\mariem\\Documents\\piDEV\\ErrorMakers-3A45\\templates\\reponse\\addReponse.html.twig");
    }
}
