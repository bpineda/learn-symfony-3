<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c894797157bdf3a7c1341bccd7bceff6a1f87da3d39b5477103fd25bd29f0c9b extends Twig_Template
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
        $__internal_c309b5cc469f91c77a5d6a947b53eae6971cd297e913545ba04817ca7dc0c45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c309b5cc469f91c77a5d6a947b53eae6971cd297e913545ba04817ca7dc0c45c->enter($__internal_c309b5cc469f91c77a5d6a947b53eae6971cd297e913545ba04817ca7dc0c45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_20266f47fa81e3e9ffa8ed5defd0584996220ce2a7fff82f4d5755e782885585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20266f47fa81e3e9ffa8ed5defd0584996220ce2a7fff82f4d5755e782885585->enter($__internal_20266f47fa81e3e9ffa8ed5defd0584996220ce2a7fff82f4d5755e782885585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c309b5cc469f91c77a5d6a947b53eae6971cd297e913545ba04817ca7dc0c45c->leave($__internal_c309b5cc469f91c77a5d6a947b53eae6971cd297e913545ba04817ca7dc0c45c_prof);

        
        $__internal_20266f47fa81e3e9ffa8ed5defd0584996220ce2a7fff82f4d5755e782885585->leave($__internal_20266f47fa81e3e9ffa8ed5defd0584996220ce2a7fff82f4d5755e782885585_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
