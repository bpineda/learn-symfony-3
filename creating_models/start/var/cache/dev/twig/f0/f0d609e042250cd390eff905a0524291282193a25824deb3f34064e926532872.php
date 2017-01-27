<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4e29f8266a6732ce5a01d370cae84b2d10ef42c962370581ea58249b4824d783 extends Twig_Template
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
        $__internal_69d70ea27fe198c1cb0a0c3d1aae7c31220d0a24fd2f56dd1f87b67148a955a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d70ea27fe198c1cb0a0c3d1aae7c31220d0a24fd2f56dd1f87b67148a955a5->enter($__internal_69d70ea27fe198c1cb0a0c3d1aae7c31220d0a24fd2f56dd1f87b67148a955a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b4ea8a676ee28aa00aa00b3771d698facc1abcd9c1eac765a2e5e1f064a1c707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ea8a676ee28aa00aa00b3771d698facc1abcd9c1eac765a2e5e1f064a1c707->enter($__internal_b4ea8a676ee28aa00aa00b3771d698facc1abcd9c1eac765a2e5e1f064a1c707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d70ea27fe198c1cb0a0c3d1aae7c31220d0a24fd2f56dd1f87b67148a955a5->leave($__internal_69d70ea27fe198c1cb0a0c3d1aae7c31220d0a24fd2f56dd1f87b67148a955a5_prof);

        
        $__internal_b4ea8a676ee28aa00aa00b3771d698facc1abcd9c1eac765a2e5e1f064a1c707->leave($__internal_b4ea8a676ee28aa00aa00b3771d698facc1abcd9c1eac765a2e5e1f064a1c707_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_726368fc8655cd2353159ae011ef2ea8e3d06fc8b6a67429eeb0edec37543f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726368fc8655cd2353159ae011ef2ea8e3d06fc8b6a67429eeb0edec37543f04->enter($__internal_726368fc8655cd2353159ae011ef2ea8e3d06fc8b6a67429eeb0edec37543f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76ad9ee06f187d6d8f2f3c5f76613cdca57ad084f0c7a785d8d80842b8cfb22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ad9ee06f187d6d8f2f3c5f76613cdca57ad084f0c7a785d8d80842b8cfb22c->enter($__internal_76ad9ee06f187d6d8f2f3c5f76613cdca57ad084f0c7a785d8d80842b8cfb22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_76ad9ee06f187d6d8f2f3c5f76613cdca57ad084f0c7a785d8d80842b8cfb22c->leave($__internal_76ad9ee06f187d6d8f2f3c5f76613cdca57ad084f0c7a785d8d80842b8cfb22c_prof);

        
        $__internal_726368fc8655cd2353159ae011ef2ea8e3d06fc8b6a67429eeb0edec37543f04->leave($__internal_726368fc8655cd2353159ae011ef2ea8e3d06fc8b6a67429eeb0edec37543f04_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85fc7ccd4cf961d8df8b478f35932bfa1f9db1ece98a026b90cf51c5b71b8d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85fc7ccd4cf961d8df8b478f35932bfa1f9db1ece98a026b90cf51c5b71b8d98->enter($__internal_85fc7ccd4cf961d8df8b478f35932bfa1f9db1ece98a026b90cf51c5b71b8d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d1c34757fcc53551eabe44a38458411927cee34feaf58b156d7c8309772d47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1c34757fcc53551eabe44a38458411927cee34feaf58b156d7c8309772d47e->enter($__internal_9d1c34757fcc53551eabe44a38458411927cee34feaf58b156d7c8309772d47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d1c34757fcc53551eabe44a38458411927cee34feaf58b156d7c8309772d47e->leave($__internal_9d1c34757fcc53551eabe44a38458411927cee34feaf58b156d7c8309772d47e_prof);

        
        $__internal_85fc7ccd4cf961d8df8b478f35932bfa1f9db1ece98a026b90cf51c5b71b8d98->leave($__internal_85fc7ccd4cf961d8df8b478f35932bfa1f9db1ece98a026b90cf51c5b71b8d98_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
