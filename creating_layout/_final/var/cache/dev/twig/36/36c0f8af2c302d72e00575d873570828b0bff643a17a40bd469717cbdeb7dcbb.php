<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0d48afd35a046e2b2baa6070668a4a3311cbcce476240d4c94916fabf34a99bd extends Twig_Template
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
        $__internal_33cd85332ab81c87e2c30f24b68f2e0369fac64e389ad7dc42b50887c18e41d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33cd85332ab81c87e2c30f24b68f2e0369fac64e389ad7dc42b50887c18e41d5->enter($__internal_33cd85332ab81c87e2c30f24b68f2e0369fac64e389ad7dc42b50887c18e41d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a8ba846b09ce8cecd4efd01dd487976a5a895d912ae88bbf756231b25a37aef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ba846b09ce8cecd4efd01dd487976a5a895d912ae88bbf756231b25a37aef8->enter($__internal_a8ba846b09ce8cecd4efd01dd487976a5a895d912ae88bbf756231b25a37aef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_33cd85332ab81c87e2c30f24b68f2e0369fac64e389ad7dc42b50887c18e41d5->leave($__internal_33cd85332ab81c87e2c30f24b68f2e0369fac64e389ad7dc42b50887c18e41d5_prof);

        
        $__internal_a8ba846b09ce8cecd4efd01dd487976a5a895d912ae88bbf756231b25a37aef8->leave($__internal_a8ba846b09ce8cecd4efd01dd487976a5a895d912ae88bbf756231b25a37aef8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
