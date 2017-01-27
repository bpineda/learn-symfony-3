<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9c416650d2b1e5ef1a8e7ebdf9f82637796b29a736f060a449d843af5f5b66e1 extends Twig_Template
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
        $__internal_60604cb3ccf885b91c5afe6e7a63e8881493c78a90d748b80ecc89474637f11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60604cb3ccf885b91c5afe6e7a63e8881493c78a90d748b80ecc89474637f11d->enter($__internal_60604cb3ccf885b91c5afe6e7a63e8881493c78a90d748b80ecc89474637f11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a8e3636112e22d538ee49f4e1fdef0b11fc541b99a1f827074731a1f2ac7ea1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e3636112e22d538ee49f4e1fdef0b11fc541b99a1f827074731a1f2ac7ea1b->enter($__internal_a8e3636112e22d538ee49f4e1fdef0b11fc541b99a1f827074731a1f2ac7ea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_60604cb3ccf885b91c5afe6e7a63e8881493c78a90d748b80ecc89474637f11d->leave($__internal_60604cb3ccf885b91c5afe6e7a63e8881493c78a90d748b80ecc89474637f11d_prof);

        
        $__internal_a8e3636112e22d538ee49f4e1fdef0b11fc541b99a1f827074731a1f2ac7ea1b->leave($__internal_a8e3636112e22d538ee49f4e1fdef0b11fc541b99a1f827074731a1f2ac7ea1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
