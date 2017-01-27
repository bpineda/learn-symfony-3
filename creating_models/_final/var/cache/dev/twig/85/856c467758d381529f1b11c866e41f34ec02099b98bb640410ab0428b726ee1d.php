<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_ae7acb4356b5c747d5404a6353a41d154cb3e60bd96c88db51142b092c2f6079 extends Twig_Template
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
        $__internal_fd8b1e6be53ae6b02d2d48e078ad02be5e8198e2ce33db019eaf31ada8c053f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8b1e6be53ae6b02d2d48e078ad02be5e8198e2ce33db019eaf31ada8c053f3->enter($__internal_fd8b1e6be53ae6b02d2d48e078ad02be5e8198e2ce33db019eaf31ada8c053f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c2a4a5d703453555fa09af044d88587a034cc5ba742b5fc0b8288d5090914b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a4a5d703453555fa09af044d88587a034cc5ba742b5fc0b8288d5090914b78->enter($__internal_c2a4a5d703453555fa09af044d88587a034cc5ba742b5fc0b8288d5090914b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fd8b1e6be53ae6b02d2d48e078ad02be5e8198e2ce33db019eaf31ada8c053f3->leave($__internal_fd8b1e6be53ae6b02d2d48e078ad02be5e8198e2ce33db019eaf31ada8c053f3_prof);

        
        $__internal_c2a4a5d703453555fa09af044d88587a034cc5ba742b5fc0b8288d5090914b78->leave($__internal_c2a4a5d703453555fa09af044d88587a034cc5ba742b5fc0b8288d5090914b78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
