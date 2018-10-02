<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_257f8af107cd3dd8b6250e7cc86ac14b28072a6d96f75e9e1a19c0fe43429989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb1f461f0db3b768de83277489c3ebe95c7ded0c7df083644bacea19b44340b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1f461f0db3b768de83277489c3ebe95c7ded0c7df083644bacea19b44340b2->enter($__internal_fb1f461f0db3b768de83277489c3ebe95c7ded0c7df083644bacea19b44340b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fb1f461f0db3b768de83277489c3ebe95c7ded0c7df083644bacea19b44340b2->leave($__internal_fb1f461f0db3b768de83277489c3ebe95c7ded0c7df083644bacea19b44340b2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6c1ff09bcb3cde0a9427bcadb23ff35867ac6aa431f9721bf7f73f624366568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c1ff09bcb3cde0a9427bcadb23ff35867ac6aa431f9721bf7f73f624366568->enter($__internal_f6c1ff09bcb3cde0a9427bcadb23ff35867ac6aa431f9721bf7f73f624366568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f6c1ff09bcb3cde0a9427bcadb23ff35867ac6aa431f9721bf7f73f624366568->leave($__internal_f6c1ff09bcb3cde0a9427bcadb23ff35867ac6aa431f9721bf7f73f624366568_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
