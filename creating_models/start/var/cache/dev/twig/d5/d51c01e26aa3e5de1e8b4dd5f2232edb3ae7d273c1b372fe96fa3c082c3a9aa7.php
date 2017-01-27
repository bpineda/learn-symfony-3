<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_f890f91aa4ece7148ff97449cf724547af4f2e1ef94db308656cf7e1bfe3cfc3 extends Twig_Template
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
        $__internal_fbf90407051959ae028bbbdb6cea4c3f8c2ad70b92217e5c616e72117f3e1be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf90407051959ae028bbbdb6cea4c3f8c2ad70b92217e5c616e72117f3e1be0->enter($__internal_fbf90407051959ae028bbbdb6cea4c3f8c2ad70b92217e5c616e72117f3e1be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_010a4af03923cce4eda82d6bebae1b1ae6c28cadb81b2d91d54380f7a14e2df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010a4af03923cce4eda82d6bebae1b1ae6c28cadb81b2d91d54380f7a14e2df0->enter($__internal_010a4af03923cce4eda82d6bebae1b1ae6c28cadb81b2d91d54380f7a14e2df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fbf90407051959ae028bbbdb6cea4c3f8c2ad70b92217e5c616e72117f3e1be0->leave($__internal_fbf90407051959ae028bbbdb6cea4c3f8c2ad70b92217e5c616e72117f3e1be0_prof);

        
        $__internal_010a4af03923cce4eda82d6bebae1b1ae6c28cadb81b2d91d54380f7a14e2df0->leave($__internal_010a4af03923cce4eda82d6bebae1b1ae6c28cadb81b2d91d54380f7a14e2df0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
