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

/* cart/index.html.twig */
class __TwigTemplate_1a703a99c0c9361aeaf7e3dbbc7244b9591cf595a5e07188dd3bcf9b20db8152 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("header-footer.html.twig", "cart/index.html.twig", 1);
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
 <!-- Begin Li's Breadcrumb Area -->
 <div class=\"breadcrumb-area\">
    <div class=\"container\">
        <div class=\"breadcrumb-content\">
            <ul>
                <li><a href=\"index.html\">Home</a></li>
                <li class=\"active\">Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class=\"Shopping-cart-area pt-60 pb-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <form action=\"#\">
                    <div class=\"table-content table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"li-product-remove\">remove</th>
                                    <th class=\"li-product-thumbnail\">images</th>
                                    <th class=\"cart-product-name\">Product</th>
                                    <th class=\"li-product-price\">Unit Price</th>
                                    <th class=\"li-product-quantity\">Quantity</th>
                                    <th class=\"li-product-subtotal\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 37
            echo "                                <tr>
                                    <td class=\"li-product-remove\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i></a></td>
                                    <td class=\"li-product-thumbnail\"><a href=\"#\"><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/small-size/5.jpg"), "html", null, true);
            echo "\" alt=\"Li's Product Image\"></a></td>
                                    <td class=\"li-product-name\"><a href=\"#\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 40), "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></td>
                                    <td class=\"li-product-price\"><span class=\"amount\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 41), "prix", [], "any", false, false, false, 41), "html", null, true);
            echo "\$</span></td>
                                    <td class=\"quantity\">
                                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"fa fa-angle-down\" style=\"font-size:28px\"></i></a>
                                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"><i class=\"fa fa-angle-up\" style=\"font-size:28px\"></i></a>
                                        <div>
                                            
                                            <span >";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 47), "html", null, true);
            echo "</span>
                                        
                                            </div>
                                           
                                        </div>
                                    </td>
                                    <td class=\"product-subtotal\"><span class=\"amount\">";
            // line 53
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 53) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 53), "prix", [], "any", false, false, false, 53)), "html", null, true);
            echo "\$</span></td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                                <td colspan=\"5\" class=\"text-center\">Votre Panier est vide</td>
                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"coupon-all\">
                                <div class=\"coupon\">
                                    <input id=\"coupon_code\" class=\"input-text\" name=\"coupon_code\" value=\"\" placeholder=\"Coupon code\" type=\"text\">
                                    <input class=\"button\" name=\"apply_coupon\" value=\"Apply coupon\" type=\"submit\">
                                </div>
                                <div class=\"coupon2\">
                                    <div class=\"cart-page-total\"> 
                                        <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_deleteall");
        echo "\">Vider le panier</a>
                                    </div>                             
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-5 ml-auto\">
                            <div class=\"cart-page-total\">
                                <h2>Cart totals</h2>
                                
                                <ul>
                                   
                                    <li>";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "\$ <span></span></li>
                                </ul>
                                <a href=\"#\">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Shopping Cart Area End-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 83,  175 => 70,  161 => 58,  154 => 56,  146 => 53,  137 => 47,  131 => 44,  127 => 43,  122 => 41,  118 => 40,  114 => 39,  110 => 38,  107 => 37,  102 => 36,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"header-footer.html.twig\" %}

{% block body %}

 <!-- Begin Li's Breadcrumb Area -->
 <div class=\"breadcrumb-area\">
    <div class=\"container\">
        <div class=\"breadcrumb-content\">
            <ul>
                <li><a href=\"index.html\">Home</a></li>
                <li class=\"active\">Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class=\"Shopping-cart-area pt-60 pb-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <form action=\"#\">
                    <div class=\"table-content table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"li-product-remove\">remove</th>
                                    <th class=\"li-product-thumbnail\">images</th>
                                    <th class=\"cart-product-name\">Product</th>
                                    <th class=\"li-product-price\">Unit Price</th>
                                    <th class=\"li-product-quantity\">Quantity</th>
                                    <th class=\"li-product-subtotal\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for element in elements %}
                                <tr>
                                    <td class=\"li-product-remove\"><a href=\"{{path(\"cart_delete\",{id: element.produit.id})}}\"><i class=\"fa fa-times\"></i></a></td>
                                    <td class=\"li-product-thumbnail\"><a href=\"#\"><img src=\"{{asset('images/product/small-size/5.jpg')}}\" alt=\"Li's Product Image\"></a></td>
                                    <td class=\"li-product-name\"><a href=\"#\">{{ element.produit.description}}</a></td>
                                    <td class=\"li-product-price\"><span class=\"amount\">{{ element.produit.prix}}\$</span></td>
                                    <td class=\"quantity\">
                                        <a href=\"{{path(\"cart_remove\",{id: element.produit.id})}}\"><i class=\"fa fa-angle-down\" style=\"font-size:28px\"></i></a>
                                        <a href=\"{{path(\"cart_add\",{id: element.produit.id})}}\"><i class=\"fa fa-angle-up\" style=\"font-size:28px\"></i></a>
                                        <div>
                                            
                                            <span >{{ element.quantite}}</span>
                                        
                                            </div>
                                           
                                        </div>
                                    </td>
                                    <td class=\"product-subtotal\"><span class=\"amount\">{{ element.quantite * element.produit.prix }}\$</span></td>
                                </tr>
                                {% else %}
                                <td colspan=\"5\" class=\"text-center\">Votre Panier est vide</td>
                               {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"coupon-all\">
                                <div class=\"coupon\">
                                    <input id=\"coupon_code\" class=\"input-text\" name=\"coupon_code\" value=\"\" placeholder=\"Coupon code\" type=\"text\">
                                    <input class=\"button\" name=\"apply_coupon\" value=\"Apply coupon\" type=\"submit\">
                                </div>
                                <div class=\"coupon2\">
                                    <div class=\"cart-page-total\"> 
                                        <a href=\"{{path(\"cart_deleteall\")}}\">Vider le panier</a>
                                    </div>                             
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-5 ml-auto\">
                            <div class=\"cart-page-total\">
                                <h2>Cart totals</h2>
                                
                                <ul>
                                   
                                    <li>{{ total }}\$ <span></span></li>
                                </ul>
                                <a href=\"#\">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Shopping Cart Area End-->
{% endblock %}", "cart/index.html.twig", "C:\\Users\\doghm\\Desktop\\PiDev\\ErrorMakers-3A45\\templates\\cart\\index.html.twig");
    }
}
