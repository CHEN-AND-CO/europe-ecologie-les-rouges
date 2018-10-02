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
        $__internal_e3fbc0d90220f1ba1acc9c5e81d7c92f0f47893a8da4ec936c1dffd73102fd0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fbc0d90220f1ba1acc9c5e81d7c92f0f47893a8da4ec936c1dffd73102fd0f->enter($__internal_e3fbc0d90220f1ba1acc9c5e81d7c92f0f47893a8da4ec936c1dffd73102fd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3fbc0d90220f1ba1acc9c5e81d7c92f0f47893a8da4ec936c1dffd73102fd0f->leave($__internal_e3fbc0d90220f1ba1acc9c5e81d7c92f0f47893a8da4ec936c1dffd73102fd0f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae03ab9534d7f7b94f2fadd8c15da9c71517fb258383aa51511c813a4003d9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae03ab9534d7f7b94f2fadd8c15da9c71517fb258383aa51511c813a4003d9a6->enter($__internal_ae03ab9534d7f7b94f2fadd8c15da9c71517fb258383aa51511c813a4003d9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae03ab9534d7f7b94f2fadd8c15da9c71517fb258383aa51511c813a4003d9a6->leave($__internal_ae03ab9534d7f7b94f2fadd8c15da9c71517fb258383aa51511c813a4003d9a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b0e30e7dc3f9f956d12369a441b155ee25d278152e34b0f3c8eb44c13604005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0e30e7dc3f9f956d12369a441b155ee25d278152e34b0f3c8eb44c13604005->enter($__internal_6b0e30e7dc3f9f956d12369a441b155ee25d278152e34b0f3c8eb44c13604005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b0e30e7dc3f9f956d12369a441b155ee25d278152e34b0f3c8eb44c13604005->leave($__internal_6b0e30e7dc3f9f956d12369a441b155ee25d278152e34b0f3c8eb44c13604005_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cce6427bb564ac8a016e4cd706161439ba1adc498b51d1a014d2a690db6aa202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce6427bb564ac8a016e4cd706161439ba1adc498b51d1a014d2a690db6aa202->enter($__internal_cce6427bb564ac8a016e4cd706161439ba1adc498b51d1a014d2a690db6aa202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cce6427bb564ac8a016e4cd706161439ba1adc498b51d1a014d2a690db6aa202->leave($__internal_cce6427bb564ac8a016e4cd706161439ba1adc498b51d1a014d2a690db6aa202_prof);

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
