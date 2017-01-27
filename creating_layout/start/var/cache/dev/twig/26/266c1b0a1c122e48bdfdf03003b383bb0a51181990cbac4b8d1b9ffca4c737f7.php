<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_b83d5b2f40169e59f48efdd2f9af27908d818c858a1188697760897519592de7 extends Twig_Template
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
        $__internal_a5cc196dde0d82f131a6e717736ae007dd8302c38a57f97841820ca392ac1957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cc196dde0d82f131a6e717736ae007dd8302c38a57f97841820ca392ac1957->enter($__internal_a5cc196dde0d82f131a6e717736ae007dd8302c38a57f97841820ca392ac1957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_f4868e2f61bf58edf168eff8515b97cf12a363a1e30ac73f8e8f616fcd99f6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4868e2f61bf58edf168eff8515b97cf12a363a1e30ac73f8e8f616fcd99f6fd->enter($__internal_f4868e2f61bf58edf168eff8515b97cf12a363a1e30ac73f8e8f616fcd99f6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_a5cc196dde0d82f131a6e717736ae007dd8302c38a57f97841820ca392ac1957->leave($__internal_a5cc196dde0d82f131a6e717736ae007dd8302c38a57f97841820ca392ac1957_prof);

        
        $__internal_f4868e2f61bf58edf168eff8515b97cf12a363a1e30ac73f8e8f616fcd99f6fd->leave($__internal_f4868e2f61bf58edf168eff8515b97cf12a363a1e30ac73f8e8f616fcd99f6fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
