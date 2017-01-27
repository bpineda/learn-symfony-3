<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2256ecca45113b85f61bda3af7ace20b8e4179eac1b60fcbdcb2ec05e5ed29ac extends Twig_Template
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
        $__internal_64ab1f3d370b873bdb9ddb223a2da4c1d9f3217081bfb4be959c7a361da3ff7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ab1f3d370b873bdb9ddb223a2da4c1d9f3217081bfb4be959c7a361da3ff7a->enter($__internal_64ab1f3d370b873bdb9ddb223a2da4c1d9f3217081bfb4be959c7a361da3ff7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_92e66c9cac511bd0fff69029adc5e8f38e1c9db8035d7719956ae1604cabbeb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e66c9cac511bd0fff69029adc5e8f38e1c9db8035d7719956ae1604cabbeb9->enter($__internal_92e66c9cac511bd0fff69029adc5e8f38e1c9db8035d7719956ae1604cabbeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_64ab1f3d370b873bdb9ddb223a2da4c1d9f3217081bfb4be959c7a361da3ff7a->leave($__internal_64ab1f3d370b873bdb9ddb223a2da4c1d9f3217081bfb4be959c7a361da3ff7a_prof);

        
        $__internal_92e66c9cac511bd0fff69029adc5e8f38e1c9db8035d7719956ae1604cabbeb9->leave($__internal_92e66c9cac511bd0fff69029adc5e8f38e1c9db8035d7719956ae1604cabbeb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
