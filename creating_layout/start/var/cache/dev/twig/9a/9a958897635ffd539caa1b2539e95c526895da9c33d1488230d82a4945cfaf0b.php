<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_6fab1bb7aeb690b637254b9f083a29f2bbfa7ca82d585cf8d5f5672c35e23dba extends Twig_Template
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
        $__internal_10f8dc2dec959d9df300cf5b1e80e77c7dcc29c1ece1a0ad1e5321ddb8ca4493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f8dc2dec959d9df300cf5b1e80e77c7dcc29c1ece1a0ad1e5321ddb8ca4493->enter($__internal_10f8dc2dec959d9df300cf5b1e80e77c7dcc29c1ece1a0ad1e5321ddb8ca4493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1239d3e69a147f21b2f66e323768b51871336caab45c0fdf422f619bc73d2872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1239d3e69a147f21b2f66e323768b51871336caab45c0fdf422f619bc73d2872->enter($__internal_1239d3e69a147f21b2f66e323768b51871336caab45c0fdf422f619bc73d2872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_10f8dc2dec959d9df300cf5b1e80e77c7dcc29c1ece1a0ad1e5321ddb8ca4493->leave($__internal_10f8dc2dec959d9df300cf5b1e80e77c7dcc29c1ece1a0ad1e5321ddb8ca4493_prof);

        
        $__internal_1239d3e69a147f21b2f66e323768b51871336caab45c0fdf422f619bc73d2872->leave($__internal_1239d3e69a147f21b2f66e323768b51871336caab45c0fdf422f619bc73d2872_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
