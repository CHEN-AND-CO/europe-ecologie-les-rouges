<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_64180bc5d592cec1aee10e0424950d82cbd57a14a4bdca8402996a233b7bbc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ade4f6a764d84855807548708324bea7b381086d7ce8319ea76b3118d0199088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade4f6a764d84855807548708324bea7b381086d7ce8319ea76b3118d0199088->enter($__internal_ade4f6a764d84855807548708324bea7b381086d7ce8319ea76b3118d0199088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade4f6a764d84855807548708324bea7b381086d7ce8319ea76b3118d0199088->leave($__internal_ade4f6a764d84855807548708324bea7b381086d7ce8319ea76b3118d0199088_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cac8f8985be34610222aca707f17066e6fc42190da67f2d43f5f841869da7c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac8f8985be34610222aca707f17066e6fc42190da67f2d43f5f841869da7c3a->enter($__internal_cac8f8985be34610222aca707f17066e6fc42190da67f2d43f5f841869da7c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cac8f8985be34610222aca707f17066e6fc42190da67f2d43f5f841869da7c3a->leave($__internal_cac8f8985be34610222aca707f17066e6fc42190da67f2d43f5f841869da7c3a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_179e5b0dfd0cad10eba8d554f1448e04332b20d77442a1c6357f4f54f67afcfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179e5b0dfd0cad10eba8d554f1448e04332b20d77442a1c6357f4f54f67afcfb->enter($__internal_179e5b0dfd0cad10eba8d554f1448e04332b20d77442a1c6357f4f54f67afcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_179e5b0dfd0cad10eba8d554f1448e04332b20d77442a1c6357f4f54f67afcfb->leave($__internal_179e5b0dfd0cad10eba8d554f1448e04332b20d77442a1c6357f4f54f67afcfb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2139e3646345c4ad83c0fa32b1ee7b1c4c04f03a7d3b25449384bfe0b5cb159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2139e3646345c4ad83c0fa32b1ee7b1c4c04f03a7d3b25449384bfe0b5cb159->enter($__internal_c2139e3646345c4ad83c0fa32b1ee7b1c4c04f03a7d3b25449384bfe0b5cb159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c2139e3646345c4ad83c0fa32b1ee7b1c4c04f03a7d3b25449384bfe0b5cb159->leave($__internal_c2139e3646345c4ad83c0fa32b1ee7b1c4c04f03a7d3b25449384bfe0b5cb159_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
