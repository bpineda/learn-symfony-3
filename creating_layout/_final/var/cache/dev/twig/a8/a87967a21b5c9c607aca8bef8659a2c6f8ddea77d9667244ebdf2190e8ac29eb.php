<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_9925acbccdcd3f00558b17571ec51b6cafd4a010ab9148bc035ce766290c0ef1 extends Twig_Template
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
        $__internal_ded327cc69d94a390c934139a4c7f1bb7cf0df780e22f6300c526d93f154420d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded327cc69d94a390c934139a4c7f1bb7cf0df780e22f6300c526d93f154420d->enter($__internal_ded327cc69d94a390c934139a4c7f1bb7cf0df780e22f6300c526d93f154420d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_992b7d422263c982ffa2768a9d381391dce2fe383d4d00410af35e8aff23c2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992b7d422263c982ffa2768a9d381391dce2fe383d4d00410af35e8aff23c2bd->enter($__internal_992b7d422263c982ffa2768a9d381391dce2fe383d4d00410af35e8aff23c2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_ded327cc69d94a390c934139a4c7f1bb7cf0df780e22f6300c526d93f154420d->leave($__internal_ded327cc69d94a390c934139a4c7f1bb7cf0df780e22f6300c526d93f154420d_prof);

        
        $__internal_992b7d422263c982ffa2768a9d381391dce2fe383d4d00410af35e8aff23c2bd->leave($__internal_992b7d422263c982ffa2768a9d381391dce2fe383d4d00410af35e8aff23c2bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
