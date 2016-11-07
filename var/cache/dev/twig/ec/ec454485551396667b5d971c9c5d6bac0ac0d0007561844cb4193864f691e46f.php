<?php

/* CoreBundle:Default:index.html.twig */
class __TwigTemplate_b266ffc22e823234ae477529cb6ba25a4a19c3471c54ba5840b4047a7942ed90 extends Twig_Template
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
        $__internal_c7b2504ee90e8f28697016b7ba6fd2982608542d885f83706157138a265a2916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b2504ee90e8f28697016b7ba6fd2982608542d885f83706157138a265a2916->enter($__internal_c7b2504ee90e8f28697016b7ba6fd2982608542d885f83706157138a265a2916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7b2504ee90e8f28697016b7ba6fd2982608542d885f83706157138a265a2916->leave($__internal_c7b2504ee90e8f28697016b7ba6fd2982608542d885f83706157138a265a2916_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25a98ac4c1aa5762bf752bfc02e5cfeac71270b702ab0370916959b7ad7d57e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a98ac4c1aa5762bf752bfc02e5cfeac71270b702ab0370916959b7ad7d57e7->enter($__internal_25a98ac4c1aa5762bf752bfc02e5cfeac71270b702ab0370916959b7ad7d57e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle:Default:index.html.twig"));

        // line 4
        echo "    <h1>Welcome to this beautiful website with no CSS yet !</h1>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 6
            echo "        ";
            if ((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts"))) {
                // line 7
                echo "
            <p>";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
                echo "</p>
            <p>";
                // line 9
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array())), "html", null, true);
                echo "</p>
            <p>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
                echo "</p>
            <p>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
                echo "</p>

        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        
        $__internal_25a98ac4c1aa5762bf752bfc02e5cfeac71270b702ab0370916959b7ad7d57e7->leave($__internal_25a98ac4c1aa5762bf752bfc02e5cfeac71270b702ab0370916959b7ad7d57e7_prof);

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
        return array (  77 => 15,  71 => 14,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
