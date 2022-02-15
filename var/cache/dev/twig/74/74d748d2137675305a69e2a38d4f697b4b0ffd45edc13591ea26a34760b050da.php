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

/* baseBack.html.twig */
class __TwigTemplate_c31ae6fb43db7af17c28275bec1a95a1122f1dc8790494c2838b569ef76b235a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "
  ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "<!-- Preloader -->
<div class=\"preloader flex-column justify-content-center align-items-center\">
  <img class=\"animation__wobble\" src=\"dist/img/protech.png\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
</div>
 
  <nav class=\"main-header navbar navbar-expand navbar-dark\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"index3.html\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>
    </ul>
     <!-- Right navbar links -->
     <ul class=\"navbar-nav ml-auto\">
        <!-- Navbar Search -->
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
            <i class=\"fas fa-search\"></i>
          </a>
          <div class=\"navbar-search-block\">
            <form class=\"form-inline\">
              <div class=\"input-group input-group-sm\">
                <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                  <button class=\"btn btn-navbar\" type=\"submit\">
                    <i class=\"fas fa-search\"></i>
                  </button>
                  <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                    <i class=\"fas fa-times\"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
  
        <!-- Messages Dropdown Menu -->
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-comments\"></i>
            <span class=\"badge badge-danger navbar-badge\">3</span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ist/img/user1-128x128.jpg"), "html", null, true);
        echo "d\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    Brad Diesel
                    <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                  </h3>
                  <p class=\"text-sm\">Call me whenever you can...</p>
                  <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user8-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    John Pierce
                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                  </h3>
                  <p class=\"text-sm\">I got your message bro</p>
                  <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    Nora Silvester
                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                  </h3>
                  <p class=\"text-sm\">The subject goes here</p>
                  <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-bell\"></i>
            <span class=\"badge badge-warning navbar-badge\">15</span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
              <span class=\"float-right text-muted text-sm\">3 mins</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-users mr-2\"></i> 8 friend requests
              <span class=\"float-right text-muted text-sm\">12 hours</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-file mr-2\"></i> 3 new reports
              <span class=\"float-right text-muted text-sm\">2 days</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
            <i class=\"fas fa-expand-arrows-alt\"></i>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
            <i class=\"fas fa-th-large\"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
     <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
      <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/protech.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class=\"form-inline\">
        <div class=\"input-group\" data-widget=\"sidebar-search\">
          <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-sidebar\">
              <i class=\"fas fa-search fa-fw\"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item menu-open\">
            <a href=\"#\" class=\"nav-link active\">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
              <p>
                Dashboard
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\" class=\"nav-link active\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard Admin</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard Commercant</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard Livreur</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userlist");
        echo "\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-user\"></i>
              <p>
                Utilisateurs
                <span class=\"right badge badge-danger\">New</span>
              </p>
            </a>
          </li>
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  ";
        // line 242
        $this->displayBlock('body', $context, $blocks);
        // line 245
        echo "


<!-- Main Footer -->
  <footer class=\"main-footer\">
    <strong>Copyright &copy; 2014-2021 <a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>
</div>
<!-- ./wrapper -->
";
        // line 258
        $this->displayBlock('javascripts', $context, $blocks);
        // line 284
        echo "</b>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>ProTECH| Dashboard</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome Icons -->
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">

</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 242
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 243
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 258
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 259
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        echo "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/pages/dashboard2.js"), "html", null, true);
        echo "\"></script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 279,  472 => 277,  466 => 274,  461 => 272,  457 => 271,  453 => 270,  449 => 269,  442 => 265,  437 => 263,  432 => 261,  426 => 259,  416 => 258,  405 => 243,  395 => 242,  381 => 16,  376 => 14,  371 => 12,  366 => 9,  356 => 8,  337 => 6,  325 => 284,  323 => 258,  308 => 245,  306 => 242,  288 => 227,  265 => 207,  228 => 173,  216 => 164,  153 => 104,  134 => 88,  115 => 72,  61 => 20,  59 => 8,  56 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  {% block title %}<title>ProTECH| Dashboard</title>{% endblock %}

  {% block stylesheets %}
  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome Icons -->
  <link rel=\"stylesheet\" href=\"{{asset('plugins/fontawesome-free/css/all.min.css')}}\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{asset('dist/css/adminlte.min.css')}}\">

