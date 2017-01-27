<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e4c86ebf21fa1de0698f826157bf5325ac9095d891346e86322a0006806767c6 extends Twig_Template
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
        $__internal_2927134f1daf5ea663d8e47c287dbd7ac4d915b4f42915bb052e6fb7c848f4dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2927134f1daf5ea663d8e47c287dbd7ac4d915b4f42915bb052e6fb7c848f4dc->enter($__internal_2927134f1daf5ea663d8e47c287dbd7ac4d915b4f42915bb052e6fb7c848f4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_8cf466b22e17ac38dd9d5fca2e93576f9ec2ad244213becf5f54b2e044f9f575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf466b22e17ac38dd9d5fca2e93576f9ec2ad244213becf5f54b2e044f9f575->enter($__internal_8cf466b22e17ac38dd9d5fca2e93576f9ec2ad244213becf5f54b2e044f9f575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2927134f1daf5ea663d8e47c287dbd7ac4d915b4f42915bb052e6fb7c848f4dc->leave($__internal_2927134f1daf5ea663d8e47c287dbd7ac4d915b4f42915bb052e6fb7c848f4dc_prof);

        
        $__internal_8cf466b22e17ac38dd9d5fca2e93576f9ec2ad244213becf5f54b2e044f9f575->leave($__internal_8cf466b22e17ac38dd9d5fca2e93576f9ec2ad244213becf5f54b2e044f9f575_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
