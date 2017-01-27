<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_603bacef8113388edf030b45db8445b8bdbdc4bc5d6e923f92a38677d433a12b extends Twig_Template
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
        $__internal_f7167a3f60ba38c0febd946e433eaff406722d99072745c6ef06bb51375b38a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7167a3f60ba38c0febd946e433eaff406722d99072745c6ef06bb51375b38a5->enter($__internal_f7167a3f60ba38c0febd946e433eaff406722d99072745c6ef06bb51375b38a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_65960471a98a2eb72cf53b2f8f0f3c3a54debdd986ca2c60a689d2a490139324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65960471a98a2eb72cf53b2f8f0f3c3a54debdd986ca2c60a689d2a490139324->enter($__internal_65960471a98a2eb72cf53b2f8f0f3c3a54debdd986ca2c60a689d2a490139324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f7167a3f60ba38c0febd946e433eaff406722d99072745c6ef06bb51375b38a5->leave($__internal_f7167a3f60ba38c0febd946e433eaff406722d99072745c6ef06bb51375b38a5_prof);

        
        $__internal_65960471a98a2eb72cf53b2f8f0f3c3a54debdd986ca2c60a689d2a490139324->leave($__internal_65960471a98a2eb72cf53b2f8f0f3c3a54debdd986ca2c60a689d2a490139324_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
