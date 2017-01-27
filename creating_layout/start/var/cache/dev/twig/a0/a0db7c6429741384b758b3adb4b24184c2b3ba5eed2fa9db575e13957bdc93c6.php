<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e7de574f9432a752b7aa1407aee3fe315c0f1aad2d8fb1f71d69a578f2ffc85c extends Twig_Template
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
        $__internal_96c602d449a224af349f2f970f5e29f3b16d1bcfbb46b615e0cdc5bfd18cb462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c602d449a224af349f2f970f5e29f3b16d1bcfbb46b615e0cdc5bfd18cb462->enter($__internal_96c602d449a224af349f2f970f5e29f3b16d1bcfbb46b615e0cdc5bfd18cb462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_fc69569bc8f03b2924d716c95c1d73370d33f162dacde7dca5b9a307a599587b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc69569bc8f03b2924d716c95c1d73370d33f162dacde7dca5b9a307a599587b->enter($__internal_fc69569bc8f03b2924d716c95c1d73370d33f162dacde7dca5b9a307a599587b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_96c602d449a224af349f2f970f5e29f3b16d1bcfbb46b615e0cdc5bfd18cb462->leave($__internal_96c602d449a224af349f2f970f5e29f3b16d1bcfbb46b615e0cdc5bfd18cb462_prof);

        
        $__internal_fc69569bc8f03b2924d716c95c1d73370d33f162dacde7dca5b9a307a599587b->leave($__internal_fc69569bc8f03b2924d716c95c1d73370d33f162dacde7dca5b9a307a599587b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
