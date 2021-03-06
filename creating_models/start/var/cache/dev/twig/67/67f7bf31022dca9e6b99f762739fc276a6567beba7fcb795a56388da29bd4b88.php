<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5b9da9a7cafeae9291cbf46a6e1d74f08e0ca3a25966a06b9b8f8321d05763e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e72c8f494c128a867fea66b0da4f7c1e20be6df2c8c782eaf05d0b47d85bcb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72c8f494c128a867fea66b0da4f7c1e20be6df2c8c782eaf05d0b47d85bcb10->enter($__internal_e72c8f494c128a867fea66b0da4f7c1e20be6df2c8c782eaf05d0b47d85bcb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_95f57dc265f0c7aa737203c33b4a36458e8b81af52e8274a5ebce175afb2ee7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f57dc265f0c7aa737203c33b4a36458e8b81af52e8274a5ebce175afb2ee7b->enter($__internal_95f57dc265f0c7aa737203c33b4a36458e8b81af52e8274a5ebce175afb2ee7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72c8f494c128a867fea66b0da4f7c1e20be6df2c8c782eaf05d0b47d85bcb10->leave($__internal_e72c8f494c128a867fea66b0da4f7c1e20be6df2c8c782eaf05d0b47d85bcb10_prof);

        
        $__internal_95f57dc265f0c7aa737203c33b4a36458e8b81af52e8274a5ebce175afb2ee7b->leave($__internal_95f57dc265f0c7aa737203c33b4a36458e8b81af52e8274a5ebce175afb2ee7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_213b66d46cad78143602a1a63d5bdc91cbc77b040570a7f568374fa23bec4ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213b66d46cad78143602a1a63d5bdc91cbc77b040570a7f568374fa23bec4ed3->enter($__internal_213b66d46cad78143602a1a63d5bdc91cbc77b040570a7f568374fa23bec4ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f237b23b8aa47cb987b762ba37e8d5212a23559ea2a0828767abe60d0a541bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f237b23b8aa47cb987b762ba37e8d5212a23559ea2a0828767abe60d0a541bec->enter($__internal_f237b23b8aa47cb987b762ba37e8d5212a23559ea2a0828767abe60d0a541bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f237b23b8aa47cb987b762ba37e8d5212a23559ea2a0828767abe60d0a541bec->leave($__internal_f237b23b8aa47cb987b762ba37e8d5212a23559ea2a0828767abe60d0a541bec_prof);

        
        $__internal_213b66d46cad78143602a1a63d5bdc91cbc77b040570a7f568374fa23bec4ed3->leave($__internal_213b66d46cad78143602a1a63d5bdc91cbc77b040570a7f568374fa23bec4ed3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
