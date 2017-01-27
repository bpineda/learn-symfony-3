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
        $__internal_737006996dbe4d37b3842e9fe2c375e7686198345c74bb44b7c968f0bef10e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737006996dbe4d37b3842e9fe2c375e7686198345c74bb44b7c968f0bef10e27->enter($__internal_737006996dbe4d37b3842e9fe2c375e7686198345c74bb44b7c968f0bef10e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_1ada6e44f84682e8e627018989c7b02175f925e816db46aba0a5cc6a1ad8db5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ada6e44f84682e8e627018989c7b02175f925e816db46aba0a5cc6a1ad8db5f->enter($__internal_1ada6e44f84682e8e627018989c7b02175f925e816db46aba0a5cc6a1ad8db5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_737006996dbe4d37b3842e9fe2c375e7686198345c74bb44b7c968f0bef10e27->leave($__internal_737006996dbe4d37b3842e9fe2c375e7686198345c74bb44b7c968f0bef10e27_prof);

        
        $__internal_1ada6e44f84682e8e627018989c7b02175f925e816db46aba0a5cc6a1ad8db5f->leave($__internal_1ada6e44f84682e8e627018989c7b02175f925e816db46aba0a5cc6a1ad8db5f_prof);

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
", "@Framework/Form/form.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
