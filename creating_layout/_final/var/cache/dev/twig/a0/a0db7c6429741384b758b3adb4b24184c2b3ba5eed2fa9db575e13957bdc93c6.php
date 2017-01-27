<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e7de574f9432a752b7aa1407aee3fe315c0f1aad2d8fb1f71d69a578f2ffc85c extends Twig_Template
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
        $__internal_62dd3e9078750034b98a79426d4fdac2d4b726447d1ca1ee8546e4fd91375247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62dd3e9078750034b98a79426d4fdac2d4b726447d1ca1ee8546e4fd91375247->enter($__internal_62dd3e9078750034b98a79426d4fdac2d4b726447d1ca1ee8546e4fd91375247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_126ab50f456e602a13c0672ec926dade0136a7acd03aad04661f83d331f2f5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126ab50f456e602a13c0672ec926dade0136a7acd03aad04661f83d331f2f5a5->enter($__internal_126ab50f456e602a13c0672ec926dade0136a7acd03aad04661f83d331f2f5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_62dd3e9078750034b98a79426d4fdac2d4b726447d1ca1ee8546e4fd91375247->leave($__internal_62dd3e9078750034b98a79426d4fdac2d4b726447d1ca1ee8546e4fd91375247_prof);

        
        $__internal_126ab50f456e602a13c0672ec926dade0136a7acd03aad04661f83d331f2f5a5->leave($__internal_126ab50f456e602a13c0672ec926dade0136a7acd03aad04661f83d331f2f5a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
