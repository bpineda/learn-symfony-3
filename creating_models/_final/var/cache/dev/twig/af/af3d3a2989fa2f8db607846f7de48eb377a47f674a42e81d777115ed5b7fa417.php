<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fb72a5674f47256ca99e52304878b15f7aba8bdfddc1733d6586d6815f4d3271 extends Twig_Template
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
        $__internal_1f2bb812140fffc5d09bfb5a4ca8b7df0c0b2cf3e6c47e8a5002b99ce90cc528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2bb812140fffc5d09bfb5a4ca8b7df0c0b2cf3e6c47e8a5002b99ce90cc528->enter($__internal_1f2bb812140fffc5d09bfb5a4ca8b7df0c0b2cf3e6c47e8a5002b99ce90cc528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f1c8e02d11087e2ca1c8c13d4721a94bae31a4b40c85865fc6f93c0069e14524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c8e02d11087e2ca1c8c13d4721a94bae31a4b40c85865fc6f93c0069e14524->enter($__internal_f1c8e02d11087e2ca1c8c13d4721a94bae31a4b40c85865fc6f93c0069e14524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1f2bb812140fffc5d09bfb5a4ca8b7df0c0b2cf3e6c47e8a5002b99ce90cc528->leave($__internal_1f2bb812140fffc5d09bfb5a4ca8b7df0c0b2cf3e6c47e8a5002b99ce90cc528_prof);

        
        $__internal_f1c8e02d11087e2ca1c8c13d4721a94bae31a4b40c85865fc6f93c0069e14524->leave($__internal_f1c8e02d11087e2ca1c8c13d4721a94bae31a4b40c85865fc6f93c0069e14524_prof);

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
", "@Framework/Form/form_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
