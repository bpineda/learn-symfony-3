<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_126ff0bbf48f3cb1013d0339b5f96018de579560c1e7852b08a3b1a3badc6868 extends Twig_Template
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
        $__internal_56ccb6708abe23094d25cdb34d937ac9c5497449285e4e30d95f780ae6a2672e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ccb6708abe23094d25cdb34d937ac9c5497449285e4e30d95f780ae6a2672e->enter($__internal_56ccb6708abe23094d25cdb34d937ac9c5497449285e4e30d95f780ae6a2672e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_bb54610c6816e1e91c1a10a279dffcbfba61052da874664e6cdf11838dac3cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb54610c6816e1e91c1a10a279dffcbfba61052da874664e6cdf11838dac3cbb->enter($__internal_bb54610c6816e1e91c1a10a279dffcbfba61052da874664e6cdf11838dac3cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_56ccb6708abe23094d25cdb34d937ac9c5497449285e4e30d95f780ae6a2672e->leave($__internal_56ccb6708abe23094d25cdb34d937ac9c5497449285e4e30d95f780ae6a2672e_prof);

        
        $__internal_bb54610c6816e1e91c1a10a279dffcbfba61052da874664e6cdf11838dac3cbb->leave($__internal_bb54610c6816e1e91c1a10a279dffcbfba61052da874664e6cdf11838dac3cbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
