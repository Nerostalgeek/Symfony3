<?php

/* RasFlashAlertBundle::FlashAlert/jsAlertClose.html.twig */
class __TwigTemplate_05d8d6cce2d903d21a7057aa6e5fbef9cafa4e14da75a33a5072a8d9ff8d376a extends Twig_Template
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
        $__internal_5fdc615a79c366ab75e6901520f0ced4d4ce3bb3f811ad207259638c337eb9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdc615a79c366ab75e6901520f0ced4d4ce3bb3f811ad207259638c337eb9d8->enter($__internal_5fdc615a79c366ab75e6901520f0ced4d4ce3bb3f811ad207259638c337eb9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RasFlashAlertBundle::FlashAlert/jsAlertClose.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    // Pure JavaScript implementation for flash alerts
    var onLoad = function () {
        var elems = document.getElementById(\"ras-flash-alerts\").getElementsByTagName('button');
        for (var i in elems) {
            if ((\" \" + elems[i].className + \" \").indexOf(\"alert-close\") > -1) {
                elems[i].onclick = function () {
                    fadeout(this.parentNode);
                };
            }
        }
    }

    var fadeout = function(elem) {
        var o = 1;
        var timer = setInterval(function () {
            if (o <= 0.0) {
                elem.style.display = 'none';
                clearInterval(timer);

            }
            elem.style.opacity = o;
            elem.style.filter = 'alpha(opacity=' + o * 100 + \")\";
            o -= 0.1;
        }, 25);
    };

    if (window.attachEvent) {window.attachEvent('onload', onLoad);}
    else if (window.addEventListener) {window.addEventListener('load', onLoad, false);}
    else {document.addEventListener('load', onLoad, false);}
</script>
";
        
        $__internal_5fdc615a79c366ab75e6901520f0ced4d4ce3bb3f811ad207259638c337eb9d8->leave($__internal_5fdc615a79c366ab75e6901520f0ced4d4ce3bb3f811ad207259638c337eb9d8_prof);

    }

    public function getTemplateName()
    {
        return "RasFlashAlertBundle::FlashAlert/jsAlertClose.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    // Pure JavaScript implementation for flash alerts
    var onLoad = function () {
        var elems = document.getElementById(\"ras-flash-alerts\").getElementsByTagName('button');
        for (var i in elems) {
            if ((\" \" + elems[i].className + \" \").indexOf(\"alert-close\") > -1) {
                elems[i].onclick = function () {
                    fadeout(this.parentNode);
                };
            }
        }
    }

    var fadeout = function(elem) {
        var o = 1;
        var timer = setInterval(function () {
            if (o <= 0.0) {
                elem.style.display = 'none';
                clearInterval(timer);

            }
            elem.style.opacity = o;
            elem.style.filter = 'alpha(opacity=' + o * 100 + \")\";
            o -= 0.1;
        }, 25);
    };

    if (window.attachEvent) {window.attachEvent('onload', onLoad);}
    else if (window.addEventListener) {window.addEventListener('load', onLoad, false);}
    else {document.addEventListener('load', onLoad, false);}
</script>
", "RasFlashAlertBundle::FlashAlert/jsAlertClose.html.twig", "C:\\wamp64\\www\\symfony3\\vendor\\ras\\flash-alert-bundle\\Ras\\Bundle\\FlashAlertBundle/Resources/views/FlashAlert/jsAlertClose.html.twig");
    }
}
