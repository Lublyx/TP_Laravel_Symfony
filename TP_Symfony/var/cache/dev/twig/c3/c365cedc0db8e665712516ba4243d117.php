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

/* /nav/acceuil.html.twig */
class __TwigTemplate_bc136115d6e3aabe84e7962527dc5cf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav/acceuil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav/acceuil.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/style.css"), "html", null, true);
        yield "\">
    <title>Acceuil</title>
</head>

<body>

    ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/nav/component/header.html.twig", ["pseudo" => (isset($context["pseudo"]) || array_key_exists("pseudo", $context) ? $context["pseudo"] : (function () { throw new RuntimeError('Variable "pseudo" does not exist.', 13, $this->source); })())]);
        yield "
    

 <main class=\"page\">

        <section>
            <div class=\"hero hero-bg\">
                <div class=\"hero-content\">
                    <div class=\"hero-badge\">✦ Jeu en vedette</div>
                    <h2>Arma Reforger</h2>
                    <p>Un FPS réaliste qui vous plonge au milieux de la seconde guerre mondial avec la posibiliter de faire la campagne comme de jouer en multijoueur</p>
                    <div class=\"hero-actions\">
                        <a href=\"/games/1\" class=\"btn-primary\">Voir le jeu</a>
                        <span class=\"hero-price\">29,99 €</span>
                    </div>
                </div>
            </div>
        </section>

        <div class=\"stats-bar\">
            <div class=\"stat-item\">
                <div class=\"stat-value\">12 480</div>
                <div class=\"stat-label\">Joueurs en ligne</div>
            </div>
            <div class=\"stat-item\">
                <div class=\"stat-value\">3 240</div>
                <div class=\"stat-label\">Jeux disponibles</div>
            </div>
            <div class=\"stat-item\">
                <div class=\"stat-value\">98K</div>
                <div class=\"stat-label\">Membres actifs</div>
            </div>
        </div>

        <section>
            <div class=\"section-header\">
                <span class=\"section-title\">Offres spéciales</span>
                <a href=\"/games\" class=\"section-link\">Tout voir →</a>
            </div>
            <div class=\"offers-grid\">
                <a href=\"/games\" class=\"offer-card\">
                    <div class=\"offer-icon blue\">⚡</div>
                    <div class=\"offer-text\">
                        <h3>Soldes du week-end</h3>
                        <p>Jusqu'à −80 % sur plus de 500 titres. Offre valable jusqu'à dimanche minuit.</p>
                    </div>
                </a>
                <a href=\"/games/3\" class=\"offer-card\">
                    <div class=\"offer-icon green\">🎁</div>
                    <div class=\"offer-text\">
                        <h3>Jeu gratuit du mois</h3>
                        <p>Réclamez <strong style=\"color:var(--text-primary)\">Escape From Tarkov</strong> gratuitement pour toute la semaine.</p>
                    </div>
                </a>
            </div>
        </section>

        <section>
            <div class=\"section-header\">
                <span class=\"section-title\">Populaires en ce moment</span>
                <a href=\"/games\" class=\"section-link\">Tout voir →</a>
            </div>
            <div class=\"game-grid\">

                <a href=\"/games/1\" class=\"game-card\">
    <img src=\"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1874880/capsule_616x353.jpg?t=1770816362\" alt=\"\">
                    
                    <div class=\"game-info\">
                        <div class=\"game-name\">Arma Reforger</div>
                        <div class=\"game-tags\"><span class=\"tag\">FPS</span><span class=\"tag\">Action</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">29,99 €</span>
                            <span class=\"game-discount\">−40%</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/2\" class=\"game-card\">
                    <img src=\"https://image.api.playstation.com/vulcan/ap/rnd/202211/2510/oAWEVsqIwM2Db534bhSLT6lp.png\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">Need For Speed</div>
                        <div class=\"game-tags\"><span class=\"tag\">Course</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price free\">Gratuit</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/3\" class=\"game-card\">
                    <img src=\"https://www.goclecd.fr/wp-content/uploads/escape-from-tarkov-gift-code_resized.webp\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">Escape From Tarkov</div>
                        <div class=\"game-tags\"><span class=\"tag\">FPS</span><span class=\"tag\">Réaliste</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">79,99 €</span>
                            <span class=\"game-discount\">−25%</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/4\" class=\"game-card\">
                    <img src=\"https://leclaireur.fnac.com/wp-content/uploads/2022/09/fifa-vinicius-1256x826.jpg\" alt=\"\">

                    <div class=\"game-info\">
                        <div class=\"game-name\">FIFA 2033</div>
                        <div class=\"game-tags\"><span class=\"tag\">Sport</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">24,99 €</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/5\" class=\"game-card\">
