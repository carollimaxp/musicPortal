<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_0407c373969198590795fc54d904b3e249d69ebff9aa328575d7a4f8f2d15f9d extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  31 => 5,  25 => 3,  21 => 2,  92 => 21,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  166 => 71,  156 => 66,  151 => 63,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  91 => 31,  86 => 28,  69 => 25,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  78 => 40,  36 => 7,  27 => 4,  22 => 2,  54 => 21,  40 => 8,  33 => 10,  30 => 3,  176 => 55,  171 => 73,  168 => 72,  163 => 70,  158 => 67,  150 => 37,  142 => 59,  131 => 26,  127 => 25,  123 => 47,  120 => 22,  114 => 13,  110 => 11,  107 => 10,  101 => 24,  96 => 56,  94 => 22,  89 => 20,  87 => 20,  82 => 46,  74 => 42,  66 => 15,  62 => 23,  57 => 16,  55 => 13,  42 => 14,  28 => 1,  46 => 7,  43 => 8,  37 => 5,  32 => 12,  93 => 9,  88 => 6,  84 => 24,  80 => 19,  76 => 43,  71 => 20,  65 => 19,  60 => 16,  51 => 15,  48 => 12,  44 => 10,  38 => 13,  35 => 4,  29 => 3,);
    }
}
