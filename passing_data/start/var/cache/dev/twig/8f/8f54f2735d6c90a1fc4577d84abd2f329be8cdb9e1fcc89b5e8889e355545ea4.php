<?php

/* base.html.twig */
class __TwigTemplate_e1a21658618236c3ad4315e62836718610e2a7f3b7eb5435e504531ee60882fa extends Twig_Template
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
        $__internal_dbebce3f9c7f61bc73ebf0af0f5a4667a844d0d9271b431f3a654ab68b344bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbebce3f9c7f61bc73ebf0af0f5a4667a844d0d9271b431f3a654ab68b344bc8->enter($__internal_dbebce3f9c7f61bc73ebf0af0f5a4667a844d0d9271b431f3a654ab68b344bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3a0c3264a78910ee06f9e44876155929a38ac147eebc43009970e095d7aee423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0c3264a78910ee06f9e44876155929a38ac147eebc43009970e095d7aee423->enter($__internal_3a0c3264a78910ee06f9e44876155929a38ac147eebc43009970e095d7aee423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_dbebce3f9c7f61bc73ebf0af0f5a4667a844d0d9271b431f3a654ab68b344bc8->leave($__internal_dbebce3f9c7f61bc73ebf0af0f5a4667a844d0d9271b431f3a654ab68b344bc8_prof);

        
        $__internal_3a0c3264a78910ee06f9e44876155929a38ac147eebc43009970e095d7aee423->leave($__internal_3a0c3264a78910ee06f9e44876155929a38ac147eebc43009970e095d7aee423_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb21d4b2edcf3d605b5a1be2de6cd1762996a042fea9f14e62c0373e4529c824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb21d4b2edcf3d605b5a1be2de6cd1762996a042fea9f14e62c0373e4529c824->enter($__internal_fb21d4b2edcf3d605b5a1be2de6cd1762996a042fea9f14e62c0373e4529c824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2072456182c5da03ca412b43c850409d359035d0d17bdd861b4cc4daf5874117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2072456182c5da03ca412b43c850409d359035d0d17bdd861b4cc4daf5874117->enter($__internal_2072456182c5da03ca412b43c850409d359035d0d17bdd861b4cc4daf5874117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_2072456182c5da03ca412b43c850409d359035d0d17bdd861b4cc4daf5874117->leave($__internal_2072456182c5da03ca412b43c850409d359035d0d17bdd861b4cc4daf5874117_prof);

        
        $__internal_fb21d4b2edcf3d605b5a1be2de6cd1762996a042fea9f14e62c0373e4529c824->leave($__internal_fb21d4b2edcf3d605b5a1be2de6cd1762996a042fea9f14e62c0373e4529c824_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cdae2ff977b0e4ae82f5a3b1f5874c1bd984936121cc9720309bc3cd426c0af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdae2ff977b0e4ae82f5a3b1f5874c1bd984936121cc9720309bc3cd426c0af8->enter($__internal_cdae2ff977b0e4ae82f5a3b1f5874c1bd984936121cc9720309bc3cd426c0af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f45781137bb46630d60bf09934372fbb605d2d3f408c88a8cbf3248a3fe5579d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45781137bb46630d60bf09934372fbb605d2d3f408c88a8cbf3248a3fe5579d->enter($__internal_f45781137bb46630d60bf09934372fbb605d2d3f408c88a8cbf3248a3fe5579d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f45781137bb46630d60bf09934372fbb605d2d3f408c88a8cbf3248a3fe5579d->leave($__internal_f45781137bb46630d60bf09934372fbb605d2d3f408c88a8cbf3248a3fe5579d_prof);

        
        $__internal_cdae2ff977b0e4ae82f5a3b1f5874c1bd984936121cc9720309bc3cd426c0af8->leave($__internal_cdae2ff977b0e4ae82f5a3b1f5874c1bd984936121cc9720309bc3cd426c0af8_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_a53f5bdde2402a8bc9588c95301ec20a9a5006be2b4f84f86c15b35e29d74774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53f5bdde2402a8bc9588c95301ec20a9a5006be2b4f84f86c15b35e29d74774->enter($__internal_a53f5bdde2402a8bc9588c95301ec20a9a5006be2b4f84f86c15b35e29d74774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e51843b8a01866b201053fd50082b0568dd80b9f27d50260a1b0d7b9c2cad31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e51843b8a01866b201053fd50082b0568dd80b9f27d50260a1b0d7b9c2cad31->enter($__internal_0e51843b8a01866b201053fd50082b0568dd80b9f27d50260a1b0d7b9c2cad31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e51843b8a01866b201053fd50082b0568dd80b9f27d50260a1b0d7b9c2cad31->leave($__internal_0e51843b8a01866b201053fd50082b0568dd80b9f27d50260a1b0d7b9c2cad31_prof);

        
        $__internal_a53f5bdde2402a8bc9588c95301ec20a9a5006be2b4f84f86c15b35e29d74774->leave($__internal_a53f5bdde2402a8bc9588c95301ec20a9a5006be2b4f84f86c15b35e29d74774_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e132b6b50a5168fb90a421db8051abbd909855230039fd9ab0d1795ecc55010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e132b6b50a5168fb90a421db8051abbd909855230039fd9ab0d1795ecc55010->enter($__internal_4e132b6b50a5168fb90a421db8051abbd909855230039fd9ab0d1795ecc55010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9466770d681a5785508b1355ba023ef89de1e4d8f16435a6d28e0f16de6d5cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9466770d681a5785508b1355ba023ef89de1e4d8f16435a6d28e0f16de6d5cc5->enter($__internal_9466770d681a5785508b1355ba023ef89de1e4d8f16435a6d28e0f16de6d5cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9466770d681a5785508b1355ba023ef89de1e4d8f16435a6d28e0f16de6d5cc5->leave($__internal_9466770d681a5785508b1355ba023ef89de1e4d8f16435a6d28e0f16de6d5cc5_prof);

        
        $__internal_4e132b6b50a5168fb90a421db8051abbd909855230039fd9ab0d1795ecc55010->leave($__internal_4e132b6b50a5168fb90a421db8051abbd909855230039fd9ab0d1795ecc55010_prof);

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
", "base.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/passing_data/_final/app/Resources/views/base.html.twig");
    }
}
