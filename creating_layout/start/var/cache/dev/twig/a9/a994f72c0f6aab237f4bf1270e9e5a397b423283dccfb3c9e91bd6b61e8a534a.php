<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f98984adee02d152b80e35d966878cf5bb2a7fff21c8ed03e615c8da3e44d481 extends Twig_Template
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
        $__internal_3e7ac767e9b58b27e844ce4f31b517651521dc2654dfe134d31cba9a0d3629cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7ac767e9b58b27e844ce4f31b517651521dc2654dfe134d31cba9a0d3629cf->enter($__internal_3e7ac767e9b58b27e844ce4f31b517651521dc2654dfe134d31cba9a0d3629cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_fba49c366c13449d74d07c947f700ebdb2aa336913e423f4b904abdc278b315f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba49c366c13449d74d07c947f700ebdb2aa336913e423f4b904abdc278b315f->enter($__internal_fba49c366c13449d74d07c947f700ebdb2aa336913e423f4b904abdc278b315f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3e7ac767e9b58b27e844ce4f31b517651521dc2654dfe134d31cba9a0d3629cf->leave($__internal_3e7ac767e9b58b27e844ce4f31b517651521dc2654dfe134d31cba9a0d3629cf_prof);

        
        $__internal_fba49c366c13449d74d07c947f700ebdb2aa336913e423f4b904abdc278b315f->leave($__internal_fba49c366c13449d74d07c947f700ebdb2aa336913e423f4b904abdc278b315f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
