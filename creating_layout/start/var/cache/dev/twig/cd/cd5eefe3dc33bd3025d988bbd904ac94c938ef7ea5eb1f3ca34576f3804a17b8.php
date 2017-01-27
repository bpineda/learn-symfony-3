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
        $__internal_9884594d6445e3f864ab5da4e6dd6ec80de0d7a2cdacf7cc781d754ec7fef972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9884594d6445e3f864ab5da4e6dd6ec80de0d7a2cdacf7cc781d754ec7fef972->enter($__internal_9884594d6445e3f864ab5da4e6dd6ec80de0d7a2cdacf7cc781d754ec7fef972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c361a727288b4eff8ca6fbdc5161add6a406e89840706589cb222814ae8a3dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c361a727288b4eff8ca6fbdc5161add6a406e89840706589cb222814ae8a3dcc->enter($__internal_c361a727288b4eff8ca6fbdc5161add6a406e89840706589cb222814ae8a3dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9884594d6445e3f864ab5da4e6dd6ec80de0d7a2cdacf7cc781d754ec7fef972->leave($__internal_9884594d6445e3f864ab5da4e6dd6ec80de0d7a2cdacf7cc781d754ec7fef972_prof);

        
        $__internal_c361a727288b4eff8ca6fbdc5161add6a406e89840706589cb222814ae8a3dcc->leave($__internal_c361a727288b4eff8ca6fbdc5161add6a406e89840706589cb222814ae8a3dcc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_378e8fd4ecc2ae1d8448b6629fada5c93c13bd97244d3d758b95a9f50adee4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378e8fd4ecc2ae1d8448b6629fada5c93c13bd97244d3d758b95a9f50adee4ec->enter($__internal_378e8fd4ecc2ae1d8448b6629fada5c93c13bd97244d3d758b95a9f50adee4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98e94878f7238fdf61028311598f15de4610a3e7693823acaee1a7414f19d7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e94878f7238fdf61028311598f15de4610a3e7693823acaee1a7414f19d7cf->enter($__internal_98e94878f7238fdf61028311598f15de4610a3e7693823acaee1a7414f19d7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_98e94878f7238fdf61028311598f15de4610a3e7693823acaee1a7414f19d7cf->leave($__internal_98e94878f7238fdf61028311598f15de4610a3e7693823acaee1a7414f19d7cf_prof);

        
        $__internal_378e8fd4ecc2ae1d8448b6629fada5c93c13bd97244d3d758b95a9f50adee4ec->leave($__internal_378e8fd4ecc2ae1d8448b6629fada5c93c13bd97244d3d758b95a9f50adee4ec_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f70884048362020f243190e78dd98211953e0f8a274dbec5c6df373335497adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70884048362020f243190e78dd98211953e0f8a274dbec5c6df373335497adc->enter($__internal_f70884048362020f243190e78dd98211953e0f8a274dbec5c6df373335497adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1454c00789c1d14632d6c70f29ebfa6fb68b946aeb84d7318c5739fbe739350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1454c00789c1d14632d6c70f29ebfa6fb68b946aeb84d7318c5739fbe739350->enter($__internal_c1454c00789c1d14632d6c70f29ebfa6fb68b946aeb84d7318c5739fbe739350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c1454c00789c1d14632d6c70f29ebfa6fb68b946aeb84d7318c5739fbe739350->leave($__internal_c1454c00789c1d14632d6c70f29ebfa6fb68b946aeb84d7318c5739fbe739350_prof);

        
        $__internal_f70884048362020f243190e78dd98211953e0f8a274dbec5c6df373335497adc->leave($__internal_f70884048362020f243190e78dd98211953e0f8a274dbec5c6df373335497adc_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
