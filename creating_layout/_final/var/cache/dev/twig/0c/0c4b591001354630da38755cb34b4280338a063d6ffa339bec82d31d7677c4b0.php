<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4b2e27988eed615d35295441117f8caf5fbec0967cbda51c9f86f9e55d4bde81 extends Twig_Template
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
        $__internal_84b53340b42ae5a56fc1b8fc12fd22e00ea8de7811ecec644feb9ba67341495e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b53340b42ae5a56fc1b8fc12fd22e00ea8de7811ecec644feb9ba67341495e->enter($__internal_84b53340b42ae5a56fc1b8fc12fd22e00ea8de7811ecec644feb9ba67341495e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6e26e3fb2ab89b2f96e4e23c5ca663e5d5457dc1c7b4d3995d04132448123963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e26e3fb2ab89b2f96e4e23c5ca663e5d5457dc1c7b4d3995d04132448123963->enter($__internal_6e26e3fb2ab89b2f96e4e23c5ca663e5d5457dc1c7b4d3995d04132448123963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_84b53340b42ae5a56fc1b8fc12fd22e00ea8de7811ecec644feb9ba67341495e->leave($__internal_84b53340b42ae5a56fc1b8fc12fd22e00ea8de7811ecec644feb9ba67341495e_prof);

        
        $__internal_6e26e3fb2ab89b2f96e4e23c5ca663e5d5457dc1c7b4d3995d04132448123963->leave($__internal_6e26e3fb2ab89b2f96e4e23c5ca663e5d5457dc1c7b4d3995d04132448123963_prof);

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
", "@Framework/Form/password_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
