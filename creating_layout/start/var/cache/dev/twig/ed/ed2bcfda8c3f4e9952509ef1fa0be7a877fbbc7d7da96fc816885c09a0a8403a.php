<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_966c31e5eba600d44dd07f93b2e403c957bf8804aef09a9f8c45109fc681a15b extends Twig_Template
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
        $__internal_9b8d5082dd2b435de8d806ce8952ed4bdadd287717cd49599a6ebfcc89a4a406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8d5082dd2b435de8d806ce8952ed4bdadd287717cd49599a6ebfcc89a4a406->enter($__internal_9b8d5082dd2b435de8d806ce8952ed4bdadd287717cd49599a6ebfcc89a4a406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_89c6bfe27f6165f591b7ceadc0c3d3de7a6d6a8e7b6cb83be32ebbe052e746f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c6bfe27f6165f591b7ceadc0c3d3de7a6d6a8e7b6cb83be32ebbe052e746f0->enter($__internal_89c6bfe27f6165f591b7ceadc0c3d3de7a6d6a8e7b6cb83be32ebbe052e746f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9b8d5082dd2b435de8d806ce8952ed4bdadd287717cd49599a6ebfcc89a4a406->leave($__internal_9b8d5082dd2b435de8d806ce8952ed4bdadd287717cd49599a6ebfcc89a4a406_prof);

        
        $__internal_89c6bfe27f6165f591b7ceadc0c3d3de7a6d6a8e7b6cb83be32ebbe052e746f0->leave($__internal_89c6bfe27f6165f591b7ceadc0c3d3de7a6d6a8e7b6cb83be32ebbe052e746f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
