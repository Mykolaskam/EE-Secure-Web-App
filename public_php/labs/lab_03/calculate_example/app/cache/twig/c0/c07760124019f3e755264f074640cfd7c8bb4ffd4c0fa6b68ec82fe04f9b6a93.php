<?php

/* homepageform.html.twig */
class __TwigTemplate_481228a2bbe80b19ac75645c7997417b3ddc6dfbc785b659db53ff5690245052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "homepageform.html.twig", 1);
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
        echo "Calculation Form";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Simple Arithmetic</h2>
    <h3>Enter values and select calculation type</h3>
    <form action=\"index.php/performcalculation\" method=\"post\">
        <label for=\"val1\">Value 1: </label><input id=\"val1\" type=\"text\" name=\"value1\" size=\"10\">
        <label for=\"val2\">Value 2: </label><input id=\"val2\" type=\"text\" name=\"value2\" size=\"10\">
        <br><br>
        <p>Select calculation type:</p>
        <label for=\"calctype_addition\"><input id=\"calctype_addition\" type=\"radio\" name=\"calctype\" value=\"addition\"
                                              checked=\"checked\">Add</label>
        <label for=\"calctype_subtraction\"><input id=\"calctype_subtraction\" type=\"radio\" name=\"calctype\"
                                                 value=\"subtraction\">Subtract</label>
        <label for=\"calctype_multiplication\"><input id=\"calctype_multiplication\" type=\"radio\" name=\"calctype\"
                                                    value=\"multiplication\">Multiply</label>
        <label for=\"calctype_division\"><input id=\"calctype_division\" type=\"radio\" name=\"calctype\" value=\"division\">Divide</label>
        <hr>
        <input type=\"submit\" value=\"Calculate\">
        <input type=\"reset\" value=\"Clear\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "homepageform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepageform.html.twig", "/var/www/html/ctec3110/lab_03/calculate_example/app/templates/homepageform.html.twig");
    }
}
