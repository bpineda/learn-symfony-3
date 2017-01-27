<?php

/* clients/form.html.twig */
class __TwigTemplate_ce18e47ee04cb7e7ab0432bf867b59c8d6d90ba3d4e79c9d4114516f067d1828 extends Twig_Template
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
        $__internal_2c3497175d1660a6300f2da37f4e6b6d226ec5d71270ef0fb822c0192a0dc4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3497175d1660a6300f2da37f4e6b6d226ec5d71270ef0fb822c0192a0dc4b9->enter($__internal_2c3497175d1660a6300f2da37f4e6b6d226ec5d71270ef0fb822c0192a0dc4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_75ec13b8decb685975bdb91b459d5ed436188fcd8c3f80b0fa07a4f33e7d67d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ec13b8decb685975bdb91b459d5ed436188fcd8c3f80b0fa07a4f33e7d67d1->enter($__internal_75ec13b8decb685975bdb91b459d5ed436188fcd8c3f80b0fa07a4f33e7d67d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        // line 1
        echo "    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>";
        // line 3
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "n")) ? ("New Client") : ("Modify Client"));
        echo "</h4>
        <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, (((($context["mode"] ?? $this->getContext($context, "mode")) == "n")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_client")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_client", array("id_client" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", array()))))), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
                          <option value=\"mr\" selected=\"selected\">Mr.</option>
                          <option value=\"ms\">Ms.</option>
                          <option value=\"mrs\">Mrs.</option>
                          <option value=\"dr\">Dr.</option>
                          <option value=\"mx\">Mx.</option>
                        </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>
";
        
        $__internal_2c3497175d1660a6300f2da37f4e6b6d226ec5d71270ef0fb822c0192a0dc4b9->leave($__internal_2c3497175d1660a6300f2da37f4e6b6d226ec5d71270ef0fb822c0192a0dc4b9_prof);

        
        $__internal_75ec13b8decb685975bdb91b459d5ed436188fcd8c3f80b0fa07a4f33e7d67d1->leave($__internal_75ec13b8decb685975bdb91b459d5ed436188fcd8c3f80b0fa07a4f33e7d67d1_prof);

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
        return array (  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>{{mode == 'n' ? 'New Client' : 'Modify Client'}}</h4>
        <form action=\"{{ mode == 'n' ? path('new_client') : path('modify_client', { 'id_client': form.id }) }}\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
                          <option value=\"mr\" selected=\"selected\">Mr.</option>
                          <option value=\"ms\">Ms.</option>
                          <option value=\"mrs\">Mrs.</option>
                          <option value=\"dr\">Dr.</option>
                          <option value=\"mx\">Mx.</option>
                        </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>
", "clients/form.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/start/app/Resources/views/clients/form.html.twig");
    }
}
