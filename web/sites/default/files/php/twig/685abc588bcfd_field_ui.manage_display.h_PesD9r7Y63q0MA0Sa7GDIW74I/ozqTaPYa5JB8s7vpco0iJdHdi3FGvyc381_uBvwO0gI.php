<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @help_topics/field_ui.manage_display.html.twig */
class __TwigTemplate_61cfb38ae08ce07c29a863b92bf3a2e1 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        ob_start(function () { return ''; });
        echo t("Content types", array());
        $context["content_types_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["content_types_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_types_link_text"] ?? null), 10, $this->source), "entity.node_type.collection"));
        // line 11
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 12
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 13
        echo t("Configure the <em>formatters</em> used to display the fields of an entity sub-type, their order in the display, and the formatter settings. See @content_structure_topic for background information.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 14
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 16
        echo t("Navigate to the page for managing the entity type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@content_types_link</em>.", array("@content_types_link" => ($context["content_types_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 17
        echo t("Find the particular sub-type that you want to configure the display of, and click <em>Manage display</em> in the <em>Operations</em> list.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Use the drag arrows to order the fields in your preferred order.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Drag any fields that you do not wish to see in the display to the <em>Disabled</em> section.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("In the <em>Label</em> column, select the position for each field label in the display, or <em>- Hidden -</em> to hide a label. You can also choose <em>- Visually Hidden-</em> if you want the label's text to appear in the HTML page, so that screen readers and search engines can read it, but it will not be visible.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("In the <em>Format</em> column, select the formatter for displaying each field.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("After selecting the desired formatters, click the settings gear in each row to change the settings for the formatter.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("When you are done making changes, click <em>Save</em>.", array());
        echo "</li>
  <li>";
        // line 24
        echo t("Test the display for your entity sub-type by viewing an entity. If needed, return to these steps to further refine the display.", array());
        echo "</li>
</ol>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/field_ui.manage_display.html.twig";
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
        return array (  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  56 => 14,  52 => 13,  47 => 12,  45 => 11,  43 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/field_ui.manage_display.html.twig", "C:\\Users\\Administrator\\Documents\\develop\\drupal\\my_site\\web\\core\\modules\\field_ui\\help_topics\\field_ui.manage_display.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 9);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 10, "help_route_link" => 10, "help_topic_link" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link', 'help_topic_link']
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
