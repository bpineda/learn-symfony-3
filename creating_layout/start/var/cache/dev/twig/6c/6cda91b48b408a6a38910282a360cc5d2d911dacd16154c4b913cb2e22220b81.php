<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8b87475347bcd6bc9fe060ec4260beea5b38d682fdb039cd2a60fac765d81f92 extends Twig_Template
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
        $__internal_ed3ddd64b8f67b020f9d72e53079150d34d5c5364429d32c15f675d0482d604f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3ddd64b8f67b020f9d72e53079150d34d5c5364429d32c15f675d0482d604f->enter($__internal_ed3ddd64b8f67b020f9d72e53079150d34d5c5364429d32c15f675d0482d604f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_32977f244ae51ba3acfe97f3ba67fdc3bf819cbedfb70504e31caa94e8be6ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32977f244ae51ba3acfe97f3ba67fdc3bf819cbedfb70504e31caa94e8be6ea1->enter($__internal_32977f244ae51ba3acfe97f3ba67fdc3bf819cbedfb70504e31caa94e8be6ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ed3ddd64b8f67b020f9d72e53079150d34d5c5364429d32c15f675d0482d604f->leave($__internal_ed3ddd64b8f67b020f9d72e53079150d34d5c5364429d32c15f675d0482d604f_prof);

        
        $__internal_32977f244ae51ba3acfe97f3ba67fdc3bf819cbedfb70504e31caa94e8be6ea1->leave($__internal_32977f244ae51ba3acfe97f3ba67fdc3bf819cbedfb70504e31caa94e8be6ea1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
