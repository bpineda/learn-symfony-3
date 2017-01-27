<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_03a982e6b5c7fdb7e5c79dbb157f3147291b113dd45da85fd30323be72d311e6 extends Twig_Template
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
        $__internal_057de9bacc4d7f5100b2f68904c68c71bba800adaec3ccc7164aa440fe276224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057de9bacc4d7f5100b2f68904c68c71bba800adaec3ccc7164aa440fe276224->enter($__internal_057de9bacc4d7f5100b2f68904c68c71bba800adaec3ccc7164aa440fe276224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3d4425b03850769dad0430809ec2a7f93ad4ca010a5ffc7cc00e3e5b005086af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4425b03850769dad0430809ec2a7f93ad4ca010a5ffc7cc00e3e5b005086af->enter($__internal_3d4425b03850769dad0430809ec2a7f93ad4ca010a5ffc7cc00e3e5b005086af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_057de9bacc4d7f5100b2f68904c68c71bba800adaec3ccc7164aa440fe276224->leave($__internal_057de9bacc4d7f5100b2f68904c68c71bba800adaec3ccc7164aa440fe276224_prof);

        
        $__internal_3d4425b03850769dad0430809ec2a7f93ad4ca010a5ffc7cc00e3e5b005086af->leave($__internal_3d4425b03850769dad0430809ec2a7f93ad4ca010a5ffc7cc00e3e5b005086af_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
