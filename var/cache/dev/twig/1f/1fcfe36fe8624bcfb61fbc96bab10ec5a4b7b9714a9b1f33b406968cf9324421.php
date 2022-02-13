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

/* /admin/list.html.twig */
class __TwigTemplate_44f6b33ab615557daafbd1e74b0a535449188a48e867367a95bab6e20b7549b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/list.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "/admin/list.html.twig", 1);
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
      </tr>
      </thead>
      <tbody>
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "<tr>
 
<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Telephone", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
<td>";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "Role", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 47
                if ((0 === twig_compare($context["role"], "ROLE_USER"))) {
                    echo " 
      Utilisateur
";
                } elseif ((0 === twig_compare(                // line 49
$context["role"], "ROLE_ADMIN"))) {
                    // line 50
                    echo "      Administrateur
";
                } elseif ((0 === twig_compare(                // line 51
$context["role"], "ROLE_COMM"))) {
                    // line 52
                    echo "      Commercant
";
                } elseif ((0 === twig_compare(                // line 53
$context["role"], "ROLE_LIV"))) {
                    // line 54
                    echo "      Livreur

";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "</td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "<td colspan=\"6\">Il n'y a aucun utilisateur inscrit!</td>

</tbody>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        return "/admin/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 65,  173 => 61,  165 => 57,  156 => 54,  154 => 53,  151 => 52,  149 => 51,  146 => 50,  144 => 49,  139 => 47,  135 => 46,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  111 => 39,  106 => 38,  81 => 16,  68 => 5,  58 => 4,  35 => 1,);
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
", "/admin/list.html.twig", "/Users/skanderzouaoui/Documents/ProTECH/templates/admin/list.html.twig");
    }
}
