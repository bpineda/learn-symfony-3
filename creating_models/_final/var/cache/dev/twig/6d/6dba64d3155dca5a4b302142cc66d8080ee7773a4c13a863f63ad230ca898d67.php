<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c6224273f808488cd51c5da42ab6da456434b908e52c9b98a2d187e6dda474fe extends Twig_Template
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
        $__internal_376420de67a7f4ffbe562059822598647ca43a0fa0044a1499befd4c91133d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376420de67a7f4ffbe562059822598647ca43a0fa0044a1499befd4c91133d81->enter($__internal_376420de67a7f4ffbe562059822598647ca43a0fa0044a1499befd4c91133d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_b89bc0c4ba6483be9049799efeb960db229a45fdf5b9709c4ec2c672e73ab26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89bc0c4ba6483be9049799efeb960db229a45fdf5b9709c4ec2c672e73ab26a->enter($__internal_b89bc0c4ba6483be9049799efeb960db229a45fdf5b9709c4ec2c672e73ab26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_376420de67a7f4ffbe562059822598647ca43a0fa0044a1499befd4c91133d81->leave($__internal_376420de67a7f4ffbe562059822598647ca43a0fa0044a1499befd4c91133d81_prof);

        
        $__internal_b89bc0c4ba6483be9049799efeb960db229a45fdf5b9709c4ec2c672e73ab26a->leave($__internal_b89bc0c4ba6483be9049799efeb960db229a45fdf5b9709c4ec2c672e73ab26a_prof);

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
", "@Twig/Exception/error.css.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
