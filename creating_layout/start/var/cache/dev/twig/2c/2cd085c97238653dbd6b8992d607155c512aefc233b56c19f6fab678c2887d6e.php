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
        $__internal_54d46f5845bf5942f1c755001f82b38e8da379febf00c0d3a3f5b68934c00aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d46f5845bf5942f1c755001f82b38e8da379febf00c0d3a3f5b68934c00aa7->enter($__internal_54d46f5845bf5942f1c755001f82b38e8da379febf00c0d3a3f5b68934c00aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a6a0b561e6f4caa5ae4cd639ab1e846ea8dacdaa4d50f188fe0590d611772fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a0b561e6f4caa5ae4cd639ab1e846ea8dacdaa4d50f188fe0590d611772fb4->enter($__internal_a6a0b561e6f4caa5ae4cd639ab1e846ea8dacdaa4d50f188fe0590d611772fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_54d46f5845bf5942f1c755001f82b38e8da379febf00c0d3a3f5b68934c00aa7->leave($__internal_54d46f5845bf5942f1c755001f82b38e8da379febf00c0d3a3f5b68934c00aa7_prof);

        
        $__internal_a6a0b561e6f4caa5ae4cd639ab1e846ea8dacdaa4d50f188fe0590d611772fb4->leave($__internal_a6a0b561e6f4caa5ae4cd639ab1e846ea8dacdaa4d50f188fe0590d611772fb4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8305e50c7e6deec1c9d99dc84fb5f2fa379616c915e0f78dfe4ed880cb722ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8305e50c7e6deec1c9d99dc84fb5f2fa379616c915e0f78dfe4ed880cb722ca4->enter($__internal_8305e50c7e6deec1c9d99dc84fb5f2fa379616c915e0f78dfe4ed880cb722ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4638b804450158623dcf70ea9b916c23411d6b58089428a57440a0589bb13ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4638b804450158623dcf70ea9b916c23411d6b58089428a57440a0589bb13ac1->enter($__internal_4638b804450158623dcf70ea9b916c23411d6b58089428a57440a0589bb13ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4638b804450158623dcf70ea9b916c23411d6b58089428a57440a0589bb13ac1->leave($__internal_4638b804450158623dcf70ea9b916c23411d6b58089428a57440a0589bb13ac1_prof);

        
        $__internal_8305e50c7e6deec1c9d99dc84fb5f2fa379616c915e0f78dfe4ed880cb722ca4->leave($__internal_8305e50c7e6deec1c9d99dc84fb5f2fa379616c915e0f78dfe4ed880cb722ca4_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
