<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7db9032a528ac897a0aa9513cc3133c8d4ad9f605b092b4c3753ff5351bfb33d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bd66af280eb06c4d526383f8ee845e47917923bc1203fffdf888d51d518780cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd66af280eb06c4d526383f8ee845e47917923bc1203fffdf888d51d518780cc->enter($__internal_bd66af280eb06c4d526383f8ee845e47917923bc1203fffdf888d51d518780cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_20fe3f539758c9dd6aea8d09dbcf78b9b8ea8f8a1edfcabffc8c14b875844ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fe3f539758c9dd6aea8d09dbcf78b9b8ea8f8a1edfcabffc8c14b875844ae0->enter($__internal_20fe3f539758c9dd6aea8d09dbcf78b9b8ea8f8a1edfcabffc8c14b875844ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd66af280eb06c4d526383f8ee845e47917923bc1203fffdf888d51d518780cc->leave($__internal_bd66af280eb06c4d526383f8ee845e47917923bc1203fffdf888d51d518780cc_prof);

        
        $__internal_20fe3f539758c9dd6aea8d09dbcf78b9b8ea8f8a1edfcabffc8c14b875844ae0->leave($__internal_20fe3f539758c9dd6aea8d09dbcf78b9b8ea8f8a1edfcabffc8c14b875844ae0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a26c84c7801eeebfaf1323e0b471a3063c79b9f3da862cba76772f2d0f85b1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26c84c7801eeebfaf1323e0b471a3063c79b9f3da862cba76772f2d0f85b1d3->enter($__internal_a26c84c7801eeebfaf1323e0b471a3063c79b9f3da862cba76772f2d0f85b1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57c6c6e61b8f86a8ddf14d2f9b1e80be8e6c9da8c8da724990671f5e608dd025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c6c6e61b8f86a8ddf14d2f9b1e80be8e6c9da8c8da724990671f5e608dd025->enter($__internal_57c6c6e61b8f86a8ddf14d2f9b1e80be8e6c9da8c8da724990671f5e608dd025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_57c6c6e61b8f86a8ddf14d2f9b1e80be8e6c9da8c8da724990671f5e608dd025->leave($__internal_57c6c6e61b8f86a8ddf14d2f9b1e80be8e6c9da8c8da724990671f5e608dd025_prof);

        
        $__internal_a26c84c7801eeebfaf1323e0b471a3063c79b9f3da862cba76772f2d0f85b1d3->leave($__internal_a26c84c7801eeebfaf1323e0b471a3063c79b9f3da862cba76772f2d0f85b1d3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a3f77db79e9f501773fd02ca575f0b115242b12ee1e6a86192806af47b9d2df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f77db79e9f501773fd02ca575f0b115242b12ee1e6a86192806af47b9d2df8->enter($__internal_a3f77db79e9f501773fd02ca575f0b115242b12ee1e6a86192806af47b9d2df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_11382446c39c207baf5d1f3234e8314f08ca4969aac8c4baaf00c470990812a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11382446c39c207baf5d1f3234e8314f08ca4969aac8c4baaf00c470990812a6->enter($__internal_11382446c39c207baf5d1f3234e8314f08ca4969aac8c4baaf00c470990812a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_11382446c39c207baf5d1f3234e8314f08ca4969aac8c4baaf00c470990812a6->leave($__internal_11382446c39c207baf5d1f3234e8314f08ca4969aac8c4baaf00c470990812a6_prof);

        
        $__internal_a3f77db79e9f501773fd02ca575f0b115242b12ee1e6a86192806af47b9d2df8->leave($__internal_a3f77db79e9f501773fd02ca575f0b115242b12ee1e6a86192806af47b9d2df8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13145e1be82109bc57158e659ab76db5ef1f31511c9e543aa7dfb55dda1b1a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13145e1be82109bc57158e659ab76db5ef1f31511c9e543aa7dfb55dda1b1a09->enter($__internal_13145e1be82109bc57158e659ab76db5ef1f31511c9e543aa7dfb55dda1b1a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0d87f4edb2194c7a17f935f6d30bee94d17c1caae43f1f53c6a5e5e1d599337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d87f4edb2194c7a17f935f6d30bee94d17c1caae43f1f53c6a5e5e1d599337->enter($__internal_c0d87f4edb2194c7a17f935f6d30bee94d17c1caae43f1f53c6a5e5e1d599337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c0d87f4edb2194c7a17f935f6d30bee94d17c1caae43f1f53c6a5e5e1d599337->leave($__internal_c0d87f4edb2194c7a17f935f6d30bee94d17c1caae43f1f53c6a5e5e1d599337_prof);

        
        $__internal_13145e1be82109bc57158e659ab76db5ef1f31511c9e543aa7dfb55dda1b1a09->leave($__internal_13145e1be82109bc57158e659ab76db5ef1f31511c9e543aa7dfb55dda1b1a09_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
