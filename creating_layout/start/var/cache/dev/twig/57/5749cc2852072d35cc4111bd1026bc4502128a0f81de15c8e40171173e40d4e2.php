<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cd5652ebacd9dfddf5784ed9afcdcc0904a62fe3c3f8dc825f8ab84b48236128 extends Twig_Template
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
        $__internal_5f03c67f96a9b9d54cb24c54479a7801c9b26027bddd00fe352ecc75c5d58de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f03c67f96a9b9d54cb24c54479a7801c9b26027bddd00fe352ecc75c5d58de0->enter($__internal_5f03c67f96a9b9d54cb24c54479a7801c9b26027bddd00fe352ecc75c5d58de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_098acf1ae09f90ec7763d1e3dbae38d1e04c30ee10fdeb806a60e78dd9ef591e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098acf1ae09f90ec7763d1e3dbae38d1e04c30ee10fdeb806a60e78dd9ef591e->enter($__internal_098acf1ae09f90ec7763d1e3dbae38d1e04c30ee10fdeb806a60e78dd9ef591e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5f03c67f96a9b9d54cb24c54479a7801c9b26027bddd00fe352ecc75c5d58de0->leave($__internal_5f03c67f96a9b9d54cb24c54479a7801c9b26027bddd00fe352ecc75c5d58de0_prof);

        
        $__internal_098acf1ae09f90ec7763d1e3dbae38d1e04c30ee10fdeb806a60e78dd9ef591e->leave($__internal_098acf1ae09f90ec7763d1e3dbae38d1e04c30ee10fdeb806a60e78dd9ef591e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
