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

/* reclamation/add.html.twig */
class __TwigTemplate_6acabd02c61ba0052bfc90dbaf097a2439d19ccb4ad0e7cd044673229c7bbd60 extends Template
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
        return "baseFront.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/add.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.twig", "reclamation/add.html.twig", 1);
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

        echo "<title>Reclamation</title> ";
        
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
        echo "    <!-- Begin Contact Main Page Area -->
    <div class=\"contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40\">
        <div class=\"container mb-60\">
            <div id=\"google-map\"></div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2\">
                    <div class=\"contact-page-side-content\">
                        <h3 class=\"contact-page-title\">Contact Us</h3>
                        <p class=\"contact-page-message mb-25\"></p>
                        <div class=\"single-contact-block\">
                            <h4><i class=\"fa fa-fax\"></i> Address</h4>
                            <p>1, 2 rue André Ampère - 2083 - Pôle Technologique - El Ghazala.</p>
                        </div>
                        <div class=\"single-contact-block\">
                            <h4><i class=\"fa fa-phone\"></i> Phone</h4>
                            <p>Mobile: (+216) 23 880 872</p>
                            <p>Hotline: 77 000 000</p>
                        </div>
                        <div class=\"single-contact-block last-child\">
                            <h4><i class=\"fa fa-envelope-o\"></i> Email</h4>
                            <p>protech@domain.tn</p>
                            <p>support@protech.tn</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 order-2 order-lg-1\">
                    <div class=\"contact-form-content pt-sm-55 pt-xs-55\">
                        <h3 class=\"contact-page-title\">Tell Us Your Message</h3>
                        <div class=\"contact-form\">
                                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), 'label', ["label" => "Your Name"]);
        echo "
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "mb-0"]]);
        echo "
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'label', ["label" => "Your Email"]);
        echo "
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget');
        echo "
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'errors');
        echo "
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 49, $this->source); })()), "date", [], "any", false, false, false, 49), 'label', ["label" => "Date"]);
        echo "
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 50, $this->source); })()), "date", [], "any", false, false, false, 50), 'widget');
        echo "
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 51, $this->source); })()), "date", [], "any", false, false, false, 51), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 54, $this->source); })()), "time", [], "any", false, false, false, 54), 'label', ["label" => "Time"]);
        echo "
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 55, $this->source); })()), "time", [], "any", false, false, false, 55), 'widget');
        echo "
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 56, $this->source); })()), "time", [], "any", false, false, false, 56), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"form-group mt-4\">
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 61, $this->source); })()), "type", [], "any", false, false, false, 61), 'label', ["label" => "Reclamation Type"]);
        echo "
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62), 'widget');
        echo "
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 63, $this->source); })()), "type", [], "any", false, false, false, 63), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 66, $this->source); })()), "idCommande", [], "any", false, false, false, 66), 'label', ["label" => "Command ID"]);
        echo "
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 67, $this->source); })()), "idCommande", [], "any", false, false, false, 67), 'widget');
        echo "
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 68, $this->source); })()), "idCommande", [], "any", false, false, false, 68), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 71, $this->source); })()), "subject", [], "any", false, false, false, 71), 'label', ["label" => "Reclamation Subject"]);
        echo "
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 72, $this->source); })()), "subject", [], "any", false, false, false, 72), 'widget');
        echo "
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 73, $this->source); })()), "subject", [], "any", false, false, false, 73), 'errors');
        echo "
                                </div>
                                <div class=\"form-group mb-30\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 76, $this->source); })()), "message", [], "any", false, false, false, 76), 'label', ["label" => "Your Message"]);
        echo "
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 77, $this->source); })()), "message", [], "any", false, false, false, 77), 'widget');
        echo "
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 78, $this->source); })()), "message", [], "any", false, false, false, 78), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 81, $this->source); })()), "Ajouter", [], "any", false, false, false, 81), 'row', ["label" => "Send"]);
        echo "
                                </div>

                                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <p class=\"form-messege\"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Main Page Area End Here -->

    <!-- Google Map -->
    <script src=\"https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE\"></script>

    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,
                scrollwheel: false,
                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.740610, -73.935242), // New York
                // How you would like to style the map.
                // This is where you would paste any style found on
                styles: [{
                    \"featureType\": \"water\",
                    \"elementType\": \"geometry\",
                    \"stylers\": [{
                        \"color\": \"#e9e9e9\"
                    },
                        {
                            \"lightness\": 17
                        }
                    ]
                },
                    {
                        \"featureType\": \"landscape\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#f5f5f5\"
                        },
                            {
                                \"lightness\": 20
                            }
                        ]
                    },
                    {
                        \"featureType\": \"road.highway\",
                        \"elementType\": \"geometry.fill\",
                        \"stylers\": [{
                            \"color\": \"#ffffff\"
                        },
                            {
                                \"lightness\": 17
                            }
                        ]
                    },
                    {
                        \"featureType\": \"road.highway\",
                        \"elementType\": \"geometry.stroke\",
                        \"stylers\": [{
                            \"color\": \"#ffffff\"
                        },
                            {
                                \"lightness\": 29
                            },
                            {
                                \"weight\": 0.2
                            }
                        ]
                    },
                    {
                        \"featureType\": \"road.arterial\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#ffffff\"
                        },
                            {
                                \"lightness\": 18
                            }
                        ]
                    },
                    {
                        \"featureType\": \"road.local\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#ffffff\"
                        },
                            {
                                \"lightness\": 16
                            }
                        ]
                    },
                    {
                        \"featureType\": \"poi\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#f5f5f5\"
                        },
                            {
                                \"lightness\": 21
                            }
                        ]
                    },
                    {
                        \"featureType\": \"poi.park\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#dedede\"
                        },
                            {
                                \"lightness\": 21
                            }
                        ]
                    },
                    {
                        \"elementType\": \"labels.text.stroke\",
                        \"stylers\": [{
                            \"visibility\": \"on\"
                        },
                            {
                                \"color\": \"#ffffff\"
                            },
                            {
                                \"lightness\": 16
                            }
                        ]
                    },
                    {
                        \"elementType\": \"labels.text.fill\",
                        \"stylers\": [{
                            \"saturation\": 36
                        },
                            {
                                \"color\": \"#333333\"
                            },
                            {
                                \"lightness\": 40
                            }
                        ]
                    },
                    {
                        \"elementType\": \"labels.icon\",
                        \"stylers\": [{
                            \"visibility\": \"off\"
                        }]
                    },
                    {
                        \"featureType\": \"transit\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#f2f2f2\"
                        },
                            {
                                \"lightness\": 19
                            }
                        ]
                    },
                    {
                        \"featureType\": \"administrative\",
                        \"elementType\": \"geometry.fill\",
                        \"stylers\": [{
                            \"color\": \"#fefefe\"
                        },
                            {
                                \"lightness\": 20
                            }
                        ]
                    },
                    {
                        \"featureType\": \"administrative\",
                        \"elementType\": \"geometry.stroke\",
                        \"stylers\": [{
                            \"color\": \"#fefefe\"
                        },
                            {
                                \"lightness\": 17
                            },
                            {
                                \"weight\": 1.2
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id=\"map\" seen below in the <body>
            var mapElement = document.getElementById('google-map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.740610, -73.935242),
                map: map,
                title: 'Limupa',
                animation: google.maps.Animation.BOUNCE
            });
        }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 84,  242 => 81,  236 => 78,  232 => 77,  228 => 76,  222 => 73,  218 => 72,  214 => 71,  208 => 68,  204 => 67,  200 => 66,  194 => 63,  190 => 62,  186 => 61,  178 => 56,  174 => 55,  170 => 54,  164 => 51,  160 => 50,  156 => 49,  148 => 44,  144 => 43,  140 => 42,  134 => 39,  130 => 38,  126 => 37,  121 => 35,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.twig'%}
{% block title %}<title>Reclamation</title> {% endblock %}
{% block body %}
    <!-- Begin Contact Main Page Area -->
    <div class=\"contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40\">
        <div class=\"container mb-60\">
            <div id=\"google-map\"></div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2\">
                    <div class=\"contact-page-side-content\">
                        <h3 class=\"contact-page-title\">Contact Us</h3>
                        <p class=\"contact-page-message mb-25\"></p>
                        <div class=\"single-contact-block\">
                            <h4><i class=\"fa fa-fax\"></i> Address</h4>
                            <p>1, 2 rue André Ampère - 2083 - Pôle Technologique - El Ghazala.</p>
                        </div>
                        <div class=\"single-contact-block\">
                            <h4><i class=\"fa fa-phone\"></i> Phone</h4>
                            <p>Mobile: (+216) 23 880 872</p>
                            <p>Hotline: 77 000 000</p>
                        </div>
                        <div class=\"single-contact-block last-child\">
                            <h4><i class=\"fa fa-envelope-o\"></i> Email</h4>
                            <p>protech@domain.tn</p>
                            <p>support@protech.tn</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 order-2 order-lg-1\">
                    <div class=\"contact-form-content pt-sm-55 pt-xs-55\">
                        <h3 class=\"contact-page-title\">Tell Us Your Message</h3>
                        <div class=\"contact-form\">
                                {{ form_start(formA,{'attr': {'novalidate': 'novalidate'}} ) }}
                                <div class=\"form-group\">
                                    {{ form_label(formA.name,\"Your Name\") }}
                                    {{ form_widget(formA.name,{'attr':{\"class\":\"mb-0\"}}) }}
                                    {{ form_errors(formA.name,{'attr':{\"class\":\"mb-0\"}}) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formA.email,\"Your Email\") }}
                                    {{ form_widget(formA.email)}}
                                    {{ form_errors(formA.email) }}
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        {{ form_label(formA.date,\"Date\") }}
                                        {{ form_widget(formA.date)}}
                                        {{ form_errors(formA.date) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                        {{ form_label(formA.time,\"Time\") }}
                                        {{ form_widget(formA.time)}}
                                        {{ form_errors(formA.time) }}
                                    </div>
                                </div>

                                <div class=\"form-group mt-4\">
                                    {{ form_label(formA.type,\"Reclamation Type\") }}
                                    {{ form_widget(formA.type)}}
                                    {{ form_errors(formA.type) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formA.idCommande,\"Command ID\") }}
                                    {{ form_widget(formA.idCommande)}}
                                    {{ form_errors(formA.idCommande) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(formA.subject,\"Reclamation Subject\") }}
                                    {{ form_widget(formA.subject) }}
                                    {{ form_errors(formA.subject) }}
                                </div>
                                <div class=\"form-group mb-30\">
                                    {{ form_label(formA.message,\"Your Message\") }}
                                    {{ form_widget(formA.message) }}
                                    {{ form_errors(formA.message) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_row(formA.Ajouter, {'label': 'Send'}) }}
                                </div>

                                {{ form_end(formA) }}
                        </div>
                        <p class=\"form-messege\"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Main Page Area End Here -->

    <!-- Google Map -->
    <script src=\"https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE\"></script>

    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,
                scrollwheel: false,
                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.740610, -73.935242), // New York
                // How you would like to style the map.
                // This is where you would paste any style found on
                styles: [{
                    \"featureType\": \"water\",
                    \"elementType\": \"geometry\",
                    \"stylers\": [{
                        \"color\": \"#e9e9e9\"
                    },
                        {
                            \"lightness\": 17
                        }
                    ]
                },
                    {
                        \"featureType\": \"landscape\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#f5f5f5\"
                        },
                            {
                                \"lightness\": 20
                            }
                        ]
                    },
                    {
                        \"featureType\": \"road.highway\",
                        \"elementType\": \"geometry.fill\",
                        \"stylers\": [{
                            \"color\": \"#ffffff\"
                        },
                            {
                                \"lightness\": 17
                            }
                        ]
                    },
                    {
                        \"featureType\": \"road.highway\",
                        \"elementType\": \"geometry.stroke\",
                        \"stylers\": [{
                            \"color\": \"#ffffff\"
                        },
                            {
                                \"lightness\": 29
                            },
                            {
                                \"weight\": 0.2
                            }
                        ]
                    },
                    {
                        \"featureType\": \"road.arterial\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#ffffff\"
                        },
                            {
                                \"lightness\": 18
                            }
                        ]
                    },
                    {
                        \"featureType\": \"road.local\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#ffffff\"
                        },
                            {
                                \"lightness\": 16
                            }
                        ]
                    },
                    {
                        \"featureType\": \"poi\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#f5f5f5\"
                        },
                            {
                                \"lightness\": 21
                            }
                        ]
                    },
                    {
                        \"featureType\": \"poi.park\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#dedede\"
                        },
                            {
                                \"lightness\": 21
                            }
                        ]
                    },
                    {
                        \"elementType\": \"labels.text.stroke\",
                        \"stylers\": [{
                            \"visibility\": \"on\"
                        },
                            {
                                \"color\": \"#ffffff\"
                            },
                            {
                                \"lightness\": 16
                            }
                        ]
                    },
                    {
                        \"elementType\": \"labels.text.fill\",
                        \"stylers\": [{
                            \"saturation\": 36
                        },
                            {
                                \"color\": \"#333333\"
                            },
                            {
                                \"lightness\": 40
                            }
                        ]
                    },
                    {
                        \"elementType\": \"labels.icon\",
                        \"stylers\": [{
                            \"visibility\": \"off\"
                        }]
                    },
                    {
                        \"featureType\": \"transit\",
                        \"elementType\": \"geometry\",
                        \"stylers\": [{
                            \"color\": \"#f2f2f2\"
                        },
                            {
                                \"lightness\": 19
                            }
                        ]
                    },
                    {
                        \"featureType\": \"administrative\",
                        \"elementType\": \"geometry.fill\",
                        \"stylers\": [{
                            \"color\": \"#fefefe\"
                        },
                            {
                                \"lightness\": 20
                            }
                        ]
                    },
                    {
                        \"featureType\": \"administrative\",
                        \"elementType\": \"geometry.stroke\",
                        \"stylers\": [{
                            \"color\": \"#fefefe\"
                        },
                            {
                                \"lightness\": 17
                            },
                            {
                                \"weight\": 1.2
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id=\"map\" seen below in the <body>
            var mapElement = document.getElementById('google-map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.740610, -73.935242),
                map: map,
                title: 'Limupa',
                animation: google.maps.Animation.BOUNCE
            });
        }
{% endblock %}", "reclamation/add.html.twig", "C:\\Users\\mariem\\Documents\\piDEV\\ErrorMakers-3A45\\templates\\reclamation\\add.html.twig");
    }
}
