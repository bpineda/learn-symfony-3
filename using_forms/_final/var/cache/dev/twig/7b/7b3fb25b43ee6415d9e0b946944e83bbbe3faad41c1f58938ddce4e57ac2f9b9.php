<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_75d432435b26de8ba79bc647b7271cc48c9900734c6e9eb7cf939b987a4c5c0c extends Twig_Template
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
        $__internal_ff5bd7261ede6bbb74c956a7f5f0170af5885dcb8aa0d29ae7e7b1c9a1ec4a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5bd7261ede6bbb74c956a7f5f0170af5885dcb8aa0d29ae7e7b1c9a1ec4a96->enter($__internal_ff5bd7261ede6bbb74c956a7f5f0170af5885dcb8aa0d29ae7e7b1c9a1ec4a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_70641f0fa9ce75055fa92fea4625a248182cec8700974b9d6a58ea35dced50e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70641f0fa9ce75055fa92fea4625a248182cec8700974b9d6a58ea35dced50e7->enter($__internal_70641f0fa9ce75055fa92fea4625a248182cec8700974b9d6a58ea35dced50e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ff5bd7261ede6bbb74c956a7f5f0170af5885dcb8aa0d29ae7e7b1c9a1ec4a96->leave($__internal_ff5bd7261ede6bbb74c956a7f5f0170af5885dcb8aa0d29ae7e7b1c9a1ec4a96_prof);

        
        $__internal_70641f0fa9ce75055fa92fea4625a248182cec8700974b9d6a58ea35dced50e7->leave($__internal_70641f0fa9ce75055fa92fea4625a248182cec8700974b9d6a58ea35dced50e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
