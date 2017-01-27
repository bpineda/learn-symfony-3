<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_74b6eb33431e1d2269b8a34ddf75e4ac32bc6551b85f60c0f8b13f43a4f556e8 extends Twig_Template
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
        $__internal_3a772fdf1328ebd54da500281505a7a47f4a53d4f7c0a8a82a93969bae904546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a772fdf1328ebd54da500281505a7a47f4a53d4f7c0a8a82a93969bae904546->enter($__internal_3a772fdf1328ebd54da500281505a7a47f4a53d4f7c0a8a82a93969bae904546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0565fcd613f6f0c81256ce2e376e85ac0f0a4c6f4e65de947afd66bf53cf4ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0565fcd613f6f0c81256ce2e376e85ac0f0a4c6f4e65de947afd66bf53cf4ba7->enter($__internal_0565fcd613f6f0c81256ce2e376e85ac0f0a4c6f4e65de947afd66bf53cf4ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3a772fdf1328ebd54da500281505a7a47f4a53d4f7c0a8a82a93969bae904546->leave($__internal_3a772fdf1328ebd54da500281505a7a47f4a53d4f7c0a8a82a93969bae904546_prof);

        
        $__internal_0565fcd613f6f0c81256ce2e376e85ac0f0a4c6f4e65de947afd66bf53cf4ba7->leave($__internal_0565fcd613f6f0c81256ce2e376e85ac0f0a4c6f4e65de947afd66bf53cf4ba7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
