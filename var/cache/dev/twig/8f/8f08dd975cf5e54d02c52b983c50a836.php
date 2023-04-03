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

/* visiteur/initialiser.html.twig */
class __TwigTemplate_830bf8d92ee86c054875147144a586dc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/initialiser.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<script>
function openForm() {
  document.getElementById(\"popup1\").style.display = \"block\";
}

function closeForm() {
  document.getElementById(\"popup1\").style.display = \"none\";
}
</script>

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    table{
  border-collapse: collapse;
}
tr, td{
  border: 1px solid black;
  padding: 10px;
}
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
</style>

<head>
\t<meta charset=\"utf-8\">
\t<title>GSB - Frais</title>
    <h1>Visiteur - Initialiser fiche frais</h1>
</head>
<form action=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_initialiser");
        echo "\" method=\"POST\">
<br/>
<label>Veuillez choisir au moins un Frais au Forfait :</label>
<br/>
<br/>
<select name=\"FraisForfait\" id=\"FraisForfait\">
\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["FF"]) || array_key_exists("FF", $context) ? $context["FF"] : (function () { throw new RuntimeError('Variable "FF" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unFF"]) {
            // line 82
            echo "    \t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unFF"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unFF"], "libelle", [], "any", false, false, false, 82), "html", null, true);
            echo "</option>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "</select>
<br/>
<br/>
<label>Veuillez choisir la quantite pour le Frais au Forfait :</label>
<br/>
<input type=\"number\" name=\"Quantite\" step=\"1\" />
<br/>
<br/>
<input type=\"submit\" value=\"Valider\" /> ";
        // line 92
        if ((array_key_exists("erreur", $context) && ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 92, $this->source); })()) != null))) {
            echo " <h5> ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 92, $this->source); })()), "html", null, true);
            echo " </h5> ";
        }
        echo " ";
        if ((array_key_exists("enregistrer", $context) && ((isset($context["enregistrer"]) || array_key_exists("enregistrer", $context) ? $context["enregistrer"] : (function () { throw new RuntimeError('Variable "enregistrer" does not exist.', 92, $this->source); })()) != null))) {
            echo " <h5> ";
            echo twig_escape_filter($this->env, (isset($context["enregistrer"]) || array_key_exists("enregistrer", $context) ? $context["enregistrer"] : (function () { throw new RuntimeError('Variable "enregistrer" does not exist.', 92, $this->source); })()), "html", null, true);
            echo " </h5> ";
        }
        // line 93
        echo "<br/>
<br/>
<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_visiteur");
        echo "\">Retour</a> ";
        if (((isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 95, $this->source); })()) != null)) {
            echo " <a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Finaliser</a>
  <div id=\"popup1\" class=\"overlay\">
\t\t\t\t\t  <div class=\"popup\">
\t\t\t\t\t  <h2>Confirmation</h2>
\t\t\t\t\t  <a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t  <div class=\"content\">
\t\t\t\t\t  Etes-vous certains de vouloir poursuivre l'action suivante ?
\t\t\t\t\t  </div>
    \t\t\t\t  <br/>
    \t\t\t\t  <a class=\"button\" href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_renseigner");
            echo "\">Oui</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
";
        }
        // line 108
        echo "</form>
";
        // line 109
        if (((isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 109, $this->source); })()) != null)) {
            // line 110
            echo "<h2>Ligne frais forfait<h2/>
\t\t<table>
\t\t<thead>
\t\t\t<th>Type</th>
\t\t\t<th>Libelle</th>
\t\t\t<th>Quantite</th>
\t\t\t<th>Montant</th>
\t\t</thead>
\t\t";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 118, $this->source); })()), "ligneFraisForfaits", [], "any", false, false, false, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["FF"]) {
                // line 119
                echo "\t\t    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Visiteur", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "session", [], "any", false, false, false, 119), "get", [0 => "id"], "method", false, false, false, 119))) {
                    // line 120
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                    // line 121
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 122
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 122), "libelle", [], "any", false, false, false, 122), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FF"], "quantite", [], "any", false, false, false, 123), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["FF"], "Fraisforfait", [], "any", false, false, false, 124), "montant", [], "any", false, false, false, 124), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                // line 127
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FF'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "\t\t</table>
";
        }
        // line 130
        echo "</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/initialiser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 130,  236 => 128,  230 => 127,  224 => 124,  220 => 123,  216 => 122,  212 => 121,  209 => 120,  206 => 119,  202 => 118,  192 => 110,  190 => 109,  187 => 108,  180 => 104,  166 => 95,  162 => 93,  150 => 92,  140 => 84,  129 => 82,  125 => 81,  116 => 75,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<script>
