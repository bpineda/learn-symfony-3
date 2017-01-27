<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8d7fc57ec57976c834bdabbe0692a6b93448dc3d151726d1fff2da8573abd814 extends Twig_Template
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
        $__internal_f20baf344091ea68813f4fcf35fd73c1e995a66ff98fec45b03522c36f3550f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20baf344091ea68813f4fcf35fd73c1e995a66ff98fec45b03522c36f3550f3->enter($__internal_f20baf344091ea68813f4fcf35fd73c1e995a66ff98fec45b03522c36f3550f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b62d54a02e4d6af01f37a0eec6b20448235fb6972a329f8fe354302e45316017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62d54a02e4d6af01f37a0eec6b20448235fb6972a329f8fe354302e45316017->enter($__internal_b62d54a02e4d6af01f37a0eec6b20448235fb6972a329f8fe354302e45316017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f20baf344091ea68813f4fcf35fd73c1e995a66ff98fec45b03522c36f3550f3->leave($__internal_f20baf344091ea68813f4fcf35fd73c1e995a66ff98fec45b03522c36f3550f3_prof);

        
        $__internal_b62d54a02e4d6af01f37a0eec6b20448235fb6972a329f8fe354302e45316017->leave($__internal_b62d54a02e4d6af01f37a0eec6b20448235fb6972a329f8fe354302e45316017_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
