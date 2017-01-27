<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_67ed0b308a3b20af32497669367b6f76949cf51537563c750d886bdd9c14e7ab extends Twig_Template
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
        $__internal_9b6211957875fdcbe6cdaaabc8e2f54ed93819f3220ae6ec36e33a8e981e6df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6211957875fdcbe6cdaaabc8e2f54ed93819f3220ae6ec36e33a8e981e6df9->enter($__internal_9b6211957875fdcbe6cdaaabc8e2f54ed93819f3220ae6ec36e33a8e981e6df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2616c61447f2730cd5fd9a9f797d730fcdfbda4f912ebc5d5c0602b44515002c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2616c61447f2730cd5fd9a9f797d730fcdfbda4f912ebc5d5c0602b44515002c->enter($__internal_2616c61447f2730cd5fd9a9f797d730fcdfbda4f912ebc5d5c0602b44515002c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9b6211957875fdcbe6cdaaabc8e2f54ed93819f3220ae6ec36e33a8e981e6df9->leave($__internal_9b6211957875fdcbe6cdaaabc8e2f54ed93819f3220ae6ec36e33a8e981e6df9_prof);

        
        $__internal_2616c61447f2730cd5fd9a9f797d730fcdfbda4f912ebc5d5c0602b44515002c->leave($__internal_2616c61447f2730cd5fd9a9f797d730fcdfbda4f912ebc5d5c0602b44515002c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
