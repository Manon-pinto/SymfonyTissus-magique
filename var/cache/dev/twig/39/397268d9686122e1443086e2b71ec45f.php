<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* creations/index.html.twig */
class __TwigTemplate_0226bac56cdd36d35dd323a1bcd63e53 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creations/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creations/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "creations/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"row\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["creations"]) || array_key_exists("creations", $context) ? $context["creations"] : (function () { throw new RuntimeError('Variable "creations" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creation"]) {
            // line 6
            yield "            <div class=\"col-md-3\">
                <div class=\"card\">
                    ";
            // line 8
            if (CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "imagePath", [], "any", false, false, false, 8)) {
                // line 9
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/creations/" . CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "ImagePath", [], "any", false, false, false, 9))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "nom", [], "any", false, false, false, 9), "html", null, true);
                yield "\" class=\"card-img-top\">
                    ";
            } else {
                // line 11
                yield "                        <p>No image available</p>
                    ";
            }
            // line 13
            yield "                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "nom", [], "any", false, false, false, 14), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\">Taille: ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "taille", [], "any", false, false, false, 15), "html", null, true);
            yield " <br> Prix: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "prix", [], "any", false, false, false, 15), "html", null, true);
            yield "€</p>
                        <div class=\"d-flex gap-2\">
                            ";
            // line 18
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Voir détails</a>

                            ";
            // line 21
            yield "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 22
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_art", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                yield "\" class=\"btn btn-warning\">Modifier</a>
                                <form action=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_art", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" method=\"POST\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette création ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 24))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            ";
            }
            // line 30
            yield "
                            ";
            // line 32
            yield "                            ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 33
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personnaliser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\" class=\"btn btn-warning\">
                                    Personnaliser
                                </a>
                            ";
            }
            // line 37
            yield "                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['creation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "    </div>

    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["success"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            yield "        <div class=\"alert alert-success\">
            ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "creations/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  177 => 46,  174 => 45,  170 => 44,  166 => 42,  156 => 37,  148 => 33,  145 => 32,  142 => 30,  133 => 24,  129 => 23,  124 => 22,  121 => 21,  115 => 18,  108 => 15,  104 => 14,  101 => 13,  97 => 11,  89 => 9,  87 => 8,  83 => 6,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row\">
        {% for creation in creations %}
            <div class=\"col-md-3\">
                <div class=\"card\">
                    {% if creation.imagePath %}
                        <img src=\"{{ asset('uploads/creations/' ~ creation.ImagePath) }}\" alt=\"{{ creation.nom }}\" class=\"card-img-top\">
                    {% else %}
                        <p>No image available</p>
                    {% endif %}
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ creation.nom }}</h5>
                        <p class=\"card-text\">Taille: {{ creation.taille }} <br> Prix: {{ creation.prix }}€</p>
                        <div class=\"d-flex gap-2\">
                            {# Bouton \"Voir détails\" visible pour tous #}
                            <a href=\"{{ path('creation_details', {'id': creation.id}) }}\" class=\"btn btn-primary\">Voir détails</a>

                            {# Boutons visibles uniquement pour l'admin #}
                            {% if is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('app_edit_art', {'id': creation.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                                <form action=\"{{ path('app_delete_art', {'id': creation.id}) }}\" method=\"POST\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette création ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ creation.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            {% endif %}

                            {# Bouton \"Personnaliser\" visible uniquement pour les utilisateurs non-admin #}
                            {% if is_granted('ROLE_USER') and not is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('app_personnaliser', {'id': creation.id}) }}\" class=\"btn btn-warning\">
                                    Personnaliser
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
{% endblock %}", "creations/index.html.twig", "C:\\projets\\Symfony_Deployment-main\\templates\\creations\\index.html.twig");
    }
}
