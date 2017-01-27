<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e11d5e8395d86d98b7d409d44045c48324109aadafb8e7ecd9848eedd142973d extends Twig_Template
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
        $__internal_4bc60bcdf7cc60cfd353badacd825415cb42c429dffd4f3817512abcd832c119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc60bcdf7cc60cfd353badacd825415cb42c429dffd4f3817512abcd832c119->enter($__internal_4bc60bcdf7cc60cfd353badacd825415cb42c429dffd4f3817512abcd832c119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c52106adf857922c4cda09865e4a55f2c03d8c79512b124acf61901ada32c751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52106adf857922c4cda09865e4a55f2c03d8c79512b124acf61901ada32c751->enter($__internal_c52106adf857922c4cda09865e4a55f2c03d8c79512b124acf61901ada32c751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4bc60bcdf7cc60cfd353badacd825415cb42c429dffd4f3817512abcd832c119->leave($__internal_4bc60bcdf7cc60cfd353badacd825415cb42c429dffd4f3817512abcd832c119_prof);

        
        $__internal_c52106adf857922c4cda09865e4a55f2c03d8c79512b124acf61901ada32c751->leave($__internal_c52106adf857922c4cda09865e4a55f2c03d8c79512b124acf61901ada32c751_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
