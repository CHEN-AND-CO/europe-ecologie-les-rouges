<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_954a30ea721dc897c5751f546792621b07124c04580dbb44f86d3877f2dc0e18 extends Twig_Template
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
        $__internal_fc1349a62ba4e43bf6d9285f00a4061a6c53fd57d68f1ffe27761e7b83e301ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1349a62ba4e43bf6d9285f00a4061a6c53fd57d68f1ffe27761e7b83e301ec->enter($__internal_fc1349a62ba4e43bf6d9285f00a4061a6c53fd57d68f1ffe27761e7b83e301ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fc1349a62ba4e43bf6d9285f00a4061a6c53fd57d68f1ffe27761e7b83e301ec->leave($__internal_fc1349a62ba4e43bf6d9285f00a4061a6c53fd57d68f1ffe27761e7b83e301ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
