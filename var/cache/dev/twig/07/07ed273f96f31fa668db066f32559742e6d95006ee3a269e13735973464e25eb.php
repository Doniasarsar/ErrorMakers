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

/* shop.html.twig */
class __TwigTemplate_c751b60a8f748fb14a3da19a08be4f223373fcd59907fcf838927e4d0515146c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop.html.twig"));

        $this->parent = $this->loadTemplate("header-footer.html.twig", "shop.html.twig", 1);
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
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/1_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"li-banner mt-15 mt-md-30 mt-xs-25 mb-xs-5\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 65
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
        // line 112
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
        // line 153
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
        // line 196
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
        // line 237
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
        // line 280
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
        // line 321
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
        // line 370
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
        // line 411
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
        // line 454
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
        // line 495
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
        // line 538
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
        // line 579
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
        // line 628
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
        // line 669
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
        // line 712
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
        // line 753
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
        // line 796
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
        // line 837
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
        // line 890
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
        // line 899
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
                               ";
        // line 925
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 925, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 926
            echo "                                  
                                        <!-- single-product-wrap start -->
                                        <div class=\"single-product-wrap\">
                                            <div class=\"product-image\">
                                                <a href=\"single-product.html\">
                                                    <img src=\"";
            // line 931
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/1.jpg"), "html", null, true);
            echo "\" alt=\"Li's Product Image\">
                                                </a>
                                                <span class=\"sticker\">New</span>
                                            </div>
                                            <div class=\"product_desc\">
                                                <div class=\"product_desc_info\">
                                                    <div class=\"product-review\">
                                                        <h5 class=\"manufacturer\">
                                                            <a href=\"product-details.html\">";
            // line 939
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "description", [], "any", false, false, false, 939), "html", null, true);
            echo "</a>
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
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">";
            // line 951
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "description", [], "any", false, false, false, 951), "html", null, true);
            echo "</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">";
            // line 953
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "prix", [], "any", false, false, false, 953), "html", null, true);
            echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"";
            // line 958
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["class"], "id", [], "any", false, false, false, 958)]), "html", null, true);
            echo "\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                   
                                   
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 969
        echo "                            </div>
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
        // line 999
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
        // line 1040
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
        // line 1083
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
        // line 1124
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
        // line 1167
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
        // line 1208
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
        return "shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1381 => 1208,  1337 => 1167,  1291 => 1124,  1247 => 1083,  1201 => 1040,  1157 => 999,  1125 => 969,  1108 => 958,  1100 => 953,  1095 => 951,  1080 => 939,  1069 => 931,  1062 => 926,  1058 => 925,  1029 => 899,  1017 => 890,  961 => 837,  917 => 796,  871 => 753,  827 => 712,  781 => 669,  737 => 628,  685 => 579,  641 => 538,  595 => 495,  551 => 454,  505 => 411,  461 => 370,  409 => 321,  365 => 280,  319 => 237,  275 => 196,  229 => 153,  185 => 112,  135 => 65,  127 => 60,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"header-footer.html.twig\" %}
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
                               {% for class  in tab %}
                                  
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
                                                            <a href=\"product-details.html\">{{ class.description }}</a>
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
                                                    <h4><a class=\"product_name\" href=\"single-product.html\">{{ class.description }}</a></h4>
                                                    <div class=\"price-box\">
                                                        <span class=\"new-price\">{{ class.prix }}</span>
                                                    </div>
                                                </div>
                                                <div class=\"add-actions\">
                                                    <ul class=\"add-actions-link\">
                                                        <li class=\"add-cart active\"><a href=\"{{path(\"cart_add\",{id:class.id})}}\">Add to cart</a></li>
                                                        <li><a class=\"links-details\" href=\"single-product.html\"><i class=\"fa fa-heart-o\"></i></a></li>
                                                        <li><a class=\"quick-view\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\"><i class=\"fa fa-eye\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                   
                                   
                            {% endfor %}
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
{% endblock %}", "shop.html.twig", "C:\\Users\\doghm\\Desktop\\PiDev\\ErrorMakers-3A45\\templates\\shop.html.twig");
    }
}
