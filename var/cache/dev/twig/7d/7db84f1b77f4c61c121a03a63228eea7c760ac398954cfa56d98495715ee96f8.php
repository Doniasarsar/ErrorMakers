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

/* commande/index.html.twig */
class __TwigTemplate_6f0ac333103b7af13145c31c551ec569d650c99d8a5662d0ca04a3ec322f1ffa extends Template
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
        return "baseFrontr.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFrontr.html.twig", "commande/index.html.twig", 1);
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
                <form action=\"#\">
                    <div class=\"checkbox-form\">
                        <h3>Billing Details</h3>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>First Name <span class=\"required\">*</span></label>
                                    <input placeholder=\"\" type=\"text\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["uti"]) || array_key_exists("uti", $context) ? $context["uti"] : (function () { throw new RuntimeError('Variable "uti" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Last Name <span class=\"required\">*</span></label>
                                    <input placeholder=\"\" type=\"text\" value =";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["uti"]) || array_key_exists("uti", $context) ? $context["uti"] : (function () { throw new RuntimeError('Variable "uti" does not exist.', 68, $this->source); })()), "prenom", [], "any", false, false, false, 68), "html", null, true);
        echo ">
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Adress<span class=\"required\">*</span></label>
                                    <input placeholder=\"Street address\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Post Code <span class=\"required\">*</span></label>
                                    <input  type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Phone  <span class=\"required\">*</span></label>
                                    <input type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Montant <span class=\"required\">*</span></label>
                                    <input placeholder=\"\" type=\"text\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["totale"]) || array_key_exists("totale", $context) ? $context["totale"] : (function () { throw new RuntimeError('Variable "totale" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "\$\">
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Date Commande <span class=\"required\">*</span></label>
                                    <input placeholder=\"\" type=\"date\">
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"country-select clearfix\">
                                    <label>Mode Paiement <span class=\"required\">*</span></label>
                                    <select class=\"nice-select wide\">
                                      <option data-display=\"\">Par Carte</option>
                                      <option value=\"uk\">Par Cash</option>
                                    </select>
                                </div>
                            </div>
                           
                            
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
                            <div id=\"ship-box-info\" class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"country-select clearfix\">
                                        <label>Country <span class=\"required\">*</span></label>
                                        <select class=\"nice-select wide\">
                                          <option data-display=\"Bangladesh\">Bangladesh</option>
                                          <option value=\"uk\">London</option>
                                          <option value=\"rou\">Romania</option>
                                          <option value=\"fr\">French</option>
                                          <option value=\"de\">Germany</option>
                                          <option value=\"aus\">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>First Name <span class=\"required\">*</span></label>
                                        <input placeholder=\"\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Last Name <span class=\"required\">*</span></label>
                                        <input placeholder=\"\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Company Name</label>
                                        <input placeholder=\"\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Address <span class=\"required\">*</span></label>
                                        <input placeholder=\"Street address\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <input placeholder=\"Apartment, suite, unit etc. (optional)\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Town / City <span class=\"required\">*</span></label>
                                        <input type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>State / County <span class=\"required\">*</span></label>
                                        <input placeholder=\"\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Postcode / Zip <span class=\"required\">*</span></label>
                                        <input placeholder=\"\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Email Address <span class=\"required\">*</span></label>
                                        <input placeholder=\"\" type=\"email\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Phone  <span class=\"required\">*</span></label>
                                        <input type=\"text\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"order-notes\">
                                <div class=\"checkout-form-list\">
                                    <label>Order Notes</label>
                                    <textarea id=\"checkout-mess\" cols=\"30\" rows=\"10\" placeholder=\"Notes about your order, e.g. special notes for delivery.\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 227, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 228
            echo "                                <tr class=\"cart_item\">
                                  <td class=\"cart-product-name\"> ";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 229), "description", [], "any", false, false, false, 229), "html", null, true);
            echo "<strong class=\"product-quantity\"> × ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 229), "html", null, true);
            echo "</strong></td>
                                  <td class=\"cart-product-total\"><span class=\"amount\">";
            // line 230
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 230) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 230), "prix", [], "any", false, false, false, 230)), "html", null, true);
            echo "\$</span></td>  
                                </tr>
                               
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "                            </tbody>
                            <tfoot>
                                
                                <tr class=\"order-total\">
                                    <th> Total</th>
                                    <td><strong><span class=\"amount\">";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["totale"]) || array_key_exists("totale", $context) ? $context["totale"] : (function () { throw new RuntimeError('Variable "totale" does not exist.', 239, $this->source); })()), "html", null, true);
        echo " \$</span></strong></td>
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
        return "commande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 239,  325 => 234,  315 => 230,  309 => 229,  306 => 228,  302 => 227,  164 => 92,  137 => 68,  128 => 62,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFrontr.html.twig' %}

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
                <form action=\"#\">
                    <div class=\"checkbox-form\">
                        <h3>Billing Details</h3>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>First Name <span class=\"required\">*</span></label>
                                    <input placeholder=\"\" type=\"text\" value=\"{{ uti.nom }}\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Last Name <span class=\"required\">*</span></label>
                                    <input placeholder=\"\" type=\"text\" value ={{ uti.prenom }}>
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Adress<span class=\"required\">*</span></label>
                                    <input placeholder=\"Street address\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Post Code <span class=\"required\">*</span></label>
                                    <input  type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Phone  <span class=\"required\">*</span></label>
                                    <input type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Montant <span class=\"required\">*</span></label>
                                    <input placeholder=\"\" type=\"text\" value=\"{{totale}}\$\">
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Date Commande <span class=\"required\">*</span></label>
                                    <input placeholder=\"\" type=\"date\">
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"country-select clearfix\">
                                    <label>Mode Paiement <span class=\"required\">*</span></label>
                                    <select class=\"nice-select wide\">
                                      <option data-display=\"\">Par Carte</option>
                                      <option value=\"uk\">Par Cash</option>
                                    </select>
                                </div>
                            </div>
                           
                            
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
                            <div id=\"ship-box-info\" class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"country-select clearfix\">
                                        <label>Country <span class=\"required\">*</span></label>
                                        <select class=\"nice-select wide\">
                                          <option data-display=\"Bangladesh\">Bangladesh</option>
                                          <option value=\"uk\">London</option>
                                          <option value=\"rou\">Romania</option>
                                          <option value=\"fr\">French</option>
                                          <option value=\"de\">Germany</option>
                                          <option value=\"aus\">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>First Name <span class=\"required\">*</span></label>
                                        <input placeholder=\"\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Last Name <span class=\"required\">*</span></label>
                                        <input placeholder=\"\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Company Name</label>
                                        <input placeholder=\"\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Address <span class=\"required\">*</span></label>
                                        <input placeholder=\"Street address\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <input placeholder=\"Apartment, suite, unit etc. (optional)\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Town / City <span class=\"required\">*</span></label>
                                        <input type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>State / County <span class=\"required\">*</span></label>
                                        <input placeholder=\"\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Postcode / Zip <span class=\"required\">*</span></label>
                                        <input placeholder=\"\" type=\"text\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Email Address <span class=\"required\">*</span></label>
                                        <input placeholder=\"\" type=\"email\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"checkout-form-list\">
                                        <label>Phone  <span class=\"required\">*</span></label>
                                        <input type=\"text\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"order-notes\">
                                <div class=\"checkout-form-list\">
                                    <label>Order Notes</label>
                                    <textarea id=\"checkout-mess\" cols=\"30\" rows=\"10\" placeholder=\"Notes about your order, e.g. special notes for delivery.\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
                                {% for element in dataPanier %}
                                <tr class=\"cart_item\">
                                  <td class=\"cart-product-name\"> {{ element.produit.description }}<strong class=\"product-quantity\"> × {{ element.quantite}}</strong></td>
                                  <td class=\"cart-product-total\"><span class=\"amount\">{{ element.quantite * element.produit.prix }}\$</span></td>  
                                </tr>
                               
                                {% endfor %}
                            </tbody>
                            <tfoot>
                                
                                <tr class=\"order-total\">
                                    <th> Total</th>
                                    <td><strong><span class=\"amount\">{{ totale }} \$</span></strong></td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout Area End-->
{% endblock %}", "commande/index.html.twig", "/Users/skanderzouaoui/Documents/ErrorMakers-3A45/templates/commande/index.html.twig");
    }
}
