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

/* commentaires/index.html.twig */
class __TwigTemplate_6e6a5e2bf1d195eeaf1574599cb735371363384362d570b1884827abc106783e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaires/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaires/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commentaires/index.html.twig", 1);
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
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>Liste des Evenements</h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">Liste des Evenements</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
               
            <div class=\"card\">
              <div class=\"card-header\">
                <h3 class=\"card-title\" > Liste des evenements </h3>

                
              </div>
              <a class=\"btn btn-info\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_add");
        echo "\" >Ajouter</a>
              <!-- /.card-header -->
              <div class=\"card-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                  <tr>
                    <th>Nom </th>
                    <th>Email</th>
                    <th>Contenu</th>
                    <th>Date</th>
                    <th>Action</th>       
              </tr>
                  </thead>
                  <tbody>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 51
            echo "                  <tr>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 55), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                    <td><a class=\"btn btn-warning\"  href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("com_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Supprimer</a></td>
    
                     </tr>
                  </tbody>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<!-- DataTables  & Plugins -->
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jszip/jszip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pdfmake/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pdfmake/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>

<script>
  \$(function () {
    \$(\"#example1\").DataTable({
      \"responsive\": true, \"lengthChange\": false, \"autoWidth\": false,
      \"buttons\": [\"copy\", \"csv\", \"excel\", \"pdf\", \"print\", \"colvis\"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    \$('#example2').DataTable({
      \"paging\": true,
      \"lengthChange\": false,
      \"searching\": false,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false,
      \"responsive\": true,
    });
  });
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commentaires/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 93,  234 => 92,  230 => 91,  226 => 90,  222 => 89,  218 => 88,  214 => 87,  210 => 86,  206 => 85,  202 => 84,  198 => 83,  194 => 82,  188 => 79,  178 => 78,  153 => 61,  142 => 56,  138 => 55,  134 => 54,  130 => 53,  126 => 52,  123 => 51,  119 => 50,  102 => 36,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
 <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>Liste des Evenements</h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">Liste des Evenements</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
               
            <div class=\"card\">
              <div class=\"card-header\">
                <h3 class=\"card-title\" > Liste des evenements </h3>

                
              </div>
              <a class=\"btn btn-info\" href=\"{{path('event_add')}}\" >Ajouter</a>
              <!-- /.card-header -->
              <div class=\"card-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                  <tr>
                    <th>Nom </th>
                    <th>Email</th>
                    <th>Contenu</th>
                    <th>Date</th>
                    <th>Action</th>       
              </tr>
                  </thead>
                  <tbody>
                    {% for comment in comments %}
                  <tr>
                    <td>{{ comment.pseudo}}</td>
                    <td>{{ comment.email}}</td>
                    <td>{{ comment.contenu}}</td>
                    <td>{{ comment.createdAt |date('Y-m-d H:i:s')}}</td>
                    <td><a class=\"btn btn-warning\"  href=\"{{path('com_delete',{id: comment.id })}}\">Supprimer</a></td>
    
                     </tr>
                  </tbody>
                  {% endfor %}
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
{% endblock %}

{% block javascripts %}
{{parent()}}

<!-- DataTables  & Plugins -->
<script src=\"{{asset('plugins/datatables/jquery.dataTables.min.js')}}\"></script>
<script src=\"{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}\"></script>
<script src=\"{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}\"></script>
<script src=\"{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}\"></script>
<script src=\"{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}\"></script>
<script src=\"{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}\"></script>
<script src=\"{{asset('plugins/jszip/jszip.min.js')}}\"></script>
<script src=\"{{asset('plugins/pdfmake/pdfmake.min.js')}}\"></script>
<script src=\"{{asset('plugins/pdfmake/vfs_fonts.js')}}\"></script>
<script src=\"{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}\"></script>
<script src=\"{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}\"></script>
<script src=\"{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}\"></script>

<script>
  \$(function () {
    \$(\"#example1\").DataTable({
      \"responsive\": true, \"lengthChange\": false, \"autoWidth\": false,
      \"buttons\": [\"copy\", \"csv\", \"excel\", \"pdf\", \"print\", \"colvis\"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    \$('#example2').DataTable({
      \"paging\": true,
      \"lengthChange\": false,
      \"searching\": false,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false,
      \"responsive\": true,
    });
  });
</script>

{% endblock %}
", "commentaires/index.html.twig", "C:\\Users\\PCS\\Desktop\\symf\\wadie PPI\\ErrorMakers-3A45\\templates\\commentaires\\index.html.twig");
    }
}
