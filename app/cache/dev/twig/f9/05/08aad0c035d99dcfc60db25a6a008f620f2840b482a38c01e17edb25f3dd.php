<?php

/* MPDefaultBundle:StaticPages:contactEmail.txt.twig */
class __TwigTemplate_f90508aad0c035d99dcfc60db25a6a008f620f2840b482a38c01e17edb25f3dd extends Twig_Template
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
        // line 1
        echo "A contact enquiry was made by ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name");
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 3
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email");
        echo "
Subject: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "subject");
        echo "
Body:
";
        // line 6
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "body");
    }

    public function getTemplateName()
    {
        return "MPDefaultBundle:StaticPages:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  27 => 3,  19 => 1,);
    }
}
