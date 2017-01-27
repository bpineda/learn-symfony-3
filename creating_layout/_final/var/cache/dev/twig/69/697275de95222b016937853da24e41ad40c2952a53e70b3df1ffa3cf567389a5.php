<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_74b6eb33431e1d2269b8a34ddf75e4ac32bc6551b85f60c0f8b13f43a4f556e8 extends Twig_Template
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
        $__internal_569439bd8f1736fe7332bc1bca3b89f2443b5e080f79f492ff2aadeaa63bf8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569439bd8f1736fe7332bc1bca3b89f2443b5e080f79f492ff2aadeaa63bf8b1->enter($__internal_569439bd8f1736fe7332bc1bca3b89f2443b5e080f79f492ff2aadeaa63bf8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_98cf895529aa104a474a2c2588dcea5afb1be4564f0ede2a4a3c47418a46eb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cf895529aa104a474a2c2588dcea5afb1be4564f0ede2a4a3c47418a46eb03->enter($__internal_98cf895529aa104a474a2c2588dcea5afb1be4564f0ede2a4a3c47418a46eb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_569439bd8f1736fe7332bc1bca3b89f2443b5e080f79f492ff2aadeaa63bf8b1->leave($__internal_569439bd8f1736fe7332bc1bca3b89f2443b5e080f79f492ff2aadeaa63bf8b1_prof);

        
        $__internal_98cf895529aa104a474a2c2588dcea5afb1be4564f0ede2a4a3c47418a46eb03->leave($__internal_98cf895529aa104a474a2c2588dcea5afb1be4564f0ede2a4a3c47418a46eb03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
