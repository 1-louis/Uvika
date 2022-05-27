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

/* home/index.html.twig */
class __TwigTemplate_358d0fd33eb77c0ac320aaa714c4c93fbf839c4e683ba23e28d99246e17cbc0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<!-- Three columns of text below the carousel -->
\t<h3>Nos meilleures ventes</h3>
\t<p>Découvrez nos œuvres d'arts les plus vendus.</p>
\t<div class=\"row\">
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "\t\t\t<div class=\"col-md-3\">
\t\t\t\t";
            // line 12
            $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 12)->display($context);
            // line 13
            echo "\t\t\t</div>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</div>
\t<!-- /.row -->


\t<!-- START THE FEATURETTES -->

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h2 class=\"featurette-heading\">Jeune équipe passionné 
\t\t\t\t<span class=\"text-muted\">qui aime partager son travail.</span>
\t\t\t</h2>
\t\t\t<h4>
\t\t\t\tJe suis développeur web et application, UX et UI designer.</h4>
\t\t\t<p class=\"lead\">
\t\t\t\tJ'aime l'art et la création visuelle donc, j'ai décidé de vendre mes oeuvres et celles d'autres artistes sur le site, s'il y a des oeuvres qui vous intéressent n'hésitez pas à acheter et contacter nous.</p>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/first.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Un savoir-faire Français\">
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7 order-md-2\">
\t\t\t<h2 class=\"featurette-heading\"> 
            Vous pouvez vous aussi faire partie
\t\t\t\t<span class=\"text-muted\"> de notre groupe d'artiste.</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Nous vendons des œuvres numériques et physique avec le chois du support.</p>
\t\t</div>
\t\t<div class=\"col-md-5 order-md-1\">
\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/second.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Une boutique ouverte toute l'année\">
\t\t</div>
\t</div>

\t<!-- /END THE FEATURETTES -->
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 49,  121 => 34,  100 => 15,  85 => 13,  83 => 12,  80 => 11,  63 => 10,  57 => 6,  53 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "D:\\xampp\\htdocs\\Uvika\\templates\\home\\index.html.twig");
    }
}
