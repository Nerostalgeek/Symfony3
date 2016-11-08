<?php

/* RasFlashAlertBundle::layout.html.twig */
class __TwigTemplate_48753c3e86407660c7c78a3c059113e26ee84e82ee6016d56995f77fc32f3370 extends Twig_Template
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
        $__internal_85c7ceec5214ae3689fee0b3ad6846e61b4df197c8337ee908ef57e5d9e203e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c7ceec5214ae3689fee0b3ad6846e61b4df197c8337ee908ef57e5d9e203e0->enter($__internal_85c7ceec5214ae3689fee0b3ad6846e61b4df197c8337ee908ef57e5d9e203e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RasFlashAlertBundle::layout.html.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->env->getExtension('Ras\Bundle\FlashAlertBundle\Twig\FlashAlertsExtension')->getAlertPublisher())) {
            // line 2
            echo "
    <div id=\"ras-flash-alerts\">
        ";
            // line 4
            $this->loadTemplate("RasFlashAlertBundle::FlashAlert/flashAlerts.html.twig", "RasFlashAlertBundle::layout.html.twig", 4)->display($context);
            // line 5
            echo "    </div>

    ";
            // line 7
            if ((isset($context["isAddJsAlertClose"]) ? $context["isAddJsAlertClose"] : $this->getContext($context, "isAddJsAlertClose"))) {
                // line 8
                echo "        ";
                $this->loadTemplate("RasFlashAlertBundle::FlashAlert/jsAlertClose.html.twig", "RasFlashAlertBundle::layout.html.twig", 8)->display($context);
                // line 9
                echo "    ";
            }
            // line 10
            echo "
";
        }
        
        $__internal_85c7ceec5214ae3689fee0b3ad6846e61b4df197c8337ee908ef57e5d9e203e0->leave($__internal_85c7ceec5214ae3689fee0b3ad6846e61b4df197c8337ee908ef57e5d9e203e0_prof);

    }

    public function getTemplateName()
    {
        return "RasFlashAlertBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  36 => 8,  34 => 7,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if get_alert_publisher() | length %}

    <div id=\"ras-flash-alerts\">
        {% include 'RasFlashAlertBundle::FlashAlert/flashAlerts.html.twig' %}
    </div>

    {% if isAddJsAlertClose %}
        {% include 'RasFlashAlertBundle::FlashAlert/jsAlertClose.html.twig' %}
    {% endif %}

{% endif %}", "RasFlashAlertBundle::layout.html.twig", "C:\\wamp64\\www\\symfony3\\vendor\\ras\\flash-alert-bundle\\Ras\\Bundle\\FlashAlertBundle/Resources/views/layout.html.twig");
    }
}
