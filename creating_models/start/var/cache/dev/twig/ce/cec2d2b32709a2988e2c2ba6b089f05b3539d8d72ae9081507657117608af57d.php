<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_593d10979dc0f4b40c5c0b703e830a9ccfe2bafa9fdabf362ad5f4f2640ed424 extends Twig_Template
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
        $__internal_58457be3ef0d6317128e53c6bb78953ad146abbe059a90ea6b483dcb4ccc50fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58457be3ef0d6317128e53c6bb78953ad146abbe059a90ea6b483dcb4ccc50fa->enter($__internal_58457be3ef0d6317128e53c6bb78953ad146abbe059a90ea6b483dcb4ccc50fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a63377557267b760c355c3fa26637c9e44cdc3cbfac8dd90b76f5b542487fe81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63377557267b760c355c3fa26637c9e44cdc3cbfac8dd90b76f5b542487fe81->enter($__internal_a63377557267b760c355c3fa26637c9e44cdc3cbfac8dd90b76f5b542487fe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_58457be3ef0d6317128e53c6bb78953ad146abbe059a90ea6b483dcb4ccc50fa->leave($__internal_58457be3ef0d6317128e53c6bb78953ad146abbe059a90ea6b483dcb4ccc50fa_prof);

        
        $__internal_a63377557267b760c355c3fa26637c9e44cdc3cbfac8dd90b76f5b542487fe81->leave($__internal_a63377557267b760c355c3fa26637c9e44cdc3cbfac8dd90b76f5b542487fe81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
