<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4b2e27988eed615d35295441117f8caf5fbec0967cbda51c9f86f9e55d4bde81 extends Twig_Template
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
        $__internal_007821765f2f2d4d844894afcca0633f70aab0ec467bebd1a27cd34b40e7e860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007821765f2f2d4d844894afcca0633f70aab0ec467bebd1a27cd34b40e7e860->enter($__internal_007821765f2f2d4d844894afcca0633f70aab0ec467bebd1a27cd34b40e7e860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_906ec7f542b80b60e1c0d22089e42d6cdd49bed3f8d119344e15d2cd8fc2bb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906ec7f542b80b60e1c0d22089e42d6cdd49bed3f8d119344e15d2cd8fc2bb38->enter($__internal_906ec7f542b80b60e1c0d22089e42d6cdd49bed3f8d119344e15d2cd8fc2bb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_007821765f2f2d4d844894afcca0633f70aab0ec467bebd1a27cd34b40e7e860->leave($__internal_007821765f2f2d4d844894afcca0633f70aab0ec467bebd1a27cd34b40e7e860_prof);

        
        $__internal_906ec7f542b80b60e1c0d22089e42d6cdd49bed3f8d119344e15d2cd8fc2bb38->leave($__internal_906ec7f542b80b60e1c0d22089e42d6cdd49bed3f8d119344e15d2cd8fc2bb38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
