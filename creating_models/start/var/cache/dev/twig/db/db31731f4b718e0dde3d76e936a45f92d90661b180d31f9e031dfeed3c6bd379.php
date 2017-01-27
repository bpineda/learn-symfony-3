<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a3286960c4937078cb3bfa8806f6bbbda96de6c6d8c7588076addbcf43cf3015 extends Twig_Template
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
        $__internal_e035948a0b05ade575d5202aa30435b70f417320be8d5268f6563a9e127725a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e035948a0b05ade575d5202aa30435b70f417320be8d5268f6563a9e127725a8->enter($__internal_e035948a0b05ade575d5202aa30435b70f417320be8d5268f6563a9e127725a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_694b8e571405efb1512086b9121919246b3e3a38c316890c9735ac00196b99fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694b8e571405efb1512086b9121919246b3e3a38c316890c9735ac00196b99fa->enter($__internal_694b8e571405efb1512086b9121919246b3e3a38c316890c9735ac00196b99fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e035948a0b05ade575d5202aa30435b70f417320be8d5268f6563a9e127725a8->leave($__internal_e035948a0b05ade575d5202aa30435b70f417320be8d5268f6563a9e127725a8_prof);

        
        $__internal_694b8e571405efb1512086b9121919246b3e3a38c316890c9735ac00196b99fa->leave($__internal_694b8e571405efb1512086b9121919246b3e3a38c316890c9735ac00196b99fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
