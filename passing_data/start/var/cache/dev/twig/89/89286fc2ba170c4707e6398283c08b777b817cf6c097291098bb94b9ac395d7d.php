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
        $__internal_075b17efbe7abf2cd625ca4a5f1312b82fbe3856e3779f038537d602fa644045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075b17efbe7abf2cd625ca4a5f1312b82fbe3856e3779f038537d602fa644045->enter($__internal_075b17efbe7abf2cd625ca4a5f1312b82fbe3856e3779f038537d602fa644045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6b5c48e35fff25101cedf0157215b8f1f8d9b1e2cb40f06642d24f19f532a57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5c48e35fff25101cedf0157215b8f1f8d9b1e2cb40f06642d24f19f532a57b->enter($__internal_6b5c48e35fff25101cedf0157215b8f1f8d9b1e2cb40f06642d24f19f532a57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_075b17efbe7abf2cd625ca4a5f1312b82fbe3856e3779f038537d602fa644045->leave($__internal_075b17efbe7abf2cd625ca4a5f1312b82fbe3856e3779f038537d602fa644045_prof);

        
        $__internal_6b5c48e35fff25101cedf0157215b8f1f8d9b1e2cb40f06642d24f19f532a57b->leave($__internal_6b5c48e35fff25101cedf0157215b8f1f8d9b1e2cb40f06642d24f19f532a57b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a4547e23b4b22f8519223c05c77203018d9d1aae3660feb767c4e14ff795999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4547e23b4b22f8519223c05c77203018d9d1aae3660feb767c4e14ff795999->enter($__internal_5a4547e23b4b22f8519223c05c77203018d9d1aae3660feb767c4e14ff795999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_242411ade9ffa0224261f1992657bccc2d8f5c7571c65f81af86afc61a585e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242411ade9ffa0224261f1992657bccc2d8f5c7571c65f81af86afc61a585e5b->enter($__internal_242411ade9ffa0224261f1992657bccc2d8f5c7571c65f81af86afc61a585e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_242411ade9ffa0224261f1992657bccc2d8f5c7571c65f81af86afc61a585e5b->leave($__internal_242411ade9ffa0224261f1992657bccc2d8f5c7571c65f81af86afc61a585e5b_prof);

        
        $__internal_5a4547e23b4b22f8519223c05c77203018d9d1aae3660feb767c4e14ff795999->leave($__internal_5a4547e23b4b22f8519223c05c77203018d9d1aae3660feb767c4e14ff795999_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6614a59e5b7c2cabb474d1f8d9bdd511d9b46477f9d6a00ffa4dc2cf09ae8e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6614a59e5b7c2cabb474d1f8d9bdd511d9b46477f9d6a00ffa4dc2cf09ae8e04->enter($__internal_6614a59e5b7c2cabb474d1f8d9bdd511d9b46477f9d6a00ffa4dc2cf09ae8e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e57dddb2cd937a2d830f420e00be5fe9f695f7be7bef21f3217a9228a5807c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57dddb2cd937a2d830f420e00be5fe9f695f7be7bef21f3217a9228a5807c76->enter($__internal_e57dddb2cd937a2d830f420e00be5fe9f695f7be7bef21f3217a9228a5807c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e57dddb2cd937a2d830f420e00be5fe9f695f7be7bef21f3217a9228a5807c76->leave($__internal_e57dddb2cd937a2d830f420e00be5fe9f695f7be7bef21f3217a9228a5807c76_prof);

        
        $__internal_6614a59e5b7c2cabb474d1f8d9bdd511d9b46477f9d6a00ffa4dc2cf09ae8e04->leave($__internal_6614a59e5b7c2cabb474d1f8d9bdd511d9b46477f9d6a00ffa4dc2cf09ae8e04_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf97339c95a2bcfb28af2ef7a8e47b69dfdaacfc3283c2d68bf712ae690f52c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf97339c95a2bcfb28af2ef7a8e47b69dfdaacfc3283c2d68bf712ae690f52c9->enter($__internal_cf97339c95a2bcfb28af2ef7a8e47b69dfdaacfc3283c2d68bf712ae690f52c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0604dc516a3575e033d76fb73bb4543c8c3d561b442ebb4452043ecf01a5e119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0604dc516a3575e033d76fb73bb4543c8c3d561b442ebb4452043ecf01a5e119->enter($__internal_0604dc516a3575e033d76fb73bb4543c8c3d561b442ebb4452043ecf01a5e119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0604dc516a3575e033d76fb73bb4543c8c3d561b442ebb4452043ecf01a5e119->leave($__internal_0604dc516a3575e033d76fb73bb4543c8c3d561b442ebb4452043ecf01a5e119_prof);

        
        $__internal_cf97339c95a2bcfb28af2ef7a8e47b69dfdaacfc3283c2d68bf712ae690f52c9->leave($__internal_cf97339c95a2bcfb28af2ef7a8e47b69dfdaacfc3283c2d68bf712ae690f52c9_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
