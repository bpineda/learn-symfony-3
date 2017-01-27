<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3bebc8679f9932a3df7e07ad45f5a9b8adbda48f5750ff05169b957a8855987c extends Twig_Template
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
        $__internal_2819d4c7709394641262b62c24b9dbbdae6b64e5077dcfa0b4941cbbc5f0a363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2819d4c7709394641262b62c24b9dbbdae6b64e5077dcfa0b4941cbbc5f0a363->enter($__internal_2819d4c7709394641262b62c24b9dbbdae6b64e5077dcfa0b4941cbbc5f0a363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_977387062c08f2f9e3ef7efce250b33ce683da1d53e63c930d99bd8cb4596d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977387062c08f2f9e3ef7efce250b33ce683da1d53e63c930d99bd8cb4596d03->enter($__internal_977387062c08f2f9e3ef7efce250b33ce683da1d53e63c930d99bd8cb4596d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2819d4c7709394641262b62c24b9dbbdae6b64e5077dcfa0b4941cbbc5f0a363->leave($__internal_2819d4c7709394641262b62c24b9dbbdae6b64e5077dcfa0b4941cbbc5f0a363_prof);

        
        $__internal_977387062c08f2f9e3ef7efce250b33ce683da1d53e63c930d99bd8cb4596d03->leave($__internal_977387062c08f2f9e3ef7efce250b33ce683da1d53e63c930d99bd8cb4596d03_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
