<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_495cfb1d25d8f3bdec897196383990c2ecbced19b77ac0f19df36d603f51b252 extends Twig_Template
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
        $__internal_09b6aa6128f9e5b81c28dfee0b8ca1caf3f5478a3db9a8b1f848b8e41ce2e185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b6aa6128f9e5b81c28dfee0b8ca1caf3f5478a3db9a8b1f848b8e41ce2e185->enter($__internal_09b6aa6128f9e5b81c28dfee0b8ca1caf3f5478a3db9a8b1f848b8e41ce2e185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0d138dcb2bf0bf2c396043d9469467df38f94435942f6bdf0b545af76361b067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d138dcb2bf0bf2c396043d9469467df38f94435942f6bdf0b545af76361b067->enter($__internal_0d138dcb2bf0bf2c396043d9469467df38f94435942f6bdf0b545af76361b067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_09b6aa6128f9e5b81c28dfee0b8ca1caf3f5478a3db9a8b1f848b8e41ce2e185->leave($__internal_09b6aa6128f9e5b81c28dfee0b8ca1caf3f5478a3db9a8b1f848b8e41ce2e185_prof);

        
        $__internal_0d138dcb2bf0bf2c396043d9469467df38f94435942f6bdf0b545af76361b067->leave($__internal_0d138dcb2bf0bf2c396043d9469467df38f94435942f6bdf0b545af76361b067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
