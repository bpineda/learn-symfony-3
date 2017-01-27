<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7b2117e1ceccd64d72d5f05077f27c022ddb91b0a90b387bc397c3ed6c381f93 extends Twig_Template
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
        $__internal_c2f25083e6c738a119a733913fb939900d70aae41fe4f3e8e3259df73771ec38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f25083e6c738a119a733913fb939900d70aae41fe4f3e8e3259df73771ec38->enter($__internal_c2f25083e6c738a119a733913fb939900d70aae41fe4f3e8e3259df73771ec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_acf9b81221c31f8809ee7847c23357117008917d5fb61ef2eb9ed80d22ec763f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf9b81221c31f8809ee7847c23357117008917d5fb61ef2eb9ed80d22ec763f->enter($__internal_acf9b81221c31f8809ee7847c23357117008917d5fb61ef2eb9ed80d22ec763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c2f25083e6c738a119a733913fb939900d70aae41fe4f3e8e3259df73771ec38->leave($__internal_c2f25083e6c738a119a733913fb939900d70aae41fe4f3e8e3259df73771ec38_prof);

        
        $__internal_acf9b81221c31f8809ee7847c23357117008917d5fb61ef2eb9ed80d22ec763f->leave($__internal_acf9b81221c31f8809ee7847c23357117008917d5fb61ef2eb9ed80d22ec763f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
