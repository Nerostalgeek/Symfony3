<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_930e95063f4dd0a099bef3e087014c5bfdb98cef3e18a6574ad6f57c1d704c9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79a7a66d4d477abc62d4a1c2eb2f42d223772415b2c10793e20ef7c355a0e4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a7a66d4d477abc62d4a1c2eb2f42d223772415b2c10793e20ef7c355a0e4d4->enter($__internal_79a7a66d4d477abc62d4a1c2eb2f42d223772415b2c10793e20ef7c355a0e4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79a7a66d4d477abc62d4a1c2eb2f42d223772415b2c10793e20ef7c355a0e4d4->leave($__internal_79a7a66d4d477abc62d4a1c2eb2f42d223772415b2c10793e20ef7c355a0e4d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91c618873045493231960e20748e513804bbd74751512ef5c0e1457247371aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c618873045493231960e20748e513804bbd74751512ef5c0e1457247371aff->enter($__internal_91c618873045493231960e20748e513804bbd74751512ef5c0e1457247371aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:edit.html.twig"));

        // line 4
        echo "
";
        
        $__internal_91c618873045493231960e20748e513804bbd74751512ef5c0e1457247371aff->leave($__internal_91c618873045493231960e20748e513804bbd74751512ef5c0e1457247371aff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_027c7f64bef43e9e4b474d2764adc57fa067900000b8a29a64a53f5cb030c8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027c7f64bef43e9e4b474d2764adc57fa067900000b8a29a64a53f5cb030c8de->enter($__internal_027c7f64bef43e9e4b474d2764adc57fa067900000b8a29a64a53f5cb030c8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:edit.html.twig"));

        // line 8
        echo "
";
        
        $__internal_027c7f64bef43e9e4b474d2764adc57fa067900000b8a29a64a53f5cb030c8de->leave($__internal_027c7f64bef43e9e4b474d2764adc57fa067900000b8a29a64a53f5cb030c8de_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}

{% endblock %}

{% block title %}

{% endblock %}

", "OCPlatformBundle:Advert:edit.html.twig", "C:\\wamp64\\www\\symfony3\\src\\OC\\PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
