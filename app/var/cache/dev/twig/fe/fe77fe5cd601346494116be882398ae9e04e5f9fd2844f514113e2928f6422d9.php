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

/* reservation/admin/index.html.twig */
class __TwigTemplate_20d952c44957ca877433bb5db0726164c62006717e1fc5df21420702c1820262 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/admin/index.html.twig"));

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
        echo "    <div class=\"full-row\">

        <div class=\"row\">

            <div class=\"col m11 valign-wrapper\" id=\"espaceReservations\" style=\"overflow-x: scroll; overflow-y: hidden; white-space: nowrap; height: 40vh;\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 7, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 8
            echo "                    <div style=\"padding: 15px; height: 35vh; display: inline-block;\" class=\"z-depth-2 hoverable carte\" onclick=\"gerer_res(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo ")\">
                        ";
            // line 9
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "etatReservation", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), 1)) {
                // line 10
                echo "                            <div class=\"left\">
                            <i class=\"material-icons left\">control_point</i>
                            </div>
                        ";
            }
            // line 14
            echo "                        <b>Réservation n°";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</b><br/>
                        Pour le ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateHeure", [], "any", false, false, false, 15)), "html", null, true);
            echo "<br/>
                        <i class=\"material-icons\">help_outline</i> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "EtatReservation", [], "any", false, false, false, 16), "description", [], "any", false, false, false, 16), "html", null, true);
            echo "<br/>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "                    Pas de réservation
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </div>

            <div class=\"col s1 right\" style=\"padding: 0\">
                <div id=\"ResNew\" style=\"background: yellow\">
                    <i class=\"material-icons medium\">fiber_new</i>
                </div>
                <div id=\"ResVues\" style=\"background: red\">
                    <i class=\"material-icons medium\">remove_red_eye</i>
                </div>
                <div id=\"ResValide\" style=\"background: gray\">
                    <i class=\"material-icons medium\">check</i>
                </div>
                <div id=\"ResAnnule\" style=\"background: green\">
                    <i class=\"material-icons medium\">cancel</i>
                </div>
            </div>

        </div>

        <div style=\"height: 40vh\" class=\"SpaceGererRes\">

        </div>

    </div>
    <script>

        function gerer_res(id) {
            \$(\".SpaceGererRes\").toggle(\"slide\", function() {
                \$(this).load(\"Admin/Reservations/Gerer/\" + id, function () {
                    \$('.SpaceGererRes').toggle(\"slide\");
                });
            })
        }

        \$(document).ready(function() {

            \$('.carte').click(function(e) {
                \$('.carte').removeClass('selected');
                \$(this).addClass('selected');
            });

            \$('#ResNew').click(function() {
                \$('#espaceReservations').toggle('slide', function () {
                    \$(this).load('Admin/Reservations/1', function() {
                        \$(this).toggle('slide');
                    });
                })
            });

            \$('#ResAnnule').click(function() {
                \$('#espaceReservations').toggle('slide', function () {
                    \$(this).load('Admin/Reservations/4', function() {
                        \$(this).toggle('slide');
                    });
                })
            });
            \$('#ResValide').click(function() {
                \$('#espaceReservations').toggle('slide', function () {
                    \$(this).load('Admin/Reservations/3', function() {
                        \$(this).toggle('slide');
                    });
                })
            });


            \$('#ResVues').click(function() {
                \$('#espaceReservations').toggle('slide', function () {
                    \$(this).load('Admin/Reservations/2', function() {
                        \$(this).toggle('slide');
                    });
                })
            });

            \$('.card').hover(function(e) {
                \$(this).css('margin-left', '+=10');
                \$(this).css('margin-right', '+=10');
            }, function () {
                \$(this).css('margin-left', '-=10');
                \$(this).css('margin-right', '-=10');
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/admin/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 21,  105 => 19,  97 => 16,  93 => 15,  88 => 14,  82 => 10,  80 => 9,  75 => 8,  70 => 7,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <div class=\"full-row\">

        <div class=\"row\">

            <div class=\"col m11 valign-wrapper\" id=\"espaceReservations\" style=\"overflow-x: scroll; overflow-y: hidden; white-space: nowrap; height: 40vh;\">
                {% for reservation in reservations %}
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
            </div>

            <div class=\"col s1 right\" style=\"padding: 0\">
                <div id=\"ResNew\" style=\"background: yellow\">
                    <i class=\"material-icons medium\">fiber_new</i>
                </div>
                <div id=\"ResVues\" style=\"background: red\">
                    <i class=\"material-icons medium\">remove_red_eye</i>
                </div>
                <div id=\"ResValide\" style=\"background: gray\">
                    <i class=\"material-icons medium\">check</i>
                </div>
                <div id=\"ResAnnule\" style=\"background: green\">
                    <i class=\"material-icons medium\">cancel</i>
                </div>
            </div>

        </div>

        <div style=\"height: 40vh\" class=\"SpaceGererRes\">

        </div>

    </div>
    <script>

        function gerer_res(id) {
            \$(\".SpaceGererRes\").toggle(\"slide\", function() {
                \$(this).load(\"Admin/Reservations/Gerer/\" + id, function () {
                    \$('.SpaceGererRes').toggle(\"slide\");
                });
            })
        }

        \$(document).ready(function() {

            \$('.carte').click(function(e) {
                \$('.carte').removeClass('selected');
                \$(this).addClass('selected');
            });

            \$('#ResNew').click(function() {
                \$('#espaceReservations').toggle('slide', function () {
                    \$(this).load('Admin/Reservations/1', function() {
                        \$(this).toggle('slide');
                    });
                })
            });

            \$('#ResAnnule').click(function() {
                \$('#espaceReservations').toggle('slide', function () {
                    \$(this).load('Admin/Reservations/4', function() {
                        \$(this).toggle('slide');
                    });
                })
            });
            \$('#ResValide').click(function() {
                \$('#espaceReservations').toggle('slide', function () {
                    \$(this).load('Admin/Reservations/3', function() {
                        \$(this).toggle('slide');
                    });
                })
            });


            \$('#ResVues').click(function() {
                \$('#espaceReservations').toggle('slide', function () {
                    \$(this).load('Admin/Reservations/2', function() {
                        \$(this).toggle('slide');
                    });
                })
            });

            \$('.card').hover(function(e) {
                \$(this).css('margin-left', '+=10');
                \$(this).css('margin-right', '+=10');
            }, function () {
                \$(this).css('margin-left', '-=10');
                \$(this).css('margin-right', '-=10');
            });
        });
    </script>
{% endblock %}
", "reservation/admin/index.html.twig", "C:\\Users\\F Canon\\code\\web\\creperiz\\templates\\reservation\\admin\\index.html.twig");
    }
}
