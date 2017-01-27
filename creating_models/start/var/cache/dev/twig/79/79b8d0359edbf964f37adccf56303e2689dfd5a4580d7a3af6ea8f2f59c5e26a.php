<?php

/* reservations/index.html.twig */
class __TwigTemplate_c7cba6309dfbbf1258af328073ab7a4f7db01fb53a85c8eb96dc0452886960c0 extends Twig_Template
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
        $__internal_159404800f3a08bd06176d530aac4d5c17d1e40088f0552ceef5748cb0ce60f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159404800f3a08bd06176d530aac4d5c17d1e40088f0552ceef5748cb0ce60f9->enter($__internal_159404800f3a08bd06176d530aac4d5c17d1e40088f0552ceef5748cb0ce60f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_3ebab4243210415e14fe1e1aecaa73f82f9d06688b5c07e69aca53a67007b780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebab4243210415e14fe1e1aecaa73f82f9d06688b5c07e69aca53a67007b780->enter($__internal_3ebab4243210415e14fe1e1aecaa73f82f9d06688b5c07e69aca53a67007b780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_159404800f3a08bd06176d530aac4d5c17d1e40088f0552ceef5748cb0ce60f9->leave($__internal_159404800f3a08bd06176d530aac4d5c17d1e40088f0552ceef5748cb0ce60f9_prof);

        
        $__internal_3ebab4243210415e14fe1e1aecaa73f82f9d06688b5c07e69aca53a67007b780->leave($__internal_3ebab4243210415e14fe1e1aecaa73f82f9d06688b5c07e69aca53a67007b780_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d67e64292fd09b613e5366909299dedd508c6bfa681a48c1620e8bd09f07dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d67e64292fd09b613e5366909299dedd508c6bfa681a48c1620e8bd09f07dad->enter($__internal_1d67e64292fd09b613e5366909299dedd508c6bfa681a48c1620e8bd09f07dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69132b9608158308bfebc3e1e56febc5df294073f872c4891db33ef690592863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69132b9608158308bfebc3e1e56febc5df294073f872c4891db33ef690592863->enter($__internal_69132b9608158308bfebc3e1e56febc5df294073f872c4891db33ef690592863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69132b9608158308bfebc3e1e56febc5df294073f872c4891db33ef690592863->leave($__internal_69132b9608158308bfebc3e1e56febc5df294073f872c4891db33ef690592863_prof);

        
        $__internal_1d67e64292fd09b613e5366909299dedd508c6bfa681a48c1620e8bd09f07dad->leave($__internal_1d67e64292fd09b613e5366909299dedd508c6bfa681a48c1620e8bd09f07dad_prof);

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
", "reservations/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/app/Resources/views/reservations/index.html.twig");
    }
}
