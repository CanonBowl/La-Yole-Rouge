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

/* user/index.html.twig */
class __TwigTemplate_88bda366dbb61c100a7d865f74cb0187657318bc11606a74b41fa00484f2ff32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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
    <div class=\"col s3  valign-wrapper\" style=\"height: 50vh\">
        <div class=\"card\">
            <div class=\"row\">
                Bienvenue sur votre espace ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "prenom", [], "any", false, false, false, 6), "html", null, true);
        echo ",
            </div>
            <div class=\"row\">
                <i class=\"material-icons\">email</i> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), "html", null, true);
        echo "
            </div>
            <div class=\"row\">
                <i class=\"material-icons\">today</i> ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "datenaissance", [], "any", false, false, false, 12), "m/d/Y"), "html", null, true);
        echo "
            </div>
            <div class=\"row\">
                <i class=\"material-icons\">local_pizza</i>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "pointFidelite", [], "any", false, false, false, 15), "html", null, true);
        echo "
            </div>
        </div>
    </div>

    <div class=\"col s9\">
        <div class=\"carousel center valign-wrapper center\" style=\"height: 50vh\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "reservations", [], "any", false, false, false, 22));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 23
            echo "                <div class=\"card z-depth-2 carousel-item\">
                    <b>Réservation n°";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</b><br>
                    Faite le ";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateHeure", [], "any", false, false, false, 25)), "html", null, true);
            echo "<br>
                    Etat réservation : ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "EtatReservation", [], "any", false, false, false, 26), "description", [], "any", false, false, false, 26), "html", null, true);
            echo "
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "                Pas de réservation
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>

    </div>

    <script>
        \$(document).ready(function() {
            \$('.carousel').carousel();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 31,  121 => 29,  113 => 26,  109 => 25,  105 => 24,  102 => 23,  97 => 22,  87 => 15,  81 => 12,  75 => 9,  69 => 6,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <div class=\"row\">
    <div class=\"col s3  valign-wrapper\" style=\"height: 50vh\">
        <div class=\"card\">
            <div class=\"row\">
                Bienvenue sur votre espace {{ user.prenom }},
            </div>
            <div class=\"row\">
                <i class=\"material-icons\">email</i> {{ user.email }}
            </div>
            <div class=\"row\">
                <i class=\"material-icons\">today</i> {{ user.datenaissance|date(\"m/d/Y\") }}
            </div>
            <div class=\"row\">
                <i class=\"material-icons\">local_pizza</i>{{ user.pointFidelite }}
            </div>
        </div>
    </div>

    <div class=\"col s9\">
        <div class=\"carousel center valign-wrapper center\" style=\"height: 50vh\">
            {%  for reservation in user.reservations %}
                <div class=\"card z-depth-2 carousel-item\">
                    <b>Réservation n°{{ reservation.id }}</b><br>
                    Faite le {{ reservation.DateHeure|format_datetime() }}<br>
                    Etat réservation : {{ reservation.EtatReservation.description }}
                </div>
            {% else %}
                Pas de réservation
            {% endfor %}
        </div>

    </div>

    <script>
        \$(document).ready(function() {
            \$('.carousel').carousel();
        });
    </script>
{% endblock %}", "user/index.html.twig", "C:\\Users\\F Canon\\code\\web\\creperiz\\templates\\user\\index.html.twig");
    }
}
