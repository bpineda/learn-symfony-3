<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d4feffea5edcccc51cda82847fdd83d69a97886366809a7595d4698e3f2af24 extends Twig_Template
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
        $__internal_a8fde8eec0369207a4c1add67ebd9df5c4e03e367da55bccb921794560a586d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fde8eec0369207a4c1add67ebd9df5c4e03e367da55bccb921794560a586d2->enter($__internal_a8fde8eec0369207a4c1add67ebd9df5c4e03e367da55bccb921794560a586d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a52b00e13d31d767f0ae8383e07a3dae74a7a34b8267bbf1de461b58923b01ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52b00e13d31d767f0ae8383e07a3dae74a7a34b8267bbf1de461b58923b01ca->enter($__internal_a52b00e13d31d767f0ae8383e07a3dae74a7a34b8267bbf1de461b58923b01ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8fde8eec0369207a4c1add67ebd9df5c4e03e367da55bccb921794560a586d2->leave($__internal_a8fde8eec0369207a4c1add67ebd9df5c4e03e367da55bccb921794560a586d2_prof);

        
        $__internal_a52b00e13d31d767f0ae8383e07a3dae74a7a34b8267bbf1de461b58923b01ca->leave($__internal_a52b00e13d31d767f0ae8383e07a3dae74a7a34b8267bbf1de461b58923b01ca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4083f1777166daab3e79e3628e2afb5c3b9ed5038d6f697fb03adab08b8f2d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4083f1777166daab3e79e3628e2afb5c3b9ed5038d6f697fb03adab08b8f2d0b->enter($__internal_4083f1777166daab3e79e3628e2afb5c3b9ed5038d6f697fb03adab08b8f2d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_46364c60d47d8ae63dff79c0ba50452f2c8a6447a4c9aaf7f90fd86fe0482243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46364c60d47d8ae63dff79c0ba50452f2c8a6447a4c9aaf7f90fd86fe0482243->enter($__internal_46364c60d47d8ae63dff79c0ba50452f2c8a6447a4c9aaf7f90fd86fe0482243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46364c60d47d8ae63dff79c0ba50452f2c8a6447a4c9aaf7f90fd86fe0482243->leave($__internal_46364c60d47d8ae63dff79c0ba50452f2c8a6447a4c9aaf7f90fd86fe0482243_prof);

        
        $__internal_4083f1777166daab3e79e3628e2afb5c3b9ed5038d6f697fb03adab08b8f2d0b->leave($__internal_4083f1777166daab3e79e3628e2afb5c3b9ed5038d6f697fb03adab08b8f2d0b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fdfd64e4349407e963a5e5647e0b2f4833e8d5b770791f77d6afc6c2f764f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdfd64e4349407e963a5e5647e0b2f4833e8d5b770791f77d6afc6c2f764f6f->enter($__internal_1fdfd64e4349407e963a5e5647e0b2f4833e8d5b770791f77d6afc6c2f764f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31e3072667b6fca91a7d408d4d1bd33a6e6b8f7773a95006f862bf7f8405b704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e3072667b6fca91a7d408d4d1bd33a6e6b8f7773a95006f862bf7f8405b704->enter($__internal_31e3072667b6fca91a7d408d4d1bd33a6e6b8f7773a95006f862bf7f8405b704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31e3072667b6fca91a7d408d4d1bd33a6e6b8f7773a95006f862bf7f8405b704->leave($__internal_31e3072667b6fca91a7d408d4d1bd33a6e6b8f7773a95006f862bf7f8405b704_prof);

        
        $__internal_1fdfd64e4349407e963a5e5647e0b2f4833e8d5b770791f77d6afc6c2f764f6f->leave($__internal_1fdfd64e4349407e963a5e5647e0b2f4833e8d5b770791f77d6afc6c2f764f6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33071e79ddc60f1e1d4ee7abdd1d8440cc02e28cbcbb309457ea57e31ea0d764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33071e79ddc60f1e1d4ee7abdd1d8440cc02e28cbcbb309457ea57e31ea0d764->enter($__internal_33071e79ddc60f1e1d4ee7abdd1d8440cc02e28cbcbb309457ea57e31ea0d764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_161707d862f276a0c99631bde19243fe60dfaf7145dcb8d1b04ddd0d75be35a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161707d862f276a0c99631bde19243fe60dfaf7145dcb8d1b04ddd0d75be35a9->enter($__internal_161707d862f276a0c99631bde19243fe60dfaf7145dcb8d1b04ddd0d75be35a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_161707d862f276a0c99631bde19243fe60dfaf7145dcb8d1b04ddd0d75be35a9->leave($__internal_161707d862f276a0c99631bde19243fe60dfaf7145dcb8d1b04ddd0d75be35a9_prof);

        
        $__internal_33071e79ddc60f1e1d4ee7abdd1d8440cc02e28cbcbb309457ea57e31ea0d764->leave($__internal_33071e79ddc60f1e1d4ee7abdd1d8440cc02e28cbcbb309457ea57e31ea0d764_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
