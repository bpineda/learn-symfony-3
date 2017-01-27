<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0abc6f40acca74d673f20a22d3c643166dd1267fa9f90a808e54c32fd1361d6a extends Twig_Template
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
        $__internal_d95788df76f6c30457eb37392f92693ef01cc7db3f515cff76af6722bee90172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95788df76f6c30457eb37392f92693ef01cc7db3f515cff76af6722bee90172->enter($__internal_d95788df76f6c30457eb37392f92693ef01cc7db3f515cff76af6722bee90172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_874e25ab33f73f7b3108a0f5678871fa374b5c49b2b926bd3916cd6143f3e164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874e25ab33f73f7b3108a0f5678871fa374b5c49b2b926bd3916cd6143f3e164->enter($__internal_874e25ab33f73f7b3108a0f5678871fa374b5c49b2b926bd3916cd6143f3e164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d95788df76f6c30457eb37392f92693ef01cc7db3f515cff76af6722bee90172->leave($__internal_d95788df76f6c30457eb37392f92693ef01cc7db3f515cff76af6722bee90172_prof);

        
        $__internal_874e25ab33f73f7b3108a0f5678871fa374b5c49b2b926bd3916cd6143f3e164->leave($__internal_874e25ab33f73f7b3108a0f5678871fa374b5c49b2b926bd3916cd6143f3e164_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
