<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8b87475347bcd6bc9fe060ec4260beea5b38d682fdb039cd2a60fac765d81f92 extends Twig_Template
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
        $__internal_94d02f8962ae127fd7f6742ac41ac18f8a086906b3df561418792fa6ab3d4d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d02f8962ae127fd7f6742ac41ac18f8a086906b3df561418792fa6ab3d4d47->enter($__internal_94d02f8962ae127fd7f6742ac41ac18f8a086906b3df561418792fa6ab3d4d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7107c1f3bab84d4cef192f8c67b22dd74a5a5e13e4dada16e04fc43db10f2383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7107c1f3bab84d4cef192f8c67b22dd74a5a5e13e4dada16e04fc43db10f2383->enter($__internal_7107c1f3bab84d4cef192f8c67b22dd74a5a5e13e4dada16e04fc43db10f2383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_94d02f8962ae127fd7f6742ac41ac18f8a086906b3df561418792fa6ab3d4d47->leave($__internal_94d02f8962ae127fd7f6742ac41ac18f8a086906b3df561418792fa6ab3d4d47_prof);

        
        $__internal_7107c1f3bab84d4cef192f8c67b22dd74a5a5e13e4dada16e04fc43db10f2383->leave($__internal_7107c1f3bab84d4cef192f8c67b22dd74a5a5e13e4dada16e04fc43db10f2383_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
