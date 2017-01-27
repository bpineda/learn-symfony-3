<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_208be8c6764811f33bd143a36f331c65ffd53d52cb9aecbcf5d11fb50be0281c extends Twig_Template
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
        $__internal_5555052aff749bf4da1dc438d7727b7f727e6ace9427b0a93faac18d6d677bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5555052aff749bf4da1dc438d7727b7f727e6ace9427b0a93faac18d6d677bbe->enter($__internal_5555052aff749bf4da1dc438d7727b7f727e6ace9427b0a93faac18d6d677bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4bd00851e7ca7bce297d791f3ed4ad0a773ceff3e8ff952cbf5a5e39c2a8986f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd00851e7ca7bce297d791f3ed4ad0a773ceff3e8ff952cbf5a5e39c2a8986f->enter($__internal_4bd00851e7ca7bce297d791f3ed4ad0a773ceff3e8ff952cbf5a5e39c2a8986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5555052aff749bf4da1dc438d7727b7f727e6ace9427b0a93faac18d6d677bbe->leave($__internal_5555052aff749bf4da1dc438d7727b7f727e6ace9427b0a93faac18d6d677bbe_prof);

        
        $__internal_4bd00851e7ca7bce297d791f3ed4ad0a773ceff3e8ff952cbf5a5e39c2a8986f->leave($__internal_4bd00851e7ca7bce297d791f3ed4ad0a773ceff3e8ff952cbf5a5e39c2a8986f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
