<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3c8d1f2ffb959ccb917839180f1154d9f247134511fda2afb6690059085b68f3 extends Twig_Template
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
        $__internal_5de85551f86a98bff09c7f7e973a9f1936de1a81222dbd872ff06a8f6b8c68a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de85551f86a98bff09c7f7e973a9f1936de1a81222dbd872ff06a8f6b8c68a8->enter($__internal_5de85551f86a98bff09c7f7e973a9f1936de1a81222dbd872ff06a8f6b8c68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e1cd73da59be84561fe1880203cc951e58b33874e252cde47c42c24c2a883e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cd73da59be84561fe1880203cc951e58b33874e252cde47c42c24c2a883e0a->enter($__internal_e1cd73da59be84561fe1880203cc951e58b33874e252cde47c42c24c2a883e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5de85551f86a98bff09c7f7e973a9f1936de1a81222dbd872ff06a8f6b8c68a8->leave($__internal_5de85551f86a98bff09c7f7e973a9f1936de1a81222dbd872ff06a8f6b8c68a8_prof);

        
        $__internal_e1cd73da59be84561fe1880203cc951e58b33874e252cde47c42c24c2a883e0a->leave($__internal_e1cd73da59be84561fe1880203cc951e58b33874e252cde47c42c24c2a883e0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
