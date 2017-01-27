<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_46fb94d3043ab9342a6bbe165e6ceb23c8071781b8811ff3096b37eed5b30bd5 extends Twig_Template
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
        $__internal_16575af6f45a9416b41719411d910b5a5e2695a9d5777bb59abc902acef21818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16575af6f45a9416b41719411d910b5a5e2695a9d5777bb59abc902acef21818->enter($__internal_16575af6f45a9416b41719411d910b5a5e2695a9d5777bb59abc902acef21818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_805f23d08246fce14094895b2877444f98658adba3720c0995c258f130266d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805f23d08246fce14094895b2877444f98658adba3720c0995c258f130266d50->enter($__internal_805f23d08246fce14094895b2877444f98658adba3720c0995c258f130266d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_16575af6f45a9416b41719411d910b5a5e2695a9d5777bb59abc902acef21818->leave($__internal_16575af6f45a9416b41719411d910b5a5e2695a9d5777bb59abc902acef21818_prof);

        
        $__internal_805f23d08246fce14094895b2877444f98658adba3720c0995c258f130266d50->leave($__internal_805f23d08246fce14094895b2877444f98658adba3720c0995c258f130266d50_prof);

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
", "@Framework/Form/form_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
