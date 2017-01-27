<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_d067c62a5bbc1ec14fd02d391d467c703b148e2eeeec4f1145815825b1a8a1fb extends Twig_Template
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
        $__internal_10454f3f3d43815ede56229aaa8e1c6e11bd54c973b56a346f0c9a3bb166d109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10454f3f3d43815ede56229aaa8e1c6e11bd54c973b56a346f0c9a3bb166d109->enter($__internal_10454f3f3d43815ede56229aaa8e1c6e11bd54c973b56a346f0c9a3bb166d109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9ccd27be3e07e896589e4f9c95798bf1c4467b474f25deec59caf3ae78fac9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccd27be3e07e896589e4f9c95798bf1c4467b474f25deec59caf3ae78fac9cd->enter($__internal_9ccd27be3e07e896589e4f9c95798bf1c4467b474f25deec59caf3ae78fac9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10454f3f3d43815ede56229aaa8e1c6e11bd54c973b56a346f0c9a3bb166d109->leave($__internal_10454f3f3d43815ede56229aaa8e1c6e11bd54c973b56a346f0c9a3bb166d109_prof);

        
        $__internal_9ccd27be3e07e896589e4f9c95798bf1c4467b474f25deec59caf3ae78fac9cd->leave($__internal_9ccd27be3e07e896589e4f9c95798bf1c4467b474f25deec59caf3ae78fac9cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6fbc7943f89e032aebea6bc7f9a952f4d491ed9ae36efa2e32a33c10794d14b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbc7943f89e032aebea6bc7f9a952f4d491ed9ae36efa2e32a33c10794d14b0->enter($__internal_6fbc7943f89e032aebea6bc7f9a952f4d491ed9ae36efa2e32a33c10794d14b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_07882c1384542334047386bf284b34eb8d54225de6b5e14089fe937f31d644b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07882c1384542334047386bf284b34eb8d54225de6b5e14089fe937f31d644b0->enter($__internal_07882c1384542334047386bf284b34eb8d54225de6b5e14089fe937f31d644b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_07882c1384542334047386bf284b34eb8d54225de6b5e14089fe937f31d644b0->leave($__internal_07882c1384542334047386bf284b34eb8d54225de6b5e14089fe937f31d644b0_prof);

        
        $__internal_6fbc7943f89e032aebea6bc7f9a952f4d491ed9ae36efa2e32a33c10794d14b0->leave($__internal_6fbc7943f89e032aebea6bc7f9a952f4d491ed9ae36efa2e32a33c10794d14b0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_57cbd390b8e03f5b4b3be6156adaa7d04cb86be40a78df26431e7c09115d1d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cbd390b8e03f5b4b3be6156adaa7d04cb86be40a78df26431e7c09115d1d76->enter($__internal_57cbd390b8e03f5b4b3be6156adaa7d04cb86be40a78df26431e7c09115d1d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5acbb888bba5b83dcee5b6002ccf093db850425a6d82908586681fef7bc71f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acbb888bba5b83dcee5b6002ccf093db850425a6d82908586681fef7bc71f6d->enter($__internal_5acbb888bba5b83dcee5b6002ccf093db850425a6d82908586681fef7bc71f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5acbb888bba5b83dcee5b6002ccf093db850425a6d82908586681fef7bc71f6d->leave($__internal_5acbb888bba5b83dcee5b6002ccf093db850425a6d82908586681fef7bc71f6d_prof);

        
        $__internal_57cbd390b8e03f5b4b3be6156adaa7d04cb86be40a78df26431e7c09115d1d76->leave($__internal_57cbd390b8e03f5b4b3be6156adaa7d04cb86be40a78df26431e7c09115d1d76_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
