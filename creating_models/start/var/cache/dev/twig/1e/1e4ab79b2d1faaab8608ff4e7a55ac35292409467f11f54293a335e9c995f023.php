<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c5b12845d2c7997eb5db85a4d42bdacf27ff5e20b94ccb50c8cea2b7f208254e extends Twig_Template
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
        $__internal_1eac453f406594415fa174662ee3b592bf3f2d49d7b9ec3880db5c3e019fe1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eac453f406594415fa174662ee3b592bf3f2d49d7b9ec3880db5c3e019fe1f2->enter($__internal_1eac453f406594415fa174662ee3b592bf3f2d49d7b9ec3880db5c3e019fe1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c8e200b669f461f511221ce33fb0462382271be37aa506fe97370b519b18146d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e200b669f461f511221ce33fb0462382271be37aa506fe97370b519b18146d->enter($__internal_c8e200b669f461f511221ce33fb0462382271be37aa506fe97370b519b18146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_1eac453f406594415fa174662ee3b592bf3f2d49d7b9ec3880db5c3e019fe1f2->leave($__internal_1eac453f406594415fa174662ee3b592bf3f2d49d7b9ec3880db5c3e019fe1f2_prof);

        
        $__internal_c8e200b669f461f511221ce33fb0462382271be37aa506fe97370b519b18146d->leave($__internal_c8e200b669f461f511221ce33fb0462382271be37aa506fe97370b519b18146d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
