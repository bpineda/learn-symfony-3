<?php

/* @Twig/Exception/exception.txt.twig */
class __TwigTemplate_d09c146edeb6226714465e8581b69e13b19936b34cc6e62b914d6557681dd188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48ba1ed17733775dedf8944b829df2e7c18eabd67fb4a0e8045af2563fdf8c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ba1ed17733775dedf8944b829df2e7c18eabd67fb4a0e8045af2563fdf8c6a->enter($__internal_48ba1ed17733775dedf8944b829df2e7c18eabd67fb4a0e8045af2563fdf8c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.txt.twig"));

        $__internal_d003125826e4ab8fbe8f28c943d2b3c8e395a6f7e94e3ac24e4c51039f719f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d003125826e4ab8fbe8f28c943d2b3c8e395a6f7e94e3ac24e4c51039f719f5f->enter($__internal_d003125826e4ab8fbe8f28c943d2b3c8e395a6f7e94e3ac24e4c51039f719f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo ((((($context["status_code"] ?? $this->getContext($context, "status_code")) . " | ") . ($context["status_text"] ?? $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "@Twig/Exception/exception.txt.twig", 5)->display(array("exception" => $context["e"]));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_48ba1ed17733775dedf8944b829df2e7c18eabd67fb4a0e8045af2563fdf8c6a->leave($__internal_48ba1ed17733775dedf8944b829df2e7c18eabd67fb4a0e8045af2563fdf8c6a_prof);

        
        $__internal_d003125826e4ab8fbe8f28c943d2b3c8e395a6f7e94e3ac24e4c51039f719f5f->leave($__internal_d003125826e4ab8fbe8f28c943d2b3c8e395a6f7e94e3ac24e4c51039f719f5f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}

{% endfor %}
", "@Twig/Exception/exception.txt.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.txt.twig");
    }
}
