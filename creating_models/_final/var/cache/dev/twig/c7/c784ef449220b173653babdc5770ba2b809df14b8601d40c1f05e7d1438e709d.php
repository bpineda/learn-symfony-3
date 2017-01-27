<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c2235d6ba490bd656348bd182d3d5cab093af3dc94d6de04793b0bb1c9e65a03 extends Twig_Template
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
        $__internal_87efde2dac30d4bdc5b2c0229fc561e8d9e915d1a9a62208c51aa42d37878e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87efde2dac30d4bdc5b2c0229fc561e8d9e915d1a9a62208c51aa42d37878e4f->enter($__internal_87efde2dac30d4bdc5b2c0229fc561e8d9e915d1a9a62208c51aa42d37878e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4170ca0134203878e12655d06a3eb6bede5b863ce2fdb84207af5814c102f0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4170ca0134203878e12655d06a3eb6bede5b863ce2fdb84207af5814c102f0a3->enter($__internal_4170ca0134203878e12655d06a3eb6bede5b863ce2fdb84207af5814c102f0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_87efde2dac30d4bdc5b2c0229fc561e8d9e915d1a9a62208c51aa42d37878e4f->leave($__internal_87efde2dac30d4bdc5b2c0229fc561e8d9e915d1a9a62208c51aa42d37878e4f_prof);

        
        $__internal_4170ca0134203878e12655d06a3eb6bede5b863ce2fdb84207af5814c102f0a3->leave($__internal_4170ca0134203878e12655d06a3eb6bede5b863ce2fdb84207af5814c102f0a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
