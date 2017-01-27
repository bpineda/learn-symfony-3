<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_15c00127392710abb9a21bacbad0f804745c7f2ad4b33d5628346b8c9bb9edc8 extends Twig_Template
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
        $__internal_1b64d4904d3b7017114e4d6caeada42fafce6dd68849b116693d5082aad3c192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b64d4904d3b7017114e4d6caeada42fafce6dd68849b116693d5082aad3c192->enter($__internal_1b64d4904d3b7017114e4d6caeada42fafce6dd68849b116693d5082aad3c192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_cab659165bf3ba922ecc6ba97b1f1c4b6957ce5d1e3d4cf097dd7839ee530f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab659165bf3ba922ecc6ba97b1f1c4b6957ce5d1e3d4cf097dd7839ee530f7c->enter($__internal_cab659165bf3ba922ecc6ba97b1f1c4b6957ce5d1e3d4cf097dd7839ee530f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1b64d4904d3b7017114e4d6caeada42fafce6dd68849b116693d5082aad3c192->leave($__internal_1b64d4904d3b7017114e4d6caeada42fafce6dd68849b116693d5082aad3c192_prof);

        
        $__internal_cab659165bf3ba922ecc6ba97b1f1c4b6957ce5d1e3d4cf097dd7839ee530f7c->leave($__internal_cab659165bf3ba922ecc6ba97b1f1c4b6957ce5d1e3d4cf097dd7839ee530f7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
