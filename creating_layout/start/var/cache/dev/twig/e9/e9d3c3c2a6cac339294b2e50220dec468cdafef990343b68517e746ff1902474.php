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
        $__internal_e2cade0e568ef08206d5d617c697b40f3c9e0397d5a74c110d252e0117d04855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cade0e568ef08206d5d617c697b40f3c9e0397d5a74c110d252e0117d04855->enter($__internal_e2cade0e568ef08206d5d617c697b40f3c9e0397d5a74c110d252e0117d04855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_61a90bb57a6273b25cbb2b635f45a8ee3ca8218531e9bd5aa1aab10007db1c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a90bb57a6273b25cbb2b635f45a8ee3ca8218531e9bd5aa1aab10007db1c8d->enter($__internal_61a90bb57a6273b25cbb2b635f45a8ee3ca8218531e9bd5aa1aab10007db1c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e2cade0e568ef08206d5d617c697b40f3c9e0397d5a74c110d252e0117d04855->leave($__internal_e2cade0e568ef08206d5d617c697b40f3c9e0397d5a74c110d252e0117d04855_prof);

        
        $__internal_61a90bb57a6273b25cbb2b635f45a8ee3ca8218531e9bd5aa1aab10007db1c8d->leave($__internal_61a90bb57a6273b25cbb2b635f45a8ee3ca8218531e9bd5aa1aab10007db1c8d_prof);

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
", "@Framework/Form/form_end.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
