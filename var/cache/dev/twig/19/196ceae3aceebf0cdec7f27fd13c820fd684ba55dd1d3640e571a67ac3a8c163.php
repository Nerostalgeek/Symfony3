<?php

/* OCCoreBundle::base.html.twig */
class __TwigTemplate_f5d6cd91e1ce94f4d8c0624f63f42121671f180d77504a353ff4aaf00a06db15 extends Twig_Template
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
        $__internal_d9451e432c66fd48b5009940c0b4e10a3bd73e0034d461e2e070178392858165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9451e432c66fd48b5009940c0b4e10a3bd73e0034d461e2e070178392858165->enter($__internal_d9451e432c66fd48b5009940c0b4e10a3bd73e0034d461e2e070178392858165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::base.html.twig"));

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
        
        $__internal_d9451e432c66fd48b5009940c0b4e10a3bd73e0034d461e2e070178392858165->leave($__internal_d9451e432c66fd48b5009940c0b4e10a3bd73e0034d461e2e070178392858165_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_732626b29de78ee803164b8b5fe21cf4698a163efe0363474246e61fdead8056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732626b29de78ee803164b8b5fe21cf4698a163efe0363474246e61fdead8056->enter($__internal_732626b29de78ee803164b8b5fe21cf4698a163efe0363474246e61fdead8056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCCoreBundle::base.html.twig"));

        echo "Welcome!";
        
        $__internal_732626b29de78ee803164b8b5fe21cf4698a163efe0363474246e61fdead8056->leave($__internal_732626b29de78ee803164b8b5fe21cf4698a163efe0363474246e61fdead8056_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f74fb645bd0be93477a70c361a0a738e2dbb560c97719fdb68db5abd957c311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f74fb645bd0be93477a70c361a0a738e2dbb560c97719fdb68db5abd957c311->enter($__internal_0f74fb645bd0be93477a70c361a0a738e2dbb560c97719fdb68db5abd957c311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCCoreBundle::base.html.twig"));

        
        $__internal_0f74fb645bd0be93477a70c361a0a738e2dbb560c97719fdb68db5abd957c311->leave($__internal_0f74fb645bd0be93477a70c361a0a738e2dbb560c97719fdb68db5abd957c311_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f2ab90bf7731c618bd5aaaac85cfa7532338144df6a71f43fe74ab1d0dad459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2ab90bf7731c618bd5aaaac85cfa7532338144df6a71f43fe74ab1d0dad459->enter($__internal_2f2ab90bf7731c618bd5aaaac85cfa7532338144df6a71f43fe74ab1d0dad459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCCoreBundle::base.html.twig"));

        
        $__internal_2f2ab90bf7731c618bd5aaaac85cfa7532338144df6a71f43fe74ab1d0dad459->leave($__internal_2f2ab90bf7731c618bd5aaaac85cfa7532338144df6a71f43fe74ab1d0dad459_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8646924c2fc9098568b50df2a6acd6168eee83f44f63351769cc8bf91e93566f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8646924c2fc9098568b50df2a6acd6168eee83f44f63351769cc8bf91e93566f->enter($__internal_8646924c2fc9098568b50df2a6acd6168eee83f44f63351769cc8bf91e93566f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCCoreBundle::base.html.twig"));

        
        $__internal_8646924c2fc9098568b50df2a6acd6168eee83f44f63351769cc8bf91e93566f->leave($__internal_8646924c2fc9098568b50df2a6acd6168eee83f44f63351769cc8bf91e93566f_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::base.html.twig";
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
", "OCCoreBundle::base.html.twig", "C:\\wamp64\\www\\symfony3\\src\\OC\\CoreBundle/Resources/views/base.html.twig");
    }
}
