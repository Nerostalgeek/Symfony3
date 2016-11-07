<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_df95cf3a3c270c1943a3addc581ef3cd6b9104ea6bb13d7b8b3b4ec4fd55f9c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OCPlatformBundle:Advert:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c12bfe2fb6bb3595a1949b44198a4f69533d7a8eafe763960623edbba60faa10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12bfe2fb6bb3595a1949b44198a4f69533d7a8eafe763960623edbba60faa10->enter($__internal_c12bfe2fb6bb3595a1949b44198a4f69533d7a8eafe763960623edbba60faa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c12bfe2fb6bb3595a1949b44198a4f69533d7a8eafe763960623edbba60faa10->leave($__internal_c12bfe2fb6bb3595a1949b44198a4f69533d7a8eafe763960623edbba60faa10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4343dd8d1a8d7c4fc9f67453b78e10ea938f079418f8f5ba17be521677837c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4343dd8d1a8d7c4fc9f67453b78e10ea938f079418f8f5ba17be521677837c6->enter($__internal_a4343dd8d1a8d7c4fc9f67453b78e10ea938f079418f8f5ba17be521677837c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:view.html.twig"));

        echo "OCPlatformBundle:Advert:view";
        
        $__internal_a4343dd8d1a8d7c4fc9f67453b78e10ea938f079418f8f5ba17be521677837c6->leave($__internal_a4343dd8d1a8d7c4fc9f67453b78e10ea938f079418f8f5ba17be521677837c6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54d10fc0f2875e05e0ab6e62f7f8cb61e099eef3073c8773c85a8cdd75f07adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d10fc0f2875e05e0ab6e62f7f8cb61e099eef3073c8773c85a8cdd75f07adf->enter($__internal_54d10fc0f2875e05e0ab6e62f7f8cb61e099eef3073c8773c85a8cdd75f07adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:view.html.twig"));

        // line 6
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 7
            echo "        <p>
            Cette annonce est parue dans les catégories suivantes :
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 11
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </p>
    ";
        }
        // line 14
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h1>
    <h3> par ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "
    </h3>

    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "</p>
    ";
        // line 19
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 20
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listApplications"]) ? $context["listApplications"] : $this->getContext($context, "listApplications")));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 24
            echo "        <div>
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "author", array()), "html", null, true);
            echo "
            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "content", array()), "html", null, true);
            echo "
            ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["application"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 31
            echo "        <div>
            Cette annonce requiert les compétences suivantes :
            <ul>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 35
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </ul>
        </div>
    ";
        }
        
        $__internal_54d10fc0f2875e05e0ab6e62f7f8cb61e099eef3073c8773c85a8cdd75f07adf->leave($__internal_54d10fc0f2875e05e0ab6e62f7f8cb61e099eef3073c8773c85a8cdd75f07adf_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 37,  167 => 35,  163 => 34,  158 => 31,  155 => 30,  146 => 27,  142 => 26,  138 => 25,  135 => 24,  131 => 23,  128 => 22,  120 => 20,  118 => 19,  114 => 18,  106 => 15,  101 => 14,  97 => 12,  83 => 11,  77 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}OCPlatformBundle:Advert:view{% endblock %}

{% block body %}
    {% if not advert.categories.empty %}
        <p>
            Cette annonce est parue dans les catégories suivantes :
            {% for category in advert.categories %}
                {{ category.name }}{% if not loop.last %}, {% endif %}
            {% endfor %}
        </p>
    {% endif %}
    <h1>{{ advert.title }}</h1>
    <h3> par {{ advert.author }} le {{ advert.date|date('d/m/Y') }}
    </h3>

    <p>{{ advert.content }}</p>
    {% if advert.image is not null %}
        <img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\">
    {% endif %}

    {% for application in listApplications %}
        <div>
            {{ application.author }}
            {{ application.content }}
            {{ application.date|date('d/m/Y') }}
        </div>
    {% endfor %}
    {% if listAdvertSkills|length > 0 %}
        <div>
            Cette annonce requiert les compétences suivantes :
            <ul>
                {% for advertSkill in listAdvertSkills %}
                    <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}
{% endblock %}
", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp64\\www\\symfony3\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
