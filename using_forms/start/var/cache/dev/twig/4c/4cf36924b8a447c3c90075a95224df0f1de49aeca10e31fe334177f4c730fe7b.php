<?php

/* reservations/index.html.twig */
class __TwigTemplate_ee463235539b69cc2e9539d7966d9f32fe53bacc1e659a0314b14f019bed78a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d248c0352c6c28151ecefa233b884b26888d2209b12280bfc7bdf0fc45c20aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d248c0352c6c28151ecefa233b884b26888d2209b12280bfc7bdf0fc45c20aca->enter($__internal_d248c0352c6c28151ecefa233b884b26888d2209b12280bfc7bdf0fc45c20aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_2ec14bc49723e9273138002c0ba6c328ba7cec83c038538770e5540a2e556a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec14bc49723e9273138002c0ba6c328ba7cec83c038538770e5540a2e556a89->enter($__internal_2ec14bc49723e9273138002c0ba6c328ba7cec83c038538770e5540a2e556a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d248c0352c6c28151ecefa233b884b26888d2209b12280bfc7bdf0fc45c20aca->leave($__internal_d248c0352c6c28151ecefa233b884b26888d2209b12280bfc7bdf0fc45c20aca_prof);

        
        $__internal_2ec14bc49723e9273138002c0ba6c328ba7cec83c038538770e5540a2e556a89->leave($__internal_2ec14bc49723e9273138002c0ba6c328ba7cec83c038538770e5540a2e556a89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ca1e0420d627ad94a0e1406cf4a6d8a97ff7149220576536f7bb045dfce1ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca1e0420d627ad94a0e1406cf4a6d8a97ff7149220576536f7bb045dfce1ec7->enter($__internal_4ca1e0420d627ad94a0e1406cf4a6d8a97ff7149220576536f7bb045dfce1ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b21b97201d953a32e35a2618c75b6f5583a7b93347dbf09c305ccf1a3a4446b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b21b97201d953a32e35a2618c75b6f5583a7b93347dbf09c305ccf1a3a4446b->enter($__internal_4b21b97201d953a32e35a2618c75b6f5583a7b93347dbf09c305ccf1a3a4446b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_4b21b97201d953a32e35a2618c75b6f5583a7b93347dbf09c305ccf1a3a4446b->leave($__internal_4b21b97201d953a32e35a2618c75b6f5583a7b93347dbf09c305ccf1a3a4446b_prof);

        
        $__internal_4ca1e0420d627ad94a0e1406cf4a6d8a97ff7149220576536f7bb045dfce1ec7->leave($__internal_4ca1e0420d627ad94a0e1406cf4a6d8a97ff7149220576536f7bb045dfce1ec7_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/app/Resources/views/reservations/index.html.twig");
    }
}
