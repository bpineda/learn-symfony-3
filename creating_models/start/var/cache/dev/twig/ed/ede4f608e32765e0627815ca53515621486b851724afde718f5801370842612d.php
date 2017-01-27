<?php

/* clients/index.html.twig */
class __TwigTemplate_55a445c2be1382c4fdb054a7cf20d22f086983746d953b2c25dc02e5b1d8a529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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
        $__internal_ed722cfd1522fa81cde4190447786e725e4f9233fb7d56dbac1f933c083d919d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed722cfd1522fa81cde4190447786e725e4f9233fb7d56dbac1f933c083d919d->enter($__internal_ed722cfd1522fa81cde4190447786e725e4f9233fb7d56dbac1f933c083d919d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_7a532b9ebf6988805d83b881c239795ae241d6e4a8b0bce62e00ccb1ad001b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a532b9ebf6988805d83b881c239795ae241d6e4a8b0bce62e00ccb1ad001b09->enter($__internal_7a532b9ebf6988805d83b881c239795ae241d6e4a8b0bce62e00ccb1ad001b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed722cfd1522fa81cde4190447786e725e4f9233fb7d56dbac1f933c083d919d->leave($__internal_ed722cfd1522fa81cde4190447786e725e4f9233fb7d56dbac1f933c083d919d_prof);

        
        $__internal_7a532b9ebf6988805d83b881c239795ae241d6e4a8b0bce62e00ccb1ad001b09->leave($__internal_7a532b9ebf6988805d83b881c239795ae241d6e4a8b0bce62e00ccb1ad001b09_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e57e1253dbd61c54dfd23afb454d89067355f56eca2d8aaf1722ee4d8bb7a029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57e1253dbd61c54dfd23afb454d89067355f56eca2d8aaf1722ee4d8bb7a029->enter($__internal_e57e1253dbd61c54dfd23afb454d89067355f56eca2d8aaf1722ee4d8bb7a029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c27fe37993024b7d55b9c0250faf69f8b940736da700c1e88d1347bc1a99e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c27fe37993024b7d55b9c0250faf69f8b940736da700c1e88d1347bc1a99e17->enter($__internal_7c27fe37993024b7d55b9c0250faf69f8b940736da700c1e88d1347bc1a99e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a type=\"button\" class=\"button\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_client");
        echo "\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 19
            echo "              <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["client"], "title", array())), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "last_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                  <a class=\"hollow button\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_client", array("client_id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_7c27fe37993024b7d55b9c0250faf69f8b940736da700c1e88d1347bc1a99e17->leave($__internal_7c27fe37993024b7d55b9c0250faf69f8b940736da700c1e88d1347bc1a99e17_prof);

        
        $__internal_e57e1253dbd61c54dfd23afb454d89067355f56eca2d8aaf1722ee4d8bb7a029->leave($__internal_e57e1253dbd61c54dfd23afb454d89067355f56eca2d8aaf1722ee4d8bb7a029_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  88 => 23,  83 => 21,  75 => 20,  72 => 19,  68 => 18,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a type=\"button\" class=\"button\" href=\"{{ path('new_client')}}\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          {% for client in clients %}
              <tr>
                <td>{{ client.title | capitalize }}. {{ client.name }} {{ client.last_name  }}</td>
                <td>{{ client.email  }}</td>
                <td>
                  <a class=\"hollow button\" href=\"{{ path('modify_client', { 'client_id': client.id }) }}\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/app/Resources/views/clients/index.html.twig");
    }
}
