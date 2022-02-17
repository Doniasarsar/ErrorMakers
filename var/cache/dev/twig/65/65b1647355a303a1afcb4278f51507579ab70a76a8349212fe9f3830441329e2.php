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

/* dashboard/loginadmin.html.twig */
class __TwigTemplate_7aaf40578d20b5251cdcd1a84afc946dc0f0b340923af28a115967f9a75d14e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/loginadmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/loginadmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>ProTECH | Login</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
 <!-- Font Awesome -->
 <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
 <!-- icheck bootstrap -->
 <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
 <!-- Theme style -->
 <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
<body class=\"hold-transition login-page\">
    <div class=\"login-box\">
      <!-- /.login-logo -->
      <div class=\"card card-outline card-primary\">
        <div class=\"card-header text-center\">
          <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\" class=\"h1\"><b>Pro</b>TECH</a>
        </div>
        <div class=\"card-body\">
          <p class=\"login-box-msg\">Sign in to start your session</p>
    
        <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loginadmin");
        echo "\" method=\"post\">
            <div class=\"input-group mb-3\">
              <input type=\"email\" class=\"form-control\" placeholder=\"Email\"  required name=\"_username\">
              <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                  <span class=\"fas fa-envelope\"></span>
                </div>
              </div>
            </div>
            <div class=\"input-group mb-3\">
              <input type=\"password\" class=\"form-control\" placeholder=\"Password\"  required name=\"_password\">
              <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                  <span class=\"fas fa-lock\"></span>
                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-8\">
                <div class=\"icheck-primary\">
                  <input type=\"checkbox\" id=\"remember\">
                  <label for=\"remember\">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class=\"col-4\">
                <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
        </form>
    
        
          <!-- /.social-auth-links -->
    
          <p class=\"mb-1\">
            <a href=\"forgot-password.html\">I forgot my password</a>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
</body>
<!-- jQuery -->
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    
    
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/loginadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 78,  138 => 76,  133 => 74,  82 => 26,  74 => 21,  65 => 15,  60 => 13,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>ProTECH | Login</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
 <!-- Font Awesome -->
 <link rel=\"stylesheet\" href=\"{{asset('plugins/fontawesome-free/css/all.min.css')}}\">
 <!-- icheck bootstrap -->
 <link rel=\"stylesheet\" href=\"{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}\">
 <!-- Theme style -->
 <link rel=\"stylesheet\" href=\"{{asset('dist/css/adminlte.min.css')}}\">
<body class=\"hold-transition login-page\">
    <div class=\"login-box\">
      <!-- /.login-logo -->
      <div class=\"card card-outline card-primary\">
        <div class=\"card-header text-center\">
          <a href=\"{{path('dashboard')}}\" class=\"h1\"><b>Pro</b>TECH</a>
        </div>
        <div class=\"card-body\">
          <p class=\"login-box-msg\">Sign in to start your session</p>
    
        <form action=\"{{path('loginadmin')}}\" method=\"post\">
            <div class=\"input-group mb-3\">
              <input type=\"email\" class=\"form-control\" placeholder=\"Email\"  required name=\"_username\">
              <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                  <span class=\"fas fa-envelope\"></span>
                </div>
              </div>
            </div>
            <div class=\"input-group mb-3\">
              <input type=\"password\" class=\"form-control\" placeholder=\"Password\"  required name=\"_password\">
              <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                  <span class=\"fas fa-lock\"></span>
                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-8\">
                <div class=\"icheck-primary\">
                  <input type=\"checkbox\" id=\"remember\">
                  <label for=\"remember\">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class=\"col-4\">
                <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
        </form>
    
        
          <!-- /.social-auth-links -->
    
          <p class=\"mb-1\">
            <a href=\"forgot-password.html\">I forgot my password</a>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
</body>
<!-- jQuery -->
<script src=\"{{asset('plugins/jquery/jquery.min.js')}}\"></script>
<!-- Bootstrap 4 -->
<script src=\"{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{asset('dist/js/adminlte.min.js')}}\"></script>
    
    
", "dashboard/loginadmin.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/dashboard/loginadmin.html.twig");
    }
}
