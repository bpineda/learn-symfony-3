<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_cf3d4b2554e3ec295d307bbede5f35aa5bd9acda17ce1419164cd38eef2e4233 extends Twig_Template
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
        $__internal_80361d4b7287d635b4f6645621fb0beddcebd45bd6a4e60855cb0537733e3fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80361d4b7287d635b4f6645621fb0beddcebd45bd6a4e60855cb0537733e3fad->enter($__internal_80361d4b7287d635b4f6645621fb0beddcebd45bd6a4e60855cb0537733e3fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d8b5c8bcf935e9321a647581d821c4ca7b2050729ee0cfe060f1a931866a06e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b5c8bcf935e9321a647581d821c4ca7b2050729ee0cfe060f1a931866a06e8->enter($__internal_d8b5c8bcf935e9321a647581d821c4ca7b2050729ee0cfe060f1a931866a06e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_80361d4b7287d635b4f6645621fb0beddcebd45bd6a4e60855cb0537733e3fad->leave($__internal_80361d4b7287d635b4f6645621fb0beddcebd45bd6a4e60855cb0537733e3fad_prof);

        
        $__internal_d8b5c8bcf935e9321a647581d821c4ca7b2050729ee0cfe060f1a931866a06e8->leave($__internal_d8b5c8bcf935e9321a647581d821c4ca7b2050729ee0cfe060f1a931866a06e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
