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

/* @webprofiler/Collector/drupal.html.twig */
class __TwigTemplate_0baf529c92b5ac0857ba8c5218d40020 extends Template
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
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/drupal.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('toolbar', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["collector", "profiler_url", "block_status"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

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
            yield "    <span class=\"sf-toolbar-label\">
      ";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@webprofiler/Icon/drupal-10.svg"));
            yield "
    </span>
    <span class=\"sf-toolbar-value\">";
            // line 7
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "drupalVersion", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            yield "</span>
  ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        yield "
  ";
        // line 10
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece\">
        <b>Profiler token</b>
        <span>
          ";
            // line 15
            if (($context["profiler_url"] ?? null)) {
                // line 16
                yield "            <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profiler_url"] ?? null), 16, $this->source), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                yield "</a>
          ";
            } else {
                // line 18
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 20
            yield "        </span>
      </div>

      ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "traceId", [], "any", false, false, true, 23)) {
                // line 24
                yield "        <div class=\"sf-toolbar-info-piece\">
          <b>Trace Id</b>
          <span>
            ";
                // line 27
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "traceId", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                yield "
          </span>
        </div>
      ";
            }
            // line 31
            yield "    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
        <b>PHP version</b>
        <span";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, true, 36)) {
                yield " title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, true, 36), 36, $this->source) . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, true, 36), 36, $this->source)), "html", null, true);
                yield "\"";
            }
            yield ">
          ";
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            yield "
          &nbsp; <a href=\"";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.php"));
            yield "\">View phpinfo()</a>
        </span>
      </div>

      <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
        <b>PHP Extensions</b>
        <span
          class=\"sf-toolbar-status sf-toolbar-status-";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, true, 45)) ? ("green") : ("gray")));
            yield "\">xdebug ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, true, 45)) ? ("✓") : ("✗")));
            yield "</span>
        <span
          class=\"sf-toolbar-status sf-toolbar-status-";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, true, 47)) ? ("green") : ("gray")));
            yield "\">APCu ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, true, 47)) ? ("✓") : ("✗")));
            yield "</span>
        <span
          class=\"sf-toolbar-status sf-toolbar-status-";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, true, 49)) ? ("green") : ("red")));
            yield "\">OPcache ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, true, 49)) ? ("✓") : ("✗")));
            yield "</span>
      </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>PHP SAPI</b>
        <span>";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sapiName", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            yield "</span>
      </div>
    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece\">
        <b>Drupal version</b>
        <span>";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "drupalVersion", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            yield "</span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Drupal profile</b>
        <span>";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "drupalProfile", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            yield "</span>
      </div>
      ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getGitCommit", [], "any", false, false, true, 67)) {
                // line 68
                yield "        <div class=\"sf-toolbar-info-piece\">
          <b>Git commit</b>
          <span><abbr title=\"";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getGitCommit", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getAbbrGitCommit", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                yield "</abbr></span>
        </div>
      ";
            }
            // line 73
            yield "    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece\">
        <b>Webprofiler</b>
        <span>
          <a href=\"";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getWebprofilerConfigUrl", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            yield "\" title=\"Configure Webprofiler\">
            Configure
          </a>
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Resources</b>
        <span>
          <a href=\"https://www.drupal.org/documentation\" rel=\"help\">
            Read Drupal Docs
          </a>
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Help</b>
        <span>
          <a href=\"https://www.drupal.org/contribute\">Get involved!</a>
        </span>
      </div>
    </div>
  ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        yield "
  ";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => ($context["block_status"] ?? null), "additional_classes" => "sf-toolbar-block-right"]));
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
        return "@webprofiler/Collector/drupal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  249 => 101,  246 => 100,  221 => 79,  213 => 73,  205 => 70,  201 => 68,  199 => 67,  194 => 65,  187 => 61,  177 => 54,  167 => 49,  160 => 47,  153 => 45,  143 => 38,  139 => 37,  131 => 36,  124 => 31,  117 => 27,  112 => 24,  110 => 23,  105 => 20,  99 => 18,  91 => 16,  89 => 15,  83 => 11,  81 => 10,  78 => 9,  72 => 7,  67 => 5,  64 => 4,  62 => 3,  59 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/drupal.html.twig", "/opt/drupal/web/modules/contrib/webprofiler/templates/Collector/drupal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3, "if" => 15);
        static $filters = array("escape" => 7);
        static $functions = array("include" => 5, "path" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
                ['escape'],
                ['include', 'path'],
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
