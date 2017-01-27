<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5c9ea249044f0c04031d0d546035742f2da0baa58e900556385475f88ff8646c extends Twig_Template
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
        $__internal_dc95df4454e92b93b424b47768c1d6d1ab151a2adfd51fc975d78339fee3f100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc95df4454e92b93b424b47768c1d6d1ab151a2adfd51fc975d78339fee3f100->enter($__internal_dc95df4454e92b93b424b47768c1d6d1ab151a2adfd51fc975d78339fee3f100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1da0225eeb9d78a6165d0fa2c647d84ef8a6af65902eab270e87e75401758f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da0225eeb9d78a6165d0fa2c647d84ef8a6af65902eab270e87e75401758f47->enter($__internal_1da0225eeb9d78a6165d0fa2c647d84ef8a6af65902eab270e87e75401758f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_dc95df4454e92b93b424b47768c1d6d1ab151a2adfd51fc975d78339fee3f100->leave($__internal_dc95df4454e92b93b424b47768c1d6d1ab151a2adfd51fc975d78339fee3f100_prof);

        
        $__internal_1da0225eeb9d78a6165d0fa2c647d84ef8a6af65902eab270e87e75401758f47->leave($__internal_1da0225eeb9d78a6165d0fa2c647d84ef8a6af65902eab270e87e75401758f47_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
