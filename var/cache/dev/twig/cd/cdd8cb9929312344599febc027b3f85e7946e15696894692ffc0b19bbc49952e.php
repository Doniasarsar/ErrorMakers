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

/* admin/commande/modifier.html.twig */
class __TwigTemplate_ecd1282aa4675ca4260c61259eef0017808f4162f7a1138f57366104496f8f62 extends Template
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
        return "footer-headerbarre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/commande/modifier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/commande/modifier.html.twig"));

        $this->parent = $this->loadTemplate("footer-headerbarre.html.twig", "admin/commande/modifier.html.twig", 1);
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
                <h3 class=\"card-title\">Modifier Commande</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "

                <div class=\"card-body\">
                  <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Nom client</label>
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nomClient", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Prenom Client</label>
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prenomClient", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Adresse </label>
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "adresse", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Code Postal </label>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "postcode", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Phone </label>
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "phone", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Montant </label>
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "montant", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Date Commande </label>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "dateCommande", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Etat Commande </label>
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "etatCommande", [], "any", false, false, false, 55), 'widget');
        echo "

                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Mode Paiement </label>
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "modePaiemenet", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class=\"card-footer\">
                  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                </div>
             ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
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
        return "admin/commande/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 71,  153 => 60,  145 => 55,  137 => 50,  130 => 46,  123 => 42,  116 => 38,  109 => 34,  102 => 30,  95 => 26,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"footer-headerbarre.html.twig\" %}

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
                <h3 class=\"card-title\">Modifier Commande</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
                {{ form_start(form) }}

                <div class=\"card-body\">
                  <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Nom client</label>
                    {{ form_widget(form.nomClient, {'attr': {'class': 'form-control'}}) }}
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Prenom Client</label>
                    {{ form_widget(form.prenomClient, {'attr': {'class': 'form-control'}}) }}
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Adresse </label>
                    {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Code Postal </label>
                    {{ form_widget(form.postcode, {'attr': {'class': 'form-control'}}) }}
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Phone </label>
                    {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Montant </label>
                    {{ form_widget(form.montant, {'attr': {'class': 'form-control'}}) }}
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Date Commande </label>
                    {{ form_widget(form.dateCommande, {'attr': {'class': 'form-control'}}) }}

                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Etat Commande </label>
                    {{form_widget(form.etatCommande )}}

                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Mode Paiement </label>
                    {{ form_widget(form.modePaiemenet, {'attr': {'class': 'form-control'}}) }}

                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class=\"card-footer\">
                  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                </div>
             {{ form_end(form) }}
           
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
{% endblock %}", "admin/commande/modifier.html.twig", "C:\\Users\\doghm\\Desktop\\PiDev\\ErrorMakers-3A45\\templates\\admin\\commande\\modifier.html.twig");
    }
}
