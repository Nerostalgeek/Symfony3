<?php

/* @OCCore/base.html.twig */
class __TwigTemplate_6f61ca660fee320cbe0cd839a55d7a5107e62649dad4f89c4c7ce7a95b29ad37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d1d3b6e35657316d040a03b833e3655a6f3e11ee370bfdf2796f8cd8a00cdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1d3b6e35657316d040a03b833e3655a6f3e11ee370bfdf2796f8cd8a00cdae->enter($__internal_1d1d3b6e35657316d040a03b833e3655a6f3e11ee370bfdf2796f8cd8a00cdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1d1d3b6e35657316d040a03b833e3655a6f3e11ee370bfdf2796f8cd8a00cdae->leave($__internal_1d1d3b6e35657316d040a03b833e3655a6f3e11ee370bfdf2796f8cd8a00cdae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_513792bf8c97620f85ebac980520575d29d0a8bf9a5638faaf049f05a9e4cde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513792bf8c97620f85ebac980520575d29d0a8bf9a5638faaf049f05a9e4cde1->enter($__internal_513792bf8c97620f85ebac980520575d29d0a8bf9a5638faaf049f05a9e4cde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCCore/base.html.twig"));

        echo "Welcome!";
        
        $__internal_513792bf8c97620f85ebac980520575d29d0a8bf9a5638faaf049f05a9e4cde1->leave($__internal_513792bf8c97620f85ebac980520575d29d0a8bf9a5638faaf049f05a9e4cde1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdb1014380eb1668c9df51c7e9087d5d0f6bcea424f222c411f24e041b4fb350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb1014380eb1668c9df51c7e9087d5d0f6bcea424f222c411f24e041b4fb350->enter($__internal_bdb1014380eb1668c9df51c7e9087d5d0f6bcea424f222c411f24e041b4fb350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCCore/base.html.twig"));

        
        $__internal_bdb1014380eb1668c9df51c7e9087d5d0f6bcea424f222c411f24e041b4fb350->leave($__internal_bdb1014380eb1668c9df51c7e9087d5d0f6bcea424f222c411f24e041b4fb350_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c22771cf0a02679b30f96beac8eeb1a50bfd52531e04e30434757f3523aced94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22771cf0a02679b30f96beac8eeb1a50bfd52531e04e30434757f3523aced94->enter($__internal_c22771cf0a02679b30f96beac8eeb1a50bfd52531e04e30434757f3523aced94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCCore/base.html.twig"));

        
        $__internal_c22771cf0a02679b30f96beac8eeb1a50bfd52531e04e30434757f3523aced94->leave($__internal_c22771cf0a02679b30f96beac8eeb1a50bfd52531e04e30434757f3523aced94_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ecceae93b240273da4e0f7b926982640fe898a5a4d44be04d3b5922bdd08c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecceae93b240273da4e0f7b926982640fe898a5a4d44be04d3b5922bdd08c98->enter($__internal_9ecceae93b240273da4e0f7b926982640fe898a5a4d44be04d3b5922bdd08c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCCore/base.html.twig"));

        
        $__internal_9ecceae93b240273da4e0f7b926982640fe898a5a4d44be04d3b5922bdd08c98->leave($__internal_9ecceae93b240273da4e0f7b926982640fe898a5a4d44be04d3b5922bdd08c98_prof);

    }

    public function getTemplateName()
    {
        return "@OCCore/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "@OCCore/base.html.twig", "C:\\wamp64\\www\\symfony3\\src\\OC\\CoreBundle\\Resources\\views\\base.html.twig");
    }
}
