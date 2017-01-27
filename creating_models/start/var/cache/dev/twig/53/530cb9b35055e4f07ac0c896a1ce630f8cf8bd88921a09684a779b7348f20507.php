<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_f47758b81b780728bd11dfacb317071f5b53ed424713bacdcf6828c1702b1982 extends Twig_Template
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
        $__internal_a4873861b6495d73d6584da21b230c2892126f3884140a4f0ab6a3a0b089faf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4873861b6495d73d6584da21b230c2892126f3884140a4f0ab6a3a0b089faf2->enter($__internal_a4873861b6495d73d6584da21b230c2892126f3884140a4f0ab6a3a0b089faf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_da9b710c62d2dd14abc3be68bf4e89eacbbdd415787c6cb7c1cee35d6d171909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9b710c62d2dd14abc3be68bf4e89eacbbdd415787c6cb7c1cee35d6d171909->enter($__internal_da9b710c62d2dd14abc3be68bf4e89eacbbdd415787c6cb7c1cee35d6d171909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_a4873861b6495d73d6584da21b230c2892126f3884140a4f0ab6a3a0b089faf2->leave($__internal_a4873861b6495d73d6584da21b230c2892126f3884140a4f0ab6a3a0b089faf2_prof);

        
        $__internal_da9b710c62d2dd14abc3be68bf4e89eacbbdd415787c6cb7c1cee35d6d171909->leave($__internal_da9b710c62d2dd14abc3be68bf4e89eacbbdd415787c6cb7c1cee35d6d171909_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
