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
        $__internal_4eab5db913d2c8f2c062471187b669e82136d8ed1435adf0a2aaedf11ee65de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eab5db913d2c8f2c062471187b669e82136d8ed1435adf0a2aaedf11ee65de7->enter($__internal_4eab5db913d2c8f2c062471187b669e82136d8ed1435adf0a2aaedf11ee65de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4eab5db913d2c8f2c062471187b669e82136d8ed1435adf0a2aaedf11ee65de7->leave($__internal_4eab5db913d2c8f2c062471187b669e82136d8ed1435adf0a2aaedf11ee65de7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a99bcb26ab0354eb74340e3bede389e9adef15d2cb5ab2bc0e6bdff6ecbfbf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99bcb26ab0354eb74340e3bede389e9adef15d2cb5ab2bc0e6bdff6ecbfbf49->enter($__internal_a99bcb26ab0354eb74340e3bede389e9adef15d2cb5ab2bc0e6bdff6ecbfbf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a99bcb26ab0354eb74340e3bede389e9adef15d2cb5ab2bc0e6bdff6ecbfbf49->leave($__internal_a99bcb26ab0354eb74340e3bede389e9adef15d2cb5ab2bc0e6bdff6ecbfbf49_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_453aa130a45d35caaa78d24f8f4415dbbc08d5ac89bf50724c273d2509860c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453aa130a45d35caaa78d24f8f4415dbbc08d5ac89bf50724c273d2509860c4b->enter($__internal_453aa130a45d35caaa78d24f8f4415dbbc08d5ac89bf50724c273d2509860c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_453aa130a45d35caaa78d24f8f4415dbbc08d5ac89bf50724c273d2509860c4b->leave($__internal_453aa130a45d35caaa78d24f8f4415dbbc08d5ac89bf50724c273d2509860c4b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f2780e2addf00152a5746f61855d0cd88c19f5f74fb0f823c516f4e87a5b4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2780e2addf00152a5746f61855d0cd88c19f5f74fb0f823c516f4e87a5b4e1->enter($__internal_1f2780e2addf00152a5746f61855d0cd88c19f5f74fb0f823c516f4e87a5b4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f2780e2addf00152a5746f61855d0cd88c19f5f74fb0f823c516f4e87a5b4e1->leave($__internal_1f2780e2addf00152a5746f61855d0cd88c19f5f74fb0f823c516f4e87a5b4e1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1c284318df3591fb86f11ddc03dd019fca4b64c091ff49a74bf1652f567564a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c284318df3591fb86f11ddc03dd019fca4b64c091ff49a74bf1652f567564a->enter($__internal_c1c284318df3591fb86f11ddc03dd019fca4b64c091ff49a74bf1652f567564a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c1c284318df3591fb86f11ddc03dd019fca4b64c091ff49a74bf1652f567564a->leave($__internal_c1c284318df3591fb86f11ddc03dd019fca4b64c091ff49a74bf1652f567564a_prof);

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
