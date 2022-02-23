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
  <title>ProTECH| Dashboard</title>
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "</head>

<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

  <!-- Preloader -->
  <div class=\"preloader flex-column justify-content-center align-items-center\">
    <img class=\"animation__shake\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
  </div>

  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Home</a>
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
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
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
        // line 105
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
        // line 121
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
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-controlsidebar-slide=\"true\" href=\"#\" role=\"button\">
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
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"";
        // line 191
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
<<<<<<< Updated upstream
                <a href=\"./index.html\" class=\"nav-link active\">
=======
                <a href=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"nav-link \">
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
             
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item menu\">
            <a href=\"#\" class=\"nav-link \">
              <i class=\"nav-icon fas fa-user\"></i>
              <p>
                Gestion Utilisateurs
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
<<<<<<< Updated upstream
              <li class=\"nav-item\">
                <a href=\"";
        // line 249
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_userlist");
        echo "\" class=\"nav-link \">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Liste Utilisateurs</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demandelist");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
=======
              <li class=\"nav-item\">
                <a href=\"";
        // line 249
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_userlist");
        echo "\" class=\"nav-link \">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Liste Utilisateurs</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demandelist");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
>>>>>>> Stashed changes
                  <p>Liste Demandes</p>
                </a>
              </li>
            </ul>
          </li>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
          <li class=\"nav-item menu-open\">
            <a href=\"";
        // line 245
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_userlist");
        echo "\" class=\"nav-link \">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
=======
          <li class=\"nav-item menu\">
            <a href=\"#\" class=\"nav-link \">
              <i class=\"nav-icon fas fa-shopping-cart\"></i>
>>>>>>> Stashed changes
=======
          <li class=\"nav-item menu\">
            <a href=\"#\" class=\"nav-link \">
              <i class=\"nav-icon fas fa-shopping-cart\"></i>
>>>>>>> Stashed changes
              <p>
                Gestion Commandes
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
          </li>
=======
=======
>>>>>>> Stashed changes
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admincommande");
        echo "\" class=\"nav-link \">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Liste Commandes</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ligne_commande");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Ligne de Commandes</p>
                </a>
              </li>
            </ul>
          </li>
             
         
         
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
          
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  ";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 260
        $this->displayBlock('body', $context, $blocks);
        // line 262
=======
        // line 296
        $this->displayBlock('body', $context, $blocks);
        // line 298
>>>>>>> Stashed changes
=======
        // line 296
        $this->displayBlock('body', $context, $blocks);
        // line 298
>>>>>>> Stashed changes
        echo " 
  <footer class=\"main-footer\">
    <strong>Copyright &copy; 2021-2022 <a href=\"https://adminlte.io\">ProTECH.io</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
      <b>Version</b> 1.0-
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>

</html>

";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 282
=======
        // line 318
>>>>>>> Stashed changes
=======
        // line 318
>>>>>>> Stashed changes
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- JQVMap -->
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
  <!-- summernote -->
  <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/summernote/summernote-bs4.min.css"), "html", null, true);
        echo "\">

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

<<<<<<< Updated upstream
<<<<<<< Updated upstream
    // line 260
=======
    // line 296
>>>>>>> Stashed changes
=======
    // line 296
>>>>>>> Stashed changes
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 261
=======
        // line 297
>>>>>>> Stashed changes
=======
        // line 297
>>>>>>> Stashed changes
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

<<<<<<< Updated upstream
<<<<<<< Updated upstream
    // line 282
=======
    // line 318
>>>>>>> Stashed changes
=======
    // line 318
>>>>>>> Stashed changes
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 283
        echo "<!-- jQuery -->
<script src=\"";
        // line 284
=======
        // line 319
        echo "<!-- jQuery -->
<script src=\"";
        // line 320
>>>>>>> Stashed changes
=======
        // line 319
        echo "<!-- jQuery -->
<script src=\"";
        // line 320
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 286
=======
        // line 322
>>>>>>> Stashed changes
=======
        // line 322
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 292
=======
        // line 328
>>>>>>> Stashed changes
=======
        // line 328
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- ChartJS -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 294
=======
        // line 330
