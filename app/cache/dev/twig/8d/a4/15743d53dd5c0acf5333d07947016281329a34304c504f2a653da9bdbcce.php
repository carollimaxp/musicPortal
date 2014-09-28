<?php

/* MPDefaultBundle::layout.html.twig */
class __TwigTemplate_8da415743d53dd5c0acf5333d07947016281329a34304c504f2a653da9bdbcce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mpdefault/css/default.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "    Sidebar content
";
    }

    public function getTemplateName()
    {
        return "MPDefaultBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  43 => 8,  37 => 5,  32 => 4,  93 => 27,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  71 => 20,  65 => 19,  60 => 16,  51 => 13,  48 => 12,  44 => 11,  38 => 7,  35 => 6,  29 => 3,);
    }
}
