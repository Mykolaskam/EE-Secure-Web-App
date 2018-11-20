<?php

/* layout.html.twig */
class __TwigTemplate_473efc53aff2ea23e864d81750db5816b97ec8f9b5366334e56ac93c45418bd0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        return array (  51 => 9,  46 => 6,  40 => 10,  38 => 9,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/p3t/phpappfolder/public_php/lab_03/calculate_example/app/templates/layout.html.twig");
    }
}
