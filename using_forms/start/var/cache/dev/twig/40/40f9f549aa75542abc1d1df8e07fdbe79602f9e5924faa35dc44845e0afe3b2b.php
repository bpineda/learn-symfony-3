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
        $__internal_e9d600a6d576056d0141ad85b5d0a0ad804bdb3f600ffa58cc9e39138e222a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d600a6d576056d0141ad85b5d0a0ad804bdb3f600ffa58cc9e39138e222a4e->enter($__internal_e9d600a6d576056d0141ad85b5d0a0ad804bdb3f600ffa58cc9e39138e222a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0ea23f668fdc79840300bf86e4dadde582619609aa2dbdabddb1426598dcd433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea23f668fdc79840300bf86e4dadde582619609aa2dbdabddb1426598dcd433->enter($__internal_0ea23f668fdc79840300bf86e4dadde582619609aa2dbdabddb1426598dcd433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e9d600a6d576056d0141ad85b5d0a0ad804bdb3f600ffa58cc9e39138e222a4e->leave($__internal_e9d600a6d576056d0141ad85b5d0a0ad804bdb3f600ffa58cc9e39138e222a4e_prof);

        
        $__internal_0ea23f668fdc79840300bf86e4dadde582619609aa2dbdabddb1426598dcd433->leave($__internal_0ea23f668fdc79840300bf86e4dadde582619609aa2dbdabddb1426598dcd433_prof);

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
", "@Framework/Form/form_rest.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
