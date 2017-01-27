<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_27ea32d78ca7ec7014d1408831d6d540aea23ce2a4f50f184848a34b6ab01782 extends Twig_Template
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
        $__internal_882be026e2ee738e3f5cf66a7a51ca8ab16173fd36b9e032bde8b3b14422bc10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882be026e2ee738e3f5cf66a7a51ca8ab16173fd36b9e032bde8b3b14422bc10->enter($__internal_882be026e2ee738e3f5cf66a7a51ca8ab16173fd36b9e032bde8b3b14422bc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_04837a1ad0982cbbd7ada20bb36f053b00911e014305d94bd55a900602b277bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04837a1ad0982cbbd7ada20bb36f053b00911e014305d94bd55a900602b277bb->enter($__internal_04837a1ad0982cbbd7ada20bb36f053b00911e014305d94bd55a900602b277bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_882be026e2ee738e3f5cf66a7a51ca8ab16173fd36b9e032bde8b3b14422bc10->leave($__internal_882be026e2ee738e3f5cf66a7a51ca8ab16173fd36b9e032bde8b3b14422bc10_prof);

        
        $__internal_04837a1ad0982cbbd7ada20bb36f053b00911e014305d94bd55a900602b277bb->leave($__internal_04837a1ad0982cbbd7ada20bb36f053b00911e014305d94bd55a900602b277bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
