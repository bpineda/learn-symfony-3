<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1014ffb02c9983344996f6b1371c2163a75e9013959f3b811a136441d8153f72 extends Twig_Template
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
        $__internal_b0e9006684a0cb5e11e9c1c1f2ad345cb593f849d3ded2be1aa5308d8b2e0db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e9006684a0cb5e11e9c1c1f2ad345cb593f849d3ded2be1aa5308d8b2e0db2->enter($__internal_b0e9006684a0cb5e11e9c1c1f2ad345cb593f849d3ded2be1aa5308d8b2e0db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_cae234660fc4917e1773d4290d9ec14ce9b4e5d391278a6651512b561d545ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae234660fc4917e1773d4290d9ec14ce9b4e5d391278a6651512b561d545ff9->enter($__internal_cae234660fc4917e1773d4290d9ec14ce9b4e5d391278a6651512b561d545ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b0e9006684a0cb5e11e9c1c1f2ad345cb593f849d3ded2be1aa5308d8b2e0db2->leave($__internal_b0e9006684a0cb5e11e9c1c1f2ad345cb593f849d3ded2be1aa5308d8b2e0db2_prof);

        
        $__internal_cae234660fc4917e1773d4290d9ec14ce9b4e5d391278a6651512b561d545ff9->leave($__internal_cae234660fc4917e1773d4290d9ec14ce9b4e5d391278a6651512b561d545ff9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
