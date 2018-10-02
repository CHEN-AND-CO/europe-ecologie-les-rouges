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
        $__internal_e69a25dc0c940ae153a19bb3a411ee446f657bcdf6dab7fe4635e0d58be4bab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69a25dc0c940ae153a19bb3a411ee446f657bcdf6dab7fe4635e0d58be4bab0->enter($__internal_e69a25dc0c940ae153a19bb3a411ee446f657bcdf6dab7fe4635e0d58be4bab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e69a25dc0c940ae153a19bb3a411ee446f657bcdf6dab7fe4635e0d58be4bab0->leave($__internal_e69a25dc0c940ae153a19bb3a411ee446f657bcdf6dab7fe4635e0d58be4bab0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_119860e94d8087105b721c50946ea11a209dea4665c97a13945cb819a8dddcf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119860e94d8087105b721c50946ea11a209dea4665c97a13945cb819a8dddcf0->enter($__internal_119860e94d8087105b721c50946ea11a209dea4665c97a13945cb819a8dddcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_119860e94d8087105b721c50946ea11a209dea4665c97a13945cb819a8dddcf0->leave($__internal_119860e94d8087105b721c50946ea11a209dea4665c97a13945cb819a8dddcf0_prof);

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
