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

/* player/show.html.twig */
class __TwigTemplate_b2ff3cec051b27b07e061e02faa259f5c72a8a24a9faf671a7ce30dd2d2a765f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>Player</title>

";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Player</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Account_name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 16, $this->source); })()), "accountName", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Match_win</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 20, $this->source); })()), "matchWin", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Match_lose</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 24, $this->source); })()), "matchLose", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Match_draw</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 28, $this->source); })()), "matchDraw", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Redcard</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 32, $this->source); })()), "redcard", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "player/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "player/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  116 => 39,  111 => 37,  103 => 32,  96 => 28,  89 => 24,  82 => 20,  75 => 16,  68 => 12,  60 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>Player</title>

{% block body %}
    <h1>Player</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ player.id }}</td>
            </tr>
            <tr>
                <th>Account_name</th>
                <td>{{ player.accountName }}</td>
            </tr>
            <tr>
                <th>Match_win</th>
                <td>{{ player.matchWin }}</td>
            </tr>
            <tr>
                <th>Match_lose</th>
                <td>{{ player.matchLose }}</td>
            </tr>
            <tr>
                <th>Match_draw</th>
                <td>{{ player.matchDraw }}</td>
            </tr>
            <tr>
                <th>Redcard</th>
                <td>{{ player.redcard }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('player_index') }}\">back to list</a>

    <a href=\"{{ path('player_edit', {'id': player.id}) }}\">edit</a>

    {{ include('player/_delete_form.html.twig') }}
{% endblock %}
", "player/show.html.twig", "/Users/richard/Documents/WEB/Projet Tournoi/foot/templates/player/show.html.twig");
    }
}
