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
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-map-marker\"></i>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 23, $this->source); })()), "adresse", [], "any", false, false, false, 23), "html", null, true);
        echo "</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 24, $this->source); })())), "html", null, true);
        echo " Commentaires</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>DateDebut ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 25, $this->source); })()), "date", [], "any", false, false, false, 25), "Y-m-d H:i:s"), "html", null, true);
        echo "</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>DateFin ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 26, $this->source); })()), "Datefin", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true);
        echo "</a>
                                                </div>
                                                <p>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                                                <!-- Begin Blog Blockquote Area -->
                                                <div class=\"li-blog-blockquote\">
                                                    <blockquote>
                                                        <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 32, $this->source); })()), "longdesc", [], "any", false, false, false, 32), "html", null, true);
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
        // line 44
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 44, $this->source); })())), "html", null, true);
        echo " Commentaires</h3>
                                         ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 46
            echo "                                        <ul>
                                            <li>
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product-details/user.png"), "html", null, true);
            echo "\" alt=\"User\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                        <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 53), "html", null, true);
            echo "</h5>
                                                    <div class=\"comment-post-date\">
                                                        ";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 55), "y-m-d-h:m:s"), "html", null, true);
            echo "
                                                    </div>
                                                    <p>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                    </div>
                                    <!-- Li's Blog Comment Section End Here -->
                                    <!-- Begin Blog comment Box Area -->
                                    <div class=\"li-blog-comment-wrapper\">
                                        <h3>Laisse un commentaire</h3>
                                        <p>Votre adresse email ne sera pas publiée. les champs requis sont indiqués *</p>
                                        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 69, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                        
                                            <div class=\"comment-post-box\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12\">
                                                        <label>Commentaire</label>
                                                       
                                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 76, $this->source); })()), "contenu", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 77, $this->source); })()), "contenu", [], "any", false, false, false, 77), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                    </div>
                                                     <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Pseudo</label>
                                                        
                                                         ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 82, $this->source); })()), "Pseudo", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "coment-field"]]);
        echo "
                                                         ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 83, $this->source); })()), "Pseudo", [], "any", false, false, false, 83), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                    </div>
                                                    
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Email</label>
                                                        
                                                         ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "coment-field"]]);
        echo "
                                                         ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, false, 90), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                    </div>
                                                   
    
                                                    <div class=\"col-lg-12\">
                                                        <div class=\"coment-btn pt-30 pb-sm-30 pb-xs-30 f-left\">
                                                            
                                                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 97, $this->source); })()), "Envoyer", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "li-btn-2"]]);
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 102, $this->source); })()), 'form_end');
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
        return array (  241 => 102,  233 => 97,  223 => 90,  219 => 89,  210 => 83,  206 => 82,  198 => 77,  194 => 76,  184 => 69,  176 => 63,  164 => 57,  159 => 55,  154 => 53,  147 => 49,  142 => 46,  138 => 45,  134 => 44,  119 => 32,  112 => 28,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  90 => 21,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
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
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-map-marker\"></i>{{tab.adresse}}</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> {{comments | length}} Commentaires</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>DateDebut {{tab.date|date('Y-m-d H:i:s')}}</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>DateFin {{tab.Datefin|date('Y-m-d H:i:s')}}</a>
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
                                                         {{ form_errors(Commentaires_Form.email,{'attr':{\"class\":\"mb-0\"}}) }}
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
