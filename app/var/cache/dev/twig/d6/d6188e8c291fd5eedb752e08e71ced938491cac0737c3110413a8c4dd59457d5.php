<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* reservation/admin/gerer.html.twig */
class __TwigTemplate_53a31c0567abf01314b63ceccb9249f6b89fb793ce3deb61edfde08e9350b064 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/admin/gerer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/admin/gerer.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <div class=\"row\">
        <div class=\"col l6 center\">
            <div class=\"card\" style=\"height: 30vh\">
                <div class=\"row\">
                    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["id" => "formGererRes"]]);
        echo "
                    <div class=\"col l6\">
                        <div class=\"row\">
                            Demandeur : <a id=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "Nom", [], "any", false, false, false, 9), "html", null, true);
        echo "</a>
                        </div>
                        <div class=\"row\">
                            Pour le ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 12, $this->source); })()), "DateHeure", [], "any", false, false, false, 12)), "html", null, true);
        echo "
                        </div>
                        <div class=\"row\">
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "EtatReservation", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "browser-default"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"col l6\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "Commentaire", [], "any", false, false, false, 19), 'row');
        echo "
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "Envoyer", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "sendGererRes"]]);
        echo "
                        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col\">
            <div class=\"row\" id=\"spaceInfoUser\">

            </div>
        </div>

    </div>
    <script>
        \$(document).ready(function() {

            \$('#";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "').click(function() {
                \$(\"#spaceInfoUser\").toggle('slide').load(\"Admin/Informations/";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\", function () {
                    \$('#spaceInfoUser').toggle('slide');
                });
            });

            \$('.sendGererRes').click(function (e) {
                e.preventDefault();
                \$.ajax({
                    url: \"/Admin/Reservations/Gerer/";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\",
                    data: \$('#formGererRes').serialize(),
                    method: \"POST\",
                    success: function (data) {
                        const jData = JSON.parse(data);
                        if (jData['Success']) {
                            //\$('.modal').modal('open');
                            M.toast({html: \"L'action a bien été prise en compte.\"})
                        }
                    },
                    error: function() {
                        M.toast({html: \"Ceci est un fail.\"})
                    }
                })
            });

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/admin/gerer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  127 => 38,  123 => 37,  104 => 21,  100 => 20,  96 => 19,  89 => 15,  83 => 12,  75 => 9,  69 => 6,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <div class=\"row\">
        <div class=\"col l6 center\">
            <div class=\"card\" style=\"height: 30vh\">
                <div class=\"row\">
                    {{ form_start(form, {'attr': {'id': 'formGererRes'}}) }}
                    <div class=\"col l6\">
                        <div class=\"row\">
                            Demandeur : <a id=\"{{ reservations.user.id }}\">{{ reservations.user.Nom }}</a>
                        </div>
                        <div class=\"row\">
                            Pour le {{ reservations.DateHeure|format_datetime() }}
                        </div>
                        <div class=\"row\">
                            {{ form_row(form.EtatReservation, { 'attr': {'class': 'browser-default'} }) }}
                        </div>
                    </div>
                    <div class=\"col l6\">
                        {{ form_row(form.Commentaire) }}
                        {{ form_row(form.Envoyer, {'attr': {'class': 'sendGererRes'}}) }}
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col\">
            <div class=\"row\" id=\"spaceInfoUser\">

            </div>
        </div>

    </div>
    <script>
        \$(document).ready(function() {

            \$('#{{ reservations.user.id }}').click(function() {
                \$(\"#spaceInfoUser\").toggle('slide').load(\"Admin/Informations/{{ reservations.user.id }}\", function () {
                    \$('#spaceInfoUser').toggle('slide');
                });
            });

            \$('.sendGererRes').click(function (e) {
                e.preventDefault();
                \$.ajax({
                    url: \"/Admin/Reservations/Gerer/{{ reservations.id }}\",
                    data: \$('#formGererRes').serialize(),
                    method: \"POST\",
                    success: function (data) {
                        const jData = JSON.parse(data);
                        if (jData['Success']) {
                            //\$('.modal').modal('open');
                            M.toast({html: \"L'action a bien été prise en compte.\"})
                        }
                    },
                    error: function() {
                        M.toast({html: \"Ceci est un fail.\"})
                    }
                })
            });

        });
    </script>
{% endblock %}", "reservation/admin/gerer.html.twig", "C:\\Users\\F Canon\\code\\web\\creperiz\\app\\templates\\reservation\\admin\\gerer.html.twig");
    }
}
