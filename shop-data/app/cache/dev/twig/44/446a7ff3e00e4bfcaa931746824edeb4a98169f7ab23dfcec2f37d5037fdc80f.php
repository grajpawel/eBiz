<?php

/* PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig */
class __TwigTemplate_87a59703644a332e15629caea1ca6db0f0acd8c6c4fad5afe71fbace7028f5dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a0b4f012fb27696827fed0fa23a2d4ed30a21f7d68a85be01f4b93c1f9f7a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0b4f012fb27696827fed0fa23a2d4ed30a21f7d68a85be01f4b93c1f9f7a2d->enter($__internal_3a0b4f012fb27696827fed0fa23a2d4ed30a21f7d68a85be01f4b93c1f9f7a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig"));

        // line 25
        echo "<div class=\"modal fade\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\">
    <div class=\"modal-dialog ";
        // line 26
        if (array_key_exists("class", $context)) {
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        }
        echo "\">
        <div class=\"modal-content\">
            ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "
            ";
        // line 40
        if (array_key_exists("progressbar", $context)) {
            // line 41
            echo "                <div class=\"modal-body\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progressbar"]) ? $context["progressbar"] : $this->getContext($context, "progressbar")), "id", array()), "html", null, true);
            echo "\">
                    <div class=\"pull-right progress-details-text\" default-value=\"";
            // line 42
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["progressbar"]) ? $context["progressbar"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["progressbar"]) ? $context["progressbar"] : null), "label", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Processing...", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Processing...", array(), "Admin.Global"))), "html", null, true);
            echo "\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["progressbar"]) ? $context["progressbar"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["progressbar"]) ? $context["progressbar"] : null), "label", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Processing...", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Processing...", array(), "Admin.Global"))), "html", null, true);
            echo "
                    </div>
                    <div class=\"progress active progress-striped\" style=\"display: block; width: 100%\">
                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0%\">
                            <span>0 %</span>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 52
        echo "
            ";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "        </div>
    </div>
