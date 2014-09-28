<?php

/* MPTheoryBundle:Default:index.html.twig */
class __TwigTemplate_926bcc04f0ec07179c805b4868949d15074a3d2a3da466ffcf4c924b76ea0551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    Here be ";
        echo twig_escape_filter($this->env, (isset($context["var1"]) ? $context["var1"] : $this->getContext($context, "var1")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MPTheoryBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
