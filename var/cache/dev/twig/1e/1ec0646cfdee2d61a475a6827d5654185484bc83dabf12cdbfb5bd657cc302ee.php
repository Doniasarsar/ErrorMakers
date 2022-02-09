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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
    
<!-- index-431:41-->
<head>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 48
        echo "    </head>
    ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 2573
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 2616
        echo "    </body>

<!-- index-431:47-->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Home Version Four || limupa - Digital Products Store ECommerce Bootstrap 4 Template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.png\">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome Stars-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-stars.css"), "html", null, true);
        echo "\">
    <!-- Meanmenu CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/meanmenu.css"), "html", null, true);
        echo "\">
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <!-- Slick Carousel CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <!-- Jquery-ui CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">
    <!-- Venobox CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/venobox.css"), "html", null, true);
        echo "\">
    <!-- Nice Select CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
    <!-- Magnific Popup CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Helper CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/helper.css"), "html", null, true);
        echo "\">
    <!-- Main Style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
    <!-- Modernizr js -->
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("s/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "j\"></script>
</head>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "    <body>
    <!--[if lt IE 8]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Begin Header Area -->
            <header class=\"li-header-4\">
                <!-- Begin Header Top Area -->
                <div class=\"header-top\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Begin Header Top Left Area -->
                            <div class=\"col-lg-3 col-md-4\">
                                <div class=\"header-top-left\">
                                    <ul class=\"phone-wrap\">
                                        <li><span>Telephone Enquiry:</span><a href=\"#\">(+123) 123 321 345</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class=\"col-lg-9 col-md-8\">
                                <div class=\"header-top-right\">
                                    <ul class=\"ht-menu\">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div class=\"ht-setting-trigger\"><span>Setting</span></div>
                                            <div class=\"setting ht-setting\">
                                                <ul class=\"ht-setting-list\">
                                                    <li><a href=\"login-register.html\">My Account</a></li>
                                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                                    <li><a href=\"login-register.html\">Sign In</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                        <li>
                                            <span class=\"currency-selector-wrapper\">Currency :</span>
                                            <div class=\"ht-currency-trigger\"><span>USD \$</span></div>
                                            <div class=\"currency ht-currency\">
                                                <ul class=\"ht-setting-list\">
                                                    <li><a href=\"#\">EUR €</a></li>
                                                    <li class=\"active\"><a href=\"#\">USD \$</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class=\"language-selector-wrapper\">Language :</span>
                                            <div class=\"ht-language-trigger\"><span>English</span></div>
                                            <div class=\"language ht-language\">
                                                <ul class=\"ht-setting-list\">
                                                    <li class=\"active\"><a href=\"#\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/menu/flag-icon/1.jpg"), "html", null, true);
        echo "\" alt=\"\">English</a></li>
                                                    <li><a href=\"#\"><img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/menu/flag-icon/2.jpg"), "html", null, true);
        echo "\" alt=\"\">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class=\"header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Begin Header Logo Area -->
                            <div class=\"col-lg-3\">
                                <div class=\"logo pb-sm-30 pb-xs-30\">
                                    <a href=\"index.html\">
                                        <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/menu/logo/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class=\"col-lg-9 pl-0 ml-sm-15 ml-xs-15\">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action=\"#\" class=\"hm-searchbox\">
                                    <select class=\"nice-select select-search-category\">
                                        <option value=\"0\">All</option>                         
                                        <option value=\"10\">Laptops</option>                     
                                        <option value=\"17\">- -  Prime Video</option>                    
                                        <option value=\"20\">- - - -  All Videos</option>                     
                                        <option value=\"21\">- - - -  Blouses</option>                        
                                        <option value=\"22\">- - - -  Evening Dresses</option>                
                                        <option value=\"23\">- - - -  Summer Dresses</option>                     
                                        <option value=\"24\">- - - -  T-shirts</option>                       
                                        <option value=\"25\">- - - -  Rent or Buy</option>                        
                                        <option value=\"26\">- - - -  Your Watchlist</option>                     
                                        <option value=\"27\">- - - -  Watch Anywhere</option>                     
                                        <option value=\"28\">- - - -  Getting Started</option>         
                                        <option value=\"18\">- - - -  Computers</option>                      
                                        <option value=\"29\">- - - -  More to Explore</option>         
                                        <option value=\"30\">- - - -  TV &amp; Video</option>                     
                                        <option value=\"31\">- - - -  Audio &amp; Theater</option>               
                                        <option value=\"32\">- - - -  Camera, Photo </option>
                                        <option value=\"33\">- - - -  Cell Phones</option>                        
                                        <option value=\"34\">- - - -  Headphones</option>                     
                                        <option value=\"35\">- - - -  Video Games</option>                        
                                        <option value=\"36\">- - - -  Wireless Speakers</option>            
                                        <option value=\"19\">- - - -  Electronics</option>                        
                                        <option value=\"37\">- - - -  Amazon Home</option>                        
                                        <option value=\"38\">- - - -  Kitchen &amp; Dining</option>           
                                        <option value=\"39\">- - - -  Furniture</option>                      
                                        <option value=\"40\">- - - -  Bed &amp; Bath</option>                     
                                        <option value=\"41\">- - - -  Appliances</option>                 
                                        <option value=\"11\">TV &amp; Audio</option>                  
                                        <option value=\"42\">- -  Chamcham</option>                        
                                        <option value=\"45\">- - - -  Office</option>                     
                                        <option value=\"47\">- - - -  Gaming</option>                 
                                        <option value=\"48\">- - - -  Chromebook</option>                     
                                        <option value=\"49\">- - - -  Refurbished</option>                    
                                        <option value=\"50\">- - - -  Touchscreen</option>                        
                                        <option value=\"51\">- - - -  Ultrabooks</option>                     
                                        <option value=\"52\">- - - -  Blouses</option>                        
                                        <option value=\"43\">- -  Meito</option>                        
                                        <option value=\"53\">- - - -  Hard Drives</option>                        
                                        <option value=\"54\">- - - -  Graphic Cards</option>                      
                                        <option value=\"55\">- - - -  Processors (CPU)</option>  
                                        <option value=\"56\">- - - -  Memory</option>                     
                                        <option value=\"57\">- - - -  Motherboards</option>                       
                                        <option value=\"58\">- - - -  Fans &amp; Cooling</option> 
                                        <option value=\"59\">- - - -  CD/DVD Drives</option>                      
                                        <option value=\"44\">- -  XailStation</option>                        
                                        <option value=\"60\">- - - -  Sound Cards</option>                        
                                        <option value=\"61\">- - - -  Cases &amp; Towers</option>   
                                        <option value=\"62\">- - - -  Casual Dresses</option>                     
                                        <option value=\"63\">- - - -  Evening Dresses</option>       
                                        <option value=\"64\">- - - -  T-shirts</option>                       
                                        <option value=\"65\">- - - -  Tops</option>                                 
                                        <option value=\"12\">Smartphone</option>                  
                                        <option value=\"66\">- -  Camera Accessories</option>                     
                                        <option value=\"68\">- - - -  Octa Core</option>                      
                                        <option value=\"69\">- - - -  Quad Core</option>                  
                                        <option value=\"70\">- - - -  Dual Core</option>                      
                                        <option value=\"71\">- - - -  7.0 Screen</option>                     
                                        <option value=\"72\">- - - -  9.0 Screen</option>                     
                                        <option value=\"73\">- - - -  Bags &amp; Cases</option>                   
                                        <option value=\"67\">- -  Sanai</option>                     
                                        <option value=\"74\">- - - -  Batteries</option>                      
                                        <option value=\"75\">- - - -  Microphones</option>                        
                                        <option value=\"76\">- - - -  Stabilizers</option>                        
                                        <option value=\"77\">- - - -  Video Tapes</option>                        
                                        <option value=\"78\">- - - -  Memory Card Readers</option> 
                                        <option value=\"79\">- - - -  Tripods</option>           
                                        <option value=\"13\">Cameras</option>                          
                                        <option value=\"14\">headphone</option>                                
                                        <option value=\"15\">Smartwatch</option>                           
                                        <option value=\"16\">Accessories</option>
                                    </select>
                                    <input type=\"text\" placeholder=\"Enter your search key ...\">
                                    <button class=\"li-btn\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class=\"header-middle-right\">
                                    
                                    <ul class=\"hm-menu\">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class=\"hm-wishlist\">
                                            <a href=\"#\">
                                               
                                                <i class=\"fa fa-user-o\"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class=\"hm-minicart\">
                                            <div class=\"hm-minicart-trigger\">
                                                <span class=\"item-icon\"></span>
                                                <span class=\"item-text\">£80.00
                                                    <span class=\"cart-item-count\">2</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class=\"minicart\">
                                                <ul class=\"minicart-product-list\">
                                                    <li>
                                                        <a href=\"single-product.html\" class=\"minicart-product-image\">
                                                            <img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/1.jpg"), "html", null, true);
        echo "\" alt=\"cart products\">
                                                        </a>
                                                        <div class=\"minicart-product-details\">
                                                            <h6><a href=\"single-product.html\">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class=\"close\">
                                                            <i class=\"fa fa-close\"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a href=\"single-product.html\" class=\"minicart-product-image\">
                                                            <img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/2.jpg"), "html", null, true);
        echo "\" alt=\"cart products\">
                                                        </a>
                                                        <div class=\"minicart-product-details\">
                                                            <h6><a href=\"single-product.html\">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class=\"close\">
                                                            <i class=\"fa fa-close\"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <p class=\"minicart-total\">SUBTOTAL: <span>£80.00</span></p>
                                                <div class=\"minicart-button\">
                                                    <a href=\"checkout.html\" class=\"li-button li-button-dark li-button-fullwidth li-button-sm\">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    <a href=\"checkout.html\" class=\"li-button li-button-fullwidth li-button-sm\">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class=\"header-bottom header-sticky stick d-none d-lg-block d-xl-block\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                               <!-- Begin Header Bottom Menu Area -->
                               <div class=\"hb-menu\">
                                   <nav>
                                       <ul>
                                           <li class=\"dropdown-holder\"><a href=\"index.html\">Home</a>
                                               <ul class=\"hb-dropdown\">
                                                   <li><a href=\"index.html\">Home One</a></li>
                                                   <li><a href=\"index-2.html\">Home Two</a></li>
                                                   <li><a href=\"index-3.html\">Home Three</a></li>
                                                   <li class=\"active\"><a href=\"index-4.html\">Home Four</a></li>
                                               </ul>
                                           </li>
                                           <li class=\"megamenu-holder\"><a href=\"shop-left-sidebar.html\">Shop</a>
                                               <ul class=\"megamenu hb-megamenu\">
                                                   <li><a href=\"shop-left-sidebar.html\">Shop Page Layout</a>
                                                       <ul>
                                                           <li><a href=\"shop-3-column.html\">Shop 3 Column</a></li>
                                                           <li><a href=\"shop-4-column.html\">Shop 4 Column</a></li>
                                                           <li><a href=\"shop-left-sidebar.html\">Shop Left Sidebar</a></li>
                                                           <li><a href=\"shop-right-sidebar.html\">Shop Right Sidebar</a></li>
                                                           <li><a href=\"shop-list.html\">Shop List</a></li>
                                                           <li><a href=\"shop-list-left-sidebar.html\">Shop List Left Sidebar</a></li>
                                                           <li><a href=\"shop-list-right-sidebar.html\">Shop List Right Sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href=\"single-product-gallery-left.html\">Single Product Style</a>
                                                       <ul>
                                                           <li><a href=\"single-product-carousel.html\">Single Product Carousel</a></li>
                                                           <li><a href=\"single-product-gallery-left.html\">Single Product Gallery Left</a></li>
                                                           <li><a href=\"single-product-gallery-right.html\">Single Product Gallery Right</a></li>
                                                           <li><a href=\"single-product-tab-style-top.html\">Single Product Tab Style Top</a></li>
                                                           <li><a href=\"single-product-tab-style-left.html\">Single Product Tab Style Left</a></li>
                                                           <li><a href=\"single-product-tab-style-right.html\">Single Product Tab Style Right</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href=\"single-product.html\">Single Products</a>
                                                       <ul>
                                                           <li><a href=\"single-product.html\">Single Product</a></li>
                                                           <li><a href=\"single-product-sale.html\">Single Product Sale</a></li>
                                                           <li><a href=\"single-product-group.html\">Single Product Group</a></li>
                                                           <li><a href=\"single-product-normal.html\">Single Product Normal</a></li>
                                                           <li><a href=\"single-product-affiliate.html\">Single Product Affiliate</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li class=\"dropdown-holder\"><a href=\"blog-left-sidebar.html\">Blog</a>
                                               <ul class=\"hb-dropdown\">
                                                   <li class=\"sub-dropdown-holder\"><a href=\"blog-left-sidebar.html\">Blog Grid View</a>
                                                       <ul class=\"hb-dropdown hb-sub-dropdown\">
                                                           <li><a href=\"blog-2-column.html\">Blog 2 Column</a></li>
                                                           <li><a href=\"blog-3-column.html\">Blog 3 Column</a></li>
                                                           <li><a href=\"blog-left-sidebar.html\">Grid Left Sidebar</a></li>
                                                           <li><a href=\"blog-right-sidebar.html\">Grid Right Sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li class=\"sub-dropdown-holder\"><a href=\"blog-list-left-sidebar.html\">Blog List View</a>
                                                       <ul class=\"hb-dropdown hb-sub-dropdown\">
                                                           <li><a href=\"blog-list.html\">Blog List</a></li>
                                                           <li><a href=\"blog-list-left-sidebar.html\">List Left Sidebar</a></li>
                                                           <li><a href=\"blog-list-right-sidebar.html\">List Right Sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li class=\"sub-dropdown-holder\"><a href=\"blog-details-left-sidebar.html\">Blog Details</a>
                                                       <ul class=\"hb-dropdown hb-sub-dropdown\">
                                                           <li><a href=\"blog-details-left-sidebar.html\">Left Sidebar</a></li>
                                                           <li><a href=\"blog-details-right-sidebar.html\">Right Sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li class=\"sub-dropdown-holder\"><a href=\"blog-gallery-format.html\">Blog Format</a>
                                                       <ul class=\"hb-dropdown hb-sub-dropdown\">
                                                           <li><a href=\"blog-audio-format.html\">Blog Audio Format</a></li>
                                                           <li><a href=\"blog-video-format.html\">Blog Video Format</a></li>
                                                           <li><a href=\"blog-gallery-format.html\">Blog Gallery Format</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li class=\"megamenu-static-holder\"><a href=\"index.html\">Pages</a>
                                               <ul class=\"megamenu hb-megamenu\">
                                                   <li><a href=\"blog-left-sidebar.html\">Blog Layouts</a>
                                                       <ul>
                                                           <li><a href=\"blog-2-column.html\">Blog 2 Column</a></li>
                                                           <li><a href=\"blog-3-column.html\">Blog 3 Column</a></li>
                                                           <li><a href=\"blog-left-sidebar.html\">Grid Left Sidebar</a></li>
                                                           <li><a href=\"blog-right-sidebar.html\">Grid Right Sidebar</a></li>
                                                           <li><a href=\"blog-list.html\">Blog List</a></li>
                                                           <li><a href=\"blog-list-left-sidebar.html\">List Left Sidebar</a></li>
                                                           <li><a href=\"blog-list-right-sidebar.html\">List Right Sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href=\"blog-details-left-sidebar.html\">Blog Details Pages</a>
                                                       <ul>
                                                           <li><a href=\"blog-details-left-sidebar.html\">Left Sidebar</a></li>
                                                           <li><a href=\"blog-details-right-sidebar.html\">Right Sidebar</a></li>
                                                           <li><a href=\"blog-audio-format.html\">Blog Audio Format</a></li>
                                                           <li><a href=\"blog-video-format.html\">Blog Video Format</a></li>
                                                           <li><a href=\"blog-gallery-format.html\">Blog Gallery Format</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href=\"index.html\">Other Pages</a>
                                                       <ul>
                                                           <li><a href=\"login-register.html\">My Account</a></li>
                                                           <li><a href=\"checkout.html\">Checkout</a></li>
                                                           <li><a href=\"compare.html\">Compare</a></li>
                                                           <li><a href=\"wishlist.html\">Wishlist</a></li>
                                                           <li><a href=\"shopping-cart.html\">Shopping Cart</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href=\"index.html\">Other Pages 2</a>
                                                       <ul>
                                                           <li><a href=\"contact.html\">Contact</a></li>
                                                           <li><a href=\"about-us.html\">About Us</a></li>
                                                           <li><a href=\"faq.html\">FAQ</a></li>
                                                           <li><a href=\"404.html\">404 Error</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li><a href=\"about-us.html\">About Us</a></li>
                                           <li><a href=\"contact.html\">Contact</a></li>
                                           <li><a href=\"shop-left-sidebar.html\">Smartwatch</a></li>
                                           <li><a href=\"shop-left-sidebar.html\">Accessories</a></li>
                                       </ul>
                                   </nav>
                               </div>
                               <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class=\"mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12\">
                    <div class=\"container\"> 
                        <div class=\"row\">
                            <div class=\"mobile-menu\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
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
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/1_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"li-banner mt-15 mt-md-30 mt-xs-25 mb-xs-5\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 490
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
        // line 537
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
        // line 578
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
        // line 621
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
        // line 662
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
        // line 705
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
        // line 746
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
        // line 795
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
        // line 836
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
        // line 879
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
        // line 920
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
        // line 963
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
        // line 1004
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
        // line 1053
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
        // line 1094
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
        // line 1137
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
        // line 1178
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
        // line 1221
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
        // line 1262
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
        // line 1315
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
        // line 1324
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
        // line 1356
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
        // line 1397
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
        // line 1440
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
        // line 1481
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
        // line 1524
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
        // line 1565
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
        // line 1634
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
        // line 1675
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
        // line 1718
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
        // line 1759
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
        // line 1802
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
        // line 1843
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
            <!-- Begin Footer Area -->
            <div class=\"footer\">
                <!-- Begin Footer Static Top Area -->
                <div class=\"footer-static-top\">
                    <div class=\"container\">
                        <!-- Begin Footer Shipping Area -->
                        <div class=\"footer-shipping pt-60 pb-25\">
                            <div class=\"row\">
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class=\"col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55\">
                                    <div class=\"li-shipping-inner-box\">
                                        <div class=\"shipping-icon\">
                                            <img src=\"";
        // line 2242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shipping-icon/1.png"), "html", null, true);
        echo "\" alt=\"Shipping Icon\">
                                        </div>
                                        <div class=\"shipping-text\">
                                            <h2>Free Delivery</h2>
                                            <p>And free returns. See checkout for delivery dates.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class=\"col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55\">
                                    <div class=\"li-shipping-inner-box\">
                                        <div class=\"shipping-icon\">
                                            <img src=\"";
        // line 2255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shipping-icon/2.png"), "html", null, true);
        echo "\" alt=\"Shipping Icon\">
                                        </div>
                                        <div class=\"shipping-text\">
                                            <h2>Safe Payment</h2>
                                            <p>Pay with the world's most popular and secure payment methods.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class=\"col-lg-3 col-md-6 col-sm-6 pb-xs-30\">
                                    <div class=\"li-shipping-inner-box\">
                                        <div class=\"shipping-icon\">
                                            <img src=\"";
        // line 2268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shipping-icon/3.png"), "html", null, true);
        echo "\" alt=\"Shipping Icon\">
                                        </div>
                                        <div class=\"shipping-text\">
                                            <h2>Shop with Confidence</h2>
                                            <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class=\"col-lg-3 col-md-6 col-sm-6 pb-xs-30\">
                                    <div class=\"li-shipping-inner-box\">
                                        <div class=\"shipping-icon\">
                                            <img src=\"";
        // line 2281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shipping-icon/4.png"), "html", null, true);
        echo "\" alt=\"Shipping Icon\">
                                        </div>
                                        <div class=\"shipping-text\">
                                            <h2>24/7 Help Center</h2>
                                            <p>Have a question? Call a Specialist or chat online.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                            </div>
                        </div>
                        <!-- Footer Shipping Area End Here -->
                    </div>
                </div>
                <!-- Footer Static Top Area End Here -->
                <!-- Begin Footer Static Middle Area -->
                <div class=\"footer-static-middle\">
                    <div class=\"container\">
                        <div class=\"footer-logo-wrap pt-50 pb-35\">
                            <div class=\"row\">
                                <!-- Begin Footer Logo Area -->
                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"footer-logo\">
                                        <img src=\"";
        // line 2304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/menu/logo/1.jpg"), "html", null, true);
        echo "\" alt=\"Footer Logo\">
                                        <p class=\"info\">
                                            We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                                        </p>
                                    </div>
                                    <ul class=\"des\">
                                        <li>
                                            <span>Address: </span>
                                            6688Princess Road, London, Greater London BAS 23JK, UK
                                        </li>
                                        <li>
                                            <span>Phone: </span>
                                            <a href=\"#\">(+123) 123 321 345</a>
                                        </li>
                                        <li>
                                            <span>Email: </span>
                                            <a href=\"mailto://info@yourdomain.com\">info@yourdomain.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Logo Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                                    <div class=\"footer-block\">
                                        <h3 class=\"footer-block-title\">Product</h3>
                                        <ul>
                                            <li><a href=\"#\">Prices drop</a></li>
                                            <li><a href=\"#\">New products</a></li>
                                            <li><a href=\"#\">Best sales</a></li>
                                            <li><a href=\"#\">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                                    <div class=\"footer-block\">
                                        <h3 class=\"footer-block-title\">Our company</h3>
                                        <ul>
                                            <li><a href=\"#\">Delivery</a></li>
                                            <li><a href=\"#\">Legal Notice</a></li>
                                            <li><a href=\"#\">About us</a></li>
                                            <li><a href=\"#\">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class=\"col-lg-4\">
                                    <div class=\"footer-block\">
                                        <h3 class=\"footer-block-title\">Follow Us</h3>
                                        <ul class=\"social-link\">
                                            <li class=\"twitter\">
                                                <a href=\"https://twitter.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Twitter\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                            </li>
                                            <li class=\"rss\">
                                                <a href=\"https://rss.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"RSS\">
                                                    <i class=\"fa fa-rss\"></i>
                                                </a>
                                            </li>
                                            <li class=\"google-plus\">
                                                <a href=\"https://www.plus.google.com/discover\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Google +\">
                                                    <i class=\"fa fa-google-plus\"></i>
                                                </a>
                                            </li>
                                            <li class=\"facebook\">
                                                <a href=\"https://www.facebook.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Facebook\">
                                                    <i class=\"fa fa-facebook\"></i>
                                                </a>
                                            </li>
                                            <li class=\"youtube\">
                                                <a href=\"https://www.youtube.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Youtube\">
                                                    <i class=\"fa fa-youtube\"></i>
                                                </a>
                                            </li>
                                            <li class=\"instagram\">
                                                <a href=\"https://www.instagram.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Instagram\">
                                                    <i class=\"fa fa-instagram\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Begin Footer Newsletter Area -->
                                    <div class=\"footer-newsletter\">
                                        <h4>Sign up to newsletter</h4>
                                        <form action=\"#\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"footer-subscribe-form validate\" target=\"_blank\" novalidate>
                                           <div id=\"mc_embed_signup_scroll\">
                                              <div id=\"mc-form\" class=\"mc-form subscribe-form form-group\" >
                                                <input id=\"mc-email\" type=\"email\" autocomplete=\"off\" placeholder=\"Enter your email\" />
                                                <button  class=\"btn\" id=\"mc-submit\">Subscribe</button>
                                              </div>
                                           </div>
                                        </form>
                                    </div>
                                    <!-- Footer Newsletter Area End Here -->
                                </div>
                                <!-- Footer Block Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Middle Area End Here -->
                <!-- Begin Footer Static Bottom Area -->
                <div class=\"footer-static-bottom pt-55 pb-55\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <!-- Begin Footer Links Area -->
                                <div class=\"footer-links\">
                                    <ul>
                                        <li><a href=\"#\">Online Shopping</a></li>
                                        <li><a href=\"#\">Promotions</a></li>
                                        <li><a href=\"#\">My Orders</a></li>
                                        <li><a href=\"#\">Help</a></li>
                                        <li><a href=\"#\">Customer Service</a></li>
                                        <li><a href=\"#\">Support</a></li>
                                        <li><a href=\"#\">Most Populars</a></li>
                                        <li><a href=\"#\">New Arrivals</a></li>
                                        <li><a href=\"#\">Special Products</a></li>
                                        <li><a href=\"#\">Manufacturers</a></li>
                                        <li><a href=\"#\">Our Stores</a></li>
                                        <li><a href=\"#\">Shipping</a></li>
                                        <li><a href=\"#\">Payments</a></li>
                                        <li><a href=\"#\">Warantee</a></li>
                                        <li><a href=\"#\">Refunds</a></li>
                                        <li><a href=\"#\">Checkout</a></li>
                                        <li><a href=\"#\">Discount</a></li>
                                        <li><a href=\"#\">Refunds</a></li>
                                        <li><a href=\"#\">Policy Shipping</a></li>
                                    </ul>
                                </div>
                                <!-- Footer Links Area End Here -->
                                <!-- Begin Footer Payment Area -->
                                <div class=\"copyright text-center\">
                                    <a href=\"#\">
                                        <img src=\"";
        // line 2441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/payment/1.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                </div>
                                <!-- Footer Payment Area End Here -->
                                <!-- Begin Copyright Area -->
                                <div class=\"copyright text-center pt-25\">
                                    <span><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a></span>
                                </div>
                                <!-- Copyright Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Bottom Area End Here -->
            </div>
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
            <div class=\"modal fade modal-wrapper\" id=\"exampleModalCenter\" >
                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                            <div class=\"modal-inner-area row\">
                                <div class=\"col-lg-5 col-md-6 col-sm-6\">
                                   <!-- Product Details Left -->
                                    <div class=\"product-details-left\">
                                        <div class=\"product-details-images slider-navigation-1\">
                                            <div class=\"lg-image\">
                                                <img src=\"";
        // line 2471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/1.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                            </div>
                                            <div class=\"lg-image\">
                                                <img src=\"";
        // line 2474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/2.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                            </div>
                                            <div class=\"lg-image\">
                                                <img src=\"";
        // line 2477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/3.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                            </div>
                                            <div class=\"lg-image\">
                                                <img src=\"";
        // line 2480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/4.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                            </div>
                                            <div class=\"lg-image\">
                                                <img src=\"";
        // line 2483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/5.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                            </div>
                                            <div class=\"lg-image\">
                                                <img src=\"";
        // line 2486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/large-size/6.jpg"), "html", null, true);
        echo "\" alt=\"product image\">
                                            </div>
                                        </div>
                                        <div class=\"product-details-thumbs slider-thumbs-1\">                                        
                                            <div class=\"sm-image\"><img src=\"";
        // line 2490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/1.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                            <div class=\"sm-image\"><img src=\"";
        // line 2491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/2.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                            <div class=\"sm-image\"><img src=\"";
        // line 2492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/3.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                            <div class=\"sm-image\"><img src=\"";
        // line 2493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/4.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                            <div class=\"sm-image\"><img src=\"";
        // line 2494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/5.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                            <div class=\"sm-image\"><img src=\"";
        // line 2495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/6.jpg"), "html", null, true);
        echo "\" alt=\"product image thumb\"></div>
                                        </div>
                                    </div>
                                    <!--// Product Details Left -->
                                </div>

                                <div class=\"col-lg-7 col-md-6 col-sm-6\">
                                    <div class=\"product-details-view-content pt-60\">
                                        <div class=\"product-info\">
                                            <h2>Today is a good day Framed poster</h2>
                                            <span class=\"product-details-ref\">Reference: demo_15</span>
                                            <div class=\"rating-box pt-20\">
                                                <ul class=\"rating rating-with-review-item\">
                                                    <li><i class=\"fa fa-star-o\"></i></li>
                                                    <li><i class=\"fa fa-star-o\"></i></li>
                                                    <li><i class=\"fa fa-star-o\"></i></li>
                                                    <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                    <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                    <li class=\"review-item\"><a href=\"#\">Read Review</a></li>
                                                    <li class=\"review-item\"><a href=\"#\">Write Review</a></li>
                                                </ul>
                                            </div>
                                            <div class=\"price-box pt-20\">
                                                <span class=\"new-price new-price-2\">\$57.98</span>
                                            </div>
                                            <div class=\"product-desc\">
                                                <p>
                                                    <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                                    </span>
                                                </p>
                                            </div>
                                            <div class=\"product-variants\">
                                                <div class=\"produt-variants-size\">
                                                    <label>Dimension</label>
                                                    <select class=\"nice-select\">
                                                        <option value=\"1\" title=\"S\" selected=\"selected\">40x60cm</option>
                                                        <option value=\"2\" title=\"M\">60x90cm</option>
                                                        <option value=\"3\" title=\"L\">80x120cm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"single-add-to-cart\">
                                                <form action=\"#\" class=\"cart-quantity\">
                                                    <div class=\"quantity\">
                                                        <label>Quantity</label>
                                                        <div class=\"cart-plus-minus\">
                                                            <input class=\"cart-plus-minus-box\" value=\"1\" type=\"text\">
                                                            <div class=\"dec qtybutton\"><i class=\"fa fa-angle-down\"></i></div>
                                                            <div class=\"inc qtybutton\"><i class=\"fa fa-angle-up\"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class=\"add-to-cart\" type=\"submit\">Add to cart</button>
                                                </form>
                                            </div>
                                            <div class=\"product-additional-info pt-25\">
                                                <a class=\"wishlist-btn\" href=\"wishlist.html\"><i class=\"fa fa-heart-o\"></i>Add to wishlist</a>
                                                <div class=\"product-social-sharing pt-25\">
                                                    <ul>
                                                        <li class=\"facebook\"><a href=\"#\"><i class=\"fa fa-facebook\"></i>Facebook</a></li>
                                                        <li class=\"twitter\"><a href=\"#\"><i class=\"fa fa-twitter\"></i>Twitter</a></li>
                                                        <li class=\"google-plus\"><a href=\"#\"><i class=\"fa fa-google-plus\"></i>Google +</a></li>
                                                        <li class=\"instagram\"><a href=\"#\"><i class=\"fa fa-instagram\"></i>Instagram</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2573
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2574
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Popper js -->
        <script src=\"";
        // line 2576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/popper.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src=\"";
        // line 2578
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Ajax Mail js -->
        <script src=\"";
        // line 2580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ajax-mail.js"), "html", null, true);
        echo "\"></script>
        <!-- Meanmenu js -->
        <script src=\"";
        // line 2582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.meanmenu.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Wow.min js -->
        <script src=\"";
        // line 2584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Slick Carousel js -->
        <script src=\"";
        // line 2586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Owl Carousel-2 js -->
        <script src=\"";
        // line 2588
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Magnific popup js -->
        <script src=\"";
        // line 2590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Isotope js -->
        <script src=\"";
        // line 2592
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Imagesloaded js -->
        <script src=\"";
        // line 2594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Mixitup js -->
        <script src=\"";
        // line 2596
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Countdown -->
        <script src=\"";
        // line 2598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Counterup -->
        <script src=\"";
        // line 2600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Waypoints -->
        <script src=\"";
        // line 2602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Barrating -->
        <script src=\"";
        // line 2604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.barrating.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Jquery-ui -->
        <script src=\"";
        // line 2606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Venobox -->
        <script src=\"";
        // line 2608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/venobox.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Nice Select js -->
        <script src=\"";
        // line 2610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
        <!-- ScrollUp js -->
        <script src=\"";
        // line 2612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollUp.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Main/Activator js -->
        <script src=\"";
        // line 2614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  3009 => 2614,  3004 => 2612,  2999 => 2610,  2994 => 2608,  2989 => 2606,  2984 => 2604,  2979 => 2602,  2974 => 2600,  2969 => 2598,  2964 => 2596,  2959 => 2594,  2954 => 2592,  2949 => 2590,  2944 => 2588,  2939 => 2586,  2934 => 2584,  2929 => 2582,  2924 => 2580,  2919 => 2578,  2914 => 2576,  2908 => 2574,  2898 => 2573,  2810 => 2495,  2806 => 2494,  2802 => 2493,  2798 => 2492,  2794 => 2491,  2790 => 2490,  2783 => 2486,  2777 => 2483,  2771 => 2480,  2765 => 2477,  2759 => 2474,  2753 => 2471,  2720 => 2441,  2580 => 2304,  2554 => 2281,  2538 => 2268,  2522 => 2255,  2506 => 2242,  2104 => 1843,  2060 => 1802,  2014 => 1759,  1970 => 1718,  1924 => 1675,  1880 => 1634,  1808 => 1565,  1764 => 1524,  1718 => 1481,  1674 => 1440,  1628 => 1397,  1584 => 1356,  1549 => 1324,  1537 => 1315,  1481 => 1262,  1437 => 1221,  1391 => 1178,  1347 => 1137,  1301 => 1094,  1257 => 1053,  1205 => 1004,  1161 => 963,  1115 => 920,  1071 => 879,  1025 => 836,  981 => 795,  929 => 746,  885 => 705,  839 => 662,  795 => 621,  749 => 578,  705 => 537,  655 => 490,  647 => 485,  408 => 249,  393 => 237,  280 => 127,  256 => 106,  252 => 105,  195 => 50,  185 => 49,  172 => 45,  167 => 43,  162 => 41,  157 => 39,  152 => 37,  147 => 35,  142 => 33,  137 => 31,  132 => 29,  127 => 27,  122 => 25,  117 => 23,  112 => 21,  107 => 19,  102 => 17,  97 => 15,  87 => 7,  77 => 6,  63 => 2616,  60 => 2573,  58 => 49,  55 => 48,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
    
