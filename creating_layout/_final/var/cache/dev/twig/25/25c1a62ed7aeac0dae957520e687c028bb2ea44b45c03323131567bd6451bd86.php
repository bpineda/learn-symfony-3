<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_08246d6fc50b9cb2f66a1e754433bcd9d9ae852716012dcf2b11d6975c1c9907 extends Twig_Template
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
        $__internal_91469588699afd39d962b2e3ecf050e2b5f9d90a2988ddf7ff9cea5a7f100af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91469588699afd39d962b2e3ecf050e2b5f9d90a2988ddf7ff9cea5a7f100af4->enter($__internal_91469588699afd39d962b2e3ecf050e2b5f9d90a2988ddf7ff9cea5a7f100af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_d3e544cd6441700b9839a1a850979241f0864ee101f9daeb54877300bac56ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e544cd6441700b9839a1a850979241f0864ee101f9daeb54877300bac56ea2->enter($__internal_d3e544cd6441700b9839a1a850979241f0864ee101f9daeb54877300bac56ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_91469588699afd39d962b2e3ecf050e2b5f9d90a2988ddf7ff9cea5a7f100af4->leave($__internal_91469588699afd39d962b2e3ecf050e2b5f9d90a2988ddf7ff9cea5a7f100af4_prof);

        
        $__internal_d3e544cd6441700b9839a1a850979241f0864ee101f9daeb54877300bac56ea2->leave($__internal_d3e544cd6441700b9839a1a850979241f0864ee101f9daeb54877300bac56ea2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
