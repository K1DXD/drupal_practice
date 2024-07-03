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

/* @webprofiler/Collector/memory.html.twig */
class __TwigTemplate_ce62d8da414f57d9e6a48922eb152bfb extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/memory.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('toolbar', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["collector"]);        
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
            yield "    ";
            $context["status_color"] = (((((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "memory", [], "any", false, false, true, 4) / 1024) / 1024) > 50)) ? ("yellow") : (""));
            // line 5
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@webprofiler/Icon/memory.svg"));
            yield "
    <span class=\"sf-toolbar-value\">";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::sprintf("%.1f", ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "memory", [], "any", false, false, true, 6) / 1024) / 1024)), "html", null, true);
            yield "</span>
    <span class=\"sf-toolbar-label\">MiB</span>
  ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        yield "
  ";
        // line 10
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "    <div class=\"sf-toolbar-info-piece\">
      <b>Peak memory usage</b>
      <span>";
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::sprintf("%.1f", ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "memory", [], "any", false, false, true, 13) / 1024) / 1024)), "html", null, true);
            yield " MiB</span>
    </div>

    <div class=\"sf-toolbar-info-piece\">
      <b>PHP memory limit</b>
      <span>";
            // line 18
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "memoryLimit", [], "any", false, false, true, 18) ==  -1)) ? (yield "Unlimited") : (yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::sprintf("%.0f MiB", ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "memoryLimit", [], "any", false, false, true, 18) / 1024) / 1024)), "html", null, true)));
            yield "</span>
    </div>
  ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        yield "
  ";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => false, "name" => "time", "status" => ($context["status_color"] ?? null)]);
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
        return "@webprofiler/Collector/memory.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  106 => 22,  103 => 21,  96 => 18,  88 => 13,  84 => 11,  82 => 10,  79 => 9,  72 => 6,  67 => 5,  64 => 4,  62 => 3,  59 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/memory.html.twig", "/opt/drupal/web/modules/contrib/webprofiler/templates/Collector/memory.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3);
        static $filters = array("escape" => 6, "format" => 6);
        static $functions = array("include" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['escape', 'format'],
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
