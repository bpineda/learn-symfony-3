<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_984505c96580befa6e2a4f9b70e9221843e0cf5ee344f7c8b9b816f1b848a354 extends Twig_Template
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
        $__internal_c010c899d6b9fc2b67c38454e29a6b515f7f6102b76801b97bc9f0badc4876f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c010c899d6b9fc2b67c38454e29a6b515f7f6102b76801b97bc9f0badc4876f1->enter($__internal_c010c899d6b9fc2b67c38454e29a6b515f7f6102b76801b97bc9f0badc4876f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_23a3a3d2f1a2ac190cf4f7a18397ec7cbeeb7eaefbc084be4fff442d3c6d79a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a3a3d2f1a2ac190cf4f7a18397ec7cbeeb7eaefbc084be4fff442d3c6d79a7->enter($__internal_23a3a3d2f1a2ac190cf4f7a18397ec7cbeeb7eaefbc084be4fff442d3c6d79a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c010c899d6b9fc2b67c38454e29a6b515f7f6102b76801b97bc9f0badc4876f1->leave($__internal_c010c899d6b9fc2b67c38454e29a6b515f7f6102b76801b97bc9f0badc4876f1_prof);

        
        $__internal_23a3a3d2f1a2ac190cf4f7a18397ec7cbeeb7eaefbc084be4fff442d3c6d79a7->leave($__internal_23a3a3d2f1a2ac190cf4f7a18397ec7cbeeb7eaefbc084be4fff442d3c6d79a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
