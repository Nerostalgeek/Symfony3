<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8058e337bcf207da12dc5bfd83e20690f6b865004b0ba47eb4f5b3de2c26568c extends Twig_Template
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
        $__internal_5d0aa8a650a5bb4c72d7087abd74191a7832f7b00e333dd731ab4451507b77ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0aa8a650a5bb4c72d7087abd74191a7832f7b00e333dd731ab4451507b77ca->enter($__internal_5d0aa8a650a5bb4c72d7087abd74191a7832f7b00e333dd731ab4451507b77ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d0aa8a650a5bb4c72d7087abd74191a7832f7b00e333dd731ab4451507b77ca->leave($__internal_5d0aa8a650a5bb4c72d7087abd74191a7832f7b00e333dd731ab4451507b77ca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a7db6c3298497e1cae50984f756253417165b7f63ded175a2bffcc716959fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7db6c3298497e1cae50984f756253417165b7f63ded175a2bffcc716959fb7->enter($__internal_8a7db6c3298497e1cae50984f756253417165b7f63ded175a2bffcc716959fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_8a7db6c3298497e1cae50984f756253417165b7f63ded175a2bffcc716959fb7->leave($__internal_8a7db6c3298497e1cae50984f756253417165b7f63ded175a2bffcc716959fb7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17edc336e8f8f93ba7e6275713ad11f0bb77500296d519b62af1a41be35f210e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17edc336e8f8f93ba7e6275713ad11f0bb77500296d519b62af1a41be35f210e->enter($__internal_17edc336e8f8f93ba7e6275713ad11f0bb77500296d519b62af1a41be35f210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_17edc336e8f8f93ba7e6275713ad11f0bb77500296d519b62af1a41be35f210e->leave($__internal_17edc336e8f8f93ba7e6275713ad11f0bb77500296d519b62af1a41be35f210e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_849eea93dd1c703dc63d35f31898e7cc7cb308d656caadbf3e61edf811e22b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849eea93dd1c703dc63d35f31898e7cc7cb308d656caadbf3e61edf811e22b19->enter($__internal_849eea93dd1c703dc63d35f31898e7cc7cb308d656caadbf3e61edf811e22b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_849eea93dd1c703dc63d35f31898e7cc7cb308d656caadbf3e61edf811e22b19->leave($__internal_849eea93dd1c703dc63d35f31898e7cc7cb308d656caadbf3e61edf811e22b19_prof);

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
