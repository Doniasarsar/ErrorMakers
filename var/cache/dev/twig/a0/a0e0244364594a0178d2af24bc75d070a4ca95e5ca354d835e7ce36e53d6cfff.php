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

/* front/evenementsfrontdetail.html.twig */
class __TwigTemplate_45e151ede68e5c79948fe9bd7f7e2d86fab2da31703c36f6ff979e46c472accf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evenementsfrontdetail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evenementsfrontdetail.html.twig"));

        $this->parent = $this->loadTemplate("header-footer.html.twig", "front/evenementsfrontdetail.html.twig", 1);
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
        echo "  <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page li-main-blog-details-page pt-60 pb-60 pb-sm-45 pb-xs-45\">
                <div class=\"container\">
                    <div class=\"row\">

                        <!-- Begin Li's Main Content Area -->
                        <div class=\"col-lg-9 order-lg-2 order-1\">
                            <div class=\"row li-main-content\">
                                <div class=\"col-lg-12\">
                                    <div class=\"li-blog-single-item pb-30\">
                                        <div class=\"li-blog-banner\">
                                            <a href=\"blog-details.html\"><img class=\"img-full\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 17, $this->source); })()), "affiche", [], "any", false, false, false, 17)), "html", null, true);
        echo "\"  height=\"350\"></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"#\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i></a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 24, $this->source); })())), "html", null, true);
        echo " Commentaires</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>  ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 25, $this->source); })()), "date", [], "any", false, false, false, 25), "Y-m-d H:i:s"), "html", null, true);
        echo "</a>
                                                </div>
                                                <p>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                                                <!-- Begin Blog Blockquote Area -->
                                                <div class=\"li-blog-blockquote\">
                                                    <blockquote>
                                                        <p>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 31, $this->source); })()), "longdesc", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                                                    </blockquote>
                                                </div>
                                                <!-- Blog Blockquote Area End Here -->
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Begin Li's Blog Comment Section -->
                                    <div class=\"li-comment-section\">
                                       
                                        <h3>";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 43, $this->source); })())), "html", null, true);
        echo " Commentaires</h3>
                                         ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 45
            echo "                                        <ul>
                                            <li>
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product-details/user.png"), "html", null, true);
            echo "\" alt=\"User\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                        <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 52), "html", null, true);
            echo "</h5>
                                                    <div class=\"comment-post-date\">
                                                        ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 54), "y-m-d-h:m:s"), "html", null, true);
            echo "
                                                    </div>
                                                    <p>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                                    </div>
                                    <!-- Li's Blog Comment Section End Here -->
                                    <!-- Begin Blog comment Box Area -->
                                    <div class=\"li-blog-comment-wrapper\">
                                        <h3>Laisse un commentaire</h3>
                                        <p>Votre adresse email ne sera pas publiée. les champs requis sont indiqués *</p>
                                        ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 68, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                        
                                            <div class=\"comment-post-box\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12\">
                                                        <label>Commentaire</label>
                                                       
                                                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 75, $this->source); })()), "contenu", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 76, $this->source); })()), "contenu", [], "any", false, false, false, 76), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                    </div>
                                                     <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Pseudo</label>
                                                        
                                                         ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 81, $this->source); })()), "Pseudo", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "coment-field"]]);
        echo "
                                                         ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 82, $this->source); })()), "Pseudo", [], "any", false, false, false, 82), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                    </div>
                                                    
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Email</label>
                                                        
                                                         ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "coment-field"]]);
        echo "
                                                    </div>
                                                     <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>RGPD</label>
                                                        
                                                         ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 93, $this->source); })()), "rgpd", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "coment-field"]]);
        echo "
                                                    </div>
    
                                                    <div class=\"col-lg-12\">
                                                        <div class=\"coment-btn pt-30 pb-sm-30 pb-xs-30 f-left\">
                                                            
                                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 99, $this->source); })()), "Envoyer", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "li-btn-2"]]);
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 104, $this->source); })()), 'form_end');
        echo "    
                                        
                                        
                                    </div>
                                    <!-- Blog comment Box Area End Here -->
                                </div>
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
        return "front/evenementsfrontdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 104,  229 => 99,  220 => 93,  212 => 88,  203 => 82,  199 => 81,  191 => 76,  187 => 75,  177 => 68,  169 => 62,  157 => 56,  152 => 54,  147 => 52,  140 => 48,  135 => 45,  131 => 44,  127 => 43,  112 => 31,  105 => 27,  100 => 25,  96 => 24,  90 => 21,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"header-footer.html.twig\" %}

