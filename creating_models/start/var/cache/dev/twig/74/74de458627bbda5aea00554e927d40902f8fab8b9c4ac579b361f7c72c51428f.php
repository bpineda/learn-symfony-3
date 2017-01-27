<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37c4aab3eadd7c2e4543107c44abce7341ac883bf6c341e9e99233861695d5d7 extends Twig_Template
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
        $__internal_1a39fb7ae6df1d07a757036093faac9c4b8d60365b650fdd102b51c44458f2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a39fb7ae6df1d07a757036093faac9c4b8d60365b650fdd102b51c44458f2a3->enter($__internal_1a39fb7ae6df1d07a757036093faac9c4b8d60365b650fdd102b51c44458f2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_5691773d9ff0a5eda4e8e868d7192b8d563b703e35d36ba4f6ac267d96b9168a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5691773d9ff0a5eda4e8e868d7192b8d563b703e35d36ba4f6ac267d96b9168a->enter($__internal_5691773d9ff0a5eda4e8e868d7192b8d563b703e35d36ba4f6ac267d96b9168a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1a39fb7ae6df1d07a757036093faac9c4b8d60365b650fdd102b51c44458f2a3->leave($__internal_1a39fb7ae6df1d07a757036093faac9c4b8d60365b650fdd102b51c44458f2a3_prof);

        
        $__internal_5691773d9ff0a5eda4e8e868d7192b8d563b703e35d36ba4f6ac267d96b9168a->leave($__internal_5691773d9ff0a5eda4e8e868d7192b8d563b703e35d36ba4f6ac267d96b9168a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
