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

/* security/login.html.twig */
class __TwigTemplate_7dfa592d7cf16a46306a597afc7b7145618cc3812249f9003f1469606b56c6cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        echo "    <div class=\"row valign-wrapper\">
        <div class=\"col l8 s8\">
            <div id=\"EspaceLogin\" class=\"card\">
                <form id=\"form_login\" method=\"post\">
                    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageData", [], "any", false, false, false, 7), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 9
        echo "
                    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "                        <div class=\"mb-3\">
                            Vous êtes enregistré en tant que ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">se déconnecter</a>
                        </div>
                    ";
        }
        // line 15
        echo "
                    <h2 class=\"h3 mb-3 font-weight-normal\">Se connecter</h2>
                    <div class=\"input-field\">
                        <i class=\"material-icons prefix\">email</i>
                        <input type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputUsername\" class=\"form-control\" required autofocus>
                        <label for=\"inputUsername\">Adresse email</label>
                    </div>

                    <div class=\"input-field\">
                        <i class=\"material-icons prefix\">vpn_key</i>
                        <label for=\"inputPassword\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >

                    ";
        // line 43
        echo "
                    <button id=\"sendLogin\" class=\"btn btn-lg btn-primary\" type=\"submit\">
                        Sign in
                    </button>
                </form>
            </div>
        </div>
        <div class=\"col l4 s4 center valign-wrapper\" style=\"height: 90vh;\">
            Pas encore inscrit ?<br>
            <div class=\"btn center\" id=\"Enregistrement\">Nous rejoindre</div>
        </div>
    </div>

    <script>
        \$(document).ready(function() {

            \$('#sendLogin').click(function (e) {
                e.preventDefault();
                \$.ajax({
                    url: \"/app_login\",
                    data: \$('#form_login').serialize(),
                    method: \"POST\",
                    success: function (data) {
                        console.log(data);
                        location.reload(true);

                    }
                })
            });

            \$('#Enregistrement').click(function() {
                \$(\"#EspaceLogin\").fadeOut(100).load(\"Enregistrement\", function () {
                    \$('#EspaceLogin').fadeIn(100);
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  113 => 30,  99 => 19,  93 => 15,  85 => 12,  82 => 11,  80 => 10,  77 => 9,  71 => 7,  69 => 6,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <div class=\"row valign-wrapper\">
        <div class=\"col l8 s8\">
            <div id=\"EspaceLogin\" class=\"card\">
                <form id=\"form_login\" method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    {% if app.user %}
                        <div class=\"mb-3\">
                            Vous êtes enregistré en tant que {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">se déconnecter</a>
                        </div>
                    {% endif %}

                    <h2 class=\"h3 mb-3 font-weight-normal\">Se connecter</h2>
                    <div class=\"input-field\">
                        <i class=\"material-icons prefix\">email</i>
                        <input type=\"text\" value=\"{{ last_username }}\" name=\"email\" id=\"inputUsername\" class=\"form-control\" required autofocus>
                        <label for=\"inputUsername\">Adresse email</label>
                    </div>

                    <div class=\"input-field\">
                        <i class=\"material-icons prefix\">vpn_key</i>
                        <label for=\"inputPassword\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >

                    {#
                        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                        See https://symfony.com/doc/current/security/remember_me.html

                        <div class=\"checkbox mb-3\">
                            <label>
                                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                            </label>
                        </div>
                    #}

                    <button id=\"sendLogin\" class=\"btn btn-lg btn-primary\" type=\"submit\">
                        Sign in
                    </button>
                </form>
            </div>
        </div>
        <div class=\"col l4 s4 center valign-wrapper\" style=\"height: 90vh;\">
            Pas encore inscrit ?<br>
            <div class=\"btn center\" id=\"Enregistrement\">Nous rejoindre</div>
        </div>
    </div>

    <script>
        \$(document).ready(function() {

            \$('#sendLogin').click(function (e) {
                e.preventDefault();
                \$.ajax({
                    url: \"/app_login\",
                    data: \$('#form_login').serialize(),
                    method: \"POST\",
                    success: function (data) {
                        console.log(data);
                        location.reload(true);

                    }
                })
            });

            \$('#Enregistrement').click(function() {
                \$(\"#EspaceLogin\").fadeOut(100).load(\"Enregistrement\", function () {
                    \$('#EspaceLogin').fadeIn(100);
                });
            });
        });
    </script>
{% endblock %}", "security/login.html.twig", "C:\\Users\\F Canon\\code\\web\\creperiz\\templates\\security\\login.html.twig");
    }
}