</div>
<script>
    \$(document).ready(function() {
        var closable = ";
        // line 76
        if ((array_key_exists("closable", $context) && ((isset($context["closable"]) ? $context["closable"] : $this->getContext($context, "closable")) == true))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
        \$('#";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').modal({
            backdrop: (closable ? true : 'static'),
            keyboard: closable,
            closable: closable,
            show: false
        });
    });
</script>
";
        
        $__internal_3a0b4f012fb27696827fed0fa23a2d4ed30a21f7d68a85be01f4b93c1f9f7a2d->leave($__internal_3a0b4f012fb27696827fed0fa23a2d4ed30a21f7d68a85be01f4b93c1f9f7a2d_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_c2a6d1ea5066dbd01cd532cd2959784318c5bb277c039d6052c0827557dab016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a6d1ea5066dbd01cd532cd2959784318c5bb277c039d6052c0827557dab016->enter($__internal_c2a6d1ea5066dbd01cd532cd2959784318c5bb277c039d6052c0827557dab016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "                ";
        if (array_key_exists("title", $context)) {
            // line 30
            echo "                    <div class=\"modal-header\">
                        ";
            // line 31
            if ((array_key_exists("closable", $context) && ((isset($context["closable"]) ? $context["closable"] : $this->getContext($context, "closable")) == true))) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
            }
            // line 32
            echo "                        <h4 class=\"modal-title\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h4>
                    </div>
                ";
        }
        // line 35
        echo "            ";
        
        $__internal_c2a6d1ea5066dbd01cd532cd2959784318c5bb277c039d6052c0827557dab016->leave($__internal_c2a6d1ea5066dbd01cd532cd2959784318c5bb277c039d6052c0827557dab016_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_2a53d7708c8443e24af41568153d270c5b0eb3c5348fbf5c339c79059cb9450d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a53d7708c8443e24af41568153d270c5b0eb3c5348fbf5c339c79059cb9450d->enter($__internal_2a53d7708c8443e24af41568153d270c5b0eb3c5348fbf5c339c79059cb9450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "            ";
        
        $__internal_2a53d7708c8443e24af41568153d270c5b0eb3c5348fbf5c339c79059cb9450d->leave($__internal_2a53d7708c8443e24af41568153d270c5b0eb3c5348fbf5c339c79059cb9450d_prof);

    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0e07e9b514cd40e64c9d3d24bb845fadbc4c62007904c6afcb8147c7946e74e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e07e9b514cd40e64c9d3d24bb845fadbc4c62007904c6afcb8147c7946e74e0->enter($__internal_0e07e9b514cd40e64c9d3d24bb845fadbc4c62007904c6afcb8147c7946e74e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 54
        echo "                ";
        if (array_key_exists("actions", $context)) {
            // line 55
            echo "                    <div class=\"modal-footer\">
                        ";
            // line 56
            if ((array_key_exists("closable", $context) && ((isset($context["closable"]) ? $context["closable"] : $this->getContext($context, "closable")) == true))) {
                // line 57
                echo "                            <button type=\"button\" class=\"btn btn-tertiary-outline btn-lg\" data-dismiss=\"modal\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", array(), "Admin.Actions"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 59
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 60
                echo "                            ";
                if (($this->getAttribute($context["action"], "type", array(), "any", true, true) && ($this->getAttribute($context["action"], "type", array()) == "link"))) {
                    // line 61
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "href", array()), "#")) : ("#")), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "class", array()), "btn")) : ("btn")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "label", array()), "Label is missing")) : ("Label is missing")), "html", null, true);
                    echo "</a>
                            ";
                } elseif (($this->getAttribute(                // line 62
$context["action"], "type", array(), "any", true, true) && ($this->getAttribute($context["action"], "type", array()) == "button"))) {
                    // line 63
                    echo "                                <button type=\"button\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "value", array()), "")) : ("")), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "class", array()), "btn")) : ("btn")), "html", null, true);
                    echo "\">
                                    ";
                    // line 64
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "label", array()), "Label is missing")) : ("Label is missing")), "html", null, true);
                    echo "
                                </button>
                            ";
                }
                // line 67
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                    </div>
                ";
        }
        // line 70
        echo "            ";
        
        $__internal_0e07e9b514cd40e64c9d3d24bb845fadbc4c62007904c6afcb8147c7946e74e0->leave($__internal_0e07e9b514cd40e64c9d3d24bb845fadbc4c62007904c6afcb8147c7946e74e0_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 70,  207 => 68,  201 => 67,  195 => 64,  188 => 63,  186 => 62,  177 => 61,  174 => 60,  169 => 59,  163 => 57,  161 => 56,  158 => 55,  155 => 54,  149 => 53,  142 => 38,  136 => 37,  129 => 35,  122 => 32,  118 => 31,  115 => 30,  112 => 29,  106 => 28,  90 => 77,  82 => 76,  75 => 71,  73 => 53,  70 => 52,  58 => 43,  54 => 42,  49 => 41,  47 => 40,  44 => 39,  42 => 37,  39 => 36,  37 => 28,  30 => 26,  25 => 25,);
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
<div class=\"modal fade\" id=\"{{ id }}\" tabindex=\"-1\">
    <div class=\"modal-dialog {% if class is defined %}{{ class }}{% endif %}\">
        <div class=\"modal-content\">
            {% block header %}
                {% if title is defined %}
                    <div class=\"modal-header\">
                        {% if closable is defined and closable == true %}<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>{% endif %}
                        <h4 class=\"modal-title\">{{ title }}</h4>
                    </div>
                {% endif %}
            {% endblock %}

            {% block content %}
            {% endblock %}

            {% if progressbar is defined %}
                <div class=\"modal-body\" id=\"{{ progressbar.id }}\">
                    <div class=\"pull-right progress-details-text\" default-value=\"{{ progressbar.label|default('Processing...'|trans({}, 'Admin.Global')) }}\">
                        {{ progressbar.label|default('Processing...'|trans({}, 'Admin.Global')) }}
                    </div>
                    <div class=\"progress active progress-striped\" style=\"display: block; width: 100%\">
                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0%\">
                            <span>0 %</span>
                        </div>
                    </div>
                </div>
            {% endif %}

            {% block footer %}
                {% if actions is defined %}
                    <div class=\"modal-footer\">
                        {% if closable is defined and closable == true %}
                            <button type=\"button\" class=\"btn btn-tertiary-outline btn-lg\" data-dismiss=\"modal\">{{ 'Close'|trans({}, 'Admin.Actions') }}</button>
                        {% endif %}
                        {% for action in actions %}
                            {% if action.type is defined and action.type == 'link' %}
                                <a href=\"{{ action.href|default('#') }}\" class=\"{{ action.class|default('btn') }}\">{{ action.label|default('Label is missing') }}</a>
                            {% elseif action.type is defined and action.type == 'button' %}
                                <button type=\"button\" value=\"{{ action.value|default('') }}\" class=\"{{ action.class|default('btn') }}\">
                                    {{ action.label|default('Label is missing') }}
                                </button>
                            {% endif %}
                        {% endfor %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    </div>
</div>
<script>
    \$(document).ready(function() {
        var closable = {% if closable is defined and closable == true %}true{% else %}false{% endif %};
        \$('#{{ id }}').modal({
            backdrop: (closable ? true : 'static'),
            keyboard: closable,
            closable: closable,
            show: false
        });
    });
</script>
", "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Helpers/bootstrap_popup.html.twig");
    }
}