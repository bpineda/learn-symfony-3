<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_18507effff441833af85445150a74c1d1984c4052e4e3d9c05f3f8b8e83ddc7c extends Twig_Template
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
        $__internal_6219c1a55a735fe43af5358691495c2713642df4035257f4ffde1dc04b185ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6219c1a55a735fe43af5358691495c2713642df4035257f4ffde1dc04b185ae9->enter($__internal_6219c1a55a735fe43af5358691495c2713642df4035257f4ffde1dc04b185ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_07cf9ec0465a29532eecb2c0dd6c3804a715817f806eabcfc10dbcec7626c07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cf9ec0465a29532eecb2c0dd6c3804a715817f806eabcfc10dbcec7626c07b->enter($__internal_07cf9ec0465a29532eecb2c0dd6c3804a715817f806eabcfc10dbcec7626c07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6219c1a55a735fe43af5358691495c2713642df4035257f4ffde1dc04b185ae9->leave($__internal_6219c1a55a735fe43af5358691495c2713642df4035257f4ffde1dc04b185ae9_prof);

        
        $__internal_07cf9ec0465a29532eecb2c0dd6c3804a715817f806eabcfc10dbcec7626c07b->leave($__internal_07cf9ec0465a29532eecb2c0dd6c3804a715817f806eabcfc10dbcec7626c07b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61f4800a2991307e7f8e9f78ef8231f79f9bc80d4e12b13666547abd388becce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f4800a2991307e7f8e9f78ef8231f79f9bc80d4e12b13666547abd388becce->enter($__internal_61f4800a2991307e7f8e9f78ef8231f79f9bc80d4e12b13666547abd388becce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d279fdfc8af367cfae019225a73150d9bfab62dc1ce6b8cf5d6065c3fde9fdca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d279fdfc8af367cfae019225a73150d9bfab62dc1ce6b8cf5d6065c3fde9fdca->enter($__internal_d279fdfc8af367cfae019225a73150d9bfab62dc1ce6b8cf5d6065c3fde9fdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d279fdfc8af367cfae019225a73150d9bfab62dc1ce6b8cf5d6065c3fde9fdca->leave($__internal_d279fdfc8af367cfae019225a73150d9bfab62dc1ce6b8cf5d6065c3fde9fdca_prof);

        
        $__internal_61f4800a2991307e7f8e9f78ef8231f79f9bc80d4e12b13666547abd388becce->leave($__internal_61f4800a2991307e7f8e9f78ef8231f79f9bc80d4e12b13666547abd388becce_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_941c1f3249d426025ff5900466046de86bafd2db1049e29d19f48fd0fcd47829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941c1f3249d426025ff5900466046de86bafd2db1049e29d19f48fd0fcd47829->enter($__internal_941c1f3249d426025ff5900466046de86bafd2db1049e29d19f48fd0fcd47829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a2af2013e09f8878aa132a2a6598ffdba2ab191637b444dccbcf38538bcf509d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2af2013e09f8878aa132a2a6598ffdba2ab191637b444dccbcf38538bcf509d->enter($__internal_a2af2013e09f8878aa132a2a6598ffdba2ab191637b444dccbcf38538bcf509d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a2af2013e09f8878aa132a2a6598ffdba2ab191637b444dccbcf38538bcf509d->leave($__internal_a2af2013e09f8878aa132a2a6598ffdba2ab191637b444dccbcf38538bcf509d_prof);

        
        $__internal_941c1f3249d426025ff5900466046de86bafd2db1049e29d19f48fd0fcd47829->leave($__internal_941c1f3249d426025ff5900466046de86bafd2db1049e29d19f48fd0fcd47829_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e74260903ad6e5898882c59ffefa58573bd53367cd1f981b8ef5d2985743131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e74260903ad6e5898882c59ffefa58573bd53367cd1f981b8ef5d2985743131->enter($__internal_5e74260903ad6e5898882c59ffefa58573bd53367cd1f981b8ef5d2985743131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_28ebc7f88868a9ec32c449df68d429a5f3bab7f53a36664527eac940530080a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ebc7f88868a9ec32c449df68d429a5f3bab7f53a36664527eac940530080a2->enter($__internal_28ebc7f88868a9ec32c449df68d429a5f3bab7f53a36664527eac940530080a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_28ebc7f88868a9ec32c449df68d429a5f3bab7f53a36664527eac940530080a2->leave($__internal_28ebc7f88868a9ec32c449df68d429a5f3bab7f53a36664527eac940530080a2_prof);

        
        $__internal_5e74260903ad6e5898882c59ffefa58573bd53367cd1f981b8ef5d2985743131->leave($__internal_5e74260903ad6e5898882c59ffefa58573bd53367cd1f981b8ef5d2985743131_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
