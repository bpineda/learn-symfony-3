<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ef0bec61c4b2aa57b76a1d82b09797bc1877fb49da66dfdc43a5ff03a830d3a6 extends Twig_Template
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
        $__internal_89bafb8f908825a8cf1c84d571bce170d3114abc2b307aaf469860069db450dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89bafb8f908825a8cf1c84d571bce170d3114abc2b307aaf469860069db450dd->enter($__internal_89bafb8f908825a8cf1c84d571bce170d3114abc2b307aaf469860069db450dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_cdd978815658a5bf4518af2fd0a299674b6ea774dc9dc5da841667e18f5f924f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd978815658a5bf4518af2fd0a299674b6ea774dc9dc5da841667e18f5f924f->enter($__internal_cdd978815658a5bf4518af2fd0a299674b6ea774dc9dc5da841667e18f5f924f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_89bafb8f908825a8cf1c84d571bce170d3114abc2b307aaf469860069db450dd->leave($__internal_89bafb8f908825a8cf1c84d571bce170d3114abc2b307aaf469860069db450dd_prof);

        
        $__internal_cdd978815658a5bf4518af2fd0a299674b6ea774dc9dc5da841667e18f5f924f->leave($__internal_cdd978815658a5bf4518af2fd0a299674b6ea774dc9dc5da841667e18f5f924f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
