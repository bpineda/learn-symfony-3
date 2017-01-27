<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8135d1f43ee6b5a5055b85c1b2dc042c7acc2eb5d13d68e6f011013f80d50cbb extends Twig_Template
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
        $__internal_00b929c4d83ab95e3f9b328019a851acb72d097bcc2224dc3810564675f1995b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b929c4d83ab95e3f9b328019a851acb72d097bcc2224dc3810564675f1995b->enter($__internal_00b929c4d83ab95e3f9b328019a851acb72d097bcc2224dc3810564675f1995b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b4468a544f366968d0b4ea162513c8c237e3ffd4ce20b2104eb622e3a79e3784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4468a544f366968d0b4ea162513c8c237e3ffd4ce20b2104eb622e3a79e3784->enter($__internal_b4468a544f366968d0b4ea162513c8c237e3ffd4ce20b2104eb622e3a79e3784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_00b929c4d83ab95e3f9b328019a851acb72d097bcc2224dc3810564675f1995b->leave($__internal_00b929c4d83ab95e3f9b328019a851acb72d097bcc2224dc3810564675f1995b_prof);

        
        $__internal_b4468a544f366968d0b4ea162513c8c237e3ffd4ce20b2104eb622e3a79e3784->leave($__internal_b4468a544f366968d0b4ea162513c8c237e3ffd4ce20b2104eb622e3a79e3784_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
