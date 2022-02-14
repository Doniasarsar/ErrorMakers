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

/* /dashboard/listusers.html.twig */
class __TwigTemplate_88be26f14a393c1fd77e75ed6a5bf4a4019ffb52369a3723be2014f7d31b21ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/dashboard/listusers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/dashboard/listusers.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "/dashboard/listusers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <div class=\"content-header\">
    <div class=\"container-fluid\">
      <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
          <h1 class=\"m-0\">Gestion Utilisateurs</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
          <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Home</a></li>
            <li class=\"breadcrumb-item active\">Gestion Utilisateurs</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


    <table id=\"example1\" class=\"table table-bordered table-striped\">
      <thead>
      <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>EMAIL</th>
        <th>TELEPHONE</th>
        <th>ROLE</th>
        <th colspan=\"2\">OPTION</th>
       
      </tr>
      </thead>
      <tbody>
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 41
            echo "<tr>
 
<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Telephone", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
<td>";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "Role", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 49
                if ((0 === twig_compare($context["role"], "ROLE_USER"))) {
                    echo " 
      Utilisateur
";
                } elseif ((0 === twig_compare(                // line 51
$context["role"], "ROLE_ADMIN"))) {
                    // line 52
                    echo "      Administrateur
";
                } elseif ((0 === twig_compare(                // line 53
$context["role"], "ROLE_COMM"))) {
                    // line 54
                    echo "      Commercant
";
                } elseif ((0 === twig_compare(                // line 55
$context["role"], "ROLE_LIV"))) {
                    // line 56
                    echo "      Livreur

";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "</td>
<td><a class=\"btn btn-info\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userupdate", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">Update</a>
<td><a class=\"btn btn-danger\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userdelete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">Delete</a>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "<td colspan=\"6\">Il n'y a aucun utilisateur inscrit!</td>

</tbody>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</table>               
    

</div>
<!-- /.content-wrapper -->
<!-- Control Sidebar -->
<aside class=\"control-sidebar control-sidebar-dark\">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/dashboard/listusers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 69,  183 => 65,  174 => 61,  170 => 60,  167 => 59,  158 => 56,  156 => 55,  153 => 54,  151 => 53,  148 => 52,  146 => 51,  141 => 49,  137 => 48,  133 => 47,  129 => 46,  125 => 45,  121 => 44,  117 => 43,  113 => 41,  108 => 40,  81 => 16,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends \"baseBack.html.twig\" %} 


 {% block body %}
 <!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <div class=\"content-header\">
    <div class=\"container-fluid\">
      <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
          <h1 class=\"m-0\">Gestion Utilisateurs</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
          <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"{{path('dashboard')}}\">Home</a></li>
            <li class=\"breadcrumb-item active\">Gestion Utilisateurs</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


    <table id=\"example1\" class=\"table table-bordered table-striped\">
      <thead>
      <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>EMAIL</th>
        <th>TELEPHONE</th>
        <th>ROLE</th>
        <th colspan=\"2\">OPTION</th>
       
      </tr>
      </thead>
      <tbody>
{% for user in users %}
<tr>
 
<td>{{user.id}}</td>
<td>{{user.Nom}}</td>
<td>{{user.Prenom}}</td>
<td>{{user.Email}}</td>
<td>{{user.Telephone}}</td>
<td>{% for role in user.Role %}
{% if role == \"ROLE_USER\" %} 
      Utilisateur
{% elseif role == \"ROLE_ADMIN\" %}
      Administrateur
{% elseif role == \"ROLE_COMM\" %}
      Commercant
{% elseif role == \"ROLE_LIV\" %}
      Livreur

{% endif %}
{% endfor %}</td>
<td><a class=\"btn btn-info\" href=\"{{path(\"userupdate\",{'id':user.id}) }}\">Update</a>
<td><a class=\"btn btn-danger\" href=\"{{path(\"userdelete\",{'id':user.id}) }}\">Delete</a>

</tr>
{% else %}
<td colspan=\"6\">Il n'y a aucun utilisateur inscrit!</td>

</tbody>
{% endfor %}
</table>               
    

</div>
<!-- /.content-wrapper -->
<!-- Control Sidebar -->
<aside class=\"control-sidebar control-sidebar-dark\">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

{% endblock %}
", "/dashboard/listusers.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/dashboard/listusers.html.twig");
    }
}
