<?php

/* RasFlashAlertBundle::FlashAlert/flashAlerts.html.twig */
class __TwigTemplate_c31778be3bd15a20bdc09d7cd4eff9c8949a5c9c427b01c05fe9181f9b01088a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df3e38ecc1a02572929c78af7870af7fa77a1be7ad29e03dbf8cd7ca5e8d614d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3e38ecc1a02572929c78af7870af7fa77a1be7ad29e03dbf8cd7ca5e8d614d->enter($__internal_df3e38ecc1a02572929c78af7870af7fa77a1be7ad29e03dbf8cd7ca5e8d614d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RasFlashAlertBundle::FlashAlert/flashAlerts.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertPublisher"]) ? $context["alertPublisher"] : $this->getContext($context, "alertPublisher")));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 3
            echo "        <div
                ";
            // line 4
            if ((isset($context["isAddStyles"]) ? $context["isAddStyles"] : $this->getContext($context, "isAddStyles"))) {
                // line 5
                echo "                    style=\"
                            padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;
                            padding-right: 35px;

                    ";
                // line 9
                if (($this->getAttribute($context["alert"], "type", array()) == "success")) {
                    // line 10
                    echo "                            color: #3c763d; background-color: #b9df90; border-color: #a0d468;
                    ";
                } elseif (($this->getAttribute(                // line 11
$context["alert"], "type", array()) == "error")) {
                    // line 12
                    echo "                            color: #a94442; background-color: #f2838f; border-color: #ed5565;
                    ";
                } elseif (($this->getAttribute(                // line 13
$context["alert"], "type", array()) == "warning")) {
                    // line 14
                    echo "                            color: #8a6d3b; background-color: #ffdd87; border-color: #ffce54;
                    ";
                } elseif (($this->getAttribute(                // line 15
$context["alert"], "type", array()) == "info")) {
                    // line 16
                    echo "                            color: #31708f; background-color: #7cd1ef; border-color: #4fc1e9;
                    ";
                }
                // line 18
                echo "                            \"
                ";
            } else {
                // line 20
                echo "                    class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "type", array()), "html", null, true);
                echo " alert-dismissable\"
                ";
            }
            // line 22
            echo "                >
            <button type=\"button\" class=\"alert-close\"
                    ";
            // line 24
            if ((isset($context["isAddStyles"]) ? $context["isAddStyles"] : $this->getContext($context, "isAddStyles"))) {
                // line 25
                echo "                        style=\"
                            position: relative; top: -2px; right: -21px; float: right; font-size: 21px; font-weight: bold;
                            line-height: 1; color: #000; text-shadow: 0 1px 0 #fff; filter: alpha(opacity=20);
                            opacity: .2; -webkit-appearance: none; padding: 0; cursor: pointer;
                            background: transparent; border: 0;
                            \"
                        onmouseover=\"
                            this.style.color            = 'black';
                            this.style.textDecoration   = 'none';
                            this.style.cursor           = 'pointer'
                            this.style.filter           = 'alpha(opacity=50)';
                            this.style.opacity          = '.5';
                            \"
                        onmouseout=\"
                            this.style.filter           = 'alpha(opacity=20)';
                            this.style.opacity          = '.2';
                            \"
                    ";
            }
            // line 43
            echo "                    >
                &times;
            </button>
            ";
            // line 46
            echo $this->getAttribute($context["alert"], "message", array());
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_df3e38ecc1a02572929c78af7870af7fa77a1be7ad29e03dbf8cd7ca5e8d614d->leave($__internal_df3e38ecc1a02572929c78af7870af7fa77a1be7ad29e03dbf8cd7ca5e8d614d_prof);

    }

    public function getTemplateName()
    {
        return "RasFlashAlertBundle::FlashAlert/flashAlerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 46,  97 => 43,  77 => 25,  75 => 24,  71 => 22,  65 => 20,  61 => 18,  57 => 16,  55 => 15,  52 => 14,  50 => 13,  47 => 12,  45 => 11,  42 => 10,  40 => 9,  34 => 5,  32 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
    {% for alert in alertPublisher %}
        <div
                {% if isAddStyles %}
                    style=\"
                            padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;
                            padding-right: 35px;

                    {% if alert.type == \"success\" %}
                            color: #3c763d; background-color: #b9df90; border-color: #a0d468;
                    {% elseif alert.type == \"error\" %}
                            color: #a94442; background-color: #f2838f; border-color: #ed5565;
                    {% elseif alert.type == \"warning\" %}
                            color: #8a6d3b; background-color: #ffdd87; border-color: #ffce54;
                    {% elseif alert.type == \"info\" %}
                            color: #31708f; background-color: #7cd1ef; border-color: #4fc1e9;
                    {% endif %}
                            \"
                {% else %}
                    class=\"alert alert-{{ alert.type }} alert-dismissable\"
                {% endif %}
                >
            <button type=\"button\" class=\"alert-close\"
                    {% if isAddStyles %}
                        style=\"
                            position: relative; top: -2px; right: -21px; float: right; font-size: 21px; font-weight: bold;
                            line-height: 1; color: #000; text-shadow: 0 1px 0 #fff; filter: alpha(opacity=20);
                            opacity: .2; -webkit-appearance: none; padding: 0; cursor: pointer;
                            background: transparent; border: 0;
                            \"
                        onmouseover=\"
                            this.style.color            = 'black';
                            this.style.textDecoration   = 'none';
                            this.style.cursor           = 'pointer'
                            this.style.filter           = 'alpha(opacity=50)';
                            this.style.opacity          = '.5';
                            \"
                        onmouseout=\"
                            this.style.filter           = 'alpha(opacity=20)';
                            this.style.opacity          = '.2';
                            \"
                    {% endif %}
                    >
                &times;
            </button>
            {{ alert.message | raw  }}
        </div>
    {% endfor %}
{% endspaceless %}", "RasFlashAlertBundle::FlashAlert/flashAlerts.html.twig", "C:\\wamp64\\www\\symfony3\\vendor\\ras\\flash-alert-bundle\\Ras\\Bundle\\FlashAlertBundle/Resources/views/FlashAlert/flashAlerts.html.twig");
    }
}
