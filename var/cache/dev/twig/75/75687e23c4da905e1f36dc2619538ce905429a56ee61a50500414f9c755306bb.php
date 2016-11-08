<?php

/* CoreBundle:Default:index.html.twig */
class __TwigTemplate_7520fe8495a6a1c5a54599e91b0ff0808d889f61b6892795454d5638672cf3fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Core/base.html.twig", "CoreBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Core/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_925eaac46686850200482aaf0fd7b454e92fbbc1fe3276ccd40e5db41f3cb404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925eaac46686850200482aaf0fd7b454e92fbbc1fe3276ccd40e5db41f3cb404->enter($__internal_925eaac46686850200482aaf0fd7b454e92fbbc1fe3276ccd40e5db41f3cb404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925eaac46686850200482aaf0fd7b454e92fbbc1fe3276ccd40e5db41f3cb404->leave($__internal_925eaac46686850200482aaf0fd7b454e92fbbc1fe3276ccd40e5db41f3cb404_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cf45adea174207c30c7611123b351f4f53f7f518fc719f33c674938cd135af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf45adea174207c30c7611123b351f4f53f7f518fc719f33c674938cd135af0->enter($__internal_1cf45adea174207c30c7611123b351f4f53f7f518fc719f33c674938cd135af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle:Default:index.html.twig"));

        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Ras\Bundle\FlashAlertBundle\Twig\FlashAlertsExtension')->renderFlashAlerts();
        echo "

    <h1>Welcome to this beautiful website with no CSS yet !</h1>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 10
            echo "        ";
            if ((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts"))) {
                // line 11
                echo "

            <p>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
                echo "</p>
            <p>";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array())), "html", null, true);
                echo "</p>
            <p>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
                echo "</p>
            <p>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
                echo "</p>

        ";
            }
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        
        $__internal_1cf45adea174207c30c7611123b351f4f53f7f518fc719f33c674938cd135af0->leave($__internal_1cf45adea174207c30c7611123b351f4f53f7f518fc719f33c674938cd135af0_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  79 => 19,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 11,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Core/base.html.twig' %}

{% block body %}

    {{ render_flash_alerts() }}

    <h1>Welcome to this beautiful website with no CSS yet !</h1>

    {% for advert in adverts %}
        {% if  adverts %}


            <p>{{ advert.title }}</p>
            <p>{{ advert.date|date }}</p>
            <p>{{ advert.author }}</p>
            <p>{{ advert.content }}</p>

        {% endif %}
    {% endfor %}

{% endblock %}", "CoreBundle:Default:index.html.twig", "C:\\wamp64\\www\\symfony3\\src\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}
