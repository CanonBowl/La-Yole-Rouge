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

/* reservation/ajout.html.twig */
class __TwigTemplate_bf52ccf4d684fa1c0ec98fb34515db9692fe029da78cf66b24327892a6811bb2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'addReservation' => [$this, 'block_addReservation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/ajout.html.twig"));

        // line 1
        $this->displayBlock('addReservation', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_addReservation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addReservation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addReservation"));

        // line 2
        echo "
    <style>
        input {
            border-bottom: 1px solid white !important;
        }
        label {
            color: white;
        }
    </style>

        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["id" => "form_reservation"]]);
        echo "
        <div class=\"row\">
            <div class=\"col l6\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "Date", [], "any", false, false, false, 15), 'row');
        echo "
            </div>
            <div class=\"col l6\" id=\"some-custom-id\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Heure", [], "any", false, false, false, 18), 'row');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col l12\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "NbPersonne", [], "any", false, false, false, 23), 'row');
        echo "
            </div>
        </div>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "

    <script>
        \$(document).ready(function() {

            \$('form').on(\"submit\", function(e) {
                \$.ajax({
                    url: \"/app_login\",
                    data: this,
                    method: \"POST\",
                })
            });

            \$('#sendLogin').click(function (e) {
                e.preventDefault();
                \$.ajax({
                    url: \"/AjouterReservation\",
                    data: \$('#form_reservation').serialize(),
                    method: \"POST\",
                    success: function (data) {
                        console.log(data)
                    }
                })
            });

            \$('.datepicker').datepicker({
                firstDay: true,
                selectMonths: true,
                format: 'yyyy-mm-dd',
                showMonthAfterYear: true,
                i18n: {
                    months: [\"Janvier\", \"Février\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\", \"Août\", \"Septembre\", \"Octobre\", \"Novembre\", \"Décembre\"],
                    monthsShort: [\"Jan\", \"Fev\", \"Mar\", \"Avr\", \"Mai\", \"Juin\", \"Juil\", \"Aout\", \"Sept\", \"Oct\", \"Nov\", \"Dec\"],
                    weekdays: [\"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\"],
                    weekdaysShort: [\"Dim\", \"Lun\", \"Mar\", \"Mer\", \"Jeu\", \"Ven\", \"Sam\"],
                    weekdaysAbbrev: [\"D\", \"L\", \"M\", \"M\", \"J\", \"V\", \"S\"],
                }
            });

            \$('.timepicker').timepicker({
                twelveHour: false,
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/ajout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  95 => 23,  87 => 18,  81 => 15,  75 => 12,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block addReservation %}

    <style>
        input {
            border-bottom: 1px solid white !important;
        }
        label {
            color: white;
        }
    </style>

        {{ form_start(form, {'attr': {'id': 'form_reservation'}}) }}
        <div class=\"row\">
            <div class=\"col l6\">
                {{ form_row(form.Date) }}
            </div>
            <div class=\"col l6\" id=\"some-custom-id\">
                {{ form_row(form.Heure) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col l12\">
                {{ form_row(form.NbPersonne) }}
            </div>
        </div>
        {{ form_end(form) }}

    <script>
        \$(document).ready(function() {

            \$('form').on(\"submit\", function(e) {
                \$.ajax({
                    url: \"/app_login\",
                    data: this,
                    method: \"POST\",
                })
            });

            \$('#sendLogin').click(function (e) {
                e.preventDefault();
                \$.ajax({
                    url: \"/AjouterReservation\",
                    data: \$('#form_reservation').serialize(),
                    method: \"POST\",
                    success: function (data) {
                        console.log(data)
                    }
                })
            });

            \$('.datepicker').datepicker({
                firstDay: true,
                selectMonths: true,
                format: 'yyyy-mm-dd',
                showMonthAfterYear: true,
                i18n: {
                    months: [\"Janvier\", \"Février\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\", \"Août\", \"Septembre\", \"Octobre\", \"Novembre\", \"Décembre\"],
                    monthsShort: [\"Jan\", \"Fev\", \"Mar\", \"Avr\", \"Mai\", \"Juin\", \"Juil\", \"Aout\", \"Sept\", \"Oct\", \"Nov\", \"Dec\"],
                    weekdays: [\"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\"],
                    weekdaysShort: [\"Dim\", \"Lun\", \"Mar\", \"Mer\", \"Jeu\", \"Ven\", \"Sam\"],
                    weekdaysAbbrev: [\"D\", \"L\", \"M\", \"M\", \"J\", \"V\", \"S\"],
                }
            });

            \$('.timepicker').timepicker({
                twelveHour: false,
            });
        });
    </script>
{% endblock %}
", "reservation/ajout.html.twig", "C:\\Users\\F Canon\\code\\web\\creperiz\\templates\\reservation\\ajout.html.twig");
    }
}
