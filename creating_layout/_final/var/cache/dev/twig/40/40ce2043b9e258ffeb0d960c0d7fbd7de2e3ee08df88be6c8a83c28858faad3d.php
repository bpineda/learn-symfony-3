<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_6a82ebb9df3d1178c46a8605184275b2108fd92cf62ba8a70ec528bffce47e18 extends Twig_Template
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
        $__internal_b22139bd24a7dba42a2135dbf1af6640e4ee6229c8b970d96a056beb8f6d96ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22139bd24a7dba42a2135dbf1af6640e4ee6229c8b970d96a056beb8f6d96ee->enter($__internal_b22139bd24a7dba42a2135dbf1af6640e4ee6229c8b970d96a056beb8f6d96ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c5fb37c933e162c296d643ccd7e7e2d44658d31beab27ce820cd8b5550d1df0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fb37c933e162c296d643ccd7e7e2d44658d31beab27ce820cd8b5550d1df0a->enter($__internal_c5fb37c933e162c296d643ccd7e7e2d44658d31beab27ce820cd8b5550d1df0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b22139bd24a7dba42a2135dbf1af6640e4ee6229c8b970d96a056beb8f6d96ee->leave($__internal_b22139bd24a7dba42a2135dbf1af6640e4ee6229c8b970d96a056beb8f6d96ee_prof);

        
        $__internal_c5fb37c933e162c296d643ccd7e7e2d44658d31beab27ce820cd8b5550d1df0a->leave($__internal_c5fb37c933e162c296d643ccd7e7e2d44658d31beab27ce820cd8b5550d1df0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
