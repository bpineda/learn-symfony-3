<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c5574891a8b980cce628984681949843c286794583f49f0e9f1ff6b002d9074e extends Twig_Template
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
        $__internal_e2e01b5af897cdf95c8c457f8e003f2985f8fe2cb7e73227068d792b9db8d6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e01b5af897cdf95c8c457f8e003f2985f8fe2cb7e73227068d792b9db8d6c7->enter($__internal_e2e01b5af897cdf95c8c457f8e003f2985f8fe2cb7e73227068d792b9db8d6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_831dace48d358e7f1a2850456d0f86156d7a911cdeb396691d21245162790e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831dace48d358e7f1a2850456d0f86156d7a911cdeb396691d21245162790e8e->enter($__internal_831dace48d358e7f1a2850456d0f86156d7a911cdeb396691d21245162790e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e2e01b5af897cdf95c8c457f8e003f2985f8fe2cb7e73227068d792b9db8d6c7->leave($__internal_e2e01b5af897cdf95c8c457f8e003f2985f8fe2cb7e73227068d792b9db8d6c7_prof);

        
        $__internal_831dace48d358e7f1a2850456d0f86156d7a911cdeb396691d21245162790e8e->leave($__internal_831dace48d358e7f1a2850456d0f86156d7a911cdeb396691d21245162790e8e_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
