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
        $__internal_ef957eb70cf4b9fc5464350286f10078687703f8a93691f94e300cef76622f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef957eb70cf4b9fc5464350286f10078687703f8a93691f94e300cef76622f73->enter($__internal_ef957eb70cf4b9fc5464350286f10078687703f8a93691f94e300cef76622f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_b61c64c117a9b74e6e4e1be45af55e5114fbaad9bfe13f93d788fee9404d591d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61c64c117a9b74e6e4e1be45af55e5114fbaad9bfe13f93d788fee9404d591d->enter($__internal_b61c64c117a9b74e6e4e1be45af55e5114fbaad9bfe13f93d788fee9404d591d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef957eb70cf4b9fc5464350286f10078687703f8a93691f94e300cef76622f73->leave($__internal_ef957eb70cf4b9fc5464350286f10078687703f8a93691f94e300cef76622f73_prof);

        
        $__internal_b61c64c117a9b74e6e4e1be45af55e5114fbaad9bfe13f93d788fee9404d591d->leave($__internal_b61c64c117a9b74e6e4e1be45af55e5114fbaad9bfe13f93d788fee9404d591d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cad785186c12349b08abebebe9f29e0928f0307b6104934a316da24a55f8fb53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad785186c12349b08abebebe9f29e0928f0307b6104934a316da24a55f8fb53->enter($__internal_cad785186c12349b08abebebe9f29e0928f0307b6104934a316da24a55f8fb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a14cd4db73cd8f275cb7acac482377e105ad20ed1a0432bc6a7c0d65971f398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a14cd4db73cd8f275cb7acac482377e105ad20ed1a0432bc6a7c0d65971f398->enter($__internal_1a14cd4db73cd8f275cb7acac482377e105ad20ed1a0432bc6a7c0d65971f398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a14cd4db73cd8f275cb7acac482377e105ad20ed1a0432bc6a7c0d65971f398->leave($__internal_1a14cd4db73cd8f275cb7acac482377e105ad20ed1a0432bc6a7c0d65971f398_prof);

        
        $__internal_cad785186c12349b08abebebe9f29e0928f0307b6104934a316da24a55f8fb53->leave($__internal_cad785186c12349b08abebebe9f29e0928f0307b6104934a316da24a55f8fb53_prof);

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
", "admin/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/app/Resources/views/admin/index.html.twig");
    }
}
