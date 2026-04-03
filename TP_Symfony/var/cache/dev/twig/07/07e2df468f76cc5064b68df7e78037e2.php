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

/* /nav/commu.html */
class __TwigTemplate_3e507eaf1e928b26ceb1805d57725f22 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav/commu.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav/commu.html"));

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
    <title>Communauté</title>

        
    
</head>
<body>

    ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/nav/component/header.html.twig", ["pseudo" => (isset($context["pseudo"]) || array_key_exists("pseudo", $context) ? $context["pseudo"] : (function () { throw new RuntimeError('Variable "pseudo" does not exist.', 14, $this->source); })())]);
        yield "

    <div class=\"page\">

        <h2 class=\"page-title\">Communauté</h2>

        <div class=\"commu-layout\">

            
            <div class=\"feed\">

               
                <form class=\"new-post\" action=\"/comment\" method=\"post\">
                    <div class=\"new-post-header\">
                        <div class=\"avatar lg\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["pseudo"]) || array_key_exists("pseudo", $context) ? $context["pseudo"] : (function () { throw new RuntimeError('Variable "pseudo" does not exist.', 28, $this->source); })()), 0, 1)), "html", null, true);
        yield "</div>
                        <textarea placeholder=\"Partagez votre expérience, une astuce, un clip…\" name=\"comment\"></textarea>
                    </div>
                    <div class=\"new-post-footer\">
                        <button class=\"btn-post\">Publier</button>
                    </div>
                </form>

                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 36, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 37
            yield "
                <div class=\"post-card\">
                    <div class=\"post-header\">
                        <div class=\"avatar\" style=\"background:linear-gradient(135deg,#1b435a,#2ffffc)\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 40), 0, 1)), "html", null, true);
            yield "</div>
                        <div class=\"post-meta\">
                            <div class=\"post-author\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 42), "html", null, true);
            yield "</div>
                            <div class=\"post-time\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 43), "html", null, true);
            yield "</div>
                        </div>
                    </div>
                    <div class=\"post-body\">
                        <p>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 47), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"post-footer\">
                        <button class=\"post-action liked\">👍 142</button>
                        <button class=\"post-action\">💬 38 commentaires</button>
                        <button class=\"post-action\">🔗 Partager</button>
                    </div>
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "               
                <div class=\"post-card\">
                    <div class=\"post-header\">
                        <div class=\"avatar\" style=\"background:linear-gradient(135deg,#2d1b5a,#7b2fff)\">XR</div>
                        <div class=\"post-meta\">
                            <div class=\"post-author\">XRaider_77</div>
                            <div class=\"post-time\">Il y a 12 minutes</div>
                        </div>
                        <span class=\"post-game-tag\">Arma Reforger</span>
                    </div>
                    <div class=\"post-body\">
                        <img class=\"post-img\" src=\"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1874880/capsule_616x353.jpg?t=1770816362\" alt=\"\">
                        <p>Venez rejoindre notre escouade sur Arma Reforger ! On cherche des joueurs sérieux pour des sessions tactiques le week-end. Discord dans le profil. 🪖</p>
                    </div>
                    <div class=\"post-footer\">
                        <button class=\"post-action liked\">👍 142</button>
                        <button class=\"post-action\">💬 38 commentaires</button>
                        <button class=\"post-action\">🔗 Partager</button>
                    </div>
                </div>

                
                <div class=\"post-card\">
                    <div class=\"post-header\">
                        <div class=\"avatar\" style=\"background:linear-gradient(135deg,#0a2a0a,#27ae60)\">GH</div>
                        <div class=\"post-meta\">
                            <div class=\"post-author\">Ghost_Hunter</div>
                            <div class=\"post-time\">Il y a 1 heure</div>
                        </div>
                        <span class=\"post-game-tag\">Ghost Recon</span>
                    </div>
                    <div class=\"post-body\">
                        <p>Petit tip pour Ghost Recon Wildlands : si vous passez en mode \"fantôme\" avant d'entrer dans un camp, les ennemis ne repèrent pas votre drone de reconnaissance. Ça change vraiment la façon d'aborder les missions de reconnaissance. Partagez vos astuces en commentaires !</p>
                    </div>
                    <div class=\"post-footer\">
                        <button class=\"post-action\">👍 89</button>
                        <button class=\"post-action\">💬 21 commentaires</button>
                        <button class=\"post-action\">🔗 Partager</button>
                    </div>
                </div>

               
                <div class=\"post-card\">
                    <div class=\"post-header\">
                        <div class=\"avatar\" style=\"background:linear-gradient(135deg,#2a0a0a,#c0392b)\">TK</div>
                        <div class=\"post-meta\">
                            <div class=\"post-author\">TarkovKing</div>
                            <div class=\"post-time\">Il y a 3 heures</div>
                        </div>
                        <span class=\"post-game-tag\">Escape From Tarkov</span>
                    </div>
                    <div class=\"post-body\">
                        <p>Wipe confirmé la semaine prochaine sur Tarkov. Préparez-vous à repartir de zéro. Quelqu'un a des infos sur les changements de la nouvelle patch ? J'ai entendu parler de nouvelles maps mais rien d'officiel encore.</p>
                    </div>
                    <div class=\"post-footer\">
                        <button class=\"post-action\">👍 214</button>
                        <button class=\"post-action\">💬 93 commentaires</button>
                        <button class=\"post-action\">🔗 Partager</button>
                    </div>
                </div>

                
                <div class=\"post-card\">
                    <div class=\"post-header\">
                        <div class=\"avatar\" style=\"background:linear-gradient(135deg,#0a1a2a,#1a6fbf)\">DC</div>
                        <div class=\"post-meta\">
                            <div class=\"post-author\">DCS_Pilote</div>
                            <div class=\"post-time\">Il y a 5 heures</div>
                        </div>
                        <span class=\"post-game-tag\">DCS World</span>
                    </div>
                    <div class=\"post-body\">
                        <img class=\"post-img\" src=\"https://www.digitalcombatsimulator.com/upload/iblock/e8a/0hwm640qpoo3qzz7b03s24ol8w0trq3k/dcs_home%20page_cover.png\" alt=\"\">
                        <p>Après 200h sur DCS, j'ai enfin réussi un appontage de nuit sur le Charles de Gaulle. Le HOTAS Thrustmaster fait vraiment toute la différence. Guide complet en commentaire pour ceux qui débutent ! ✈️</p>
                    </div>
                    <div class=\"post-footer\">
                        <button class=\"post-action\">👍 307</button>
                        <button class=\"post-action\">💬 54 commentaires</button>
                        <button class=\"post-action\">🔗 Partager</button>
                    </div>
                </div>

            </div>

           
            <aside class=\"sidebar\">

                <div class=\"side-card\">
                    <div class=\"side-card-title\">👥 Joueurs en ligne — 12 480</div>
                    <div class=\"player-list\">
                        <div class=\"player-row\">
                            <span class=\"player-status ingame\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">XRaider_77</div>
                                <div class=\"player-activity\">Joue à Arma Reforger</div>
                            </div>
                        </div>
                        <div class=\"player-row\">
                            <span class=\"player-status ingame\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">TarkovKing</div>
                                <div class=\"player-activity\">Joue à Escape From Tarkov</div>
                            </div>
                        </div>
                        <div class=\"player-row\">
                            <span class=\"player-status online\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">Ghost_Hunter</div>
                                <div class=\"player-activity\">En ligne</div>
                            </div>
                        </div>
                        <div class=\"player-row\">
                            <span class=\"player-status ingame\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">DCS_Pilote</div>
                                <div class=\"player-activity\">Joue à DCS World</div>
                            </div>
                        </div>
                        <div class=\"player-row\">
                            <span class=\"player-status away\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">RoadMaster_EU</div>
                                <div class=\"player-activity\">Absent</div>
                            </div>
                        </div>
                        <div class=\"player-row\">
                            <span class=\"player-status ingame\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">SniperElite_FR</div>
                                <div class=\"player-activity\">Joue à Ready Or Not</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"side-card\">
                    <div class=\"side-card-title\">🔥 Sujets tendance</div>
                    <div class=\"topic-list\">
                        <a href=\"/games/3\" class=\"topic-row\">
                            <span class=\"topic-rank\">#1</span>
                            <span class=\"topic-name\">Wipe Tarkov</span>
                            <span class=\"topic-count\">1 204 posts</span>
                        </a>
                        <a href=\"/games/1\" class=\"topic-row\">
                            <span class=\"topic-rank\">#2</span>
                            <span class=\"topic-name\">Arma Reforger 1.4</span>
                            <span class=\"topic-count\">876 posts</span>
                        </a>
                        <a href=\"/games/4\" class=\"topic-row\">
                            <span class=\"topic-rank\">#3</span>
                            <span class=\"topic-name\">FIFA 2033</span>
                            <span class=\"topic-count\">643 posts</span>
                        </a>
                        <a href=\"/games/7\" class=\"topic-row\">
                            <span class=\"topic-rank\">#4</span>
                            <span class=\"topic-name\">DCS — nouvelle map</span>
                            <span class=\"topic-count\">512 posts</span>
                        </a>
                        <a href=\"/games/6\" class=\"topic-row\">
                            <span class=\"topic-rank\">#5</span>
                            <span class=\"topic-name\">Ready Or Not update</span>
                            <span class=\"topic-count\">398 posts</span>
                        </a>
                    </div>
                </div>

                <div class=\"side-card\">
                    <div class=\"side-card-title\">📊 Statistiques</div>
                    <div class=\"player-list\">
                        <div class=\"player-row\" style=\"cursor:default\">
                            <span style=\"font-size:0.8rem;color:var(--text-dim);flex:1\">Posts aujourd'hui</span>
                            <span style=\"font-family:var(--font-display);font-weight:700;color:var(--accent)\">3 841</span>
                        </div>
                        <div class=\"player-row\" style=\"cursor:default\">
                            <span style=\"font-size:0.8rem;color:var(--text-dim);flex:1\">Nouveaux membres</span>
                            <span style=\"font-family:var(--font-display);font-weight:700;color:var(--accent)\">127</span>
                        </div>
                        <div class=\"player-row\" style=\"cursor:default\">
                            <span style=\"font-size:0.8rem;color:var(--text-dim);flex:1\">Groupes actifs</span>
                            <span style=\"font-family:var(--font-display);font-weight:700;color:var(--accent)\">48</span>
                        </div>
                    </div>
                </div>

            </aside>
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
        return "/nav/commu.html";
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
        return array (  135 => 57,  119 => 47,  112 => 43,  108 => 42,  103 => 40,  98 => 37,  94 => 36,  83 => 28,  66 => 14,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/style.css') }}\">
    <title>Communauté</title>

        
    
</head>
<body>

    {{ include('/nav/component/header.html.twig', {pseudo: pseudo}) }}

    <div class=\"page\">

        <h2 class=\"page-title\">Communauté</h2>

        <div class=\"commu-layout\">

            
            <div class=\"feed\">

               
                <form class=\"new-post\" action=\"/comment\" method=\"post\">
                    <div class=\"new-post-header\">
                        <div class=\"avatar lg\">{{ pseudo|slice(0,1)|upper }}</div>
                        <textarea placeholder=\"Partagez votre expérience, une astuce, un clip…\" name=\"comment\"></textarea>
                    </div>
                    <div class=\"new-post-footer\">
                        <button class=\"btn-post\">Publier</button>
                    </div>
                </form>

                {% for comment in comments|reverse %}

                <div class=\"post-card\">
                    <div class=\"post-header\">
                        <div class=\"avatar\" style=\"background:linear-gradient(135deg,#1b435a,#2ffffc)\">{{ comment.pseudo|slice(0,1)|upper }}</div>
                        <div class=\"post-meta\">
                            <div class=\"post-author\">{{comment.pseudo}}</div>
                            <div class=\"post-time\">{{comment.date}}</div>
                        </div>
                    </div>
                    <div class=\"post-body\">
                        <p>{{comment.comment}}</p>
                    </div>
                    <div class=\"post-footer\">
                        <button class=\"post-action liked\">👍 142</button>
                        <button class=\"post-action\">💬 38 commentaires</button>
                        <button class=\"post-action\">🔗 Partager</button>
                    </div>
                </div>

                {% endfor %}
               
                <div class=\"post-card\">
                    <div class=\"post-header\">
                        <div class=\"avatar\" style=\"background:linear-gradient(135deg,#2d1b5a,#7b2fff)\">XR</div>
                        <div class=\"post-meta\">
                            <div class=\"post-author\">XRaider_77</div>
                            <div class=\"post-time\">Il y a 12 minutes</div>
                        </div>
                        <span class=\"post-game-tag\">Arma Reforger</span>
                    </div>
                    <div class=\"post-body\">
                        <img class=\"post-img\" src=\"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1874880/capsule_616x353.jpg?t=1770816362\" alt=\"\">
                        <p>Venez rejoindre notre escouade sur Arma Reforger ! On cherche des joueurs sérieux pour des sessions tactiques le week-end. Discord dans le profil. 🪖</p>
                    </div>
                    <div class=\"post-footer\">
                        <button class=\"post-action liked\">👍 142</button>
                        <button class=\"post-action\">💬 38 commentaires</button>
                        <button class=\"post-action\">🔗 Partager</button>
                    </div>
                </div>

                
                <div class=\"post-card\">
                    <div class=\"post-header\">
                        <div class=\"avatar\" style=\"background:linear-gradient(135deg,#0a2a0a,#27ae60)\">GH</div>
                        <div class=\"post-meta\">
                            <div class=\"post-author\">Ghost_Hunter</div>
                            <div class=\"post-time\">Il y a 1 heure</div>
                        </div>
                        <span class=\"post-game-tag\">Ghost Recon</span>
                    </div>
                    <div class=\"post-body\">
                        <p>Petit tip pour Ghost Recon Wildlands : si vous passez en mode \"fantôme\" avant d'entrer dans un camp, les ennemis ne repèrent pas votre drone de reconnaissance. Ça change vraiment la façon d'aborder les missions de reconnaissance. Partagez vos astuces en commentaires !</p>
                    </div>
                    <div class=\"post-footer\">
                        <button class=\"post-action\">👍 89</button>
                        <button class=\"post-action\">💬 21 commentaires</button>
                        <button class=\"post-action\">🔗 Partager</button>
                    </div>
                </div>

               
                <div class=\"post-card\">
                    <div class=\"post-header\">
                        <div class=\"avatar\" style=\"background:linear-gradient(135deg,#2a0a0a,#c0392b)\">TK</div>
                        <div class=\"post-meta\">
                            <div class=\"post-author\">TarkovKing</div>
                            <div class=\"post-time\">Il y a 3 heures</div>
                        </div>
                        <span class=\"post-game-tag\">Escape From Tarkov</span>
                    </div>
                    <div class=\"post-body\">
                        <p>Wipe confirmé la semaine prochaine sur Tarkov. Préparez-vous à repartir de zéro. Quelqu'un a des infos sur les changements de la nouvelle patch ? J'ai entendu parler de nouvelles maps mais rien d'officiel encore.</p>
                    </div>
                    <div class=\"post-footer\">
                        <button class=\"post-action\">👍 214</button>
                        <button class=\"post-action\">💬 93 commentaires</button>
                        <button class=\"post-action\">🔗 Partager</button>
                    </div>
                </div>

                
                <div class=\"post-card\">
                    <div class=\"post-header\">
                        <div class=\"avatar\" style=\"background:linear-gradient(135deg,#0a1a2a,#1a6fbf)\">DC</div>
                        <div class=\"post-meta\">
                            <div class=\"post-author\">DCS_Pilote</div>
                            <div class=\"post-time\">Il y a 5 heures</div>
                        </div>
                        <span class=\"post-game-tag\">DCS World</span>
                    </div>
                    <div class=\"post-body\">
                        <img class=\"post-img\" src=\"https://www.digitalcombatsimulator.com/upload/iblock/e8a/0hwm640qpoo3qzz7b03s24ol8w0trq3k/dcs_home%20page_cover.png\" alt=\"\">
                        <p>Après 200h sur DCS, j'ai enfin réussi un appontage de nuit sur le Charles de Gaulle. Le HOTAS Thrustmaster fait vraiment toute la différence. Guide complet en commentaire pour ceux qui débutent ! ✈️</p>
                    </div>
                    <div class=\"post-footer\">
                        <button class=\"post-action\">👍 307</button>
                        <button class=\"post-action\">💬 54 commentaires</button>
                        <button class=\"post-action\">🔗 Partager</button>
                    </div>
                </div>

            </div>

           
            <aside class=\"sidebar\">

                <div class=\"side-card\">
                    <div class=\"side-card-title\">👥 Joueurs en ligne — 12 480</div>
                    <div class=\"player-list\">
                        <div class=\"player-row\">
                            <span class=\"player-status ingame\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">XRaider_77</div>
                                <div class=\"player-activity\">Joue à Arma Reforger</div>
                            </div>
                        </div>
                        <div class=\"player-row\">
                            <span class=\"player-status ingame\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">TarkovKing</div>
                                <div class=\"player-activity\">Joue à Escape From Tarkov</div>
                            </div>
                        </div>
                        <div class=\"player-row\">
                            <span class=\"player-status online\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">Ghost_Hunter</div>
                                <div class=\"player-activity\">En ligne</div>
                            </div>
                        </div>
                        <div class=\"player-row\">
                            <span class=\"player-status ingame\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">DCS_Pilote</div>
                                <div class=\"player-activity\">Joue à DCS World</div>
                            </div>
                        </div>
                        <div class=\"player-row\">
                            <span class=\"player-status away\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">RoadMaster_EU</div>
                                <div class=\"player-activity\">Absent</div>
                            </div>
                        </div>
                        <div class=\"player-row\">
                            <span class=\"player-status ingame\"></span>
                            <div class=\"player-info\">
                                <div class=\"player-name\">SniperElite_FR</div>
                                <div class=\"player-activity\">Joue à Ready Or Not</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"side-card\">
                    <div class=\"side-card-title\">🔥 Sujets tendance</div>
                    <div class=\"topic-list\">
                        <a href=\"/games/3\" class=\"topic-row\">
                            <span class=\"topic-rank\">#1</span>
                            <span class=\"topic-name\">Wipe Tarkov</span>
                            <span class=\"topic-count\">1 204 posts</span>
                        </a>
                        <a href=\"/games/1\" class=\"topic-row\">
                            <span class=\"topic-rank\">#2</span>
                            <span class=\"topic-name\">Arma Reforger 1.4</span>
                            <span class=\"topic-count\">876 posts</span>
                        </a>
                        <a href=\"/games/4\" class=\"topic-row\">
                            <span class=\"topic-rank\">#3</span>
                            <span class=\"topic-name\">FIFA 2033</span>
                            <span class=\"topic-count\">643 posts</span>
                        </a>
                        <a href=\"/games/7\" class=\"topic-row\">
                            <span class=\"topic-rank\">#4</span>
                            <span class=\"topic-name\">DCS — nouvelle map</span>
                            <span class=\"topic-count\">512 posts</span>
                        </a>
                        <a href=\"/games/6\" class=\"topic-row\">
                            <span class=\"topic-rank\">#5</span>
                            <span class=\"topic-name\">Ready Or Not update</span>
                            <span class=\"topic-count\">398 posts</span>
                        </a>
                    </div>
                </div>

                <div class=\"side-card\">
                    <div class=\"side-card-title\">📊 Statistiques</div>
                    <div class=\"player-list\">
                        <div class=\"player-row\" style=\"cursor:default\">
                            <span style=\"font-size:0.8rem;color:var(--text-dim);flex:1\">Posts aujourd'hui</span>
                            <span style=\"font-family:var(--font-display);font-weight:700;color:var(--accent)\">3 841</span>
                        </div>
                        <div class=\"player-row\" style=\"cursor:default\">
                            <span style=\"font-size:0.8rem;color:var(--text-dim);flex:1\">Nouveaux membres</span>
                            <span style=\"font-family:var(--font-display);font-weight:700;color:var(--accent)\">127</span>
                        </div>
                        <div class=\"player-row\" style=\"cursor:default\">
                            <span style=\"font-size:0.8rem;color:var(--text-dim);flex:1\">Groupes actifs</span>
                            <span style=\"font-family:var(--font-display);font-weight:700;color:var(--accent)\">48</span>
                        </div>
                    </div>
                </div>

            </aside>
        </div>
    </div>

</body>
</html>", "/nav/commu.html", "/home/lucas/Documents/IPI/FrameWorkBack/Symfony/TP_Symfony/templates/nav/commu.html");
    }
}
