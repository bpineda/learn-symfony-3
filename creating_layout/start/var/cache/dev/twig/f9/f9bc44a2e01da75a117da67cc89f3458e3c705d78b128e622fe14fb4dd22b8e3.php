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
        $__internal_f730566f9fec6148932982a308bf5be7b0cb19cd25e8cbb660722830da8f0758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f730566f9fec6148932982a308bf5be7b0cb19cd25e8cbb660722830da8f0758->enter($__internal_f730566f9fec6148932982a308bf5be7b0cb19cd25e8cbb660722830da8f0758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6c3cf26e96fd6bef5ebf49237b2edee0bad9313ee208b16783f4fb3662045d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3cf26e96fd6bef5ebf49237b2edee0bad9313ee208b16783f4fb3662045d06->enter($__internal_6c3cf26e96fd6bef5ebf49237b2edee0bad9313ee208b16783f4fb3662045d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f730566f9fec6148932982a308bf5be7b0cb19cd25e8cbb660722830da8f0758->leave($__internal_f730566f9fec6148932982a308bf5be7b0cb19cd25e8cbb660722830da8f0758_prof);

        
        $__internal_6c3cf26e96fd6bef5ebf49237b2edee0bad9313ee208b16783f4fb3662045d06->leave($__internal_6c3cf26e96fd6bef5ebf49237b2edee0bad9313ee208b16783f4fb3662045d06_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
