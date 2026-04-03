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

/* /nav/games.html.twig */
class __TwigTemplate_64f00b383b185b85ced24e5d41bcf3a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav/games.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav/games.html.twig"));

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
    <title>Jeux</title>
</head>
<body>

";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/nav/component/header.html.twig", ["pseudo" => (isset($context["pseudo"]) || array_key_exists("pseudo", $context) ? $context["pseudo"] : (function () { throw new RuntimeError('Variable "pseudo" does not exist.', 11, $this->source); })())]);
        yield "

<div class=\"layout\">

    <aside class=\"sidebar\">

        <div class=\"sidebar-block\">
            <div class=\"sidebar-block-title\">Genres</div>
            <ul class=\"filter-list\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Tous", "FPS", "Course", "Simulation", "Sport"]);
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 21
            yield "                <li>
                    <a href=\"?search=";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "search", [], "any", false, false, false, 22), "html", null, true);
            yield "&genre=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["genre"], "html", null, true);
            yield "&prix=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "prix", [], "any", false, false, false, 22), "html", null, true);
            yield "&mode=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "mode", [], "any", false, false, false, 22), "html", null, true);
            yield "&sort=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "sort", [], "any", false, false, false, 22), "html", null, true);
            yield "\"
                       class=\"";
            // line 23
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 23, $this->source); })()), "genre", [], "any", false, false, false, 23) == $context["genre"])) ? ("active") : (""));
            yield "\">
                        <span class=\"filter-dot\"></span>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["genre"], "html", null, true);
            yield "
                    </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['genre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            </ul>
        </div>

        <div class=\"sidebar-block\">
            <div class=\"sidebar-block-title\">Prix</div>
            <ul class=\"filter-list\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Tous", "Gratuit", "Moins de 15", "Moins de 30", "En promo"]);
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 35
            yield "                <li>
                    <a href=\"?search=";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "search", [], "any", false, false, false, 36), "html", null, true);
            yield "&genre=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "genre", [], "any", false, false, false, 36), "html", null, true);
            yield "&prix=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
            yield "&mode=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "mode", [], "any", false, false, false, 36), "html", null, true);
            yield "&sort=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "sort", [], "any", false, false, false, 36), "html", null, true);
            yield "\"
                       class=\"";
            // line 37
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37) == $context["p"])) ? ("active") : (""));
            yield "\">
                        <span class=\"filter-dot\"></span>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
            yield "
                    </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            </ul>
        </div>

        <div class=\"sidebar-block\">
            <div class=\"sidebar-block-title\">Mode</div>
            <ul class=\"filter-list\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Tous", "Solo", "Multijoueur", "Co-op"]);
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 49
            yield "                <li>
                    <a href=\"?search=";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 50, $this->source); })()), "search", [], "any", false, false, false, 50), "html", null, true);
            yield "&genre=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 50, $this->source); })()), "genre", [], "any", false, false, false, 50), "html", null, true);
            yield "&prix=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 50, $this->source); })()), "prix", [], "any", false, false, false, 50), "html", null, true);
            yield "&mode=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["m"], "html", null, true);
            yield "&sort=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 50, $this->source); })()), "sort", [], "any", false, false, false, 50), "html", null, true);
            yield "\"
                       class=\"";
            // line 51
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "mode", [], "any", false, false, false, 51) == $context["m"])) ? ("active") : (""));
            yield "\">
                        <span class=\"filter-dot\"></span>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["m"], "html", null, true);
            yield "
                    </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "            </ul>
        </div>

    </aside>

        <main class=\"content\">

       
        <form method=\"GET\" action=\"/games\" class=\"bg-top-bar\">
            
            <input type=\"hidden\" name=\"genre\" value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 66, $this->source); })()), "genre", [], "any", false, false, false, 66), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"prix\"  value=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 67, $this->source); })()), "prix", [], "any", false, false, false, 67), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"mode\"  value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 68, $this->source); })()), "mode", [], "any", false, false, false, 68), "html", null, true);
        yield "\">

            <div class=\"top-bar\">
                <input type=\"text\"
                       name=\"search\"
                       value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 73, $this->source); })()), "search", [], "any", false, false, false, 73), "html", null, true);
        yield "\"
                       placeholder=\"Rechercher un jeu… (Entrée pour valider)\">
                <select name=\"sort\" onchange=\"this.form.submit()\">
                    <option value=\"popularite\" ";
        // line 76
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 76, $this->source); })()), "sort", [], "any", false, false, false, 76) == "popularite")) ? ("selected") : (""));
        yield ">Popularité</option>
                    <option value=\"price_asc\"  ";
        // line 77
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 77, $this->source); })()), "sort", [], "any", false, false, false, 77) == "price_asc")) ? ("selected") : (""));
        yield ">Prix ↑</option>
                    <option value=\"price_desc\" ";
        // line 78
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 78, $this->source); })()), "sort", [], "any", false, false, false, 78) == "price_desc")) ? ("selected") : (""));
        yield ">Prix ↓</option>
                    <option value=\"discount\"   ";
        // line 79
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 79, $this->source); })()), "sort", [], "any", false, false, false, 79) == "discount")) ? ("selected") : (""));
        yield ">Meilleures promos</option>
                </select>
                <button type=\"submit\">Rechercher</button>
            </div>
        </form>

        <div class=\"results-header\">
            <span class=\"results-title\">Catalogue</span>
            <span class=\"results-count\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 87, $this->source); })())), "html", null, true);
        yield " jeu";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 87, $this->source); })())) > 1)) ? ("s") : (""));
        yield "</span>
        </div>

        <div class=\"game-list\">
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 91, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 92
            yield "            <a href=\"/games/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 92), "html", null, true);
            yield "\" class=\"game-row\">
                <img src=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "image", [], "any", false, false, false, 93), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 93), "html", null, true);
            yield "\">
                <div class=\"game-row-info\">
                    <div class=\"game-row-name\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 95), "html", null, true);
            yield "</div>
                    <div class=\"game-row-desc\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "description", [], "any", false, false, false, 96), "html", null, true);
            yield "</div>
                    <div class=\"game-row-tags\">
                        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "tags", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 99
                yield "                            <span class=\"tag\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                    </div>
                </div>
                <div class=\"game-row-price\">
                    ";
            // line 104
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "free", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "                        <span class=\"price-final free\">Gratuit</span>
                    ";
            } else {
                // line 107
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "old_price", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 108
                    yield "                            <span class=\"price-original\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "old_price", [], "any", false, false, false, 108), "html", null, true);
                    yield " €</span>
                        ";
                }
                // line 110
                yield "                        <span class=\"price-final\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "price", [], "any", false, false, false, 110), "html", null, true);
                yield " €</span>
                        ";
                // line 111
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["game"], "discount", [], "any", false, false, false, 111) > 0)) {
                    // line 112
                    yield "                            <span class=\"game-discount\">−";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "discount", [], "any", false, false, false, 112), "html", null, true);
                    yield "%</span>
                        ";
                }
                // line 114
                yield "                    ";
            }
            // line 115
            yield "                </div>
            </a>
            ";
            $context['_iterated'] = true;
        }
        // line 117
        if (!$context['_iterated']) {
            // line 118
            yield "            <div class=\"empty-state\">
                <p style=\"font-size:2rem;opacity:0.3\">🎮</p>
                <p>Aucun jeu ne correspond à ta recherche.</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "        </div>

    </main>
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
        return "/nav/games.html.twig";
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
        return array (  349 => 123,  339 => 118,  337 => 117,  331 => 115,  328 => 114,  322 => 112,  320 => 111,  315 => 110,  309 => 108,  306 => 107,  302 => 105,  300 => 104,  295 => 101,  286 => 99,  282 => 98,  277 => 96,  273 => 95,  266 => 93,  261 => 92,  256 => 91,  247 => 87,  236 => 79,  232 => 78,  228 => 77,  224 => 76,  218 => 73,  210 => 68,  206 => 67,  202 => 66,  190 => 56,  180 => 52,  176 => 51,  164 => 50,  161 => 49,  157 => 48,  149 => 42,  139 => 38,  135 => 37,  123 => 36,  120 => 35,  116 => 34,  108 => 28,  98 => 24,  94 => 23,  82 => 22,  79 => 21,  75 => 20,  63 => 11,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/style.css') }}\">
    <title>Jeux</title>
</head>
<body>

{{ include('/nav/component/header.html.twig', {pseudo: pseudo}) }}

<div class=\"layout\">

    <aside class=\"sidebar\">

        <div class=\"sidebar-block\">
            <div class=\"sidebar-block-title\">Genres</div>
            <ul class=\"filter-list\">
                {% for genre in ['Tous', 'FPS', 'Course', 'Simulation', 'Sport'] %}
                <li>
                    <a href=\"?search={{ filters.search }}&genre={{ genre }}&prix={{ filters.prix }}&mode={{ filters.mode }}&sort={{ filters.sort }}\"
                       class=\"{{ filters.genre == genre ? 'active' }}\">
                        <span class=\"filter-dot\"></span>{{ genre }}
                    </a>
                </li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"sidebar-block\">
            <div class=\"sidebar-block-title\">Prix</div>
            <ul class=\"filter-list\">
                {% for p in ['Tous', 'Gratuit', 'Moins de 15', 'Moins de 30', 'En promo'] %}
                <li>
                    <a href=\"?search={{ filters.search }}&genre={{ filters.genre }}&prix={{ p }}&mode={{ filters.mode }}&sort={{ filters.sort }}\"
                       class=\"{{ filters.prix == p ? 'active' }}\">
                        <span class=\"filter-dot\"></span>{{ p }}
                    </a>
                </li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"sidebar-block\">
            <div class=\"sidebar-block-title\">Mode</div>
            <ul class=\"filter-list\">
                {% for m in ['Tous', 'Solo', 'Multijoueur', 'Co-op'] %}
                <li>
                    <a href=\"?search={{ filters.search }}&genre={{ filters.genre }}&prix={{ filters.prix }}&mode={{ m }}&sort={{ filters.sort }}\"
                       class=\"{{ filters.mode == m ? 'active' }}\">
                        <span class=\"filter-dot\"></span>{{ m }}
                    </a>
                </li>
                {% endfor %}
            </ul>
        </div>

    </aside>

        <main class=\"content\">

       
        <form method=\"GET\" action=\"/games\" class=\"bg-top-bar\">
            
            <input type=\"hidden\" name=\"genre\" value=\"{{ filters.genre }}\">
            <input type=\"hidden\" name=\"prix\"  value=\"{{ filters.prix }}\">
            <input type=\"hidden\" name=\"mode\"  value=\"{{ filters.mode }}\">

            <div class=\"top-bar\">
                <input type=\"text\"
                       name=\"search\"
                       value=\"{{ filters.search }}\"
                       placeholder=\"Rechercher un jeu… (Entrée pour valider)\">
                <select name=\"sort\" onchange=\"this.form.submit()\">
                    <option value=\"popularite\" {{ filters.sort == 'popularite' ? 'selected' }}>Popularité</option>
                    <option value=\"price_asc\"  {{ filters.sort == 'price_asc'  ? 'selected' }}>Prix ↑</option>
                    <option value=\"price_desc\" {{ filters.sort == 'price_desc' ? 'selected' }}>Prix ↓</option>
                    <option value=\"discount\"   {{ filters.sort == 'discount'   ? 'selected' }}>Meilleures promos</option>
                </select>
                <button type=\"submit\">Rechercher</button>
            </div>
        </form>

        <div class=\"results-header\">
            <span class=\"results-title\">Catalogue</span>
            <span class=\"results-count\">{{ games|length }} jeu{{ games|length > 1 ? 's' }}</span>
        </div>

        <div class=\"game-list\">
            {% for game in games %}
            <a href=\"/games/{{ game.id }}\" class=\"game-row\">
                <img src=\"{{ game.image }}\" alt=\"{{ game.name }}\">
                <div class=\"game-row-info\">
                    <div class=\"game-row-name\">{{ game.name }}</div>
                    <div class=\"game-row-desc\">{{ game.description }}</div>
                    <div class=\"game-row-tags\">
                        {% for tag in game.tags %}
                            <span class=\"tag\">{{ tag }}</span>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"game-row-price\">
                    {% if game.free %}
                        <span class=\"price-final free\">Gratuit</span>
                    {% else %}
                        {% if game.old_price %}
                            <span class=\"price-original\">{{ game.old_price }} €</span>
                        {% endif %}
                        <span class=\"price-final\">{{ game.price }} €</span>
                        {% if game.discount > 0 %}
                            <span class=\"game-discount\">−{{ game.discount }}%</span>
                        {% endif %}
                    {% endif %}
                </div>
            </a>
            {% else %}
            <div class=\"empty-state\">
                <p style=\"font-size:2rem;opacity:0.3\">🎮</p>
                <p>Aucun jeu ne correspond à ta recherche.</p>
            </div>
            {% endfor %}
        </div>

    </main>
</div>

</body>
</html>", "/nav/games.html.twig", "/home/lucas/Documents/IPI/FrameWorkBack/Symfony/TP_Symfony/templates/nav/games.html.twig");
    }
}
