<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7aa6d4422d6e0063ef0f946bb0989114d7527a013665471ffa76bd6626429e18 extends Twig_Template
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
        $__internal_f264df74f74e9c97b15d8211825aa331442c7f0d24adf3a2e7588090edf54384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f264df74f74e9c97b15d8211825aa331442c7f0d24adf3a2e7588090edf54384->enter($__internal_f264df74f74e9c97b15d8211825aa331442c7f0d24adf3a2e7588090edf54384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_dcb637b614c668c4f6b528d1d2c6ff8c5ca16771daa5f516f37552814d791b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb637b614c668c4f6b528d1d2c6ff8c5ca16771daa5f516f37552814d791b08->enter($__internal_dcb637b614c668c4f6b528d1d2c6ff8c5ca16771daa5f516f37552814d791b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f264df74f74e9c97b15d8211825aa331442c7f0d24adf3a2e7588090edf54384->leave($__internal_f264df74f74e9c97b15d8211825aa331442c7f0d24adf3a2e7588090edf54384_prof);

        
        $__internal_dcb637b614c668c4f6b528d1d2c6ff8c5ca16771daa5f516f37552814d791b08->leave($__internal_dcb637b614c668c4f6b528d1d2c6ff8c5ca16771daa5f516f37552814d791b08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
