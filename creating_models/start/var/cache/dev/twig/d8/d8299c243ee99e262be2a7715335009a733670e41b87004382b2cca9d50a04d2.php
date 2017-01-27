<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_0695add5f3f24d007b936beff18a0f0dbc4cb2e66bc6aa9b69d17d9d0d2be8ba extends Twig_Template
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
        $__internal_49fae62aba51c21436be5409bd7818e7893f1f9b47f449902561d6192dd4a9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49fae62aba51c21436be5409bd7818e7893f1f9b47f449902561d6192dd4a9ee->enter($__internal_49fae62aba51c21436be5409bd7818e7893f1f9b47f449902561d6192dd4a9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_401f1209fddc0cca1d9e0f360d5fcdd212ac64a0fcbc96a75780f4346cb63516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401f1209fddc0cca1d9e0f360d5fcdd212ac64a0fcbc96a75780f4346cb63516->enter($__internal_401f1209fddc0cca1d9e0f360d5fcdd212ac64a0fcbc96a75780f4346cb63516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_49fae62aba51c21436be5409bd7818e7893f1f9b47f449902561d6192dd4a9ee->leave($__internal_49fae62aba51c21436be5409bd7818e7893f1f9b47f449902561d6192dd4a9ee_prof);

        
        $__internal_401f1209fddc0cca1d9e0f360d5fcdd212ac64a0fcbc96a75780f4346cb63516->leave($__internal_401f1209fddc0cca1d9e0f360d5fcdd212ac64a0fcbc96a75780f4346cb63516_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
