<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_fd1f1221be7a69102b614414e2c5b3ca92e96b5f0877ebc07c0bd306e481ef7e extends Twig_Template
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
        $__internal_c50bd4426bd1673b4f8f1a996b11da01b50505c2d8473f822444ea10744d3740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50bd4426bd1673b4f8f1a996b11da01b50505c2d8473f822444ea10744d3740->enter($__internal_c50bd4426bd1673b4f8f1a996b11da01b50505c2d8473f822444ea10744d3740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_49fbb91a1f22cf2bd60f6ca7f50205027266d8dde242d90f6d99e77b81c63083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fbb91a1f22cf2bd60f6ca7f50205027266d8dde242d90f6d99e77b81c63083->enter($__internal_49fbb91a1f22cf2bd60f6ca7f50205027266d8dde242d90f6d99e77b81c63083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_c50bd4426bd1673b4f8f1a996b11da01b50505c2d8473f822444ea10744d3740->leave($__internal_c50bd4426bd1673b4f8f1a996b11da01b50505c2d8473f822444ea10744d3740_prof);

        
        $__internal_49fbb91a1f22cf2bd60f6ca7f50205027266d8dde242d90f6d99e77b81c63083->leave($__internal_49fbb91a1f22cf2bd60f6ca7f50205027266d8dde242d90f6d99e77b81c63083_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
