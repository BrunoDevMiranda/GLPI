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

/* install/step6.html.twig */
class __TwigTemplate_ca0f9c7c3e4a3118d538b831a9f931f7960d51f53c9c39dcee88586f75e4a113 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
<h3>";
        // line 34
        echo twig_escape_filter($this->env, __("Collect data"), "html", null, true);
        echo "</h3>

<hr>
<p>
   ";
        // line 38
        echo ($context["telemetry_info"] ?? null);
        echo "
</p>

<hr>
<p>
   ";
        // line 43
        echo ($context["reference_info"] ?? null);
        echo "
</p>

<hr>
<form action=\"install.php\" method=\"post\" data-submit-once>
   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 49
        echo twig_escape_filter($this->env, __("Continue"), "html", null, true);
        echo "
      <i class=\"fas fa-chevron-right ms-1\"></i>
   </button>

   <input type=\"hidden\" name=\"install\" value=\"Etape_5\">
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\">
</form>
";
    }

    public function getTemplateName()
    {
        return "install/step6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 54,  64 => 49,  55 => 43,  47 => 38,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step6.html.twig", "/var/www/templates/install/step6.html.twig");
    }
}
