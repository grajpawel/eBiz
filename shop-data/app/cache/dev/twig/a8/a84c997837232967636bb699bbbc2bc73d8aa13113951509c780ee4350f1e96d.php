<?php

/* PrestaShopBundle:Admin\Common:pagination.html.twig */
class __TwigTemplate_4af6f044a98363fd4a8a30708c0a79ee18049a9b902b6b881ffeee89562d9cb0 extends Twig_Template
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
        $__internal_8d0691c9d82ba4b6d0af372f85c65273bd2c5866fa2d2461bcaba39240434ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0691c9d82ba4b6d0af372f85c65273bd2c5866fa2d2461bcaba39240434ecf->enter($__internal_8d0691c9d82ba4b6d0af372f85c65273bd2c5866fa2d2461bcaba39240434ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Common:pagination.html.twig"));

        // line 25
        echo "<div>
    <ul class=\"pagination\">
        <li class=\"page-item ";
        // line 27
        if ((isset($context["first_url"]) ? $context["first_url"] : $this->getContext($context, "first_url"))) {
        } else {
            echo "disabled";
        }
        echo "\">
            <a class=\"page-link\" ";
        // line 28
        if ((isset($context["first_url"]) ? $context["first_url"] : $this->getContext($context, "first_url"))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["first_url"]) ? $context["first_url"] : $this->getContext($context, "first_url")), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">1</a>
        </li>
        <li class=\"page-item ";
        // line 30
        if ((isset($context["previous_url"]) ? $context["previous_url"] : $this->getContext($context, "previous_url"))) {
        } else {
            echo "disabled";
        }
        echo "\">
            <a class=\"page-link\" ";
        // line 31
        if ((isset($context["previous_url"]) ? $context["previous_url"] : $this->getContext($context, "previous_url"))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["previous_url"]) ? $context["previous_url"] : $this->getContext($context, "previous_url")), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"page-link\" type=\"text\" style=\"width: 4em;\"
                   value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
        echo "\" psurl=\"";
        echo twig_escape_filter($this->env, (isset($context["jump_page_url"]) ? $context["jump_page_url"] : $this->getContext($context, "jump_page_url")), "html", null, true);
        echo "\" psmax=\"";
        echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : $this->getContext($context, "page_count")), "html", null, true);
        echo "\" pslimit=\"";
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "html", null, true);
        echo "\" />
        </li>
        <li class=\"page-item ";
        // line 37
        if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) ? $context["next_url"] : $this->getContext($context, "next_url")) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
            <a class=\"page-link\" id=\"pagination_next_url\" ";
        // line 38
        if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) ? $context["next_url"] : $this->getContext($context, "next_url")) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["next_url"]) ? $context["next_url"] : $this->getContext($context, "next_url")), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">&gt;</a>
        </li>
        <li class=\"page-item ";
        // line 40
        if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) ? $context["last_url"] : $this->getContext($context, "last_url")) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
            <a class=\"page-link\" ";
        // line 41
        if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) ? $context["last_url"] : $this->getContext($context, "last_url")) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["last_url"]) ? $context["last_url"] : $this->getContext($context, "last_url")), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : $this->getContext($context, "page_count")), "html", null, true);
        echo "</a>
        </li>
    </ul>
    <ul class=\"pagination\">
        <li style=\"float: left; margin-left: 2em;\">
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", array("%from%" => (        // line 47
(isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")) + 1), "%to%" => min((        // line 48
(isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")) + 1), (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))), "%total%" =>         // line 49
(isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "%current_page%" =>         // line 50
(isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "%page_count%" =>         // line 51
(isset($context["page_count"]) ? $context["page_count"] : $this->getContext($context, "page_count"))), "Admin.Catalog.Feature"), "html", null, true);
        // line 53
        echo "
            &nbsp;
            |
            &nbsp;
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Items per page:", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "&nbsp;
            <select name=\"paginator_select_page_limit\" psurl=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["changeLimitUrl"]) ? $context["changeLimitUrl"] : $this->getContext($context, "changeLimitUrl")), "html", null, true);
        echo "\" style=\"display:inline;width:6em;\" class=\"pagination-link\">
                ";
        // line 59
        if (!twig_in_filter((isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), (isset($context["limit_choices"]) ? $context["limit_choices"] : $this->getContext($context, "limit_choices")))) {
            echo "<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "html", null, true);
            echo "</option>";
        }
        // line 60
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limit_choices"]) ? $context["limit_choices"] : $this->getContext($context, "limit_choices")));
        foreach ($context['_seq'] as $context["_key"] => $context["limit_choice"]) {
            // line 61
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "\" ";
            if (((isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")) == $context["limit_choice"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </select>
        </li>
    </ul>
</div>
";
        
        $__internal_8d0691c9d82ba4b6d0af372f85c65273bd2c5866fa2d2461bcaba39240434ecf->leave($__internal_8d0691c9d82ba4b6d0af372f85c65273bd2c5866fa2d2461bcaba39240434ecf_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Common:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 63,  150 => 61,  145 => 60,  137 => 59,  133 => 58,  129 => 57,  123 => 53,  121 => 51,  120 => 50,  119 => 49,  118 => 48,  117 => 47,  116 => 46,  100 => 41,  93 => 40,  82 => 38,  75 => 37,  64 => 35,  51 => 31,  44 => 30,  33 => 28,  26 => 27,  22 => 25,);
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
<div>
    <ul class=\"pagination\">
        <li class=\"page-item {% if first_url %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if first_url %}href=\"{{ first_url }}\"{% else %}nohref{% endif %}>1</a>
        </li>
        <li class=\"page-item {% if previous_url %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if previous_url %}href=\"{{ previous_url }}\"{% else %}nohref{% endif %}>&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"page-link\" type=\"text\" style=\"width: 4em;\"
                   value=\"{{ current_page }}\" psurl=\"{{ jump_page_url }}\" psmax=\"{{ page_count }}\" pslimit=\"{{ limit }}\" />
        </li>
        <li class=\"page-item {% if next_url is defined and next_url != false %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" id=\"pagination_next_url\" {% if next_url is defined and next_url != false %}href=\"{{ next_url }}\"{% else %}nohref{% endif %}>&gt;</a>
        </li>
        <li class=\"page-item {% if last_url is defined and last_url != false %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if last_url is defined and last_url != false %}href=\"{{ last_url }}\"{% else %}nohref{% endif %}>{{ page_count }}</a>
        </li>
    </ul>
    <ul class=\"pagination\">
        <li style=\"float: left; margin-left: 2em;\">
            {{ \"Viewing %from%-%to% on %total% (page %current_page% / %page_count%)\"|trans({
              '%from%': from+1,
              '%to%': min(to+1, total),
              '%total%': total,
              '%current_page%': current_page,
              '%page_count%': page_count
            },
                'Admin.Catalog.Feature') }}
            &nbsp;
            |
            &nbsp;
            {{ \"Items per page:\"|trans({}, 'Admin.Catalog.Feature') }}&nbsp;
            <select name=\"paginator_select_page_limit\" psurl=\"{{ changeLimitUrl }}\" style=\"display:inline;width:6em;\" class=\"pagination-link\">
                {% if limit not in limit_choices %}<option value=\"{{ limit }}\" selected=\"selected\">{{ limit }}</option>{% endif %}
                {% for limit_choice in limit_choices %}
                    <option value=\"{{ limit_choice }}\" {% if limit==limit_choice %}selected=\"selected\"{% endif %}>{{ limit_choice }}</option>
                {% endfor %}
            </select>
        </li>
    </ul>
</div>
", "PrestaShopBundle:Admin\\Common:pagination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/pagination.html.twig");
    }
}
