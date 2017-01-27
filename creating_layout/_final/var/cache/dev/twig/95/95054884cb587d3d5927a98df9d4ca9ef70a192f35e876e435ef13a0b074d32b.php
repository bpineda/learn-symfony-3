<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_560e8b52d178a5a334d440485f5e98e60f11474ae76e82c895bc816739d46ed5 extends Twig_Template
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
        $__internal_7586ec6fb4a508eb1ddd5d12106a963030a3189ef6c69589395978b2b90bba92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7586ec6fb4a508eb1ddd5d12106a963030a3189ef6c69589395978b2b90bba92->enter($__internal_7586ec6fb4a508eb1ddd5d12106a963030a3189ef6c69589395978b2b90bba92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a186ff1e75b83719e2a5a29e110feb4265087ff3765a64986ec0b25e82decb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a186ff1e75b83719e2a5a29e110feb4265087ff3765a64986ec0b25e82decb3a->enter($__internal_a186ff1e75b83719e2a5a29e110feb4265087ff3765a64986ec0b25e82decb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7586ec6fb4a508eb1ddd5d12106a963030a3189ef6c69589395978b2b90bba92->leave($__internal_7586ec6fb4a508eb1ddd5d12106a963030a3189ef6c69589395978b2b90bba92_prof);

        
        $__internal_a186ff1e75b83719e2a5a29e110feb4265087ff3765a64986ec0b25e82decb3a->leave($__internal_a186ff1e75b83719e2a5a29e110feb4265087ff3765a64986ec0b25e82decb3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
