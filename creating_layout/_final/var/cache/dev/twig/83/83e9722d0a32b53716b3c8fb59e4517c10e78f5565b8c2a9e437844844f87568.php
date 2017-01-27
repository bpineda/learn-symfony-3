<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7b8dedebbcaf0a4e981bec2f3859260da2ebd5acaa1d1b18c477fa7ae977e80f extends Twig_Template
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
        $__internal_37b9daf5b29a965dc4e6b3a44cfbab03907db1e481be7a9b3354246e50b1c753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b9daf5b29a965dc4e6b3a44cfbab03907db1e481be7a9b3354246e50b1c753->enter($__internal_37b9daf5b29a965dc4e6b3a44cfbab03907db1e481be7a9b3354246e50b1c753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_dd3021f97bbbe85a0c516e968c3b3582f5b72918ee98e4c56f75fddac386869c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3021f97bbbe85a0c516e968c3b3582f5b72918ee98e4c56f75fddac386869c->enter($__internal_dd3021f97bbbe85a0c516e968c3b3582f5b72918ee98e4c56f75fddac386869c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_37b9daf5b29a965dc4e6b3a44cfbab03907db1e481be7a9b3354246e50b1c753->leave($__internal_37b9daf5b29a965dc4e6b3a44cfbab03907db1e481be7a9b3354246e50b1c753_prof);

        
        $__internal_dd3021f97bbbe85a0c516e968c3b3582f5b72918ee98e4c56f75fddac386869c->leave($__internal_dd3021f97bbbe85a0c516e968c3b3582f5b72918ee98e4c56f75fddac386869c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
