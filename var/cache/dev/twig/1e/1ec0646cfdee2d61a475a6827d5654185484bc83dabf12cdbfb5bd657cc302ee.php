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

/* front/index.html.twig */
class __TwigTemplate_8600d200b060fe3927f27dddb2e1cfb12faff1a257d6d35ad625ef585c4ee985 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>ProTECH|Home</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "    <body>
    
            <!-- Begin Slider With Banner Area -->
            <div class=\"slider-with-banner\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Slider Area -->
                        <div class=\"col-lg-8 col-md-8\">
                            <div class=\"slider-area pt-sm-30 pt-xs-30\">
                                <div class=\"slider-active owl-carousel\">
                                    <!-- Begin Single Slide Area -->
                                    <div class=\"single-slide align-center-left animation-style-01 bg-1\">
                                        <div class=\"slider-progress\"></div>
                                        <div class=\"slider-content\">
                                            <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                            <h2>Chamcham Galaxy S9 | S9+</h2>
                                            <h3>Starting at <span>\$1209.00</span></h3>
                                            <div class=\"default-btn slide-btn\">
                                                <a class=\"links\" href=\"shop-left-sidebar.html\">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class=\"single-slide align-center-left animation-style-02 bg-2\">
                                        <div class=\"slider-progress\"></div>
                                        <div class=\"slider-content\">
                                            <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk Surface Studio 2018</h2>
                                            <h3>Starting at <span>\$824.00</span></h3>
                                            <div class=\"default-btn slide-btn\">
                                                <a class=\"links\" href=\"shop-left-sidebar.html\">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class=\"single-slide align-center-left animation-style-01 bg-3\">
                                        <div class=\"slider-progress\"></div>
                                        <div class=\"slider-content\">
                                            <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                            <h2>Phantom 4 Pro+ Obsidian</h2>
                                            <h3>Starting at <span>\$1849.00</span></h3>
                                            <div class=\"default-btn slide-btn\">
                                                <a class=\"links\" href=\"shop-left-sidebar.html\">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- Begin Li Banner Area -->
                        <div class=\"col-lg-4 col-md-4 text-center pt-sm-30 pt-xs-30\">
                            <div class=\"li-banner\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/1_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"li-banner mt-15 mt-md-30 mt-xs-25 mb-xs-5\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/1_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <!-- Li Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Banner Area End Here -->
            <!-- Begin Static Top Area -->
            <div class=\"static-top-wrap\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"static-top-content mt-sm-30\">
                                Gift Special: Gift every single day on Weekends - New Coupon code \"
                                <span>LimupaSaleoff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Top Area End Here -->
            <!-- product-area start -->
            <div class=\"product-area pt-55 pb-25 pt-xs-50\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"li-product-tab\">
                                <ul class=\"nav li-product-menu\">
                                   <li><a class=\"active\" data-toggle=\"tab\" href=\"#li-new-product\"><span>New Arrival</span></a></li>
                                   <li><a data-toggle=\"tab\" href=\"#li-bestseller-product\"><span>Bestseller</span></a></li>
                                   <li><a data-toggle=\"tab\" href=\"#li-featured-product\"><span>Featured Products</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class=\"tab-content\">
                        <div id=\"li-new-product\" class=\"tab-pane active show\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"product-active owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/1.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/2.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/3.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/4.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/5.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/6.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"li-bestseller-product\" class=\"tab-pane\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"product-active owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/12.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/11.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/10.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/9.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/8.jp"), "html", null, true);
        echo "g\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/7.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"li-featured-product\" class=\"tab-pane\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"product-active owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/3.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/5.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/7.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/9.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 797
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/11.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 838
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/12.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-area end -->
            <!-- Begin Li's Static Banner Area -->
            <div class=\"li-static-banner li-static-banner-4 text-center pt-20\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Single Banner Area -->
                        <div class=\"col-lg-6\">
                            <div class=\"single-banner pb-sm-30 pb-xs-30\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 891
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/2_3.jpg"), "html", null, true);
        echo "\" alt=\"Li's Static Banner\">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class=\"col-lg-6\">
                            <div class=\"single-banner\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 900
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/2_4.jpg"), "html", null, true);
        echo "\" alt=\"Li's Static Banner\">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class=\"product-area li-laptop-product pt-60 pb-45 pt-sm-50 pt-xs-60\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Li's Section Area -->
                        <div class=\"col-lg-12\">
                            <div class=\"li-section-title\">
                                <h2>
                                    <span>Laptop</span>
                                </h2>
                                <ul class=\"li-sub-category-list\">
                                    <li class=\"active\"><a href=\"shop-left-sidebar.html\">Prime Video</a></li>
                                    <li><a href=\"shop-left-sidebar.html\">Computers</a></li>
                                    <li><a href=\"shop-left-sidebar.html\">Electronics</a></li>
                                </ul>
                            </div>
                            <div class=\"row\">
                                <div class=\"product-active owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 932
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/1.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 973
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/2.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 1016
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/3.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 1057
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/4.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 1100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/5.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 1141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/6.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            <section class=\"product-area li-laptop-product li-tv-audio-product pb-45\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Li's Section Area -->
                        <div class=\"col-lg-12\">
                            <div class=\"li-section-title\">
                                <h2>
                                    <span>TV & Audio</span>
                                </h2>
                                <ul class=\"li-sub-category-list\">
                                    <li class=\"active\"><a href=\"shop-left-sidebar.html\">Chamcham</a></li>
                                    <li><a href=\"shop-left-sidebar.html\">Meito</a></li>
                                    <li><a href=\"shop-left-sidebar.html\">XailStation</a></li>
                                </ul>
                            </div>
                            <div class=\"row\">
                                <div class=\"product-active owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 1210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/3.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 1251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/5.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 1294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/7.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 1335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/9.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 1378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/11.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
        // line 1419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/11.jpg"), "html", null, true);
        echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
            <div class=\"li-static-home\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <!-- Begin Li's Static Home Image Area -->
                            <div class=\"li-static-home-image\"></div>
                            <!-- Li's Static Home Image Area End Here -->
                            <!-- Begin Li's Static Home Content Area -->
                            <div class=\"li-static-home-content\">
                                <p>Sale Offer<span>-20% Off</span>This Week</p>
                                <h2>Featured Product</h2>
                                <h2>Sanai Accessories 2018</h2>
                                <p class=\"schedule\">
                                    Starting at
                                    <span> \$1209.00</span>
                                </p>
                                <div class=\"default-btn\">
                                    <a href=\"shop-left-sidebar.html\" class=\"links\">Shopping Now</a>
                                </div>
                            </div>
                            <!-- Li's Static Home Content Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Group Featured Product Area -->
            <div class=\"group-featured-product pt-60 pb-40 pb-xs-25\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Featured Product Area -->
                        <div class=\"col-lg-4\">
                            <div class=\"featured-product\">
                                <div class=\"li-section-title\">
                                    <h2>
                                        <span>Chamcham</span>
                                    </h2>
                                </div>
                                <div class=\"featured-product-active-2 owl-carousel\">
                                    <div class=\"featured-product-bundle\">
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/1.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/2.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/3.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                        <!-- Begin Featured Product Area -->
                        <div class=\"col-lg-4\">
                            <div class=\"featured-product pt-sm-10 pt-xs-25\">
                                <div class=\"li-section-title\">
                                    <h2>
                                        <span>Meito</span>
                                    </h2>
                                </div>
                                <div class=\"featured-product-active-2 owl-carousel\">
                                    <div class=\"featured-product-bundle\">
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/4.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/5.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/6.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                        <!-- Begin Featured Product Area -->
                        <div class=\"col-lg-4\">
                            <div class=\"featured-product pt-sm-10 pt-xs-25\">
                                <div class=\"li-section-title\">
                                    <h2>
                                        <span>Sanai</span>
                                    </h2>
                                </div>
                                <div class=\"featured-product-active-2 owl-carousel\">
                                    <div class=\"featured-product-bundle\">
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/6.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/4.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/2.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Group Featured Product Area End Here -->
           <!-- jQuery-V1.12.4 -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1604 => 1419,  1560 => 1378,  1514 => 1335,  1470 => 1294,  1424 => 1251,  1380 => 1210,  1308 => 1141,  1264 => 1100,  1218 => 1057,  1174 => 1016,  1128 => 973,  1084 => 932,  1049 => 900,  1037 => 891,  981 => 838,  937 => 797,  891 => 754,  847 => 713,  801 => 670,  757 => 629,  705 => 580,  661 => 539,  615 => 496,  571 => 455,  525 => 412,  481 => 371,  429 => 322,  385 => 281,  339 => 238,  295 => 197,  249 => 154,  205 => 113,  155 => 66,  147 => 61,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseFront.html.twig\" %}
{% block title %}<title>ProTECH|Home</title>{% endblock %}
    {% block body %}
    <body>
    
            <!-- Begin Slider With Banner Area -->
            <div class=\"slider-with-banner\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Slider Area -->
                        <div class=\"col-lg-8 col-md-8\">
                            <div class=\"slider-area pt-sm-30 pt-xs-30\">
                                <div class=\"slider-active owl-carousel\">
                                    <!-- Begin Single Slide Area -->
                                    <div class=\"single-slide align-center-left animation-style-01 bg-1\">
                                        <div class=\"slider-progress\"></div>
                                        <div class=\"slider-content\">
                                            <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                            <h2>Chamcham Galaxy S9 | S9+</h2>
                                            <h3>Starting at <span>\$1209.00</span></h3>
                                            <div class=\"default-btn slide-btn\">
                                                <a class=\"links\" href=\"shop-left-sidebar.html\">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class=\"single-slide align-center-left animation-style-02 bg-2\">
                                        <div class=\"slider-progress\"></div>
                                        <div class=\"slider-content\">
                                            <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk Surface Studio 2018</h2>
                                            <h3>Starting at <span>\$824.00</span></h3>
                                            <div class=\"default-btn slide-btn\">
                                                <a class=\"links\" href=\"shop-left-sidebar.html\">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class=\"single-slide align-center-left animation-style-01 bg-3\">
                                        <div class=\"slider-progress\"></div>
                                        <div class=\"slider-content\">
                                            <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                            <h2>Phantom 4 Pro+ Obsidian</h2>
                                            <h3>Starting at <span>\$1849.00</span></h3>
                                            <div class=\"default-btn slide-btn\">
                                                <a class=\"links\" href=\"shop-left-sidebar.html\">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- Begin Li Banner Area -->
                        <div class=\"col-lg-4 col-md-4 text-center pt-sm-30 pt-xs-30\">
                            <div class=\"li-banner\">
                                <a href=\"#\">
                                    <img src=\"{{asset('images/banner/1_1.jpg')}}\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"li-banner mt-15 mt-md-30 mt-xs-25 mb-xs-5\">
                                <a href=\"#\">
                                    <img src=\"{{asset('images/banner/1_2.jpg')}}\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <!-- Li Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Banner Area End Here -->
            <!-- Begin Static Top Area -->
            <div class=\"static-top-wrap\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"static-top-content mt-sm-30\">
                                Gift Special: Gift every single day on Weekends - New Coupon code \"
                                <span>LimupaSaleoff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Top Area End Here -->
            <!-- product-area start -->
            <div class=\"product-area pt-55 pb-25 pt-xs-50\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"li-product-tab\">
                                <ul class=\"nav li-product-menu\">
                                   <li><a class=\"active\" data-toggle=\"tab\" href=\"#li-new-product\"><span>New Arrival</span></a></li>
                                   <li><a data-toggle=\"tab\" href=\"#li-bestseller-product\"><span>Bestseller</span></a></li>
                                   <li><a data-toggle=\"tab\" href=\"#li-featured-product\"><span>Featured Products</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class=\"tab-content\">
                        <div id=\"li-new-product\" class=\"tab-pane active show\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"product-active owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/1.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/2.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/3.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/4.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/5.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/6.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"li-bestseller-product\" class=\"tab-pane\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"product-active owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/12.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/11.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/10.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/9.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/8.jp')}}g\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/7.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"li-featured-product\" class=\"tab-pane\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"product-active owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/3.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/5.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/7.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/9.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/11.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/12.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-area end -->
            <!-- Begin Li's Static Banner Area -->
            <div class=\"li-static-banner li-static-banner-4 text-center pt-20\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Single Banner Area -->
                        <div class=\"col-lg-6\">
                            <div class=\"single-banner pb-sm-30 pb-xs-30\">
                                <a href=\"#\">
                                    <img src=\"{{asset('images/banner/2_3.jpg')}}\" alt=\"Li's Static Banner\">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class=\"col-lg-6\">
                            <div class=\"single-banner\">
                                <a href=\"#\">
                                    <img src=\"{{asset('images/banner/2_4.jpg')}}\" alt=\"Li's Static Banner\">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class=\"product-area li-laptop-product pt-60 pb-45 pt-sm-50 pt-xs-60\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Li's Section Area -->
                        <div class=\"col-lg-12\">
                            <div class=\"li-section-title\">
                                <h2>
                                    <span>Laptop</span>
                                </h2>
                                <ul class=\"li-sub-category-list\">
                                    <li class=\"active\"><a href=\"shop-left-sidebar.html\">Prime Video</a></li>
                                    <li><a href=\"shop-left-sidebar.html\">Computers</a></li>
                                    <li><a href=\"shop-left-sidebar.html\">Electronics</a></li>
                                </ul>
                            </div>
                            <div class=\"row\">
                                <div class=\"product-active owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/1.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/2.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/3.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/4.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/5.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/6.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            <section class=\"product-area li-laptop-product li-tv-audio-product pb-45\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Li's Section Area -->
                        <div class=\"col-lg-12\">
                            <div class=\"li-section-title\">
                                <h2>
                                    <span>TV & Audio</span>
                                </h2>
                                <ul class=\"li-sub-category-list\">
                                    <li class=\"active\"><a href=\"shop-left-sidebar.html\">Chamcham</a></li>
                                    <li><a href=\"shop-left-sidebar.html\">Meito</a></li>
                                    <li><a href=\"shop-left-sidebar.html\">XailStation</a></li>
                                </ul>
                            </div>
                            <div class=\"row\">
                                <div class=\"product-active owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/3.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/5.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/7.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/9.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/11.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Graphic Corner</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Accusantium dolorem1</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">\$46.80</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"{{asset('images/product/large-size/11.jpg')}}\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                        <div class=\"rating-box\">
                                                            <ul class=\"rating\">
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                                <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price new-price-2\">\$71.80</span>
                                                        <span class=\"old-price\">\$77.22</span>
                                                        <span class=\"discount-percentage\">-7%</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"#\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
            <div class=\"li-static-home\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <!-- Begin Li's Static Home Image Area -->
                            <div class=\"li-static-home-image\"></div>
                            <!-- Li's Static Home Image Area End Here -->
                            <!-- Begin Li's Static Home Content Area -->
                            <div class=\"li-static-home-content\">
                                <p>Sale Offer<span>-20% Off</span>This Week</p>
                                <h2>Featured Product</h2>
                                <h2>Sanai Accessories 2018</h2>
                                <p class=\"schedule\">
                                    Starting at
                                    <span> \$1209.00</span>
                                </p>
                                <div class=\"default-btn\">
                                    <a href=\"shop-left-sidebar.html\" class=\"links\">Shopping Now</a>
                                </div>
                            </div>
                            <!-- Li's Static Home Content Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Group Featured Product Area -->
            <div class=\"group-featured-product pt-60 pb-40 pb-xs-25\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Begin Featured Product Area -->
                        <div class=\"col-lg-4\">
                            <div class=\"featured-product\">
                                <div class=\"li-section-title\">
                                    <h2>
                                        <span>Chamcham</span>
                                    </h2>
                                </div>
                                <div class=\"featured-product-active-2 owl-carousel\">
                                    <div class=\"featured-product-bundle\">
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/1.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/2.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/3.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                        <!-- Begin Featured Product Area -->
                        <div class=\"col-lg-4\">
                            <div class=\"featured-product pt-sm-10 pt-xs-25\">
                                <div class=\"li-section-title\">
                                    <h2>
                                        <span>Meito</span>
                                    </h2>
                                </div>
                                <div class=\"featured-product-active-2 owl-carousel\">
                                    <div class=\"featured-product-bundle\">
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/4.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/5.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/6.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                        <!-- Begin Featured Product Area -->
                        <div class=\"col-lg-4\">
                            <div class=\"featured-product pt-sm-10 pt-xs-25\">
                                <div class=\"li-section-title\">
                                    <h2>
                                        <span>Sanai</span>
                                    </h2>
                                </div>
                                <div class=\"featured-product-active-2 owl-carousel\">
                                    <div class=\"featured-product-bundle\">
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/6.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/4.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"group-featured-pro-wrapper\">
                                                <div class=\"product-img\">
                                                    <a href=\"product-details.html\">
                                                        <img alt=\"\" src=\"images/featured-product/2.jpg\">
                                                    </a>
                                                </div>
                                                <div class=\"featured-pro-content\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class=\"rating-box\">
                                                        <ul class=\"rating\">
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                            <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class=\"featured-product-name\" href=\"single-product.html\">Mug Today is a good day</a></h4>
                                                    <div class=\"featured-price-box\">
                                                        <span class=\"new-price\">\$71.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Group Featured Product Area End Here -->
           <!-- jQuery-V1.12.4 -->
{% endblock %}", "front/index.html.twig", "/Users/skanderzouaoui/Documents/ProTECH/templates/front/index.html.twig");
    }
}
