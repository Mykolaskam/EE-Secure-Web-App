<?php

/* display.html.twig */
class __TwigTemplate_161191b3885ae4f5fe47d050a3204be338641a4541cdf4208df03cbe4ed3a3b4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "display.html.twig", 1);
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
        echo " Homepage ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container\">


         <h4>Username: ";
        // line 8
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</h4>
        <h4>Password: ";
        // line 9
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "</h4>
        <h4>sql: ";
        // line 10
        echo twig_escape_filter($this->env, ($context["sql"] ?? null), "html", null, true);
        echo "</h4>
      

          


    </div>
";
    }

    public function getTemplateName()
    {
        return "display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  52 => 9,  48 => 8,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display.html.twig", "/p3t/phpappfolder/includes/secure_web_app/app/templates/display.html.twig");
    }
}
