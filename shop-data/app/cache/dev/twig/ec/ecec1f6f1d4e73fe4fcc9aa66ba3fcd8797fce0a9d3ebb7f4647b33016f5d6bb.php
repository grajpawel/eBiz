<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e97c9ab7599f58b3cdec7b2e8140ad651c1b1826cbce91f49e235038b1ec43ff extends Twig_Template
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
        $__internal_d6f8e9962f1efee8df298064f3f37d8e26d139eb4f23bb537f39768e959f356e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f8e9962f1efee8df298064f3f37d8e26d139eb4f23bb537f39768e959f356e->enter($__internal_d6f8e9962f1efee8df298064f3f37d8e26d139eb4f23bb537f39768e959f356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6f8e9962f1efee8df298064f3f37d8e26d139eb4f23bb537f39768e959f356e->leave($__internal_d6f8e9962f1efee8df298064f3f37d8e26d139eb4f23bb537f39768e959f356e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b505930dbc2a7bbf5a800766ee9c87dde67178a942e2cfdd69ef108ac3e500f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b505930dbc2a7bbf5a800766ee9c87dde67178a942e2cfdd69ef108ac3e500f->enter($__internal_9b505930dbc2a7bbf5a800766ee9c87dde67178a942e2cfdd69ef108ac3e500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b505930dbc2a7bbf5a800766ee9c87dde67178a942e2cfdd69ef108ac3e500f->leave($__internal_9b505930dbc2a7bbf5a800766ee9c87dde67178a942e2cfdd69ef108ac3e500f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c789f78c8f65161b7dd0e966b865b2005c65e4c5be8132439207afbf7937e37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c789f78c8f65161b7dd0e966b865b2005c65e4c5be8132439207afbf7937e37d->enter($__internal_c789f78c8f65161b7dd0e966b865b2005c65e4c5be8132439207afbf7937e37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c789f78c8f65161b7dd0e966b865b2005c65e4c5be8132439207afbf7937e37d->leave($__internal_c789f78c8f65161b7dd0e966b865b2005c65e4c5be8132439207afbf7937e37d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75eb1c7614f346b7876cadc4682561bcd07e08c6d06573792197a95cf624a072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75eb1c7614f346b7876cadc4682561bcd07e08c6d06573792197a95cf624a072->enter($__internal_75eb1c7614f346b7876cadc4682561bcd07e08c6d06573792197a95cf624a072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_75eb1c7614f346b7876cadc4682561bcd07e08c6d06573792197a95cf624a072->leave($__internal_75eb1c7614f346b7876cadc4682561bcd07e08c6d06573792197a95cf624a072_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
