<?php

/* @Core/base.html.twig */
class __TwigTemplate_5a50aa67e103f5e68f4d2c1e32e42e3ce8a533d534a285d2ed340d8d17db0a53 extends Twig_Template
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
        $__internal_9a5d050270a2d784fa456ea313a5adf2a23669dfb3a1214f097df2dd08885899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5d050270a2d784fa456ea313a5adf2a23669dfb3a1214f097df2dd08885899->enter($__internal_9a5d050270a2d784fa456ea313a5adf2a23669dfb3a1214f097df2dd08885899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Core/base.html.twig"));

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
        
        $__internal_9a5d050270a2d784fa456ea313a5adf2a23669dfb3a1214f097df2dd08885899->leave($__internal_9a5d050270a2d784fa456ea313a5adf2a23669dfb3a1214f097df2dd08885899_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dc3b4a2c8967554a8a163996905cfe1cec6c3c6e5767f940aadf1ba8b4d2bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc3b4a2c8967554a8a163996905cfe1cec6c3c6e5767f940aadf1ba8b4d2bcd->enter($__internal_9dc3b4a2c8967554a8a163996905cfe1cec6c3c6e5767f940aadf1ba8b4d2bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/base.html.twig"));

        echo "Welcome!";
        
        $__internal_9dc3b4a2c8967554a8a163996905cfe1cec6c3c6e5767f940aadf1ba8b4d2bcd->leave($__internal_9dc3b4a2c8967554a8a163996905cfe1cec6c3c6e5767f940aadf1ba8b4d2bcd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3bb0bc91fe841c9b8daa681b4500d75d7a5532f37d776db0dd7fec06364a9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bb0bc91fe841c9b8daa681b4500d75d7a5532f37d776db0dd7fec06364a9f0->enter($__internal_f3bb0bc91fe841c9b8daa681b4500d75d7a5532f37d776db0dd7fec06364a9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/base.html.twig"));

        
        $__internal_f3bb0bc91fe841c9b8daa681b4500d75d7a5532f37d776db0dd7fec06364a9f0->leave($__internal_f3bb0bc91fe841c9b8daa681b4500d75d7a5532f37d776db0dd7fec06364a9f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b4dcfe106c8c46a2da5a01334ac6b9eedacfb30b8e28596cc1244f867f8ff53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4dcfe106c8c46a2da5a01334ac6b9eedacfb30b8e28596cc1244f867f8ff53->enter($__internal_4b4dcfe106c8c46a2da5a01334ac6b9eedacfb30b8e28596cc1244f867f8ff53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/base.html.twig"));

        
        $__internal_4b4dcfe106c8c46a2da5a01334ac6b9eedacfb30b8e28596cc1244f867f8ff53->leave($__internal_4b4dcfe106c8c46a2da5a01334ac6b9eedacfb30b8e28596cc1244f867f8ff53_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ae585525be9cd3d5bbe4eadafc79379029893cf4d05af5d90b1be0c9263d748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae585525be9cd3d5bbe4eadafc79379029893cf4d05af5d90b1be0c9263d748->enter($__internal_7ae585525be9cd3d5bbe4eadafc79379029893cf4d05af5d90b1be0c9263d748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/base.html.twig"));

        
        $__internal_7ae585525be9cd3d5bbe4eadafc79379029893cf4d05af5d90b1be0c9263d748->leave($__internal_7ae585525be9cd3d5bbe4eadafc79379029893cf4d05af5d90b1be0c9263d748_prof);

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
