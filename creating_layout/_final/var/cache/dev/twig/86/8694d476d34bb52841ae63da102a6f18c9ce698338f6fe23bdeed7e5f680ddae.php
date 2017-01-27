<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_3eddd08e19c5cefc16b7e13088a59468c8ec35882f2f12d5c41e5f7629e25472 extends Twig_Template
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
        $__internal_9236e89133e730f186398606cc1a8cca469f014ff0bb68908410e03c4d6a938c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9236e89133e730f186398606cc1a8cca469f014ff0bb68908410e03c4d6a938c->enter($__internal_9236e89133e730f186398606cc1a8cca469f014ff0bb68908410e03c4d6a938c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_75724812cd202fd3d39cf963a9b92828622b64eff548e1c5eff7ef3705657d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75724812cd202fd3d39cf963a9b92828622b64eff548e1c5eff7ef3705657d43->enter($__internal_75724812cd202fd3d39cf963a9b92828622b64eff548e1c5eff7ef3705657d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_9236e89133e730f186398606cc1a8cca469f014ff0bb68908410e03c4d6a938c->leave($__internal_9236e89133e730f186398606cc1a8cca469f014ff0bb68908410e03c4d6a938c_prof);

        
        $__internal_75724812cd202fd3d39cf963a9b92828622b64eff548e1c5eff7ef3705657d43->leave($__internal_75724812cd202fd3d39cf963a9b92828622b64eff548e1c5eff7ef3705657d43_prof);

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
", "@Twig/Exception/error.xml.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
