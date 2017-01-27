<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1e7a1f8bab4e20aa4dbb7afd21f0d1832f11973f4703c9c645f0aa3e13638cc7 extends Twig_Template
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
        $__internal_62a67cd51290ae60492014fb188f539e18eb078967e53296316f68ccb23f58cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a67cd51290ae60492014fb188f539e18eb078967e53296316f68ccb23f58cc->enter($__internal_62a67cd51290ae60492014fb188f539e18eb078967e53296316f68ccb23f58cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0000d90d25fe4f71a108edc6205ef3d858d27fddaf988da9bac1cf8a8f17eab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0000d90d25fe4f71a108edc6205ef3d858d27fddaf988da9bac1cf8a8f17eab3->enter($__internal_0000d90d25fe4f71a108edc6205ef3d858d27fddaf988da9bac1cf8a8f17eab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_62a67cd51290ae60492014fb188f539e18eb078967e53296316f68ccb23f58cc->leave($__internal_62a67cd51290ae60492014fb188f539e18eb078967e53296316f68ccb23f58cc_prof);

        
        $__internal_0000d90d25fe4f71a108edc6205ef3d858d27fddaf988da9bac1cf8a8f17eab3->leave($__internal_0000d90d25fe4f71a108edc6205ef3d858d27fddaf988da9bac1cf8a8f17eab3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
