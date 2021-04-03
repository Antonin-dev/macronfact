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
class __TwigTemplate_9fa6a121eb4ad017fed8637d7a2050d5187ac562748018da86b4907f3610f63d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "fact_random/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello FactRandomController!";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fact"] ?? null), "auteur", [], "any", false, false, false, 33), "html", null, true);
        echo "</div>
                                <div class=\"blockDate\">le ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fact"] ?? null), "date", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                        <div class=\"textTweet\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fact"] ?? null), "fact", [], "any", false, false, false, 37), "html", null, true);
        echo " <a href=\"\">#EmmanuelMacronFact</a> </div> 

                    </div>
    </div>

";
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
        return array (  103 => 37,  97 => 34,  93 => 33,  88 => 31,  78 => 24,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fact_random/index.html.twig", "/var/www/html/portfolio/macronfact/templates/fact_random/index.html.twig");
    }
}
