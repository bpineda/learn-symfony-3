<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5c9ea249044f0c04031d0d546035742f2da0baa58e900556385475f88ff8646c extends Twig_Template
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
        $__internal_25fec11e418e3800d55357e651e07e523702245c31882f461b1f0c3a3f68cc0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25fec11e418e3800d55357e651e07e523702245c31882f461b1f0c3a3f68cc0f->enter($__internal_25fec11e418e3800d55357e651e07e523702245c31882f461b1f0c3a3f68cc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c3c33e99e88d3fb101eaeec6abdab1190c879ab0ef5ddec8d8f0ff772d0f1170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c33e99e88d3fb101eaeec6abdab1190c879ab0ef5ddec8d8f0ff772d0f1170->enter($__internal_c3c33e99e88d3fb101eaeec6abdab1190c879ab0ef5ddec8d8f0ff772d0f1170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_25fec11e418e3800d55357e651e07e523702245c31882f461b1f0c3a3f68cc0f->leave($__internal_25fec11e418e3800d55357e651e07e523702245c31882f461b1f0c3a3f68cc0f_prof);

        
        $__internal_c3c33e99e88d3fb101eaeec6abdab1190c879ab0ef5ddec8d8f0ff772d0f1170->leave($__internal_c3c33e99e88d3fb101eaeec6abdab1190c879ab0ef5ddec8d8f0ff772d0f1170_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
