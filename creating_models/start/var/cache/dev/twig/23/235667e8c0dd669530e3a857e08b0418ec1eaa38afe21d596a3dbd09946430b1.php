<?php

/* reservations/book.html.twig */
class __TwigTemplate_69b8bcf138a4a1e52de5dd20fc6b080feaef25114a25ef267462b26d541e2945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_b27e52f856cc876d2a4ea8ecc35dbfba9b3791a2aa027d55eec0c749d15c6f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27e52f856cc876d2a4ea8ecc35dbfba9b3791a2aa027d55eec0c749d15c6f3f->enter($__internal_b27e52f856cc876d2a4ea8ecc35dbfba9b3791a2aa027d55eec0c749d15c6f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_f14bb2d4ae02b407a980f0254fe0b58405de8b746301032851c350d5609fe5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14bb2d4ae02b407a980f0254fe0b58405de8b746301032851c350d5609fe5ad->enter($__internal_f14bb2d4ae02b407a980f0254fe0b58405de8b746301032851c350d5609fe5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27e52f856cc876d2a4ea8ecc35dbfba9b3791a2aa027d55eec0c749d15c6f3f->leave($__internal_b27e52f856cc876d2a4ea8ecc35dbfba9b3791a2aa027d55eec0c749d15c6f3f_prof);

        
        $__internal_f14bb2d4ae02b407a980f0254fe0b58405de8b746301032851c350d5609fe5ad->leave($__internal_f14bb2d4ae02b407a980f0254fe0b58405de8b746301032851c350d5609fe5ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_278726967f6fbd30ddcd3627845086b495e5be3e12576528136100d716521f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278726967f6fbd30ddcd3627845086b495e5be3e12576528136100d716521f0d->enter($__internal_278726967f6fbd30ddcd3627845086b495e5be3e12576528136100d716521f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e01720e8574f62b67d52dd98c68b7380bdf7eb2a2e15f41bc22012de0c5419d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01720e8574f62b67d52dd98c68b7380bdf7eb2a2e15f41bc22012de0c5419d2->enter($__internal_e01720e8574f62b67d52dd98c68b7380bdf7eb2a2e15f41bc22012de0c5419d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:</div>
        <div class=\"medium-2  columns\"><b>";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "name", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "lastName", array())), "html", null, true);
        echo "</b></div>
        <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("client_id" => $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateFrom]\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "from", array()), "html", null, true);
        echo "\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateTo]\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "to", array()), "html", null, true);
        echo "\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 28
            echo "            <tr>
              <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "name", array()), "html", null, true);
            echo "</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_room", array("client_id" => $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "id", array()), "room_id" => $this->getAttribute($context["room"], "id", array()), "date_in" => $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "from", array()), "date_out" => $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "to", array()))), "html", null, true);
            echo "\">BOOK NOW</a>
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_e01720e8574f62b67d52dd98c68b7380bdf7eb2a2e15f41bc22012de0c5419d2->leave($__internal_e01720e8574f62b67d52dd98c68b7380bdf7eb2a2e15f41bc22012de0c5419d2_prof);

        
        $__internal_278726967f6fbd30ddcd3627845086b495e5be3e12576528136100d716521f0d->leave($__internal_278726967f6fbd30ddcd3627845086b495e5be3e12576528136100d716521f0d_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  105 => 36,  95 => 29,  92 => 28,  88 => 27,  72 => 14,  67 => 12,  62 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:</div>
        <div class=\"medium-2  columns\"><b>{{ client.name | upper }} {{ client.lastName | upper }}</b></div>
        <form action=\"{{ path('booking', {'client_id': client.id}) }}\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateFrom]\" value=\"{{dates.from}}\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateTo]\" value=\"{{dates.to}}\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          {% for room in rooms %}
            <tr>
              <td>{{room.name}}</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"{{ path('book_room', {'client_id': client.id, 'room_id': room.id, 'date_in': dates.from, 'date_out': dates.to}) }}\">BOOK NOW</a>
              </td>
            </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/app/Resources/views/reservations/book.html.twig");
    }
}
