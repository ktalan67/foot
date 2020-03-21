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

/* base.html.twig */
class __TwigTemplate_3296252a313b948aff447c7c8e2ff4e3720a2d0faa9490b9ed7edf6d7bb125a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 113
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 131
        echo "    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <img class=\"logo\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\" alt=\"Logo Abloc\">
            <a class=\"navbar-brand\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Foot Admin v1</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"navbar-collapse collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav mr-auto\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
              </li>
               <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  User
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                      <a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">List</a>
                  <a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Add</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Program
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">List</a>
                  <a class=\"dropdown-item\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Add</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Exercise
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">List</a>
                  <a class=\"dropdown-item\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Add</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Comments
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Program Comments</a>
                  <a class=\"dropdown-item\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Exercise Comments</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Hint
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">List</a>
                  <a class=\"dropdown-item\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Add</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Prerequisite
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">List</a>
                  <a class=\"dropdown-item\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Add</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  MasteryLevel
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">List</a>
                  <a class=\"dropdown-item\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Add</a>
                </div>
              </li>
              </ul>
              ";
        // line 98
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 99
            echo "              <ul class=\"navbar-nav\">
              <li class=\"nav-item\">
                  <a class=\"btn btn-sm btn-outline-warning\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\">Logout</a>
              </li>
              </ul>
              ";
        }
        // line 104
        echo " 
            </div>
            </nav>
            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 108
            echo "              <div class=\"alert alert-success\">
                  ";
            // line 109
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "            <script>
                var imgField = document.getElementsByClassName('custom-file-input')[0];
                function message(event){
                    var bits = event.target.value.split('\\\\');
                    var fileName = bits[bits.length-1];
                    document.getElementsByClassName(\"custom-file-label\")[0].innerText = fileName;
                }
                imgField.addEventListener(\"change\", message);
            </script>

            <script>
              \$('#objects-list a').on('click', function (e) {
              e.preventDefault()
              \$(this).tab('show')})
            </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  317 => 115,  310 => 114,  298 => 113,  291 => 112,  282 => 109,  279 => 108,  275 => 107,  270 => 104,  263 => 101,  259 => 99,  257 => 98,  250 => 94,  246 => 93,  234 => 84,  230 => 83,  218 => 74,  214 => 73,  202 => 64,  198 => 63,  186 => 54,  182 => 53,  170 => 44,  166 => 43,  154 => 34,  150 => 33,  143 => 29,  137 => 26,  127 => 19,  123 => 18,  120 => 17,  113 => 16,  104 => 12,  97 => 7,  90 => 6,  77 => 5,  69 => 131,  66 => 114,  63 => 113,  61 => 16,  57 => 14,  55 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        {% endblock %}
    </head>
    <body>
        {% block header %}
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <img class=\"logo\" src=\"{{ asset('') }}\" alt=\"Logo Abloc\">
            <a class=\"navbar-brand\" href=\"{{ path('index') }}\">Foot Admin v1</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"navbar-collapse collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav mr-auto\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('index') }}\">Home <span class=\"sr-only\">(current)</span></a>
              </li>
               <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"{{ path('index') }}\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  User
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                      <a class=\"dropdown-item\" href=\"{{ path('index') }}\">List</a>
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">Add</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Program
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">List</a>
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">Add</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Exercise
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">List</a>
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">Add</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Comments
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">Program Comments</a>
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">Exercise Comments</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Hint
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">List</a>
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">Add</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Prerequisite
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">List</a>
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">Add</a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  MasteryLevel
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">List</a>
                  <a class=\"dropdown-item\" href=\"{{ path('index') }}\">Add</a>
                </div>
              </li>
              </ul>
              {% if is_granted('IS_AUTHENTICATED_FULLY') %}
              <ul class=\"navbar-nav\">
              <li class=\"nav-item\">
                  <a class=\"btn btn-sm btn-outline-warning\" href=\"{{ path('index') }}\">Logout</a>
              </li>
              </ul>
              {% endif %} 
            </div>
            </nav>
            {% for message in app.flashes('success') %}
              <div class=\"alert alert-success\">
                  {{ message }}
              </div>
            {% endfor %}
        {% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script>
                var imgField = document.getElementsByClassName('custom-file-input')[0];
                function message(event){
                    var bits = event.target.value.split('\\\\');
                    var fileName = bits[bits.length-1];
                    document.getElementsByClassName(\"custom-file-label\")[0].innerText = fileName;
                }
                imgField.addEventListener(\"change\", message);
            </script>

            <script>
              \$('#objects-list a').on('click', function (e) {
              e.preventDefault()
              \$(this).tab('show')})
            </script>
        {% endblock %}
    </body>
</html>", "base.html.twig", "/Users/richard/Documents/WEB/Projet Tournoi/foot/templates/base.html.twig");
    }
}
