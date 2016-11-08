<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4958244725f57b9e2b95cb1da4ed1dd844b2316eed16d9196e8a033657852951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30d40e47010c45947cc14f83ff74279038dba169e6ecec2e677f84b46288d3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d40e47010c45947cc14f83ff74279038dba169e6ecec2e677f84b46288d3f1->enter($__internal_30d40e47010c45947cc14f83ff74279038dba169e6ecec2e677f84b46288d3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d40e47010c45947cc14f83ff74279038dba169e6ecec2e677f84b46288d3f1->leave($__internal_30d40e47010c45947cc14f83ff74279038dba169e6ecec2e677f84b46288d3f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cec1620a6cd4b756368f353873dd82b81a7bc05444179a493ddf14b1ac7babed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec1620a6cd4b756368f353873dd82b81a7bc05444179a493ddf14b1ac7babed->enter($__internal_cec1620a6cd4b756368f353873dd82b81a7bc05444179a493ddf14b1ac7babed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_cec1620a6cd4b756368f353873dd82b81a7bc05444179a493ddf14b1ac7babed->leave($__internal_cec1620a6cd4b756368f353873dd82b81a7bc05444179a493ddf14b1ac7babed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c56fa32827ad3b747bd48a07f4ced260ea288dfc5aebd20b725f7c53e2b2742b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56fa32827ad3b747bd48a07f4ced260ea288dfc5aebd20b725f7c53e2b2742b->enter($__internal_c56fa32827ad3b747bd48a07f4ced260ea288dfc5aebd20b725f7c53e2b2742b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c56fa32827ad3b747bd48a07f4ced260ea288dfc5aebd20b725f7c53e2b2742b->leave($__internal_c56fa32827ad3b747bd48a07f4ced260ea288dfc5aebd20b725f7c53e2b2742b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_375ee5f84f7638cecbfe64a964ce5876bf6c27332d64bf4da28e22dccf3875ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375ee5f84f7638cecbfe64a964ce5876bf6c27332d64bf4da28e22dccf3875ec->enter($__internal_375ee5f84f7638cecbfe64a964ce5876bf6c27332d64bf4da28e22dccf3875ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_375ee5f84f7638cecbfe64a964ce5876bf6c27332d64bf4da28e22dccf3875ec->leave($__internal_375ee5f84f7638cecbfe64a964ce5876bf6c27332d64bf4da28e22dccf3875ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
