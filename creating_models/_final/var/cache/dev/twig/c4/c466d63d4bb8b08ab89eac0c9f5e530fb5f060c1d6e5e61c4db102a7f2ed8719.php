<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_53b68d3799eaf0f81eb2f1a48ba98660ba6c2dee0f79b15c6e1a4306007d5995 extends Twig_Template
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
        $__internal_41cfcf15b779a1d9c74f750ab1529bc0710d32f6456369091a8bfd09d40667b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cfcf15b779a1d9c74f750ab1529bc0710d32f6456369091a8bfd09d40667b9->enter($__internal_41cfcf15b779a1d9c74f750ab1529bc0710d32f6456369091a8bfd09d40667b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_456a29eecec47f6b3f7460ff4c4f3ed8ae96fc074b75a80cfd825538e08ee07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456a29eecec47f6b3f7460ff4c4f3ed8ae96fc074b75a80cfd825538e08ee07f->enter($__internal_456a29eecec47f6b3f7460ff4c4f3ed8ae96fc074b75a80cfd825538e08ee07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_41cfcf15b779a1d9c74f750ab1529bc0710d32f6456369091a8bfd09d40667b9->leave($__internal_41cfcf15b779a1d9c74f750ab1529bc0710d32f6456369091a8bfd09d40667b9_prof);

        
        $__internal_456a29eecec47f6b3f7460ff4c4f3ed8ae96fc074b75a80cfd825538e08ee07f->leave($__internal_456a29eecec47f6b3f7460ff4c4f3ed8ae96fc074b75a80cfd825538e08ee07f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
