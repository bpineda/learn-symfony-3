<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2876ca16d5c07b86cb194c73514e1def2ed1e7f254770bedd482dd06f0e666ab extends Twig_Template
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
        $__internal_70a5b2389f866f8a88ae28d2def6637f744a663516146ab57a335ffd2e19c5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a5b2389f866f8a88ae28d2def6637f744a663516146ab57a335ffd2e19c5b6->enter($__internal_70a5b2389f866f8a88ae28d2def6637f744a663516146ab57a335ffd2e19c5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_6d7c4096ef90d8a7e1d333e111e37e2b49685ae116e304e559b29bf33b9e4f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7c4096ef90d8a7e1d333e111e37e2b49685ae116e304e559b29bf33b9e4f44->enter($__internal_6d7c4096ef90d8a7e1d333e111e37e2b49685ae116e304e559b29bf33b9e4f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_70a5b2389f866f8a88ae28d2def6637f744a663516146ab57a335ffd2e19c5b6->leave($__internal_70a5b2389f866f8a88ae28d2def6637f744a663516146ab57a335ffd2e19c5b6_prof);

        
        $__internal_6d7c4096ef90d8a7e1d333e111e37e2b49685ae116e304e559b29bf33b9e4f44->leave($__internal_6d7c4096ef90d8a7e1d333e111e37e2b49685ae116e304e559b29bf33b9e4f44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
