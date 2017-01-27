<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_63d3c19d53acabf83246b15e5f0dee6cd3fbb95abab7acb744bab2466c060f3c extends Twig_Template
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
        $__internal_4a165f20d933ab1c7a0c24e59cede88a9f829a4fa7ffe462e36c07face9a5ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a165f20d933ab1c7a0c24e59cede88a9f829a4fa7ffe462e36c07face9a5ec6->enter($__internal_4a165f20d933ab1c7a0c24e59cede88a9f829a4fa7ffe462e36c07face9a5ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d0b370e11d4b431111f95edc95dc4f6c8f14b841877f2ca7a4ba419142129bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b370e11d4b431111f95edc95dc4f6c8f14b841877f2ca7a4ba419142129bd4->enter($__internal_d0b370e11d4b431111f95edc95dc4f6c8f14b841877f2ca7a4ba419142129bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4a165f20d933ab1c7a0c24e59cede88a9f829a4fa7ffe462e36c07face9a5ec6->leave($__internal_4a165f20d933ab1c7a0c24e59cede88a9f829a4fa7ffe462e36c07face9a5ec6_prof);

        
        $__internal_d0b370e11d4b431111f95edc95dc4f6c8f14b841877f2ca7a4ba419142129bd4->leave($__internal_d0b370e11d4b431111f95edc95dc4f6c8f14b841877f2ca7a4ba419142129bd4_prof);

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
", "@Framework/Form/email_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
