<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_8002ecfa5c881c687e5e5a646e3b6bc8c7527a9b8a3f7af20707a69ddb0874bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f551a7eb9f80acf589d4b17a631262a86d412534749fd8b508f0276b2b4d1e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f551a7eb9f80acf589d4b17a631262a86d412534749fd8b508f0276b2b4d1e72->enter($__internal_f551a7eb9f80acf589d4b17a631262a86d412534749fd8b508f0276b2b4d1e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_9c673e10c4e25ef268233a96c8f6da0c44ec6ec429ef10285f8a8ff639009051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c673e10c4e25ef268233a96c8f6da0c44ec6ec429ef10285f8a8ff639009051->enter($__internal_9c673e10c4e25ef268233a96c8f6da0c44ec6ec429ef10285f8a8ff639009051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f551a7eb9f80acf589d4b17a631262a86d412534749fd8b508f0276b2b4d1e72->leave($__internal_f551a7eb9f80acf589d4b17a631262a86d412534749fd8b508f0276b2b4d1e72_prof);

        
        $__internal_9c673e10c4e25ef268233a96c8f6da0c44ec6ec429ef10285f8a8ff639009051->leave($__internal_9c673e10c4e25ef268233a96c8f6da0c44ec6ec429ef10285f8a8ff639009051_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_976f82276de1d61fa33652bf6c9b1c90a6d65acea7b6ffdabd2bc6d934521d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976f82276de1d61fa33652bf6c9b1c90a6d65acea7b6ffdabd2bc6d934521d59->enter($__internal_976f82276de1d61fa33652bf6c9b1c90a6d65acea7b6ffdabd2bc6d934521d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_068fb9c0099abdf64549621457758a48115777674465c5138aa6e4fb573b4188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068fb9c0099abdf64549621457758a48115777674465c5138aa6e4fb573b4188->enter($__internal_068fb9c0099abdf64549621457758a48115777674465c5138aa6e4fb573b4188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_068fb9c0099abdf64549621457758a48115777674465c5138aa6e4fb573b4188->leave($__internal_068fb9c0099abdf64549621457758a48115777674465c5138aa6e4fb573b4188_prof);

        
        $__internal_976f82276de1d61fa33652bf6c9b1c90a6d65acea7b6ffdabd2bc6d934521d59->leave($__internal_976f82276de1d61fa33652bf6c9b1c90a6d65acea7b6ffdabd2bc6d934521d59_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c629e51b1f17a0a46ce54ea41f477f518ab6e8ebea1a11a0341f52a44abbf49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c629e51b1f17a0a46ce54ea41f477f518ab6e8ebea1a11a0341f52a44abbf49->enter($__internal_7c629e51b1f17a0a46ce54ea41f477f518ab6e8ebea1a11a0341f52a44abbf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7dab79935de3f93a9318cfa3f19cc7aba8a41e2fe47e221d8c8ed1e2dc665bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dab79935de3f93a9318cfa3f19cc7aba8a41e2fe47e221d8c8ed1e2dc665bfe->enter($__internal_7dab79935de3f93a9318cfa3f19cc7aba8a41e2fe47e221d8c8ed1e2dc665bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7dab79935de3f93a9318cfa3f19cc7aba8a41e2fe47e221d8c8ed1e2dc665bfe->leave($__internal_7dab79935de3f93a9318cfa3f19cc7aba8a41e2fe47e221d8c8ed1e2dc665bfe_prof);

        
        $__internal_7c629e51b1f17a0a46ce54ea41f477f518ab6e8ebea1a11a0341f52a44abbf49->leave($__internal_7c629e51b1f17a0a46ce54ea41f477f518ab6e8ebea1a11a0341f52a44abbf49_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
