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

/* admin/commande/index.html.twig */
class __TwigTemplate_ed78fd28857d0625cd3f5f324dc85751fb7412c3f82cd2838a94a4b266103cb8 extends Template
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
        return "footer-headerbarre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/commande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/commande/index.html.twig"));

        $this->parent = $this->loadTemplate("footer-headerbarre.html.twig", "admin/commande/index.html.twig", 1);
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
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>DataTables</h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">DataTables</li>
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
                <h3 class=\"card-title\">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class=\"card-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                  <tr>
                    <th>Nom Client</th>
                    <th>Prenom Client</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Phone</th>
                    <th>Montant</th>
                    <th>Date commande</th>
                    <th>Etat Commande</th>
                    <th>Mode Paiement</th>
                    <th>Les produits achetés </th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 53
            echo "                    
                  <tr>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "nomClient", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "prenomClient", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "adresse", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "postcode", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "phone", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "montant", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "dateCommande", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true);
            echo "</td>
                    ";
            // line 62
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["class"], "etatcommande", [], "any", false, false, false, 62), 0))) {
                // line 63
                echo "                    <td>Non livré </td>
                    ";
            }
            // line 65
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["class"], "etatcommande", [], "any", false, false, false, 65), 1))) {
                // line 66
                echo "                    <td> livré </td>
                    ";
            }
            // line 68
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["class"], "modePaiemenet", [], "any", false, false, false, 68), 0))) {
                // line 69
                echo "                    <td>Par Carte Bancaire </td>
                    ";
            } else {
                // line 71
                echo "                    <td>Par Cash </td>
                    ";
            }
            // line 73
            echo "                    <td>
                      ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tab1"]) || array_key_exists("tab1", $context) ? $context["tab1"] : (function () { throw new RuntimeError('Variable "tab1" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["des"]) {
                // line 75
                echo "                      ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["des"], "commande", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), twig_get_attribute($this->env, $this->source, $context["class"], "id", [], "any", false, false, false, 75)))) {
                    // line 76
                    echo "                      *";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["des"], "produit", [], "any", false, false, false, 76), "description", [], "any", false, false, false, 76), "html", null, true);
                    echo " <br>
                      ";
                }
                // line 78
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['des'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "
                    </td> 
                    <td>
                        <a class=\"btn btn-info\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminmodif", ["id" => twig_get_attribute($this->env, $this->source, $context["class"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">Modifier</a>
                        <a class=\"btn btn-warning\"  href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminsupp", ["id" => twig_get_attribute($this->env, $this->source, $context["class"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\">Supprimer</a>
                         
                    </td> 
      
                 
                      
                             
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "             
                  </tbody>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<!-- DataTables  & Plugins -->
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jszip/jszip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pdfmake/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pdfmake/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 126
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
        return "admin/commande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 126,  308 => 125,  304 => 124,  300 => 123,  296 => 122,  292 => 121,  288 => 120,  284 => 119,  280 => 118,  276 => 117,  272 => 116,  268 => 115,  262 => 112,  252 => 111,  225 => 92,  210 => 83,  206 => 82,  201 => 79,  195 => 78,  189 => 76,  186 => 75,  182 => 74,  179 => 73,  175 => 71,  171 => 69,  168 => 68,  164 => 66,  161 => 65,  157 => 63,  155 => 62,  151 => 61,  147 => 60,  143 => 59,  139 => 58,  135 => 57,  131 => 56,  127 => 55,  123 => 53,  119 => 52,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"footer-headerbarre.html.twig\" %}

{% block body %}
  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>DataTables</h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">DataTables</li>
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
                <h3 class=\"card-title\">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class=\"card-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                  <tr>
                    <th>Nom Client</th>
                    <th>Prenom Client</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Phone</th>
                    <th>Montant</th>
                    <th>Date commande</th>
                    <th>Etat Commande</th>
                    <th>Mode Paiement</th>
                    <th>Les produits achetés </th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      {% for class in tab %}
                    
                  <tr>
                    <td>{{ class.nomClient}}</td>
                    <td>{{ class.prenomClient}}</td>
                    <td>{{ class.adresse}}</td>
                    <td>{{ class.postcode}}</td>
                    <td>{{ class.phone}}</td>
                    <td>{{ class.montant}}</td>
                    <td>{{ class.dateCommande | date(\"d/m/Y\")}}</td>
                    {% if class.etatcommande == 0 %}
                    <td>Non livré </td>
                    {% endif %}
                    {% if class.etatcommande == 1 %}
                    <td> livré </td>
                    {% endif %}
                    {% if class.modePaiemenet == 0 %}
                    <td>Par Carte Bancaire </td>
                    {% else %}
                    <td>Par Cash </td>
                    {% endif %}
                    <td>
                      {% for des in tab1 %}
                      {% if des.commande.id == class.id %}
                      *{{ des.produit.description  }} <br>
                      {% endif %}
                      {% endfor %}

                    </td> 
                    <td>
                        <a class=\"btn btn-info\" href=\"{{path('adminmodif',{id : class.id })}}\">Modifier</a>
                        <a class=\"btn btn-warning\"  href=\"{{path('adminsupp',{id : class.id })}}\">Supprimer</a>
                         
                    </td> 
      
                 
                      
                             
                  </tr>
                  {% endfor %}
             
                  </tbody>
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

{% endblock %}", "admin/commande/index.html.twig", "C:\\Users\\doghm\\Desktop\\PiDev\\ErrorMakers-3A45\\templates\\admin\\commande\\index.html.twig");
    }
}
