<?php

/* FrontOfficeBundle::template.html.twig */
class __TwigTemplate_5bb8aee27711620f535124d4e1f40e718c26645c4e456b263f6dd734973219a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b5b79072ec5df989c3eddc9eba4ce77d29df8dd2606022b513528e5e945b313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5b79072ec5df989c3eddc9eba4ce77d29df8dd2606022b513528e5e945b313->enter($__internal_6b5b79072ec5df989c3eddc9eba4ce77d29df8dd2606022b513528e5e945b313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        ";
        // line 10
        $this->loadTemplate("@FrontOffice/header.html", "FrontOfficeBundle::template.html.twig", 10)->display($context);
        // line 11
        echo "        <div id=\"content\">";
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        ";
        // line 12
        $this->loadTemplate("@FrontOffice/footer.html", "FrontOfficeBundle::template.html.twig", 12)->display($context);
        // line 13
        echo "    </body>
</html>";
        
        $__internal_6b5b79072ec5df989c3eddc9eba4ce77d29df8dd2606022b513528e5e945b313->leave($__internal_6b5b79072ec5df989c3eddc9eba4ce77d29df8dd2606022b513528e5e945b313_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9b84d98cf4acbe3296090216d17b3a143829c82405c242c01b28ab79a4089b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b84d98cf4acbe3296090216d17b3a143829c82405c242c01b28ab79a4089b8->enter($__internal_f9b84d98cf4acbe3296090216d17b3a143829c82405c242c01b28ab79a4089b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("index.css"), "html", null, true);
        echo "\" />
            <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
        ";
        
        $__internal_f9b84d98cf4acbe3296090216d17b3a143829c82405c242c01b28ab79a4089b8->leave($__internal_f9b84d98cf4acbe3296090216d17b3a143829c82405c242c01b28ab79a4089b8_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_b11844c213fc5e9d950535a90af5ac7d7ed4306cdfadd0728b8c64d5267ea3a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11844c213fc5e9d950535a90af5ac7d7ed4306cdfadd0728b8c64d5267ea3a0->enter($__internal_b11844c213fc5e9d950535a90af5ac7d7ed4306cdfadd0728b8c64d5267ea3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b11844c213fc5e9d950535a90af5ac7d7ed4306cdfadd0728b8c64d5267ea3a0->leave($__internal_b11844c213fc5e9d950535a90af5ac7d7ed4306cdfadd0728b8c64d5267ea3a0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_215c37c5bf86a71e4016a3b0ef934ceaeb10d5c5a7caeba59ba67162fe6e17bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215c37c5bf86a71e4016a3b0ef934ceaeb10d5c5a7caeba59ba67162fe6e17bb->enter($__internal_215c37c5bf86a71e4016a3b0ef934ceaeb10d5c5a7caeba59ba67162fe6e17bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_215c37c5bf86a71e4016a3b0ef934ceaeb10d5c5a7caeba59ba67162fe6e17bb->leave($__internal_215c37c5bf86a71e4016a3b0ef934ceaeb10d5c5a7caeba59ba67162fe6e17bb_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  64 => 6,  59 => 5,  53 => 4,  45 => 13,  43 => 12,  38 => 11,  36 => 10,  32 => 8,  30 => 4,  25 => 1,);
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
        {% block head %}
            <link rel=\"stylesheet\" href=\"{{ asset('index.css') }}\" />
            <title>{% block title %}{% endblock %} - My Webpage</title>
        {% endblock %}
    </head>
    <body>
        {% include '@FrontOffice/header.html' %}
        <div id=\"content\">{% block content %}{% endblock %}</div>
        {% include '@FrontOffice/footer.html' %}
    </body>
</html>", "FrontOfficeBundle::template.html.twig", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/src/FrontOfficeBundle/Resources/views/template.html.twig");
    }
}
