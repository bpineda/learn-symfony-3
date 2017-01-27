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
        $__internal_efd731ccb990042c860c1c98435661a2e4f2cfc6b75d35f55e95dc93731f15cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd731ccb990042c860c1c98435661a2e4f2cfc6b75d35f55e95dc93731f15cb->enter($__internal_efd731ccb990042c860c1c98435661a2e4f2cfc6b75d35f55e95dc93731f15cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d2ed73830b97af7d70daa5d024cf32ec42cd9788c77bb7a26de125259ec6f0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ed73830b97af7d70daa5d024cf32ec42cd9788c77bb7a26de125259ec6f0ae->enter($__internal_d2ed73830b97af7d70daa5d024cf32ec42cd9788c77bb7a26de125259ec6f0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_efd731ccb990042c860c1c98435661a2e4f2cfc6b75d35f55e95dc93731f15cb->leave($__internal_efd731ccb990042c860c1c98435661a2e4f2cfc6b75d35f55e95dc93731f15cb_prof);

        
        $__internal_d2ed73830b97af7d70daa5d024cf32ec42cd9788c77bb7a26de125259ec6f0ae->leave($__internal_d2ed73830b97af7d70daa5d024cf32ec42cd9788c77bb7a26de125259ec6f0ae_prof);

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
", "@Twig/Exception/exception.atom.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
