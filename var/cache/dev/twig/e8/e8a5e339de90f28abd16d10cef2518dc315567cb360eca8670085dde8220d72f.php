<?php

/* ::base.html.twig */
class __TwigTemplate_62fc29738840030535912cac77656f9f46ff6093ca17c37d95293e79b625f7cf extends Twig_Template
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
        $__internal_3fa00a788fdc2cd7fa0b0213df0f0b960e47bf59cc6b6f90965402373937924b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa00a788fdc2cd7fa0b0213df0f0b960e47bf59cc6b6f90965402373937924b->enter($__internal_3fa00a788fdc2cd7fa0b0213df0f0b960e47bf59cc6b6f90965402373937924b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3fa00a788fdc2cd7fa0b0213df0f0b960e47bf59cc6b6f90965402373937924b->leave($__internal_3fa00a788fdc2cd7fa0b0213df0f0b960e47bf59cc6b6f90965402373937924b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_04a32c21bbdb2776f12c102790286850c6633f3bb0b028b7f48a393c38739b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a32c21bbdb2776f12c102790286850c6633f3bb0b028b7f48a393c38739b6d->enter($__internal_04a32c21bbdb2776f12c102790286850c6633f3bb0b028b7f48a393c38739b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_04a32c21bbdb2776f12c102790286850c6633f3bb0b028b7f48a393c38739b6d->leave($__internal_04a32c21bbdb2776f12c102790286850c6633f3bb0b028b7f48a393c38739b6d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f435e80da8d2fa84c29ba5407a1ff9e84d08885c29baff564610d2e3cf03bc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f435e80da8d2fa84c29ba5407a1ff9e84d08885c29baff564610d2e3cf03bc62->enter($__internal_f435e80da8d2fa84c29ba5407a1ff9e84d08885c29baff564610d2e3cf03bc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_f435e80da8d2fa84c29ba5407a1ff9e84d08885c29baff564610d2e3cf03bc62->leave($__internal_f435e80da8d2fa84c29ba5407a1ff9e84d08885c29baff564610d2e3cf03bc62_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fdf4be14643817da3b0ab00bb7fd7fad5724e12aecff189aa34e0b9d617ea9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdf4be14643817da3b0ab00bb7fd7fad5724e12aecff189aa34e0b9d617ea9a->enter($__internal_1fdf4be14643817da3b0ab00bb7fd7fad5724e12aecff189aa34e0b9d617ea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_1fdf4be14643817da3b0ab00bb7fd7fad5724e12aecff189aa34e0b9d617ea9a->leave($__internal_1fdf4be14643817da3b0ab00bb7fd7fad5724e12aecff189aa34e0b9d617ea9a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_031bbd38d578380928e34efbfc67dc239a267ae0f511bc83163af3c880437c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031bbd38d578380928e34efbfc67dc239a267ae0f511bc83163af3c880437c8c->enter($__internal_031bbd38d578380928e34efbfc67dc239a267ae0f511bc83163af3c880437c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_031bbd38d578380928e34efbfc67dc239a267ae0f511bc83163af3c880437c8c->leave($__internal_031bbd38d578380928e34efbfc67dc239a267ae0f511bc83163af3c880437c8c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\symfony3\\app/Resources\\views/base.html.twig");
    }
}
