<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0d48afd35a046e2b2baa6070668a4a3311cbcce476240d4c94916fabf34a99bd extends Twig_Template
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
        $__internal_55f4d0c71d82d3ee0b0742d94fa2091a570dc3909fecffc57c04a0f7e1538018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f4d0c71d82d3ee0b0742d94fa2091a570dc3909fecffc57c04a0f7e1538018->enter($__internal_55f4d0c71d82d3ee0b0742d94fa2091a570dc3909fecffc57c04a0f7e1538018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_541b4d3e9ae76b55e29a9e368bc3a65e602676ee2fecf6542161b3ed0d0ea4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541b4d3e9ae76b55e29a9e368bc3a65e602676ee2fecf6542161b3ed0d0ea4e9->enter($__internal_541b4d3e9ae76b55e29a9e368bc3a65e602676ee2fecf6542161b3ed0d0ea4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_55f4d0c71d82d3ee0b0742d94fa2091a570dc3909fecffc57c04a0f7e1538018->leave($__internal_55f4d0c71d82d3ee0b0742d94fa2091a570dc3909fecffc57c04a0f7e1538018_prof);

        
        $__internal_541b4d3e9ae76b55e29a9e368bc3a65e602676ee2fecf6542161b3ed0d0ea4e9->leave($__internal_541b4d3e9ae76b55e29a9e368bc3a65e602676ee2fecf6542161b3ed0d0ea4e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