<img src=\"https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/460930/capsule_616x353.jpg?t=1764776201\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">Ghost Recon Wildland</div>
                        <div class=\"game-tags\"><span class=\"tag\">FPS</span><span class=\"tag\">Action</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">14,99 €</span>
                            <span class=\"game-discount\">−50%</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/6\" class=\"game-card\">
                    <img src=\"https://image.api.playstation.com/vulcan/ap/rnd/202504/0914/263dd759a82791236ec990ec3e0930b9dbd5cca948b25c75.jpg\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">Ready Or Not</div>
                        <div class=\"game-tags\"><span class=\"tag\">FPS</span><span class=\"tag\">Réaliste</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">34,99 €</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/7\" class=\"game-card\">
                    <<img src=\"https://www.digitalcombatsimulator.com/upload/iblock/e8a/0hwm640qpoo3qzz7b03s24ol8w0trq3k/dcs_home%20page_cover.png\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">DCS</div>
                        <div class=\"game-tags\"><span class=\"tag\">Simulation</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price free\">Gratuit</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/8\" class=\"game-card\">
                    <img src=\"https://gaming-cdn.com/images/products/309/orig/euro-truck-simulator-2-pc-mac-jeu-steam-europe-us-canada-cover.jpg?v=1732535055\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">Euro Truck Simulator 2</div>
                        <div class=\"game-tags\"><span class=\"tag\">Simulation</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">9,99 €</span>
                            <span class=\"game-discount\">−60%</span>
                        </div>
                    </div>
                </a>

            </div>
        </section>

    </main>

</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/nav/acceuil.html.twig";
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
        return array (  65 => 13,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{asset('styles/style.css')}}\">
    <title>Acceuil</title>
</head>

