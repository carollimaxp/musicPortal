<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_06099897cf4979e09867bf1892dce2e3e418550aaa9a226275fe453004775f87 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  31 => 5,  25 => 3,  21 => 2,  92 => 21,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  166 => 71,  156 => 66,  151 => 63,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  91 => 31,  86 => 28,  69 => 25,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  78 => 40,  36 => 7,  27 => 4,  22 => 2,  54 => 21,  40 => 8,  33 => 6,  30 => 3,  176 => 55,  171 => 73,  168 => 72,  163 => 70,  158 => 67,  150 => 37,  142 => 59,  131 => 26,  127 => 25,  123 => 47,  120 => 22,  114 => 13,  110 => 11,  107 => 10,  101 => 24,  96 => 56,  94 => 22,  89 => 20,  87 => 20,  82 => 46,  74 => 42,  66 => 15,  62 => 23,  57 => 16,  55 => 13,  42 => 14,  28 => 1,  46 => 7,  43 => 8,  37 => 5,  32 => 12,  93 => 9,  88 => 6,  84 => 24,  80 => 19,  76 => 43,  71 => 20,  65 => 19,  60 => 16,  51 => 15,  48 => 12,  44 => 10,  38 => 13,  35 => 7,  29 => 4,);
    }
}
