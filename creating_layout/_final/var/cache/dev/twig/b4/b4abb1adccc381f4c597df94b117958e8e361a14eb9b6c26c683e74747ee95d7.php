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
        $__internal_1c18c0d763969206a19dfeb3a89d045c652208be696b250090871158d114af9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c18c0d763969206a19dfeb3a89d045c652208be696b250090871158d114af9a->enter($__internal_1c18c0d763969206a19dfeb3a89d045c652208be696b250090871158d114af9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0525ca56cc66523a17d6b7bee945a4afd956178c22019a0616f122f1dc6966d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0525ca56cc66523a17d6b7bee945a4afd956178c22019a0616f122f1dc6966d0->enter($__internal_0525ca56cc66523a17d6b7bee945a4afd956178c22019a0616f122f1dc6966d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1c18c0d763969206a19dfeb3a89d045c652208be696b250090871158d114af9a->leave($__internal_1c18c0d763969206a19dfeb3a89d045c652208be696b250090871158d114af9a_prof);

        
        $__internal_0525ca56cc66523a17d6b7bee945a4afd956178c22019a0616f122f1dc6966d0->leave($__internal_0525ca56cc66523a17d6b7bee945a4afd956178c22019a0616f122f1dc6966d0_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
