<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9196e4ed7aebace85bdc8468e0ca53f850cc2bd2d9a266995fe66eb4151d6df3 extends Twig_Template
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
        $__internal_58e3501192afdd30867586a41bc2dedb2f5570c47fe081cbc8a8f2946ee54a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e3501192afdd30867586a41bc2dedb2f5570c47fe081cbc8a8f2946ee54a18->enter($__internal_58e3501192afdd30867586a41bc2dedb2f5570c47fe081cbc8a8f2946ee54a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_58e3501192afdd30867586a41bc2dedb2f5570c47fe081cbc8a8f2946ee54a18->leave($__internal_58e3501192afdd30867586a41bc2dedb2f5570c47fe081cbc8a8f2946ee54a18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
