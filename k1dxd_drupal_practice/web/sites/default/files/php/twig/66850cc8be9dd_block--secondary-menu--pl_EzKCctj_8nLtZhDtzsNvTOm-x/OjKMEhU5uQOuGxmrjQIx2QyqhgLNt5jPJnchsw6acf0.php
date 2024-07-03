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

/* core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig */
class __TwigTemplate_bdf4b02c2bd77be3a958f4f7bedfe83a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig"));

        // line 26
        $context["classes"] = ["block", "block-search-wide"];
        // line 31
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        yield ">
  ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 32, $this->source), "html", null, true);
        yield "
  ";
        // line 33
        if (($context["label"] ?? null)) {
            // line 34
            yield "    <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 34, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 34, $this->source), "html", null, true);
            yield "</h2>
  ";
        }
        // line 36
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 36, $this->source), "html", null, true);
        yield "
  ";
        // line 37
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 56
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_prefix", "label", "title_attributes", "title_suffix", "content_attributes", "content"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 38
        yield "    <button class=\"block-search-wide__button\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search Form"));
        yield "\" data-drupal-selector=\"block-search-wide-button\">
      ";
        // line 39
        yield from         $this->loadTemplate("@olivero/../images/search.svg", "core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig", 39)->unwrap()->yield($context);
        // line 40
        yield "      <span class=\"block-search-wide__button-close\"></span>
    </button>

    ";
        // line 48
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["block-search-wide__wrapper"], "method", false, false, true, 48), "setAttribute", ["data-drupal-selector", "block-search-wide-wrapper"], "method", false, false, true, 48), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
        yield ">
      <div class=\"block-search-wide__container\">
        <div class=\"block-search-wide__grid\">
          ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 51, $this->source), "html", null, true);
        yield "
        </div>
      </div>
    </div>
  ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  108 => 51,  101 => 48,  96 => 40,  94 => 39,  89 => 38,  82 => 37,  72 => 56,  70 => 37,  65 => 36,  57 => 34,  55 => 33,  51 => 32,  46 => 31,  44 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig", "/opt/drupal/web/core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26, "if" => 33, "block" => 37, "include" => 39);
        static $filters = array("escape" => 31, "t" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['escape', 't'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}