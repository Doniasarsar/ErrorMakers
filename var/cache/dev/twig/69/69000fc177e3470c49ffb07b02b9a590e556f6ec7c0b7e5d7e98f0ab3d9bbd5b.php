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

/* commande/aj.html.twig */
class __TwigTemplate_f1b2480412ef624b86915e9280b0b60ab3e7721f23ecc2c8ccb61296df53fc3c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/aj.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/aj.html.twig"));

        $this->parent = $this->loadTemplate("header-footer.html.twig", "commande/aj.html.twig", 1);
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
        echo "<!--Checkout Area Strat-->
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
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 55, $this->source); })()), 'form_start');
        echo "

                        <h3>Billing Details</h3>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>First Name <span class=\"required\">*</span></label>
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 62, $this->source); })()), "nomClient", [], "any", false, false, false, 62), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["uti"]) || array_key_exists("uti", $context) ? $context["uti"] : (function () { throw new RuntimeError('Variable "uti" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), "readonly" => true]]);
        echo " 
                                    

                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Last Name <span class=\"required\">*</span></label>
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 70, $this->source); })()), "prenomClient", [], "any", false, false, false, 70), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["uti"]) || array_key_exists("uti", $context) ? $context["uti"] : (function () { throw new RuntimeError('Variable "uti" does not exist.', 70, $this->source); })()), "prenom", [], "any", false, false, false, 70), "readonly" => true]]);
        echo " 

                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Adress<span class=\"required\">*</span></label>
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 77, $this->source); })()), "adresse", [], "any", false, false, false, 77), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Post Code <span class=\"required\">*</span></label>
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 83, $this->source); })()), "postcode", [], "any", false, false, false, 83), 'widget');
        echo "
                                </div>
                            </div>
                             <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Phone  <span class=\"required\">*</span></label>
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 89, $this->source); })()), "phone", [], "any", false, false, false, 89), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Montant <span class=\"required\">*</span></label>
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 95, $this->source); })()), "montant", [], "any", false, false, false, 95), 'widget', ["attr" => ["value" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 95, $this->source); })()), "readonly" => true]]);
        echo " 
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Date Commande <span class=\"required\">*</span></label>
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 101, $this->source); })()), "dateCommande", [], "any", false, false, false, 101), 'widget');
        echo "
                                </div>
                            </div>  
                            <div class=\"col-md-12\">
                                <div class=\"country-select clearfix\">
                                   
                                    <label>Mode Paiement <span class=\"required\">*</span></label>
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 108, $this->source); })()), "modePaiemenet", [], "any", false, false, false, 108), 'widget');
        echo "
                                </div>
                            </div>
                            ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 111, $this->source); })()), 'form_end');
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
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 154, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 155
            echo "                                <tr class=\"cart_item\">
                                  <td class=\"cart-product-name\"> <strong class=\"product-quantity\">";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 156), "description", [], "any", false, false, false, 156), "html", null, true);
            echo " </strong></td>
                                  <td class=\"cart-product-total\"><span class=\"amount\">";
            // line 157
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 157) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 157), "prix", [], "any", false, false, false, 157)), "html", null, true);
            echo "\$</span></td>  
                                </tr>
                               
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
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
        // line 221
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
        return "commande/aj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 221,  272 => 161,  262 => 157,  258 => 156,  255 => 155,  251 => 154,  205 => 111,  199 => 108,  189 => 101,  180 => 95,  171 => 89,  162 => 83,  153 => 77,  143 => 70,  132 => 62,  122 => 55,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header-footer.html.twig' %}
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
                        {{ form_start(formA) }}

                        <h3>Billing Details</h3>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>First Name <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.nomClient, {attr: { value : uti.nom ,readonly:true }}) }} 
                                    

                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Last Name <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.prenomClient, {attr: { value : uti.prenom ,readonly:true }}) }} 

                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Adress<span class=\"required\">*</span></label>
                                    {{ form_widget(formA.adresse) }}
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Post Code <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.postcode) }}
                                </div>
                            </div>
                             <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Phone  <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.phone) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkout-form-list\">
                                    <label>Montant <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.montant, {attr: { value : total ,readonly:true }}) }} 
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"checkout-form-list\">
                                    <label>Date Commande <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.dateCommande) }}
                                </div>
                            </div>  
                            <div class=\"col-md-12\">
                                <div class=\"country-select clearfix\">
                                   
                                    <label>Mode Paiement <span class=\"required\">*</span></label>
                                    {{ form_widget(formA.modePaiemenet) }}
                                </div>
                            </div>
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
                                  <td class=\"cart-product-name\"> <strong class=\"product-quantity\">{{ element.produit.description }} </strong></td>
                                  <td class=\"cart-product-total\"><span class=\"amount\">{{ element.quantite * element.produit.prix }}\$</span></td>  
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
{% endblock %}
 

", "commande/aj.html.twig", "C:\\Users\\doghm\\Desktop\\PiDev\\ErrorMakers-3A45\\templates\\commande\\aj.html.twig");
    }
}
