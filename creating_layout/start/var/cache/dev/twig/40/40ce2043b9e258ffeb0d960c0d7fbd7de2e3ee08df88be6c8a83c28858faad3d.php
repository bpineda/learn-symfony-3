<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_6a82ebb9df3d1178c46a8605184275b2108fd92cf62ba8a70ec528bffce47e18 extends Twig_Template
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
        $__internal_cdb6f46ddab5a783bbdd3301eda20ed09ce11139d783a7847188cbfc2495eecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb6f46ddab5a783bbdd3301eda20ed09ce11139d783a7847188cbfc2495eecb->enter($__internal_cdb6f46ddab5a783bbdd3301eda20ed09ce11139d783a7847188cbfc2495eecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_9645bfb1edb91663e4072b9dc456da94a60116c5653e3f9769c967682517b584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9645bfb1edb91663e4072b9dc456da94a60116c5653e3f9769c967682517b584->enter($__internal_9645bfb1edb91663e4072b9dc456da94a60116c5653e3f9769c967682517b584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cdb6f46ddab5a783bbdd3301eda20ed09ce11139d783a7847188cbfc2495eecb->leave($__internal_cdb6f46ddab5a783bbdd3301eda20ed09ce11139d783a7847188cbfc2495eecb_prof);

        
        $__internal_9645bfb1edb91663e4072b9dc456da94a60116c5653e3f9769c967682517b584->leave($__internal_9645bfb1edb91663e4072b9dc456da94a60116c5653e3f9769c967682517b584_prof);

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
", "@Twig/Exception/exception.css.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
