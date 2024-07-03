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

/* @webprofiler/Collector/blocks.html.twig */
class __TwigTemplate_77c2655903b4d5c872179b9134620965 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/blocks.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('toolbar', $context, $blocks);
        // line 21
        yield "
";
        // line 22
        yield from $this->unwrap()->yieldBlock('panel', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["collector", "profiler_url"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    // line 1
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        yield "
  ";
        // line 3
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@webprofiler/Icon/006--blocks.svg"));
            yield "
    <span class=\"sf-toolbar-value\">";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getRenderedBlocksCount", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            yield "</span>
  ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        yield "
  ";
        // line 8
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 9
            yield "    <div class=\"sf-toolbar-info-piece\">
      <b>Loaded blocks</b>
      <span class=\"sf-toolbar-status\">";
            // line 11
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getLoadedBlocksCount", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getLoadedBlocksCount", [], "any", false, false, true, 11) == 0)) {
                yield "(";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Maybe some are cached"));
                yield ")";
            }
            yield "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>Rendered blocks</b>
      <span class=\"sf-toolbar-status\">";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getRenderedBlocksCount", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getRenderedBlocksCount", [], "any", false, false, true, 15) == 0)) {
                yield "(";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Maybe some are cached"));
                yield ")";
            }
            yield "</span>
    </div>
  ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        yield "
  ";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]));
        yield "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    // line 22
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 23
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "panel", [], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        yield "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@webprofiler/Collector/blocks.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  137 => 23,  130 => 22,  120 => 19,  117 => 18,  104 => 15,  91 => 11,  87 => 9,  85 => 8,  82 => 7,  76 => 5,  71 => 4,  69 => 3,  66 => 2,  59 => 1,  50 => 22,  47 => 21,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/blocks.html.twig", "/opt/drupal/web/modules/contrib/webprofiler/templates/Collector/blocks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3, "if" => 11);
        static $filters = array("escape" => 5, "t" => 11);
        static $functions = array("include" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
                ['escape', 't'],
                ['include'],
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
