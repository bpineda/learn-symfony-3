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
        $__internal_c6a907cbe8071aa91a1cafeba335f6c5fd3ae805013a33027e2e792b13d2701d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a907cbe8071aa91a1cafeba335f6c5fd3ae805013a33027e2e792b13d2701d->enter($__internal_c6a907cbe8071aa91a1cafeba335f6c5fd3ae805013a33027e2e792b13d2701d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_1c83770a2bb55b111a8d8c05c4b749b066832fd5776f48e9fc6b0f960869bf2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c83770a2bb55b111a8d8c05c4b749b066832fd5776f48e9fc6b0f960869bf2d->enter($__internal_1c83770a2bb55b111a8d8c05c4b749b066832fd5776f48e9fc6b0f960869bf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a907cbe8071aa91a1cafeba335f6c5fd3ae805013a33027e2e792b13d2701d->leave($__internal_c6a907cbe8071aa91a1cafeba335f6c5fd3ae805013a33027e2e792b13d2701d_prof);

        
        $__internal_1c83770a2bb55b111a8d8c05c4b749b066832fd5776f48e9fc6b0f960869bf2d->leave($__internal_1c83770a2bb55b111a8d8c05c4b749b066832fd5776f48e9fc6b0f960869bf2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e6cff964d1f5c9fa3330d6abb5907cddb8c111d9e6383cc422aa73557525c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6cff964d1f5c9fa3330d6abb5907cddb8c111d9e6383cc422aa73557525c53->enter($__internal_0e6cff964d1f5c9fa3330d6abb5907cddb8c111d9e6383cc422aa73557525c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_606e89d7cf5b3eed5e695ab4095be8c64d01b97c38d4b4a7205d314f96911ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606e89d7cf5b3eed5e695ab4095be8c64d01b97c38d4b4a7205d314f96911ed8->enter($__internal_606e89d7cf5b3eed5e695ab4095be8c64d01b97c38d4b4a7205d314f96911ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
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
        
        $__internal_606e89d7cf5b3eed5e695ab4095be8c64d01b97c38d4b4a7205d314f96911ed8->leave($__internal_606e89d7cf5b3eed5e695ab4095be8c64d01b97c38d4b4a7205d314f96911ed8_prof);

        
        $__internal_0e6cff964d1f5c9fa3330d6abb5907cddb8c111d9e6383cc422aa73557525c53->leave($__internal_0e6cff964d1f5c9fa3330d6abb5907cddb8c111d9e6383cc422aa73557525c53_prof);

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
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
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
", "clients/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/start/app/Resources/views/clients/index.html.twig");
    }
}
