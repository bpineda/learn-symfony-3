<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_733b883909b66e4f0a2ec107c28cf1a36acbd9b45a13eb4b88b71ce8916391ca extends Twig_Template
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
        $__internal_3141720eb464c3abb9d1674584a61448bdd6826d0f9a8f5b48e7ab20854516af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3141720eb464c3abb9d1674584a61448bdd6826d0f9a8f5b48e7ab20854516af->enter($__internal_3141720eb464c3abb9d1674584a61448bdd6826d0f9a8f5b48e7ab20854516af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3912dbefc5a79315ed96d04a6a468f7948f69786d45fc251aa9d77b755813e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3912dbefc5a79315ed96d04a6a468f7948f69786d45fc251aa9d77b755813e83->enter($__internal_3912dbefc5a79315ed96d04a6a468f7948f69786d45fc251aa9d77b755813e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3141720eb464c3abb9d1674584a61448bdd6826d0f9a8f5b48e7ab20854516af->leave($__internal_3141720eb464c3abb9d1674584a61448bdd6826d0f9a8f5b48e7ab20854516af_prof);

        
        $__internal_3912dbefc5a79315ed96d04a6a468f7948f69786d45fc251aa9d77b755813e83->leave($__internal_3912dbefc5a79315ed96d04a6a468f7948f69786d45fc251aa9d77b755813e83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
