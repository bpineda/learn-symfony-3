<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1014ffb02c9983344996f6b1371c2163a75e9013959f3b811a136441d8153f72 extends Twig_Template
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
        $__internal_b00305513378371b60ee1119d00ad4cf996758dba2af5b63289b3f3d0054246c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00305513378371b60ee1119d00ad4cf996758dba2af5b63289b3f3d0054246c->enter($__internal_b00305513378371b60ee1119d00ad4cf996758dba2af5b63289b3f3d0054246c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_86b686040f19436d2c3a34b3b8897843b8465c6ba6e2fcb42f21df95cbda3f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b686040f19436d2c3a34b3b8897843b8465c6ba6e2fcb42f21df95cbda3f0c->enter($__internal_86b686040f19436d2c3a34b3b8897843b8465c6ba6e2fcb42f21df95cbda3f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b00305513378371b60ee1119d00ad4cf996758dba2af5b63289b3f3d0054246c->leave($__internal_b00305513378371b60ee1119d00ad4cf996758dba2af5b63289b3f3d0054246c_prof);

        
        $__internal_86b686040f19436d2c3a34b3b8897843b8465c6ba6e2fcb42f21df95cbda3f0c->leave($__internal_86b686040f19436d2c3a34b3b8897843b8465c6ba6e2fcb42f21df95cbda3f0c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
