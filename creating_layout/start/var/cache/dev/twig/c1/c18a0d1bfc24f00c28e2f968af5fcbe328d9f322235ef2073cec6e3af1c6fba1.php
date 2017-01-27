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
        $__internal_15d8be4008d7bb3470ffb3e591e164b9e2bc740f545639d23ddf47174ffc8878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d8be4008d7bb3470ffb3e591e164b9e2bc740f545639d23ddf47174ffc8878->enter($__internal_15d8be4008d7bb3470ffb3e591e164b9e2bc740f545639d23ddf47174ffc8878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_39e37ba6c8d4fc5032b841061026b81519b1aa97a2e9abde9ffdc4288dfeffb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e37ba6c8d4fc5032b841061026b81519b1aa97a2e9abde9ffdc4288dfeffb6->enter($__internal_39e37ba6c8d4fc5032b841061026b81519b1aa97a2e9abde9ffdc4288dfeffb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15d8be4008d7bb3470ffb3e591e164b9e2bc740f545639d23ddf47174ffc8878->leave($__internal_15d8be4008d7bb3470ffb3e591e164b9e2bc740f545639d23ddf47174ffc8878_prof);

        
        $__internal_39e37ba6c8d4fc5032b841061026b81519b1aa97a2e9abde9ffdc4288dfeffb6->leave($__internal_39e37ba6c8d4fc5032b841061026b81519b1aa97a2e9abde9ffdc4288dfeffb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e91b806d2d419a36b0c11a5b91b7c7432e3ea99f1c38564a4d80be79d2f686f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e91b806d2d419a36b0c11a5b91b7c7432e3ea99f1c38564a4d80be79d2f686f->enter($__internal_0e91b806d2d419a36b0c11a5b91b7c7432e3ea99f1c38564a4d80be79d2f686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be2274af9e110b3ced2cf5d0e3c1196609c3f4dce6c05334f86eb0de0c7a9075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2274af9e110b3ced2cf5d0e3c1196609c3f4dce6c05334f86eb0de0c7a9075->enter($__internal_be2274af9e110b3ced2cf5d0e3c1196609c3f4dce6c05334f86eb0de0c7a9075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_be2274af9e110b3ced2cf5d0e3c1196609c3f4dce6c05334f86eb0de0c7a9075->leave($__internal_be2274af9e110b3ced2cf5d0e3c1196609c3f4dce6c05334f86eb0de0c7a9075_prof);

        
        $__internal_0e91b806d2d419a36b0c11a5b91b7c7432e3ea99f1c38564a4d80be79d2f686f->leave($__internal_0e91b806d2d419a36b0c11a5b91b7c7432e3ea99f1c38564a4d80be79d2f686f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c92dc92e84dfb1bdb83a0b3717c99d252494e50f53434473c790dc888aa4a135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92dc92e84dfb1bdb83a0b3717c99d252494e50f53434473c790dc888aa4a135->enter($__internal_c92dc92e84dfb1bdb83a0b3717c99d252494e50f53434473c790dc888aa4a135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5d89c692cdef0025628a46825ffaa9e0eacc2a011f048d131e4e7559dd2abfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d89c692cdef0025628a46825ffaa9e0eacc2a011f048d131e4e7559dd2abfb->enter($__internal_b5d89c692cdef0025628a46825ffaa9e0eacc2a011f048d131e4e7559dd2abfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b5d89c692cdef0025628a46825ffaa9e0eacc2a011f048d131e4e7559dd2abfb->leave($__internal_b5d89c692cdef0025628a46825ffaa9e0eacc2a011f048d131e4e7559dd2abfb_prof);

        
        $__internal_c92dc92e84dfb1bdb83a0b3717c99d252494e50f53434473c790dc888aa4a135->leave($__internal_c92dc92e84dfb1bdb83a0b3717c99d252494e50f53434473c790dc888aa4a135_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0196762d297b622be37f01a3024e7f3d0680435a927fc70579cc236d87e53a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0196762d297b622be37f01a3024e7f3d0680435a927fc70579cc236d87e53a6->enter($__internal_b0196762d297b622be37f01a3024e7f3d0680435a927fc70579cc236d87e53a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b495ab92d32fc542df950aad3016c0fcf731bad88e07f87ef4d71c245e3208a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b495ab92d32fc542df950aad3016c0fcf731bad88e07f87ef4d71c245e3208a->enter($__internal_5b495ab92d32fc542df950aad3016c0fcf731bad88e07f87ef4d71c245e3208a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5b495ab92d32fc542df950aad3016c0fcf731bad88e07f87ef4d71c245e3208a->leave($__internal_5b495ab92d32fc542df950aad3016c0fcf731bad88e07f87ef4d71c245e3208a_prof);

        
        $__internal_b0196762d297b622be37f01a3024e7f3d0680435a927fc70579cc236d87e53a6->leave($__internal_b0196762d297b622be37f01a3024e7f3d0680435a927fc70579cc236d87e53a6_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
