<?php

/* login.html.twig */
class __TwigTemplate_081e3cc4d47b080390dd068fea8b22c45ad8360e2dcde3c1818c9c2bc52ba0e4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Log In";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">

        <h1>Secure Web App</h1>

        <form action=\"\" method=\"post\">

            <h2>Sign In</h2>

            <div class=\"text-wrapper\">
                <input class=\"input\" type=\"text\" name=\"username\" />
                <label>Username</label>
            </div>

            <div class=\"text-wrapper\">
                <input class=\"input\" type=\"password\" name=\"password\" />
                <label>Password</label>
            </div>

            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">looool</a>

            <button type=\"submit\" class=\"btn-blue\" name=\"add\">Login</button>


        </form>

    </div>

";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.twig", "/Applications/MAMP/htdocs/public_php/SecureWebApp/app/templates/login.html.twig");
    }
}
