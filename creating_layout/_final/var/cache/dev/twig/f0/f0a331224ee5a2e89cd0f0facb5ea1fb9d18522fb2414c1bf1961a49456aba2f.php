<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f5721b73d031d1a4d5db77899f96c91ff2006370af1b6bed411be2f33c8a2720 extends Twig_Template
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
        $__internal_62e0fd1089f070acd66a44dc70ee61e49a7fa284c9f0a2cd5197af526440054b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e0fd1089f070acd66a44dc70ee61e49a7fa284c9f0a2cd5197af526440054b->enter($__internal_62e0fd1089f070acd66a44dc70ee61e49a7fa284c9f0a2cd5197af526440054b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_5399d11b4dd4389668eaa05ecd1fd83d7f2875ad55b1506a3ed4dfce3a47edd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5399d11b4dd4389668eaa05ecd1fd83d7f2875ad55b1506a3ed4dfce3a47edd2->enter($__internal_5399d11b4dd4389668eaa05ecd1fd83d7f2875ad55b1506a3ed4dfce3a47edd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_62e0fd1089f070acd66a44dc70ee61e49a7fa284c9f0a2cd5197af526440054b->leave($__internal_62e0fd1089f070acd66a44dc70ee61e49a7fa284c9f0a2cd5197af526440054b_prof);

        
        $__internal_5399d11b4dd4389668eaa05ecd1fd83d7f2875ad55b1506a3ed4dfce3a47edd2->leave($__internal_5399d11b4dd4389668eaa05ecd1fd83d7f2875ad55b1506a3ed4dfce3a47edd2_prof);

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
", "@Twig/Exception/exception.js.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