<!-- index-431:41-->
<head>
    {% block stylesheets %}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Home Version Four || limupa - Digital Products Store ECommerce Bootstrap 4 Template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.png\">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel=\"stylesheet\" href=\"{{asset('css/material-design-iconic-font.min.css')}}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css')}}\">
    <!-- Font Awesome Stars-->
    <link rel=\"stylesheet\" href=\"{{asset('css/fontawesome-stars.css')}}\">
    <!-- Meanmenu CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/meanmenu.css')}}\">
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
    <!-- Slick Carousel CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/slick.css')}}\">
    <!-- Animate CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/animate.css')}}\">
    <!-- Jquery-ui CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/jquery-ui.min.css')}}\">
    <!-- Venobox CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/venobox.css')}}\">
    <!-- Nice Select CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/nice-select.css')}}\">
    <!-- Magnific Popup CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\">
    <!-- Helper CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/helper.css')}}\">
    <!-- Main Style CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('style.css')}}\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/responsive.css')}}\">
    <!-- Modernizr js -->
    <script src=\"{{asset('s/vendor/modernizr-2.8.3.min.js')}}j\"></script>
</head>
        {% endblock %}
    </head>
    {% block body %}
    <body>
    <!--[if lt IE 8]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Begin Header Area -->
            <header class=\"li-header-4\">
                <!-- Begin Header Top Area -->
                <div class=\"header-top\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Begin Header Top Left Area -->
                            <div class=\"col-lg-3 col-md-4\">
                                <div class=\"header-top-left\">
                                    <ul class=\"phone-wrap\">
                                        <li><span>Telephone Enquiry:</span><a href=\"#\">(+123) 123 321 345</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class=\"col-lg-9 col-md-8\">
                                <div class=\"header-top-right\">
                                    <ul class=\"ht-menu\">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div class=\"ht-setting-trigger\"><span>Setting</span></div>
                                            <div class=\"setting ht-setting\">
                                                <ul class=\"ht-setting-list\">
                                                    <li><a href=\"login-register.html\">My Account</a></li>
                                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                                    <li><a href=\"login-register.html\">Sign In</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                        <li>
                                            <span class=\"currency-selector-wrapper\">Currency :</span>
                                            <div class=\"ht-currency-trigger\"><span>USD \$</span></div>
                                            <div class=\"currency ht-currency\">
                                                <ul class=\"ht-setting-list\">
                                                    <li><a href=\"#\">EUR €</a></li>
                                                    <li class=\"active\"><a href=\"#\">USD \$</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class=\"language-selector-wrapper\">Language :</span>
                                            <div class=\"ht-language-trigger\"><span>English</span></div>
                                            <div class=\"language ht-language\">
                                                <ul class=\"ht-setting-list\">
                                                    <li class=\"active\"><a href=\"#\"><img src=\"{{asset('images/menu/flag-icon/1.jpg')}}\" alt=\"\">English</a></li>
                                                    <li><a href=\"#\"><img src=\"{{asset('images/menu/flag-icon/2.jpg')}}\" alt=\"\">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class=\"header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Begin Header Logo Area -->
                            <div class=\"col-lg-3\">
                                <div class=\"logo pb-sm-30 pb-xs-30\">
                                    <a href=\"index.html\">
                                        <img src=\"{{asset('images/menu/logo/2.jpg')}}\" alt=\"\">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class=\"col-lg-9 pl-0 ml-sm-15 ml-xs-15\">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action=\"#\" class=\"hm-searchbox\">
                                    <select class=\"nice-select select-search-category\">
                                        <option value=\"0\">All</option>                         
                                        <option value=\"10\">Laptops</option>                     
                                        <option value=\"17\">- -  Prime Video</option>                    
                                        <option value=\"20\">- - - -  All Videos</option>                     
                                        <option value=\"21\">- - - -  Blouses</option>                        
                                        <option value=\"22\">- - - -  Evening Dresses</option>                
                                        <option value=\"23\">- - - -  Summer Dresses</option>                     
                                        <option value=\"24\">- - - -  T-shirts</option>                       
                                        <option value=\"25\">- - - -  Rent or Buy</option>                        
                                        <option value=\"26\">- - - -  Your Watchlist</option>                     
                                        <option value=\"27\">- - - -  Watch Anywhere</option>                     
                                        <option value=\"28\">- - - -  Getting Started</option>         
                                        <option value=\"18\">- - - -  Computers</option>                      
                                        <option value=\"29\">- - - -  More to Explore</option>         
                                        <option value=\"30\">- - - -  TV &amp; Video</option>                     
                                        <option value=\"31\">- - - -  Audio &amp; Theater</option>               
                                        <option value=\"32\">- - - -  Camera, Photo </option>
                                        <option value=\"33\">- - - -  Cell Phones</option>                        
                                        <option value=\"34\">- - - -  Headphones</option>                     
                                        <option value=\"35\">- - - -  Video Games</option>                        
                                        <option value=\"36\">- - - -  Wireless Speakers</option>            
                                        <option value=\"19\">- - - -  Electronics</option>                        
                                        <option value=\"37\">- - - -  Amazon Home</option>                        
                                        <option value=\"38\">- - - -  Kitchen &amp; Dining</option>           
                                        <option value=\"39\">- - - -  Furniture</option>                      
                                        <option value=\"40\">- - - -  Bed &amp; Bath</option>                     
                                        <option value=\"41\">- - - -  Appliances</option>                 
                                        <option value=\"11\">TV &amp; Audio</option>                  
                                        <option value=\"42\">- -  Chamcham</option>                        
                                        <option value=\"45\">- - - -  Office</option>                     
                                        <option value=\"47\">- - - -  Gaming</option>                 
                                        <option value=\"48\">- - - -  Chromebook</option>                     
                                        <option value=\"49\">- - - -  Refurbished</option>                    
                                        <option value=\"50\">- - - -  Touchscreen</option>                        
                                        <option value=\"51\">- - - -  Ultrabooks</option>                     
                                        <option value=\"52\">- - - -  Blouses</option>                        
                                        <option value=\"43\">- -  Meito</option>                        
                                        <option value=\"53\">- - - -  Hard Drives</option>                        
                                        <option value=\"54\">- - - -  Graphic Cards</option>                      
                                        <option value=\"55\">- - - -  Processors (CPU)</option>  
                                        <option value=\"56\">- - - -  Memory</option>                     
                                        <option value=\"57\">- - - -  Motherboards</option>                       
                                        <option value=\"58\">- - - -  Fans &amp; Cooling</option> 
                                        <option value=\"59\">- - - -  CD/DVD Drives</option>                      
                                        <option value=\"44\">- -  XailStation</option>                        
                                        <option value=\"60\">- - - -  Sound Cards</option>                        
                                        <option value=\"61\">- - - -  Cases &amp; Towers</option>   
                                        <option value=\"62\">- - - -  Casual Dresses</option>                     
                                        <option value=\"63\">- - - -  Evening Dresses</option>       
                                        <option value=\"64\">- - - -  T-shirts</option>                       
                                        <option value=\"65\">- - - -  Tops</option>                                 
                                        <option value=\"12\">Smartphone</option>                  
                                        <option value=\"66\">- -  Camera Accessories</option>                     
                                        <option value=\"68\">- - - -  Octa Core</option>                      
                                        <option value=\"69\">- - - -  Quad Core</option>                  
                                        <option value=\"70\">- - - -  Dual Core</option>                      
                                        <option value=\"71\">- - - -  7.0 Screen</option>                     
                                        <option value=\"72\">- - - -  9.0 Screen</option>                     
                                        <option value=\"73\">- - - -  Bags &amp; Cases</option>                   
                                        <option value=\"67\">- -  Sanai</option>                     
                                        <option value=\"74\">- - - -  Batteries</option>                      
                                        <option value=\"75\">- - - -  Microphones</option>                        
                                        <option value=\"76\">- - - -  Stabilizers</option>                        
                                        <option value=\"77\">- - - -  Video Tapes</option>                        
                                        <option value=\"78\">- - - -  Memory Card Readers</option> 
                                        <option value=\"79\">- - - -  Tripods</option>           
                                        <option value=\"13\">Cameras</option>                          
                                        <option value=\"14\">headphone</option>                                
                                        <option value=\"15\">Smartwatch</option>                           
                                        <option value=\"16\">Accessories</option>
                                    </select>
                                    <input type=\"text\" placeholder=\"Enter your search key ...\">
                                    <button class=\"li-btn\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class=\"header-middle-right\">
                                    
                                    <ul class=\"hm-menu\">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class=\"hm-wishlist\">
                                            <a href=\"#\">
                                               
                                                <i class=\"fa fa-user-o\"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class=\"hm-minicart\">
                                            <div class=\"hm-minicart-trigger\">
                                                <span class=\"item-icon\"></span>
                                                <span class=\"item-text\">£80.00
                                                    <span class=\"cart-item-count\">2</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class=\"minicart\">
                                                <ul class=\"minicart-product-list\">
                                                    <li>
                                                        <a href=\"single-product.html\" class=\"minicart-product-image\">
                                                            <img src=\"{{asset('images/product/small-size/1.jpg')}}\" alt=\"cart products\">
                                                        </a>
                                                        <div class=\"minicart-product-details\">
                                                            <h6><a href=\"single-product.html\">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class=\"close\">
                                                            <i class=\"fa fa-close\"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a href=\"single-product.html\" class=\"minicart-product-image\">
                                                            <img src=\"{{asset('images/product/small-size/2.jpg')}}\" alt=\"cart products\">
                                                        </a>
                                                        <div class=\"minicart-product-details\">
                                                            <h6><a href=\"single-product.html\">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class=\"close\">
                                                            <i class=\"fa fa-close\"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <p class=\"minicart-total\">SUBTOTAL: <span>£80.00</span></p>
                                                <div class=\"minicart-button\">
                                                    <a href=\"checkout.html\" class=\"li-button li-button-dark li-button-fullwidth li-button-sm\">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    <a href=\"checkout.html\" class=\"li-button li-button-fullwidth li-button-sm\">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class=\"header-bottom header-sticky stick d-none d-lg-block d-xl-block\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                               <!-- Begin Header Bottom Menu Area -->
                               <div class=\"hb-menu\">
                                   <nav>
                                       <ul>
                                           <li class=\"dropdown-holder\"><a href=\"index.html\">Home</a>
                                               <ul class=\"hb-dropdown\">
                                                   <li><a href=\"index.html\">Home One</a></li>
                                                   <li><a href=\"index-2.html\">Home Two</a></li>
                                                   <li><a href=\"index-3.html\">Home Three</a></li>
                                                   <li class=\"active\"><a href=\"index-4.html\">Home Four</a></li>
                                               </ul>
                                           </li>
                                           <li class=\"megamenu-holder\"><a href=\"shop-left-sidebar.html\">Shop</a>
                                               <ul class=\"megamenu hb-megamenu\">
                                                   <li><a href=\"shop-left-sidebar.html\">Shop Page Layout</a>
                                                       <ul>
                                                           <li><a href=\"shop-3-column.html\">Shop 3 Column</a></li>
                                                           <li><a href=\"shop-4-column.html\">Shop 4 Column</a></li>
                                                           <li><a href=\"shop-left-sidebar.html\">Shop Left Sidebar</a></li>
                                                           <li><a href=\"shop-right-sidebar.html\">Shop Right Sidebar</a></li>
                                                           <li><a href=\"shop-list.html\">Shop List</a></li>
                                                           <li><a href=\"shop-list-left-sidebar.html\">Shop List Left Sidebar</a></li>
                                                           <li><a href=\"shop-list-right-sidebar.html\">Shop List Right Sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href=\"single-product-gallery-left.html\">Single Product Style</a>
                                                       <ul>
                                                           <li><a href=\"single-product-carousel.html\">Single Product Carousel</a></li>
                                                           <li><a href=\"single-product-gallery-left.html\">Single Product Gallery Left</a></li>
                                                           <li><a href=\"single-product-gallery-right.html\">Single Product Gallery Right</a></li>
                                                           <li><a href=\"single-product-tab-style-top.html\">Single Product Tab Style Top</a></li>
                                                           <li><a href=\"single-product-tab-style-left.html\">Single Product Tab Style Left</a></li>
                                                           <li><a href=\"single-product-tab-style-right.html\">Single Product Tab Style Right</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href=\"single-product.html\">Single Products</a>
                                                       <ul>
                                                           <li><a href=\"single-product.html\">Single Product</a></li>
                                                           <li><a href=\"single-product-sale.html\">Single Product Sale</a></li>
                                                           <li><a href=\"single-product-group.html\">Single Product Group</a></li>
                                                           <li><a href=\"single-product-normal.html\">Single Product Normal</a></li>
                                                           <li><a href=\"single-product-affiliate.html\">Single Product Affiliate</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li class=\"dropdown-holder\"><a href=\"blog-left-sidebar.html\">Blog</a>
                                               <ul class=\"hb-dropdown\">
                                                   <li class=\"sub-dropdown-holder\"><a href=\"blog-left-sidebar.html\">Blog Grid View</a>
                                                       <ul class=\"hb-dropdown hb-sub-dropdown\">
                                                           <li><a href=\"blog-2-column.html\">Blog 2 Column</a></li>
                                                           <li><a href=\"blog-3-column.html\">Blog 3 Column</a></li>
                                                           <li><a href=\"blog-left-sidebar.html\">Grid Left Sidebar</a></li>
                                                           <li><a href=\"blog-right-sidebar.html\">Grid Right Sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li class=\"sub-dropdown-holder\"><a href=\"blog-list-left-sidebar.html\">Blog List View</a>
                                                       <ul class=\"hb-dropdown hb-sub-dropdown\">
                                                           <li><a href=\"blog-list.html\">Blog List</a></li>
                                                           <li><a href=\"blog-list-left-sidebar.html\">List Left Sidebar</a></li>
                                                           <li><a href=\"blog-list-right-sidebar.html\">List Right Sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li class=\"sub-dropdown-holder\"><a href=\"blog-details-left-sidebar.html\">Blog Details</a>
                                                       <ul class=\"hb-dropdown hb-sub-dropdown\">
                                                           <li><a href=\"blog-details-left-sidebar.html\">Left Sidebar</a></li>
                                                           <li><a href=\"blog-details-right-sidebar.html\">Right Sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li class=\"sub-dropdown-holder\"><a href=\"blog-gallery-format.html\">Blog Format</a>
                                                       <ul class=\"hb-dropdown hb-sub-dropdown\">
                                                           <li><a href=\"blog-audio-format.html\">Blog Audio Format</a></li>
                                                           <li><a href=\"blog-video-format.html\">Blog Video Format</a></li>
                                                           <li><a href=\"blog-gallery-format.html\">Blog Gallery Format</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li class=\"megamenu-static-holder\"><a href=\"index.html\">Pages</a>
                                               <ul class=\"megamenu hb-megamenu\">
                                                   <li><a href=\"blog-left-sidebar.html\">Blog Layouts</a>
                                                       <ul>
                                                           <li><a href=\"blog-2-column.html\">Blog 2 Column</a></li>
                                                           <li><a href=\"blog-3-column.html\">Blog 3 Column</a></li>
                                                           <li><a href=\"blog-left-sidebar.html\">Grid Left Sidebar</a></li>
                                                           <li><a href=\"blog-right-sidebar.html\">Grid Right Sidebar</a></li>
                                                           <li><a href=\"blog-list.html\">Blog List</a></li>
                                                           <li><a href=\"blog-list-left-sidebar.html\">List Left Sidebar</a></li>
                                                           <li><a href=\"blog-list-right-sidebar.html\">List Right Sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href=\"blog-details-left-sidebar.html\">Blog Details Pages</a>
                                                       <ul>
                                                           <li><a href=\"blog-details-left-sidebar.html\">Left Sidebar</a></li>
                                                           <li><a href=\"blog-details-right-sidebar.html\">Right Sidebar</a></li>
                                                           <li><a href=\"blog-audio-format.html\">Blog Audio Format</a></li>
                                                           <li><a href=\"blog-video-format.html\">Blog Video Format</a></li>
                                                           <li><a href=\"blog-gallery-format.html\">Blog Gallery Format</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href=\"index.html\">Other Pages</a>
                                                       <ul>
                                                           <li><a href=\"login-register.html\">My Account</a></li>
                                                           <li><a href=\"checkout.html\">Checkout</a></li>
                                                           <li><a href=\"compare.html\">Compare</a></li>
                                                           <li><a href=\"wishlist.html\">Wishlist</a></li>
                                                           <li><a href=\"shopping-cart.html\">Shopping Cart</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href=\"index.html\">Other Pages 2</a>
                                                       <ul>
                                                           <li><a href=\"contact.html\">Contact</a></li>
                                                           <li><a href=\"about-us.html\">About Us</a></li>
                                                           <li><a href=\"faq.html\">FAQ</a></li>
                                                           <li><a href=\"404.html\">404 Error</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li><a href=\"about-us.html\">About Us</a></li>
                                           <li><a href=\"contact.html\">Contact</a></li>
                                           <li><a href=\"shop-left-sidebar.html\">Smartwatch</a></li>
                                           <li><a href=\"shop-left-sidebar.html\">Accessories</a></li>
                                       </ul>
                                   </nav>
                               </div>
                               <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class=\"mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12\">
                    <div class=\"container\"> 
                        <div class=\"row\">
                            <div class=\"mobile-menu\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
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
            <!-- Begin Footer Area -->
            <div class=\"footer\">
                <!-- Begin Footer Static Top Area -->
                <div class=\"footer-static-top\">
                    <div class=\"container\">
                        <!-- Begin Footer Shipping Area -->
                        <div class=\"footer-shipping pt-60 pb-25\">
                            <div class=\"row\">
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class=\"col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55\">
                                    <div class=\"li-shipping-inner-box\">
                                        <div class=\"shipping-icon\">
                                            <img src=\"{{asset('images/shipping-icon/1.png')}}\" alt=\"Shipping Icon\">
                                        </div>
                                        <div class=\"shipping-text\">
                                            <h2>Free Delivery</h2>
                                            <p>And free returns. See checkout for delivery dates.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class=\"col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55\">
                                    <div class=\"li-shipping-inner-box\">
                                        <div class=\"shipping-icon\">
                                            <img src=\"{{asset('images/shipping-icon/2.png')}}\" alt=\"Shipping Icon\">
                                        </div>
                                        <div class=\"shipping-text\">
                                            <h2>Safe Payment</h2>
                                            <p>Pay with the world's most popular and secure payment methods.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class=\"col-lg-3 col-md-6 col-sm-6 pb-xs-30\">
                                    <div class=\"li-shipping-inner-box\">
                                        <div class=\"shipping-icon\">
                                            <img src=\"{{asset('images/shipping-icon/3.png')}}\" alt=\"Shipping Icon\">
                                        </div>
                                        <div class=\"shipping-text\">
                                            <h2>Shop with Confidence</h2>
                                            <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class=\"col-lg-3 col-md-6 col-sm-6 pb-xs-30\">
                                    <div class=\"li-shipping-inner-box\">
                                        <div class=\"shipping-icon\">
                                            <img src=\"{{asset('images/shipping-icon/4.png')}}\" alt=\"Shipping Icon\">
                                        </div>
                                        <div class=\"shipping-text\">
                                            <h2>24/7 Help Center</h2>
                                            <p>Have a question? Call a Specialist or chat online.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                            </div>
                        </div>
                        <!-- Footer Shipping Area End Here -->
                    </div>
                </div>
                <!-- Footer Static Top Area End Here -->
                <!-- Begin Footer Static Middle Area -->
                <div class=\"footer-static-middle\">
                    <div class=\"container\">
                        <div class=\"footer-logo-wrap pt-50 pb-35\">
                            <div class=\"row\">
                                <!-- Begin Footer Logo Area -->
                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"footer-logo\">
                                        <img src=\"{{asset('images/menu/logo/1.jpg')}}\" alt=\"Footer Logo\">
                                        <p class=\"info\">
                                            We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                                        </p>
                                    </div>
                                    <ul class=\"des\">
                                        <li>
                                            <span>Address: </span>
                                            6688Princess Road, London, Greater London BAS 23JK, UK
                                        </li>
                                        <li>
                                            <span>Phone: </span>
                                            <a href=\"#\">(+123) 123 321 345</a>
                                        </li>
                                        <li>
                                            <span>Email: </span>
                                            <a href=\"mailto://info@yourdomain.com\">info@yourdomain.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Logo Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                                    <div class=\"footer-block\">
                                        <h3 class=\"footer-block-title\">Product</h3>
                                        <ul>
                                            <li><a href=\"#\">Prices drop</a></li>
                                            <li><a href=\"#\">New products</a></li>
                                            <li><a href=\"#\">Best sales</a></li>
                                            <li><a href=\"#\">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                                    <div class=\"footer-block\">
                                        <h3 class=\"footer-block-title\">Our company</h3>
                                        <ul>
                                            <li><a href=\"#\">Delivery</a></li>
                                            <li><a href=\"#\">Legal Notice</a></li>
                                            <li><a href=\"#\">About us</a></li>
                                            <li><a href=\"#\">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class=\"col-lg-4\">
                                    <div class=\"footer-block\">
                                        <h3 class=\"footer-block-title\">Follow Us</h3>
                                        <ul class=\"social-link\">
                                            <li class=\"twitter\">
                                                <a href=\"https://twitter.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Twitter\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                            </li>
                                            <li class=\"rss\">
                                                <a href=\"https://rss.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"RSS\">
                                                    <i class=\"fa fa-rss\"></i>
                                                </a>
                                            </li>
                                            <li class=\"google-plus\">
                                                <a href=\"https://www.plus.google.com/discover\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Google +\">
                                                    <i class=\"fa fa-google-plus\"></i>
                                                </a>
                                            </li>
                                            <li class=\"facebook\">
                                                <a href=\"https://www.facebook.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Facebook\">
                                                    <i class=\"fa fa-facebook\"></i>
                                                </a>
                                            </li>
                                            <li class=\"youtube\">
                                                <a href=\"https://www.youtube.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Youtube\">
                                                    <i class=\"fa fa-youtube\"></i>
                                                </a>
                                            </li>
                                            <li class=\"instagram\">
                                                <a href=\"https://www.instagram.com/\" data-toggle=\"tooltip\" target=\"_blank\" title=\"Instagram\">
                                                    <i class=\"fa fa-instagram\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Begin Footer Newsletter Area -->
                                    <div class=\"footer-newsletter\">
                                        <h4>Sign up to newsletter</h4>
                                        <form action=\"#\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"footer-subscribe-form validate\" target=\"_blank\" novalidate>
                                           <div id=\"mc_embed_signup_scroll\">
                                              <div id=\"mc-form\" class=\"mc-form subscribe-form form-group\" >
                                                <input id=\"mc-email\" type=\"email\" autocomplete=\"off\" placeholder=\"Enter your email\" />
                                                <button  class=\"btn\" id=\"mc-submit\">Subscribe</button>
                                              </div>
                                           </div>
                                        </form>
                                    </div>
                                    <!-- Footer Newsletter Area End Here -->
                                </div>
                                <!-- Footer Block Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Middle Area End Here -->
                <!-- Begin Footer Static Bottom Area -->
                <div class=\"footer-static-bottom pt-55 pb-55\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <!-- Begin Footer Links Area -->
                                <div class=\"footer-links\">
                                    <ul>
                                        <li><a href=\"#\">Online Shopping</a></li>
                                        <li><a href=\"#\">Promotions</a></li>
                                        <li><a href=\"#\">My Orders</a></li>
                                        <li><a href=\"#\">Help</a></li>
                                        <li><a href=\"#\">Customer Service</a></li>
                                        <li><a href=\"#\">Support</a></li>
                                        <li><a href=\"#\">Most Populars</a></li>
                                        <li><a href=\"#\">New Arrivals</a></li>
                                        <li><a href=\"#\">Special Products</a></li>
                                        <li><a href=\"#\">Manufacturers</a></li>
                                        <li><a href=\"#\">Our Stores</a></li>
                                        <li><a href=\"#\">Shipping</a></li>
                                        <li><a href=\"#\">Payments</a></li>
                                        <li><a href=\"#\">Warantee</a></li>
                                        <li><a href=\"#\">Refunds</a></li>
                                        <li><a href=\"#\">Checkout</a></li>
                                        <li><a href=\"#\">Discount</a></li>
                                        <li><a href=\"#\">Refunds</a></li>
                                        <li><a href=\"#\">Policy Shipping</a></li>
                                    </ul>
                                </div>
                                <!-- Footer Links Area End Here -->
                                <!-- Begin Footer Payment Area -->
                                <div class=\"copyright text-center\">
                                    <a href=\"#\">
                                        <img src=\"{{asset('images/payment/1.png')}}\" alt=\"\">
                                    </a>
                                </div>
                                <!-- Footer Payment Area End Here -->
                                <!-- Begin Copyright Area -->
                                <div class=\"copyright text-center pt-25\">
                                    <span><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a></span>
                                </div>
                                <!-- Copyright Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Bottom Area End Here -->
            </div>
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
            <div class=\"modal fade modal-wrapper\" id=\"exampleModalCenter\" >
                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                            <div class=\"modal-inner-area row\">
                                <div class=\"col-lg-5 col-md-6 col-sm-6\">
                                   <!-- Product Details Left -->
                                    <div class=\"product-details-left\">
                                        <div class=\"product-details-images slider-navigation-1\">
                                            <div class=\"lg-image\">
                                                <img src=\"{{asset('images/product/large-size/1.jpg')}}\" alt=\"product image\">
                                            </div>
                                            <div class=\"lg-image\">
                                                <img src=\"{{asset('images/product/large-size/2.jpg')}}\" alt=\"product image\">
                                            </div>
                                            <div class=\"lg-image\">
                                                <img src=\"{{asset('images/product/large-size/3.jpg')}}\" alt=\"product image\">
                                            </div>
                                            <div class=\"lg-image\">
                                                <img src=\"{{asset('images/product/large-size/4.jpg')}}\" alt=\"product image\">
                                            </div>
                                            <div class=\"lg-image\">
                                                <img src=\"{{asset('images/product/large-size/5.jpg')}}\" alt=\"product image\">
                                            </div>
                                            <div class=\"lg-image\">
                                                <img src=\"{{asset('images/product/large-size/6.jpg')}}\" alt=\"product image\">
                                            </div>
                                        </div>
                                        <div class=\"product-details-thumbs slider-thumbs-1\">                                        
                                            <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/1.jpg')}}\" alt=\"product image thumb\"></div>
                                            <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/2.jpg')}}\" alt=\"product image thumb\"></div>
                                            <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/3.jpg')}}\" alt=\"product image thumb\"></div>
                                            <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/4.jpg')}}\" alt=\"product image thumb\"></div>
                                            <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/5.jpg')}}\" alt=\"product image thumb\"></div>
                                            <div class=\"sm-image\"><img src=\"{{asset('images/product/small-size/6.jpg')}}\" alt=\"product image thumb\"></div>
                                        </div>
                                    </div>
                                    <!--// Product Details Left -->
                                </div>

                                <div class=\"col-lg-7 col-md-6 col-sm-6\">
                                    <div class=\"product-details-view-content pt-60\">
                                        <div class=\"product-info\">
                                            <h2>Today is a good day Framed poster</h2>
                                            <span class=\"product-details-ref\">Reference: demo_15</span>
                                            <div class=\"rating-box pt-20\">
                                                <ul class=\"rating rating-with-review-item\">
                                                    <li><i class=\"fa fa-star-o\"></i></li>
                                                    <li><i class=\"fa fa-star-o\"></i></li>
                                                    <li><i class=\"fa fa-star-o\"></i></li>
                                                    <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                    <li class=\"no-star\"><i class=\"fa fa-star-o\"></i></li>
                                                    <li class=\"review-item\"><a href=\"#\">Read Review</a></li>
                                                    <li class=\"review-item\"><a href=\"#\">Write Review</a></li>
                                                </ul>
                                            </div>
                                            <div class=\"price-box pt-20\">
                                                <span class=\"new-price new-price-2\">\$57.98</span>
                                            </div>
                                            <div class=\"product-desc\">
                                                <p>
                                                    <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                                    </span>
                                                </p>
                                            </div>
                                            <div class=\"product-variants\">
                                                <div class=\"produt-variants-size\">
                                                    <label>Dimension</label>
                                                    <select class=\"nice-select\">
                                                        <option value=\"1\" title=\"S\" selected=\"selected\">40x60cm</option>
                                                        <option value=\"2\" title=\"M\">60x90cm</option>
                                                        <option value=\"3\" title=\"L\">80x120cm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"single-add-to-cart\">
                                                <form action=\"#\" class=\"cart-quantity\">
                                                    <div class=\"quantity\">
                                                        <label>Quantity</label>
                                                        <div class=\"cart-plus-minus\">
                                                            <input class=\"cart-plus-minus-box\" value=\"1\" type=\"text\">
                                                            <div class=\"dec qtybutton\"><i class=\"fa fa-angle-down\"></i></div>
                                                            <div class=\"inc qtybutton\"><i class=\"fa fa-angle-up\"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class=\"add-to-cart\" type=\"submit\">Add to cart</button>
                                                </form>
                                            </div>
                                            <div class=\"product-additional-info pt-25\">
                                                <a class=\"wishlist-btn\" href=\"wishlist.html\"><i class=\"fa fa-heart-o\"></i>Add to wishlist</a>
                                                <div class=\"product-social-sharing pt-25\">
                                                    <ul>
                                                        <li class=\"facebook\"><a href=\"#\"><i class=\"fa fa-facebook\"></i>Facebook</a></li>
                                                        <li class=\"twitter\"><a href=\"#\"><i class=\"fa fa-twitter\"></i>Twitter</a></li>
                                                        <li class=\"google-plus\"><a href=\"#\"><i class=\"fa fa-google-plus\"></i>Google +</a></li>
                                                        <li class=\"instagram\"><a href=\"#\"><i class=\"fa fa-instagram\"></i>Instagram</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        {% endblock %}
        {% block javascripts %}
        <script src=\"{{asset('js/vendor/jquery-1.12.4.min.js')}}\"></script>
        <!-- Popper js -->
        <script src=\"{{asset('js/vendor/popper.min.js')}}\"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
        <!-- Ajax Mail js -->
        <script src=\"{{asset('js/ajax-mail.js')}}\"></script>
        <!-- Meanmenu js -->
        <script src=\"{{asset('js/jquery.meanmenu.min.js')}}\"></script>
        <!-- Wow.min js -->
        <script src=\"{{asset('js/wow.min.js')}}\"></script>
        <!-- Slick Carousel js -->
        <script src=\"{{asset('js/slick.min.js')}}\"></script>
        <!-- Owl Carousel-2 js -->
        <script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
        <!-- Magnific popup js -->
        <script src=\"{{asset('js/jquery.magnific-popup.min.js')}}\"></script>
        <!-- Isotope js -->
        <script src=\"{{asset('js/isotope.pkgd.min.js')}}\"></script>
        <!-- Imagesloaded js -->
        <script src=\"{{asset('js/imagesloaded.pkgd.min.js')}}\"></script>
        <!-- Mixitup js -->
        <script src=\"{{asset('js/jquery.mixitup.min.js')}}\"></script>
        <!-- Countdown -->
        <script src=\"{{asset('js/jquery.countdown.min.js')}}\"></script>
        <!-- Counterup -->
        <script src=\"{{asset('js/jquery.counterup.min.js')}}\"></script>
        <!-- Waypoints -->
        <script src=\"{{asset('js/waypoints.min.js')}}\"></script>
        <!-- Barrating -->
        <script src=\"{{asset('js/jquery.barrating.min.js')}}\"></script>
        <!-- Jquery-ui -->
        <script src=\"{{asset('js/jquery-ui.min.js')}}\"></script>
        <!-- Venobox -->
        <script src=\"{{asset('js/venobox.min.js')}}\"></script>
        <!-- Nice Select js -->
        <script src=\"{{asset('js/jquery.nice-select.min.js')}}\"></script>
        <!-- ScrollUp js -->
        <script src=\"{{asset('js/scrollUp.min.js')}}\"></script>
        <!-- Main/Activator js -->
        <script src=\"{{asset('js/main.js')}}\"></script>
        {% endblock %}
    </body>

<!-- index-431:47-->
</html>
", "front/index.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/front/index.html.twig");
    }
}
