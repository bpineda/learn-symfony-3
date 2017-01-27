<?php

/* clients/form.html.twig */
class __TwigTemplate_ce18e47ee04cb7e7ab0432bf867b59c8d6d90ba3d4e79c9d4114516f067d1828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/form.html.twig", 1);
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
        $__internal_6f4b4abc0e6315e18cb89b34cdbee37982e6d8b3e0fe5e3291e8aa546175bdac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4b4abc0e6315e18cb89b34cdbee37982e6d8b3e0fe5e3291e8aa546175bdac->enter($__internal_6f4b4abc0e6315e18cb89b34cdbee37982e6d8b3e0fe5e3291e8aa546175bdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_b96cbcb74ff2b2e186615fe114c5a95089ef8dc77c70cb90eb0ddbf65f7bde2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96cbcb74ff2b2e186615fe114c5a95089ef8dc77c70cb90eb0ddbf65f7bde2c->enter($__internal_b96cbcb74ff2b2e186615fe114c5a95089ef8dc77c70cb90eb0ddbf65f7bde2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f4b4abc0e6315e18cb89b34cdbee37982e6d8b3e0fe5e3291e8aa546175bdac->leave($__internal_6f4b4abc0e6315e18cb89b34cdbee37982e6d8b3e0fe5e3291e8aa546175bdac_prof);

        
        $__internal_b96cbcb74ff2b2e186615fe114c5a95089ef8dc77c70cb90eb0ddbf65f7bde2c->leave($__internal_b96cbcb74ff2b2e186615fe114c5a95089ef8dc77c70cb90eb0ddbf65f7bde2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4dbffb0c46ef5442dfa161d3cae4dfa6c129fdfd12a9993d8ddf1444d3c19df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dbffb0c46ef5442dfa161d3cae4dfa6c129fdfd12a9993d8ddf1444d3c19df->enter($__internal_e4dbffb0c46ef5442dfa161d3cae4dfa6c129fdfd12a9993d8ddf1444d3c19df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4569d46e1ac831795fa455bcbd383198ee216f72df663193a8c7b658f63d67a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4569d46e1ac831795fa455bcbd383198ee216f72df663193a8c7b658f63d67a4->enter($__internal_4569d46e1ac831795fa455bcbd383198ee216f72df663193a8c7b658f63d67a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>";
        // line 7
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "n")) ? ("New Client") : ("Modify Client"));
        echo "</h4>
        <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, (((($context["mode"] ?? $this->getContext($context, "mode")) == "n")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_client")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_client", array("client_id" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", array()))))), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 13
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["title"]), "html", null, true);
            echo ".</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[last_name]\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "last_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "last_name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "address", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zip_code]\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "zip_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip_code", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "city", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "state", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "email", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

";
        
        $__internal_4569d46e1ac831795fa455bcbd383198ee216f72df663193a8c7b658f63d67a4->leave($__internal_4569d46e1ac831795fa455bcbd383198ee216f72df663193a8c7b658f63d67a4_prof);

        
        $__internal_e4dbffb0c46ef5442dfa161d3cae4dfa6c129fdfd12a9993d8ddf1444d3c19df->leave($__internal_e4dbffb0c46ef5442dfa161d3cae4dfa6c129fdfd12a9993d8ddf1444d3c19df_prof);

    }

    public function getTemplateName()
    {
        return "clients/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  121 => 39,  114 => 35,  107 => 31,  100 => 27,  93 => 23,  86 => 19,  80 => 15,  69 => 13,  65 => 12,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>{{mode == 'n' ? 'New Client' : 'Modify Client'}}</h4>
        <form action=\"{{ mode == 'n' ? path('new_client') : path('modify_client', { 'client_id': form.id }) }}\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
            {% for title in form.titles %}
              <option value=\"{{title}}\">{{title | capitalize}}.</option>
            {% endfor %}
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"{{ form.name is defined ? form.name : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[last_name]\" value=\"{{ form.last_name is defined ? form.last_name : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"{{ form.address is defined ? form.address : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zip_code]\" value=\"{{ form.zip_code is defined ? form.zip_code : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"{{ form.city is defined ? form.city : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"{{ form.state is defined ? form.state : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"{{ form.email is defined ? form.email : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

{% endblock %}
", "clients/form.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/using_forms/start/app/Resources/views/clients/form.html.twig");
    }
}
