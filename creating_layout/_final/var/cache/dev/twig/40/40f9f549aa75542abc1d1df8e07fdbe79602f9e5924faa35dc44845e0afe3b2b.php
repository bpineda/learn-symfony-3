<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7bcdcbd17d7e3cac9211ac93d7e56b546580c775021defa5590ab503fe10c87c extends Twig_Template
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
        $__internal_7e1db63a69e13cb8d7331e0812f5361870d782400cbdc2793085ee03a3ea7138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1db63a69e13cb8d7331e0812f5361870d782400cbdc2793085ee03a3ea7138->enter($__internal_7e1db63a69e13cb8d7331e0812f5361870d782400cbdc2793085ee03a3ea7138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6ea55ce6985a77513c70760ac0a9a8dbf094c68ae8a3136b78c09b61080450d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea55ce6985a77513c70760ac0a9a8dbf094c68ae8a3136b78c09b61080450d3->enter($__internal_6ea55ce6985a77513c70760ac0a9a8dbf094c68ae8a3136b78c09b61080450d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7e1db63a69e13cb8d7331e0812f5361870d782400cbdc2793085ee03a3ea7138->leave($__internal_7e1db63a69e13cb8d7331e0812f5361870d782400cbdc2793085ee03a3ea7138_prof);

        
        $__internal_6ea55ce6985a77513c70760ac0a9a8dbf094c68ae8a3136b78c09b61080450d3->leave($__internal_6ea55ce6985a77513c70760ac0a9a8dbf094c68ae8a3136b78c09b61080450d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
