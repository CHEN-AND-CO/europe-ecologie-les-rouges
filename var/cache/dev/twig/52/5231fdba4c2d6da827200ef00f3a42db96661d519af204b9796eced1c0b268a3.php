<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b71c5ebdf6ef34780df0e86230da4b00d06de304332916481c09e30e49b94299 extends Twig_Template
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
        $__internal_b6ebc23b4868afa4f1c09e796c7e8d2c866cc4977f58e1c22a353f64028086d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ebc23b4868afa4f1c09e796c7e8d2c866cc4977f58e1c22a353f64028086d3->enter($__internal_b6ebc23b4868afa4f1c09e796c7e8d2c866cc4977f58e1c22a353f64028086d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b6ebc23b4868afa4f1c09e796c7e8d2c866cc4977f58e1c22a353f64028086d3->leave($__internal_b6ebc23b4868afa4f1c09e796c7e8d2c866cc4977f58e1c22a353f64028086d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
