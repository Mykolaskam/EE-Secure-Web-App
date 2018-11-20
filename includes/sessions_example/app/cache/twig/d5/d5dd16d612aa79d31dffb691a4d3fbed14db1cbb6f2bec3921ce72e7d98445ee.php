<?php

/* display_session_result.html.twig */
class __TwigTemplate_0554a05a892e4d002f3277158f3f3bd98c91fdc9a6ee84ec69bfcfe111e5619a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "display_session_result.html.twig", 1);
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
        <h3>";
        // line 4
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo "</h3>
        <h4>";
        // line 5
        echo twig_escape_filter($this->env, ($context["sid_text"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["sid"] ?? null), "html", null, true);
        echo "</h4>
        <h4>";
        // line 6
        echo twig_escape_filter($this->env, ($context["storage_text"] ?? null), "html", null, true);
        echo "</h4>
        <h4>Username: ";
        // line 7
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</h4>
        <h4>Password: ";
        // line 8
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "</h4>
        <p class=\"curr_page\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">Home</a></p>

    </div>
";
    }

    public function getTemplateName()
    {
        return "display_session_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  51 => 7,  47 => 6,  42 => 5,  38 => 4,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display_session_result.html.twig", "/p3t/phpappfolder/includes/sessions_example/app/templates/display_session_result.html.twig");
    }
}
