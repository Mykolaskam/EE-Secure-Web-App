<?php

/* register.html.twig */
class __TwigTemplate_9a50f3eb065800c8dc7a3cdd649e2fad38e7ed85deb7e024f7d5ed70c0c12a42 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "register.html.twig", 1);
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
        echo "Add New User";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container\">

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["action_register"] ?? null), "html", null, true);
        echo "\" method=\"post\">

        <h2>Add New User</h2>

        <div class=\"text-wrapper\">
            <input class=\"input\" type=\"text\" name=\"username\" required/>
            <label>Username</label>
        </div>

        <div class=\"text-wrapper\">
            <input class=\"input\" type=\"password\" name=\"password\" required/>
            <label>Password</label>
        </div>

        <div class=\"text-wrapper\">
            <input class=\"input\" type=\"text\" name=\"name\" required/>
            <label>name</label>
        </div>

        <div class=\"text-wrapper\">
            <input class=\"input\" type=\"text\" name=\"surname\" required/>
            <label>surname</label>
        </div>

        <button type=\"submit\" class=\"btn-blue\" name=\"register\">Submit</button>
        
    </form>
    
     <h4 class=\"error-msg\">";
        // line 35
        echo twig_escape_filter($this->env, ($context["error_message"] ?? null), "html", null, true);
        echo "</h4>

</div>

";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 35,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register.html.twig", "/Applications/MAMP/htdocs/SecureWebApp-master/SecureWebApp/includes/secure_web_app/app/templates/register.html.twig");
    }
}
