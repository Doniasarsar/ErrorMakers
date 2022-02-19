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
        echo "\"  alt=\"\"></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"#\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
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
                                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                                    </blockquote>
                                                </div>
                                                <!-- Blog Blockquote Area End Here -->
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum </p>
                                                <div class=\"li-tag-line\">
                                                    <h4>tag:</h4>
                                                    <a href=\"#\">Headphones</a>,
                                                    <a href=\"#\">Video Games</a>,
                                                    <a href=\"#\">Wireless Speakers</a>
                                                </div>
                                                <div class=\"li-blog-sharing text-center pt-30\">
                                                    <h4>share this post:</h4>
                                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Begin Li's Blog Comment Section -->
                                    <div class=\"li-comment-section\">
                                        <h3>03 comment</h3>
                                        <ul>
                                            <li>
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"images/product-details/user.png\" alt=\"User\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                        <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">admin</h5>
                                                    <div class=\"comment-post-date\">
                                                        20 nov, 2018 at 9:30pm
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                                </div>
                                            </li>
                                            <li class=\"comment-children\">
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"images/product-details/admin.png\" alt=\"Admin\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                        <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">admin</h5>
                                                    <div class=\"comment-post-date\">
                                                        20 nov, 2018 at 9:30pm
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"images/product-details/admin.png\" alt=\"Admin\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                    <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">admin</h5>
                                                    <div class=\"comment-post-date\">
                                                        20 nov, 2018 at 9:30pm
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Li's Blog Comment Section End Here -->
                                    <!-- Begin Blog comment Box Area -->
                                    <div class=\"li-blog-comment-wrapper\">
                                        <h3>leave a reply</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <form action=\"#\">
                                            <div class=\"comment-post-box\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12\">
                                                        <label>comment</label>
                                                        <textarea name=\"commnet\" placeholder=\"Write a comment\"></textarea>
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Name</label>
                                                        <input type=\"text\" class=\"coment-field\" placeholder=\"Name\">
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Email</label>
                                                        <input type=\"text\" class=\"coment-field\" placeholder=\"Email\">
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20\">
                                                        <label>Website</label>
                                                        <input type=\"text\" class=\"coment-field\" placeholder=\"Website\">
                                                    </div>
                                                    <div class=\"col-lg-12\">
                                                        <div class=\"coment-btn pt-30 pb-sm-30 pb-xs-30 f-left\">
                                                            <input class=\"li-btn-2\" type=\"submit\" name=\"submit\" value=\"post comment\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
        return array (  102 => 27,  97 => 25,  90 => 21,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
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
                                            <a href=\"blog-details.html\"><img class=\"img-full\" src=\"{{asset('uploads/') ~ tab.affiche}}\"  alt=\"\"></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"#\">{{tab.nom}}</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-user\"></i>Admin</a>
                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> 3 comment</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>  {{tab.date|date('Y-m-d H:i:s')}}</a>
                                                </div>
                                                <p>{{tab.description}}</p>
                                                <!-- Begin Blog Blockquote Area -->
                                                <div class=\"li-blog-blockquote\">
                                                    <blockquote>
                                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                                    </blockquote>
                                                </div>
                                                <!-- Blog Blockquote Area End Here -->
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum </p>
                                                <div class=\"li-tag-line\">
                                                    <h4>tag:</h4>
                                                    <a href=\"#\">Headphones</a>,
                                                    <a href=\"#\">Video Games</a>,
                                                    <a href=\"#\">Wireless Speakers</a>
                                                </div>
                                                <div class=\"li-blog-sharing text-center pt-30\">
                                                    <h4>share this post:</h4>
                                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                                                    <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Begin Li's Blog Comment Section -->
                                    <div class=\"li-comment-section\">
                                        <h3>03 comment</h3>
                                        <ul>
                                            <li>
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"images/product-details/user.png\" alt=\"User\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                        <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">admin</h5>
                                                    <div class=\"comment-post-date\">
                                                        20 nov, 2018 at 9:30pm
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                                </div>
                                            </li>
                                            <li class=\"comment-children\">
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"images/product-details/admin.png\" alt=\"Admin\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                        <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">admin</h5>
                                                    <div class=\"comment-post-date\">
                                                        20 nov, 2018 at 9:30pm
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"images/product-details/admin.png\" alt=\"Admin\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                    <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">admin</h5>
                                                    <div class=\"comment-post-date\">
                                                        20 nov, 2018 at 9:30pm
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Li's Blog Comment Section End Here -->
                                    <!-- Begin Blog comment Box Area -->
                                    <div class=\"li-blog-comment-wrapper\">
                                        <h3>leave a reply</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <form action=\"#\">
                                            <div class=\"comment-post-box\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12\">
                                                        <label>comment</label>
                                                        <textarea name=\"commnet\" placeholder=\"Write a comment\"></textarea>
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Name</label>
                                                        <input type=\"text\" class=\"coment-field\" placeholder=\"Name\">
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Email</label>
                                                        <input type=\"text\" class=\"coment-field\" placeholder=\"Email\">
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20\">
                                                        <label>Website</label>
                                                        <input type=\"text\" class=\"coment-field\" placeholder=\"Website\">
                                                    </div>
                                                    <div class=\"col-lg-12\">
                                                        <div class=\"coment-btn pt-30 pb-sm-30 pb-xs-30 f-left\">
                                                            <input class=\"li-btn-2\" type=\"submit\" name=\"submit\" value=\"post comment\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
