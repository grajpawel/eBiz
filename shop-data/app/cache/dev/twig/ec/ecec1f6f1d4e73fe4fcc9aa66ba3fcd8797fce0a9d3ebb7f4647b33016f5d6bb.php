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
        $__internal_2e708b0ba8368e28519d0a898b84ec4d7308e282a53f5cf32474bee65b6cd420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e708b0ba8368e28519d0a898b84ec4d7308e282a53f5cf32474bee65b6cd420->enter($__internal_2e708b0ba8368e28519d0a898b84ec4d7308e282a53f5cf32474bee65b6cd420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e708b0ba8368e28519d0a898b84ec4d7308e282a53f5cf32474bee65b6cd420->leave($__internal_2e708b0ba8368e28519d0a898b84ec4d7308e282a53f5cf32474bee65b6cd420_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c095f081250e19772cf0f758c1268e97f8e29b22c4df03977b2d2b61f76a9d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c095f081250e19772cf0f758c1268e97f8e29b22c4df03977b2d2b61f76a9d6a->enter($__internal_c095f081250e19772cf0f758c1268e97f8e29b22c4df03977b2d2b61f76a9d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c095f081250e19772cf0f758c1268e97f8e29b22c4df03977b2d2b61f76a9d6a->leave($__internal_c095f081250e19772cf0f758c1268e97f8e29b22c4df03977b2d2b61f76a9d6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed05240307be017f4cd8ab47c2a9c592bd9ec6462bd324c5e93b3c9e565a8d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed05240307be017f4cd8ab47c2a9c592bd9ec6462bd324c5e93b3c9e565a8d47->enter($__internal_ed05240307be017f4cd8ab47c2a9c592bd9ec6462bd324c5e93b3c9e565a8d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ed05240307be017f4cd8ab47c2a9c592bd9ec6462bd324c5e93b3c9e565a8d47->leave($__internal_ed05240307be017f4cd8ab47c2a9c592bd9ec6462bd324c5e93b3c9e565a8d47_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_767fb31649d17b2176d6b3f2564fb9b47cf66fa80988822a04e4a94b0c0e012e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767fb31649d17b2176d6b3f2564fb9b47cf66fa80988822a04e4a94b0c0e012e->enter($__internal_767fb31649d17b2176d6b3f2564fb9b47cf66fa80988822a04e4a94b0c0e012e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_767fb31649d17b2176d6b3f2564fb9b47cf66fa80988822a04e4a94b0c0e012e->leave($__internal_767fb31649d17b2176d6b3f2564fb9b47cf66fa80988822a04e4a94b0c0e012e_prof);

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
