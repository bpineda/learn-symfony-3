<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a6c30209a0ee35b37683e288466f63f773d44181ece6d4f921f4433a2ec8b871 extends Twig_Template
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
        $__internal_c08bfbfd518b6f13c12fa9a7c3f3e944c041e36c2625a770292a9b6cb67e58c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08bfbfd518b6f13c12fa9a7c3f3e944c041e36c2625a770292a9b6cb67e58c4->enter($__internal_c08bfbfd518b6f13c12fa9a7c3f3e944c041e36c2625a770292a9b6cb67e58c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_dd842fa06d60bd548e5b474e0174b19bf70db3acbbf861393a1d60ec2925b845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd842fa06d60bd548e5b474e0174b19bf70db3acbbf861393a1d60ec2925b845->enter($__internal_dd842fa06d60bd548e5b474e0174b19bf70db3acbbf861393a1d60ec2925b845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c08bfbfd518b6f13c12fa9a7c3f3e944c041e36c2625a770292a9b6cb67e58c4->leave($__internal_c08bfbfd518b6f13c12fa9a7c3f3e944c041e36c2625a770292a9b6cb67e58c4_prof);

        
        $__internal_dd842fa06d60bd548e5b474e0174b19bf70db3acbbf861393a1d60ec2925b845->leave($__internal_dd842fa06d60bd548e5b474e0174b19bf70db3acbbf861393a1d60ec2925b845_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
