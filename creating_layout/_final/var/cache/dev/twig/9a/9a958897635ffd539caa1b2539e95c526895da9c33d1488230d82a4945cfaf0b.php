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
        $__internal_02f4cbe628f07f422d272d27cec143b7570d0cd4f71a4859f1fb002fa75b26d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f4cbe628f07f422d272d27cec143b7570d0cd4f71a4859f1fb002fa75b26d8->enter($__internal_02f4cbe628f07f422d272d27cec143b7570d0cd4f71a4859f1fb002fa75b26d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0ef1b37b3fe577bcfc7a910ffeec7a01d3fde30a5765a9449c300fdf0eab2b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef1b37b3fe577bcfc7a910ffeec7a01d3fde30a5765a9449c300fdf0eab2b4f->enter($__internal_0ef1b37b3fe577bcfc7a910ffeec7a01d3fde30a5765a9449c300fdf0eab2b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_02f4cbe628f07f422d272d27cec143b7570d0cd4f71a4859f1fb002fa75b26d8->leave($__internal_02f4cbe628f07f422d272d27cec143b7570d0cd4f71a4859f1fb002fa75b26d8_prof);

        
        $__internal_0ef1b37b3fe577bcfc7a910ffeec7a01d3fde30a5765a9449c300fdf0eab2b4f->leave($__internal_0ef1b37b3fe577bcfc7a910ffeec7a01d3fde30a5765a9449c300fdf0eab2b4f_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
