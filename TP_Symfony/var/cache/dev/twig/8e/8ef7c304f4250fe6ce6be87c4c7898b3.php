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

/* /nav/component/header.html.twig */
class __TwigTemplate_2544d79054180c5fd9f660ed90bd06f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav/component/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav/component/header.html.twig"));

        // line 1
        yield "<header>
";
        // line 2
        if (((isset($context["pseudo"]) || array_key_exists("pseudo", $context) ? $context["pseudo"] : (function () { throw new RuntimeError('Variable "pseudo" does not exist.', 2, $this->source); })()) != "")) {
            // line 3
            yield "    <h1>Bienvenu ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pseudo"]) || array_key_exists("pseudo", $context) ? $context["pseudo"] : (function () { throw new RuntimeError('Variable "pseudo" does not exist.', 3, $this->source); })()), "html", null, true);
            yield "</h1>
";
        }
        // line 5
        yield "
    <nav>
        <ul>
            <a href=\"/acceuil\"><li>Acceuil</li></a>
            <a href=\"/games\"><li>Jeux</li></a>
            <a href=\"/commu\"><li>Communauté</li></a>
        </ul>
    </nav>
    </header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/nav/component/header.html.twig";
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
        return array (  59 => 5,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header>
{%if pseudo != ''%}
    <h1>Bienvenu {{pseudo}}</h1>
{%endif%}

    <nav>
        <ul>
            <a href=\"/acceuil\"><li>Acceuil</li></a>
            <a href=\"/games\"><li>Jeux</li></a>
            <a href=\"/commu\"><li>Communauté</li></a>
        </ul>
    </nav>
    </header>", "/nav/component/header.html.twig", "/home/lucas/Documents/IPI/FrameWorkBack/Symfony/TP_Symfony/templates/nav/component/header.html.twig");
    }
}
