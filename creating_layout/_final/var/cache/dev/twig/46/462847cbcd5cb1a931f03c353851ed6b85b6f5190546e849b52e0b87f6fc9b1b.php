<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2b15fa3c12e566f37b8e965555ab82c603d07842763ca383d1fe4ab15728820a extends Twig_Template
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
        $__internal_1c446e489632c28949fb902a041720641e4cf4ae5520af3096e1070ea5cb655c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c446e489632c28949fb902a041720641e4cf4ae5520af3096e1070ea5cb655c->enter($__internal_1c446e489632c28949fb902a041720641e4cf4ae5520af3096e1070ea5cb655c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_6d49a25e2aa8388f0e20d8e100d39b7a42c58bfc16b70122b03ed61cd80f1f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d49a25e2aa8388f0e20d8e100d39b7a42c58bfc16b70122b03ed61cd80f1f37->enter($__internal_6d49a25e2aa8388f0e20d8e100d39b7a42c58bfc16b70122b03ed61cd80f1f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_1c446e489632c28949fb902a041720641e4cf4ae5520af3096e1070ea5cb655c->leave($__internal_1c446e489632c28949fb902a041720641e4cf4ae5520af3096e1070ea5cb655c_prof);

        
        $__internal_6d49a25e2aa8388f0e20d8e100d39b7a42c58bfc16b70122b03ed61cd80f1f37->leave($__internal_6d49a25e2aa8388f0e20d8e100d39b7a42c58bfc16b70122b03ed61cd80f1f37_prof);

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
", "@Twig/Exception/exception.atom.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
