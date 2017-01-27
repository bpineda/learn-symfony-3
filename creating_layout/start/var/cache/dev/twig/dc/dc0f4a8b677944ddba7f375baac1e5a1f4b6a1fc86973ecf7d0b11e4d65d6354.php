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
        $__internal_631fe6663db7578cc3f0d4f336d438b85c020df69c59d97ba9e7720efb069800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631fe6663db7578cc3f0d4f336d438b85c020df69c59d97ba9e7720efb069800->enter($__internal_631fe6663db7578cc3f0d4f336d438b85c020df69c59d97ba9e7720efb069800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ea0b7c93f6a8b20e9b0bc17fbe300a8e6b7172a5407509712bf6e213b7acb6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0b7c93f6a8b20e9b0bc17fbe300a8e6b7172a5407509712bf6e213b7acb6c3->enter($__internal_ea0b7c93f6a8b20e9b0bc17fbe300a8e6b7172a5407509712bf6e213b7acb6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_631fe6663db7578cc3f0d4f336d438b85c020df69c59d97ba9e7720efb069800->leave($__internal_631fe6663db7578cc3f0d4f336d438b85c020df69c59d97ba9e7720efb069800_prof);

        
        $__internal_ea0b7c93f6a8b20e9b0bc17fbe300a8e6b7172a5407509712bf6e213b7acb6c3->leave($__internal_ea0b7c93f6a8b20e9b0bc17fbe300a8e6b7172a5407509712bf6e213b7acb6c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5cb12e1596cb308d675c6a5b8d81cb65cbe0446bab66461759d13b20f4aacf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cb12e1596cb308d675c6a5b8d81cb65cbe0446bab66461759d13b20f4aacf5->enter($__internal_a5cb12e1596cb308d675c6a5b8d81cb65cbe0446bab66461759d13b20f4aacf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3c48ec5d32a8cadb0efcaf52a13ecffe7d810f102c97e7f2fdf5ce49a2d5b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c48ec5d32a8cadb0efcaf52a13ecffe7d810f102c97e7f2fdf5ce49a2d5b3b->enter($__internal_f3c48ec5d32a8cadb0efcaf52a13ecffe7d810f102c97e7f2fdf5ce49a2d5b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3c48ec5d32a8cadb0efcaf52a13ecffe7d810f102c97e7f2fdf5ce49a2d5b3b->leave($__internal_f3c48ec5d32a8cadb0efcaf52a13ecffe7d810f102c97e7f2fdf5ce49a2d5b3b_prof);

        
        $__internal_a5cb12e1596cb308d675c6a5b8d81cb65cbe0446bab66461759d13b20f4aacf5->leave($__internal_a5cb12e1596cb308d675c6a5b8d81cb65cbe0446bab66461759d13b20f4aacf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7418010ed9ac72b00f9b1116c9f45cf2d49d5b14271cc36bdea6f8100e2b57bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7418010ed9ac72b00f9b1116c9f45cf2d49d5b14271cc36bdea6f8100e2b57bc->enter($__internal_7418010ed9ac72b00f9b1116c9f45cf2d49d5b14271cc36bdea6f8100e2b57bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08baf0c99de8d21f0a2a588832a48582c37de62e63ce588fd8c92418b1e4a853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08baf0c99de8d21f0a2a588832a48582c37de62e63ce588fd8c92418b1e4a853->enter($__internal_08baf0c99de8d21f0a2a588832a48582c37de62e63ce588fd8c92418b1e4a853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08baf0c99de8d21f0a2a588832a48582c37de62e63ce588fd8c92418b1e4a853->leave($__internal_08baf0c99de8d21f0a2a588832a48582c37de62e63ce588fd8c92418b1e4a853_prof);

        
        $__internal_7418010ed9ac72b00f9b1116c9f45cf2d49d5b14271cc36bdea6f8100e2b57bc->leave($__internal_7418010ed9ac72b00f9b1116c9f45cf2d49d5b14271cc36bdea6f8100e2b57bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cab93d1a4bd6c14186d749f6c5ac0c596ad7f3c5493457f18b0b2213c67c9460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab93d1a4bd6c14186d749f6c5ac0c596ad7f3c5493457f18b0b2213c67c9460->enter($__internal_cab93d1a4bd6c14186d749f6c5ac0c596ad7f3c5493457f18b0b2213c67c9460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_890fadbea8e135217a034bbcbbd48931690144cd811f79cb85bcf12a5048a24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890fadbea8e135217a034bbcbbd48931690144cd811f79cb85bcf12a5048a24c->enter($__internal_890fadbea8e135217a034bbcbbd48931690144cd811f79cb85bcf12a5048a24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_890fadbea8e135217a034bbcbbd48931690144cd811f79cb85bcf12a5048a24c->leave($__internal_890fadbea8e135217a034bbcbbd48931690144cd811f79cb85bcf12a5048a24c_prof);

        
        $__internal_cab93d1a4bd6c14186d749f6c5ac0c596ad7f3c5493457f18b0b2213c67c9460->leave($__internal_cab93d1a4bd6c14186d749f6c5ac0c596ad7f3c5493457f18b0b2213c67c9460_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
