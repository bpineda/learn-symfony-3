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
        $__internal_fbc78473bf6740c53e8ade7ac9d8c26c62309f90d5fde7c4b14b9604ac3bdf02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc78473bf6740c53e8ade7ac9d8c26c62309f90d5fde7c4b14b9604ac3bdf02->enter($__internal_fbc78473bf6740c53e8ade7ac9d8c26c62309f90d5fde7c4b14b9604ac3bdf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_c71802b5aab9cdb700c578d021f5c7ba6813a86a9d2fa198435f3baeae252777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71802b5aab9cdb700c578d021f5c7ba6813a86a9d2fa198435f3baeae252777->enter($__internal_c71802b5aab9cdb700c578d021f5c7ba6813a86a9d2fa198435f3baeae252777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc78473bf6740c53e8ade7ac9d8c26c62309f90d5fde7c4b14b9604ac3bdf02->leave($__internal_fbc78473bf6740c53e8ade7ac9d8c26c62309f90d5fde7c4b14b9604ac3bdf02_prof);

        
        $__internal_c71802b5aab9cdb700c578d021f5c7ba6813a86a9d2fa198435f3baeae252777->leave($__internal_c71802b5aab9cdb700c578d021f5c7ba6813a86a9d2fa198435f3baeae252777_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c89e58b2a294164c0375328906793b15f6525d60669998a15716c5f8d28ca08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c89e58b2a294164c0375328906793b15f6525d60669998a15716c5f8d28ca08->enter($__internal_7c89e58b2a294164c0375328906793b15f6525d60669998a15716c5f8d28ca08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f822f94d72afeb5e24559a177a1370633a8b1acbc36096769370ce6c130a1c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f822f94d72afeb5e24559a177a1370633a8b1acbc36096769370ce6c130a1c25->enter($__internal_f822f94d72afeb5e24559a177a1370633a8b1acbc36096769370ce6c130a1c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f822f94d72afeb5e24559a177a1370633a8b1acbc36096769370ce6c130a1c25->leave($__internal_f822f94d72afeb5e24559a177a1370633a8b1acbc36096769370ce6c130a1c25_prof);

        
        $__internal_7c89e58b2a294164c0375328906793b15f6525d60669998a15716c5f8d28ca08->leave($__internal_7c89e58b2a294164c0375328906793b15f6525d60669998a15716c5f8d28ca08_prof);

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
