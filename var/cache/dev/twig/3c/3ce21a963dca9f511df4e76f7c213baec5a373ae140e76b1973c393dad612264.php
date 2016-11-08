<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e778e50159ea3dd9256a43b3da8323b17a24b7be4f8741cdd54cb4c9785c7e23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e14af9f492ba6ee939a0bc074618516a66b5fe2ed9999d5180ac7902fefa0446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14af9f492ba6ee939a0bc074618516a66b5fe2ed9999d5180ac7902fefa0446->enter($__internal_e14af9f492ba6ee939a0bc074618516a66b5fe2ed9999d5180ac7902fefa0446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14af9f492ba6ee939a0bc074618516a66b5fe2ed9999d5180ac7902fefa0446->leave($__internal_e14af9f492ba6ee939a0bc074618516a66b5fe2ed9999d5180ac7902fefa0446_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c28564f4102295bc91a1a074d3fac50ea70ffb94732a3de5a98e40914d8fc3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28564f4102295bc91a1a074d3fac50ea70ffb94732a3de5a98e40914d8fc3a8->enter($__internal_c28564f4102295bc91a1a074d3fac50ea70ffb94732a3de5a98e40914d8fc3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c28564f4102295bc91a1a074d3fac50ea70ffb94732a3de5a98e40914d8fc3a8->leave($__internal_c28564f4102295bc91a1a074d3fac50ea70ffb94732a3de5a98e40914d8fc3a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_afa3a310686bf2800bed6812d8b5b0f03b7d23b119a1e060a9ba17866b768307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa3a310686bf2800bed6812d8b5b0f03b7d23b119a1e060a9ba17866b768307->enter($__internal_afa3a310686bf2800bed6812d8b5b0f03b7d23b119a1e060a9ba17866b768307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_afa3a310686bf2800bed6812d8b5b0f03b7d23b119a1e060a9ba17866b768307->leave($__internal_afa3a310686bf2800bed6812d8b5b0f03b7d23b119a1e060a9ba17866b768307_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb7951ddcff5e9f27951e2de6fb3acbfee18ba0061d92c71f6743de73b8917f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7951ddcff5e9f27951e2de6fb3acbfee18ba0061d92c71f6743de73b8917f5->enter($__internal_bb7951ddcff5e9f27951e2de6fb3acbfee18ba0061d92c71f6743de73b8917f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bb7951ddcff5e9f27951e2de6fb3acbfee18ba0061d92c71f6743de73b8917f5->leave($__internal_bb7951ddcff5e9f27951e2de6fb3acbfee18ba0061d92c71f6743de73b8917f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
