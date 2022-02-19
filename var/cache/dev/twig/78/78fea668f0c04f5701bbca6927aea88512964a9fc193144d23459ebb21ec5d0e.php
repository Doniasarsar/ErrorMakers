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

/* front/evenementsfront.html.twig */
class __TwigTemplate_4eca5fa5ed266baf6fd753274a80f823f190362a16463da29f137aafa59633f0 extends Template
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
        return "header-footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evenementsfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evenementsfront.html.twig"));

        $this->parent = $this->loadTemplate("header-footer.html.twig", "front/evenementsfront.html.twig", 1);
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
        echo "              <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page pt-60 pb-55\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Li's Main Content Area -->
                        <div class=\"col-lg-12\">
                            <div class=\"row li-main-content\">
                            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 15
            echo "                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item pb-25\">
                                        <div class=\"li-blog-banner\">
                                            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_front_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\"><img class=\"img-full\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["evenement"], "affiche", [], "any", false, false, false, 18)), "html", null, true);
            echo "\"  height=\"350\"  ></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"blog-details-left-sidebar.html\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>  ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true);
            echo "</a>
                                                </div>
                                                <p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                                                <a class=\"read-more\" href=\"blog-details-left-sidebar.html\">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                <!-- Begin Li's Pagination Area -->
                                <div class=\"col-lg-12\">
                                    <div class=\"li-paginatoin-area text-center pt-25\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <ul class=\"li-pagination-box\">
                                                    <li><a class=\"Previous\" href=\"#\">Previous</a></li>
                                                    <li class=\"active\"><a href=\"#\">1</a></li>
                                                    <li><a href=\"#\">2</a></li>
                                                    <li><a href=\"#\">3</a></li>
                                                    <li><a class=\"Next\" href=\"#\">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Pagination End Here Area -->
                            </div>
                        </div>
                        <!-- Li's Main Content Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Main Blog Page Area End Here -->
            
        </div>
        <!-- Body Wrapper End Here -->

             ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/evenementsfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 35,  110 => 28,  105 => 26,  98 => 22,  89 => 18,  84 => 15,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"header-footer.html.twig\" %}

{% block body %}
              <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page pt-60 pb-55\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Li's Main Content Area -->
                        <div class=\"col-lg-12\">
                            <div class=\"row li-main-content\">
                            {% for evenement  in tab %}
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item pb-25\">
                                        <div class=\"li-blog-banner\">
                                            <a href=\"{{path('ev_front_detail',{id : evenement.id })}}\"><img class=\"img-full\" src=\"{{asset('uploads/') ~ evenement.affiche}}\"  height=\"350\"  ></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"blog-details-left-sidebar.html\">{{evenement.nom}}</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>  {{evenement.date|date('Y-m-d H:i:s')}}</a>
                                                </div>
                                                <p>{{evenement.description}}</p>
                                                <a class=\"read-more\" href=\"blog-details-left-sidebar.html\">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              {% endfor %}
                                <!-- Begin Li's Pagination Area -->
                                <div class=\"col-lg-12\">
                                    <div class=\"li-paginatoin-area text-center pt-25\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <ul class=\"li-pagination-box\">
                                                    <li><a class=\"Previous\" href=\"#\">Previous</a></li>
                                                    <li class=\"active\"><a href=\"#\">1</a></li>
                                                    <li><a href=\"#\">2</a></li>
                                                    <li><a href=\"#\">3</a></li>
                                                    <li><a class=\"Next\" href=\"#\">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Pagination End Here Area -->
                            </div>
                        </div>
                        <!-- Li's Main Content Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Main Blog Page Area End Here -->
            
        </div>
        <!-- Body Wrapper End Here -->

             {% endblock %}
", "front/evenementsfront.html.twig", "C:\\Users\\PCS\\Desktop\\symf\\wadie PPI\\ErrorMakers-3A45\\templates\\front\\evenementsfront.html.twig");
    }
}
