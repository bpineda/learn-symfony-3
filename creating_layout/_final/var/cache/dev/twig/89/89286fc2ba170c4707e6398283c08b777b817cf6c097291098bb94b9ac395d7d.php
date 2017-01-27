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
        $__internal_7152ff4ab350fc338ed1ba74ca9eb2507281e2e3b34776c3d3d2e7e13fda069d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7152ff4ab350fc338ed1ba74ca9eb2507281e2e3b34776c3d3d2e7e13fda069d->enter($__internal_7152ff4ab350fc338ed1ba74ca9eb2507281e2e3b34776c3d3d2e7e13fda069d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ac1e75b106dcdafdc0544933d79e063d6ef548c3b9a9dd24c71f3af36d4afc28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1e75b106dcdafdc0544933d79e063d6ef548c3b9a9dd24c71f3af36d4afc28->enter($__internal_ac1e75b106dcdafdc0544933d79e063d6ef548c3b9a9dd24c71f3af36d4afc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7152ff4ab350fc338ed1ba74ca9eb2507281e2e3b34776c3d3d2e7e13fda069d->leave($__internal_7152ff4ab350fc338ed1ba74ca9eb2507281e2e3b34776c3d3d2e7e13fda069d_prof);

        
        $__internal_ac1e75b106dcdafdc0544933d79e063d6ef548c3b9a9dd24c71f3af36d4afc28->leave($__internal_ac1e75b106dcdafdc0544933d79e063d6ef548c3b9a9dd24c71f3af36d4afc28_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e69656c262230c1c71d6bcd84a01533d180bfcaa39fb31aca8f68dee607a39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e69656c262230c1c71d6bcd84a01533d180bfcaa39fb31aca8f68dee607a39a->enter($__internal_2e69656c262230c1c71d6bcd84a01533d180bfcaa39fb31aca8f68dee607a39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8eb595aec328c683b149826f2126e10fcdb8eef9afe6b3d49aa1aee711649675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb595aec328c683b149826f2126e10fcdb8eef9afe6b3d49aa1aee711649675->enter($__internal_8eb595aec328c683b149826f2126e10fcdb8eef9afe6b3d49aa1aee711649675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8eb595aec328c683b149826f2126e10fcdb8eef9afe6b3d49aa1aee711649675->leave($__internal_8eb595aec328c683b149826f2126e10fcdb8eef9afe6b3d49aa1aee711649675_prof);

        
        $__internal_2e69656c262230c1c71d6bcd84a01533d180bfcaa39fb31aca8f68dee607a39a->leave($__internal_2e69656c262230c1c71d6bcd84a01533d180bfcaa39fb31aca8f68dee607a39a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d008ca809cec364c48b325811a62d012097a7020512df5b850dec7e0ccdd990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d008ca809cec364c48b325811a62d012097a7020512df5b850dec7e0ccdd990->enter($__internal_5d008ca809cec364c48b325811a62d012097a7020512df5b850dec7e0ccdd990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7a861a1de147eea07d3cc6b8e5c1587c5449d3c0376d4afb380c499cb01fa3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a861a1de147eea07d3cc6b8e5c1587c5449d3c0376d4afb380c499cb01fa3a9->enter($__internal_7a861a1de147eea07d3cc6b8e5c1587c5449d3c0376d4afb380c499cb01fa3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7a861a1de147eea07d3cc6b8e5c1587c5449d3c0376d4afb380c499cb01fa3a9->leave($__internal_7a861a1de147eea07d3cc6b8e5c1587c5449d3c0376d4afb380c499cb01fa3a9_prof);

        
        $__internal_5d008ca809cec364c48b325811a62d012097a7020512df5b850dec7e0ccdd990->leave($__internal_5d008ca809cec364c48b325811a62d012097a7020512df5b850dec7e0ccdd990_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6d16f70432ab901e9f604c6f11abfe3a85dfcd3745176ee6a678b3c1256d384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d16f70432ab901e9f604c6f11abfe3a85dfcd3745176ee6a678b3c1256d384->enter($__internal_b6d16f70432ab901e9f604c6f11abfe3a85dfcd3745176ee6a678b3c1256d384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_176d7238330559f3a8b80dea9aa8a134c5aea8c11e4e391154085ede3c6dcf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176d7238330559f3a8b80dea9aa8a134c5aea8c11e4e391154085ede3c6dcf2a->enter($__internal_176d7238330559f3a8b80dea9aa8a134c5aea8c11e4e391154085ede3c6dcf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_176d7238330559f3a8b80dea9aa8a134c5aea8c11e4e391154085ede3c6dcf2a->leave($__internal_176d7238330559f3a8b80dea9aa8a134c5aea8c11e4e391154085ede3c6dcf2a_prof);

        
        $__internal_b6d16f70432ab901e9f604c6f11abfe3a85dfcd3745176ee6a678b3c1256d384->leave($__internal_b6d16f70432ab901e9f604c6f11abfe3a85dfcd3745176ee6a678b3c1256d384_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
