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
        $__internal_03f0900152b42fcc9dffe9f7bedaa59424e23f7e68b7ff72b92b606f8d5d456c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f0900152b42fcc9dffe9f7bedaa59424e23f7e68b7ff72b92b606f8d5d456c->enter($__internal_03f0900152b42fcc9dffe9f7bedaa59424e23f7e68b7ff72b92b606f8d5d456c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_bf08c2214e3d6d5e3c4039c3a0591308e5cc4ae8371f42a57c0097b380176479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf08c2214e3d6d5e3c4039c3a0591308e5cc4ae8371f42a57c0097b380176479->enter($__internal_bf08c2214e3d6d5e3c4039c3a0591308e5cc4ae8371f42a57c0097b380176479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03f0900152b42fcc9dffe9f7bedaa59424e23f7e68b7ff72b92b606f8d5d456c->leave($__internal_03f0900152b42fcc9dffe9f7bedaa59424e23f7e68b7ff72b92b606f8d5d456c_prof);

        
        $__internal_bf08c2214e3d6d5e3c4039c3a0591308e5cc4ae8371f42a57c0097b380176479->leave($__internal_bf08c2214e3d6d5e3c4039c3a0591308e5cc4ae8371f42a57c0097b380176479_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1ec8569c27582b8b1ee7f4f1e8551b41d043370f4e13cfa5112c6e343898f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ec8569c27582b8b1ee7f4f1e8551b41d043370f4e13cfa5112c6e343898f17->enter($__internal_c1ec8569c27582b8b1ee7f4f1e8551b41d043370f4e13cfa5112c6e343898f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7489be09219cd2609986fcb843dad55cd207c1fed06fc16120b1a38815263467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7489be09219cd2609986fcb843dad55cd207c1fed06fc16120b1a38815263467->enter($__internal_7489be09219cd2609986fcb843dad55cd207c1fed06fc16120b1a38815263467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_7489be09219cd2609986fcb843dad55cd207c1fed06fc16120b1a38815263467->leave($__internal_7489be09219cd2609986fcb843dad55cd207c1fed06fc16120b1a38815263467_prof);

        
        $__internal_c1ec8569c27582b8b1ee7f4f1e8551b41d043370f4e13cfa5112c6e343898f17->leave($__internal_c1ec8569c27582b8b1ee7f4f1e8551b41d043370f4e13cfa5112c6e343898f17_prof);

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
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_routes/start/app/Resources/views/admin/index.html.twig");
    }
}
