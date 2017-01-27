<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f8dec6437b1a13b64c5e8a8c3a4c13f6a83881fd4deddb2755188ef54c7b594c extends Twig_Template
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
        $__internal_72ded6af4655cf91af72aa76a66c6d18c64c7b712b4a07b3428dcfd2a7fa03c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ded6af4655cf91af72aa76a66c6d18c64c7b712b4a07b3428dcfd2a7fa03c3->enter($__internal_72ded6af4655cf91af72aa76a66c6d18c64c7b712b4a07b3428dcfd2a7fa03c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a01a0bbb002c7f8bbf8a27024d95154b3ecc5927b92db0b57c83b1302a741edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01a0bbb002c7f8bbf8a27024d95154b3ecc5927b92db0b57c83b1302a741edc->enter($__internal_a01a0bbb002c7f8bbf8a27024d95154b3ecc5927b92db0b57c83b1302a741edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_72ded6af4655cf91af72aa76a66c6d18c64c7b712b4a07b3428dcfd2a7fa03c3->leave($__internal_72ded6af4655cf91af72aa76a66c6d18c64c7b712b4a07b3428dcfd2a7fa03c3_prof);

        
        $__internal_a01a0bbb002c7f8bbf8a27024d95154b3ecc5927b92db0b57c83b1302a741edc->leave($__internal_a01a0bbb002c7f8bbf8a27024d95154b3ecc5927b92db0b57c83b1302a741edc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
