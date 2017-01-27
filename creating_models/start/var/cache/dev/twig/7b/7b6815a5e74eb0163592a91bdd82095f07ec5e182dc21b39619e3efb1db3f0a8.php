<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4d19a1295302c2b1b7d3463e2707e37611808fd7815c55fed8b5c355d4cc6971 extends Twig_Template
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
        $__internal_4efcb1387e0ab799a7a3c0f79a69bfac633464e0c4db6aea1ddc086fc5a8fb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efcb1387e0ab799a7a3c0f79a69bfac633464e0c4db6aea1ddc086fc5a8fb42->enter($__internal_4efcb1387e0ab799a7a3c0f79a69bfac633464e0c4db6aea1ddc086fc5a8fb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9d56bb91f7188e9b529c85f3b4297d76aaeb068b04158dffa624408435fc6912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d56bb91f7188e9b529c85f3b4297d76aaeb068b04158dffa624408435fc6912->enter($__internal_9d56bb91f7188e9b529c85f3b4297d76aaeb068b04158dffa624408435fc6912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4efcb1387e0ab799a7a3c0f79a69bfac633464e0c4db6aea1ddc086fc5a8fb42->leave($__internal_4efcb1387e0ab799a7a3c0f79a69bfac633464e0c4db6aea1ddc086fc5a8fb42_prof);

        
        $__internal_9d56bb91f7188e9b529c85f3b4297d76aaeb068b04158dffa624408435fc6912->leave($__internal_9d56bb91f7188e9b529c85f3b4297d76aaeb068b04158dffa624408435fc6912_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
