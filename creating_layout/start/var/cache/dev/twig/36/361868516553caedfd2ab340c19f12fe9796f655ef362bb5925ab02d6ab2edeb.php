<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_59f88757b98d8f593e93b5e4010a407efd290aaddebc0e4c7aca77f44dc752d7 extends Twig_Template
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
        $__internal_9400ce5c05f3ffa1c43796f83edf479fdafb35bdbbe1529ed1fbe4f106fb338e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9400ce5c05f3ffa1c43796f83edf479fdafb35bdbbe1529ed1fbe4f106fb338e->enter($__internal_9400ce5c05f3ffa1c43796f83edf479fdafb35bdbbe1529ed1fbe4f106fb338e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_721f0a15a53f347ce26797a45964928e0e122a0951a1f0446eba777a98fd11e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721f0a15a53f347ce26797a45964928e0e122a0951a1f0446eba777a98fd11e9->enter($__internal_721f0a15a53f347ce26797a45964928e0e122a0951a1f0446eba777a98fd11e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9400ce5c05f3ffa1c43796f83edf479fdafb35bdbbe1529ed1fbe4f106fb338e->leave($__internal_9400ce5c05f3ffa1c43796f83edf479fdafb35bdbbe1529ed1fbe4f106fb338e_prof);

        
        $__internal_721f0a15a53f347ce26797a45964928e0e122a0951a1f0446eba777a98fd11e9->leave($__internal_721f0a15a53f347ce26797a45964928e0e122a0951a1f0446eba777a98fd11e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
