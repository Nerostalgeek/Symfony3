<?php

/* @Core/base.html.twig */
class __TwigTemplate_1390aff967dce362b182db59d29f072233a751ae604176f1d931c3a4ab282d6b extends Twig_Template
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
        $__internal_a75705256a87e640aeb7a6782f0c4e26f2ed641fdca9fe3ab310474acc11914e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75705256a87e640aeb7a6782f0c4e26f2ed641fdca9fe3ab310474acc11914e->enter($__internal_a75705256a87e640aeb7a6782f0c4e26f2ed641fdca9fe3ab310474acc11914e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Core/base.html.twig"));

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
        
        $__internal_a75705256a87e640aeb7a6782f0c4e26f2ed641fdca9fe3ab310474acc11914e->leave($__internal_a75705256a87e640aeb7a6782f0c4e26f2ed641fdca9fe3ab310474acc11914e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_25ff1ab06b3fac3b92b386da11011390f424cd833b3d8dc39a5ce3d95f59e0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ff1ab06b3fac3b92b386da11011390f424cd833b3d8dc39a5ce3d95f59e0ca->enter($__internal_25ff1ab06b3fac3b92b386da11011390f424cd833b3d8dc39a5ce3d95f59e0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/base.html.twig"));

        echo "Welcome!";
        
        $__internal_25ff1ab06b3fac3b92b386da11011390f424cd833b3d8dc39a5ce3d95f59e0ca->leave($__internal_25ff1ab06b3fac3b92b386da11011390f424cd833b3d8dc39a5ce3d95f59e0ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc21ecaab49c4f16d5e04a931a0faabca29d845bd0ad8538d0f01993d1c1ab7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc21ecaab49c4f16d5e04a931a0faabca29d845bd0ad8538d0f01993d1c1ab7b->enter($__internal_cc21ecaab49c4f16d5e04a931a0faabca29d845bd0ad8538d0f01993d1c1ab7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/base.html.twig"));

        
        $__internal_cc21ecaab49c4f16d5e04a931a0faabca29d845bd0ad8538d0f01993d1c1ab7b->leave($__internal_cc21ecaab49c4f16d5e04a931a0faabca29d845bd0ad8538d0f01993d1c1ab7b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b7a80d0239dc9b1568969bc3401d1ba807532fd588f091d9fd54da249734a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7a80d0239dc9b1568969bc3401d1ba807532fd588f091d9fd54da249734a4c->enter($__internal_4b7a80d0239dc9b1568969bc3401d1ba807532fd588f091d9fd54da249734a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/base.html.twig"));

        
        $__internal_4b7a80d0239dc9b1568969bc3401d1ba807532fd588f091d9fd54da249734a4c->leave($__internal_4b7a80d0239dc9b1568969bc3401d1ba807532fd588f091d9fd54da249734a4c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fce82a81f99944feca9584d449e1548b848cc79278bad6610ae47f5f10131399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce82a81f99944feca9584d449e1548b848cc79278bad6610ae47f5f10131399->enter($__internal_fce82a81f99944feca9584d449e1548b848cc79278bad6610ae47f5f10131399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/base.html.twig"));

        
        $__internal_fce82a81f99944feca9584d449e1548b848cc79278bad6610ae47f5f10131399->leave($__internal_fce82a81f99944feca9584d449e1548b848cc79278bad6610ae47f5f10131399_prof);

    }

    public function getTemplateName()
    {
        return "@Core/base.html.twig";
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
", "@Core/base.html.twig", "C:\\wamp64\\www\\symfony3\\src\\CoreBundle\\Resources\\views\\base.html.twig");
    }
}
