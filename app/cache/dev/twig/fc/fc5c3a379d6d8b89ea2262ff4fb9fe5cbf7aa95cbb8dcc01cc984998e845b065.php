<?php

/* PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig */
class __TwigTemplate_e9e4c97af7da5bc7bdac9da25b4ee47d5103a793bc7b8a1d031844babeb16658 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0baac75d205bf71c5f4f378b5735f2ecf5d9678dc4db358642dcebd7318fb1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0baac75d205bf71c5f4f378b5735f2ecf5d9678dc4db358642dcebd7318fb1f9->enter($__internal_0baac75d205bf71c5f4f378b5735f2ecf5d9678dc4db358642dcebd7318fb1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, ($context["suppliers"] ?? $this->getContext($context, "suppliers"))) > 0)) {
            // line 26
            echo "  <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference(s)", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h4>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can specify product reference(s) for each associated supplier. Click \"Save\" after changing selected suppliers to display the associated product references.", array(), "Admin.Catalog.Help");
            echo "
        </p>
      </div>
    </div>
  </div>
";
        }
        // line 37
        echo "
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? $this->getContext($context, "suppliers")));
        foreach ($context['_seq'] as $context["_key"] => $context["supplierId"]) {
            // line 39
            echo "  ";
            $context["collectionName"] = ("supplier_combination_" . $context["supplierId"]);
            // line 40
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><strong>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["collectionName"] ?? $this->getContext($context, "collectionName")), array(), "array"), "vars", array()), "label", array()), "html", null, true);
            echo "</strong></div>
    <div class=\"panel-body\" id=\"supplier_combination_";
            // line 42
            echo twig_escape_filter($this->env, $context["supplierId"], "html", null, true);
            echo "\">
      <div>
        ";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["collectionName"] ?? $this->getContext($context, "collectionName")), array(), "array"), 'errors');
            echo "
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr >
              <th width=\"30%\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product name", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"30%\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"20%\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"20%\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", array(), "Admin.Global"), "html", null, true);
            echo "</th>
            </tr>
          </thead>
          <tbody>
          ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["collectionName"] ?? $this->getContext($context, "collectionName")), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["supplier_combination"]) {
                // line 56
                echo "            <tr>
              <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supplier_combination"], "vars", array()), "value", array()), "label", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 58
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "supplier_reference", array()), 'widget');
                echo "</td>
              <td>";
                // line 59
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "product_price", array()), 'widget');
                echo "</td>
              <td>
                ";
                // line 61
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "product_price_currency", array()), 'widget');
                echo "
                ";
                // line 62
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "id_product_attribute", array()), 'widget');
                echo "
                ";
                // line 63
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "supplier_id", array()), 'widget');
                echo "
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier_combination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplierId'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0baac75d205bf71c5f4f378b5735f2ecf5d9678dc4db358642dcebd7318fb1f9->leave($__internal_0baac75d205bf71c5f4f378b5735f2ecf5d9678dc4db358642dcebd7318fb1f9_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 67,  118 => 63,  114 => 62,  110 => 61,  105 => 59,  101 => 58,  97 => 57,  94 => 56,  90 => 55,  83 => 51,  79 => 50,  75 => 49,  71 => 48,  64 => 44,  59 => 42,  55 => 41,  52 => 40,  49 => 39,  45 => 38,  42 => 37,  33 => 31,  24 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% if suppliers|length > 0 %}
  <h4>{{ 'Supplier reference(s)'|trans({}, 'Admin.Catalog.Feature') }}</h4>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          {{ 'You can specify product reference(s) for each associated supplier. Click \"Save\" after changing selected suppliers to display the associated product references.'|trans({}, 'Admin.Catalog.Help')|raw }}
        </p>
      </div>
    </div>
  </div>
{% endif %}

{% for supplierId in suppliers %}
  {% set collectionName = 'supplier_combination_' ~ supplierId %}
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><strong>{{ form[collectionName].vars.label }}</strong></div>
    <div class=\"panel-body\" id=\"supplier_combination_{{ supplierId }}\">
      <div>
        {{ form_errors(form[collectionName]) }}
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr >
              <th width=\"30%\">{{ 'Product name'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=\"30%\">{{ 'Supplier reference'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=\"20%\">{{ 'Price (tax excl.)'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=\"20%\">{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
            </tr>
          </thead>
          <tbody>
          {% for supplier_combination in form[collectionName] %}
            <tr>
              <td>{{ supplier_combination.vars.value.label }}</td>
              <td>{{ form_widget(supplier_combination.supplier_reference) }}</td>
              <td>{{ form_widget(supplier_combination.product_price) }}</td>
              <td>
                {{ form_widget(supplier_combination.product_price_currency) }}
                {{ form_widget(supplier_combination.id_product_attribute) }}
                {{ form_widget(supplier_combination.supplier_id) }}
              </td>
            </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endfor %}
", "PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig", "C:\\xampp\\htdocs\\psgit\\psgit\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form-supplier-combination.html.twig");
    }
}
