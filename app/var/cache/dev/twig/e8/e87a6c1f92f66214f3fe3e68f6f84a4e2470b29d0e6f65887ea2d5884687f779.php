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

/* reservation/admin/liste_reservations.html.twig */
class __TwigTemplate_4992ffff4f14846fc1be46632a1dea865975314ab3f05385eac7663985720292 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/admin/liste_reservations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/admin/liste_reservations.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 2
            echo "    <div style=\"padding: 15px; height: 35vh; display: inline-block;\" class=\"z-depth-2 hoverable carte\" onclick=\"gerer_res(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 2), "html", null, true);
            echo ")\">
        ";
            // line 3
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "etatReservation", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), 1)) {
                // line 4
                echo "            <div class=\"left\">
                <i class=\"material-icons left\">control_point</i>
            </div>
        ";
            }
            // line 8
            echo "        <b>Réservation n°";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "</b><br/>
        Pour le ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateHeure", [], "any", false, false, false, 9)), "html", null, true);
            echo "<br/>
        <i class=\"material-icons\">help_outline</i> ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "EtatReservation", [], "any", false, false, false, 10), "description", [], "any", false, false, false, 10), "html", null, true);
            echo "<br/>
    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "    Pas de réservation
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<script>

    \$(document).ready(function() {

        \$('.carte').click(function (e) {
            \$('.carte').removeClass('selected');
            \$(this).addClass('selected');
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation/admin/liste_reservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  78 => 13,  70 => 10,  66 => 9,  61 => 8,  55 => 4,  53 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for reservation in reservations %}
    <div style=\"padding: 15px; height: 35vh; display: inline-block;\" class=\"z-depth-2 hoverable carte\" onclick=\"gerer_res({{ reservation.id }})\">
        {% if reservation.etatReservation.id == 1 %}
            <div class=\"left\">
                <i class=\"material-icons left\">control_point</i>
            </div>
        {% endif %}
        <b>Réservation n°{{ reservation.id }}</b><br/>
        Pour le {{ reservation.DateHeure|format_datetime() }}<br/>
        <i class=\"material-icons\">help_outline</i> {{ reservation.EtatReservation.description }}<br/>
    </div>
{% else %}
    Pas de réservation
{% endfor %}
<script>

    \$(document).ready(function() {

        \$('.carte').click(function (e) {
            \$('.carte').removeClass('selected');
            \$(this).addClass('selected');
        });
    });
</script>", "reservation/admin/liste_reservations.html.twig", "C:\\Users\\F Canon\\code\\web\\creperiz\\templates\\reservation\\admin\\liste_reservations.html.twig");
    }
}
