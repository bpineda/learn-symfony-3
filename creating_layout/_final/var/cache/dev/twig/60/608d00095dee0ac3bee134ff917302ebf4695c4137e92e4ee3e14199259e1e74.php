<?php

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_ff1aafbaa2b9cf4764e44e70f82e07f019d1267ed569e18a92aa6e931a3f1119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/translation.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcd5da229e19d2296e73b4e98ebcf37212db89c384935c643f6467e0485d83da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd5da229e19d2296e73b4e98ebcf37212db89c384935c643f6467e0485d83da->enter($__internal_bcd5da229e19d2296e73b4e98ebcf37212db89c384935c643f6467e0485d83da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        $__internal_15483433a4118c64154518e4f59e74f6ea722c0d6bb3a33cf37db5d7f019642a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15483433a4118c64154518e4f59e74f6ea722c0d6bb3a33cf37db5d7f019642a->enter($__internal_15483433a4118c64154518e4f59e74f6ea722c0d6bb3a33cf37db5d7f019642a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcd5da229e19d2296e73b4e98ebcf37212db89c384935c643f6467e0485d83da->leave($__internal_bcd5da229e19d2296e73b4e98ebcf37212db89c384935c643f6467e0485d83da_prof);

        
        $__internal_15483433a4118c64154518e4f59e74f6ea722c0d6bb3a33cf37db5d7f019642a->leave($__internal_15483433a4118c64154518e4f59e74f6ea722c0d6bb3a33cf37db5d7f019642a_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a62d9a5f24b65f928d0aed75de776a5ebdb4298846edc0f4406d48fb161db27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a62d9a5f24b65f928d0aed75de776a5ebdb4298846edc0f4406d48fb161db27->enter($__internal_9a62d9a5f24b65f928d0aed75de776a5ebdb4298846edc0f4406d48fb161db27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fee6148eb30ab1741ef68ef0d865fc8beec87f9141931c78cae61a242b5e54b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee6148eb30ab1741ef68ef0d865fc8beec87f9141931c78cae61a242b5e54b3->enter($__internal_fee6148eb30ab1741ef68ef0d865fc8beec87f9141931c78cae61a242b5e54b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
            echo "
            ";
            // line 9
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""))));
            // line 10
            echo "            ";
            $context["error_count"] = ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 11
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, ((($context["error_count"] ?? $this->getContext($context, "error_count"))) ? (($context["error_count"] ?? $this->getContext($context, "error_count"))) : ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdefines", array()))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 17
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : (""));
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 24
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""));
            echo "\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdefines", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 34
            echo "
        ";
            // line 35
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
        $__internal_fee6148eb30ab1741ef68ef0d865fc8beec87f9141931c78cae61a242b5e54b3->leave($__internal_fee6148eb30ab1741ef68ef0d865fc8beec87f9141931c78cae61a242b5e54b3_prof);

        
        $__internal_9a62d9a5f24b65f928d0aed75de776a5ebdb4298846edc0f4406d48fb161db27->leave($__internal_9a62d9a5f24b65f928d0aed75de776a5ebdb4298846edc0f4406d48fb161db27_prof);

    }

    // line 39
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0ffaa7d6bcc7cf2a21f3afef78bbf8ccd8b5bbb1bd7f7c2fc5d28aefb745b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ffaa7d6bcc7cf2a21f3afef78bbf8ccd8b5bbb1bd7f7c2fc5d28aefb745b5f->enter($__internal_f0ffaa7d6bcc7cf2a21f3afef78bbf8ccd8b5bbb1bd7f7c2fc5d28aefb745b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c289e7935b9c9793ffb074e131e3ef23fc839ede220530916eebec0f92b919f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c289e7935b9c9793ffb074e131e3ef23fc839ede220530916eebec0f92b919f4->enter($__internal_c289e7935b9c9793ffb074e131e3ef23fc839ede220530916eebec0f92b919f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 40
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("error") : ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 41
        echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
        echo "</span>
        <strong>Translation</strong>
        ";
        // line 43
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()))) {
            // line 44
            echo "            ";
            $context["error_count"] = ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 45
            echo "            <span class=\"count\">
                <span>";
            // line 46
            echo twig_escape_filter($this->env, ($context["error_count"] ?? $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 49
        echo "    </span>
";
        
        $__internal_c289e7935b9c9793ffb074e131e3ef23fc839ede220530916eebec0f92b919f4->leave($__internal_c289e7935b9c9793ffb074e131e3ef23fc839ede220530916eebec0f92b919f4_prof);

        
        $__internal_f0ffaa7d6bcc7cf2a21f3afef78bbf8ccd8b5bbb1bd7f7c2fc5d28aefb745b5f->leave($__internal_f0ffaa7d6bcc7cf2a21f3afef78bbf8ccd8b5bbb1bd7f7c2fc5d28aefb745b5f_prof);

    }

    // line 52
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c41eb518d484f2da46a053d0f652e16110824546297b047f796e54754248b1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41eb518d484f2da46a053d0f652e16110824546297b047f796e54754248b1f6->enter($__internal_c41eb518d484f2da46a053d0f652e16110824546297b047f796e54754248b1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c53bf826f8714fb749f6ba5da1e1a89b09c777809afc84baa289b4b71382545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c53bf826f8714fb749f6ba5da1e1a89b09c777809afc84baa289b4b71382545->enter($__internal_6c53bf826f8714fb749f6ba5da1e1a89b09c777809afc84baa289b4b71382545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 53
        echo "    ";
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()))) {
            // line 54
            echo "        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 59
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6c53bf826f8714fb749f6ba5da1e1a89b09c777809afc84baa289b4b71382545->leave($__internal_6c53bf826f8714fb749f6ba5da1e1a89b09c777809afc84baa289b4b71382545_prof);

        
        $__internal_c41eb518d484f2da46a053d0f652e16110824546297b047f796e54754248b1f6->leave($__internal_c41eb518d484f2da46a053d0f652e16110824546297b047f796e54754248b1f6_prof);

    }

    // line 63
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_40d03af3c742d7b9016d143bae57861e9938999db29dedd0a80f64ae9061416c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d03af3c742d7b9016d143bae57861e9938999db29dedd0a80f64ae9061416c->enter($__internal_40d03af3c742d7b9016d143bae57861e9938999db29dedd0a80f64ae9061416c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_e74774fd3803a4f4271ca6fee3c57d7123b4e9ecfbfdd144363613d2c7e488bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74774fd3803a4f4271ca6fee3c57d7123b4e9ecfbfdd144363613d2c7e488bf->enter($__internal_e74774fd3803a4f4271ca6fee3c57d7123b4e9ecfbfdd144363613d2c7e488bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 64
        echo "    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdefines", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    ";
        // line 86
        echo "    ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         array(array(), array(), array());
        // line 87
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 88
            echo "        ";
            if (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 89
                echo "            ";
                $context["messages_defined"] = twig_array_merge(($context["messages_defined"] ?? $this->getContext($context, "messages_defined")), array(0 => $context["message"]));
                // line 90
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 91
                echo "            ";
                $context["messages_missing"] = twig_array_merge(($context["messages_missing"] ?? $this->getContext($context, "messages_missing")), array(0 => $context["message"]));
                // line 92
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 93
                echo "            ";
                $context["messages_fallback"] = twig_array_merge(($context["messages_fallback"] ?? $this->getContext($context, "messages_fallback")), array(0 => $context["message"]));
                // line 94
                echo "        ";
            }
            // line 95
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 99
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages_defined"] ?? $this->getContext($context, "messages_defined"))), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                ";
        // line 106
        if (twig_test_empty(($context["messages_defined"] ?? $this->getContext($context, "messages_defined")))) {
            // line 107
            echo "                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                ";
        } else {
            // line 111
            echo "                    ";
            echo $context["helper"]->getrender_table(($context["messages_defined"] ?? $this->getContext($context, "messages_defined")));
            echo "
                ";
        }
        // line 113
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge\">";
        // line 117
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages_fallback"] ?? $this->getContext($context, "messages_fallback"))), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                ";
        // line 125
        if (twig_test_empty(($context["messages_fallback"] ?? $this->getContext($context, "messages_fallback")))) {
            // line 126
            echo "                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                ";
        } else {
            // line 130
            echo "                    ";
            echo $context["helper"]->getrender_table(($context["messages_fallback"] ?? $this->getContext($context, "messages_fallback")));
            echo "
                ";
        }
        // line 132
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge\">";
        // line 136
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages_missing"] ?? $this->getContext($context, "messages_missing"))), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                ";
        // line 145
        if (twig_test_empty(($context["messages_missing"] ?? $this->getContext($context, "messages_missing")))) {
            // line 146
            echo "                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                ";
        } else {
            // line 150
            echo "                    ";
            echo $context["helper"]->getrender_table(($context["messages_missing"] ?? $this->getContext($context, "messages_missing")));
            echo "
                ";
        }
        // line 152
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_e74774fd3803a4f4271ca6fee3c57d7123b4e9ecfbfdd144363613d2c7e488bf->leave($__internal_e74774fd3803a4f4271ca6fee3c57d7123b4e9ecfbfdd144363613d2c7e488bf_prof);

        
        $__internal_40d03af3c742d7b9016d143bae57861e9938999db29dedd0a80f64ae9061416c->leave($__internal_40d03af3c742d7b9016d143bae57861e9938999db29dedd0a80f64ae9061416c_prof);

    }

    // line 157
    public function getrender_table($__messages__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a3ccc0f2f343062e2b517e047485eabbe7de30c37f3f0c8b3b4054e1d969edd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a3ccc0f2f343062e2b517e047485eabbe7de30c37f3f0c8b3b4054e1d969edd3->enter($__internal_a3ccc0f2f343062e2b517e047485eabbe7de30c37f3f0c8b3b4054e1d969edd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_19972540b127ce9bdcb400777d3880e34e4ed2f23acb41713ca8eebef6a5a9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_19972540b127ce9bdcb400777d3880e34e4ed2f23acb41713ca8eebef6a5a9ff->enter($__internal_19972540b127ce9bdcb400777d3880e34e4ed2f23acb41713ca8eebef6a5a9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 158
            echo "    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 170
                echo "            <tr>
                <td class=\"font-normal text-small\">";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "locale", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small text-bold\">";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "domain", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "count", array()), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "

                    ";
                // line 177
                if ( !(null === $this->getAttribute($context["message"], "transChoiceNumber", array()))) {
                    // line 178
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 180
                echo "
                    ";
                // line 181
                if ((twig_length_filter($this->env, $this->getAttribute($context["message"], "parameters", array())) > 0)) {
                    // line 182
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 184
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 185
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["message"], "parameters", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 186
                        echo "                                ";
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["parameters"], 1));
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "                        </div>
                    ";
                }
                // line 190
                echo "                </td>
                <td>";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "translation", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "        </tbody>
    </table>
";
            
            $__internal_19972540b127ce9bdcb400777d3880e34e4ed2f23acb41713ca8eebef6a5a9ff->leave($__internal_19972540b127ce9bdcb400777d3880e34e4ed2f23acb41713ca8eebef6a5a9ff_prof);

            
            $__internal_a3ccc0f2f343062e2b517e047485eabbe7de30c37f3f0c8b3b4054e1d969edd3->leave($__internal_a3ccc0f2f343062e2b517e047485eabbe7de30c37f3f0c8b3b4054e1d969edd3_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 194,  504 => 191,  501 => 190,  497 => 188,  488 => 186,  484 => 185,  480 => 184,  474 => 182,  472 => 181,  469 => 180,  465 => 178,  463 => 177,  458 => 175,  453 => 173,  449 => 172,  445 => 171,  442 => 170,  425 => 169,  412 => 158,  394 => 157,  381 => 152,  375 => 150,  369 => 146,  367 => 145,  355 => 136,  349 => 132,  343 => 130,  337 => 126,  335 => 125,  324 => 117,  318 => 113,  312 => 111,  306 => 107,  304 => 106,  294 => 99,  289 => 96,  283 => 95,  280 => 94,  277 => 93,  274 => 92,  271 => 91,  268 => 90,  265 => 89,  262 => 88,  257 => 87,  254 => 86,  244 => 78,  236 => 73,  228 => 68,  222 => 64,  213 => 63,  199 => 59,  192 => 54,  189 => 53,  180 => 52,  169 => 49,  163 => 46,  160 => 45,  157 => 44,  155 => 43,  150 => 41,  143 => 40,  134 => 39,  121 => 35,  118 => 34,  112 => 31,  103 => 25,  99 => 24,  90 => 18,  86 => 17,  82 => 15,  80 => 14,  77 => 13,  71 => 11,  68 => 10,  66 => 9,  61 => 8,  58 => 7,  55 => 6,  46 => 5,  36 => 1,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/translation.svg') }}
            {% set status_color = collector.countMissings ? 'red' : collector.countFallbacks ? 'yellow' %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"sf-toolbar-value\">{{ error_count ?: collector.countdefines }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countMissings ? 'red' }}\">
                    {{ collector.countMissings }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countFallbacks ? 'yellow' }}\">
                    {{ collector.countFallbacks }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.countdefines }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.countMissings ? 'error' : collector.countFallbacks ? 'warning' }} {{ collector.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/translation.svg') }}</span>
        <strong>Translation</strong>
        {% if collector.countMissings or collector.countFallbacks %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"count\">
                <span>{{ error_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if collector.messages is empty %}
        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}
    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.countdefines }}</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countFallbacks }}</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countMissings }}</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    {# sort translation messages in groups #}
    {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}
    {% for message in collector.messages %}
        {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED') %}
            {% set messages_defined = messages_defined|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
            {% set messages_missing = messages_missing|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}
            {% set messages_fallback = messages_fallback|merge([message]) %}
        {% endif %}
    {% endfor %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">{{ messages_defined|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                {% if messages_defined is empty %}
                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(messages_defined) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge\">{{ messages_fallback|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                {% if messages_fallback is empty %}
                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(messages_fallback) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge\">{{ messages_missing|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                {% if messages_missing is empty %}
                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(messages_missing) }}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% macro render_table(messages) %}
    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr>
                <td class=\"font-normal text-small\">{{ message.locale }}</td>
                <td class=\"font-normal text-small text-bold\">{{ message.domain }}</td>
                <td class=\"font-normal text-small\">{{ message.count }}</td>
                <td>
                    {{ message.id }}

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters, maxDepth=1) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td>{{ message.translation }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/translation.html.twig", "/Users/bernardopineda/htdocs/work/lynda/symfony/learn-symfony-3/creating_layout/_final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/translation.html.twig");
    }
}
