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
        $__internal_800b0eb378c12571dba57a9cb2448d2b4c67ced39c8e6a06f87819804bb4304f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800b0eb378c12571dba57a9cb2448d2b4c67ced39c8e6a06f87819804bb4304f->enter($__internal_800b0eb378c12571dba57a9cb2448d2b4c67ced39c8e6a06f87819804bb4304f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d915f10e454cc5c620aedc1dbcf365030f352dc5314ad19a1e0b926627304924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d915f10e454cc5c620aedc1dbcf365030f352dc5314ad19a1e0b926627304924->enter($__internal_d915f10e454cc5c620aedc1dbcf365030f352dc5314ad19a1e0b926627304924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_800b0eb378c12571dba57a9cb2448d2b4c67ced39c8e6a06f87819804bb4304f->leave($__internal_800b0eb378c12571dba57a9cb2448d2b4c67ced39c8e6a06f87819804bb4304f_prof);

        
        $__internal_d915f10e454cc5c620aedc1dbcf365030f352dc5314ad19a1e0b926627304924->leave($__internal_d915f10e454cc5c620aedc1dbcf365030f352dc5314ad19a1e0b926627304924_prof);

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
", "@Framework/Form/form_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
