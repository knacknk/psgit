<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f768ea401657e213593928dcc1ecfa0f00649b706c97d879e23c792a0cbce512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54d348959bba27680a3e83f57b9e33f03bdba96822ed02c6ad909cba3529bc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d348959bba27680a3e83f57b9e33f03bdba96822ed02c6ad909cba3529bc9a->enter($__internal_54d348959bba27680a3e83f57b9e33f03bdba96822ed02c6ad909cba3529bc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d348959bba27680a3e83f57b9e33f03bdba96822ed02c6ad909cba3529bc9a->leave($__internal_54d348959bba27680a3e83f57b9e33f03bdba96822ed02c6ad909cba3529bc9a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b7532462469ea76e3bfde3a77465127a9e8a4ee8f9df95274d0fc92987ad1ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7532462469ea76e3bfde3a77465127a9e8a4ee8f9df95274d0fc92987ad1ff1->enter($__internal_b7532462469ea76e3bfde3a77465127a9e8a4ee8f9df95274d0fc92987ad1ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b7532462469ea76e3bfde3a77465127a9e8a4ee8f9df95274d0fc92987ad1ff1->leave($__internal_b7532462469ea76e3bfde3a77465127a9e8a4ee8f9df95274d0fc92987ad1ff1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77bbb8065eef53198431489181c943f0901ee10e5ab4dfe8aa3b00c36b34445c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bbb8065eef53198431489181c943f0901ee10e5ab4dfe8aa3b00c36b34445c->enter($__internal_77bbb8065eef53198431489181c943f0901ee10e5ab4dfe8aa3b00c36b34445c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77bbb8065eef53198431489181c943f0901ee10e5ab4dfe8aa3b00c36b34445c->leave($__internal_77bbb8065eef53198431489181c943f0901ee10e5ab4dfe8aa3b00c36b34445c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7694c28f725a8a0982aab274ee473bf59047558744def86447a22d49882ff512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7694c28f725a8a0982aab274ee473bf59047558744def86447a22d49882ff512->enter($__internal_7694c28f725a8a0982aab274ee473bf59047558744def86447a22d49882ff512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7694c28f725a8a0982aab274ee473bf59047558744def86447a22d49882ff512->leave($__internal_7694c28f725a8a0982aab274ee473bf59047558744def86447a22d49882ff512_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\psgit\\psgit\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
