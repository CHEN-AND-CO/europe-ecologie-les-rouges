<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5ce649d1a7a1993a0eedebac862978dce5a1f8e9e930f7c8a3c856c0e77ba078 extends Twig_Template
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
        $__internal_e4b0f58529fe9a3366edbf4180ce2e2528e0e99f2b7c6495130c7de8991f000d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b0f58529fe9a3366edbf4180ce2e2528e0e99f2b7c6495130c7de8991f000d->enter($__internal_e4b0f58529fe9a3366edbf4180ce2e2528e0e99f2b7c6495130c7de8991f000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e4b0f58529fe9a3366edbf4180ce2e2528e0e99f2b7c6495130c7de8991f000d->leave($__internal_e4b0f58529fe9a3366edbf4180ce2e2528e0e99f2b7c6495130c7de8991f000d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