<body>

    {{ include('/nav/component/header.html.twig', {pseudo: pseudo}) }}
    

 <main class=\"page\">

        <section>
            <div class=\"hero hero-bg\">
                <div class=\"hero-content\">
                    <div class=\"hero-badge\">✦ Jeu en vedette</div>
                    <h2>Arma Reforger</h2>
                    <p>Un FPS réaliste qui vous plonge au milieux de la seconde guerre mondial avec la posibiliter de faire la campagne comme de jouer en multijoueur</p>
                    <div class=\"hero-actions\">
                        <a href=\"/games/1\" class=\"btn-primary\">Voir le jeu</a>
                        <span class=\"hero-price\">29,99 €</span>
                    </div>
                </div>
            </div>
        </section>

        <div class=\"stats-bar\">
            <div class=\"stat-item\">
                <div class=\"stat-value\">12 480</div>
                <div class=\"stat-label\">Joueurs en ligne</div>
            </div>
            <div class=\"stat-item\">
                <div class=\"stat-value\">3 240</div>
                <div class=\"stat-label\">Jeux disponibles</div>
            </div>
            <div class=\"stat-item\">
                <div class=\"stat-value\">98K</div>
                <div class=\"stat-label\">Membres actifs</div>
            </div>
        </div>

        <section>
            <div class=\"section-header\">
                <span class=\"section-title\">Offres spéciales</span>
                <a href=\"/games\" class=\"section-link\">Tout voir →</a>
            </div>
            <div class=\"offers-grid\">
                <a href=\"/games\" class=\"offer-card\">
                    <div class=\"offer-icon blue\">⚡</div>
                    <div class=\"offer-text\">
                        <h3>Soldes du week-end</h3>
                        <p>Jusqu'à −80 % sur plus de 500 titres. Offre valable jusqu'à dimanche minuit.</p>
                    </div>
                </a>
                <a href=\"/games/3\" class=\"offer-card\">
                    <div class=\"offer-icon green\">🎁</div>
                    <div class=\"offer-text\">
                        <h3>Jeu gratuit du mois</h3>
                        <p>Réclamez <strong style=\"color:var(--text-primary)\">Escape From Tarkov</strong> gratuitement pour toute la semaine.</p>
                    </div>
                </a>
            </div>
        </section>

        <section>
            <div class=\"section-header\">
                <span class=\"section-title\">Populaires en ce moment</span>
                <a href=\"/games\" class=\"section-link\">Tout voir →</a>
            </div>
            <div class=\"game-grid\">

                <a href=\"/games/1\" class=\"game-card\">
    <img src=\"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1874880/capsule_616x353.jpg?t=1770816362\" alt=\"\">
                    
                    <div class=\"game-info\">
                        <div class=\"game-name\">Arma Reforger</div>
                        <div class=\"game-tags\"><span class=\"tag\">FPS</span><span class=\"tag\">Action</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">29,99 €</span>
                            <span class=\"game-discount\">−40%</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/2\" class=\"game-card\">
                    <img src=\"https://image.api.playstation.com/vulcan/ap/rnd/202211/2510/oAWEVsqIwM2Db534bhSLT6lp.png\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">Need For Speed</div>
                        <div class=\"game-tags\"><span class=\"tag\">Course</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price free\">Gratuit</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/3\" class=\"game-card\">
                    <img src=\"https://www.goclecd.fr/wp-content/uploads/escape-from-tarkov-gift-code_resized.webp\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">Escape From Tarkov</div>
                        <div class=\"game-tags\"><span class=\"tag\">FPS</span><span class=\"tag\">Réaliste</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">79,99 €</span>
                            <span class=\"game-discount\">−25%</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/4\" class=\"game-card\">
                    <img src=\"https://leclaireur.fnac.com/wp-content/uploads/2022/09/fifa-vinicius-1256x826.jpg\" alt=\"\">

                    <div class=\"game-info\">
                        <div class=\"game-name\">FIFA 2033</div>
                        <div class=\"game-tags\"><span class=\"tag\">Sport</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">24,99 €</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/5\" class=\"game-card\">
<img src=\"https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/460930/capsule_616x353.jpg?t=1764776201\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">Ghost Recon Wildland</div>
                        <div class=\"game-tags\"><span class=\"tag\">FPS</span><span class=\"tag\">Action</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">14,99 €</span>
                            <span class=\"game-discount\">−50%</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/6\" class=\"game-card\">
                    <img src=\"https://image.api.playstation.com/vulcan/ap/rnd/202504/0914/263dd759a82791236ec990ec3e0930b9dbd5cca948b25c75.jpg\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">Ready Or Not</div>
                        <div class=\"game-tags\"><span class=\"tag\">FPS</span><span class=\"tag\">Réaliste</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">34,99 €</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/7\" class=\"game-card\">
                    <<img src=\"https://www.digitalcombatsimulator.com/upload/iblock/e8a/0hwm640qpoo3qzz7b03s24ol8w0trq3k/dcs_home%20page_cover.png\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">DCS</div>
                        <div class=\"game-tags\"><span class=\"tag\">Simulation</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price free\">Gratuit</span>
                        </div>
                    </div>
                </a>

                <a href=\"/games/8\" class=\"game-card\">
                    <img src=\"https://gaming-cdn.com/images/products/309/orig/euro-truck-simulator-2-pc-mac-jeu-steam-europe-us-canada-cover.jpg?v=1732535055\" alt=\"\">
                    <div class=\"game-info\">
                        <div class=\"game-name\">Euro Truck Simulator 2</div>
                        <div class=\"game-tags\"><span class=\"tag\">Simulation</span></div>
                        <div class=\"game-footer\">
                            <span class=\"game-price\">9,99 €</span>
                            <span class=\"game-discount\">−60%</span>
                        </div>
                    </div>
                </a>

            </div>
        </section>

    </main>

</body>
</html>

", "/nav/acceuil.html.twig", "/home/lucas/Documents/IPI/FrameWorkBack/Symfony/TP_Symfony/templates/nav/acceuil.html.twig");
    }
}
