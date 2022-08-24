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

/* install/step7.html.twig */
class __TwigTemplate_0be19095a2479dbad06f5dac8a1eb9c94beb23cd5950ab57f9139d6d5d216d7d extends Template
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
<h2>";
        // line 34
        echo twig_escape_filter($this->env, __("One last thing before starting"), "html", null, true);
        echo "</h2>

<p>
   ";
        // line 37
        echo ($context["glpinetwork"] ?? null);
        echo "
</p>

<hr>
<form action=\"install.php\" method=\"post\" data-submit-once>
   <p>
   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 44
        echo twig_escape_filter($this->env, __("Continue"), "html", null, true);
        echo "
      <i class=\"fas fa-chevron-right ms-1\"></i>
   </button>
   </p>

   <input type='hidden' name='install' value='Etape_6'>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\">
</form>
";
    }

    public function getTemplateName()
    {
        return "install/step7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 50,  56 => 44,  46 => 37,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step7.html.twig", "/var/www/templates/install/step7.html.twig");
    }
}
