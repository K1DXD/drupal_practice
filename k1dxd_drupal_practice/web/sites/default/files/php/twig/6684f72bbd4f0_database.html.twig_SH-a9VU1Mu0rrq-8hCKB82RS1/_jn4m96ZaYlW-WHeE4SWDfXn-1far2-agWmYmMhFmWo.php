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

/* @webprofiler/Collector/database.html.twig */
class __TwigTemplate_db7e441bd42fc236b0b573f7fac79ec6 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/database.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('toolbar', $context, $blocks);
        // line 32
        yield "
";
        // line 33
        yield from $this->unwrap()->yieldBlock('panel', $context, $blocks);
        // line 42
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["collector", "profiler_url", "_self", "token", "loop", "qid"]);        
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
            $context["status"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 4) > 50)) ? ("yellow") : (""));
            // line 5
            yield "
    ";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@webprofiler/Icon/002--database.svg"));
            yield "
    <span class=\"sf-toolbar-value\">";
            // line 7
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            yield "</span>
    <span class=\"sf-toolbar-info-piece-additional-detail\">
      <span class=\"sf-toolbar-label\">in</span>
      <span class=\"sf-toolbar-value\">";
            // line 10
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::sprintf("%0.2f", $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 10), 10, $this->source)), "html", null, true);
            yield "</span>
      <span class=\"sf-toolbar-label\">ms</span>
    </span>
  ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        yield "
  ";
        // line 15
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 16
            yield "    <div class=\"sf-toolbar-info-piece\">
      <b>Db queries</b>
      <span class=\"sf-toolbar-status\">";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            yield "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>Query time</b>
      <span>";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::sprintf("%0.2f", $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 22), 22, $this->source)), "html", null, true);
            yield " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>Default database</b>
      <span>";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 26), "driver", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            yield "://";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 26), "host", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            yield ":";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 26), "port", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            yield "/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "database", [], "any", false, false, true, 26), "database", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            yield "</span>
    </div>
  ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        yield "
  ";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 30, $this->source), "")) : (""))]));
        yield "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    // line 33
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 34
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webprofiler/database"), "html", null, true);
        yield "

  ";
        // line 36
        $context["queryHighlightThreshold"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "queryHighlightThreshold", [], "any", false, false, true, 36);
        // line 37
        yield "
  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, true, 38));
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
        foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
            // line 39
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["_self"], "macro_query", [$context["query"], ($context["token"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 39), ($context["queryHighlightThreshold"] ?? null)], 39, $context, $this->getSourceContext()));
            yield "
  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    // line 43
    public function macro_query($__query__ = null, $__token__ = null, $__qid__ = null, $__queryHighlightThreshold__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "query" => $__query__,
            "token" => $__token__,
            "qid" => $__qid__,
            "queryHighlightThreshold" => $__queryHighlightThreshold__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query"));

            // line 44
            yield "  ";
            $context["slow_query"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "time", [], "any", false, false, true, 44) > (($context["queryHighlightThreshold"] ?? null) / 10));
            // line 45
            yield "  <div
    data-wp-caller=\"";
            // line 46
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "caller", [], "any", false, false, true, 46), "class", [], "any", false, false, true, 46))) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "caller", [], "any", false, false, true, 46), "class", [], "any", false, false, true, 46), 46, $this->source)), "html", null, true);
            }
            yield "\"
    data-wp-database=\"";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "database", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            yield "\"
    data-wp-type=\"";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webprofiler\Twig\Extension\DatabaseExtension']->queryType($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "query", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
            yield "\"
    data-wp-slow=\"";
            // line 49
            if (($context["slow_query"] ?? null)) {
                yield "1";
            } else {
                yield "0";
            }
            yield "\"
    data-wp-time=\"";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "time", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            yield "\"
    data-wp-class=\"";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "caller", [], "any", false, false, true, 51), "class", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            yield "->";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "caller", [], "any", false, false, true, 51), "function", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            yield "()\"
    data-wp-db=\"";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "database", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            yield "\"
    data-wp-target=\"";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "target", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            yield "\"
    data-wp-has-args=\"";
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "args", [], "any", false, false, true, 54)) {
                yield "1";
            } else {
                yield "0";
            }
            yield "\"
    data-wp-qid=\"";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["qid"] ?? null), 55, $this->source), "html", null, true);
            yield "\"
    data-wp-explain-path=\"";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("webprofiler.database.explain", ["token" => ($context["token"] ?? null), "qid" => ($context["qid"] ?? null)]), "html", null, true);
            yield "\"
    class=\"wp-db-query\"
  >
    <pre style=\"white-space: unset; border-left: 8px solid ";
            // line 59
            if (($context["slow_query"] ?? null)) {
                yield "darkgoldenrod";
            } else {
                yield "green";
            }
            yield ";\">
      <code class=\"wp-query-placeholder language-sql\">";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "query", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            yield "</code>
      ";
            // line 61
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["query"] ?? null), "args", [], "any", false, false, true, 61)) {
                yield "<code class=\"wp-query-executable language-sql is-hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webprofiler\Twig\Extension\DatabaseExtension']->queryExecutable($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 61, $this->source)), "html", null, true);
                yield "</code>";
            }
            // line 62
            yield "    </pre>
  </div>
";
            
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@webprofiler/Collector/database.html.twig";
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
        return array (  306 => 62,  300 => 61,  296 => 60,  288 => 59,  282 => 56,  278 => 55,  270 => 54,  266 => 53,  262 => 52,  256 => 51,  252 => 50,  244 => 49,  240 => 48,  236 => 47,  230 => 46,  227 => 45,  224 => 44,  206 => 43,  183 => 39,  166 => 38,  163 => 37,  161 => 36,  155 => 34,  148 => 33,  138 => 30,  135 => 29,  122 => 26,  115 => 22,  108 => 18,  104 => 16,  102 => 15,  99 => 14,  91 => 10,  85 => 7,  81 => 6,  78 => 5,  75 => 4,  73 => 3,  70 => 2,  63 => 1,  53 => 42,  51 => 33,  48 => 32,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/database.html.twig", "/opt/drupal/web/modules/contrib/webprofiler/templates/Collector/database.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3, "for" => 38, "macro" => 43, "if" => 46);
        static $filters = array("escape" => 7, "format" => 10, "default" => 30, "lower" => 46);
        static $functions = array("include" => 6, "attach_library" => 34, "query_type" => 48, "path" => 56, "query_executable" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'for', 'macro', 'if', 'import'],
                ['escape', 'format', 'default', 'lower'],
                ['include', 'attach_library', 'query_type', 'path', 'query_executable'],
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
