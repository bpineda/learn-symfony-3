<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c02a4531965c8d193a8b1cab86cd62377bb671c85e8cc5b32fc79d88f6a2bc1f extends Twig_Template
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
        $__internal_a5fd3f48ed0fe46b76d638dae2e4b80193c68e952a7623d46ef61e4059c811d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fd3f48ed0fe46b76d638dae2e4b80193c68e952a7623d46ef61e4059c811d3->enter($__internal_a5fd3f48ed0fe46b76d638dae2e4b80193c68e952a7623d46ef61e4059c811d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_17214b88977f2698319b1434049143458ca04dbfa2a6f7ca106974db83938d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17214b88977f2698319b1434049143458ca04dbfa2a6f7ca106974db83938d59->enter($__internal_17214b88977f2698319b1434049143458ca04dbfa2a6f7ca106974db83938d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a5fd3f48ed0fe46b76d638dae2e4b80193c68e952a7623d46ef61e4059c811d3->leave($__internal_a5fd3f48ed0fe46b76d638dae2e4b80193c68e952a7623d46ef61e4059c811d3_prof);

        
        $__internal_17214b88977f2698319b1434049143458ca04dbfa2a6f7ca106974db83938d59->leave($__internal_17214b88977f2698319b1434049143458ca04dbfa2a6f7ca106974db83938d59_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
