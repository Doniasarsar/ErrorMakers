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

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "            
             

<!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page pt-60 pb-55\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Li's Main Content Area -->
    
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 13
            echo "
                        <div class=\"col-lg-12\">
                            <div class=\"row li-main-content\">
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item pb-25\">
                                        <div class=\"li-blog-banner\">
                                        
                                            <a href=\"blog-details-left-sidebar.html\"><img class=\"img-full\" src=\"images/blog-banner/2.jpg\" alt=\"\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "affiche", [], "any", false, false, false, 20), "html", null, true);
            echo "</a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"blog-details-left-sidebar.html\"></a>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i> ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true);
            // line 29
            echo "</a>
                                                </div>
                                                <p>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 31), "html", null, true);
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
        // line 39
        echo "                               ";
        // line 167
        echo "             ";
        
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
        return array (  128 => 167,  126 => 39,  112 => 31,  108 => 29,  106 => 28,  99 => 24,  92 => 20,  83 => 13,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"header-footer.html.twig\" %}
 {% block body %}
            
             

<!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page pt-60 pb-55\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Li's Main Content Area -->
    
{% for evenement  in tab %}

                        <div class=\"col-lg-12\">
                            <div class=\"row li-main-content\">
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item pb-25\">
                                        <div class=\"li-blog-banner\">
                                        
                                            <a href=\"blog-details-left-sidebar.html\"><img class=\"img-full\" src=\"images/blog-banner/2.jpg\" alt=\"\">{{evenement.affiche}}</a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"blog-details-left-sidebar.html\"></a>{{evenement.nom}}</h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i> {{evenement.date|date('Y-m-d H:i:s')
 }}</a>
                                                </div>
                                                <p>{{evenement.description}}</p>
                                                <a class=\"read-more\" href=\"blog-details-left-sidebar.html\">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    {% endfor %}
                               {# <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item pb-25\">
                                        <div class=\"li-blog-gallery-slider slick-dot-style\">
                                            <div class=\"li-blog-banner\">
                                                <a href=\"blog-details-left-sidebar.html\"><img class=\"img-full\" src=\"images/blog-banner/1.jpg\" alt=\"\"></a>
                                            </div>
                                            <div class=\"li-blog-banner\">
                                                <a href=\"blog-details-left-sidebar.html\"><img class=\"img-full\" src=\"images/blog-banner/2.jpg\" alt=\"\"></a>
                                            </div>
                                            <div class=\"li-blog-banner\">
                                                <a href=\"blog-details-left-sidebar.html\"><img class=\"img-full\" src=\"images/blog-banner/3.jpg\" alt=\"\"></a>
                                            </div>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"blog-details-left-sidebar.html\">blog gallery post</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i> 25 nov 2018</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class=\"read-more\" href=\"blog-details-left-sidebar.html\">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item pb-25\">
                                        <div class=\"li-blog-banner embed-responsive embed-responsive-16by9\">
                                            <iframe src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/300107209&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true\"></iframe>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"blog-details-left-sidebar.html\">blog audio post</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i> 25 nov 2018</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class=\"read-more\" href=\"blog-details-left-sidebar.html\">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item pb-25\">
                                        <div class=\"li-blog-banner embed-responsive embed-responsive-16by9\">
                                            <iframe src=\"https://www.youtube.com/embed/DR2c266yWEA\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"blog-details-left-sidebar.html\">blog video post</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i> 25 nov 2018</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class=\"read-more\" href=\"blog-details-left-sidebar.html\">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item pb-25\">
                                        <div class=\"li-blog-banner\">
                                            <a href=\"blog-details-left-sidebar.html\"><img class=\"img-full\" src=\"images/blog-banner/5.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"blog-details-left-sidebar.html\">blog fifth post</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i> 25 nov 2018</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class=\"read-more\" href=\"blog-details-left-sidebar.html\">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item mb-25\">
                                        <div class=\"li-blog-banner\">
                                            <a href=\"blog-details-left-sidebar.html\"><img class=\"img-full\" src=\"images/blog-banner/6.jpg\" alt=\"\"></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"blog-details-left-sidebar.html\">blog second post</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i> 25 nov 2018</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class=\"read-more\" href=\"blog-details-left-sidebar.html\">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
             #}
             {% endblock %}", "front/evenementsfront.html.twig", "C:\\Users\\PCS\\Desktop\\symf\\wadie PPI\\ErrorMakers-3A45\\templates\\front\\evenementsfront.html.twig");
    }
}
