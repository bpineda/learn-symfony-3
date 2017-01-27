<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b0e597429c731b3070868b11cab3ec0a85729ec4f4c2c09ff853962e246f5f5b extends Twig_Template
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
        $__internal_ffa5c17bcbaa1d076aa02298c5f1dcbc4d5418d55a28083d940f47d5f238b206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa5c17bcbaa1d076aa02298c5f1dcbc4d5418d55a28083d940f47d5f238b206->enter($__internal_ffa5c17bcbaa1d076aa02298c5f1dcbc4d5418d55a28083d940f47d5f238b206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_695ae840664988d450fb8593950772843bbf55ce770fdbeefebe64cccd88fc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695ae840664988d450fb8593950772843bbf55ce770fdbeefebe64cccd88fc06->enter($__internal_695ae840664988d450fb8593950772843bbf55ce770fdbeefebe64cccd88fc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ffa5c17bcbaa1d076aa02298c5f1dcbc4d5418d55a28083d940f47d5f238b206->leave($__internal_ffa5c17bcbaa1d076aa02298c5f1dcbc4d5418d55a28083d940f47d5f238b206_prof);

        
        $__internal_695ae840664988d450fb8593950772843bbf55ce770fdbeefebe64cccd88fc06->leave($__internal_695ae840664988d450fb8593950772843bbf55ce770fdbeefebe64cccd88fc06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
