<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8d7fc57ec57976c834bdabbe0692a6b93448dc3d151726d1fff2da8573abd814 extends Twig_Template
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
        $__internal_ecc81607e60d2e7f7f8139968502d774eeef088ada91f6d4679d737012040286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc81607e60d2e7f7f8139968502d774eeef088ada91f6d4679d737012040286->enter($__internal_ecc81607e60d2e7f7f8139968502d774eeef088ada91f6d4679d737012040286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_feb88dccae1afeb1e639c523c435c4ba8fccb548f27df520682bb1528c6c6012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb88dccae1afeb1e639c523c435c4ba8fccb548f27df520682bb1528c6c6012->enter($__internal_feb88dccae1afeb1e639c523c435c4ba8fccb548f27df520682bb1528c6c6012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ecc81607e60d2e7f7f8139968502d774eeef088ada91f6d4679d737012040286->leave($__internal_ecc81607e60d2e7f7f8139968502d774eeef088ada91f6d4679d737012040286_prof);

        
        $__internal_feb88dccae1afeb1e639c523c435c4ba8fccb548f27df520682bb1528c6c6012->leave($__internal_feb88dccae1afeb1e639c523c435c4ba8fccb548f27df520682bb1528c6c6012_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
