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
        $__internal_cc6ab660f89ba1a21ce51e08cd6886c7e9068e2660c29592d2e9d307b504bd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6ab660f89ba1a21ce51e08cd6886c7e9068e2660c29592d2e9d307b504bd8d->enter($__internal_cc6ab660f89ba1a21ce51e08cd6886c7e9068e2660c29592d2e9d307b504bd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_223ff2133ffe3e858f9cba4fcbbe48ce612430ae9b1bf6c544c31f8b9cd077d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223ff2133ffe3e858f9cba4fcbbe48ce612430ae9b1bf6c544c31f8b9cd077d8->enter($__internal_223ff2133ffe3e858f9cba4fcbbe48ce612430ae9b1bf6c544c31f8b9cd077d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cc6ab660f89ba1a21ce51e08cd6886c7e9068e2660c29592d2e9d307b504bd8d->leave($__internal_cc6ab660f89ba1a21ce51e08cd6886c7e9068e2660c29592d2e9d307b504bd8d_prof);

        
        $__internal_223ff2133ffe3e858f9cba4fcbbe48ce612430ae9b1bf6c544c31f8b9cd077d8->leave($__internal_223ff2133ffe3e858f9cba4fcbbe48ce612430ae9b1bf6c544c31f8b9cd077d8_prof);

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
", "@Twig/Exception/error.json.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
