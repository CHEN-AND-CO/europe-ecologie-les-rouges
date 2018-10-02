<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eafcbdeefd905f8110ae7893e793eec82c3e00d2c70f441e7e14729e66647293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de82db9afa5a34c1994a7916146ea21ad77701ac7d97f4d28505cae9b655192a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de82db9afa5a34c1994a7916146ea21ad77701ac7d97f4d28505cae9b655192a->enter($__internal_de82db9afa5a34c1994a7916146ea21ad77701ac7d97f4d28505cae9b655192a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de82db9afa5a34c1994a7916146ea21ad77701ac7d97f4d28505cae9b655192a->leave($__internal_de82db9afa5a34c1994a7916146ea21ad77701ac7d97f4d28505cae9b655192a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fce33550b09097eb28338486ec040c2dfd27ac83ab137e46149a4e20d13a9a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce33550b09097eb28338486ec040c2dfd27ac83ab137e46149a4e20d13a9a4d->enter($__internal_fce33550b09097eb28338486ec040c2dfd27ac83ab137e46149a4e20d13a9a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fce33550b09097eb28338486ec040c2dfd27ac83ab137e46149a4e20d13a9a4d->leave($__internal_fce33550b09097eb28338486ec040c2dfd27ac83ab137e46149a4e20d13a9a4d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_311d2b13fc9dc8c9773f2657d68225fe88e492a82401aa0236553dacf7c56323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311d2b13fc9dc8c9773f2657d68225fe88e492a82401aa0236553dacf7c56323->enter($__internal_311d2b13fc9dc8c9773f2657d68225fe88e492a82401aa0236553dacf7c56323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_311d2b13fc9dc8c9773f2657d68225fe88e492a82401aa0236553dacf7c56323->leave($__internal_311d2b13fc9dc8c9773f2657d68225fe88e492a82401aa0236553dacf7c56323_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
