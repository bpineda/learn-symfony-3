<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e4e8368a4163fce3e002b88c7620c51e3fd9222e22af08c406efcd3c5d322614 extends Twig_Template
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
        $__internal_74c8197c62312501fada08fe083fb46edc580b5c657ef198d0d42b912f2d6c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c8197c62312501fada08fe083fb46edc580b5c657ef198d0d42b912f2d6c4e->enter($__internal_74c8197c62312501fada08fe083fb46edc580b5c657ef198d0d42b912f2d6c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_037009c5a388fdebd02d347651105720dd28c09f00497815f0ef215c6600d718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037009c5a388fdebd02d347651105720dd28c09f00497815f0ef215c6600d718->enter($__internal_037009c5a388fdebd02d347651105720dd28c09f00497815f0ef215c6600d718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_74c8197c62312501fada08fe083fb46edc580b5c657ef198d0d42b912f2d6c4e->leave($__internal_74c8197c62312501fada08fe083fb46edc580b5c657ef198d0d42b912f2d6c4e_prof);

        
        $__internal_037009c5a388fdebd02d347651105720dd28c09f00497815f0ef215c6600d718->leave($__internal_037009c5a388fdebd02d347651105720dd28c09f00497815f0ef215c6600d718_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
