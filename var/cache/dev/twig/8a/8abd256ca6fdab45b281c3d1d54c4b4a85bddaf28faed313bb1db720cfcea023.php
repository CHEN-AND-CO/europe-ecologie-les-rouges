<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_de32035458a7dbb678ae1b80de6ba98e3626203f5444ebdab8cd66aada112af3 extends Twig_Template
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
        $__internal_e05c94bfe4c22279f41e53e8092fa7b87da8ed63e43eec3ac5cf0757071550e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05c94bfe4c22279f41e53e8092fa7b87da8ed63e43eec3ac5cf0757071550e0->enter($__internal_e05c94bfe4c22279f41e53e8092fa7b87da8ed63e43eec3ac5cf0757071550e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e05c94bfe4c22279f41e53e8092fa7b87da8ed63e43eec3ac5cf0757071550e0->leave($__internal_e05c94bfe4c22279f41e53e8092fa7b87da8ed63e43eec3ac5cf0757071550e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/kevin/Projets/symfony/europe-ecologie-les-rouges/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
