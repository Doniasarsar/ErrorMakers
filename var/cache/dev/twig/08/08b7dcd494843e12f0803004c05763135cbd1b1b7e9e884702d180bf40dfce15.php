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

/* commande/ajouter.html.twig */
class __TwigTemplate_75418b6e2eb3c689305f0f823c2d6457ad1a2d4a5de06431be063b8769a06827 extends Template
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/ajouter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/ajouter.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "commande/ajouter.html.twig", 1);
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
<!--Checkout Area Strat-->
   <div class=\"checkout-area pt-60 pb-30\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"coupon-accordion\">
                    <!--Accordion Start-->
                    <h3>Returning customer? <span id=\"showlogin\">Click here to login</span></h3>
                    <div id=\"checkout-login\" class=\"coupon-content\">
                        <div class=\"coupon-info\">
                            <p class=\"coupon-text\">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                            <form action=\"#\">
                                <p class=\"form-row-first\">
                                    <label>Username or email <span class=\"required\">*</span></label>
                                    <input type=\"text\">
                                </p>
                                <p class=\"form-row-last\">
                                    <label>Password  <span class=\"required\">*</span></label>
                                    <input type=\"text\">
                                </p>
                                <p class=\"form-row\">
                                    <input value=\"Login\" type=\"submit\">
                                    <label>
                                        <input type=\"checkbox\">
                                         Remember me 
                                    </label>
                                </p>
                                <p class=\"lost-password\"><a href=\"#\">Lost your password?</a></p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                    <!--Accordion Start-->
                    <h3>Have a coupon? <span id=\"showcoupon\">Click here to enter your code</span></h3>
                    <div id=\"checkout_coupon\" class=\"coupon-checkout-content\">
                        <div class=\"coupon-info\">
                            <form action=\"#\">
                                <p class=\"checkout-coupon\">
                                    <input placeholder=\"Coupon code\" type=\"text\">
                                    <input value=\"Apply Coupon\" type=\"submit\">
                                </p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
              
                    <div class=\"checkbox-form\">
                        ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 56, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "


                        <h3>Billing Details</h3>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>First Name <span class=\"required\">*</span></label>
                                 ";
        // line 66
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 66, $this->source); })()), "nomClient", [], "any", false, false, false, 66), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "Nom", [], "any", false, false, false, 66)]]);
        echo " 
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 67, $this->source); })()), "nomClient", [], "any", false, false, false, 67), 'errors');
        echo " 

                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Last Name <span class=\"required\">*</span></label>
                                  ";
        // line 76
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 76, $this->source); })()), "prenomClient", [], "any", false, false, false, 76), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "Prenom", [], "any", false, false, false, 76)]]);
        echo "
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 77, $this->source); })()), "prenomClient", [], "any", false, false, false, 77), 'errors');
        echo "

                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Adress<span class=\"required\">*</span></label>
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 84, $this->source); })()), "adresse", [], "any", false, false, false, 84), 'widget');
        echo "
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 85, $this->source); })()), "adresse", [], "any", false, false, false, 85), 'errors');
        echo "

                                    
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Post Code <span class=\"required\">*</span></label>
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 93, $this->source); })()), "postcode", [], "any", false, false, false, 93), 'widget');
        echo "
                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 94, $this->source); })()), "postcode", [], "any", false, false, false, 94), 'errors');
        echo "

                                    
                                </div>
                            </div>
                             <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Phone  <span class=\"required\">*</span></label>
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 102, $this->source); })()), "phone", [], "any", false, false, false, 102), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "Telephone", [], "any", false, false, false, 102)]]);
        echo "
                                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 103, $this->source); })()), "phone", [], "any", false, false, false, 103), 'errors');
        echo "

                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Montant <span class=\"required\">*</span></label>
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 110, $this->source); })()), "montant", [], "any", false, false, false, 110), 'widget', ["attr" => ["value" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 110, $this->source); })()), "readonly" => true]]);
        echo " 
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 111, $this->source); })()), "montant", [], "any", false, false, false, 111), 'errors', ["attr" => ["value" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 111, $this->source); })()), "readonly" => true]]);
        echo " 

                                </div>
                            </div>
                           
                            <div class=\"col-md-12\">
                                <div class=\"country-select clearfix\">
                                   
                                    <label>Mode Paiement <span class=\"required\">*</span></label>
                                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 120, $this->source); })()), "modePaiemenet", [], "any", false, false, false, 120), 'widget');
        echo "
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 121, $this->source); })()), "modePaiemenet", [], "any", false, false, false, 121), 'errors');
        echo "

                                </div>
                            </div>
                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 125, $this->source); })()), "etatCommande", [], "any", false, false, false, 125), 'widget', ["value" => 0, "type" => "hidden"]);
        echo "

                            ";
        // line 127
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 127, $this->source); })()), 'form_end');
        echo "
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list create-acc\">
                                    <input id=\"cbox\" type=\"checkbox\">
                                    <label>Create an account?</label>
                                </div>
                                <div id=\"cbox-info\" class=\"checkout-form-list create-account\">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <label>Account password  <span class=\"required\">*</span></label>
                                    <input placeholder=\"password\" type=\"password\">
                                </div>
                            </div>
                        </div>
                        <div class=\"different-address\">
                            <div class=\"ship-different-title\">
                                <h3>
                                    <label>Ship to a different address?</label>
                                    <input id=\"ship-box\" type=\"checkbox\">
                                </h3>
                            </div>
                          
                            <div class=\"order-notes\">
                                <div class=\"checkout-form-list\">
                                    <label>Order Notes</label>
                                    <textarea id=\"checkout-mess\" cols=\"30\" rows=\"10\" placeholder=\"Notes about your order, e.g. special notes for delivery.\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
            <div class=\"col-lg-6 col-12\">
                <div class=\"your-order\">
                    <h3>Your order</h3>
                    <div class=\"your-order-table table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"cart-product-name\">Product</th>
                                    <th class=\"cart-product-total\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 171
            echo "                                <tr class=\"cart_item\">
                                  <td class=\"cart-product-name\"> <strong class=\"product-quantity\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 172), "descProduit", [], "any", false, false, false, 172), "html", null, true);
            echo " </strong></td>
                                  <td class=\"cart-product-total\"><span class=\"amount\">";
            // line 173
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 173) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 173), "prixProduit", [], "any", false, false, false, 173)), "html", null, true);
            echo "\$</span></td>  
                                </tr>
                               
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                            </tbody>
                            <tfoot>
                                
                                <tr class=\"order-total\">
                                    <th> Total</th>
                                    <td><strong><span class=\"amount\"></span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"payment-method\">
                        <div class=\"payment-accordion\">
                            <div id=\"accordion\">
                              <div class=\"card\">
                                <div class=\"card-header\" id=\"#payment-1\">
                                  <h5 class=\"panel-title\">
                                    <a class=\"\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                      Direct Bank Transfer.
                                    </a>
                                  </h5>
                                </div>
                                <div id=\"collapseOne\" class=\"collapse show\" data-parent=\"#accordion\">
                                  <div class=\"card-body\">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                  </div>
                                </div>
                              </div>
                              <div class=\"card\">
                                <div class=\"card-header\" id=\"#payment-2\">
                                  <h5 class=\"panel-title\">
                                    <a class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                      Cheque Payment
                                    </a>
                                  </h5>
                                </div>
                                <div id=\"collapseTwo\" class=\"collapse\" data-parent=\"#accordion\">
                                  <div class=\"card-body\">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                  </div>
                                </div>
                              </div>
                              <div class=\"card\">
                                <div class=\"card-header\" id=\"#payment-3\">
                                  <h5 class=\"panel-title\">
                                    <a class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                      PayPal
                                    </a>
                                  </h5>
                                </div>
                                <div id=\"collapseThree\" class=\"collapse\" data-parent=\"#accordion\">
                                  <div class=\"card-body\">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class=\"order-button-payment\">
                                <input value=\"Place order\" type=\"submit\">

                              ";
        // line 237
        echo "

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout Area End-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 237,  307 => 177,  297 => 173,  293 => 172,  290 => 171,  286 => 170,  240 => 127,  235 => 125,  228 => 121,  224 => 120,  212 => 111,  208 => 110,  198 => 103,  194 => 102,  183 => 94,  179 => 93,  168 => 85,  164 => 84,  154 => 77,  149 => 76,  139 => 67,  134 => 66,  123 => 56,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block body %}

