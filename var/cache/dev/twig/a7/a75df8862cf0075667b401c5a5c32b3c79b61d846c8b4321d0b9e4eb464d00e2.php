<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f3790e200452f1dda148a7836cd094520ae8d9d4fd6e140c060e10a4dbe42380 extends Twig_Template
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
        $__internal_9b86767b9fe4dba2dd1b01c6adcdb75be5f8f552f9f1b42683f1014b3a48b6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b86767b9fe4dba2dd1b01c6adcdb75be5f8f552f9f1b42683f1014b3a48b6a2->enter($__internal_9b86767b9fe4dba2dd1b01c6adcdb75be5f8f552f9f1b42683f1014b3a48b6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9b86767b9fe4dba2dd1b01c6adcdb75be5f8f552f9f1b42683f1014b3a48b6a2->leave($__internal_9b86767b9fe4dba2dd1b01c6adcdb75be5f8f552f9f1b42683f1014b3a48b6a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
