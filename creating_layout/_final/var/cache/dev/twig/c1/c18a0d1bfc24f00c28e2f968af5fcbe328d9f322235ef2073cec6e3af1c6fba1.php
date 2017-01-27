<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b4ab0f48e35d788846c09bea88b0a9bbc4773e662c28c735c4f7216f52d4696b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7af5e38e196311c28bb716256836ebb566dd33ff2f3fdb961edcca6fb8e87c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af5e38e196311c28bb716256836ebb566dd33ff2f3fdb961edcca6fb8e87c3d->enter($__internal_7af5e38e196311c28bb716256836ebb566dd33ff2f3fdb961edcca6fb8e87c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e223975a6b9bd1f46217a4a760fdc5f63aabb289462dbe20895737109963a54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e223975a6b9bd1f46217a4a760fdc5f63aabb289462dbe20895737109963a54b->enter($__internal_e223975a6b9bd1f46217a4a760fdc5f63aabb289462dbe20895737109963a54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7af5e38e196311c28bb716256836ebb566dd33ff2f3fdb961edcca6fb8e87c3d->leave($__internal_7af5e38e196311c28bb716256836ebb566dd33ff2f3fdb961edcca6fb8e87c3d_prof);

        
        $__internal_e223975a6b9bd1f46217a4a760fdc5f63aabb289462dbe20895737109963a54b->leave($__internal_e223975a6b9bd1f46217a4a760fdc5f63aabb289462dbe20895737109963a54b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3fbef055d0ead3f0de12efcbe21c6958f3b2c67e97ab4edc2f976df1956797e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbef055d0ead3f0de12efcbe21c6958f3b2c67e97ab4edc2f976df1956797e3->enter($__internal_3fbef055d0ead3f0de12efcbe21c6958f3b2c67e97ab4edc2f976df1956797e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_146e2aab1a18edc773eb9bed66b0e9c58f8e1497238aee9f43dc840a7baf62d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146e2aab1a18edc773eb9bed66b0e9c58f8e1497238aee9f43dc840a7baf62d7->enter($__internal_146e2aab1a18edc773eb9bed66b0e9c58f8e1497238aee9f43dc840a7baf62d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_146e2aab1a18edc773eb9bed66b0e9c58f8e1497238aee9f43dc840a7baf62d7->leave($__internal_146e2aab1a18edc773eb9bed66b0e9c58f8e1497238aee9f43dc840a7baf62d7_prof);

        
        $__internal_3fbef055d0ead3f0de12efcbe21c6958f3b2c67e97ab4edc2f976df1956797e3->leave($__internal_3fbef055d0ead3f0de12efcbe21c6958f3b2c67e97ab4edc2f976df1956797e3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_552f8ee99529f5486bce1528dbc3d3544d14bde83b18fac47057cb1ecbb77c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552f8ee99529f5486bce1528dbc3d3544d14bde83b18fac47057cb1ecbb77c59->enter($__internal_552f8ee99529f5486bce1528dbc3d3544d14bde83b18fac47057cb1ecbb77c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efeb1b45779e4ed06a94fe22fefd0f88c84cbb1bb6a2568482d88506ca540273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efeb1b45779e4ed06a94fe22fefd0f88c84cbb1bb6a2568482d88506ca540273->enter($__internal_efeb1b45779e4ed06a94fe22fefd0f88c84cbb1bb6a2568482d88506ca540273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_efeb1b45779e4ed06a94fe22fefd0f88c84cbb1bb6a2568482d88506ca540273->leave($__internal_efeb1b45779e4ed06a94fe22fefd0f88c84cbb1bb6a2568482d88506ca540273_prof);

        
        $__internal_552f8ee99529f5486bce1528dbc3d3544d14bde83b18fac47057cb1ecbb77c59->leave($__internal_552f8ee99529f5486bce1528dbc3d3544d14bde83b18fac47057cb1ecbb77c59_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4719b3a34fa4b30ff2e3ea2fd646fb9eb95198d3daa6be6d75032fd5b3237b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4719b3a34fa4b30ff2e3ea2fd646fb9eb95198d3daa6be6d75032fd5b3237b82->enter($__internal_4719b3a34fa4b30ff2e3ea2fd646fb9eb95198d3daa6be6d75032fd5b3237b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22f29b63591b2e35eebf6a4bd779eb4ff8eca09c6706454531107e400aeb65df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f29b63591b2e35eebf6a4bd779eb4ff8eca09c6706454531107e400aeb65df->enter($__internal_22f29b63591b2e35eebf6a4bd779eb4ff8eca09c6706454531107e400aeb65df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_22f29b63591b2e35eebf6a4bd779eb4ff8eca09c6706454531107e400aeb65df->leave($__internal_22f29b63591b2e35eebf6a4bd779eb4ff8eca09c6706454531107e400aeb65df_prof);

        
        $__internal_4719b3a34fa4b30ff2e3ea2fd646fb9eb95198d3daa6be6d75032fd5b3237b82->leave($__internal_4719b3a34fa4b30ff2e3ea2fd646fb9eb95198d3daa6be6d75032fd5b3237b82_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
