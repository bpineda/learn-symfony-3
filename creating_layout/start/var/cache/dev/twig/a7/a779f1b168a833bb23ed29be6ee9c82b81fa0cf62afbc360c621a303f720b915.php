<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_697eeca3751ff80ef265441b16a1724a631b171cfe20f7ef753f4c1c3f8342eb extends Twig_Template
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
        $__internal_1fc8ec5d6b43be585ef05474c779767841b592287e279f41126b52a5344031d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc8ec5d6b43be585ef05474c779767841b592287e279f41126b52a5344031d6->enter($__internal_1fc8ec5d6b43be585ef05474c779767841b592287e279f41126b52a5344031d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_decd5980cbc1b69151a21aa9f3cea4cef69be2774a0e7d0c39c40043efbcca5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decd5980cbc1b69151a21aa9f3cea4cef69be2774a0e7d0c39c40043efbcca5b->enter($__internal_decd5980cbc1b69151a21aa9f3cea4cef69be2774a0e7d0c39c40043efbcca5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1fc8ec5d6b43be585ef05474c779767841b592287e279f41126b52a5344031d6->leave($__internal_1fc8ec5d6b43be585ef05474c779767841b592287e279f41126b52a5344031d6_prof);

        
        $__internal_decd5980cbc1b69151a21aa9f3cea4cef69be2774a0e7d0c39c40043efbcca5b->leave($__internal_decd5980cbc1b69151a21aa9f3cea4cef69be2774a0e7d0c39c40043efbcca5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
