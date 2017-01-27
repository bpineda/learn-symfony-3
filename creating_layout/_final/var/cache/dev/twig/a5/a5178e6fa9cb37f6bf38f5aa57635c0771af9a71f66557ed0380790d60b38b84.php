<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_27ea32d78ca7ec7014d1408831d6d540aea23ce2a4f50f184848a34b6ab01782 extends Twig_Template
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
        $__internal_24e5e1d7f9b5a537d3a057af1717d8da7d7202b523dc13f523ab182f783ae79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e5e1d7f9b5a537d3a057af1717d8da7d7202b523dc13f523ab182f783ae79e->enter($__internal_24e5e1d7f9b5a537d3a057af1717d8da7d7202b523dc13f523ab182f783ae79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_467ba0fc42eafbab367bd62e50959e2111ab10025bfc5bffa3d15545158c0faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467ba0fc42eafbab367bd62e50959e2111ab10025bfc5bffa3d15545158c0faf->enter($__internal_467ba0fc42eafbab367bd62e50959e2111ab10025bfc5bffa3d15545158c0faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_24e5e1d7f9b5a537d3a057af1717d8da7d7202b523dc13f523ab182f783ae79e->leave($__internal_24e5e1d7f9b5a537d3a057af1717d8da7d7202b523dc13f523ab182f783ae79e_prof);

        
        $__internal_467ba0fc42eafbab367bd62e50959e2111ab10025bfc5bffa3d15545158c0faf->leave($__internal_467ba0fc42eafbab367bd62e50959e2111ab10025bfc5bffa3d15545158c0faf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
