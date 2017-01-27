<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3e350fe11d29c7026f598fb1f4febdb72797f9f8cc3a0704d0a7346f746d8a52 extends Twig_Template
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
        $__internal_bdc3289a9f408e07c92741bfa64ca3c5e70795d7d66bd5e15d60c2d401737205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc3289a9f408e07c92741bfa64ca3c5e70795d7d66bd5e15d60c2d401737205->enter($__internal_bdc3289a9f408e07c92741bfa64ca3c5e70795d7d66bd5e15d60c2d401737205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a55852d66497a6f373cdb55e1a1581a1ad5966995fa886455ab8606cd3e80c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55852d66497a6f373cdb55e1a1581a1ad5966995fa886455ab8606cd3e80c2c->enter($__internal_a55852d66497a6f373cdb55e1a1581a1ad5966995fa886455ab8606cd3e80c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bdc3289a9f408e07c92741bfa64ca3c5e70795d7d66bd5e15d60c2d401737205->leave($__internal_bdc3289a9f408e07c92741bfa64ca3c5e70795d7d66bd5e15d60c2d401737205_prof);

        
        $__internal_a55852d66497a6f373cdb55e1a1581a1ad5966995fa886455ab8606cd3e80c2c->leave($__internal_a55852d66497a6f373cdb55e1a1581a1ad5966995fa886455ab8606cd3e80c2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