>>>>>>> Stashed changes
=======
        // line 330
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 296
=======
        // line 332
>>>>>>> Stashed changes
=======
        // line 332
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
<!-- JQVMap -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "p\"></script>
<script src=\"";
        // line 299
=======
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "p\"></script>
<script src=\"";
        // line 335
>>>>>>> Stashed changes
=======
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "p\"></script>
<script src=\"";
        // line 335
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 301
=======
        // line 337
>>>>>>> Stashed changes
=======
        // line 337
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 304
=======
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 340
>>>>>>> Stashed changes
=======
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 340
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 306
=======
        // line 342
>>>>>>> Stashed changes
=======
        // line 342
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Summernote -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 308
=======
        // line 344
>>>>>>> Stashed changes
=======
        // line 344
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 310
=======
        // line 346
>>>>>>> Stashed changes
=======
        // line 346
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 312
=======
        // line 348
>>>>>>> Stashed changes
=======
        // line 348
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 314
=======
        // line 350
>>>>>>> Stashed changes
=======
        // line 350
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // line 316
=======
        // line 352
>>>>>>> Stashed changes
=======
        // line 352
>>>>>>> Stashed changes
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        return array (  518 => 316,  513 => 314,  508 => 312,  503 => 310,  498 => 308,  493 => 306,  488 => 304,  484 => 303,  479 => 301,  474 => 299,  470 => 298,  465 => 296,  460 => 294,  455 => 292,  446 => 286,  441 => 284,  438 => 283,  428 => 282,  418 => 261,  408 => 260,  395 => 27,  390 => 25,  385 => 23,  380 => 21,  375 => 19,  370 => 17,  365 => 15,  358 => 11,  353 => 8,  343 => 7,  333 => 282,  311 => 262,  309 => 260,  291 => 245,  234 => 191,  222 => 182,  158 => 121,  139 => 105,  120 => 89,  65 => 37,  56 => 30,  54 => 7,  46 => 1,);
=======
        return array (  569 => 352,  564 => 350,  559 => 348,  554 => 346,  549 => 344,  544 => 342,  539 => 340,  535 => 339,  530 => 337,  525 => 335,  521 => 334,  516 => 332,  511 => 330,  506 => 328,  497 => 322,  492 => 320,  489 => 319,  479 => 318,  469 => 297,  459 => 296,  446 => 27,  441 => 25,  436 => 23,  431 => 21,  426 => 19,  421 => 17,  416 => 15,  409 => 11,  404 => 8,  394 => 7,  384 => 318,  362 => 298,  360 => 296,  339 => 278,  330 => 272,  310 => 255,  301 => 249,  274 => 225,  262 => 216,  234 => 191,  222 => 182,  158 => 121,  139 => 105,  120 => 89,  65 => 37,  56 => 30,  54 => 7,  46 => 1,);
>>>>>>> Stashed changes
=======
        return array (  569 => 352,  564 => 350,  559 => 348,  554 => 346,  549 => 344,  544 => 342,  539 => 340,  535 => 339,  530 => 337,  525 => 335,  521 => 334,  516 => 332,  511 => 330,  506 => 328,  497 => 322,  492 => 320,  489 => 319,  479 => 318,  469 => 297,  459 => 296,  446 => 27,  441 => 25,  436 => 23,  431 => 21,  426 => 19,  421 => 17,  416 => 15,  409 => 11,  404 => 8,  394 => 7,  384 => 318,  362 => 298,  360 => 296,  339 => 278,  330 => 272,  310 => 255,  301 => 249,  274 => 225,  262 => 216,  234 => 191,  222 => 182,  158 => 121,  139 => 105,  120 => 89,  65 => 37,  56 => 30,  54 => 7,  46 => 1,);
>>>>>>> Stashed changes
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>ProTECH| Dashboard</title>
{% block stylesheets %}
  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"{{asset('plugins/fontawesome-free/css/all.min.css')}}\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel=\"stylesheet\" href=\"{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}\">
  <!-- JQVMap -->
  <link rel=\"stylesheet\" href=\"{{asset('plugins/jqvmap/jqvmap.min.css')}}\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{asset('dist/css/adminlte.min.css')}}\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"{{asset('plugins/daterangepicker/daterangepicker.css')}}\">
  <!-- summernote -->
  <link rel=\"stylesheet\" href=\"{{asset('plugins/summernote/summernote-bs4.min.css')}}\">

  {% endblock %}
