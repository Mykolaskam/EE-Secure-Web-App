<?php

/* calculation_result.html.twig */
class __TwigTemplate_64fe7f520d21d1218daed60b64876ff1d2943549648eb9c2075e1f88324cbf7c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "calculation_result.html.twig", 1);
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
        echo "Calculation Result";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    Calculation Value 1: ";
        echo twig_escape_filter($this->env, ($context["value_1"] ?? null), "html", null, true);
        echo "<br />
    Calculation Value 2: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["value_2"] ?? null), "html", null, true);
        echo "<br />
    Calculation Type: ";
        // line 6
        echo twig_escape_filter($this->env, ($context["calculation_type"] ?? null), "html", null, true);
        echo "<br />
    Result: ";
        // line 7
        echo twig_escape_filter($this->env, ($context["calculation_result"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "calculation_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  51 => 6,  47 => 5,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "calculation_result.html.twig", "/Applications/MAMP/htdocs/public_php/labs/lab_03/calculate_example/app/templates/calculation_result.html.twig");
    }
}
