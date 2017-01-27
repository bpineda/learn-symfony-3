<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_22c72c03391b2743217a7884bfd1a8d5f9aaee484a7326701662adb5833a948c extends Twig_Template
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
        $__internal_cf050570659198b3910345d3cd7b71fbed1f71d65bf6031e3ffba3dcf7f64bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf050570659198b3910345d3cd7b71fbed1f71d65bf6031e3ffba3dcf7f64bb6->enter($__internal_cf050570659198b3910345d3cd7b71fbed1f71d65bf6031e3ffba3dcf7f64bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7b41c4b06bcec80f1d04d0a01723661f6d352b51cde130d6d689c58e9a3515f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b41c4b06bcec80f1d04d0a01723661f6d352b51cde130d6d689c58e9a3515f9->enter($__internal_7b41c4b06bcec80f1d04d0a01723661f6d352b51cde130d6d689c58e9a3515f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cf050570659198b3910345d3cd7b71fbed1f71d65bf6031e3ffba3dcf7f64bb6->leave($__internal_cf050570659198b3910345d3cd7b71fbed1f71d65bf6031e3ffba3dcf7f64bb6_prof);

        
        $__internal_7b41c4b06bcec80f1d04d0a01723661f6d352b51cde130d6d689c58e9a3515f9->leave($__internal_7b41c4b06bcec80f1d04d0a01723661f6d352b51cde130d6d689c58e9a3515f9_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
