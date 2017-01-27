<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7a6fdc327dc8747a13a5413a15b34c103ab647e65b3b9f71cd948e3de5a6b772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4fe548ccf4bf31bc84d6598e55fc2e85aa2d63b38364f7806770bfc1ff9b734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4fe548ccf4bf31bc84d6598e55fc2e85aa2d63b38364f7806770bfc1ff9b734->enter($__internal_e4fe548ccf4bf31bc84d6598e55fc2e85aa2d63b38364f7806770bfc1ff9b734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_db3f4f258364a917016061830deca546e457638fef22e4d43658b4dc5c953f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3f4f258364a917016061830deca546e457638fef22e4d43658b4dc5c953f87->enter($__internal_db3f4f258364a917016061830deca546e457638fef22e4d43658b4dc5c953f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4fe548ccf4bf31bc84d6598e55fc2e85aa2d63b38364f7806770bfc1ff9b734->leave($__internal_e4fe548ccf4bf31bc84d6598e55fc2e85aa2d63b38364f7806770bfc1ff9b734_prof);

        
        $__internal_db3f4f258364a917016061830deca546e457638fef22e4d43658b4dc5c953f87->leave($__internal_db3f4f258364a917016061830deca546e457638fef22e4d43658b4dc5c953f87_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33ba18c6ea43425ce4ace1b0738454ec6d7606cd0c8d636b20f5104ce42aaf3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ba18c6ea43425ce4ace1b0738454ec6d7606cd0c8d636b20f5104ce42aaf3d->enter($__internal_33ba18c6ea43425ce4ace1b0738454ec6d7606cd0c8d636b20f5104ce42aaf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85c88db93bb85dc520569f9948e1b2d7c1b398b269e8d9c4cfdd74a2bf6c1479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c88db93bb85dc520569f9948e1b2d7c1b398b269e8d9c4cfdd74a2bf6c1479->enter($__internal_85c88db93bb85dc520569f9948e1b2d7c1b398b269e8d9c4cfdd74a2bf6c1479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_85c88db93bb85dc520569f9948e1b2d7c1b398b269e8d9c4cfdd74a2bf6c1479->leave($__internal_85c88db93bb85dc520569f9948e1b2d7c1b398b269e8d9c4cfdd74a2bf6c1479_prof);

        
        $__internal_33ba18c6ea43425ce4ace1b0738454ec6d7606cd0c8d636b20f5104ce42aaf3d->leave($__internal_33ba18c6ea43425ce4ace1b0738454ec6d7606cd0c8d636b20f5104ce42aaf3d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ae6c811f6ed2ccd4e3c704ea714e3b1a93868f241e6e83997dada0bad672d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae6c811f6ed2ccd4e3c704ea714e3b1a93868f241e6e83997dada0bad672d85->enter($__internal_3ae6c811f6ed2ccd4e3c704ea714e3b1a93868f241e6e83997dada0bad672d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5b343b74c7a6ffd11caeaf9ae16bfeb96859bf22b5aa5addbd53582fd932357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b343b74c7a6ffd11caeaf9ae16bfeb96859bf22b5aa5addbd53582fd932357->enter($__internal_a5b343b74c7a6ffd11caeaf9ae16bfeb96859bf22b5aa5addbd53582fd932357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a5b343b74c7a6ffd11caeaf9ae16bfeb96859bf22b5aa5addbd53582fd932357->leave($__internal_a5b343b74c7a6ffd11caeaf9ae16bfeb96859bf22b5aa5addbd53582fd932357_prof);

        
        $__internal_3ae6c811f6ed2ccd4e3c704ea714e3b1a93868f241e6e83997dada0bad672d85->leave($__internal_3ae6c811f6ed2ccd4e3c704ea714e3b1a93868f241e6e83997dada0bad672d85_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
