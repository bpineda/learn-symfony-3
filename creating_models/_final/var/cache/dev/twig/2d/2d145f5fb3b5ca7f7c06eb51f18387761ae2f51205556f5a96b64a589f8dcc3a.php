<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_07315ed7fef70b803afe8fd07cd80fa98465065bbe5944a6f719618ac0044594 extends Twig_Template
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
        $__internal_d4f0adc8803e9c32b5792f19bbbe5c293c662171fcd3e29a625de28c66f190d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f0adc8803e9c32b5792f19bbbe5c293c662171fcd3e29a625de28c66f190d4->enter($__internal_d4f0adc8803e9c32b5792f19bbbe5c293c662171fcd3e29a625de28c66f190d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_fefaf5daddf45a505fe88b46cb3edf4f1cc6c572b8bde6863c8e03cecb376129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefaf5daddf45a505fe88b46cb3edf4f1cc6c572b8bde6863c8e03cecb376129->enter($__internal_fefaf5daddf45a505fe88b46cb3edf4f1cc6c572b8bde6863c8e03cecb376129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d4f0adc8803e9c32b5792f19bbbe5c293c662171fcd3e29a625de28c66f190d4->leave($__internal_d4f0adc8803e9c32b5792f19bbbe5c293c662171fcd3e29a625de28c66f190d4_prof);

        
        $__internal_fefaf5daddf45a505fe88b46cb3edf4f1cc6c572b8bde6863c8e03cecb376129->leave($__internal_fefaf5daddf45a505fe88b46cb3edf4f1cc6c572b8bde6863c8e03cecb376129_prof);

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
", "@Twig/Exception/error.atom.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
