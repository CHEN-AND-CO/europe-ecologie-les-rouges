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
        $__internal_1ef6e6deb11d5476a18ff8781d43ff81d1eff79fcf5d9424e26d61403d21fe03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef6e6deb11d5476a18ff8781d43ff81d1eff79fcf5d9424e26d61403d21fe03->enter($__internal_1ef6e6deb11d5476a18ff8781d43ff81d1eff79fcf5d9424e26d61403d21fe03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1ef6e6deb11d5476a18ff8781d43ff81d1eff79fcf5d9424e26d61403d21fe03->leave($__internal_1ef6e6deb11d5476a18ff8781d43ff81d1eff79fcf5d9424e26d61403d21fe03_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d86ca00d6d06f6d5d49c4fd73f310d6d53ef9ab09a00a5d5dfb0e7a1efe8214a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86ca00d6d06f6d5d49c4fd73f310d6d53ef9ab09a00a5d5dfb0e7a1efe8214a->enter($__internal_d86ca00d6d06f6d5d49c4fd73f310d6d53ef9ab09a00a5d5dfb0e7a1efe8214a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d86ca00d6d06f6d5d49c4fd73f310d6d53ef9ab09a00a5d5dfb0e7a1efe8214a->leave($__internal_d86ca00d6d06f6d5d49c4fd73f310d6d53ef9ab09a00a5d5dfb0e7a1efe8214a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b8249c65b99b79e284831d801db67c64fa95f3d080abfd7f158518963ea211f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8249c65b99b79e284831d801db67c64fa95f3d080abfd7f158518963ea211f->enter($__internal_7b8249c65b99b79e284831d801db67c64fa95f3d080abfd7f158518963ea211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7b8249c65b99b79e284831d801db67c64fa95f3d080abfd7f158518963ea211f->leave($__internal_7b8249c65b99b79e284831d801db67c64fa95f3d080abfd7f158518963ea211f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_40a3cbe41edc42ba47a97a1ed1e81f10381e45cfbed36c652a5732992f3b0db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a3cbe41edc42ba47a97a1ed1e81f10381e45cfbed36c652a5732992f3b0db0->enter($__internal_40a3cbe41edc42ba47a97a1ed1e81f10381e45cfbed36c652a5732992f3b0db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_40a3cbe41edc42ba47a97a1ed1e81f10381e45cfbed36c652a5732992f3b0db0->leave($__internal_40a3cbe41edc42ba47a97a1ed1e81f10381e45cfbed36c652a5732992f3b0db0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e403f28ffc0f75ef38d81286ad8f03bbc3a47ac1226548e528a361d49b11149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e403f28ffc0f75ef38d81286ad8f03bbc3a47ac1226548e528a361d49b11149->enter($__internal_8e403f28ffc0f75ef38d81286ad8f03bbc3a47ac1226548e528a361d49b11149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8e403f28ffc0f75ef38d81286ad8f03bbc3a47ac1226548e528a361d49b11149->leave($__internal_8e403f28ffc0f75ef38d81286ad8f03bbc3a47ac1226548e528a361d49b11149_prof);

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
