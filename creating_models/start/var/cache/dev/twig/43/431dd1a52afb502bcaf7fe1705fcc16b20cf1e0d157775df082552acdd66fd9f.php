<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d30f13ce4d035319a153f8d5663395b462f03ac399d3a88c026fc1a21d9489bb extends Twig_Template
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
        $__internal_4fdc4800a13716634a7b4cdb055528a163a199e9711affc87c0b7063137d31b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdc4800a13716634a7b4cdb055528a163a199e9711affc87c0b7063137d31b5->enter($__internal_4fdc4800a13716634a7b4cdb055528a163a199e9711affc87c0b7063137d31b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d3d890f14ceb37870d170334b08c8b80b2eeec2c6bf4239bd650c6e336088662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d890f14ceb37870d170334b08c8b80b2eeec2c6bf4239bd650c6e336088662->enter($__internal_d3d890f14ceb37870d170334b08c8b80b2eeec2c6bf4239bd650c6e336088662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4fdc4800a13716634a7b4cdb055528a163a199e9711affc87c0b7063137d31b5->leave($__internal_4fdc4800a13716634a7b4cdb055528a163a199e9711affc87c0b7063137d31b5_prof);

        
        $__internal_d3d890f14ceb37870d170334b08c8b80b2eeec2c6bf4239bd650c6e336088662->leave($__internal_d3d890f14ceb37870d170334b08c8b80b2eeec2c6bf4239bd650c6e336088662_prof);

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
", "@Twig/Exception/exception.css.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
