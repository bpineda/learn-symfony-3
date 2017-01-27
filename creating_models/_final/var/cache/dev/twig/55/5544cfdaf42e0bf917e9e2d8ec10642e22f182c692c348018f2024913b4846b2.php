<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1399cd77403e5a0e19df193f1403f3cb5e5241124392385b8c64ef7c178c5d9f extends Twig_Template
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
        $__internal_807e9b0075f3d5be0bed4d268a9ef0706e255dd62004bc11c833132a8745b11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807e9b0075f3d5be0bed4d268a9ef0706e255dd62004bc11c833132a8745b11f->enter($__internal_807e9b0075f3d5be0bed4d268a9ef0706e255dd62004bc11c833132a8745b11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_eef8dcb2a4f4d03debd9f83265a5d5ceefe5c581af038224cfff4d92c1fe419f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef8dcb2a4f4d03debd9f83265a5d5ceefe5c581af038224cfff4d92c1fe419f->enter($__internal_eef8dcb2a4f4d03debd9f83265a5d5ceefe5c581af038224cfff4d92c1fe419f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_807e9b0075f3d5be0bed4d268a9ef0706e255dd62004bc11c833132a8745b11f->leave($__internal_807e9b0075f3d5be0bed4d268a9ef0706e255dd62004bc11c833132a8745b11f_prof);

        
        $__internal_eef8dcb2a4f4d03debd9f83265a5d5ceefe5c581af038224cfff4d92c1fe419f->leave($__internal_eef8dcb2a4f4d03debd9f83265a5d5ceefe5c581af038224cfff4d92c1fe419f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
