<?php

/* calculation_result.html.twig */
class __TwigTemplate_1451fc6725dadd96b792b691ccacfc3492e44d858d818b5b21f28469298a2f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        return array (  51 => 7,  47 => 6,  43 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "calculation_result.html.twig", "/Users/brunty/code/calculate_example/app/templates/calculation_result.html.twig");
    }
}
