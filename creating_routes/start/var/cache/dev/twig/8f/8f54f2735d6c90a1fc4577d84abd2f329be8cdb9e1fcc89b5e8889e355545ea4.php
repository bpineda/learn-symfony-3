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
        $__internal_25861425826612f797fe43eee77c3b2d823ef3ce89f581d9c81ea957ba639f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25861425826612f797fe43eee77c3b2d823ef3ce89f581d9c81ea957ba639f09->enter($__internal_25861425826612f797fe43eee77c3b2d823ef3ce89f581d9c81ea957ba639f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8250d540951e405a9504731f21025288b3ab318497617cb5ef8c51351295ac9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8250d540951e405a9504731f21025288b3ab318497617cb5ef8c51351295ac9a->enter($__internal_8250d540951e405a9504731f21025288b3ab318497617cb5ef8c51351295ac9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Clients</a></li>
            <li><a href=\"#\">Reservations</a></li>
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
        
        $__internal_25861425826612f797fe43eee77c3b2d823ef3ce89f581d9c81ea957ba639f09->leave($__internal_25861425826612f797fe43eee77c3b2d823ef3ce89f581d9c81ea957ba639f09_prof);

        
        $__internal_8250d540951e405a9504731f21025288b3ab318497617cb5ef8c51351295ac9a->leave($__internal_8250d540951e405a9504731f21025288b3ab318497617cb5ef8c51351295ac9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7eb7de7884bf99137ab951ed3772d0bc19a2c7e3db83b5744dd311d0fb662d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7eb7de7884bf99137ab951ed3772d0bc19a2c7e3db83b5744dd311d0fb662d5->enter($__internal_d7eb7de7884bf99137ab951ed3772d0bc19a2c7e3db83b5744dd311d0fb662d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c1226d5b6e1ba3aea4260f47a334fd23c3d4ab19a83ba964c5e1aa2cd498411b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1226d5b6e1ba3aea4260f47a334fd23c3d4ab19a83ba964c5e1aa2cd498411b->enter($__internal_c1226d5b6e1ba3aea4260f47a334fd23c3d4ab19a83ba964c5e1aa2cd498411b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_c1226d5b6e1ba3aea4260f47a334fd23c3d4ab19a83ba964c5e1aa2cd498411b->leave($__internal_c1226d5b6e1ba3aea4260f47a334fd23c3d4ab19a83ba964c5e1aa2cd498411b_prof);

        
        $__internal_d7eb7de7884bf99137ab951ed3772d0bc19a2c7e3db83b5744dd311d0fb662d5->leave($__internal_d7eb7de7884bf99137ab951ed3772d0bc19a2c7e3db83b5744dd311d0fb662d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aaa9ea33dbe9b01d2f3dc690c44d45a9ae06170db4131809a4281dbd523bcc27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa9ea33dbe9b01d2f3dc690c44d45a9ae06170db4131809a4281dbd523bcc27->enter($__internal_aaa9ea33dbe9b01d2f3dc690c44d45a9ae06170db4131809a4281dbd523bcc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2412155c2465ea7250eb3af07bf36a7a7f2645630d4aacf6a3733847c9b7a05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2412155c2465ea7250eb3af07bf36a7a7f2645630d4aacf6a3733847c9b7a05e->enter($__internal_2412155c2465ea7250eb3af07bf36a7a7f2645630d4aacf6a3733847c9b7a05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2412155c2465ea7250eb3af07bf36a7a7f2645630d4aacf6a3733847c9b7a05e->leave($__internal_2412155c2465ea7250eb3af07bf36a7a7f2645630d4aacf6a3733847c9b7a05e_prof);

        
        $__internal_aaa9ea33dbe9b01d2f3dc690c44d45a9ae06170db4131809a4281dbd523bcc27->leave($__internal_aaa9ea33dbe9b01d2f3dc690c44d45a9ae06170db4131809a4281dbd523bcc27_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_bae6ca94f945547139f195b7e50f2a24fe1e5f13524abc2b9f339ea401d61024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae6ca94f945547139f195b7e50f2a24fe1e5f13524abc2b9f339ea401d61024->enter($__internal_bae6ca94f945547139f195b7e50f2a24fe1e5f13524abc2b9f339ea401d61024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa804c340abcd1afd0e1270fdc0ff33ab68e23ae3ad05559acaf60900629aa42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa804c340abcd1afd0e1270fdc0ff33ab68e23ae3ad05559acaf60900629aa42->enter($__internal_fa804c340abcd1afd0e1270fdc0ff33ab68e23ae3ad05559acaf60900629aa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa804c340abcd1afd0e1270fdc0ff33ab68e23ae3ad05559acaf60900629aa42->leave($__internal_fa804c340abcd1afd0e1270fdc0ff33ab68e23ae3ad05559acaf60900629aa42_prof);

        
        $__internal_bae6ca94f945547139f195b7e50f2a24fe1e5f13524abc2b9f339ea401d61024->leave($__internal_bae6ca94f945547139f195b7e50f2a24fe1e5f13524abc2b9f339ea401d61024_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb20840f915612ef60ba161db5ad02d176c19aa895446da60cfe538fddf9e18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb20840f915612ef60ba161db5ad02d176c19aa895446da60cfe538fddf9e18c->enter($__internal_fb20840f915612ef60ba161db5ad02d176c19aa895446da60cfe538fddf9e18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_416e4a9f3938761f5c0d0823c5557e6e2a087d8e25b53b1089db6b2a6d1aca76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416e4a9f3938761f5c0d0823c5557e6e2a087d8e25b53b1089db6b2a6d1aca76->enter($__internal_416e4a9f3938761f5c0d0823c5557e6e2a087d8e25b53b1089db6b2a6d1aca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_416e4a9f3938761f5c0d0823c5557e6e2a087d8e25b53b1089db6b2a6d1aca76->leave($__internal_416e4a9f3938761f5c0d0823c5557e6e2a087d8e25b53b1089db6b2a6d1aca76_prof);

        
        $__internal_fb20840f915612ef60ba161db5ad02d176c19aa895446da60cfe538fddf9e18c->leave($__internal_fb20840f915612ef60ba161db5ad02d176c19aa895446da60cfe538fddf9e18c_prof);

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
        return array (  195 => 45,  178 => 31,  161 => 6,  143 => 5,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  100 => 46,  98 => 45,  83 => 32,  81 => 31,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Clients</a></li>
            <li><a href=\"#\">Reservations</a></li>
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
", "base.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_routes/start/app/Resources/views/base.html.twig");
    }
}
