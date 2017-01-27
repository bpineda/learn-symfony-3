<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_495cfb1d25d8f3bdec897196383990c2ecbced19b77ac0f19df36d603f51b252 extends Twig_Template
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
        $__internal_9814636fe191e73092e77868ddfee815fa3e3774be6a25cde09282cfa627e4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9814636fe191e73092e77868ddfee815fa3e3774be6a25cde09282cfa627e4b8->enter($__internal_9814636fe191e73092e77868ddfee815fa3e3774be6a25cde09282cfa627e4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a7c9025bd6878d33cf8f5e5ae0da2d372d6e56d559a5346d3f700091959b5199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c9025bd6878d33cf8f5e5ae0da2d372d6e56d559a5346d3f700091959b5199->enter($__internal_a7c9025bd6878d33cf8f5e5ae0da2d372d6e56d559a5346d3f700091959b5199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9814636fe191e73092e77868ddfee815fa3e3774be6a25cde09282cfa627e4b8->leave($__internal_9814636fe191e73092e77868ddfee815fa3e3774be6a25cde09282cfa627e4b8_prof);

        
        $__internal_a7c9025bd6878d33cf8f5e5ae0da2d372d6e56d559a5346d3f700091959b5199->leave($__internal_a7c9025bd6878d33cf8f5e5ae0da2d372d6e56d559a5346d3f700091959b5199_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
