<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_52ed7b09cc9bda4b07d6d85e453000b8f054f9ffb21a78f7e4a1516c0f793898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14581708c9ab8fdccb9a416f34836b4a396000c1b44c83c6af00a5efb76a8f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14581708c9ab8fdccb9a416f34836b4a396000c1b44c83c6af00a5efb76a8f01->enter($__internal_14581708c9ab8fdccb9a416f34836b4a396000c1b44c83c6af00a5efb76a8f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_deec0dc1c8fc09e614897d7a3262429e2b7344486c51a88249ceee08e2d50a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deec0dc1c8fc09e614897d7a3262429e2b7344486c51a88249ceee08e2d50a16->enter($__internal_deec0dc1c8fc09e614897d7a3262429e2b7344486c51a88249ceee08e2d50a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_14581708c9ab8fdccb9a416f34836b4a396000c1b44c83c6af00a5efb76a8f01->leave($__internal_14581708c9ab8fdccb9a416f34836b4a396000c1b44c83c6af00a5efb76a8f01_prof);

        
        $__internal_deec0dc1c8fc09e614897d7a3262429e2b7344486c51a88249ceee08e2d50a16->leave($__internal_deec0dc1c8fc09e614897d7a3262429e2b7344486c51a88249ceee08e2d50a16_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_48d10130d4ab5bfe7af5bd9b8445cc555cde77be4b6553ca14cbebd276ff14ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d10130d4ab5bfe7af5bd9b8445cc555cde77be4b6553ca14cbebd276ff14ec->enter($__internal_48d10130d4ab5bfe7af5bd9b8445cc555cde77be4b6553ca14cbebd276ff14ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_653eed31035554a423fb4988d23598ff155153872c7eb0109e226c50bd1719e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653eed31035554a423fb4988d23598ff155153872c7eb0109e226c50bd1719e0->enter($__internal_653eed31035554a423fb4988d23598ff155153872c7eb0109e226c50bd1719e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_653eed31035554a423fb4988d23598ff155153872c7eb0109e226c50bd1719e0->leave($__internal_653eed31035554a423fb4988d23598ff155153872c7eb0109e226c50bd1719e0_prof);

        
        $__internal_48d10130d4ab5bfe7af5bd9b8445cc555cde77be4b6553ca14cbebd276ff14ec->leave($__internal_48d10130d4ab5bfe7af5bd9b8445cc555cde77be4b6553ca14cbebd276ff14ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
