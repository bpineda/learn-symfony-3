<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9ef369a0eeb937e09fc70afea8044e9a68d1b1c0247bd7907f7eb3b45eaa1377 extends Twig_Template
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
        $__internal_21b3b2890ea8e5d161225384f1a7b103f653dbdeca76a035f7b4c4bf73824c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b3b2890ea8e5d161225384f1a7b103f653dbdeca76a035f7b4c4bf73824c78->enter($__internal_21b3b2890ea8e5d161225384f1a7b103f653dbdeca76a035f7b4c4bf73824c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_13b9f2a32cea7ce269ed929a671f935d20843f84c32d5cd734df096da0ad48b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b9f2a32cea7ce269ed929a671f935d20843f84c32d5cd734df096da0ad48b8->enter($__internal_13b9f2a32cea7ce269ed929a671f935d20843f84c32d5cd734df096da0ad48b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_21b3b2890ea8e5d161225384f1a7b103f653dbdeca76a035f7b4c4bf73824c78->leave($__internal_21b3b2890ea8e5d161225384f1a7b103f653dbdeca76a035f7b4c4bf73824c78_prof);

        
        $__internal_13b9f2a32cea7ce269ed929a671f935d20843f84c32d5cd734df096da0ad48b8->leave($__internal_13b9f2a32cea7ce269ed929a671f935d20843f84c32d5cd734df096da0ad48b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
