<?php

/* PrestaShopBundle:Admin/Product:form_combinations_bulk.html.twig */
class __TwigTemplate_4d11284d0530bc42bf20896a4864aff28f3430a828b9d1d1b8014c18adc17189 extends Twig_Template
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
        $__internal_c791182c34fd7fe3dcf018542343e7ac16b4a4ef354e2091e6eddc4446b74c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c791182c34fd7fe3dcf018542343e7ac16b4a4ef354e2091e6eddc4446b74c9c->enter($__internal_c791182c34fd7fe3dcf018542343e7ac16b4a4ef354e2091e6eddc4446b74c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product:form_combinations_bulk.html.twig"));

        // line 25
        echo "<div class=\"row\" id=\"bulk-combinations-container-fields\">
  ";
        // line 26
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 27
            echo "    <div class=\"col-lg-4 col-md-3 col-sm-6\">
      <label class=\"form-control-label\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
      ";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), 'errors');
            echo "
      ";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), 'widget');
            echo "
    </div>
  ";
        }
        // line 33
        echo "
  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cost_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cost_price", array()), 'errors');
        echo "
    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cost_price", array()), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_weight", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_weight", array()), 'errors');
        echo "
    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_weight", array()), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_te", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_te", array()), 'errors');
        echo "
    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_te", array()), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_ti", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_ti", array()), 'errors');
        echo "
    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_ti", array()), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_availability", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_availability", array()), 'errors');
        echo "
    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_availability", array()), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", array()), 'errors');
        echo "
    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", array()), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minimal_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minimal_quantity", array()), 'errors');
        echo "
    ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minimal_quantity", array()), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "low_stock_threshold", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\" data-content=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can increase or decrease low stock levels in bulk. You cannot disable them in bulk: you have to do it on a per-combination basis.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "\" ></span>
    </label>
    ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "low_stock_threshold", array()), 'errors');
        echo "
    ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "low_stock_threshold", array()), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6 widget-checkbox-inline\">
    <div class=\"widget-checkbox-inline\">
      ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "low_stock_alert", array()), 'errors');
        echo "
      ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "low_stock_alert", array()), 'widget');
        echo "
      <span class=\"help-box\" data-toggle=\"popover\" data-content=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to Advanced Parameters > Team", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "\" ></span>
    </div>
  </div>
</div>
<div class=\"row justify-content-end mt-3\">
    <button id=\"delete-combinations\" class=\"btn btn-outline-secondary mr-3\" data=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_attribute", array("idProduct" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
        echo "\">
      <i class=\"material-icons\">delete</i>
      ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </button>
    <button id=\"apply-on-combinations\" class=\"btn btn-outline-primary mr-3\">
      ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply", array(), "Admin.Actions"), "html", null, true);
        echo "
    </button>
  ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
</div>
";
        
        $__internal_c791182c34fd7fe3dcf018542343e7ac16b4a4ef354e2091e6eddc4446b74c9c->leave($__internal_c791182c34fd7fe3dcf018542343e7ac16b4a4ef354e2091e6eddc4446b74c9c_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product:form_combinations_bulk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 100,  201 => 98,  195 => 95,  190 => 93,  182 => 88,  178 => 87,  174 => 86,  166 => 81,  162 => 80,  157 => 78,  153 => 77,  146 => 73,  142 => 72,  138 => 71,  131 => 67,  127 => 66,  123 => 65,  116 => 61,  112 => 60,  108 => 59,  101 => 55,  97 => 54,  93 => 53,  86 => 49,  82 => 48,  78 => 47,  71 => 43,  67 => 42,  63 => 41,  56 => 37,  52 => 36,  48 => 35,  44 => 33,  38 => 30,  34 => 29,  30 => 28,  27 => 27,  25 => 26,  22 => 25,);
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
<div class=\"row\" id=\"bulk-combinations-container-fields\">
  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
    <div class=\"col-lg-4 col-md-3 col-sm-6\">
      <label class=\"form-control-label\">{{ form.quantity.vars.label }}</label>
      {{ form_errors(form.quantity) }}
      {{ form_widget(form.quantity) }}
    </div>
  {% endif %}

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.cost_price.vars.label }}</label>
    {{ form_errors(form.cost_price) }}
    {{ form_widget(form.cost_price) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.impact_on_weight.vars.label }}</label>
    {{ form_errors(form.impact_on_weight) }}
    {{ form_widget(form.impact_on_weight) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.impact_on_price_te.vars.label }}</label>
    {{ form_errors(form.impact_on_price_te) }}
    {{ form_widget(form.impact_on_price_te) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.impact_on_price_ti.vars.label }}</label>
    {{ form_errors(form.impact_on_price_ti) }}
    {{ form_widget(form.impact_on_price_ti) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.date_availability.vars.label }}</label>
    {{ form_errors(form.date_availability) }}
    {{ form_widget(form.date_availability) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.reference.vars.label }}</label>
    {{ form_errors(form.reference) }}
    {{ form_widget(form.reference) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.minimal_quantity.vars.label }}</label>
    {{ form_errors(form.minimal_quantity) }}
    {{ form_widget(form.minimal_quantity) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.low_stock_threshold.vars.label }}
      <span class=\"help-box\" data-toggle=\"popover\" data-content=\"{{ 'You can increase or decrease low stock levels in bulk. You cannot disable them in bulk: you have to do it on a per-combination basis.'|trans({}, 'Admin.Catalog.Feature') }}\" ></span>
    </label>
    {{ form_errors(form.low_stock_threshold) }}
    {{ form_widget(form.low_stock_threshold) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6 widget-checkbox-inline\">
    <div class=\"widget-checkbox-inline\">
      {{ form_errors(form.low_stock_alert) }}
      {{ form_widget(form.low_stock_alert) }}
      <span class=\"help-box\" data-toggle=\"popover\" data-content=\"{{ 'The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to Advanced Parameters > Team'|trans({}, 'Admin.Catalog.Feature') }}\" ></span>
    </div>
  </div>
</div>
<div class=\"row justify-content-end mt-3\">
    <button id=\"delete-combinations\" class=\"btn btn-outline-secondary mr-3\" data=\"{{ path('admin_delete_attribute', {'idProduct': id_product}) }}\">
      <i class=\"material-icons\">delete</i>
      {{ 'Delete combinations'|trans({}, 'Admin.Catalog.Feature') }}
    </button>
    <button id=\"apply-on-combinations\" class=\"btn btn-outline-primary mr-3\">
      {{ 'Apply'|trans({}, 'Admin.Actions') }}
    </button>
  {{ form_widget(form) }}
</div>
", "PrestaShopBundle:Admin/Product:form_combinations_bulk.html.twig", "C:\\xampp\\htdocs\\psgit\\psgit\\src\\PrestaShopBundle/Resources/views/Admin/Product/form_combinations_bulk.html.twig");
    }
}
