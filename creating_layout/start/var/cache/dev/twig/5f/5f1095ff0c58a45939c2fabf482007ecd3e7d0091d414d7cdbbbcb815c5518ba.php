<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9ef369a0eeb937e09fc70afea8044e9a68d1b1c0247bd7907f7eb3b45eaa1377 extends Twig_Template
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
        $__internal_eb9e6bcdfe63c55d98cb0fef072c4c59b36258b2174e6cd37af6caa4a9fa586e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9e6bcdfe63c55d98cb0fef072c4c59b36258b2174e6cd37af6caa4a9fa586e->enter($__internal_eb9e6bcdfe63c55d98cb0fef072c4c59b36258b2174e6cd37af6caa4a9fa586e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_629c1db8325a59b2084a8260c479dbf28ee5f7621901677debda456da92d0370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629c1db8325a59b2084a8260c479dbf28ee5f7621901677debda456da92d0370->enter($__internal_629c1db8325a59b2084a8260c479dbf28ee5f7621901677debda456da92d0370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_eb9e6bcdfe63c55d98cb0fef072c4c59b36258b2174e6cd37af6caa4a9fa586e->leave($__internal_eb9e6bcdfe63c55d98cb0fef072c4c59b36258b2174e6cd37af6caa4a9fa586e_prof);

        
        $__internal_629c1db8325a59b2084a8260c479dbf28ee5f7621901677debda456da92d0370->leave($__internal_629c1db8325a59b2084a8260c479dbf28ee5f7621901677debda456da92d0370_prof);

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
", "@Framework/Form/search_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
