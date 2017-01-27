<?php

/* reservations/index.html.twig */
class __TwigTemplate_ee463235539b69cc2e9539d7966d9f32fe53bacc1e659a0314b14f019bed78a9 extends Twig_Template
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
        $__internal_0d01ca64e2173a10e184902d1b91154f0548bf3990e1d784980754463048e4f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d01ca64e2173a10e184902d1b91154f0548bf3990e1d784980754463048e4f5->enter($__internal_0d01ca64e2173a10e184902d1b91154f0548bf3990e1d784980754463048e4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_9ce66ba598c20baef2fd65656f446a7569f58169f6ae7916345beb21904a7c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce66ba598c20baef2fd65656f446a7569f58169f6ae7916345beb21904a7c56->enter($__internal_9ce66ba598c20baef2fd65656f446a7569f58169f6ae7916345beb21904a7c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        // line 1
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
        
        $__internal_0d01ca64e2173a10e184902d1b91154f0548bf3990e1d784980754463048e4f5->leave($__internal_0d01ca64e2173a10e184902d1b91154f0548bf3990e1d784980754463048e4f5_prof);

        
        $__internal_9ce66ba598c20baef2fd65656f446a7569f58169f6ae7916345beb21904a7c56->leave($__internal_9ce66ba598c20baef2fd65656f446a7569f58169f6ae7916345beb21904a7c56_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
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
        return new Twig_Source("
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
", "reservations/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/app/Resources/views/reservations/index.html.twig");
    }
}
