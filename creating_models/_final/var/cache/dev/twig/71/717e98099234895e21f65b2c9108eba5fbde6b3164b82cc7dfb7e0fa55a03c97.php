<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_17a554e40bd3d9db1981ef15a9247be3530b67b3cd5626e7874f8804576ff299 extends Twig_Template
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
        $__internal_bcdc7fa580b920a022664aed9fc5c4202f8500ceb69c664d42534874a72e36b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdc7fa580b920a022664aed9fc5c4202f8500ceb69c664d42534874a72e36b4->enter($__internal_bcdc7fa580b920a022664aed9fc5c4202f8500ceb69c664d42534874a72e36b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b987b33c7e2ce1629e045f44fc55719aa8fa4c29d4cee8a57aa24e285a1f1300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b987b33c7e2ce1629e045f44fc55719aa8fa4c29d4cee8a57aa24e285a1f1300->enter($__internal_b987b33c7e2ce1629e045f44fc55719aa8fa4c29d4cee8a57aa24e285a1f1300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bcdc7fa580b920a022664aed9fc5c4202f8500ceb69c664d42534874a72e36b4->leave($__internal_bcdc7fa580b920a022664aed9fc5c4202f8500ceb69c664d42534874a72e36b4_prof);

        
        $__internal_b987b33c7e2ce1629e045f44fc55719aa8fa4c29d4cee8a57aa24e285a1f1300->leave($__internal_b987b33c7e2ce1629e045f44fc55719aa8fa4c29d4cee8a57aa24e285a1f1300_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
