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

/* /nav/detail.html */
class __TwigTemplate_dd138c8bb858fcd1a716c3834051292a extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav/detail.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav/detail.html"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/style.css"), "html", null, true);
        yield "\">
    <title>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</title>
</head>
<body>

";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/nav/component/header.html.twig", ["pseudo" => (isset($context["pseudo"]) || array_key_exists("pseudo", $context) ? $context["pseudo"] : (function () { throw new RuntimeError('Variable "pseudo" does not exist.', 11, $this->source); })())]);
        yield "

<div class=\"page\">

    <a href=\"/games\" class=\"back-link\">← Retour au catalogue</a>

    <div class=\"game-hero\">
        <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "\">

        <div class=\"game-info\">
            <h1 class=\"game-title\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "</h1>

            <div class=\"game-tags\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 24, $this->source); })()), "tags", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 25
            yield "                    <span class=\"tag\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
            yield "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "                <span class=\"tag\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 27, $this->source); })()), "mode", [], "any", false, false, false, 27), "html", null, true);
        yield "</span>
            </div>

            <p class=\"game-desc\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>

            
            <div class=\"game-price-block\">
                <div class=\"price-wrap\">
                    ";
        // line 35
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 35, $this->source); })()), "old_price", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                        <span class=\"price-old\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 36, $this->source); })()), "old_price", [], "any", false, false, false, 36), "html", null, true);
            yield " €</span>
                    ";
        }
        // line 38
        yield "                    <span class=\"price-current ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 38, $this->source); })()), "free", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("free") : (""));
        yield "\">
                        ";
        // line 39
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 39, $this->source); })()), "free", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Gratuit") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 39, $this->source); })()), "price", [], "any", false, false, false, 39) . " €"), "html", null, true)));
        yield "
                    </span>
                </div>
                ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 42, $this->source); })()), "discount", [], "any", false, false, false, 42) > 0)) {
            // line 43
            yield "                    <span class=\"discount-badge\">−";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 43, $this->source); })()), "discount", [], "any", false, false, false, 43), "html", null, true);
            yield "%</span>
                ";
        }
        // line 45
        yield "                <button>Ajouter au panier</button>
            </div>
        </div>
    </div>

    <div>
        <div class=\"section-title\">
            Commentaires
            <span style=\"font-size:0.75rem;color:var(--text-dim);font-weight:400\">
                ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 54, $this->source); })())), "html", null, true);
        yield "
            </span>
        </div>

        ";
        // line 58
        if ((($tmp = (isset($context["pseudo"]) || array_key_exists("pseudo", $context) ? $context["pseudo"] : (function () { throw new RuntimeError('Variable "pseudo" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "        <form class=\"comment-form\" method=\"POST\" action=\"/games/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
            yield "/comment\">
            <textarea name=\"message\" placeholder=\"Laisse un commentaire…\" required></textarea>
            <button type=\"submit\">Publier</button>
        </form>
        ";
        } else {
            // line 64
            yield "        <p style=\"color:var(--text-dim);font-size:0.82rem;padding:1rem 0\">
            <a href=\"/acceuil\" style=\"color:var(--accent)\">Connecte-toi</a> pour laisser un commentaire.
        </p>
        ";
        }
        // line 68
        yield "
        <div class=\"comment-list\" style=\"margin-top:1rem\">
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 70, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 71
            yield "            <div class=\"comment-card\">
                <div class=\"comment-header\">
                    <span class=\"comment-pseudo\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 73), "html", null, true);
            yield "</span>
                    <span class=\"comment-date\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 74), "html", null, true);
            yield "</span>
                </div>
                <p class=\"comment-message\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "message", [], "any", false, false, false, 76), "html", null, true);
            yield "</p>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 78
        if (!$context['_iterated']) {
            // line 79
            yield "            <div class=\"no-comments\">Aucun commentaire pour l'instant.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "        </div>
    </div>

</div>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/nav/detail.html";
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
        return array (  218 => 81,  211 => 79,  209 => 78,  202 => 76,  197 => 74,  193 => 73,  189 => 71,  184 => 70,  180 => 68,  174 => 64,  165 => 59,  163 => 58,  156 => 54,  145 => 45,  139 => 43,  137 => 42,  131 => 39,  126 => 38,  120 => 36,  118 => 35,  110 => 30,  103 => 27,  94 => 25,  90 => 24,  84 => 21,  76 => 18,  66 => 11,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/style.css') }}\">
    <title>{{ game.name }}</title>
</head>
<body>

{{ include('/nav/component/header.html.twig', {pseudo: pseudo}) }}

<div class=\"page\">

    <a href=\"/games\" class=\"back-link\">← Retour au catalogue</a>

    <div class=\"game-hero\">
        <img src=\"{{ game.image }}\" alt=\"{{ game.name }}\">

        <div class=\"game-info\">
            <h1 class=\"game-title\">{{ game.name }}</h1>

            <div class=\"game-tags\">
                {% for tag in game.tags %}
                    <span class=\"tag\">{{ tag }}</span>
                {% endfor %}
                <span class=\"tag\">{{ game.mode }}</span>
            </div>

            <p class=\"game-desc\">{{ game.description }}</p>

            
            <div class=\"game-price-block\">
                <div class=\"price-wrap\">
                    {% if game.old_price %}
                        <span class=\"price-old\">{{ game.old_price }} €</span>
                    {% endif %}
                    <span class=\"price-current {{ game.free ? 'free' }}\">
                        {{ game.free ? 'Gratuit' : game.price ~ ' €' }}
                    </span>
                </div>
                {% if game.discount > 0 %}
                    <span class=\"discount-badge\">−{{ game.discount }}%</span>
                {% endif %}
                <button>Ajouter au panier</button>
            </div>
        </div>
    </div>

    <div>
        <div class=\"section-title\">
            Commentaires
            <span style=\"font-size:0.75rem;color:var(--text-dim);font-weight:400\">
                {{ comments|length }}
            </span>
        </div>

        {% if pseudo %}
        <form class=\"comment-form\" method=\"POST\" action=\"/games/{{ game.id }}/comment\">
            <textarea name=\"message\" placeholder=\"Laisse un commentaire…\" required></textarea>
            <button type=\"submit\">Publier</button>
        </form>
        {% else %}
        <p style=\"color:var(--text-dim);font-size:0.82rem;padding:1rem 0\">
            <a href=\"/acceuil\" style=\"color:var(--accent)\">Connecte-toi</a> pour laisser un commentaire.
        </p>
        {% endif %}

        <div class=\"comment-list\" style=\"margin-top:1rem\">
            {% for comment in comments|reverse %}
            <div class=\"comment-card\">
                <div class=\"comment-header\">
                    <span class=\"comment-pseudo\">{{ comment.pseudo }}</span>
                    <span class=\"comment-date\">{{ comment.date }}</span>
                </div>
                <p class=\"comment-message\">{{ comment.message }}</p>
            </div>
            {% else %}
            <div class=\"no-comments\">Aucun commentaire pour l'instant.</div>
            {% endfor %}
        </div>
    </div>

</div>

</body>
</html>", "/nav/detail.html", "/home/lucas/Documents/IPI/FrameWorkBack/Symfony/TP_Symfony/templates/nav/detail.html");
    }
}
