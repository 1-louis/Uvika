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
class __TwigTemplate_f0a7122bc3d43f43460aba47379a99c786e3c723429f2ca0798469f102d07fb6 extends Template
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
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"Uvika vente d'oeuvre numérique en ligne\">
\t\t<meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
\t\t<meta name=\"generator\" content=\"Jekyll v4.1.1\">
\t\t<title>
\t\t\t";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t</title>

\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/boutiquefrancaise.css"), "html", null, true);
        echo "\"> ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 17
        echo "\t\t<style>
\t\t\t.bd-placeholder-img {
\t\t\t\tfont-size: 1.125rem;
\t\t\t\ttext-anchor: middle;
\t\t\t\t-webkit-user-select: none;
\t\t\t\t-moz-user-select: none;
\t\t\t\t-ms-user-select: none;
\t\t\t\tuser-select: none;
\t\t\t}

\t\t\t@media(min-width: 768px) {
\t\t\t\t.bd-placeholder-img-lg {
\t\t\t\t\tfont-size: 3.5rem;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t\t<!-- Custom styles for this template -->
\t\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<header>
\t\t\t<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Uvika</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Nos produits</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Qui sommes-nous ?</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"navbar-item-custom\">
\t\t\t\t\t\t";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte
\t\t\t\t\t\t\t\t<small>(";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 58), "firstname", [], "any", false, false, false, 58), "html", null, true);
            echo ")</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t<a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t";
        } else {
            // line 63
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
\t\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/shopping-cart.png"), "html", null, true);
        echo "\" class=\"cart-icon\" alt=\"Mon panier\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>

\t\t<main role=\"main\">

\t\t\t";
        // line 77
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 78
            echo "\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 81
                echo "\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if ((0 === twig_compare($context["key"], 0))) {
                    echo " class=\"active\" ";
                }
                echo "></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 86
                echo "\t\t\t\t\t\t\t<div class=\"carousel-item ";
                if ((0 === twig_compare($context["key"], 0))) {
                    echo "active";
                }
                echo "\" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 86), "html", null, true);
                echo "');background-size:cover;\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t\t\t\t<h1>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 89), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 90), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-info\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 92), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 92), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 109
        echo "
\t\t\t<!-- Marketing messaging and featurettes
\t\t\t    ================================================== -->
\t\t\t<!-- Wrap the rest of the page in another container to center all the content. -->

\t\t\t<div class=\"container marketing ";
        // line 114
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\"> ";
        $this->displayBlock('content', $context, $blocks);
        // line 115
        echo "
\t\t\t\t</div>
\t\t\t\t<!-- /.container -->

\t\t\t\t<!-- FOOTER -->
\t\t\t\t<footer class=\"footer-custom\">
\t\t\t\t\t<p>
\t\t\t\t\t\t&copy; 2022-2022 Uvika<br/>
\t\t\t\t\t\t<small>Ce site a pour objectif de promouvoir des œuvres brillant et lumineux des artistes moi débutantes ou inconnu.<br/>
\t\t\t\t\t\t\t<a href=\"#\">Privacy</a>
\t\t\t\t\t\t\t&middot;
\t\t\t\t\t\t\t<a href=\"#\">Terms</a>
\t\t\t\t\t\t</small>
\t\t\t\t\t</p>
\t\t\t\t</footer>
\t\t\t</main>
\t\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
\t\t\t<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\">

\t\t\t\tfunction placeFooter() {
if (\$(document.body).height() < \$(window).height()) {
\$(\"footer\").css({position: \"fixed\", bottom: \"0px\"});
} else {
\$(\"footer\").css({position: \"\"});
}
}

placeFooter();
\t\t\t</script>
\t\t</body>
\t\t";
        // line 146
        $this->displayBlock('script', $context, $blocks);
        // line 147
        echo "\t</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Uvika - 100% Made in France
\t\t\t";
    }

    // line 16
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 146
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 146,  315 => 114,  309 => 16,  301 => 10,  296 => 147,  294 => 146,  277 => 132,  258 => 115,  252 => 114,  245 => 109,  232 => 98,  218 => 92,  213 => 90,  209 => 89,  198 => 86,  194 => 85,  190 => 83,  177 => 81,  173 => 80,  169 => 78,  167 => 77,  156 => 69,  152 => 68,  149 => 67,  144 => 65,  138 => 63,  133 => 61,  127 => 58,  122 => 57,  120 => 56,  113 => 52,  104 => 46,  94 => 39,  86 => 34,  67 => 17,  63 => 16,  59 => 15,  54 => 12,  52 => 10,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "D:\\xampp\\htdocs\\Uvika\\templates\\base.html.twig");
    }
}
