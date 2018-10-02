<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_8ee3f1255cb4c2a02a266c42e62ec077b323eec77d8b25f413d731ed618d4a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07b9db8215f35b9a69c8d2b11dc538ff12a834ee2946aab9d020c05724160792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b9db8215f35b9a69c8d2b11dc538ff12a834ee2946aab9d020c05724160792->enter($__internal_07b9db8215f35b9a69c8d2b11dc538ff12a834ee2946aab9d020c05724160792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_07b9db8215f35b9a69c8d2b11dc538ff12a834ee2946aab9d020c05724160792->leave($__internal_07b9db8215f35b9a69c8d2b11dc538ff12a834ee2946aab9d020c05724160792_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "BackOfficeBundle:Default:index.html.twig", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
