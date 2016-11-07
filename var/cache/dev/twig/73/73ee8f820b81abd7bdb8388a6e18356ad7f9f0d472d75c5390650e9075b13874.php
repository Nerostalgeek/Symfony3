<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_32d0c7bff2df62425f60d7a234a01dc05e624786b70e47ab883aeae2ef7557b0 extends Twig_Template
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
        $__internal_186fb76847b12fed8fe0b609925bcde049592d58c11a704a000e4db1bd907a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186fb76847b12fed8fe0b609925bcde049592d58c11a704a000e4db1bd907a9a->enter($__internal_186fb76847b12fed8fe0b609925bcde049592d58c11a704a000e4db1bd907a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_186fb76847b12fed8fe0b609925bcde049592d58c11a704a000e4db1bd907a9a->leave($__internal_186fb76847b12fed8fe0b609925bcde049592d58c11a704a000e4db1bd907a9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0fe4b66879d853981e9ba6e86165ea9cf8e2742592f9bd7f581cff29e1d79a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe4b66879d853981e9ba6e86165ea9cf8e2742592f9bd7f581cff29e1d79a97->enter($__internal_0fe4b66879d853981e9ba6e86165ea9cf8e2742592f9bd7f581cff29e1d79a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0fe4b66879d853981e9ba6e86165ea9cf8e2742592f9bd7f581cff29e1d79a97->leave($__internal_0fe4b66879d853981e9ba6e86165ea9cf8e2742592f9bd7f581cff29e1d79a97_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b9c02f6693632523a730e97375cffd9248bd8cb6e2c1c628e8ae99b96703c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9c02f6693632523a730e97375cffd9248bd8cb6e2c1c628e8ae99b96703c86->enter($__internal_5b9c02f6693632523a730e97375cffd9248bd8cb6e2c1c628e8ae99b96703c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5b9c02f6693632523a730e97375cffd9248bd8cb6e2c1c628e8ae99b96703c86->leave($__internal_5b9c02f6693632523a730e97375cffd9248bd8cb6e2c1c628e8ae99b96703c86_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e05706cf20384d19c4d087155fa6ef852dfe69acbe7fc3a86374f47733bf6e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05706cf20384d19c4d087155fa6ef852dfe69acbe7fc3a86374f47733bf6e15->enter($__internal_e05706cf20384d19c4d087155fa6ef852dfe69acbe7fc3a86374f47733bf6e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e05706cf20384d19c4d087155fa6ef852dfe69acbe7fc3a86374f47733bf6e15->leave($__internal_e05706cf20384d19c4d087155fa6ef852dfe69acbe7fc3a86374f47733bf6e15_prof);

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
