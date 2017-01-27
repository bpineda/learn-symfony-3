<?php

/* base.html.twig */
class __TwigTemplate_22e52d6d7fd3e2eed62a344835c142a0a265e7682ff7a78028496d21a3b1e1fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9f1f8ad44271def4ff5c49e51b757822e600c0b4e3b2e7cccc44e74aeeabe0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f1f8ad44271def4ff5c49e51b757822e600c0b4e3b2e7cccc44e74aeeabe0a->enter($__internal_b9f1f8ad44271def4ff5c49e51b757822e600c0b4e3b2e7cccc44e74aeeabe0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_af5845895450cb6eead4cbe06b3ad2a4067c46e1bb882dfde643b05d5d91021e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5845895450cb6eead4cbe06b3ad2a4067c46e1bb882dfde643b05d5d91021e->enter($__internal_af5845895450cb6eead4cbe06b3ad2a4067c46e1bb882dfde643b05d5d91021e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_b9f1f8ad44271def4ff5c49e51b757822e600c0b4e3b2e7cccc44e74aeeabe0a->leave($__internal_b9f1f8ad44271def4ff5c49e51b757822e600c0b4e3b2e7cccc44e74aeeabe0a_prof);

        
        $__internal_af5845895450cb6eead4cbe06b3ad2a4067c46e1bb882dfde643b05d5d91021e->leave($__internal_af5845895450cb6eead4cbe06b3ad2a4067c46e1bb882dfde643b05d5d91021e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4d28d80621add0f48ffa6c8502892b148226adc5bafc964bf79ef626ac5a1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d28d80621add0f48ffa6c8502892b148226adc5bafc964bf79ef626ac5a1ff->enter($__internal_d4d28d80621add0f48ffa6c8502892b148226adc5bafc964bf79ef626ac5a1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1543f2cd2d3a65f3c0de6b69cca8f9ef47c823cf467c503b632bdbc10f3992d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1543f2cd2d3a65f3c0de6b69cca8f9ef47c823cf467c503b632bdbc10f3992d9->enter($__internal_1543f2cd2d3a65f3c0de6b69cca8f9ef47c823cf467c503b632bdbc10f3992d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_1543f2cd2d3a65f3c0de6b69cca8f9ef47c823cf467c503b632bdbc10f3992d9->leave($__internal_1543f2cd2d3a65f3c0de6b69cca8f9ef47c823cf467c503b632bdbc10f3992d9_prof);

        
        $__internal_d4d28d80621add0f48ffa6c8502892b148226adc5bafc964bf79ef626ac5a1ff->leave($__internal_d4d28d80621add0f48ffa6c8502892b148226adc5bafc964bf79ef626ac5a1ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0daed4ff678df49f6cc61e8d174eb22ba1f6d64767bb214f549ebe8e9e69db4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0daed4ff678df49f6cc61e8d174eb22ba1f6d64767bb214f549ebe8e9e69db4c->enter($__internal_0daed4ff678df49f6cc61e8d174eb22ba1f6d64767bb214f549ebe8e9e69db4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_00c2a109137f630a62290c3d3b27ef52247bf86fb3437edce4b65baac5ede52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c2a109137f630a62290c3d3b27ef52247bf86fb3437edce4b65baac5ede52b->enter($__internal_00c2a109137f630a62290c3d3b27ef52247bf86fb3437edce4b65baac5ede52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00c2a109137f630a62290c3d3b27ef52247bf86fb3437edce4b65baac5ede52b->leave($__internal_00c2a109137f630a62290c3d3b27ef52247bf86fb3437edce4b65baac5ede52b_prof);

        
        $__internal_0daed4ff678df49f6cc61e8d174eb22ba1f6d64767bb214f549ebe8e9e69db4c->leave($__internal_0daed4ff678df49f6cc61e8d174eb22ba1f6d64767bb214f549ebe8e9e69db4c_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_caf12b004a5233a8df94f82c4be74746944f680c29a5063043323949cf9c96b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf12b004a5233a8df94f82c4be74746944f680c29a5063043323949cf9c96b2->enter($__internal_caf12b004a5233a8df94f82c4be74746944f680c29a5063043323949cf9c96b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e395598a9b4133b75f4c8552f2a105537ae8aff7965f771e19ef2d20b4263b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e395598a9b4133b75f4c8552f2a105537ae8aff7965f771e19ef2d20b4263b31->enter($__internal_e395598a9b4133b75f4c8552f2a105537ae8aff7965f771e19ef2d20b4263b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e395598a9b4133b75f4c8552f2a105537ae8aff7965f771e19ef2d20b4263b31->leave($__internal_e395598a9b4133b75f4c8552f2a105537ae8aff7965f771e19ef2d20b4263b31_prof);

        
        $__internal_caf12b004a5233a8df94f82c4be74746944f680c29a5063043323949cf9c96b2->leave($__internal_caf12b004a5233a8df94f82c4be74746944f680c29a5063043323949cf9c96b2_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_174335b9ea0b7132c326d87ef489147f1d4792bc1a0e2232cf23295709b1ad84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174335b9ea0b7132c326d87ef489147f1d4792bc1a0e2232cf23295709b1ad84->enter($__internal_174335b9ea0b7132c326d87ef489147f1d4792bc1a0e2232cf23295709b1ad84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7a643ed8c2f8df4f1af48edcc884cf2d3605d9f7a3c99ce2335cc807723f1d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a643ed8c2f8df4f1af48edcc884cf2d3605d9f7a3c99ce2335cc807723f1d6d->enter($__internal_7a643ed8c2f8df4f1af48edcc884cf2d3605d9f7a3c99ce2335cc807723f1d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a643ed8c2f8df4f1af48edcc884cf2d3605d9f7a3c99ce2335cc807723f1d6d->leave($__internal_7a643ed8c2f8df4f1af48edcc884cf2d3605d9f7a3c99ce2335cc807723f1d6d_prof);

        
        $__internal_174335b9ea0b7132c326d87ef489147f1d4792bc1a0e2232cf23295709b1ad84->leave($__internal_174335b9ea0b7132c326d87ef489147f1d4792bc1a0e2232cf23295709b1ad84_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 45,  187 => 31,  170 => 6,  152 => 5,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  109 => 46,  107 => 45,  92 => 32,  90 => 31,  78 => 22,  74 => 21,  70 => 20,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Landon Hotel App{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"{{ path('home') }}\">Home</a></li>
            <li><a href=\"{{ path('index_clients') }}\">Clients</a></li>
            <li><a href=\"{{ path('reservations') }}\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    {% block body %}{% endblock %}
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_models/_final/app/Resources/views/base.html.twig");
    }
}
