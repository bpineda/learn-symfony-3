<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_369b3615618aca3c7fd9e5b5aeb398c9b6040190e311650aaa4131ff5d76e5a2 extends Twig_Template
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
        $__internal_628bdb138b12fd83d3ca70df018a5b048a0f309b70c27d885316812f03f95f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628bdb138b12fd83d3ca70df018a5b048a0f309b70c27d885316812f03f95f12->enter($__internal_628bdb138b12fd83d3ca70df018a5b048a0f309b70c27d885316812f03f95f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ce5ed86ab3baf2de839c7ac36a1c0e8aea359778667664d6236acd703ac69aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5ed86ab3baf2de839c7ac36a1c0e8aea359778667664d6236acd703ac69aff->enter($__internal_ce5ed86ab3baf2de839c7ac36a1c0e8aea359778667664d6236acd703ac69aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_628bdb138b12fd83d3ca70df018a5b048a0f309b70c27d885316812f03f95f12->leave($__internal_628bdb138b12fd83d3ca70df018a5b048a0f309b70c27d885316812f03f95f12_prof);

        
        $__internal_ce5ed86ab3baf2de839c7ac36a1c0e8aea359778667664d6236acd703ac69aff->leave($__internal_ce5ed86ab3baf2de839c7ac36a1c0e8aea359778667664d6236acd703ac69aff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
