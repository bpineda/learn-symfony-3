<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_4e9f0cee3b1b5f79722802ae2a65aa8a386f85ce421231a98191fb15bd8db6ec extends Twig_Template
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
        $__internal_3d532e733cc5563f7a2f3554378a015b1752dc66670d66b9f0fd0ed6156a1191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d532e733cc5563f7a2f3554378a015b1752dc66670d66b9f0fd0ed6156a1191->enter($__internal_3d532e733cc5563f7a2f3554378a015b1752dc66670d66b9f0fd0ed6156a1191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_fa62ac0813d62b3d39db368467b722c1725f8711f25ba925833f72f31e823d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa62ac0813d62b3d39db368467b722c1725f8711f25ba925833f72f31e823d96->enter($__internal_fa62ac0813d62b3d39db368467b722c1725f8711f25ba925833f72f31e823d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3d532e733cc5563f7a2f3554378a015b1752dc66670d66b9f0fd0ed6156a1191->leave($__internal_3d532e733cc5563f7a2f3554378a015b1752dc66670d66b9f0fd0ed6156a1191_prof);

        
        $__internal_fa62ac0813d62b3d39db368467b722c1725f8711f25ba925833f72f31e823d96->leave($__internal_fa62ac0813d62b3d39db368467b722c1725f8711f25ba925833f72f31e823d96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
