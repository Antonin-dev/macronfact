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
class __TwigTemplate_da046760ac23ab4fd8e3f58e4515c0551065e90ccce5f039e9e6e90732443286 extends Template
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
            'nav' => [$this, 'block_nav'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
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
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('nav', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "            <footer class=\"footer text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Footer Location-->
                    <div class=\"col-lg-4 mb-5 mb-lg-0\">
                        <h4 class=\"text-uppercase mb-4\">Location</h4>
                        <p class=\"lead mb-0\">
                            69 rue du Paradie
                            <br />
                            Montpellier, 420
                            <br />
                            France
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class=\"col-lg-4 mb-5 mb-lg-0\">
                        <h4 class=\"text-uppercase mb-4\">Around the Web</h4>
                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#!\"><i class=\"fab fa-fw fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#!\"><i class=\"fab fa-fw fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#!\"><i class=\"fab fa-fw fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#!\"><i class=\"fab fa-fw fa-dribbble\"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class=\"col-lg-4\">
                        <h4 class=\"text-uppercase mb-4\">About Emmanuel Macron Fun Facts</h4>
                        <p class=\"lead mb-0\">
                            Emmanuel Macron Fun Facts is a free to use website to make people laught.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        ";
        // line 105
        $this->displayBlock('footer', $context, $blocks);
        // line 109
        echo "
        ";
        // line 110
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
        echo "    </head>
    <body>
        ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Emmanuel Macron Fun Facts - Home Page";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\" />
        <!-- Font Awesome icons (free version)-->
        <script src=\"https://use.fontawesome.com/releases/v5.15.1/js/all.js\" crossorigin=\"anonymous\"></script>
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 19
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        <body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <button class=\"navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Acceuil</a></li>
                        <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fact_random");
        echo "\">Fun Fact Random</a></li>
                        <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("factjson");
        echo "\">Fun Fact Json</a></li>
                        <li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_fact");
        echo "\">Ajouter une fact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        ";
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "        <header class=\"masthead bg-primary text-white text-center\">
            <div class=\"container d-flex align-items-center flex-column\">
                <!-- Masthead Avatar Image-->
                <img class=\"masthead-avatar mb-5\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/funnyMacron.png"), "html", null, true);
        echo "\" alt=\"\" width=\"300px\"/>
                <!-- Masthead Heading-->
                <h1 class=\"masthead-heading text-uppercase mb-0\">Macron the Epidemiologist</h1>
                <!-- Icon Divider-->
                <div class=\"divider-custom divider-light\">
                    <div class=\"divider-custom-line\"></div>
                    <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                    <div class=\"divider-custom-line\"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class=\"masthead-subheading font-weight-light mb-0\"><a class=\"text-white\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fact_random");
        echo "\" > Cliquer ici pour les Fun Facts</a></p>
            </div>
            </br>
            <div class=\"col-10 documentation m-auto\">
                <p class=\"balec\">Bienvenue sur Macron the Epidemiologist !
Grâce à ce site, vous pourrez : 
                <ul>
                    <li>Contempler un random fact de notre cher Président en cliquant ci-dessus</li>
                    <li>Récupérer tous les fun facts répertoriés au format json sur la page Fun Fact Json</li>
                    <li>Nous contacter pour toutes suggestions d’améliorations.</li>
                </ul>


</p>
            </div>
        </header>
        
        ";
    }

    // line 105
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "        
        
        ";
    }

    // line 110
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "        
            <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js\" integrity=\"sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js\" integrity=\"sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc\" crossorigin=\"anonymous\"></script>
        ";
    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  250 => 117,  243 => 111,  239 => 110,  233 => 106,  229 => 105,  207 => 55,  194 => 45,  189 => 42,  185 => 41,  174 => 33,  170 => 32,  166 => 31,  162 => 30,  150 => 20,  146 => 19,  134 => 10,  131 => 9,  127 => 8,  120 => 5,  114 => 118,  112 => 117,  108 => 115,  106 => 110,  103 => 109,  101 => 105,  67 => 73,  65 => 41,  62 => 40,  60 => 19,  57 => 18,  54 => 8,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/portfolio/macronfact/templates/base.html.twig");
    }
}
