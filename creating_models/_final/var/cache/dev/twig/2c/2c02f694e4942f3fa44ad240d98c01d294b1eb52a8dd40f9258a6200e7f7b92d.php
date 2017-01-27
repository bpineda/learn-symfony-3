<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_aaf1f5fbf0335be4addbe51c4d2b733c2ab49b7a52d1354b23da7af33ffbbd27 extends Twig_Template
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
        $__internal_18eadf93b5dd4e6a95aaba4ed5ad1b5010943a3a61be608656bdd467812a194c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18eadf93b5dd4e6a95aaba4ed5ad1b5010943a3a61be608656bdd467812a194c->enter($__internal_18eadf93b5dd4e6a95aaba4ed5ad1b5010943a3a61be608656bdd467812a194c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_42c24f60491488a6f0434039cea7d8c8d96a4ddda7db2280d8951e15e3bb59ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c24f60491488a6f0434039cea7d8c8d96a4ddda7db2280d8951e15e3bb59ce->enter($__internal_42c24f60491488a6f0434039cea7d8c8d96a4ddda7db2280d8951e15e3bb59ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_18eadf93b5dd4e6a95aaba4ed5ad1b5010943a3a61be608656bdd467812a194c->leave($__internal_18eadf93b5dd4e6a95aaba4ed5ad1b5010943a3a61be608656bdd467812a194c_prof);

        
        $__internal_42c24f60491488a6f0434039cea7d8c8d96a4ddda7db2280d8951e15e3bb59ce->leave($__internal_42c24f60491488a6f0434039cea7d8c8d96a4ddda7db2280d8951e15e3bb59ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
