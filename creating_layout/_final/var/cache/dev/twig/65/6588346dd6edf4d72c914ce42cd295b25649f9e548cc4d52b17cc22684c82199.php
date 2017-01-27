<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_acc67efbe8dfabf866610a8d2ddf729d502aec8ccff741537b46cc72db61ee6a extends Twig_Template
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
        $__internal_0b75b4a3eb75b3e3d3e3b617ad15d8b53d56b85c38d4c9466aec491e410e7d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b75b4a3eb75b3e3d3e3b617ad15d8b53d56b85c38d4c9466aec491e410e7d9e->enter($__internal_0b75b4a3eb75b3e3d3e3b617ad15d8b53d56b85c38d4c9466aec491e410e7d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9f97341d02e5a701b1f533f33ace84e432d9cca036ed13481f203a45ca4ee1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f97341d02e5a701b1f533f33ace84e432d9cca036ed13481f203a45ca4ee1f8->enter($__internal_9f97341d02e5a701b1f533f33ace84e432d9cca036ed13481f203a45ca4ee1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0b75b4a3eb75b3e3d3e3b617ad15d8b53d56b85c38d4c9466aec491e410e7d9e->leave($__internal_0b75b4a3eb75b3e3d3e3b617ad15d8b53d56b85c38d4c9466aec491e410e7d9e_prof);

        
        $__internal_9f97341d02e5a701b1f533f33ace84e432d9cca036ed13481f203a45ca4ee1f8->leave($__internal_9f97341d02e5a701b1f533f33ace84e432d9cca036ed13481f203a45ca4ee1f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
