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
        $__internal_4adfeea99a8b75f580713088b3660af1a26ae6bfa1f138b46166bc75a95ff4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4adfeea99a8b75f580713088b3660af1a26ae6bfa1f138b46166bc75a95ff4b3->enter($__internal_4adfeea99a8b75f580713088b3660af1a26ae6bfa1f138b46166bc75a95ff4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_af9a5e33868d364fe10eb25b8d24c26b8947c3ee88acd85c6738fa409310b33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9a5e33868d364fe10eb25b8d24c26b8947c3ee88acd85c6738fa409310b33e->enter($__internal_af9a5e33868d364fe10eb25b8d24c26b8947c3ee88acd85c6738fa409310b33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4adfeea99a8b75f580713088b3660af1a26ae6bfa1f138b46166bc75a95ff4b3->leave($__internal_4adfeea99a8b75f580713088b3660af1a26ae6bfa1f138b46166bc75a95ff4b3_prof);

        
        $__internal_af9a5e33868d364fe10eb25b8d24c26b8947c3ee88acd85c6738fa409310b33e->leave($__internal_af9a5e33868d364fe10eb25b8d24c26b8947c3ee88acd85c6738fa409310b33e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_586852088b5d6be20be6ebcfe178370d23b8d3a73bdc3d650166c0af2748c7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586852088b5d6be20be6ebcfe178370d23b8d3a73bdc3d650166c0af2748c7c1->enter($__internal_586852088b5d6be20be6ebcfe178370d23b8d3a73bdc3d650166c0af2748c7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c98116e6e4589addf5f9fc32071f4de3b04f2711678c5b070e7a3d458887e21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98116e6e4589addf5f9fc32071f4de3b04f2711678c5b070e7a3d458887e21f->enter($__internal_c98116e6e4589addf5f9fc32071f4de3b04f2711678c5b070e7a3d458887e21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c98116e6e4589addf5f9fc32071f4de3b04f2711678c5b070e7a3d458887e21f->leave($__internal_c98116e6e4589addf5f9fc32071f4de3b04f2711678c5b070e7a3d458887e21f_prof);

        
        $__internal_586852088b5d6be20be6ebcfe178370d23b8d3a73bdc3d650166c0af2748c7c1->leave($__internal_586852088b5d6be20be6ebcfe178370d23b8d3a73bdc3d650166c0af2748c7c1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee37ffba28e82108c13cc2ec31177b531786e8bab93c0b53a729892e84e3c59f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee37ffba28e82108c13cc2ec31177b531786e8bab93c0b53a729892e84e3c59f->enter($__internal_ee37ffba28e82108c13cc2ec31177b531786e8bab93c0b53a729892e84e3c59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0794e62e05c2690ca7693efd17361829a29f7f8435b0191a1e1936f7cdc99a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0794e62e05c2690ca7693efd17361829a29f7f8435b0191a1e1936f7cdc99a1->enter($__internal_c0794e62e05c2690ca7693efd17361829a29f7f8435b0191a1e1936f7cdc99a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0794e62e05c2690ca7693efd17361829a29f7f8435b0191a1e1936f7cdc99a1->leave($__internal_c0794e62e05c2690ca7693efd17361829a29f7f8435b0191a1e1936f7cdc99a1_prof);

        
        $__internal_ee37ffba28e82108c13cc2ec31177b531786e8bab93c0b53a729892e84e3c59f->leave($__internal_ee37ffba28e82108c13cc2ec31177b531786e8bab93c0b53a729892e84e3c59f_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
