<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_86cda109e0a43481b81de71e28009450ee4106893438f474d4ec522b759214ff extends Twig_Template
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
        $__internal_b9350093d8558e8fb84716d37122c5b559fb924e38b7fc9a98cc257ea25ca687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9350093d8558e8fb84716d37122c5b559fb924e38b7fc9a98cc257ea25ca687->enter($__internal_b9350093d8558e8fb84716d37122c5b559fb924e38b7fc9a98cc257ea25ca687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_37d6f65059752beee818d7502b2c4f45eba32950760b19c9b8a3c2183058a87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d6f65059752beee818d7502b2c4f45eba32950760b19c9b8a3c2183058a87d->enter($__internal_37d6f65059752beee818d7502b2c4f45eba32950760b19c9b8a3c2183058a87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b9350093d8558e8fb84716d37122c5b559fb924e38b7fc9a98cc257ea25ca687->leave($__internal_b9350093d8558e8fb84716d37122c5b559fb924e38b7fc9a98cc257ea25ca687_prof);

        
        $__internal_37d6f65059752beee818d7502b2c4f45eba32950760b19c9b8a3c2183058a87d->leave($__internal_37d6f65059752beee818d7502b2c4f45eba32950760b19c9b8a3c2183058a87d_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
