<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_21324357a1d9085b902510ae61ab7ff3ed65e0d28998bcb2d3a20e55f71f5c6d extends Twig_Template
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
        $__internal_af03fd4052fec1947440c76d9490acde65a6d52f50791b6cfbc0e92a77855f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af03fd4052fec1947440c76d9490acde65a6d52f50791b6cfbc0e92a77855f64->enter($__internal_af03fd4052fec1947440c76d9490acde65a6d52f50791b6cfbc0e92a77855f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d81ad16115cfa451b77e9f8798ceaee3e23a31221a52164fd2777a771c0300b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81ad16115cfa451b77e9f8798ceaee3e23a31221a52164fd2777a771c0300b1->enter($__internal_d81ad16115cfa451b77e9f8798ceaee3e23a31221a52164fd2777a771c0300b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_af03fd4052fec1947440c76d9490acde65a6d52f50791b6cfbc0e92a77855f64->leave($__internal_af03fd4052fec1947440c76d9490acde65a6d52f50791b6cfbc0e92a77855f64_prof);

        
        $__internal_d81ad16115cfa451b77e9f8798ceaee3e23a31221a52164fd2777a771c0300b1->leave($__internal_d81ad16115cfa451b77e9f8798ceaee3e23a31221a52164fd2777a771c0300b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
