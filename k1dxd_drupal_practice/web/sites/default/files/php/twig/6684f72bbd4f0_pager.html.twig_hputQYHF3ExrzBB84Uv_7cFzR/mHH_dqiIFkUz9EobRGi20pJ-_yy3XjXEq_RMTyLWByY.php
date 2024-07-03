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

/* core/themes/olivero/templates/navigation/pager.html.twig */
class __TwigTemplate_2c4d08b82959ff77d2081d0808ada3dc extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/navigation/pager.html.twig"));

        // line 34
        if (($context["items"] ?? null)) {
            // line 35
            yield "  <nav class=\"pager layout--content-medium\" role=\"navigation\" aria-labelledby=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 35, $this->source), "html", null, true);
            yield "\">
    <";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagination_heading_level"] ?? null), 36, $this->source), "html", null, true);
            yield " id=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 36, $this->source), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagination_heading_level"] ?? null), 36, $this->source), "html", null, true);
            yield ">
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 39
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39)) {
                // line 40
                yield "        ";
                $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 41
                    yield "          <li class=\"pager__item pager__item--control pager__item--first\">
            <a href=\"";
                    // line 42
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "href", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "attributes", [], "any", false, false, true, 42), 42, $this->source), "href", "title"), "addClass", ["pager__link"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 43
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                    yield "</span>
              ";
                    // line 44
                    yield from                     $this->loadTemplate("@olivero/../images/pager-first.svg", "core/themes/olivero/templates/navigation/pager.html.twig", 44)->unwrap()->yield($context);
                    // line 45
                    yield "            </a>
          </li>
        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 40
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
                // line 48
                yield "      ";
            }
            // line 49
            yield "
      ";
            // line 51
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 51)) {
                // line 52
                yield "        ";
                $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 53
                    yield "          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"";
                    // line 54
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 54), "href", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                    yield "\" rel=\"prev\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 54), "attributes", [], "any", false, false, true, 54), 54, $this->source), "href", "title", "rel"), "addClass", ["pager__link"], "method", false, false, true, 54), 54, $this->source), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 55
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                    yield "</span>
              ";
                    // line 56
                    yield from                     $this->loadTemplate("@olivero/../images/pager-previous.svg", "core/themes/olivero/templates/navigation/pager.html.twig", 56)->unwrap()->yield($context);
                    // line 57
                    yield "            </a>
          </li>
        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 52
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_1_));
                // line 60
                yield "      ";
            }
            // line 61
            yield "
      ";
            // line 63
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 63)) {
                // line 64
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 66
            yield "
      ";
            // line 68
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 68));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 69
                yield "        ";
                $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 70
                    yield "          <li class=\"pager__item";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                    yield " pager__item--number\">
            ";
                    // line 71
                    if ((($context["current"] ?? null) == $context["key"])) {
                        // line 72
                        yield "              ";
                        $context["title"] = t("Current page");
                        // line 73
                        yield "            ";
                    } else {
                        // line 74
                        yield "              ";
                        $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                        // line 75
                        yield "            ";
                    }
                    // line 76
                    yield "            ";
                    if ((($context["current"] ?? null) != $context["key"])) {
                        // line 77
                        yield "              <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 77, $this->source), "html", null, true);
                        yield "\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 77), 77, $this->source), "href", "title"), "addClass", ["pager__link", (((($context["current"] ?? null) == $context["key"])) ? (" is-active") : (""))], "method", false, false, true, 77), 77, $this->source), "html", null, true);
                        yield ">
            ";
                    }
                    // line 79
                    yield "            <span class=\"visually-hidden\">
              ";
                    // line 80
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page"));
                    yield "
            </span>
            ";
                    // line 82
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 82, $this->source), "html", null, true);
                    yield "
            ";
                    // line 83
                    if ((($context["current"] ?? null) != $context["key"])) {
                        // line 84
                        yield "              </a>
            ";
                    }
                    // line 86
                    yield "          </li>
        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_2_));
                // line 88
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "
      ";
            // line 91
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 91)) {
                // line 92
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 94
            yield "
      ";
            // line 96
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 96)) {
                // line 97
                yield "        ";
                $___internal_parse_3_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 98
                    yield "          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"";
                    // line 99
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 99), "href", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                    yield "\" rel=\"next\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 99), "attributes", [], "any", false, false, true, 99), 99, $this->source), "href", "title", "rel"), "addClass", ["pager__link"], "method", false, false, true, 99), 99, $this->source), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 100
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                    yield "</span>
              ";
                    // line 101
                    yield from                     $this->loadTemplate("@olivero/../images/pager-previous.svg", "core/themes/olivero/templates/navigation/pager.html.twig", 101)->unwrap()->yield($context);
                    // line 102
                    yield "            </a>
          </li>
        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 97
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_3_));
                // line 105
                yield "      ";
            }
            // line 106
            yield "
      ";
            // line 108
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 108)) {
                // line 109
                yield "        ";
                $___internal_parse_4_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 110
                    yield "          <li class=\"pager__item pager__item--control pager__item--last\">
            <a href=\"";
                    // line 111
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 111), "href", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 111), "attributes", [], "any", false, false, true, 111), 111, $this->source), "href", "title"), "addClass", ["pager__link"], "method", false, false, true, 111), 111, $this->source), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 112
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                    yield "</span>
              ";
                    // line 113
                    yield from                     $this->loadTemplate("@olivero/../images/pager-first.svg", "core/themes/olivero/templates/navigation/pager.html.twig", 113)->unwrap()->yield($context);
                    // line 114
                    yield "            </a>
          </li>
        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 109
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_4_));
                // line 117
                yield "      ";
            }
            // line 118
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "pagination_heading_level", "ellipses", "current"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/navigation/pager.html.twig";
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
        return array (  300 => 118,  297 => 117,  295 => 109,  289 => 114,  287 => 113,  283 => 112,  275 => 111,  272 => 110,  269 => 109,  266 => 108,  263 => 106,  260 => 105,  258 => 97,  252 => 102,  250 => 101,  246 => 100,  238 => 99,  235 => 98,  232 => 97,  229 => 96,  226 => 94,  222 => 92,  219 => 91,  216 => 89,  210 => 88,  208 => 69,  203 => 86,  199 => 84,  197 => 83,  193 => 82,  188 => 80,  185 => 79,  175 => 77,  172 => 76,  169 => 75,  166 => 74,  163 => 73,  160 => 72,  158 => 71,  153 => 70,  150 => 69,  145 => 68,  142 => 66,  138 => 64,  135 => 63,  132 => 61,  129 => 60,  127 => 52,  121 => 57,  119 => 56,  115 => 55,  107 => 54,  104 => 53,  101 => 52,  98 => 51,  95 => 49,  92 => 48,  90 => 40,  84 => 45,  82 => 44,  78 => 43,  70 => 42,  67 => 41,  64 => 40,  61 => 39,  50 => 36,  45 => 35,  43 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/navigation/pager.html.twig", "/opt/drupal/web/core/themes/olivero/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "apply" => 40, "include" => 44, "for" => 68, "set" => 72);
        static $filters = array("escape" => 35, "t" => 36, "without" => 42, "spaceless" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'include', 'for', 'set'],
                ['escape', 't', 'without', 'spaceless'],
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
