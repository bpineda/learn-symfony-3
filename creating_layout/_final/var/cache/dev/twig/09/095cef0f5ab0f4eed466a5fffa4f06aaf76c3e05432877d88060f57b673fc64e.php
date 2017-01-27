<?php

/* admin/index.html.twig */
class __TwigTemplate_811f2a1ba1a458f4cc309dde3eba8143027c8d96070b02c7e579dfd0591c693b extends Twig_Template
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
        $__internal_b105230b6ec6f103228a912e1514f3638d35d8b4e663b3defee244cdf1cb9494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b105230b6ec6f103228a912e1514f3638d35d8b4e663b3defee244cdf1cb9494->enter($__internal_b105230b6ec6f103228a912e1514f3638d35d8b4e663b3defee244cdf1cb9494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_f406d228832e0b00f5eae545fbc5ebd06e6265fd2c772f1c6024f90cc95e7ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f406d228832e0b00f5eae545fbc5ebd06e6265fd2c772f1c6024f90cc95e7ddd->enter($__internal_f406d228832e0b00f5eae545fbc5ebd06e6265fd2c772f1c6024f90cc95e7ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b105230b6ec6f103228a912e1514f3638d35d8b4e663b3defee244cdf1cb9494->leave($__internal_b105230b6ec6f103228a912e1514f3638d35d8b4e663b3defee244cdf1cb9494_prof);

        
        $__internal_f406d228832e0b00f5eae545fbc5ebd06e6265fd2c772f1c6024f90cc95e7ddd->leave($__internal_f406d228832e0b00f5eae545fbc5ebd06e6265fd2c772f1c6024f90cc95e7ddd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da244f5a2f39eca13b05cb54c339930f368053f5b0cdb0ecf15769f351a9bd44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da244f5a2f39eca13b05cb54c339930f368053f5b0cdb0ecf15769f351a9bd44->enter($__internal_da244f5a2f39eca13b05cb54c339930f368053f5b0cdb0ecf15769f351a9bd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26240b0a1bac6c4dc12814730127705434d74b8ae1d40e460c9492342b6a8592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26240b0a1bac6c4dc12814730127705434d74b8ae1d40e460c9492342b6a8592->enter($__internal_26240b0a1bac6c4dc12814730127705434d74b8ae1d40e460c9492342b6a8592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26240b0a1bac6c4dc12814730127705434d74b8ae1d40e460c9492342b6a8592->leave($__internal_26240b0a1bac6c4dc12814730127705434d74b8ae1d40e460c9492342b6a8592_prof);

        
        $__internal_da244f5a2f39eca13b05cb54c339930f368053f5b0cdb0ecf15769f351a9bd44->leave($__internal_da244f5a2f39eca13b05cb54c339930f368053f5b0cdb0ecf15769f351a9bd44_prof);

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
", "admin/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/app/Resources/views/admin/index.html.twig");
    }
}
