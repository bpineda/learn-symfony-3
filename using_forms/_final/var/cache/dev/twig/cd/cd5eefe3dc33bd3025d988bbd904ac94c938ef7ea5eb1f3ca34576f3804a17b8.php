<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_db569b3f96c5c2488946217496f960117d133363ab56acf6bdd35d230ce8f6b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_602bdcfe4dcbdbb2a7b3e1822cfa036e6775c9de6ae51fbfca2fecaa4a1ca69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602bdcfe4dcbdbb2a7b3e1822cfa036e6775c9de6ae51fbfca2fecaa4a1ca69e->enter($__internal_602bdcfe4dcbdbb2a7b3e1822cfa036e6775c9de6ae51fbfca2fecaa4a1ca69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_be4951afaeed9b607304f8321fe6ea8d7cda1b07715f04a0a6240ac279f024ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4951afaeed9b607304f8321fe6ea8d7cda1b07715f04a0a6240ac279f024ac->enter($__internal_be4951afaeed9b607304f8321fe6ea8d7cda1b07715f04a0a6240ac279f024ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_602bdcfe4dcbdbb2a7b3e1822cfa036e6775c9de6ae51fbfca2fecaa4a1ca69e->leave($__internal_602bdcfe4dcbdbb2a7b3e1822cfa036e6775c9de6ae51fbfca2fecaa4a1ca69e_prof);

        
        $__internal_be4951afaeed9b607304f8321fe6ea8d7cda1b07715f04a0a6240ac279f024ac->leave($__internal_be4951afaeed9b607304f8321fe6ea8d7cda1b07715f04a0a6240ac279f024ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b140840eea0ab8be8a96768233b642ef246ee8a755d6ec94792f8808d23c929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b140840eea0ab8be8a96768233b642ef246ee8a755d6ec94792f8808d23c929->enter($__internal_4b140840eea0ab8be8a96768233b642ef246ee8a755d6ec94792f8808d23c929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c403d40675e636a65fcc87edfbfe93709067920b57e38631f8ca65659fb8b0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c403d40675e636a65fcc87edfbfe93709067920b57e38631f8ca65659fb8b0ad->enter($__internal_c403d40675e636a65fcc87edfbfe93709067920b57e38631f8ca65659fb8b0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c403d40675e636a65fcc87edfbfe93709067920b57e38631f8ca65659fb8b0ad->leave($__internal_c403d40675e636a65fcc87edfbfe93709067920b57e38631f8ca65659fb8b0ad_prof);

        
        $__internal_4b140840eea0ab8be8a96768233b642ef246ee8a755d6ec94792f8808d23c929->leave($__internal_4b140840eea0ab8be8a96768233b642ef246ee8a755d6ec94792f8808d23c929_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c9a2fa84d0e23d72387e23c8cd1531ea9064c79f1147142e8e9f8c704ffa8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9a2fa84d0e23d72387e23c8cd1531ea9064c79f1147142e8e9f8c704ffa8b7->enter($__internal_1c9a2fa84d0e23d72387e23c8cd1531ea9064c79f1147142e8e9f8c704ffa8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba08b7c05261e7cb51d85684b382e5a90c10b3f19e2add2f79960674edb32e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba08b7c05261e7cb51d85684b382e5a90c10b3f19e2add2f79960674edb32e43->enter($__internal_ba08b7c05261e7cb51d85684b382e5a90c10b3f19e2add2f79960674edb32e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ba08b7c05261e7cb51d85684b382e5a90c10b3f19e2add2f79960674edb32e43->leave($__internal_ba08b7c05261e7cb51d85684b382e5a90c10b3f19e2add2f79960674edb32e43_prof);

        
        $__internal_1c9a2fa84d0e23d72387e23c8cd1531ea9064c79f1147142e8e9f8c704ffa8b7->leave($__internal_1c9a2fa84d0e23d72387e23c8cd1531ea9064c79f1147142e8e9f8c704ffa8b7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/using_forms/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
