<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2876ca16d5c07b86cb194c73514e1def2ed1e7f254770bedd482dd06f0e666ab extends Twig_Template
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
        $__internal_ab740c67ddb7434ba585bdd3b5557397dc4814f4c8623e7fdd26295887968a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab740c67ddb7434ba585bdd3b5557397dc4814f4c8623e7fdd26295887968a6f->enter($__internal_ab740c67ddb7434ba585bdd3b5557397dc4814f4c8623e7fdd26295887968a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_659ab29406b9ee6014fcf28d2c3df900636592eb5043e0cc6c4f96be45bd2e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659ab29406b9ee6014fcf28d2c3df900636592eb5043e0cc6c4f96be45bd2e91->enter($__internal_659ab29406b9ee6014fcf28d2c3df900636592eb5043e0cc6c4f96be45bd2e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ab740c67ddb7434ba585bdd3b5557397dc4814f4c8623e7fdd26295887968a6f->leave($__internal_ab740c67ddb7434ba585bdd3b5557397dc4814f4c8623e7fdd26295887968a6f_prof);

        
        $__internal_659ab29406b9ee6014fcf28d2c3df900636592eb5043e0cc6c4f96be45bd2e91->leave($__internal_659ab29406b9ee6014fcf28d2c3df900636592eb5043e0cc6c4f96be45bd2e91_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
