<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_46bca856752666aa29e762dfff6fc9cbc54ccaec7c6750d5e92b14931c38f00d extends Twig_Template
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
        $__internal_ae30b1ac0a13d7c3a0fca81e505dc0d311e0cfbebfd88d4cb14bc990fa5f5707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae30b1ac0a13d7c3a0fca81e505dc0d311e0cfbebfd88d4cb14bc990fa5f5707->enter($__internal_ae30b1ac0a13d7c3a0fca81e505dc0d311e0cfbebfd88d4cb14bc990fa5f5707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a501b4d4bf479912eaa43b4f3cca26e0dcb664b41659d06322b3110face402a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a501b4d4bf479912eaa43b4f3cca26e0dcb664b41659d06322b3110face402a7->enter($__internal_a501b4d4bf479912eaa43b4f3cca26e0dcb664b41659d06322b3110face402a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ae30b1ac0a13d7c3a0fca81e505dc0d311e0cfbebfd88d4cb14bc990fa5f5707->leave($__internal_ae30b1ac0a13d7c3a0fca81e505dc0d311e0cfbebfd88d4cb14bc990fa5f5707_prof);

        
        $__internal_a501b4d4bf479912eaa43b4f3cca26e0dcb664b41659d06322b3110face402a7->leave($__internal_a501b4d4bf479912eaa43b4f3cca26e0dcb664b41659d06322b3110face402a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
