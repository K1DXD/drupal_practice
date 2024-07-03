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

/* core/themes/olivero/templates/navigation/menu.html.twig */
class __TwigTemplate_0ba25bf638cc4f70510c176130557106 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/navigation/menu.html.twig"));

        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        yield "
";
        // line 29
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 29);
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 30, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "menu_level", "loop"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    // line 32
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 33
            yield "  ";
            $context["primary_nav_level"] = ("menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 34
            yield "  ";
            $macros["menus"] = $this;
            // line 35
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 36
                yield "    <ul ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu", ($context["primary_nav_level"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                yield ">
      ";
                // line 37
                $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["primary_nav_level"] ?? null)], "method", false, false, true, 37);
                // line 38
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    yield "
        ";
                    // line 40
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), "isRouted", [], "any", false, false, true, 40) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), "routeName", [], "any", false, false, true, 40) == "<nolink>"))) {
                        // line 41
                        yield "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 42
                        yield "        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "isRouted", [], "any", false, false, true, 42) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "routeName", [], "any", false, false, true, 42) == "<button>"))) {
                        // line 43
                        yield "          ";
                        $context["menu_item_type"] = "button";
                        // line 44
                        yield "        ";
                    } else {
                        // line 45
                        yield "          ";
                        $context["menu_item_type"] = "link";
                        // line 46
                        yield "        ";
                    }
                    // line 47
                    yield "
        ";
                    // line 48
                    $context["item_classes"] = ["menu__item", ("menu__item--" . $this->sandbox->ensureToStringAllowed(                    // line 50
($context["menu_item_type"] ?? null), 50, $this->source)), ("menu__item--level-" . (                    // line 51
($context["menu_level"] ?? null) + 1)), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 52
$context["item"], "in_active_trail", [], "any", false, false, true, 52)) ? ("menu__item--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 53
$context["item"], "below", [], "any", false, false, true, 53)) ? ("menu__item--has-children") : (""))];
                    // line 56
                    yield "
        ";
                    // line 57
                    $context["link_classes"] = ["menu__link", ("menu__link--" . $this->sandbox->ensureToStringAllowed(                    // line 59
($context["menu_item_type"] ?? null), 59, $this->source)), ("menu__link--level-" . (                    // line 60
($context["menu_level"] ?? null) + 1)), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 61
$context["item"], "in_active_trail", [], "any", false, false, true, 61)) ? ("menu__link--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 62
$context["item"], "below", [], "any", false, false, true, 62)) ? ("menu__link--has-children") : (""))];
                    // line 65
                    yield "
        <li";
                    // line 66
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 66), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                    yield ">
          ";
                    // line 72
                    yield "          ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 72), 72, $this->source) . "-submenu-") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 72), 72, $this->source)));
                    // line 73
                    yield "
          ";
                    // line 74
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 74), 74, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 74), 74, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    yield "

          ";
                    // line 76
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 76)) {
                        // line 77
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 77), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 77, $context, $this->getSourceContext()));
                        yield "
          ";
                    }
                    // line 79
                    yield "
        </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                yield "    </ul>
  ";
            }
            
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/navigation/menu.html.twig";
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
        return array (  196 => 82,  180 => 79,  174 => 77,  172 => 76,  167 => 74,  164 => 73,  161 => 72,  157 => 66,  154 => 65,  152 => 62,  151 => 61,  150 => 60,  149 => 59,  148 => 57,  145 => 56,  143 => 53,  142 => 52,  141 => 51,  140 => 50,  139 => 48,  136 => 47,  133 => 46,  130 => 45,  127 => 44,  124 => 43,  121 => 42,  118 => 41,  116 => 40,  113 => 39,  95 => 38,  93 => 37,  88 => 36,  85 => 35,  82 => 34,  79 => 33,  62 => 32,  50 => 30,  48 => 29,  45 => 24,  43 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/navigation/menu.html.twig", "/opt/drupal/web/core/themes/olivero/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "set" => 29, "macro" => 32, "if" => 35, "for" => 38);
        static $filters = array("escape" => 36, "clean_id" => 72);
        static $functions = array("link" => 74);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape', 'clean_id'],
                ['link'],
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
