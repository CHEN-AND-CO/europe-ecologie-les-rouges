<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0c06d56bb5ad927f860154cae9330bce134aa21fed6034780e74f5a2d5848db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e375742b7a503d4ab68a74470dfeec5860fbc5accd6afafbda1657fdbee59aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e375742b7a503d4ab68a74470dfeec5860fbc5accd6afafbda1657fdbee59aa->enter($__internal_2e375742b7a503d4ab68a74470dfeec5860fbc5accd6afafbda1657fdbee59aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e375742b7a503d4ab68a74470dfeec5860fbc5accd6afafbda1657fdbee59aa->leave($__internal_2e375742b7a503d4ab68a74470dfeec5860fbc5accd6afafbda1657fdbee59aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9198ac219be0125659f4b5b408ee0bb27c74ca6601787a691c329ce65e37eeac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9198ac219be0125659f4b5b408ee0bb27c74ca6601787a691c329ce65e37eeac->enter($__internal_9198ac219be0125659f4b5b408ee0bb27c74ca6601787a691c329ce65e37eeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9198ac219be0125659f4b5b408ee0bb27c74ca6601787a691c329ce65e37eeac->leave($__internal_9198ac219be0125659f4b5b408ee0bb27c74ca6601787a691c329ce65e37eeac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_639d41c1ca7d6b5dddbd607450f13e9c3728b4dfe827a2e76095aa747b49b743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639d41c1ca7d6b5dddbd607450f13e9c3728b4dfe827a2e76095aa747b49b743->enter($__internal_639d41c1ca7d6b5dddbd607450f13e9c3728b4dfe827a2e76095aa747b49b743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_639d41c1ca7d6b5dddbd607450f13e9c3728b4dfe827a2e76095aa747b49b743->leave($__internal_639d41c1ca7d6b5dddbd607450f13e9c3728b4dfe827a2e76095aa747b49b743_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb4c27784d5892a848534041135dba5d33ebbe0f3b26a35f3dece73355dcc99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4c27784d5892a848534041135dba5d33ebbe0f3b26a35f3dece73355dcc99a->enter($__internal_bb4c27784d5892a848534041135dba5d33ebbe0f3b26a35f3dece73355dcc99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bb4c27784d5892a848534041135dba5d33ebbe0f3b26a35f3dece73355dcc99a->leave($__internal_bb4c27784d5892a848534041135dba5d33ebbe0f3b26a35f3dece73355dcc99a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