function openForm() {
  document.getElementById(\"popup1\").style.display = \"block\";
}

function closeForm() {
  document.getElementById(\"popup1\").style.display = \"none\";
}
</script>

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    table{
  border-collapse: collapse;
}
tr, td{
  border: 1px solid black;
  padding: 10px;
}
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
</style>

<head>
\t<meta charset=\"utf-8\">
\t<title>GSB - Frais</title>
    <h1>Visiteur - Initialiser fiche frais</h1>
</head>
<form action=\"{{ path('app_initialiser') }}\" method=\"POST\">
<br/>
<label>Veuillez choisir au moins un Frais au Forfait :</label>
<br/>
<br/>
<select name=\"FraisForfait\" id=\"FraisForfait\">
\t{% for unFF in FF %}
    \t<option value=\"{{ unFF.id }}\">{{ unFF.libelle }}</option>
\t{% endfor %}
</select>
<br/>
<br/>
<label>Veuillez choisir la quantite pour le Frais au Forfait :</label>
<br/>
<input type=\"number\" name=\"Quantite\" step=\"1\" />
<br/>
<br/>
<input type=\"submit\" value=\"Valider\" /> {% if erreur is defined and erreur != null %} <h5> {{ erreur }} </h5> {% endif %} {% if enregistrer is defined and enregistrer != null %} <h5> {{ enregistrer }} </h5> {% endif %}
<br/>
<br/>
<a href=\"{{ path('app_espace_visiteur') }}\">Retour</a> {% if fiche != null %} <a class=\"button\" onclick=\"openForm()\" href=\"#popup1\">Finaliser</a>
  <div id=\"popup1\" class=\"overlay\">
\t\t\t\t\t  <div class=\"popup\">
\t\t\t\t\t  <h2>Confirmation</h2>
\t\t\t\t\t  <a class=\"close\" href=\"#\">&times;</a>
\t\t\t\t\t  <div class=\"content\">
\t\t\t\t\t  Etes-vous certains de vouloir poursuivre l'action suivante ?
\t\t\t\t\t  </div>
    \t\t\t\t  <br/>
    \t\t\t\t  <a class=\"button\" href=\"{{ path('app_renseigner') }}\">Oui</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
{% endif %}
</form>
{% if fiche != null %}
<h2>Ligne frais forfait<h2/>
\t\t<table>
\t\t<thead>
\t\t\t<th>Type</th>
\t\t\t<th>Libelle</th>
\t\t\t<th>Quantite</th>
\t\t\t<th>Montant</th>
\t\t</thead>
\t\t{% for FF in fiche.ligneFraisForfaits %}
\t\t    {% if FF.Visiteur.id == app.session.get(\"id\") %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ FF.Fraisforfait.id }}</td>
\t\t\t\t\t<td>{{ FF.Fraisforfait.libelle  }}</td>
\t\t\t\t\t<td>{{ FF.quantite }}</td>
\t\t\t\t\t<td>{{ FF.Fraisforfait.montant }}</td>
\t\t\t\t</tr>
\t\t\t{% endif %}
\t\t{% endfor %}
\t\t</table>
{% endif %}
</html>", "visiteur/initialiser.html.twig", "/home/developpeur/GSB-AF/templates/visiteur/initialiser.html.twig");
    }
}
