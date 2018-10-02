<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_76d2cb7dc23c1dc1c8baed0c24c1eebf7cfc9fc86f5329449f3341192865232c extends Twig_Template
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
        $__internal_2a3a56468c11f5e6479ac6785e46f7e70a0077a0b3f7342c19ffa453df9bc721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3a56468c11f5e6479ac6785e46f7e70a0077a0b3f7342c19ffa453df9bc721->enter($__internal_2a3a56468c11f5e6479ac6785e46f7e70a0077a0b3f7342c19ffa453df9bc721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_2a3a56468c11f5e6479ac6785e46f7e70a0077a0b3f7342c19ffa453df9bc721->leave($__internal_2a3a56468c11f5e6479ac6785e46f7e70a0077a0b3f7342c19ffa453df9bc721_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
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
", "FrontOfficeBundle:Default:index.html.twig", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
