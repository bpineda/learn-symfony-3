<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_78bc61b7fa32d623645140918cb3a325707ea274d199d3c1b456064915b75f3d extends Twig_Template
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
        $__internal_81c9734091650257a8efd7d1c97c83aed1c9ef622cf58129a58dc149f4d656cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c9734091650257a8efd7d1c97c83aed1c9ef622cf58129a58dc149f4d656cf->enter($__internal_81c9734091650257a8efd7d1c97c83aed1c9ef622cf58129a58dc149f4d656cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2c64245e39b5b0b28c73b2aca8f2af168718e9e91a43ec01a575a5305881b0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c64245e39b5b0b28c73b2aca8f2af168718e9e91a43ec01a575a5305881b0d6->enter($__internal_2c64245e39b5b0b28c73b2aca8f2af168718e9e91a43ec01a575a5305881b0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_81c9734091650257a8efd7d1c97c83aed1c9ef622cf58129a58dc149f4d656cf->leave($__internal_81c9734091650257a8efd7d1c97c83aed1c9ef622cf58129a58dc149f4d656cf_prof);

        
        $__internal_2c64245e39b5b0b28c73b2aca8f2af168718e9e91a43ec01a575a5305881b0d6->leave($__internal_2c64245e39b5b0b28c73b2aca8f2af168718e9e91a43ec01a575a5305881b0d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
