<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1a8ea2f29b0e8fcd32a8fb732c69cce726093125e892d6435320cbbdf55006d6 extends Twig_Template
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
        $__internal_f2f2bbb2fe31cd7f04013c99269834c9f03a47b0f3ed581a4041020a5c681e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f2bbb2fe31cd7f04013c99269834c9f03a47b0f3ed581a4041020a5c681e2c->enter($__internal_f2f2bbb2fe31cd7f04013c99269834c9f03a47b0f3ed581a4041020a5c681e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b740b230ca49894be11d91d5dd19031c3bba2cede60e07bbf1b1d7a66a6825c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b740b230ca49894be11d91d5dd19031c3bba2cede60e07bbf1b1d7a66a6825c7->enter($__internal_b740b230ca49894be11d91d5dd19031c3bba2cede60e07bbf1b1d7a66a6825c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f2f2bbb2fe31cd7f04013c99269834c9f03a47b0f3ed581a4041020a5c681e2c->leave($__internal_f2f2bbb2fe31cd7f04013c99269834c9f03a47b0f3ed581a4041020a5c681e2c_prof);

        
        $__internal_b740b230ca49894be11d91d5dd19031c3bba2cede60e07bbf1b1d7a66a6825c7->leave($__internal_b740b230ca49894be11d91d5dd19031c3bba2cede60e07bbf1b1d7a66a6825c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
