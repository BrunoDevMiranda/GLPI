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

/* pages/login.html.twig */
class __TwigTemplate_9f91607569241f6e7ac0c645ee0b439ddd2d84c458142b2a62bff0892b3a467a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "pages/login.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "   <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/login.php"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\"  data-submit-once>
      <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["noAuto"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />

      <div class=\"row justify-content-center\">
         <div class=\"col-md-5\">

            <h2 class=\"card-header text-center mb-4\">";
        // line 45
        echo twig_escape_filter($this->env, __("Login to your account"), "html", null, true);
        echo "</h2>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
        // line 47
        echo twig_escape_filter($this->env, __("Login"), "html", null, true);
        echo "
               <i class=\"fa-solid fa-user\"></i></label>
               <input type=\"text\" class=\"form-control\" id=\"login_name\" name=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["namfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"\" tabindex=\"1\" />
            </div>
            <div class=\"mb-4\">
               <label class=\"form-label\">
                  ";
        // line 53
        echo twig_escape_filter($this->env, __("Password"), "html", null, true);
        echo "
                  <i class=\"fa-solid fa-key\"></i>

                  ";
        // line 56
        if (($context["show_lost_password"] ?? null)) {
            // line 57
            echo "                     <span class=\"form-label-description\">
                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php?lostpassword=1"), "html", null, true);
            echo "\">
                           ";
            // line 59
            echo twig_escape_filter($this->env, __("Forgotten password?"), "html", null, true);
            echo "
                        </a>
                     </span>
                  ";
        }
        // line 63
        echo "               </label>
               <input type=\"password\" class=\"form-control\" name=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["pwdfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"\" autocomplete=\"off\" tabindex=\"2\" />
            </div>

            ";
        // line 67
        if (twig_constant("GLPI_DEMO_MODE")) {
            // line 68
            echo "               <div class=\"mb-3\">
                  <label class=\"form-label\">";
            // line 69
            echo twig_escape_filter($this->env, __("Language"), "html", null, true);
            echo "</label>
                  ";
            // line 70
            echo ($context["languages_dropdown"] ?? null);
            echo "
               </div>
            ";
        }
        // line 73
        echo "
            ";
        // line 74
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) {
            // line 75
            echo "               <div class=\"mb-3\">
                  <label class=\"form-label\">";
            // line 76
            echo twig_escape_filter($this->env, __("Login source"), "html", null, true);
            echo "</label>
                  ";
            // line 77
            echo ($context["auth_dropdown_login"] ?? null);
            echo "
               </div>
            ";
        }
        // line 80
        echo "
            ";
        // line 81
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_time")) {
            // line 82
            echo "               <div class=\"mb-2\">
                  <label class=\"form-check\">
                     <input type=\"checkbox\" class=\"form-check-input\" name=\"";
            // line 84
            echo twig_escape_filter($this->env, ($context["rmbfield"] ?? null), "html", null, true);
            echo "\" ";
            echo (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_default")) ? ("checked") : (""));
            echo " />
                     <span class=\"form-check-label\">";
            // line 85
            echo twig_escape_filter($this->env, __("Remember me"), "html", null, true);
            echo "</span>
                  </label>
               </div>
            ";
        }
        // line 89
        echo "
            <div class=\"form-footer\">
               <button type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"3\">
                  ";
        // line 92
        echo twig_escape_filter($this->env, __("Sign in"), "html", null, true);
        echo "
               </button>
            </div>

            ";
        // line 96
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 97
            echo "               <hr />
               <div class=\"alert alert-danger\" role=\"alert\">
                  ";
            // line 99
            echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 102
        echo "         </div>

         ";
        // line 104
        if (($context["right_panel"] ?? null)) {
            // line 105
            echo "            <div class=\"col-auto offset-md-1 p-2 text-center\">
               ";
            // line 106
            if ((twig_length_filter($this->env, ($context["text_login"] ?? null)) > 0)) {
                // line 107
                echo "                  <div class=\"rich_text_container\">
                     ";
                // line 108
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
                echo "
                  </div>
               ";
            }
            // line 111
            echo "
               ";
            // line 112
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) {
                // line 113
                echo "                  <hr />

                  <a class=\"btn btn-outline-secondary btn-icon\" href=\"front/helpdesk.faq.php\">
                     <i class=\"fas fa-question\"></i>&nbsp;
                     ";
                // line 117
                echo twig_escape_filter($this->env, __("FAQ"), "html", null, true);
                echo "
                  </a>
               ";
            }
            // line 120
            echo "
               <hr />

               ";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_LOGIN")), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 126
        echo "      </div>
   </form>
";
    }

    // line 130
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "   ";
        echo ($context["copyright_message"] ?? null);
        echo "
";
    }

    // line 134
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "<script type=\"text/javascript\">
   \$(function () {
\$('#login_name').focus();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "pages/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 135,  265 => 134,  258 => 131,  254 => 130,  248 => 126,  242 => 123,  237 => 120,  231 => 117,  225 => 113,  223 => 112,  220 => 111,  214 => 108,  211 => 107,  209 => 106,  206 => 105,  204 => 104,  200 => 102,  194 => 99,  190 => 97,  188 => 96,  181 => 92,  176 => 89,  169 => 85,  163 => 84,  159 => 82,  157 => 81,  154 => 80,  148 => 77,  144 => 76,  141 => 75,  139 => 74,  136 => 73,  130 => 70,  126 => 69,  123 => 68,  121 => 67,  115 => 64,  112 => 63,  105 => 59,  101 => 58,  98 => 57,  96 => 56,  90 => 53,  83 => 49,  78 => 47,  73 => 45,  65 => 40,  61 => 39,  57 => 38,  52 => 37,  48 => 36,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/login.html.twig", "/var/www/templates/pages/login.html.twig");
    }
}
