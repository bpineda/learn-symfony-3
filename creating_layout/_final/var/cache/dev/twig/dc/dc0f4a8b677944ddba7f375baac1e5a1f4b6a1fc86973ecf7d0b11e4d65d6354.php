<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d4feffea5edcccc51cda82847fdd83d69a97886366809a7595d4698e3f2af24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_872bf94a8a960993d6c673b818a614481f0b896f8235ac772e42d8417440445b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872bf94a8a960993d6c673b818a614481f0b896f8235ac772e42d8417440445b->enter($__internal_872bf94a8a960993d6c673b818a614481f0b896f8235ac772e42d8417440445b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ff359bdfd9d2d99a50c3969c9d8bede8ca127a9b2a3c34a4fa42f84d6b6221cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff359bdfd9d2d99a50c3969c9d8bede8ca127a9b2a3c34a4fa42f84d6b6221cc->enter($__internal_ff359bdfd9d2d99a50c3969c9d8bede8ca127a9b2a3c34a4fa42f84d6b6221cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872bf94a8a960993d6c673b818a614481f0b896f8235ac772e42d8417440445b->leave($__internal_872bf94a8a960993d6c673b818a614481f0b896f8235ac772e42d8417440445b_prof);

        
        $__internal_ff359bdfd9d2d99a50c3969c9d8bede8ca127a9b2a3c34a4fa42f84d6b6221cc->leave($__internal_ff359bdfd9d2d99a50c3969c9d8bede8ca127a9b2a3c34a4fa42f84d6b6221cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e212dd82c1ff79c8ca1a86313f0d8b683ed75fcf6eabb69d3313b318825d8a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e212dd82c1ff79c8ca1a86313f0d8b683ed75fcf6eabb69d3313b318825d8a6a->enter($__internal_e212dd82c1ff79c8ca1a86313f0d8b683ed75fcf6eabb69d3313b318825d8a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6fd52bb08fadd2c7898966641b25f1f15d6675cd8bd80f8a118b24a62e368931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd52bb08fadd2c7898966641b25f1f15d6675cd8bd80f8a118b24a62e368931->enter($__internal_6fd52bb08fadd2c7898966641b25f1f15d6675cd8bd80f8a118b24a62e368931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6fd52bb08fadd2c7898966641b25f1f15d6675cd8bd80f8a118b24a62e368931->leave($__internal_6fd52bb08fadd2c7898966641b25f1f15d6675cd8bd80f8a118b24a62e368931_prof);

        
        $__internal_e212dd82c1ff79c8ca1a86313f0d8b683ed75fcf6eabb69d3313b318825d8a6a->leave($__internal_e212dd82c1ff79c8ca1a86313f0d8b683ed75fcf6eabb69d3313b318825d8a6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7dfa7255529c20a3fee55c9e81b4cf91629fbf4a584527427560cb465f7b32dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfa7255529c20a3fee55c9e81b4cf91629fbf4a584527427560cb465f7b32dc->enter($__internal_7dfa7255529c20a3fee55c9e81b4cf91629fbf4a584527427560cb465f7b32dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_43de00f639e2703d38471bf4598faf21b2e977a7d6e31e7dd9fa319153bbf48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43de00f639e2703d38471bf4598faf21b2e977a7d6e31e7dd9fa319153bbf48d->enter($__internal_43de00f639e2703d38471bf4598faf21b2e977a7d6e31e7dd9fa319153bbf48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_43de00f639e2703d38471bf4598faf21b2e977a7d6e31e7dd9fa319153bbf48d->leave($__internal_43de00f639e2703d38471bf4598faf21b2e977a7d6e31e7dd9fa319153bbf48d_prof);

        
        $__internal_7dfa7255529c20a3fee55c9e81b4cf91629fbf4a584527427560cb465f7b32dc->leave($__internal_7dfa7255529c20a3fee55c9e81b4cf91629fbf4a584527427560cb465f7b32dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c09c802a855521cb550307e9de19bba29dbfc9ceff23f649c7377772b6c2f40d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09c802a855521cb550307e9de19bba29dbfc9ceff23f649c7377772b6c2f40d->enter($__internal_c09c802a855521cb550307e9de19bba29dbfc9ceff23f649c7377772b6c2f40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5b1a3c74aad221f605e60a8cfdc5b08d51046abc68ae974dfe08a5e0accb44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b1a3c74aad221f605e60a8cfdc5b08d51046abc68ae974dfe08a5e0accb44f->enter($__internal_b5b1a3c74aad221f605e60a8cfdc5b08d51046abc68ae974dfe08a5e0accb44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b5b1a3c74aad221f605e60a8cfdc5b08d51046abc68ae974dfe08a5e0accb44f->leave($__internal_b5b1a3c74aad221f605e60a8cfdc5b08d51046abc68ae974dfe08a5e0accb44f_prof);

        
        $__internal_c09c802a855521cb550307e9de19bba29dbfc9ceff23f649c7377772b6c2f40d->leave($__internal_c09c802a855521cb550307e9de19bba29dbfc9ceff23f649c7377772b6c2f40d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
