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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_22655c5b035e348acd9f17c934adc7062077d69eb5e037725370aa69dd76227b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("palette");
        // line 35
        if ( !array_key_exists("css_files", $context)) {
            // line 36
            echo "   ";
            $context["css_files"] = [0 => ["path" => "public/lib/base.css"], 1 => ["path" => (("css/palettes/" .             // line 38
($context["theme"] ?? null)) . ".scss")]];
            // line 40
            echo "   ";
        }
        // line 42
        if ( !array_key_exists("js_files", $context)) {
            // line 43
            echo "   ";
            $context["js_files"] = [0 => ["path" => "public/lib/base.js"], 1 => ["path" => "js/common.js"]];
        }
        // line 48
        echo "
";
        // line 49
        echo twig_include($this->env, $context, "layout/parts/head.html.twig");
        echo "

<body class=\"welcome-anonymous bodyLogin\">

 

   <div class=\"page-anonymous\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         ";
        // line 57
        $context["style"] = null;
        // line 58
        echo "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 59
            echo "            ";
            $context["style"] = "max-width: 40rem";
            // line 60
            echo "         ";
        }
        // line 61
        echo "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 62
            echo "            ";
            $context["style"] = "max-width: 60rem";
            // line 63
            echo "         ";
        }
        // line 64
        echo "         <div>   
   <img src=\"/pics/warning.png\" id=\"success-btn\" class=\"icone\">
      
   <div class=\"alert-box success\">
<h2>Sobre o Service Desk:</h2>
O service desk é o ponto único de contato para os usuários de TI e tem como objetivo principal 
tratar todos os incidentes e requisições de serviço.</div>
   </div>

         <div class=\"container-tight py-6\" ";
        // line 73
        if ( !(null === ($context["style"] ?? null))) {
            echo "style=\"";
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
            <div class=\"text-center\">
               <div class=\"col-md\">
                  <span class=\"glpi-logo mb-4\" title=\"UNISUAM\"></span>
               </div>
            </div>
            <div class=\"card-md\">
               <div class=\"card-body\">
               ";
        // line 81
        $this->displayBlock('content_block', $context, $blocks);
        // line 82
        echo "               </div>
            </div>

            <div class=\"text-center text-muted mt-3\">
               ";
        // line 86
        $this->displayBlock('footer_block', $context, $blocks);
        // line 87
        echo "            </div>
         </div>
      </div>
   </div>

   ";
        // line 92
        $this->displayBlock('javascript_block', $context, $blocks);
        // line 93
        echo "   


<script>
\$( \"#success-btn\" ).click(function() {
  \$( \"div.success\" ).fadeIn( 500 ).delay( 5000 ).fadeOut( 5000 );
});
</script
</body>
</html>
";
    }

    // line 81
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 86
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 92
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout/page_card_notlogged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 92,  159 => 86,  153 => 81,  139 => 93,  137 => 92,  130 => 87,  128 => 86,  122 => 82,  120 => 81,  105 => 73,  94 => 64,  91 => 63,  88 => 62,  85 => 61,  82 => 60,  79 => 59,  76 => 58,  74 => 57,  63 => 49,  60 => 48,  56 => 43,  54 => 42,  51 => 40,  49 => 38,  47 => 36,  45 => 35,  43 => 34,  40 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "/var/www/templates/layout/page_card_notlogged.html.twig");
    }
}