{% block body %}
  <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page li-main-blog-details-page pt-60 pb-60 pb-sm-45 pb-xs-45\">
                <div class=\"container\">
                    <div class=\"row\">

                        <!-- Begin Li's Main Content Area -->
                        <div class=\"col-lg-9 order-lg-2 order-1\">
                            <div class=\"row li-main-content\">
                                <div class=\"col-lg-12\">
                                    <div class=\"li-blog-single-item pb-30\">
                                        <div class=\"li-blog-banner\">
                                            <a href=\"blog-details.html\"><img class=\"img-full\" src=\"{{asset('uploads/') ~ tab.affiche}}\"  height=\"350\"></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"#\">{{tab.nom}}</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i></a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> {{comments | length}} Commentaires</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>  {{tab.date|date('Y-m-d H:i:s')}}</a>
                                                </div>
                                                <p>{{tab.description}}</p>
                                                <!-- Begin Blog Blockquote Area -->
                                                <div class=\"li-blog-blockquote\">
                                                    <blockquote>
                                                        <p>{{tab.longdesc}}</p>
                                                    </blockquote>
                                                </div>
                                                <!-- Blog Blockquote Area End Here -->
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Begin Li's Blog Comment Section -->
                                    <div class=\"li-comment-section\">
                                       
                                        <h3>{{comments | length}} Commentaires</h3>
                                         {% for comment in comments %}
                                        <ul>
                                            <li>
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"{{asset('images/product-details/user.png')}}\" alt=\"User\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                        <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">{{comment.pseudo}}</h5>
                                                    <div class=\"comment-post-date\">
                                                        {{comment.createdAt | date('y-m-d-h:m:s')}}
                                                    </div>
                                                    <p>{{comment.contenu}}</p>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                        {% endfor %}
                                    </div>
                                    <!-- Li's Blog Comment Section End Here -->
                                    <!-- Begin Blog comment Box Area -->
                                    <div class=\"li-blog-comment-wrapper\">
                                        <h3>Laisse un commentaire</h3>
                                        <p>Votre adresse email ne sera pas publiée. les champs requis sont indiqués *</p>
                                        {{ form_start(Commentaires_Form,{'attr': {'novalidate': 'novalidate'}} ) }}
                                        
                                            <div class=\"comment-post-box\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12\">
                                                        <label>Commentaire</label>
                                                       
                                                        {{ form_widget(Commentaires_Form.contenu, {'attr': {'class': 'form-control'}}) }}
                                                        {{ form_errors(Commentaires_Form.contenu,{'attr':{\"class\":\"mb-0\"}}) }}
                                                    </div>
                                                     <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Pseudo</label>
                                                        
                                                         {{ form_widget(Commentaires_Form.Pseudo, {'attr': {'class': 'coment-field'}}) }}
                                                         {{ form_errors(Commentaires_Form.Pseudo,{'attr':{\"class\":\"mb-0\"}}) }}
                                                    </div>
                                                    
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Email</label>
                                                        
                                                         {{ form_widget(Commentaires_Form.email, {'attr': {'class': 'coment-field'}}) }}
                                                    </div>
                                                     <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>RGPD</label>
                                                        
                                                         {{ form_widget(Commentaires_Form.rgpd, {'attr': {'class': 'coment-field'}}) }}
                                                    </div>
    
                                                    <div class=\"col-lg-12\">
                                                        <div class=\"coment-btn pt-30 pb-sm-30 pb-xs-30 f-left\">
                                                            
                                                            {{ form_widget(Commentaires_Form.Envoyer, {'attr': {'class': 'li-btn-2'} }) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {{ form_end(Commentaires_Form) }}    
                                        
                                        
                                    </div>
                                    <!-- Blog comment Box Area End Here -->
                                </div>
                            </div>
                        </div>
                     
                        <!-- Li's Main Content Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Main Blog Page Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
{% endblock %}", "front/evenementsfrontdetail.html.twig", "C:\\Users\\PCS\\Desktop\\symf\\wadie PPI\\ErrorMakers-3A45\\templates\\front\\evenementsfrontdetail.html.twig");
    }
}
