<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_117d7e6ba912c8024a0275b56ed8553d86fb57108b92f907017796efd08f20dd extends Twig_Template
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
        $__internal_ea0f9205aeba3d37715327399c89dbfb0cfcc03e987434667df555a2a850e6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0f9205aeba3d37715327399c89dbfb0cfcc03e987434667df555a2a850e6af->enter($__internal_ea0f9205aeba3d37715327399c89dbfb0cfcc03e987434667df555a2a850e6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_aea9836f93f0fc96e8da305081c6b1f04c4f8dbcb7da12b9a37c4d6873a600de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea9836f93f0fc96e8da305081c6b1f04c4f8dbcb7da12b9a37c4d6873a600de->enter($__internal_aea9836f93f0fc96e8da305081c6b1f04c4f8dbcb7da12b9a37c4d6873a600de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ea0f9205aeba3d37715327399c89dbfb0cfcc03e987434667df555a2a850e6af->leave($__internal_ea0f9205aeba3d37715327399c89dbfb0cfcc03e987434667df555a2a850e6af_prof);

        
        $__internal_aea9836f93f0fc96e8da305081c6b1f04c4f8dbcb7da12b9a37c4d6873a600de->leave($__internal_aea9836f93f0fc96e8da305081c6b1f04c4f8dbcb7da12b9a37c4d6873a600de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
