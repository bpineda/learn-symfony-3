<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8197c3665eb54af64f2d7bd358fa5d553b9572695456ead28dc3b70c0752d3ea extends Twig_Template
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
        $__internal_61810c20b8b384da0992f6b5e034b3b56e755187cd2e43a119550f2bba15a7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61810c20b8b384da0992f6b5e034b3b56e755187cd2e43a119550f2bba15a7c9->enter($__internal_61810c20b8b384da0992f6b5e034b3b56e755187cd2e43a119550f2bba15a7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c8c086b10d0bc8bad32dbae2401f2b782b09ac5e37c138720d6febda0c6d754f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c086b10d0bc8bad32dbae2401f2b782b09ac5e37c138720d6febda0c6d754f->enter($__internal_c8c086b10d0bc8bad32dbae2401f2b782b09ac5e37c138720d6febda0c6d754f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_61810c20b8b384da0992f6b5e034b3b56e755187cd2e43a119550f2bba15a7c9->leave($__internal_61810c20b8b384da0992f6b5e034b3b56e755187cd2e43a119550f2bba15a7c9_prof);

        
        $__internal_c8c086b10d0bc8bad32dbae2401f2b782b09ac5e37c138720d6febda0c6d754f->leave($__internal_c8c086b10d0bc8bad32dbae2401f2b782b09ac5e37c138720d6febda0c6d754f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
