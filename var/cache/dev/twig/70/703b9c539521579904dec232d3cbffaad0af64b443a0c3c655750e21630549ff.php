<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_fcb83a124fe54d98d3aa72355cfc610a9fdf31027c4b99b9ed6a44276b712ff9 extends Twig_Template
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
        $__internal_3681c4685b46cfaa3ff21cab9884d38814dffe72a14321e79fb0d9aa9d47a1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3681c4685b46cfaa3ff21cab9884d38814dffe72a14321e79fb0d9aa9d47a1b8->enter($__internal_3681c4685b46cfaa3ff21cab9884d38814dffe72a14321e79fb0d9aa9d47a1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3681c4685b46cfaa3ff21cab9884d38814dffe72a14321e79fb0d9aa9d47a1b8->leave($__internal_3681c4685b46cfaa3ff21cab9884d38814dffe72a14321e79fb0d9aa9d47a1b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
