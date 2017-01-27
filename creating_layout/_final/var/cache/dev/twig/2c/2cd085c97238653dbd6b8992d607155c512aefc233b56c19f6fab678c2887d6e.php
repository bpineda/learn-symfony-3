<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_111cad5bc22582befb62fbb9e2be65f365aeb260496cf9bc6a6f79c66b67624f extends Twig_Template
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
        $__internal_6842629ebde5a300fc2df4a24102fc6e0077afd5e38c311446eb705205d68bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6842629ebde5a300fc2df4a24102fc6e0077afd5e38c311446eb705205d68bfd->enter($__internal_6842629ebde5a300fc2df4a24102fc6e0077afd5e38c311446eb705205d68bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_2a082551e52ea8698b5429c95f4f89213d13231c14d322a9d45ad34fae3c235e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a082551e52ea8698b5429c95f4f89213d13231c14d322a9d45ad34fae3c235e->enter($__internal_2a082551e52ea8698b5429c95f4f89213d13231c14d322a9d45ad34fae3c235e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6842629ebde5a300fc2df4a24102fc6e0077afd5e38c311446eb705205d68bfd->leave($__internal_6842629ebde5a300fc2df4a24102fc6e0077afd5e38c311446eb705205d68bfd_prof);

        
        $__internal_2a082551e52ea8698b5429c95f4f89213d13231c14d322a9d45ad34fae3c235e->leave($__internal_2a082551e52ea8698b5429c95f4f89213d13231c14d322a9d45ad34fae3c235e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c61832496c213fb3a93bb725d75d97dbe99d3c3a4bdb9a80e069d3a2787d099e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61832496c213fb3a93bb725d75d97dbe99d3c3a4bdb9a80e069d3a2787d099e->enter($__internal_c61832496c213fb3a93bb725d75d97dbe99d3c3a4bdb9a80e069d3a2787d099e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_32f69f03f2888628f5b41cb8858352313933edeb61501e15a1c899a53649b6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f69f03f2888628f5b41cb8858352313933edeb61501e15a1c899a53649b6bf->enter($__internal_32f69f03f2888628f5b41cb8858352313933edeb61501e15a1c899a53649b6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_32f69f03f2888628f5b41cb8858352313933edeb61501e15a1c899a53649b6bf->leave($__internal_32f69f03f2888628f5b41cb8858352313933edeb61501e15a1c899a53649b6bf_prof);

        
        $__internal_c61832496c213fb3a93bb725d75d97dbe99d3c3a4bdb9a80e069d3a2787d099e->leave($__internal_c61832496c213fb3a93bb725d75d97dbe99d3c3a4bdb9a80e069d3a2787d099e_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
