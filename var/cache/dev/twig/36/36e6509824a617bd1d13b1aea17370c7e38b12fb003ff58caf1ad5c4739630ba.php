<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4b5fb074796073dcc4e0731d73ddf6bad9a4a7f78f7113fb63123c542dc736cf extends Twig_Template
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
        $__internal_ec93c7cc285bbf7753dc318e9be146f9d7fb35e7c17d79809ba9544f57efc7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec93c7cc285bbf7753dc318e9be146f9d7fb35e7c17d79809ba9544f57efc7cb->enter($__internal_ec93c7cc285bbf7753dc318e9be146f9d7fb35e7c17d79809ba9544f57efc7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2e6b1ab32c626401f68c9afb4b35a03d8f7aa2d96acfd420b501e95a5f14d32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6b1ab32c626401f68c9afb4b35a03d8f7aa2d96acfd420b501e95a5f14d32d->enter($__internal_2e6b1ab32c626401f68c9afb4b35a03d8f7aa2d96acfd420b501e95a5f14d32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ec93c7cc285bbf7753dc318e9be146f9d7fb35e7c17d79809ba9544f57efc7cb->leave($__internal_ec93c7cc285bbf7753dc318e9be146f9d7fb35e7c17d79809ba9544f57efc7cb_prof);

        
        $__internal_2e6b1ab32c626401f68c9afb4b35a03d8f7aa2d96acfd420b501e95a5f14d32d->leave($__internal_2e6b1ab32c626401f68c9afb4b35a03d8f7aa2d96acfd420b501e95a5f14d32d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
