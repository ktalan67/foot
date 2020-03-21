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

/* match/show.html.twig */
class __TwigTemplate_c7e7b61e607cc17311f1d37b03b03d8285ff2df90db31b74c96311d04f267d0a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>Match</title>

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
        echo "    <h1>Match</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Score</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 16, $this->source); })()), "score", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fouls</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 20, $this->source); })()), "fouls", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Penalty</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 24, $this->source); })()), "penalty", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Yellowcard</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 28, $this->source); })()), "yellowcard", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Redcard</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 32, $this->source); })()), "redcard", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "match/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "match/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  116 => 39,  111 => 37,  103 => 32,  96 => 28,  89 => 24,  82 => 20,  75 => 16,  68 => 12,  60 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>Match</title>

{% block body %}
    <h1>Match</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ match.id }}</td>
            </tr>
            <tr>
                <th>Score</th>
                <td>{{ match.score }}</td>
            </tr>
            <tr>
                <th>Fouls</th>
                <td>{{ match.fouls }}</td>
            </tr>
            <tr>
                <th>Penalty</th>
                <td>{{ match.penalty }}</td>
            </tr>
            <tr>
                <th>Yellowcard</th>
                <td>{{ match.yellowcard }}</td>
            </tr>
            <tr>
                <th>Redcard</th>
                <td>{{ match.redcard }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('match_index') }}\">back to list</a>

    <a href=\"{{ path('match_edit', {'id': match.id}) }}\">edit</a>

    {{ include('match/_delete_form.html.twig') }}
{% endblock %}
", "match/show.html.twig", "/Users/richard/Documents/WEB/Projet Tournoi/foot/templates/match/show.html.twig");
    }
}
