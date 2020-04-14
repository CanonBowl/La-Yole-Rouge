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

/* reservation/index.html.twig */
class __TwigTemplate_a1debbba1cba420eee91d8da70720f6cb264574194f5fc569222ea79ed97bd35 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

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
        echo "    <div class=\"row full-row center-align\">

        <div class=\"carousel center col l6 demi-height full-row valign-wrapper center\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 5, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 6
            echo "                <div class=\"card z-depth-2 carousel-item\">
                    <b>Réservation n°";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "</b><br>
                    Faite le ";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateHeure", [], "any", false, false, false, 8)), "html", null, true);
            echo "<br>
                    Etat réservation : ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "EtatReservation", [], "any", false, false, false, 9), "description", [], "any", false, false, false, 9), "html", null, true);
            echo "
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "                Pas de réservation
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>

        <div class=\"col l6 s12 demi-height full-row valign-wrapper\">
            <div class=\"row z-depth-2 center-align\">
            <a id=\"AjouterReservation\" style=\"color: white; width: 40vw\" class=\"red btn waves-effect waves-light z-depth-2\"><i class=\"material-icons left\">arrow_drop_down_circle</i>Faire demande de réservation</a>
            <a id=\"RetirerReservation\" style=\"color: white; width: 40vw\" class=\"red btn waves-effect waves-light z-depth-2\"><i class=\"material-icons left\">cancel</i>Retirer la réservation</a>

            <div style=\"padding: 15px; width: 40vw\" class=\"red darken-4\" id=\"Ajout\">

            </div>
            </div>
        </div>

    </div>
    <script>
        \$(document).ready(function() {

            \$('#RetirerReservation').toggle();
            \$(\"#Ajout\").slideUp();

            \$('.carousel').carousel({
                indicators: true,
            });

            \$('#AjouterReservation').click(function() {
                \$('#AjouterReservation').toggle();
                \$('#RetirerReservation').toggle();
                \$(\"#Ajout\").slideUp().load(\"AjouterReservation\", function () {
                    \$('#Ajout').slideDown();
                });
            });

            \$('#RetirerReservation').click(function() {
                \$('#AjouterReservation').toggle();
                \$('#RetirerReservation').toggle();
                \$(\"#Ajout\").slideUp();
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 14,  92 => 12,  84 => 9,  80 => 8,  76 => 7,  73 => 6,  68 => 5,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <div class=\"row full-row center-align\">

        <div class=\"carousel center col l6 demi-height full-row valign-wrapper center\">
            {%  for reservation in reservations %}
                <div class=\"card z-depth-2 carousel-item\">
                    <b>Réservation n°{{ reservation.id }}</b><br>
                    Faite le {{ reservation.DateHeure|format_datetime() }}<br>
                    Etat réservation : {{ reservation.EtatReservation.description }}
                </div>
            {% else %}
                Pas de réservation
            {% endfor %}
        </div>

        <div class=\"col l6 s12 demi-height full-row valign-wrapper\">
            <div class=\"row z-depth-2 center-align\">
            <a id=\"AjouterReservation\" style=\"color: white; width: 40vw\" class=\"red btn waves-effect waves-light z-depth-2\"><i class=\"material-icons left\">arrow_drop_down_circle</i>Faire demande de réservation</a>
            <a id=\"RetirerReservation\" style=\"color: white; width: 40vw\" class=\"red btn waves-effect waves-light z-depth-2\"><i class=\"material-icons left\">cancel</i>Retirer la réservation</a>

            <div style=\"padding: 15px; width: 40vw\" class=\"red darken-4\" id=\"Ajout\">

            </div>
            </div>
        </div>

    </div>
    <script>
        \$(document).ready(function() {

            \$('#RetirerReservation').toggle();
            \$(\"#Ajout\").slideUp();

            \$('.carousel').carousel({
                indicators: true,
            });

            \$('#AjouterReservation').click(function() {
                \$('#AjouterReservation').toggle();
                \$('#RetirerReservation').toggle();
                \$(\"#Ajout\").slideUp().load(\"AjouterReservation\", function () {
                    \$('#Ajout').slideDown();
                });
            });

            \$('#RetirerReservation').click(function() {
                \$('#AjouterReservation').toggle();
                \$('#RetirerReservation').toggle();
                \$(\"#Ajout\").slideUp();
            });
        });
    </script>

{% endblock %}
", "reservation/index.html.twig", "C:\\Users\\F Canon\\code\\web\\creperiz\\app\\templates\\reservation\\index.html.twig");
    }
}
