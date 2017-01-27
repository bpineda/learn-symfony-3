<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_9925acbccdcd3f00558b17571ec51b6cafd4a010ab9148bc035ce766290c0ef1 extends Twig_Template
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
        $__internal_c444345fc8c557db5be4a6160c14cc81e32793ecc3ee206f3e7f7717cc44a922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c444345fc8c557db5be4a6160c14cc81e32793ecc3ee206f3e7f7717cc44a922->enter($__internal_c444345fc8c557db5be4a6160c14cc81e32793ecc3ee206f3e7f7717cc44a922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_1056882d3a9202c55941dc82d696189d86c91d869ce8df331b1108f41c57efa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1056882d3a9202c55941dc82d696189d86c91d869ce8df331b1108f41c57efa6->enter($__internal_1056882d3a9202c55941dc82d696189d86c91d869ce8df331b1108f41c57efa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_c444345fc8c557db5be4a6160c14cc81e32793ecc3ee206f3e7f7717cc44a922->leave($__internal_c444345fc8c557db5be4a6160c14cc81e32793ecc3ee206f3e7f7717cc44a922_prof);

        
        $__internal_1056882d3a9202c55941dc82d696189d86c91d869ce8df331b1108f41c57efa6->leave($__internal_1056882d3a9202c55941dc82d696189d86c91d869ce8df331b1108f41c57efa6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
