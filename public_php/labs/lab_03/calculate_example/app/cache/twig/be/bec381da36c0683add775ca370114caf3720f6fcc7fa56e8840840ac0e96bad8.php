<?php

/* layout.html.twig */
class __TwigTemplate_f2f6be2531d4b25a4ba4fe647c20389604595ff6e097b09d145cc25d85198592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=”en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <link rel=\"stylesheet\" href=\"/css/calculate.css\" type=\"text/css\"/>
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  42 => 6,  36 => 10,  34 => 9,  28 => 6,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/Users/brunty/code/calculate_example/app/templates/layout.html.twig");
    }
}
