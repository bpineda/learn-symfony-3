<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e95c9d7e3865262da325421c54be43acb05a7c14938080290291cd79ea35e746 extends Twig_Template
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
        $__internal_cbba77aea1c83a2ac084d294777d9f788c500b3dbdfeee702c726fa5191175d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbba77aea1c83a2ac084d294777d9f788c500b3dbdfeee702c726fa5191175d7->enter($__internal_cbba77aea1c83a2ac084d294777d9f788c500b3dbdfeee702c726fa5191175d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_10dd0693eebaf04e10c54f99a8abfdad650516aed4bb86c5dcca39b066f1010c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10dd0693eebaf04e10c54f99a8abfdad650516aed4bb86c5dcca39b066f1010c->enter($__internal_10dd0693eebaf04e10c54f99a8abfdad650516aed4bb86c5dcca39b066f1010c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cbba77aea1c83a2ac084d294777d9f788c500b3dbdfeee702c726fa5191175d7->leave($__internal_cbba77aea1c83a2ac084d294777d9f788c500b3dbdfeee702c726fa5191175d7_prof);

        
        $__internal_10dd0693eebaf04e10c54f99a8abfdad650516aed4bb86c5dcca39b066f1010c->leave($__internal_10dd0693eebaf04e10c54f99a8abfdad650516aed4bb86c5dcca39b066f1010c_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
