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
        $__internal_43a3ec73b7be237061e9532fb7173cf8e3755408f5e17ab3cb056077801b2d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a3ec73b7be237061e9532fb7173cf8e3755408f5e17ab3cb056077801b2d59->enter($__internal_43a3ec73b7be237061e9532fb7173cf8e3755408f5e17ab3cb056077801b2d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::template.html.twig"));

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
        
        $__internal_43a3ec73b7be237061e9532fb7173cf8e3755408f5e17ab3cb056077801b2d59->leave($__internal_43a3ec73b7be237061e9532fb7173cf8e3755408f5e17ab3cb056077801b2d59_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_594cf9f18311115c4d4e61b98b329ec0e4e3f5780fa20be6996e5f40776b0a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594cf9f18311115c4d4e61b98b329ec0e4e3f5780fa20be6996e5f40776b0a69->enter($__internal_594cf9f18311115c4d4e61b98b329ec0e4e3f5780fa20be6996e5f40776b0a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("index.css"), "html", null, true);
        echo "\" />
            <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
        ";
        
        $__internal_594cf9f18311115c4d4e61b98b329ec0e4e3f5780fa20be6996e5f40776b0a69->leave($__internal_594cf9f18311115c4d4e61b98b329ec0e4e3f5780fa20be6996e5f40776b0a69_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_5e14246e94eec0c8ce33ec79d211369e931acf7c74abe39677a73572113a29cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e14246e94eec0c8ce33ec79d211369e931acf7c74abe39677a73572113a29cd->enter($__internal_5e14246e94eec0c8ce33ec79d211369e931acf7c74abe39677a73572113a29cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5e14246e94eec0c8ce33ec79d211369e931acf7c74abe39677a73572113a29cd->leave($__internal_5e14246e94eec0c8ce33ec79d211369e931acf7c74abe39677a73572113a29cd_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c9502c545d8ff67e5d43cccd0a141b7f6334df3e910fac08ef609dae35f378d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9502c545d8ff67e5d43cccd0a141b7f6334df3e910fac08ef609dae35f378d->enter($__internal_7c9502c545d8ff67e5d43cccd0a141b7f6334df3e910fac08ef609dae35f378d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7c9502c545d8ff67e5d43cccd0a141b7f6334df3e910fac08ef609dae35f378d->leave($__internal_7c9502c545d8ff67e5d43cccd0a141b7f6334df3e910fac08ef609dae35f378d_prof);

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
