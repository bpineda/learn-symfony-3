<?php

/* clients/index.html.twig */
class __TwigTemplate_01553599b1627482f7dcac53533ad427a13e26fde9cc797f725c5f6906645da7 extends Twig_Template
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
        $__internal_2b20de5123a68cd1a8d097cde38d90a6be3c965fdc96343fd8df99fed6cd79b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b20de5123a68cd1a8d097cde38d90a6be3c965fdc96343fd8df99fed6cd79b3->enter($__internal_2b20de5123a68cd1a8d097cde38d90a6be3c965fdc96343fd8df99fed6cd79b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_c320987f902387e8952631541f0de7c6e6d34e087c829cff3243b30db7275070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c320987f902387e8952631541f0de7c6e6d34e087c829cff3243b30db7275070->enter($__internal_c320987f902387e8952631541f0de7c6e6d34e087c829cff3243b30db7275070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b20de5123a68cd1a8d097cde38d90a6be3c965fdc96343fd8df99fed6cd79b3->leave($__internal_2b20de5123a68cd1a8d097cde38d90a6be3c965fdc96343fd8df99fed6cd79b3_prof);

        
        $__internal_c320987f902387e8952631541f0de7c6e6d34e087c829cff3243b30db7275070->leave($__internal_c320987f902387e8952631541f0de7c6e6d34e087c829cff3243b30db7275070_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2fd10c4086bfd885950b6d107e19dd31f724a5f706dbf57c148085494824345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2fd10c4086bfd885950b6d107e19dd31f724a5f706dbf57c148085494824345->enter($__internal_b2fd10c4086bfd885950b6d107e19dd31f724a5f706dbf57c148085494824345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c34ca62c1c54ed4b2d380c48ab022594910ca6282358f9ef97937b651e232afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34ca62c1c54ed4b2d380c48ab022594910ca6282358f9ef97937b651e232afd->enter($__internal_c34ca62c1c54ed4b2d380c48ab022594910ca6282358f9ef97937b651e232afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
          <table class=\"stack\">
          <tbody>
                          <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Mrs. Bonnie Clark</td>
                <td>bclark6@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Ms. Carol Shaw</td>
                <td>cshaw2e@marriott.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Dr. Timothy Watson</td>
                <td>twatson1k@shinystat.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Ms. Judith Young</td>
                <td>jyoung11@goodreads.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
                      </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_c34ca62c1c54ed4b2d380c48ab022594910ca6282358f9ef97937b651e232afd->leave($__internal_c34ca62c1c54ed4b2d380c48ab022594910ca6282358f9ef97937b651e232afd_prof);

        
        $__internal_b2fd10c4086bfd885950b6d107e19dd31f724a5f706dbf57c148085494824345->leave($__internal_b2fd10c4086bfd885950b6d107e19dd31f724a5f706dbf57c148085494824345_prof);

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
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
          <table class=\"stack\">
          <tbody>
                          <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Mrs. Bonnie Clark</td>
                <td>bclark6@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Ms. Carol Shaw</td>
                <td>cshaw2e@marriott.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Dr. Timothy Watson</td>
                <td>twatson1k@shinystat.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Ms. Judith Young</td>
                <td>jyoung11@goodreads.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
                      </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/app/Resources/views/clients/index.html.twig");
    }
}
