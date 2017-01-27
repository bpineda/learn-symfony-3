<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_560e8b52d178a5a334d440485f5e98e60f11474ae76e82c895bc816739d46ed5 extends Twig_Template
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
        $__internal_12296d61bfadf52626005729f5f7cfb48ee313ea74b4cc476dac1f6681a19558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12296d61bfadf52626005729f5f7cfb48ee313ea74b4cc476dac1f6681a19558->enter($__internal_12296d61bfadf52626005729f5f7cfb48ee313ea74b4cc476dac1f6681a19558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3088ca6f50aed7a868fefa9d172a489f32d572782fbb992a3c1034afe746930f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3088ca6f50aed7a868fefa9d172a489f32d572782fbb992a3c1034afe746930f->enter($__internal_3088ca6f50aed7a868fefa9d172a489f32d572782fbb992a3c1034afe746930f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_12296d61bfadf52626005729f5f7cfb48ee313ea74b4cc476dac1f6681a19558->leave($__internal_12296d61bfadf52626005729f5f7cfb48ee313ea74b4cc476dac1f6681a19558_prof);

        
        $__internal_3088ca6f50aed7a868fefa9d172a489f32d572782fbb992a3c1034afe746930f->leave($__internal_3088ca6f50aed7a868fefa9d172a489f32d572782fbb992a3c1034afe746930f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
