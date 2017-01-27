<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cd5652ebacd9dfddf5784ed9afcdcc0904a62fe3c3f8dc825f8ab84b48236128 extends Twig_Template
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
        $__internal_dc94be36e828cd7e7c0c8e70819587b5727af5a613d2890a33e1ad6e6a523bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc94be36e828cd7e7c0c8e70819587b5727af5a613d2890a33e1ad6e6a523bb0->enter($__internal_dc94be36e828cd7e7c0c8e70819587b5727af5a613d2890a33e1ad6e6a523bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_77a9896bc6bd78e38ceb3685e99c5350d7a9a739f42c1769fc9b20755b300eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a9896bc6bd78e38ceb3685e99c5350d7a9a739f42c1769fc9b20755b300eb9->enter($__internal_77a9896bc6bd78e38ceb3685e99c5350d7a9a739f42c1769fc9b20755b300eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_dc94be36e828cd7e7c0c8e70819587b5727af5a613d2890a33e1ad6e6a523bb0->leave($__internal_dc94be36e828cd7e7c0c8e70819587b5727af5a613d2890a33e1ad6e6a523bb0_prof);

        
        $__internal_77a9896bc6bd78e38ceb3685e99c5350d7a9a739f42c1769fc9b20755b300eb9->leave($__internal_77a9896bc6bd78e38ceb3685e99c5350d7a9a739f42c1769fc9b20755b300eb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
