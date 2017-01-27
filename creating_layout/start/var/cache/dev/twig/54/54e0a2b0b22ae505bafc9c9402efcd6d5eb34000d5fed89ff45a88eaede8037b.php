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
        $__internal_d01e95bb9b8702d6f221ef4757b061c557b0c80502f445155c09d8c332fcef3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01e95bb9b8702d6f221ef4757b061c557b0c80502f445155c09d8c332fcef3c->enter($__internal_d01e95bb9b8702d6f221ef4757b061c557b0c80502f445155c09d8c332fcef3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6329186423aa51612043049e39f8c75ac01aaeb9ea09f7997cae461bc085006f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6329186423aa51612043049e39f8c75ac01aaeb9ea09f7997cae461bc085006f->enter($__internal_6329186423aa51612043049e39f8c75ac01aaeb9ea09f7997cae461bc085006f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d01e95bb9b8702d6f221ef4757b061c557b0c80502f445155c09d8c332fcef3c->leave($__internal_d01e95bb9b8702d6f221ef4757b061c557b0c80502f445155c09d8c332fcef3c_prof);

        
        $__internal_6329186423aa51612043049e39f8c75ac01aaeb9ea09f7997cae461bc085006f->leave($__internal_6329186423aa51612043049e39f8c75ac01aaeb9ea09f7997cae461bc085006f_prof);

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
", "@Framework/Form/choice_options.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
