<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig */
class __TwigTemplate_a7edb3e1298509815bf89466047781a7032f192f910f1add7c40ebaee33822de extends Twig_Template
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
        $__internal_d92475b3118c2acdf3cfd1b3bbd482aeef23cf1019d94e782a4aa794c5fab2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92475b3118c2acdf3cfd1b3bbd482aeef23cf1019d94e782a4aa794c5fab2f1->enter($__internal_d92475b3118c2acdf3cfd1b3bbd482aeef23cf1019d94e782a4aa794c5fab2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig"));

        $__internal_8dc6214434276e3579faecbd8f5225474fcd992d29bf86fbf7ee0272ff4f34cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc6214434276e3579faecbd8f5225474fcd992d29bf86fbf7ee0272ff4f34cd->enter($__internal_8dc6214434276e3579faecbd8f5225474fcd992d29bf86fbf7ee0272ff4f34cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig"));

        // line 9
        echo "
<a";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " style=\"color: #000;\">
    <span class=\"pull-right\">
        ";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sort"), "method") == ($context["key"] ?? $this->getContext($context, "key")))) {
            // line 13
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "direction"), "method") == "desc")) {
                // line 14
                echo "                <i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
            ";
            } else {
                // line 16
                echo "                <i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
            ";
            }
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            <i class=\"glyphicon glyphicon-sort\" style=\"color: #d2d6de;\"></i>
        ";
        }
        // line 21
        echo "    </span>
    ";
        // line 22
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "
</a>
";
        
        $__internal_d92475b3118c2acdf3cfd1b3bbd482aeef23cf1019d94e782a4aa794c5fab2f1->leave($__internal_d92475b3118c2acdf3cfd1b3bbd482aeef23cf1019d94e782a4aa794c5fab2f1_prof);

        
        $__internal_8dc6214434276e3579faecbd8f5225474fcd992d29bf86fbf7ee0272ff4f34cd->leave($__internal_8dc6214434276e3579faecbd8f5225474fcd992d29bf86fbf7ee0272ff4f34cd_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  64 => 21,  60 => 19,  57 => 18,  53 => 16,  49 => 14,  46 => 13,  44 => 12,  28 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Twitter Bootstrap v3 Sorting control implementation.
 *
 * @author Afolabi Olayinka <folabiolayinka@gmail.com>
 */
#}

<a{% for attr, value  in options %} {{ attr }}=\"{{ value }}\"{% endfor %} style=\"color: #000;\">
    <span class=\"pull-right\">
        {% if app.request.get('sort') == key %}
            {% if app.request.get('direction') == 'desc' %}
                <i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
            {% else %}
                <i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
            {% endif %}
        {% else %}
            <i class=\"glyphicon glyphicon-sort\" style=\"color: #d2d6de;\"></i>
        {% endif %}
    </span>
    {{ title }}
</a>
", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig", "/var/www/html/hortala/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/twitter_bootstrap_v3_sortable_link.html.twig");
    }
}
