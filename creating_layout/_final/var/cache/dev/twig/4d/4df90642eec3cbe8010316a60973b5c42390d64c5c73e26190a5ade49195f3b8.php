<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2256ecca45113b85f61bda3af7ace20b8e4179eac1b60fcbdcb2ec05e5ed29ac extends Twig_Template
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
        $__internal_7bd9da6a58b571e1ca61e298f346a1adee91afc9fe452f1fac46555cd9299fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd9da6a58b571e1ca61e298f346a1adee91afc9fe452f1fac46555cd9299fa7->enter($__internal_7bd9da6a58b571e1ca61e298f346a1adee91afc9fe452f1fac46555cd9299fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_45bc54576c1c4418219d1411fc6ed907742f06d98693172e6b2fe1c52b72acd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bc54576c1c4418219d1411fc6ed907742f06d98693172e6b2fe1c52b72acd0->enter($__internal_45bc54576c1c4418219d1411fc6ed907742f06d98693172e6b2fe1c52b72acd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7bd9da6a58b571e1ca61e298f346a1adee91afc9fe452f1fac46555cd9299fa7->leave($__internal_7bd9da6a58b571e1ca61e298f346a1adee91afc9fe452f1fac46555cd9299fa7_prof);

        
        $__internal_45bc54576c1c4418219d1411fc6ed907742f06d98693172e6b2fe1c52b72acd0->leave($__internal_45bc54576c1c4418219d1411fc6ed907742f06d98693172e6b2fe1c52b72acd0_prof);

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
", "@Framework/Form/submit_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
