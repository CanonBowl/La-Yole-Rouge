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

/* home_page/index.html.twig */
class __TwigTemplate_0b0f831bebdabd845e5ed135845483029b83a550f58b86eaed88efb503b064d2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

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
        echo "            <div class=\"carousel valign-wrapper carousel-slider center\">

                <div style=\"background: center url('";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/P1170260.JPG"), "html", null, true);
        echo "')\" class=\"carousel-item\">
                    <p class=\"center carte-descr\">D'où vient-il?
                        Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum, \"Lorem ipsum dolor sit amet...\", proviennent de la section 1.10.32.

                        L'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).</p>
                </div>

                <div style=\"background-size: 50%; background: center url('";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/P1170233.JPG"), "html", null, true);
        echo "')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

                <div style=\"background-size: 50%; background: center url('";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/P1170265.JPG"), "html", null, true);
        echo "')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

                <div style=\"background: center url('";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/P1170243.JPG"), "html", null, true);
        echo "')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

                <div style=\"background: center url('";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/P1170216.JPG"), "html", null, true);
        echo "')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

                <div style=\"background: center url('";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/P1170207.JPG"), "html", null, true);
        echo "')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

                <div style=\"background: center url('";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/P1170203.JPG"), "html", null, true);
        echo "')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

            </div>
    <div class=\"row\">
        ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["Adresse"]) || array_key_exists("Adresse", $context) ? $context["Adresse"] : (function () { throw new RuntimeError('Variable "Adresse" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "<i class=\"material-icons\">face</i>
        <i class=\"material-icons\">face</i>
        <i class=\"material-icons\">face</i>
        ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["Numero"]) || array_key_exists("Numero", $context) ? $context["Numero"] : (function () { throw new RuntimeError('Variable "Numero" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "

        <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Se connectay</a>
    </div>
    <script>
        \$(document).ready(function() {

            \$('.parallax').parallax();

            \$('.carousel').carousel({
                fullWidth: true,
                indicators: true,
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home_page/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  133 => 46,  127 => 43,  117 => 36,  109 => 31,  101 => 26,  93 => 21,  85 => 16,  77 => 11,  67 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
            <div class=\"carousel valign-wrapper carousel-slider center\">

                <div style=\"background: center url('{{ asset('images/P1170260.JPG') }}')\" class=\"carousel-item\">
                    <p class=\"center carte-descr\">D'où vient-il?
                        Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum, \"Lorem ipsum dolor sit amet...\", proviennent de la section 1.10.32.

                        L'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).</p>
                </div>

                <div style=\"background-size: 50%; background: center url('{{ asset('images/P1170233.JPG') }}')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

                <div style=\"background-size: 50%; background: center url('{{ asset('images/P1170265.JPG') }}')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

                <div style=\"background: center url('{{ asset('images/P1170243.JPG') }}')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

                <div style=\"background: center url('{{ asset('images/P1170216.JPG') }}')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

                <div style=\"background: center url('{{ asset('images/P1170207.JPG') }}')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

                <div style=\"background: center url('{{ asset('images/P1170203.JPG') }}')\" class=\"carousel-item\">
                    <p class=\"center\">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

            </div>
    <div class=\"row\">
        {{ Adresse }}<i class=\"material-icons\">face</i>
        <i class=\"material-icons\">face</i>
        <i class=\"material-icons\">face</i>
        {{ Numero }}

        <a href=\"{{ path('app_login') }}\">Se connectay</a>
    </div>
    <script>
        \$(document).ready(function() {

            \$('.parallax').parallax();

            \$('.carousel').carousel({
                fullWidth: true,
                indicators: true,
            });
        });
    </script>
{% endblock %}", "home_page/index.html.twig", "C:\\Users\\F Canon\\code\\web\\creperiz\\app\\templates\\home_page\\index.html.twig");
    }
}
