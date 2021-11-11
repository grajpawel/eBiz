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
        $__internal_e4c7d55bea3e3ff224233ac0a36f00258355b622f055765ff602dee36cb22733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c7d55bea3e3ff224233ac0a36f00258355b622f055765ff602dee36cb22733->enter($__internal_e4c7d55bea3e3ff224233ac0a36f00258355b622f055765ff602dee36cb22733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4c7d55bea3e3ff224233ac0a36f00258355b622f055765ff602dee36cb22733->leave($__internal_e4c7d55bea3e3ff224233ac0a36f00258355b622f055765ff602dee36cb22733_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ead08811377b28e202aa9ec2a50b16b7ed508fb0d9b516d38adb8733b364a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ead08811377b28e202aa9ec2a50b16b7ed508fb0d9b516d38adb8733b364a6d->enter($__internal_6ead08811377b28e202aa9ec2a50b16b7ed508fb0d9b516d38adb8733b364a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6ead08811377b28e202aa9ec2a50b16b7ed508fb0d9b516d38adb8733b364a6d->leave($__internal_6ead08811377b28e202aa9ec2a50b16b7ed508fb0d9b516d38adb8733b364a6d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f737fb679baecb95156bd8797e8dc8aa1d7da68c201ec84a45cdba6a45c1799d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f737fb679baecb95156bd8797e8dc8aa1d7da68c201ec84a45cdba6a45c1799d->enter($__internal_f737fb679baecb95156bd8797e8dc8aa1d7da68c201ec84a45cdba6a45c1799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f737fb679baecb95156bd8797e8dc8aa1d7da68c201ec84a45cdba6a45c1799d->leave($__internal_f737fb679baecb95156bd8797e8dc8aa1d7da68c201ec84a45cdba6a45c1799d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_610984d5013c5b79eeae72ff2536cad647329b484923219e6944818c6739add2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610984d5013c5b79eeae72ff2536cad647329b484923219e6944818c6739add2->enter($__internal_610984d5013c5b79eeae72ff2536cad647329b484923219e6944818c6739add2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_610984d5013c5b79eeae72ff2536cad647329b484923219e6944818c6739add2->leave($__internal_610984d5013c5b79eeae72ff2536cad647329b484923219e6944818c6739add2_prof);

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
