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
        $__internal_c6a4aa2d8b735336604575ef987a55d6c9d87693a22df75e547d99f86b783e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a4aa2d8b735336604575ef987a55d6c9d87693a22df75e547d99f86b783e95->enter($__internal_c6a4aa2d8b735336604575ef987a55d6c9d87693a22df75e547d99f86b783e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a4aa2d8b735336604575ef987a55d6c9d87693a22df75e547d99f86b783e95->leave($__internal_c6a4aa2d8b735336604575ef987a55d6c9d87693a22df75e547d99f86b783e95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd0fc60cb59c9c2557225eaa7fc9216f75316416ba991dee9b94aa88299f0fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0fc60cb59c9c2557225eaa7fc9216f75316416ba991dee9b94aa88299f0fb7->enter($__internal_dd0fc60cb59c9c2557225eaa7fc9216f75316416ba991dee9b94aa88299f0fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd0fc60cb59c9c2557225eaa7fc9216f75316416ba991dee9b94aa88299f0fb7->leave($__internal_dd0fc60cb59c9c2557225eaa7fc9216f75316416ba991dee9b94aa88299f0fb7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ac5230f6cb74caf6c57cd450c26090543fcb5e83bad7bd48065db199d76d1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac5230f6cb74caf6c57cd450c26090543fcb5e83bad7bd48065db199d76d1be->enter($__internal_3ac5230f6cb74caf6c57cd450c26090543fcb5e83bad7bd48065db199d76d1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ac5230f6cb74caf6c57cd450c26090543fcb5e83bad7bd48065db199d76d1be->leave($__internal_3ac5230f6cb74caf6c57cd450c26090543fcb5e83bad7bd48065db199d76d1be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20c9ae6ec34deb2417a3f5828d4339605ebb7e9adee332058adcc0efc05021c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c9ae6ec34deb2417a3f5828d4339605ebb7e9adee332058adcc0efc05021c9->enter($__internal_20c9ae6ec34deb2417a3f5828d4339605ebb7e9adee332058adcc0efc05021c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_20c9ae6ec34deb2417a3f5828d4339605ebb7e9adee332058adcc0efc05021c9->leave($__internal_20c9ae6ec34deb2417a3f5828d4339605ebb7e9adee332058adcc0efc05021c9_prof);

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
