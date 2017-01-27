<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c9491781b15660cbdbc0ee9a0f66ed83202e3754243de39c9154c87d500a367e extends Twig_Template
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
        $__internal_1d57aa91b0521188d7369257283a4e47cf526321b1ab74d366638d96fddb35fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d57aa91b0521188d7369257283a4e47cf526321b1ab74d366638d96fddb35fc->enter($__internal_1d57aa91b0521188d7369257283a4e47cf526321b1ab74d366638d96fddb35fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0dffd29e821849e17961adad54f0096967bc3d024cd44a7a964af65c56d89b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dffd29e821849e17961adad54f0096967bc3d024cd44a7a964af65c56d89b49->enter($__internal_0dffd29e821849e17961adad54f0096967bc3d024cd44a7a964af65c56d89b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1d57aa91b0521188d7369257283a4e47cf526321b1ab74d366638d96fddb35fc->leave($__internal_1d57aa91b0521188d7369257283a4e47cf526321b1ab74d366638d96fddb35fc_prof);

        
        $__internal_0dffd29e821849e17961adad54f0096967bc3d024cd44a7a964af65c56d89b49->leave($__internal_0dffd29e821849e17961adad54f0096967bc3d024cd44a7a964af65c56d89b49_prof);

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
", "@Framework/Form/form_rows.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
