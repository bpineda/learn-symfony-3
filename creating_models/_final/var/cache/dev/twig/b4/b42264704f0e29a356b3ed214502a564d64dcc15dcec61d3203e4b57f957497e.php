<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7b49ceb456ac29305887b056b745efcba25c82d59ba4be6ba1001fc50ea63a53 extends Twig_Template
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
        $__internal_d75c9849938afdb0fa1f26614cf0004b5718273c4f8a86a88cf0092473be3aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75c9849938afdb0fa1f26614cf0004b5718273c4f8a86a88cf0092473be3aa3->enter($__internal_d75c9849938afdb0fa1f26614cf0004b5718273c4f8a86a88cf0092473be3aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_119c91f70f0efefb87a87f109a900bfd6fd2ff09ebd80772effb55bef44fb677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119c91f70f0efefb87a87f109a900bfd6fd2ff09ebd80772effb55bef44fb677->enter($__internal_119c91f70f0efefb87a87f109a900bfd6fd2ff09ebd80772effb55bef44fb677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_d75c9849938afdb0fa1f26614cf0004b5718273c4f8a86a88cf0092473be3aa3->leave($__internal_d75c9849938afdb0fa1f26614cf0004b5718273c4f8a86a88cf0092473be3aa3_prof);

        
        $__internal_119c91f70f0efefb87a87f109a900bfd6fd2ff09ebd80772effb55bef44fb677->leave($__internal_119c91f70f0efefb87a87f109a900bfd6fd2ff09ebd80772effb55bef44fb677_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
