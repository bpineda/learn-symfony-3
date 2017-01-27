<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_15c00127392710abb9a21bacbad0f804745c7f2ad4b33d5628346b8c9bb9edc8 extends Twig_Template
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
        $__internal_8a90ebabbf93d979c727a4b15636b27eea4e69b2322e4abbae64b6105776382a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a90ebabbf93d979c727a4b15636b27eea4e69b2322e4abbae64b6105776382a->enter($__internal_8a90ebabbf93d979c727a4b15636b27eea4e69b2322e4abbae64b6105776382a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b06c87706fcb11147fb6b28c785a86ceb40c5a458eeaac29f4640c564df6a1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06c87706fcb11147fb6b28c785a86ceb40c5a458eeaac29f4640c564df6a1dc->enter($__internal_b06c87706fcb11147fb6b28c785a86ceb40c5a458eeaac29f4640c564df6a1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8a90ebabbf93d979c727a4b15636b27eea4e69b2322e4abbae64b6105776382a->leave($__internal_8a90ebabbf93d979c727a4b15636b27eea4e69b2322e4abbae64b6105776382a_prof);

        
        $__internal_b06c87706fcb11147fb6b28c785a86ceb40c5a458eeaac29f4640c564df6a1dc->leave($__internal_b06c87706fcb11147fb6b28c785a86ceb40c5a458eeaac29f4640c564df6a1dc_prof);

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
", "@Framework/Form/percent_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
