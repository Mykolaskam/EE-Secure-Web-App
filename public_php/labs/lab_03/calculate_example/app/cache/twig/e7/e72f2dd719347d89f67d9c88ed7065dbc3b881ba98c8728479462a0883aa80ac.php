<?php

/* layout.html.twig */
class __TwigTemplate_82c61da619c8c212aa3ba645832fb4b6910b021cd87817a4bfdaef33fd9b90dc extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"css/calculate.css\" type=\"text/css\"/>
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
        return new Twig_Source("", "layout.html.twig", "/var/www/html/ctec3110/lab_03/calculate_example/app/templates/layout.html.twig");
    }
}
