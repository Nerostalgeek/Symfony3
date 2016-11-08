<?php

/* OCCoreBundle:Default:index.html.twig */
class __TwigTemplate_4836dd66404918802e18693ff2c530d38ef1d63573fa7dc427420a3e29f6c327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@OCCore/base.html.twig", "OCCoreBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@OCCore/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80851cbbaccbccf657258b45a259dbf0dbd003c07b04f932949affb320cf037d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80851cbbaccbccf657258b45a259dbf0dbd003c07b04f932949affb320cf037d->enter($__internal_80851cbbaccbccf657258b45a259dbf0dbd003c07b04f932949affb320cf037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80851cbbaccbccf657258b45a259dbf0dbd003c07b04f932949affb320cf037d->leave($__internal_80851cbbaccbccf657258b45a259dbf0dbd003c07b04f932949affb320cf037d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5510315cb8235984245afa3baa7c8a20b11f95597ad3bc1b20c12e952e895487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5510315cb8235984245afa3baa7c8a20b11f95597ad3bc1b20c12e952e895487->enter($__internal_5510315cb8235984245afa3baa7c8a20b11f95597ad3bc1b20c12e952e895487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCCoreBundle:Default:index.html.twig"));

        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Ras\Bundle\FlashAlertBundle\Twig\FlashAlertsExtension')->renderFlashAlerts();
        echo "

    <h1>Welcome to this beautiful website with no CSS yet !</h1>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 10
            echo "        ";
            if ((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts"))) {
                // line 11
                echo "

            <p>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
                echo "</p>
            <p>";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array())), "html", null, true);
                echo "</p>
            <p>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
                echo "</p>
            <p>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
                echo "</p>

        ";
            }
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        
        $__internal_5510315cb8235984245afa3baa7c8a20b11f95597ad3bc1b20c12e952e895487->leave($__internal_5510315cb8235984245afa3baa7c8a20b11f95597ad3bc1b20c12e952e895487_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  79 => 19,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 11,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@OCCore/base.html.twig' %}

{% block body %}

    {{ render_flash_alerts() }}

    <h1>Welcome to this beautiful website with no CSS yet !</h1>

    {% for advert in adverts %}
        {% if  adverts %}


            <p>{{ advert.title }}</p>
            <p>{{ advert.date|date }}</p>
            <p>{{ advert.author }}</p>
            <p>{{ advert.content }}</p>

        {% endif %}
    {% endfor %}

{% endblock %}", "OCCoreBundle:Default:index.html.twig", "C:\\wamp64\\www\\symfony3\\src\\OC\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}
