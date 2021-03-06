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
        $__internal_4c355d2e8eca684fc288d222c6a932ed8c348dea2ad4bd3c974a305df0541b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c355d2e8eca684fc288d222c6a932ed8c348dea2ad4bd3c974a305df0541b4d->enter($__internal_4c355d2e8eca684fc288d222c6a932ed8c348dea2ad4bd3c974a305df0541b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_89f039bdf1f4db0b5dcfdccc6e469917d5d5190fed9f5fae17f171ee09cd4aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f039bdf1f4db0b5dcfdccc6e469917d5d5190fed9f5fae17f171ee09cd4aa3->enter($__internal_89f039bdf1f4db0b5dcfdccc6e469917d5d5190fed9f5fae17f171ee09cd4aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4c355d2e8eca684fc288d222c6a932ed8c348dea2ad4bd3c974a305df0541b4d->leave($__internal_4c355d2e8eca684fc288d222c6a932ed8c348dea2ad4bd3c974a305df0541b4d_prof);

        
        $__internal_89f039bdf1f4db0b5dcfdccc6e469917d5d5190fed9f5fae17f171ee09cd4aa3->leave($__internal_89f039bdf1f4db0b5dcfdccc6e469917d5d5190fed9f5fae17f171ee09cd4aa3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_407a737eff269a7d3f3a6aa53464c9587cf58204890661401421f4bd03fd12f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407a737eff269a7d3f3a6aa53464c9587cf58204890661401421f4bd03fd12f3->enter($__internal_407a737eff269a7d3f3a6aa53464c9587cf58204890661401421f4bd03fd12f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7dfc2bb9deb09255b802353c1ac8234bb22cd77699ca39bb2ad1ac594e3647a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dfc2bb9deb09255b802353c1ac8234bb22cd77699ca39bb2ad1ac594e3647a->enter($__internal_d7dfc2bb9deb09255b802353c1ac8234bb22cd77699ca39bb2ad1ac594e3647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_d7dfc2bb9deb09255b802353c1ac8234bb22cd77699ca39bb2ad1ac594e3647a->leave($__internal_d7dfc2bb9deb09255b802353c1ac8234bb22cd77699ca39bb2ad1ac594e3647a_prof);

        
        $__internal_407a737eff269a7d3f3a6aa53464c9587cf58204890661401421f4bd03fd12f3->leave($__internal_407a737eff269a7d3f3a6aa53464c9587cf58204890661401421f4bd03fd12f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e10a1d74814d819b391c846bf4417b69a0537248c97c06434f3527cb7598abb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10a1d74814d819b391c846bf4417b69a0537248c97c06434f3527cb7598abb5->enter($__internal_e10a1d74814d819b391c846bf4417b69a0537248c97c06434f3527cb7598abb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4cf0fd6ab69a78e9e35bcb2472ad6df6b42fe79fd3060e4f6685ba793ae91889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf0fd6ab69a78e9e35bcb2472ad6df6b42fe79fd3060e4f6685ba793ae91889->enter($__internal_4cf0fd6ab69a78e9e35bcb2472ad6df6b42fe79fd3060e4f6685ba793ae91889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4cf0fd6ab69a78e9e35bcb2472ad6df6b42fe79fd3060e4f6685ba793ae91889->leave($__internal_4cf0fd6ab69a78e9e35bcb2472ad6df6b42fe79fd3060e4f6685ba793ae91889_prof);

        
        $__internal_e10a1d74814d819b391c846bf4417b69a0537248c97c06434f3527cb7598abb5->leave($__internal_e10a1d74814d819b391c846bf4417b69a0537248c97c06434f3527cb7598abb5_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_596818001f159f2880e59ae8a5fb3fb38910ca0b1fd7b20de26908d748324525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596818001f159f2880e59ae8a5fb3fb38910ca0b1fd7b20de26908d748324525->enter($__internal_596818001f159f2880e59ae8a5fb3fb38910ca0b1fd7b20de26908d748324525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_522f29956cfbc3453a9200427c55d36a726cd0ab2f074598f11b55c0e1ff02de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522f29956cfbc3453a9200427c55d36a726cd0ab2f074598f11b55c0e1ff02de->enter($__internal_522f29956cfbc3453a9200427c55d36a726cd0ab2f074598f11b55c0e1ff02de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_522f29956cfbc3453a9200427c55d36a726cd0ab2f074598f11b55c0e1ff02de->leave($__internal_522f29956cfbc3453a9200427c55d36a726cd0ab2f074598f11b55c0e1ff02de_prof);

        
        $__internal_596818001f159f2880e59ae8a5fb3fb38910ca0b1fd7b20de26908d748324525->leave($__internal_596818001f159f2880e59ae8a5fb3fb38910ca0b1fd7b20de26908d748324525_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1d1f5d9a7bf8dacdc8eeb8020e41e2063418a19135a275b29fdd81c9906f1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d1f5d9a7bf8dacdc8eeb8020e41e2063418a19135a275b29fdd81c9906f1cd->enter($__internal_b1d1f5d9a7bf8dacdc8eeb8020e41e2063418a19135a275b29fdd81c9906f1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_84329400e1915483749d4187255618fa5cad2d8dda72d8d974328a6aae5c76b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84329400e1915483749d4187255618fa5cad2d8dda72d8d974328a6aae5c76b1->enter($__internal_84329400e1915483749d4187255618fa5cad2d8dda72d8d974328a6aae5c76b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_84329400e1915483749d4187255618fa5cad2d8dda72d8d974328a6aae5c76b1->leave($__internal_84329400e1915483749d4187255618fa5cad2d8dda72d8d974328a6aae5c76b1_prof);

        
        $__internal_b1d1f5d9a7bf8dacdc8eeb8020e41e2063418a19135a275b29fdd81c9906f1cd->leave($__internal_b1d1f5d9a7bf8dacdc8eeb8020e41e2063418a19135a275b29fdd81c9906f1cd_prof);

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
", "base.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/app/Resources/views/base.html.twig");
    }
}
