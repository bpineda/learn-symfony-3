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
        $__internal_09b22ede109deebc55ad1ce5355643e7f0112c4100ab37d00dad62daa74b2b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b22ede109deebc55ad1ce5355643e7f0112c4100ab37d00dad62daa74b2b5f->enter($__internal_09b22ede109deebc55ad1ce5355643e7f0112c4100ab37d00dad62daa74b2b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_157c2f9f5b6a4fa613a059048bad34e5f70ea1de859a94190cae60f101784b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157c2f9f5b6a4fa613a059048bad34e5f70ea1de859a94190cae60f101784b65->enter($__internal_157c2f9f5b6a4fa613a059048bad34e5f70ea1de859a94190cae60f101784b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_09b22ede109deebc55ad1ce5355643e7f0112c4100ab37d00dad62daa74b2b5f->leave($__internal_09b22ede109deebc55ad1ce5355643e7f0112c4100ab37d00dad62daa74b2b5f_prof);

        
        $__internal_157c2f9f5b6a4fa613a059048bad34e5f70ea1de859a94190cae60f101784b65->leave($__internal_157c2f9f5b6a4fa613a059048bad34e5f70ea1de859a94190cae60f101784b65_prof);

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
", "@Framework/Form/money_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
