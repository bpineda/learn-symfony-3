<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_f6c9f1d21f6be8cbcf703030e551d6b57066174db4e712408f29b6c3a539d4f7 extends Twig_Template
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
        $__internal_a4d5f28eccd285b5c05c335dd68e304ea701f9b99edcbe29553037199d2e1e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d5f28eccd285b5c05c335dd68e304ea701f9b99edcbe29553037199d2e1e2d->enter($__internal_a4d5f28eccd285b5c05c335dd68e304ea701f9b99edcbe29553037199d2e1e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_5e6fe72292bf2d3b285ccfd7252d9aa82050f4f8a2c785baec0d9dd3a72eb09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6fe72292bf2d3b285ccfd7252d9aa82050f4f8a2c785baec0d9dd3a72eb09d->enter($__internal_5e6fe72292bf2d3b285ccfd7252d9aa82050f4f8a2c785baec0d9dd3a72eb09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a4d5f28eccd285b5c05c335dd68e304ea701f9b99edcbe29553037199d2e1e2d->leave($__internal_a4d5f28eccd285b5c05c335dd68e304ea701f9b99edcbe29553037199d2e1e2d_prof);

        
        $__internal_5e6fe72292bf2d3b285ccfd7252d9aa82050f4f8a2c785baec0d9dd3a72eb09d->leave($__internal_5e6fe72292bf2d3b285ccfd7252d9aa82050f4f8a2c785baec0d9dd3a72eb09d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
