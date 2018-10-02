<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_21bf25ba5435be42c4214c332fa4f6345b62dcb0fc9dc2637a285e56e4474213 extends Twig_Template
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
        $__internal_b88e12171d0ecaf44e04270faede3af28e10e33575b2bf935c9a74adf69ad09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88e12171d0ecaf44e04270faede3af28e10e33575b2bf935c9a74adf69ad09e->enter($__internal_b88e12171d0ecaf44e04270faede3af28e10e33575b2bf935c9a74adf69ad09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b88e12171d0ecaf44e04270faede3af28e10e33575b2bf935c9a74adf69ad09e->leave($__internal_b88e12171d0ecaf44e04270faede3af28e10e33575b2bf935c9a74adf69ad09e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
