<?php

/* display_storage_result.html.twig */
class __TwigTemplate_d1513a628719be18383633a48af1d41712d226e35277d1e740e5a5d6e55ec11a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "display_storage_result.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "banner.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"page-content-div\">
        <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"post\">
            <h3>";
        // line 5
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo "</h3>
            <h4>";
        // line 6
        echo twig_escape_filter($this->env, ($context["sid_text"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["sid"] ?? null), "html", null, true);
        echo "</h4>
            <h4>";
        // line 7
        echo twig_escape_filter($this->env, ($context["storage_text"] ?? null), "html", null, true);
        echo "</h4>
            <h4>Username: ";
        // line 8
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</h4>
            <h4>Password: ";
        // line 9
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "</h4>
            <h4>";
        // line 10
        echo twig_escape_filter($this->env, ($context["server_type"] ?? null), "html", null, true);
        echo "</h4>
            <h4>";
        // line 11
        echo twig_escape_filter($this->env, ($context["storage_result_message"] ?? null), "html", null, true);
        echo "</h4>
            <input type=\"submit\" value=\"View Stored Information\">
        </form>
        <p class=\"curr_page\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">Home</a></p>

    </div>
";
    }

    public function getTemplateName()
    {
        return "display_storage_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  46 => 6,  42 => 5,  38 => 4,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display_storage_result.html.twig", "/p3t/phpappfolder/includes/sessions_example/app/templates/display_storage_result.html.twig");
    }
}
