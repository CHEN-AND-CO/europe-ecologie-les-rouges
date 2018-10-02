<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1de25ce7a9d9c6e3f4d90b73dc7d7d4b24a09360e3c2571f6beb76dfbcad88bf extends Twig_Template
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
        $__internal_47bd0dcc795aa4fbe3b3bc5d22d24fea9ce97bb61d7199df900717974c1ce07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47bd0dcc795aa4fbe3b3bc5d22d24fea9ce97bb61d7199df900717974c1ce07c->enter($__internal_47bd0dcc795aa4fbe3b3bc5d22d24fea9ce97bb61d7199df900717974c1ce07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_47bd0dcc795aa4fbe3b3bc5d22d24fea9ce97bb61d7199df900717974c1ce07c->leave($__internal_47bd0dcc795aa4fbe3b3bc5d22d24fea9ce97bb61d7199df900717974c1ce07c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
