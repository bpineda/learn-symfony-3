<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7a6fdc327dc8747a13a5413a15b34c103ab647e65b3b9f71cd948e3de5a6b772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02da014a7ac1d9a445f1db255814402ae12d7a8dbfe9344c60d7415c4d9c8e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02da014a7ac1d9a445f1db255814402ae12d7a8dbfe9344c60d7415c4d9c8e50->enter($__internal_02da014a7ac1d9a445f1db255814402ae12d7a8dbfe9344c60d7415c4d9c8e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_996f9dabb0490cf1458f61467af01e6a7e083c18c283dcae2693220346efe46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996f9dabb0490cf1458f61467af01e6a7e083c18c283dcae2693220346efe46f->enter($__internal_996f9dabb0490cf1458f61467af01e6a7e083c18c283dcae2693220346efe46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02da014a7ac1d9a445f1db255814402ae12d7a8dbfe9344c60d7415c4d9c8e50->leave($__internal_02da014a7ac1d9a445f1db255814402ae12d7a8dbfe9344c60d7415c4d9c8e50_prof);

        
        $__internal_996f9dabb0490cf1458f61467af01e6a7e083c18c283dcae2693220346efe46f->leave($__internal_996f9dabb0490cf1458f61467af01e6a7e083c18c283dcae2693220346efe46f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_659a2baedc2a70b86b0a642ebb927f16119df4d2cecef1944a6d9aca66a2c14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659a2baedc2a70b86b0a642ebb927f16119df4d2cecef1944a6d9aca66a2c14d->enter($__internal_659a2baedc2a70b86b0a642ebb927f16119df4d2cecef1944a6d9aca66a2c14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0654642c638d368a51548ceb306b458a9fc7b18023e04f9196268ced48b3a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0654642c638d368a51548ceb306b458a9fc7b18023e04f9196268ced48b3a35->enter($__internal_a0654642c638d368a51548ceb306b458a9fc7b18023e04f9196268ced48b3a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a0654642c638d368a51548ceb306b458a9fc7b18023e04f9196268ced48b3a35->leave($__internal_a0654642c638d368a51548ceb306b458a9fc7b18023e04f9196268ced48b3a35_prof);

        
        $__internal_659a2baedc2a70b86b0a642ebb927f16119df4d2cecef1944a6d9aca66a2c14d->leave($__internal_659a2baedc2a70b86b0a642ebb927f16119df4d2cecef1944a6d9aca66a2c14d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8c88f620d77c4e8caef6f31a0d0401b6ca7fe2ae129d5248d19403362933609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c88f620d77c4e8caef6f31a0d0401b6ca7fe2ae129d5248d19403362933609->enter($__internal_e8c88f620d77c4e8caef6f31a0d0401b6ca7fe2ae129d5248d19403362933609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a4583e867aa7ff28a7dab25c81bb7abe6862b0f8f3e9ae025e19806c56ca68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4583e867aa7ff28a7dab25c81bb7abe6862b0f8f3e9ae025e19806c56ca68c->enter($__internal_5a4583e867aa7ff28a7dab25c81bb7abe6862b0f8f3e9ae025e19806c56ca68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5a4583e867aa7ff28a7dab25c81bb7abe6862b0f8f3e9ae025e19806c56ca68c->leave($__internal_5a4583e867aa7ff28a7dab25c81bb7abe6862b0f8f3e9ae025e19806c56ca68c_prof);

        
        $__internal_e8c88f620d77c4e8caef6f31a0d0401b6ca7fe2ae129d5248d19403362933609->leave($__internal_e8c88f620d77c4e8caef6f31a0d0401b6ca7fe2ae129d5248d19403362933609_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
