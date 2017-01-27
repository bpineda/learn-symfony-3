<?php

/* admin/index.html.twig */
class __TwigTemplate_33ef5fbe9c8249dcc76eac0ff1b6462f0c888398d7f958dd1465802ff80640f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_2f464fdf4ef38d1deac79c9ceb09d92b858f91f21b7612112d5d368a86b2b82e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f464fdf4ef38d1deac79c9ceb09d92b858f91f21b7612112d5d368a86b2b82e->enter($__internal_2f464fdf4ef38d1deac79c9ceb09d92b858f91f21b7612112d5d368a86b2b82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_a1fc2706d03662165cf698ba8f15595506929cdba8ec3ef474eb5e3feefb9199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fc2706d03662165cf698ba8f15595506929cdba8ec3ef474eb5e3feefb9199->enter($__internal_a1fc2706d03662165cf698ba8f15595506929cdba8ec3ef474eb5e3feefb9199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f464fdf4ef38d1deac79c9ceb09d92b858f91f21b7612112d5d368a86b2b82e->leave($__internal_2f464fdf4ef38d1deac79c9ceb09d92b858f91f21b7612112d5d368a86b2b82e_prof);

        
        $__internal_a1fc2706d03662165cf698ba8f15595506929cdba8ec3ef474eb5e3feefb9199->leave($__internal_a1fc2706d03662165cf698ba8f15595506929cdba8ec3ef474eb5e3feefb9199_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3972666a2b75b48299c3e2df42a88a3d806fd96c3cd511d740cec4214033cb48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3972666a2b75b48299c3e2df42a88a3d806fd96c3cd511d740cec4214033cb48->enter($__internal_3972666a2b75b48299c3e2df42a88a3d806fd96c3cd511d740cec4214033cb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65bb776800a92f6325b5547406cf0f3205a3565df20a4f467d9a0d32621fcbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bb776800a92f6325b5547406cf0f3205a3565df20a4f467d9a0d32621fcbb4->enter($__internal_65bb776800a92f6325b5547406cf0f3205a3565df20a4f467d9a0d32621fcbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Landon Hotel App</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <!--<h3>Landon Hotel App</h3>-->
        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
      </div>
    </div>

";
        
        $__internal_65bb776800a92f6325b5547406cf0f3205a3565df20a4f467d9a0d32621fcbb4->leave($__internal_65bb776800a92f6325b5547406cf0f3205a3565df20a4f467d9a0d32621fcbb4_prof);

        
        $__internal_3972666a2b75b48299c3e2df42a88a3d806fd96c3cd511d740cec4214033cb48->leave($__internal_3972666a2b75b48299c3e2df42a88a3d806fd96c3cd511d740cec4214033cb48_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
      <div class=\"medium-6 columns\">
        <h4>Landon Hotel App</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <!--<h3>Landon Hotel App</h3>-->
        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/app/Resources/views/admin/index.html.twig");
    }
}
