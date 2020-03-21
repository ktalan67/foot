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

/* championship/show.html.twig */
class __TwigTemplate_53314719e34e67ac279456d5e05a7d2eb7084cfb54f61798b79acd31bd76eec8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "championship/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>Championship</title>

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
        echo "    <h1>Championship</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["championship"]) || array_key_exists("championship", $context) ? $context["championship"] : (function () { throw new RuntimeError('Variable "championship" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["championship"]) || array_key_exists("championship", $context) ? $context["championship"] : (function () { throw new RuntimeError('Variable "championship" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["championship"]) || array_key_exists("championship", $context) ? $context["championship"] : (function () { throw new RuntimeError('Variable "championship" does not exist.', 20, $this->source); })()), "country", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("championship_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("championship_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["championship"]) || array_key_exists("championship", $context) ? $context["championship"] : (function () { throw new RuntimeError('Variable "championship" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 29
        echo twig_include($this->env, $context, "championship/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "championship/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  95 => 27,  90 => 25,  82 => 20,  75 => 16,  68 => 12,  60 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>Championship</title>

{% block body %}
    <h1>Championship</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ championship.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ championship.name }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ championship.country }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('championship_index') }}\">back to list</a>

    <a href=\"{{ path('championship_edit', {'id': championship.id}) }}\">edit</a>

    {{ include('championship/_delete_form.html.twig') }}
{% endblock %}
", "championship/show.html.twig", "/Users/richard/Documents/WEB/Projet Tournoi/foot/templates/championship/show.html.twig");
    }
}
