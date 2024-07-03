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

/* modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig */
class __TwigTemplate_e5e337c2e528e1d11dfc09a2540f073d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig"));

        // line 1
        yield "<div id=\"sfwdt";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 1, $this->source), "html", null, true);
        yield "\" class=\"sf-toolbar sf-display-none\" role=\"region\" aria-label=\"Drupal Webprofiler Toolbar\">
  ";
        // line 2
        yield from         $this->loadTemplate("@webprofiler/Profiler/toolbar.html.twig", "modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig", 2)->unwrap()->yield(CoreExtension::merge($context, ["templates" => ["request" => "@webprofiler/Profiler/cancel.html.twig"], "profile" => null, "profiler_url" => $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.toolbar", ["token" =>         // line 7
($context["token"] ?? null)])]));
        // line 9
        yield "</div>

";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@webprofiler/Profiler/base_js.html.twig"));
        yield "

<style";
        // line 13
        if (($context["csp_style_nonce"] ?? null)) {
            yield " nonce=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["csp_style_nonce"] ?? null), 13, $this->source), "html", null, true);
            yield "\"";
        }
        yield ">
  ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@webprofiler/Profiler/toolbar.css.twig"));
        yield "
</style>
<script";
        // line 16
        if (($context["csp_script_nonce"] ?? null)) {
            yield " nonce=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["csp_script_nonce"] ?? null), 16, $this->source), "html", null, true);
            yield "\"";
        }
        yield ">/*<![CDATA[*/
  (function () {
    Sfjs.loadToolbar('";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 18, $this->source), "html", null, true);
        yield "');
  })();
/*]]>*/</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["token", "csp_style_nonce", "csp_script_nonce"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig";
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
        return array (  82 => 18,  73 => 16,  68 => 14,  60 => 13,  55 => 11,  51 => 9,  49 => 7,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig", "/opt/drupal/web/modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2, "if" => 13);
        static $filters = array("escape" => 1);
        static $functions = array("url" => 7, "include" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['url', 'include'],
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
