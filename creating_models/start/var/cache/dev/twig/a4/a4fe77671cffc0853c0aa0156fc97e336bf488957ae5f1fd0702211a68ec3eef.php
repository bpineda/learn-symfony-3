<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b92cee0d3dcaafba82ac8784b75c906a47838f1245539ed02aee25f0383bb302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_4b6c7d7faf0754e1e4d74265f52174c5d38f2148cbaa67b260b3a840795dd110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6c7d7faf0754e1e4d74265f52174c5d38f2148cbaa67b260b3a840795dd110->enter($__internal_4b6c7d7faf0754e1e4d74265f52174c5d38f2148cbaa67b260b3a840795dd110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bfb81fd0445ddaa86e7d9e9319a37e467d096cc45a183153eea07e704c03e37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb81fd0445ddaa86e7d9e9319a37e467d096cc45a183153eea07e704c03e37c->enter($__internal_bfb81fd0445ddaa86e7d9e9319a37e467d096cc45a183153eea07e704c03e37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b6c7d7faf0754e1e4d74265f52174c5d38f2148cbaa67b260b3a840795dd110->leave($__internal_4b6c7d7faf0754e1e4d74265f52174c5d38f2148cbaa67b260b3a840795dd110_prof);

        
        $__internal_bfb81fd0445ddaa86e7d9e9319a37e467d096cc45a183153eea07e704c03e37c->leave($__internal_bfb81fd0445ddaa86e7d9e9319a37e467d096cc45a183153eea07e704c03e37c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee132f95df2b3d3586ba36fbedb0826ab3fca9c1d8b55bd412a8ac63ee22bfaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee132f95df2b3d3586ba36fbedb0826ab3fca9c1d8b55bd412a8ac63ee22bfaa->enter($__internal_ee132f95df2b3d3586ba36fbedb0826ab3fca9c1d8b55bd412a8ac63ee22bfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0a5ee47aa112775ab889269852be4cce28c4ecfc5e9bcda3ecbaf7b9b875302a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5ee47aa112775ab889269852be4cce28c4ecfc5e9bcda3ecbaf7b9b875302a->enter($__internal_0a5ee47aa112775ab889269852be4cce28c4ecfc5e9bcda3ecbaf7b9b875302a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a5ee47aa112775ab889269852be4cce28c4ecfc5e9bcda3ecbaf7b9b875302a->leave($__internal_0a5ee47aa112775ab889269852be4cce28c4ecfc5e9bcda3ecbaf7b9b875302a_prof);

        
        $__internal_ee132f95df2b3d3586ba36fbedb0826ab3fca9c1d8b55bd412a8ac63ee22bfaa->leave($__internal_ee132f95df2b3d3586ba36fbedb0826ab3fca9c1d8b55bd412a8ac63ee22bfaa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffa700f1c9c5c515d4ad843ea53a6599ffdc78f8da63f294d91dea148bc1584c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa700f1c9c5c515d4ad843ea53a6599ffdc78f8da63f294d91dea148bc1584c->enter($__internal_ffa700f1c9c5c515d4ad843ea53a6599ffdc78f8da63f294d91dea148bc1584c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_84ac8c7cf3ec1f67a7b86e8379c194153c970e8f8c3257e1954f8dad67be30cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ac8c7cf3ec1f67a7b86e8379c194153c970e8f8c3257e1954f8dad67be30cc->enter($__internal_84ac8c7cf3ec1f67a7b86e8379c194153c970e8f8c3257e1954f8dad67be30cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84ac8c7cf3ec1f67a7b86e8379c194153c970e8f8c3257e1954f8dad67be30cc->leave($__internal_84ac8c7cf3ec1f67a7b86e8379c194153c970e8f8c3257e1954f8dad67be30cc_prof);

        
        $__internal_ffa700f1c9c5c515d4ad843ea53a6599ffdc78f8da63f294d91dea148bc1584c->leave($__internal_ffa700f1c9c5c515d4ad843ea53a6599ffdc78f8da63f294d91dea148bc1584c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3abbeb62e625dfd9b869f2d3683beeb0254725ee6c2e34557ecdb3e4decbf0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abbeb62e625dfd9b869f2d3683beeb0254725ee6c2e34557ecdb3e4decbf0e9->enter($__internal_3abbeb62e625dfd9b869f2d3683beeb0254725ee6c2e34557ecdb3e4decbf0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a73e68bd3130e885172b99446a782e6758f73b1724cf02258ce316bbc194032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73e68bd3130e885172b99446a782e6758f73b1724cf02258ce316bbc194032f->enter($__internal_a73e68bd3130e885172b99446a782e6758f73b1724cf02258ce316bbc194032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a73e68bd3130e885172b99446a782e6758f73b1724cf02258ce316bbc194032f->leave($__internal_a73e68bd3130e885172b99446a782e6758f73b1724cf02258ce316bbc194032f_prof);

        
        $__internal_3abbeb62e625dfd9b869f2d3683beeb0254725ee6c2e34557ecdb3e4decbf0e9->leave($__internal_3abbeb62e625dfd9b869f2d3683beeb0254725ee6c2e34557ecdb3e4decbf0e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
