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
        $__internal_a40d37fe37772ae8b173cbc134833ed8570dfc028701be0275810e7c6ac199f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40d37fe37772ae8b173cbc134833ed8570dfc028701be0275810e7c6ac199f6->enter($__internal_a40d37fe37772ae8b173cbc134833ed8570dfc028701be0275810e7c6ac199f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_4c794c4f07717aa169fff8949a613986a4eae63e16b2ff13657c3fc75dafb489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c794c4f07717aa169fff8949a613986a4eae63e16b2ff13657c3fc75dafb489->enter($__internal_4c794c4f07717aa169fff8949a613986a4eae63e16b2ff13657c3fc75dafb489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a40d37fe37772ae8b173cbc134833ed8570dfc028701be0275810e7c6ac199f6->leave($__internal_a40d37fe37772ae8b173cbc134833ed8570dfc028701be0275810e7c6ac199f6_prof);

        
        $__internal_4c794c4f07717aa169fff8949a613986a4eae63e16b2ff13657c3fc75dafb489->leave($__internal_4c794c4f07717aa169fff8949a613986a4eae63e16b2ff13657c3fc75dafb489_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6d304a3c7cef376ab8f9d8676d4ea5d2bbf7db5d77c44ea38023eeb2ca9675fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d304a3c7cef376ab8f9d8676d4ea5d2bbf7db5d77c44ea38023eeb2ca9675fb->enter($__internal_6d304a3c7cef376ab8f9d8676d4ea5d2bbf7db5d77c44ea38023eeb2ca9675fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_206f8a7976a4b4ceea66e69ac9c38a68155740da2f178290f74fae166344f8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206f8a7976a4b4ceea66e69ac9c38a68155740da2f178290f74fae166344f8af->enter($__internal_206f8a7976a4b4ceea66e69ac9c38a68155740da2f178290f74fae166344f8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_206f8a7976a4b4ceea66e69ac9c38a68155740da2f178290f74fae166344f8af->leave($__internal_206f8a7976a4b4ceea66e69ac9c38a68155740da2f178290f74fae166344f8af_prof);

        
        $__internal_6d304a3c7cef376ab8f9d8676d4ea5d2bbf7db5d77c44ea38023eeb2ca9675fb->leave($__internal_6d304a3c7cef376ab8f9d8676d4ea5d2bbf7db5d77c44ea38023eeb2ca9675fb_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ecdb35ddda3c263fbb0b714de2ca8e7af6a6e827c256589f8ad34fc10befb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ecdb35ddda3c263fbb0b714de2ca8e7af6a6e827c256589f8ad34fc10befb9d->enter($__internal_9ecdb35ddda3c263fbb0b714de2ca8e7af6a6e827c256589f8ad34fc10befb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1144a3211a8a012b49f648ad19c59039896a71a1d3ab04b102d71eb2d91cef34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1144a3211a8a012b49f648ad19c59039896a71a1d3ab04b102d71eb2d91cef34->enter($__internal_1144a3211a8a012b49f648ad19c59039896a71a1d3ab04b102d71eb2d91cef34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1144a3211a8a012b49f648ad19c59039896a71a1d3ab04b102d71eb2d91cef34->leave($__internal_1144a3211a8a012b49f648ad19c59039896a71a1d3ab04b102d71eb2d91cef34_prof);

        
        $__internal_9ecdb35ddda3c263fbb0b714de2ca8e7af6a6e827c256589f8ad34fc10befb9d->leave($__internal_9ecdb35ddda3c263fbb0b714de2ca8e7af6a6e827c256589f8ad34fc10befb9d_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
