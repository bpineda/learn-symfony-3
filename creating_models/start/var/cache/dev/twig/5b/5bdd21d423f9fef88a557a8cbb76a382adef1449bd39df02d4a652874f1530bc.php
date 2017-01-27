<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4707ec56c6adcc18f72bcb43e2ceb26e1e71a55b4258af700e78d1508960f128 extends Twig_Template
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
        $__internal_927f651c5eeff1baa95a77ae157863c3e54f3f7ffdae38b06de49a912bf664bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927f651c5eeff1baa95a77ae157863c3e54f3f7ffdae38b06de49a912bf664bb->enter($__internal_927f651c5eeff1baa95a77ae157863c3e54f3f7ffdae38b06de49a912bf664bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f13a8e95da35c9c72f59138946af50ff5bc5d055fd21a0cac03653ec1752cf4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13a8e95da35c9c72f59138946af50ff5bc5d055fd21a0cac03653ec1752cf4b->enter($__internal_f13a8e95da35c9c72f59138946af50ff5bc5d055fd21a0cac03653ec1752cf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_927f651c5eeff1baa95a77ae157863c3e54f3f7ffdae38b06de49a912bf664bb->leave($__internal_927f651c5eeff1baa95a77ae157863c3e54f3f7ffdae38b06de49a912bf664bb_prof);

        
        $__internal_f13a8e95da35c9c72f59138946af50ff5bc5d055fd21a0cac03653ec1752cf4b->leave($__internal_f13a8e95da35c9c72f59138946af50ff5bc5d055fd21a0cac03653ec1752cf4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
