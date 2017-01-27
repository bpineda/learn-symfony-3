<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c372ea0fc2037994edc2295b1a9f70375efec7f903c4ecf5c33b51de3d19df29 extends Twig_Template
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
        $__internal_e0078933796a5d87b02adbacae7d1dc5f628145407db646b8b63e5b527ff931c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0078933796a5d87b02adbacae7d1dc5f628145407db646b8b63e5b527ff931c->enter($__internal_e0078933796a5d87b02adbacae7d1dc5f628145407db646b8b63e5b527ff931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_85a50b08c10e2888fdc7362139204e82d1c1205c973344dda61fdb6af690f72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a50b08c10e2888fdc7362139204e82d1c1205c973344dda61fdb6af690f72b->enter($__internal_85a50b08c10e2888fdc7362139204e82d1c1205c973344dda61fdb6af690f72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e0078933796a5d87b02adbacae7d1dc5f628145407db646b8b63e5b527ff931c->leave($__internal_e0078933796a5d87b02adbacae7d1dc5f628145407db646b8b63e5b527ff931c_prof);

        
        $__internal_85a50b08c10e2888fdc7362139204e82d1c1205c973344dda61fdb6af690f72b->leave($__internal_85a50b08c10e2888fdc7362139204e82d1c1205c973344dda61fdb6af690f72b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
