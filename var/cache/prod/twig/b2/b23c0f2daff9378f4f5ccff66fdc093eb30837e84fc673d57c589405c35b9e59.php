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

/* ajax/index.html.twig */
class __TwigTemplate_f542b84db18576971ca4c4dbb6a556e88833ebe54c5843161424a3336f48afba extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "ajax/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Facts Json";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; margin-top:150px; }
    .example-wrapper code { 
        display : block;
        width : 80%;
        height: auto;
        background: #F9F9F9; padding: 2px 6px; color:darkblue;
    }

    .hljs-string{
         color:rgb(199,21,133);
    }

    strong >a {
        color:rgb(199,21,133);
    }
    
    .container > p {
    \tfont-size:1em;
    }
    
    .container > ul {
    \tlist-style:inside;
    }
    
    .container > ul > li {
    \tlist-style:inside;
    }
</style>

<div class=\"container example-wrapper\">
<h1 id=\"-bienvenue-dans-notre-api-qui-g-n-re-des-facts-de-notre-cher-pr-sident-macron-\"><strong>Bienvenue dans notre api qui génère des facts de notre cher Président Macron</strong></h1>

<p>Attention !
Vous allez récupérer des données au format json.</p>
<p>Pour pouvoir les exploiter correctement, deux choses à savoir : </p>
<ul>
<li>toutes les données de type string sont à décoder (accents et caractères spéciaux), grâce à Javascript et la fonction decodeURI().
RTFM : <a href=\"https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/decodeURI\" target=\"_blank\">https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/decodeURI</a></li>
<li>les dates sont des Timestamp, à convertir en date avec les méthodes de la classe Date de javascript, par exemple : </li>
</ul>
<pre><code class=\"lang-js\">
    <span class=\"hljs-keyword\">const</span> timestamp = <span class=\"hljs-number\">1607110465663</span>;
    <span class=\"hljs-keyword\">const</span> <span class=\"hljs-built_in\">date</span> = <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Date</span>(timestamp);
    <span class=\"hljs-built_in\">console</span>.log(<span class=\"hljs-built_in\">date</span>.getTime());
    <span class=\"hljs-built_in\">console</span>.log(<span class=\"hljs-built_in\">date</span>);
</code></pre>
<p>RTFM : <a href=\"https://www.delftstack.com/fr/howto/javascript/javascript-convert-timestamp-to-date/\" target=\"_blank\" >https://www.delftstack.com/fr/howto/javascript/javascript-convert-timestamp-to-date/</a></p>


<p>Vous pouvez choisir plusieurs données à récupérer :</p>
<h2 id=\"1-tous-les-facts\">1. Tous les facts</h2>
<p><strong><a href=\"http://macronfact.antonin-dev.fr/factjson/all\" target=\"_blank\">http://macronfact.antonin-dev.fr/factjson/all</a></strong></p>
<p>Format des données renvoyées : </p>
<pre><code class=\"lang-json\">
{
    <span class=\"hljs-string\">\"error\"</span><span class=\"hljs-symbol\">:null</span> || string,
    <span class=\"hljs-string\">\"data\"</span>:[
        {
            <span class=\"hljs-string\">\"fact\"</span>: string,
            <span class=\"hljs-string\">\"auteur\"</span>: string,
            <span class=\"hljs-string\">\"date\"</span>: timestamp
            <span class=\"hljs-string\">\"img\"</span>: string
        },
        {    
            ...
        } 
    ]
}
</code></pre>
<h2 id=\"2-un-random-fact-par-jour-c-est-bon-pour-la-sant-\">2. Un random fact par jour, c&#39;est bon pour la santé !</h2>
<p><strong><a href=\"http://macronfact.antonin-dev.fr/factjson/random\" target=\"_blank\">http://macronfact.antonin-dev.fr/factjson/random</a></strong></p>
<p>Format des données renvoyées : </p>
<pre><code class=\"lang-json\">
{
    <span class=\"hljs-string\">\"error\"</span>:<span class=\"hljs-literal\">null</span> || string,
    <span class=\"hljs-string\">\"data\"</span>:[
        {
            <span class=\"hljs-string\">\"fact\"</span>: string,
            <span class=\"hljs-string\">\"auteur\"</span>: string,
            <span class=\"hljs-string\">\"date\"</span>: timestamp
            <span class=\"hljs-string\">\"img\"</span>: string
        }
    ]

}
</code></pre>
<h2 id=\"3-facts-par-contributeur\">3. Facts par contributeur</h2>
<p>Nous ne pouvons pas encore récupérer tous les tweets en live, mais nos contributeurs ont pensé à tout ! </p>
<p><strong><a href=\"http://macronfact.antonin-dev.fr/factjson/auteurs/alex\" target=\"_blank\">http://macronfact.antonin-dev.fr/factjson/auteurs/{auteur}</a></strong></p>
<p>Format des données renvoyées avec alex à la place de {auteur} :</p>
<pre><code class=\"lang-json\">
{    
    <span class=\"hljs-string\">\"error\"</span><span class=\"hljs-symbol\">:null</span> || string ,
    <span class=\"hljs-string\">\"data\"</span>:[
        {
            <span class=\"hljs-string\">\"fact\"</span>: string,
            <span class=\"hljs-string\">\"auteur\"</span>: string,
            <span class=\"hljs-string\">\"date\"</span>: timestamp
            <span class=\"hljs-string\">\"img\"</span>: string
        },
        {
            ...
        }
    ]
}
</code></pre>
<p><strong>Accéder à la liste de nos contributeurs :</strong></p>
<p>la route ci dessous </p>
<p><strong><a href=\"http://macronfact.antonin-dev.fr/factjson/list\" target=\"_blank\">http://macronfact.antonin-dev.fr/factjson/list</a></strong></p>
<p>Renvoie par exemple : </p>
<pre><code class=\"lang-json\">
{
    <span class=\"hljs-string\">\"error\"</span>: <span class=\"hljs-literal\">null</span> || string,
    <span class=\"hljs-string\">\"data\"</span>:[
        <span class=\"hljs-string\">\"amaury\"</span>,
        <span class=\"hljs-string\">\"thomas\"</span>,
        <span class=\"hljs-string\">\"mathilde\"</span>,
        <span class=\"hljs-string\">\"antonin\"</span>,
        <span class=\"hljs-string\">\"alex\"</span>
    ]

}
</code></pre>
</div>
";
    }

    public function getTemplateName()
    {
        return "ajax/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ajax/index.html.twig", "/var/www/html/portfolio/macronfact/templates/ajax/index.html.twig");
    }
}