</head>

<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

  <!-- Preloader -->
  <div class=\"preloader flex-column justify-content-center align-items-center\">
    <img class=\"animation__shake\" src=\"{{asset('dist/img/AdminLTELogo.png')}}\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
  </div>

  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Home</a>
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
              <img src=\"{{asset('dist/img/user1-128x128.jpg')}}\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
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
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-controlsidebar-slide=\"true\" href=\"#\" role=\"button\">
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
      <img src=\"{{asset('dist/img/AdminLTELogo.png')}}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                <a href=\"./index.html\" class=\"nav-link active\">
=======
                <a href=\"{{path('admin_dashboard')}}\" class=\"nav-link \">
>>>>>>> Stashed changes
=======
                <a href=\"{{path('admin_dashboard')}}\" class=\"nav-link \">
>>>>>>> Stashed changes
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
=======
             
>>>>>>> Stashed changes
=======
             
>>>>>>> Stashed changes
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
            </ul>
          </li>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
          <li class=\"nav-item menu-open\">
            <a href=\"{{path('admin_userlist')}}\" class=\"nav-link \">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
=======
          <li class=\"nav-item menu\">
            <a href=\"#\" class=\"nav-link \">
              <i class=\"nav-icon fas fa-user\"></i>
>>>>>>> Stashed changes
=======
          <li class=\"nav-item menu\">
            <a href=\"#\" class=\"nav-link \">
              <i class=\"nav-icon fas fa-user\"></i>
>>>>>>> Stashed changes
              <p>
                Gestion Utilisateurs
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{path('admin_userlist')}}\" class=\"nav-link \">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Liste Utilisateurs</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{path('admin_demandelist')}}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Liste Demandes</p>
                </a>
              </li>
            </ul>
          </li>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
          <li class=\"nav-item menu\">
            <a href=\"#\" class=\"nav-link \">
              <i class=\"nav-icon fas fa-shopping-cart\"></i>
              <p>
                Gestion Commandes
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{path('admincommande')}}\" class=\"nav-link \">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Liste Commandes</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{path('ligne_commande')}}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Ligne de Commandes</p>
                </a>
              </li>
            </ul>
          </li>
             
         
         
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
          
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  {% block body %}
  {% endblock %}
 
  <footer class=\"main-footer\">
    <strong>Copyright &copy; 2021-2022 <a href=\"https://adminlte.io\">ProTECH.io</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
      <b>Version</b> 1.0-
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>

</html>

{% block javascripts %}
<!-- jQuery -->
<script src=\"{{asset('plugins/jquery/jquery.min.js')}}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"{{asset('plugins/jquery-ui/jquery-ui.min.js')}}\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<!-- ChartJS -->
<script src=\"{{asset('plugins/chart.js/Chart.min.js')}}\"></script>
<!-- Sparkline -->
<script src=\"{{asset('plugins/sparklines/sparkline.js')}}\"></script>
<!-- JQVMap -->
<script src=\"{{asset('lugins/jqvmap/jquery.vmap.min.js')}}p\"></script>
<script src=\"{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}\"></script>
<!-- jQuery Knob Chart -->
<script src=\"{{asset('plugins/jquery-knob/jquery.knob.min.js')}}\"></script>
<!-- daterangepicker -->
<script src=\"{{asset('plugins/moment/moment.min.js')}}\"></script>
<script src=\"{{asset('plugins/daterangepicker/daterangepicker.js')}}\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}\"></script>
<!-- Summernote -->
<script src=\"{{asset('plugins/summernote/summernote-bs4.min.js')}}\"></script>
<!-- overlayScrollbars -->
<script src=\"{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{asset('dist/js/adminlte.js')}}\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{asset('dist/js/demo.js')}}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"{{asset('dist/js/pages/dashboard.js')}}\"></script>

{% endblock %}", "baseBack.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/baseBack.html.twig");
    }
}