</head>
{% endblock %}
<!-- Preloader -->
<div class=\"preloader flex-column justify-content-center align-items-center\">
  <img class=\"animation__wobble\" src=\"dist/img/protech.png\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
</div>
 
  <nav class=\"main-header navbar navbar-expand navbar-dark\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"index3.html\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>
    </ul>
     <!-- Right navbar links -->
     <ul class=\"navbar-nav ml-auto\">
        <!-- Navbar Search -->
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
            <i class=\"fas fa-search\"></i>
          </a>
          <div class=\"navbar-search-block\">
            <form class=\"form-inline\">
              <div class=\"input-group input-group-sm\">
                <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                  <button class=\"btn btn-navbar\" type=\"submit\">
                    <i class=\"fas fa-search\"></i>
                  </button>
                  <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                    <i class=\"fas fa-times\"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
  
        <!-- Messages Dropdown Menu -->
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-comments\"></i>
            <span class=\"badge badge-danger navbar-badge\">3</span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"{{asset('ist/img/user1-128x128.jpg')}}d\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    Brad Diesel
                    <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                  </h3>
                  <p class=\"text-sm\">Call me whenever you can...</p>
                  <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"{{asset('dist/img/user8-128x128.jpg')}}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    John Pierce
                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                  </h3>
                  <p class=\"text-sm\">I got your message bro</p>
                  <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <!-- Message Start -->
              <div class=\"media\">
                <img src=\"{{asset('dist/img/user3-128x128.jpg')}}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                <div class=\"media-body\">
                  <h3 class=\"dropdown-item-title\">
                    Nora Silvester
                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                  </h3>
                  <p class=\"text-sm\">The subject goes here</p>
                  <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"far fa-bell\"></i>
            <span class=\"badge badge-warning navbar-badge\">15</span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
            <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
              <span class=\"float-right text-muted text-sm\">3 mins</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-users mr-2\"></i> 8 friend requests
              <span class=\"float-right text-muted text-sm\">12 hours</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\">
              <i class=\"fas fa-file mr-2\"></i> 3 new reports
              <span class=\"float-right text-muted text-sm\">2 days</span>
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
            <i class=\"fas fa-expand-arrows-alt\"></i>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
            <i class=\"fas fa-th-large\"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
     <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
      <img src=\"{{asset('dist/img/protech.png')}}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"{{asset('dist/img/user2-160x160.jpg')}}\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class=\"form-inline\">
        <div class=\"input-group\" data-widget=\"sidebar-search\">
          <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-sidebar\">
              <i class=\"fas fa-search fa-fw\"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item menu-open\">
            <a href=\"#\" class=\"nav-link active\">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
              <p>
                Dashboard
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{path('dashboard')}}\" class=\"nav-link active\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard Admin</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard Commercant</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard Livreur</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{path('userlist')}}\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-user\"></i>
              <p>
                Utilisateurs
                <span class=\"right badge badge-danger\">New</span>
              </p>
            </a>
          </li>
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  {% block body %}

  {% endblock %}



<!-- Main Footer -->
  <footer class=\"main-footer\">
    <strong>Copyright &copy; 2014-2021 <a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>
</div>
<!-- ./wrapper -->
{% block javascripts %}
<script src=\"{{asset('plugins/jquery/jquery.min.js')}}\"></script>
<!-- Bootstrap -->
<script src=\"{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<!-- overlayScrollbars -->
<script src=\"{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{asset('dist/js/adminlte.js')}}\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}\"></script>
<script src=\"{{asset('plugins/raphael/raphael.min.js')}}\"></script>
<script src=\"{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}\"></script>
<script src=\"{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}\"></script>
<!-- ChartJS -->
<script src=\"{{asset('plugins/chart.js/Chart.min.js')}}\"></script>

<!-- AdminLTE for demo purposes -->
<script src=\"{{asset('dist/js/demo.js')}}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"{{asset('dist/js/pages/dashboard2.js')}}\"></script>



{% endblock %}
</b>
</html>
", "baseBack.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/baseBack.html.twig");
    }
}
