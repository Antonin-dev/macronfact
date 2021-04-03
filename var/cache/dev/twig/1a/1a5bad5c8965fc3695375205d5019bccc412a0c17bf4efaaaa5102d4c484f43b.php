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

/* fact_random/index.html.twig */
class __TwigTemplate_68202e86ca4eb9bf3d0781a7d2e6052a5360ca2b2245b113c5859470c58e5dda extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fact_random/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fact_random/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fact_random/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello FactRandomController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"gros-body\" id=\"about\">
        <h2 class=\"page-section-heading text-center text-uppercase text-white\">Fun Facts</h2>
                <!-- Icon Divider-->
                <div class=\"divider-custom divider-light\">
                    <div class=\"divider-custom-line\"></div>
                    <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                    <div class=\"divider-custom-line\"></div>
                </div>

          <div class=\"row\">
                    <div class=\"col-8 m-auto text-white\">
                        <p class=\"lead\">Bienvenue sur Emmanuel Macron notre Sauveur,</p>            
                        <p class=\"lead\">cliquer sur le bouton pour generer un de ces exploits :</p>
                    </div>
                </div>

        <div class=\"text-center mt-4 mb-3\">
                        <a class=\"btn btn-xl btn-outline-light\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fact_random");
        echo "\">
                            Générer un Nouveau Miracle !
                        </a>
                    </div>

        <div class=\"monTweet col-10 m-auto justify-content-center text-center\">
                        <div class=\"photoNameDate\">
                            <img class=\"imageTweeter\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/funnyMacron.png"), "html", null, true);
        echo "\"></img>
                            <div class=\"blockNameDate\">
                                <div class=\"blockName\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fact"]) || array_key_exists("fact", $context) ? $context["fact"] : (function () { throw new RuntimeError('Variable "fact" does not exist.', 33, $this->source); })()), "auteur", [], "any", false, false, false, 33), "html", null, true);
        echo "</div>
                                <div class=\"blockDate\">le ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fact"]) || array_key_exists("fact", $context) ? $context["fact"] : (function () { throw new RuntimeError('Variable "fact" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                        <div class=\"textTweet\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fact"]) || array_key_exists("fact", $context) ? $context["fact"] : (function () { throw new RuntimeError('Variable "fact" does not exist.', 37, $this->source); })()), "fact", [], "any", false, false, false, 37), "html", null, true);
        echo " <a href=\"\">#EmmanuelMacronFact</a> </div> 

                    </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fact_random/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 37,  127 => 34,  123 => 33,  118 => 31,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FactRandomController!{% endblock %}

{% block content %}

    <div class=\"gros-body\" id=\"about\">
        <h2 class=\"page-section-heading text-center text-uppercase text-white\">Fun Facts</h2>
                <!-- Icon Divider-->
                <div class=\"divider-custom divider-light\">
                    <div class=\"divider-custom-line\"></div>
                    <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                    <div class=\"divider-custom-line\"></div>
                </div>

          <div class=\"row\">
                    <div class=\"col-8 m-auto text-white\">
                        <p class=\"lead\">Bienvenue sur Emmanuel Macron notre Sauveur,</p>            
                        <p class=\"lead\">cliquer sur le bouton pour generer un de ces exploits :</p>
                    </div>
                </div>

        <div class=\"text-center mt-4 mb-3\">
                        <a class=\"btn btn-xl btn-outline-light\" href=\"{{ path('fact_random') }}\">
                            Générer un Nouveau Miracle !
                        </a>
                    </div>

        <div class=\"monTweet col-10 m-auto justify-content-center text-center\">
                        <div class=\"photoNameDate\">
                            <img class=\"imageTweeter\" src=\"{{ asset('assets/img/funnyMacron.png') }}\"></img>
                            <div class=\"blockNameDate\">
                                <div class=\"blockName\">{{fact.auteur}}</div>
                                <div class=\"blockDate\">le {{fact.date|date('d/m/Y')}}</div>
                            </div>
                        </div>
                        <div class=\"textTweet\">{{fact.fact}} <a href=\"\">#EmmanuelMacronFact</a> </div> 

                    </div>
    </div>

{% endblock %}




                ", "fact_random/index.html.twig", "/var/www/html/portfolio/macronfact/templates/fact_random/index.html.twig");
    }
}
