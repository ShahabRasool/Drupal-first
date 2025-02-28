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
use Twig\TemplateWrapper;

/* core/modules/image/templates/image-resize-summary.html.twig */
class __TwigTemplate_dc3f826c3d421e092de3a163c9f96f0a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 18) && CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 18))) {
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 19), "html", null, true);
            yield "×";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 19), "html", null, true);
        } else {
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 21)) {
                // line 22
                yield "    ";
                yield t("width @data.width", array("@data.width" => CoreExtension::getAttribute($this->env, $this->source,                 // line 23
($context["data"] ?? null), "width", [], "any", false, false, true, 23), ));
                // line 25
                yield "  ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 25)) {
                // line 26
                yield "    ";
                yield t("height @data.height", array("@data.height" => CoreExtension::getAttribute($this->env, $this->source,                 // line 27
($context["data"] ?? null), "height", [], "any", false, false, true, 27), ));
                // line 29
                yield "  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/image/templates/image-resize-summary.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  64 => 29,  62 => 27,  60 => 26,  57 => 25,  55 => 23,  53 => 22,  51 => 21,  46 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/image/templates/image-resize-summary.html.twig", "/var/www/html/web/core/modules/image/templates/image-resize-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 18, "trans" => 22];
        static $filters = ["escape" => 19];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
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
