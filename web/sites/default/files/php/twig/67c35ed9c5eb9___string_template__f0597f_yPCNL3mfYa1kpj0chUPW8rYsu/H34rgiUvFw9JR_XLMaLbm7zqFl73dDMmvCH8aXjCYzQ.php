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

/* __string_template__f0597f905cbe4794b8ace3acbba43601 */
class __TwigTemplate_27c67698f9ccef0a71e426e4ded65809 extends Template
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
        // line 1
        yield "<div class=\"contextual-region media media--type-image media--view-mode-default\">
  <div data-contextual-id=\"media:media=2:changed=1740645398&amp;langcode=en\" data-contextual-token=\"y5O9wV7s_vBaSBxlTMm8gpvb5FuCUQY-t89BWddw11k\" data-drupal-ajax-container></div>
        <div class=\"layout layout--onecol\">
    <div class=\"layout__region layout__region--content\">
      

<div class=\"block block-layout-builder block-field-blockmediaimagefield-media-image\">
  
    
      <div class=\"block__content\">
      
  <div class=\"field field--name-field-media-image field--type-image field--label-visually_hidden\">
    <div class=\"field__label visually-hidden\"><a href=\"http://cnn.com\" target=\"_blank\">Image</a></div>
              <div class=\"field__item\">  <a href=\"http://cnn.com\" target=\"_blank\"><img loading=\"lazy\" src=\"/sites/default/files/styles/large/public/2025-02/article-Structures-of-the-He-bRo.jpg.webp?itok=seN43sX0\" width=\"480\" height=\"320\" alt=\"heart\"></a>


</div>
          </div>

    </div>
  </div>

    </div>
  </div>

  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__f0597f905cbe4794b8ace3acbba43601";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__f0597f905cbe4794b8ace3acbba43601", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
