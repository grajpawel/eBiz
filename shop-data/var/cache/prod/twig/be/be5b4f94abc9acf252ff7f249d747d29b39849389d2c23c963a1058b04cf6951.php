<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/Design/Cms/edit_category.html.twig */
class __TwigTemplate_3fe046d41031657068d7677cf1680e6bac335cd66cc5a1ddfe25ee47a6aab6a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/edit_category.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col\">
      ";
        // line 31
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig", ["cmsPageCategoryForm" =>         // line 32
($context["cmsPageCategoryForm"] ?? null), "cmsCategoryParentId" =>         // line 33
($context["cmsCategoryParentId"] ?? null)]);
        // line 35
        echo "
    </div>
  </div>
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        // line 41
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/cms_page.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/edit_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 42,  61 => 41,  58 => 40,  51 => 35,  49 => 33,  48 => 32,  47 => 31,  43 => 29,  40 => 28,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/edit_category.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/edit_category.html.twig");
    }
}
