<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_57c86c2c57f364ae28d4943d0d64974cb699410ac09d4b00d63aa02babb17885 extends Twig_Template
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
        $__internal_998dfab4255b27ac9cae6a5835fcead9da4d42b7632e0da47bdcd779093f7d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998dfab4255b27ac9cae6a5835fcead9da4d42b7632e0da47bdcd779093f7d58->enter($__internal_998dfab4255b27ac9cae6a5835fcead9da4d42b7632e0da47bdcd779093f7d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_fc53eaed5d80d9c3ff3f578152118ab2dfbd965c1e6a6b63b47567f0ef38a02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc53eaed5d80d9c3ff3f578152118ab2dfbd965c1e6a6b63b47567f0ef38a02e->enter($__internal_fc53eaed5d80d9c3ff3f578152118ab2dfbd965c1e6a6b63b47567f0ef38a02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_998dfab4255b27ac9cae6a5835fcead9da4d42b7632e0da47bdcd779093f7d58->leave($__internal_998dfab4255b27ac9cae6a5835fcead9da4d42b7632e0da47bdcd779093f7d58_prof);

        
        $__internal_fc53eaed5d80d9c3ff3f578152118ab2dfbd965c1e6a6b63b47567f0ef38a02e->leave($__internal_fc53eaed5d80d9c3ff3f578152118ab2dfbd965c1e6a6b63b47567f0ef38a02e_prof);

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
", "@Twig/Exception/exception.rdf.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
