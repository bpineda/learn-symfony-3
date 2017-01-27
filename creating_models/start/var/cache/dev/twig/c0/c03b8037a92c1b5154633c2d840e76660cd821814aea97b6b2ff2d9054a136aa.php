<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_db67576ab13396060acbd6222717f8f87487f92492b5724a5ae606fb5f0f15b4 extends Twig_Template
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
        $__internal_e884818fb9b9ddd20d84915c5b0c05431b9865a4f7a9232659997ff1b122e820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e884818fb9b9ddd20d84915c5b0c05431b9865a4f7a9232659997ff1b122e820->enter($__internal_e884818fb9b9ddd20d84915c5b0c05431b9865a4f7a9232659997ff1b122e820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_960a3bc004f10669e3f8291b9566b2a3e780ccd865dad87517a3266fa6074ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960a3bc004f10669e3f8291b9566b2a3e780ccd865dad87517a3266fa6074ee2->enter($__internal_960a3bc004f10669e3f8291b9566b2a3e780ccd865dad87517a3266fa6074ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e884818fb9b9ddd20d84915c5b0c05431b9865a4f7a9232659997ff1b122e820->leave($__internal_e884818fb9b9ddd20d84915c5b0c05431b9865a4f7a9232659997ff1b122e820_prof);

        
        $__internal_960a3bc004f10669e3f8291b9566b2a3e780ccd865dad87517a3266fa6074ee2->leave($__internal_960a3bc004f10669e3f8291b9566b2a3e780ccd865dad87517a3266fa6074ee2_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
