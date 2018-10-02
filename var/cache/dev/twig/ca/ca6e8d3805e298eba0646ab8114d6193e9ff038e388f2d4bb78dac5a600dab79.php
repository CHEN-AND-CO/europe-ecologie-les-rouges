<?php

/* ::base.html.twig */
class __TwigTemplate_e2d21215726556d7a2b9206e83e6061cc251f39bee62896aecdbb35410598892 extends Twig_Template
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
        $__internal_03ed0c396a2a86644d97a117eb17b7f4aa40033f6a1cf2eb262217ca797daf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ed0c396a2a86644d97a117eb17b7f4aa40033f6a1cf2eb262217ca797daf90->enter($__internal_03ed0c396a2a86644d97a117eb17b7f4aa40033f6a1cf2eb262217ca797daf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_03ed0c396a2a86644d97a117eb17b7f4aa40033f6a1cf2eb262217ca797daf90->leave($__internal_03ed0c396a2a86644d97a117eb17b7f4aa40033f6a1cf2eb262217ca797daf90_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d97e23a2370c00e0748143910be234cf14bb93107dbdb4fe04c84824f0ace584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97e23a2370c00e0748143910be234cf14bb93107dbdb4fe04c84824f0ace584->enter($__internal_d97e23a2370c00e0748143910be234cf14bb93107dbdb4fe04c84824f0ace584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d97e23a2370c00e0748143910be234cf14bb93107dbdb4fe04c84824f0ace584->leave($__internal_d97e23a2370c00e0748143910be234cf14bb93107dbdb4fe04c84824f0ace584_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4baa764eaaf292efb1a6e90f31f5a5afa901eff5805fd73953f64f656506697a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4baa764eaaf292efb1a6e90f31f5a5afa901eff5805fd73953f64f656506697a->enter($__internal_4baa764eaaf292efb1a6e90f31f5a5afa901eff5805fd73953f64f656506697a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4baa764eaaf292efb1a6e90f31f5a5afa901eff5805fd73953f64f656506697a->leave($__internal_4baa764eaaf292efb1a6e90f31f5a5afa901eff5805fd73953f64f656506697a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec50e65d559b86b7b20ffac9115606fa26a51b03ba543d8dd8c3cf5b952a5495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec50e65d559b86b7b20ffac9115606fa26a51b03ba543d8dd8c3cf5b952a5495->enter($__internal_ec50e65d559b86b7b20ffac9115606fa26a51b03ba543d8dd8c3cf5b952a5495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec50e65d559b86b7b20ffac9115606fa26a51b03ba543d8dd8c3cf5b952a5495->leave($__internal_ec50e65d559b86b7b20ffac9115606fa26a51b03ba543d8dd8c3cf5b952a5495_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f13468032ebbb0e51a6bcdf018827b6e137fcfa1e5f5bc64700179f49c8d77c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13468032ebbb0e51a6bcdf018827b6e137fcfa1e5f5bc64700179f49c8d77c9->enter($__internal_f13468032ebbb0e51a6bcdf018827b6e137fcfa1e5f5bc64700179f49c8d77c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f13468032ebbb0e51a6bcdf018827b6e137fcfa1e5f5bc64700179f49c8d77c9->leave($__internal_f13468032ebbb0e51a6bcdf018827b6e137fcfa1e5f5bc64700179f49c8d77c9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/app/Resources/views/base.html.twig");
    }
}
