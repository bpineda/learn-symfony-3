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
        $__internal_a59b39f8ba8f860a410c867feac0058f262cf09434ef92d474613ec7f4cc725c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59b39f8ba8f860a410c867feac0058f262cf09434ef92d474613ec7f4cc725c->enter($__internal_a59b39f8ba8f860a410c867feac0058f262cf09434ef92d474613ec7f4cc725c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_b4dbd3e52d4997aadde2f65785fa8ebbf134c6f8e4a4a06689748fbe139755e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4dbd3e52d4997aadde2f65785fa8ebbf134c6f8e4a4a06689748fbe139755e7->enter($__internal_b4dbd3e52d4997aadde2f65785fa8ebbf134c6f8e4a4a06689748fbe139755e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59b39f8ba8f860a410c867feac0058f262cf09434ef92d474613ec7f4cc725c->leave($__internal_a59b39f8ba8f860a410c867feac0058f262cf09434ef92d474613ec7f4cc725c_prof);

        
        $__internal_b4dbd3e52d4997aadde2f65785fa8ebbf134c6f8e4a4a06689748fbe139755e7->leave($__internal_b4dbd3e52d4997aadde2f65785fa8ebbf134c6f8e4a4a06689748fbe139755e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47591cf2f41290ecb994755250a9e853125a6755ea4b23cd277e8f9440d2c68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47591cf2f41290ecb994755250a9e853125a6755ea4b23cd277e8f9440d2c68c->enter($__internal_47591cf2f41290ecb994755250a9e853125a6755ea4b23cd277e8f9440d2c68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1585e3405cde70085c126fb64cb62bf10ec6c4127274e75387ce97aa5a68cdb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1585e3405cde70085c126fb64cb62bf10ec6c4127274e75387ce97aa5a68cdb6->enter($__internal_1585e3405cde70085c126fb64cb62bf10ec6c4127274e75387ce97aa5a68cdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1585e3405cde70085c126fb64cb62bf10ec6c4127274e75387ce97aa5a68cdb6->leave($__internal_1585e3405cde70085c126fb64cb62bf10ec6c4127274e75387ce97aa5a68cdb6_prof);

        
        $__internal_47591cf2f41290ecb994755250a9e853125a6755ea4b23cd277e8f9440d2c68c->leave($__internal_47591cf2f41290ecb994755250a9e853125a6755ea4b23cd277e8f9440d2c68c_prof);

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
", "reservations/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/app/Resources/views/reservations/index.html.twig");
    }
}
