<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c5574891a8b980cce628984681949843c286794583f49f0e9f1ff6b002d9074e extends Twig_Template
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
        $__internal_3f730ed4723e70642f0b733a788a40e9309abd63bb25d25b2630e9fff842e5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f730ed4723e70642f0b733a788a40e9309abd63bb25d25b2630e9fff842e5bc->enter($__internal_3f730ed4723e70642f0b733a788a40e9309abd63bb25d25b2630e9fff842e5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_98c09d0bd23eba5a85fa5111776d3255821b87cd52fb90f08acde593b555883f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c09d0bd23eba5a85fa5111776d3255821b87cd52fb90f08acde593b555883f->enter($__internal_98c09d0bd23eba5a85fa5111776d3255821b87cd52fb90f08acde593b555883f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3f730ed4723e70642f0b733a788a40e9309abd63bb25d25b2630e9fff842e5bc->leave($__internal_3f730ed4723e70642f0b733a788a40e9309abd63bb25d25b2630e9fff842e5bc_prof);

        
        $__internal_98c09d0bd23eba5a85fa5111776d3255821b87cd52fb90f08acde593b555883f->leave($__internal_98c09d0bd23eba5a85fa5111776d3255821b87cd52fb90f08acde593b555883f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