<!--Checkout Area Strat-->
   <div class=\"checkout-area pt-60 pb-30\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"coupon-accordion\">
                    <!--Accordion Start-->
                    <h3>Returning customer? <span id=\"showlogin\">Click here to login</span></h3>
                    <div id=\"checkout-login\" class=\"coupon-content\">
                        <div class=\"coupon-info\">
                            <p class=\"coupon-text\">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                            <form action=\"#\">
                                <p class=\"form-row-first\">
                                    <label>Username or email <span class=\"required\">*</span></label>
                                    <input type=\"text\">
                                </p>
                                <p class=\"form-row-last\">
                                    <label>Password  <span class=\"required\">*</span></label>
                                    <input type=\"text\">
                                </p>
                                <p class=\"form-row\">
                                    <input value=\"Login\" type=\"submit\">
                                    <label>
                                        <input type=\"checkbox\">
                                         Remember me 
                                    </label>
                                </p>
                                <p class=\"lost-password\"><a href=\"#\">Lost your password?</a></p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                    <!--Accordion Start-->
                    <h3>Have a coupon? <span id=\"showcoupon\">Click here to enter your code</span></h3>
                    <div id=\"checkout_coupon\" class=\"coupon-checkout-content\">
                        <div class=\"coupon-info\">
                            <form action=\"#\">
                                <p class=\"checkout-coupon\">
                                    <input placeholder=\"Coupon code\" type=\"text\">
                                    <input value=\"Apply Coupon\" type=\"submit\">
                                </p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
              
                    <div class=\"checkbox-form\">
                        {{ form_start(formA,{'attr': {'novalidate': 'novalidate'}} ) }}


                        <h3>Billing Details</h3>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>First Name <span class=\"required\">*</span></label>
                                 {#   {{ form_widget(formA.nomClient, {attr: { value : uti.nom ,readonly:true }}) }} 
                                    {{ form_errors(formA.nomClient, {attr: { value : uti.nom ,readonly:true }}) }} #}
                                    {{ form_widget(formA.nomClient,{'attr':{\"value\":app.user.Nom }}) }} 
                                    {{ form_errors(formA.nomClient)}} 

                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Last Name <span class=\"required\">*</span></label>
                                  {#  {{ form_widget(formA.prenomClient, {attr: { value : uti.prenom ,readonly:true }}) }}
                                    {{ form_errors(formA.prenomClient, {attr: { value : uti.prenom ,readonly:true }}) }} #}
                                    {{ form_widget(formA.prenomClient,{'attr':{\"value\":app.user.Prenom }} ) }}
                                    {{ form_errors(formA.prenomClient) }}

                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Adress<span class=\"required\">*</span></label>
                                    {{ form_widget(formA.adresse) }}
                                    {{ form_errors(formA.adresse) }}

                                    
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Post Code <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.postcode) }}
                                    {{ form_errors(formA.postcode) }}

                                    
                                </div>
                            </div>
                             <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Phone  <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.phone ,{'attr':{\"value\":app.user.Telephone }}) }}
                                    {{ form_errors(formA.phone) }}

                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Montant <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.montant, {attr: { value : total ,readonly:true }}) }} 
                                    {{ form_errors(formA.montant, {attr: { value : total ,readonly:true }}) }} 

                                </div>
                            </div>
                           
                            <div class=\"col-md-12\">
                                <div class=\"country-select clearfix\">
                                   
                                    <label>Mode Paiement <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.modePaiemenet) }}
                                    {{ form_errors  (formA.modePaiemenet) }}

                                </div>
                            </div>
                            {{form_widget(formA.etatCommande , {'value':0 ,'type':'hidden'})}}

                            {{ form_end(formA) }}
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list create-acc\">
                                    <input id=\"cbox\" type=\"checkbox\">
                                    <label>Create an account?</label>
                                </div>
                                <div id=\"cbox-info\" class=\"checkout-form-list create-account\">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <label>Account password  <span class=\"required\">*</span></label>
                                    <input placeholder=\"password\" type=\"password\">
                                </div>
                            </div>
                        </div>
                        <div class=\"different-address\">
                            <div class=\"ship-different-title\">
                                <h3>
                                    <label>Ship to a different address?</label>
                                    <input id=\"ship-box\" type=\"checkbox\">
                                </h3>
                            </div>
                          
                            <div class=\"order-notes\">
                                <div class=\"checkout-form-list\">
                                    <label>Order Notes</label>
                                    <textarea id=\"checkout-mess\" cols=\"30\" rows=\"10\" placeholder=\"Notes about your order, e.g. special notes for delivery.\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
            <div class=\"col-lg-6 col-12\">
                <div class=\"your-order\">
                    <h3>Your order</h3>
                    <div class=\"your-order-table table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"cart-product-name\">Product</th>
                                    <th class=\"cart-product-total\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for element in elements %}
                                <tr class=\"cart_item\">
                                  <td class=\"cart-product-name\"> <strong class=\"product-quantity\">{{ element.produit.descProduit }} </strong></td>
                                  <td class=\"cart-product-total\"><span class=\"amount\">{{ element.quantite * element.produit.prixProduit }}\$</span></td>  
                                </tr>
                               
                                {% endfor %}
                            </tbody>
                            <tfoot>
                                
                                <tr class=\"order-total\">
                                    <th> Total</th>
                                    <td><strong><span class=\"amount\"></span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"payment-method\">
                        <div class=\"payment-accordion\">
                            <div id=\"accordion\">
                              <div class=\"card\">
                                <div class=\"card-header\" id=\"#payment-1\">
                                  <h5 class=\"panel-title\">
                                    <a class=\"\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                      Direct Bank Transfer.
                                    </a>
                                  </h5>
                                </div>
                                <div id=\"collapseOne\" class=\"collapse show\" data-parent=\"#accordion\">
                                  <div class=\"card-body\">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                  </div>
                                </div>
                              </div>
                              <div class=\"card\">
                                <div class=\"card-header\" id=\"#payment-2\">
                                  <h5 class=\"panel-title\">
                                    <a class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                      Cheque Payment
                                    </a>
                                  </h5>
                                </div>
                                <div id=\"collapseTwo\" class=\"collapse\" data-parent=\"#accordion\">
                                  <div class=\"card-body\">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                  </div>
                                </div>
                              </div>
                              <div class=\"card\">
                                <div class=\"card-header\" id=\"#payment-3\">
                                  <h5 class=\"panel-title\">
                                    <a class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                      PayPal
                                    </a>
                                  </h5>
                                </div>
                                <div id=\"collapseThree\" class=\"collapse\" data-parent=\"#accordion\">
                                  <div class=\"card-body\">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class=\"order-button-payment\">
                                <input value=\"Place order\" type=\"submit\">

                              {#  {{ form_widget(formA.Valider, {'attr': {'class': 'order-button-payment'}}) }}  #}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout Area End-->
{% endblock %}", "commande/ajouter.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/commande/ajouter.html.twig");
    }
}
