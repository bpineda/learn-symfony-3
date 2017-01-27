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
        $__internal_7f27c3c5d30a3cb1a3b13e4a083884bd3748ef7984a95e59b73b557edd785926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f27c3c5d30a3cb1a3b13e4a083884bd3748ef7984a95e59b73b557edd785926->enter($__internal_7f27c3c5d30a3cb1a3b13e4a083884bd3748ef7984a95e59b73b557edd785926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dcae883a33e03eea06651d721ffb7f954dc5b12a57da3f0d67f74b793ac286b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcae883a33e03eea06651d721ffb7f954dc5b12a57da3f0d67f74b793ac286b4->enter($__internal_dcae883a33e03eea06651d721ffb7f954dc5b12a57da3f0d67f74b793ac286b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f27c3c5d30a3cb1a3b13e4a083884bd3748ef7984a95e59b73b557edd785926->leave($__internal_7f27c3c5d30a3cb1a3b13e4a083884bd3748ef7984a95e59b73b557edd785926_prof);

        
        $__internal_dcae883a33e03eea06651d721ffb7f954dc5b12a57da3f0d67f74b793ac286b4->leave($__internal_dcae883a33e03eea06651d721ffb7f954dc5b12a57da3f0d67f74b793ac286b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4feb8ae0ea44c84983c75741c620130b2234e7243779d44636e78ee1d3f9e06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4feb8ae0ea44c84983c75741c620130b2234e7243779d44636e78ee1d3f9e06c->enter($__internal_4feb8ae0ea44c84983c75741c620130b2234e7243779d44636e78ee1d3f9e06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_077b920018be6662c84e32fbedb20073798f77dadf62dc0a3e9f0e8bbf76af28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077b920018be6662c84e32fbedb20073798f77dadf62dc0a3e9f0e8bbf76af28->enter($__internal_077b920018be6662c84e32fbedb20073798f77dadf62dc0a3e9f0e8bbf76af28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_077b920018be6662c84e32fbedb20073798f77dadf62dc0a3e9f0e8bbf76af28->leave($__internal_077b920018be6662c84e32fbedb20073798f77dadf62dc0a3e9f0e8bbf76af28_prof);

        
        $__internal_4feb8ae0ea44c84983c75741c620130b2234e7243779d44636e78ee1d3f9e06c->leave($__internal_4feb8ae0ea44c84983c75741c620130b2234e7243779d44636e78ee1d3f9e06c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f85152fb09a4bba62e461393d2d62b1f87626b852e2ff008f0f2a1319842be0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85152fb09a4bba62e461393d2d62b1f87626b852e2ff008f0f2a1319842be0c->enter($__internal_f85152fb09a4bba62e461393d2d62b1f87626b852e2ff008f0f2a1319842be0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c21ec735578de956ef60e8a389ad20c9b611dee3ce48b02b025dd63767ff8fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21ec735578de956ef60e8a389ad20c9b611dee3ce48b02b025dd63767ff8fc3->enter($__internal_c21ec735578de956ef60e8a389ad20c9b611dee3ce48b02b025dd63767ff8fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c21ec735578de956ef60e8a389ad20c9b611dee3ce48b02b025dd63767ff8fc3->leave($__internal_c21ec735578de956ef60e8a389ad20c9b611dee3ce48b02b025dd63767ff8fc3_prof);

        
        $__internal_f85152fb09a4bba62e461393d2d62b1f87626b852e2ff008f0f2a1319842be0c->leave($__internal_f85152fb09a4bba62e461393d2d62b1f87626b852e2ff008f0f2a1319842be0c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_25c11eb46a9995a0ddce6f838303f92d0779d6ef8de69da74c5ad2d51abcf80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c11eb46a9995a0ddce6f838303f92d0779d6ef8de69da74c5ad2d51abcf80a->enter($__internal_25c11eb46a9995a0ddce6f838303f92d0779d6ef8de69da74c5ad2d51abcf80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_357afbdccc29b2d172c2cd00b3272889f34600bcddb6071a44c26f9294634029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357afbdccc29b2d172c2cd00b3272889f34600bcddb6071a44c26f9294634029->enter($__internal_357afbdccc29b2d172c2cd00b3272889f34600bcddb6071a44c26f9294634029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_357afbdccc29b2d172c2cd00b3272889f34600bcddb6071a44c26f9294634029->leave($__internal_357afbdccc29b2d172c2cd00b3272889f34600bcddb6071a44c26f9294634029_prof);

        
        $__internal_25c11eb46a9995a0ddce6f838303f92d0779d6ef8de69da74c5ad2d51abcf80a->leave($__internal_25c11eb46a9995a0ddce6f838303f92d0779d6ef8de69da74c5ad2d51abcf80a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
