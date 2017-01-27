<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b67aa2d7bad39db64ca9c69743272a3fb719189976ae487ab0ba93226c69c547 extends Twig_Template
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
        $__internal_2e4702886e9c94e00e1191f2fa528bb4a96237e47c155c8366bd99b2afd1d4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4702886e9c94e00e1191f2fa528bb4a96237e47c155c8366bd99b2afd1d4d5->enter($__internal_2e4702886e9c94e00e1191f2fa528bb4a96237e47c155c8366bd99b2afd1d4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5da345724f7d24053c821ceb8107832dbab6487c2a20079ace84d81dec63b143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da345724f7d24053c821ceb8107832dbab6487c2a20079ace84d81dec63b143->enter($__internal_5da345724f7d24053c821ceb8107832dbab6487c2a20079ace84d81dec63b143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2e4702886e9c94e00e1191f2fa528bb4a96237e47c155c8366bd99b2afd1d4d5->leave($__internal_2e4702886e9c94e00e1191f2fa528bb4a96237e47c155c8366bd99b2afd1d4d5_prof);

        
        $__internal_5da345724f7d24053c821ceb8107832dbab6487c2a20079ace84d81dec63b143->leave($__internal_5da345724f7d24053c821ceb8107832dbab6487c2a20079ace84d81dec63b143_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
