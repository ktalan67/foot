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

/* stade/show.html.twig */
class __TwigTemplate_5396753adc1e14ed9c4e62ae633785f8c325691efa0d5310caba7efbb6c832f8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stade/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>Stade</title>

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
        echo "    <h1>Stade</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stade"]) || array_key_exists("stade", $context) ? $context["stade"] : (function () { throw new RuntimeError('Variable "stade" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stade"]) || array_key_exists("stade", $context) ? $context["stade"] : (function () { throw new RuntimeError('Variable "stade" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stade"]) || array_key_exists("stade", $context) ? $context["stade"] : (function () { throw new RuntimeError('Variable "stade" does not exist.', 20, $this->source); })()), "capacity", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stade"]) || array_key_exists("stade", $context) ? $context["stade"] : (function () { throw new RuntimeError('Variable "stade" does not exist.', 24, $this->source); })()), "city", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stade_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stade_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["stade"]) || array_key_exists("stade", $context) ? $context["stade"] : (function () { throw new RuntimeError('Variable "stade" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 33
        echo twig_include($this->env, $context, "stade/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "stade/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  102 => 31,  97 => 29,  89 => 24,  82 => 20,  75 => 16,  68 => 12,  60 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>Stade</title>

{% block body %}
    <h1>Stade</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ stade.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ stade.name }}</td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td>{{ stade.capacity }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ stade.city }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('stade_index') }}\">back to list</a>

    <a href=\"{{ path('stade_edit', {'id': stade.id}) }}\">edit</a>

    {{ include('stade/_delete_form.html.twig') }}
{% endblock %}
", "stade/show.html.twig", "/Users/richard/Documents/WEB/Projet Tournoi/foot/templates/stade/show.html.twig");
    }
}
