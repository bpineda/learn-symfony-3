<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_59edfea8f1d771826c2593a362cd5e46072558d9c4640438a778810cc5f57d5d extends Twig_Template
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
        $__internal_d967ebb9bafa071ba2a22e03c21886675d78b74ae7578d88725f1c3c452059a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d967ebb9bafa071ba2a22e03c21886675d78b74ae7578d88725f1c3c452059a8->enter($__internal_d967ebb9bafa071ba2a22e03c21886675d78b74ae7578d88725f1c3c452059a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f05e0547f3282aeea1e856bd80e72b863a288b13b766ee27e367b1dd2e4d0713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05e0547f3282aeea1e856bd80e72b863a288b13b766ee27e367b1dd2e4d0713->enter($__internal_f05e0547f3282aeea1e856bd80e72b863a288b13b766ee27e367b1dd2e4d0713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d967ebb9bafa071ba2a22e03c21886675d78b74ae7578d88725f1c3c452059a8->leave($__internal_d967ebb9bafa071ba2a22e03c21886675d78b74ae7578d88725f1c3c452059a8_prof);

        
        $__internal_f05e0547f3282aeea1e856bd80e72b863a288b13b766ee27e367b1dd2e4d0713->leave($__internal_f05e0547f3282aeea1e856bd80e72b863a288b13b766ee27e367b1dd2e4d0713_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
