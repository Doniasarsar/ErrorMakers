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

/* /dashboard/demandelist.html.twig */
class __TwigTemplate_2be343b71758a5c06736092aa3b543930f403498e346a33247bdc2b65488eb28 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/dashboard/demandelist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/dashboard/demandelist.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "/dashboard/demandelist.html.twig", 1);
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
        echo " <!-- Content Wrapper. Contains page content -->
 <div class=\"content-wrapper\">
   <!-- Content Header (Page header) -->
   <section class=\"content-header\">
     <div class=\"container-fluid\">
       <div class=\"row mb-2\">
         <div class=\"col-sm-6\">
           <h1>Demandes list</h1>
         </div>
         <div class=\"col-sm-6\">
           <ol class=\"breadcrumb float-sm-right\">
             <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
             <li class=\"breadcrumb-item active\">Demandes list</li>
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
             <!-- /.card-header -->
             <div class=\"card-body\">
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
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 47
            echo "                         <tr>
                         <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                         <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "Nom", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                         <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "Prenom", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                         <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "Email", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                         <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "Telephone", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                         <td>";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["demande"], "Role", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 54
                echo "                         ";
                if ((0 === twig_compare($context["role"], "ROLE_demande"))) {
                    echo " 
                             Utilisateur
                         ";
                } elseif ((0 === twig_compare(                // line 56
$context["role"], "ROLE_ADMIN"))) {
                    // line 57
                    echo "                             Administrateur
                         ";
                } elseif ((0 === twig_compare(                // line 58
$context["role"], "ROLE_COMM"))) {
                    // line 59
                    echo "                             Commercant
                         ";
                } elseif ((0 === twig_compare(                // line 60
$context["role"], "ROLE_LIV"))) {
                    // line 61
                    echo "                             Livreur
                         ";
                }
                // line 63
                echo "                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                        
                       
                       
                         <td><a class=\"btn btn-danger\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demdelete", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Delete</a>
                         <td><a class=\"btn btn-success\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demaccept", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">Accepter</a>   

                         </tr>
                         ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "                         <td colspan=\"8\">Il n'y a aucune Nouvelle demande !</td>

                         </tbody>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "               </table>
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

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<!-- DataTables  & Plugins -->
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jszip/jszip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pdfmake/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/pdfmake/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
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
        return "/dashboard/demandelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 108,  281 => 107,  277 => 106,  273 => 105,  269 => 104,  265 => 103,  261 => 102,  257 => 101,  253 => 100,  249 => 99,  245 => 98,  241 => 97,  235 => 94,  225 => 93,  200 => 76,  191 => 72,  182 => 68,  178 => 67,  167 => 63,  163 => 61,  161 => 60,  158 => 59,  156 => 58,  153 => 57,  151 => 56,  145 => 54,  141 => 53,  137 => 52,  133 => 51,  129 => 50,  125 => 49,  121 => 48,  118 => 47,  113 => 46,  69 => 4,  59 => 3,  36 => 1,);
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
           <h1>Demandes list</h1>
         </div>
         <div class=\"col-sm-6\">
           <ol class=\"breadcrumb float-sm-right\">
             <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
             <li class=\"breadcrumb-item active\">Demandes list</li>
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
             <!-- /.card-header -->
             <div class=\"card-body\">
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
                   {% for demande in demandes %}
                         <tr>
                         <td>{{demande.id}}</td>
                         <td>{{demande.Nom}}</td>
                         <td>{{demande.Prenom}}</td>
                         <td>{{demande.Email}}</td>
                         <td>{{demande.Telephone}}</td>
                         <td>{% for role in demande.Role %}
                         {% if role == \"ROLE_demande\" %} 
                             Utilisateur
                         {% elseif role == \"ROLE_ADMIN\" %}
                             Administrateur
                         {% elseif role == \"ROLE_COMM\" %}
                             Commercant
                         {% elseif role == \"ROLE_LIV\" %}
                             Livreur
                         {% endif %}
                         {% endfor %}</td>
                        
                       
                       
                         <td><a class=\"btn btn-danger\" href=\"{{path(\"admin_demdelete\",{'id':demande.id}) }}\">Delete</a>
                         <td><a class=\"btn btn-success\" href=\"{{path(\"admin_demaccept\",{'id':demande.id}) }}\">Accepter</a>   

                         </tr>
                         {% else %}
                         <td colspan=\"8\">Il n'y a aucune Nouvelle demande !</td>

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

{% endblock %}", "/dashboard/demandelist.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/dashboard/demandelist.html.twig");
    }
}
