<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f98984adee02d152b80e35d966878cf5bb2a7fff21c8ed03e615c8da3e44d481 extends Twig_Template
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
        $__internal_f62f445ebeef0880aa707022f6cd455f1fd65894686a35359949aa4eaeec3378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62f445ebeef0880aa707022f6cd455f1fd65894686a35359949aa4eaeec3378->enter($__internal_f62f445ebeef0880aa707022f6cd455f1fd65894686a35359949aa4eaeec3378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4ab429eb16cdd33c3678b988ef1387e0ce1fce211385f10ba531001a7eacd2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab429eb16cdd33c3678b988ef1387e0ce1fce211385f10ba531001a7eacd2e6->enter($__internal_4ab429eb16cdd33c3678b988ef1387e0ce1fce211385f10ba531001a7eacd2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f62f445ebeef0880aa707022f6cd455f1fd65894686a35359949aa4eaeec3378->leave($__internal_f62f445ebeef0880aa707022f6cd455f1fd65894686a35359949aa4eaeec3378_prof);

        
        $__internal_4ab429eb16cdd33c3678b988ef1387e0ce1fce211385f10ba531001a7eacd2e6->leave($__internal_4ab429eb16cdd33c3678b988ef1387e0ce1fce211385f10ba531001a7eacd2e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
