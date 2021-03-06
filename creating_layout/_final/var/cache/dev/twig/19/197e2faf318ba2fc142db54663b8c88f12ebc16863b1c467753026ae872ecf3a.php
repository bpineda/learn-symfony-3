<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_44bf8ebaa60aa3923717b0613d579fb96e739e4724e4bed73bdd8897a5366928 extends Twig_Template
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
        $__internal_5159076b8964a5720609b0a0b81af9cabb3752636d3c007fc94c6272fc6c35f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5159076b8964a5720609b0a0b81af9cabb3752636d3c007fc94c6272fc6c35f3->enter($__internal_5159076b8964a5720609b0a0b81af9cabb3752636d3c007fc94c6272fc6c35f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_28cb62f7affcb5bb1b86b553d58a7687da81e9ce161d0a65a77f23c7c3981999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28cb62f7affcb5bb1b86b553d58a7687da81e9ce161d0a65a77f23c7c3981999->enter($__internal_28cb62f7affcb5bb1b86b553d58a7687da81e9ce161d0a65a77f23c7c3981999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5159076b8964a5720609b0a0b81af9cabb3752636d3c007fc94c6272fc6c35f3->leave($__internal_5159076b8964a5720609b0a0b81af9cabb3752636d3c007fc94c6272fc6c35f3_prof);

        
        $__internal_28cb62f7affcb5bb1b86b553d58a7687da81e9ce161d0a65a77f23c7c3981999->leave($__internal_28cb62f7affcb5bb1b86b553d58a7687da81e9ce161d0a65a77f23c7c3981999_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d9f73f083ee187e9fbcb8707ffd36a3d5c26243707fae8e471f536a4a7fd45f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f73f083ee187e9fbcb8707ffd36a3d5c26243707fae8e471f536a4a7fd45f3->enter($__internal_d9f73f083ee187e9fbcb8707ffd36a3d5c26243707fae8e471f536a4a7fd45f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_51250c0b5eefc808dbdda1241c9210ef9399ab045d26eee384dd52410f4e517c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51250c0b5eefc808dbdda1241c9210ef9399ab045d26eee384dd52410f4e517c->enter($__internal_51250c0b5eefc808dbdda1241c9210ef9399ab045d26eee384dd52410f4e517c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_51250c0b5eefc808dbdda1241c9210ef9399ab045d26eee384dd52410f4e517c->leave($__internal_51250c0b5eefc808dbdda1241c9210ef9399ab045d26eee384dd52410f4e517c_prof);

        
        $__internal_d9f73f083ee187e9fbcb8707ffd36a3d5c26243707fae8e471f536a4a7fd45f3->leave($__internal_d9f73f083ee187e9fbcb8707ffd36a3d5c26243707fae8e471f536a4a7fd45f3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_418bd59b8c3ff03f3077e5dd64e9220701c5cb21be3a80b59f68e25feb6e1102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418bd59b8c3ff03f3077e5dd64e9220701c5cb21be3a80b59f68e25feb6e1102->enter($__internal_418bd59b8c3ff03f3077e5dd64e9220701c5cb21be3a80b59f68e25feb6e1102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43bb579c2cc443e25df906b7ec8e76be833b011dca7c9c393934393a95eb9edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bb579c2cc443e25df906b7ec8e76be833b011dca7c9c393934393a95eb9edc->enter($__internal_43bb579c2cc443e25df906b7ec8e76be833b011dca7c9c393934393a95eb9edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_43bb579c2cc443e25df906b7ec8e76be833b011dca7c9c393934393a95eb9edc->leave($__internal_43bb579c2cc443e25df906b7ec8e76be833b011dca7c9c393934393a95eb9edc_prof);

        
        $__internal_418bd59b8c3ff03f3077e5dd64e9220701c5cb21be3a80b59f68e25feb6e1102->leave($__internal_418bd59b8c3ff03f3077e5dd64e9220701c5cb21be3a80b59f68e25feb6e1102_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
