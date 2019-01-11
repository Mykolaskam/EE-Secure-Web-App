<?php

/* homepage.html.twig */
class __TwigTemplate_ca76b862db2734c0fce84cdecf436835c3d50e4051c0e8d56a6591a3e8a04ab6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "homepage.html.twig", 1);
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


    <div class=\"side-panel\">

        <div class=\"user-profile-container\">
            <h3 class=\"ee\">EE M2M</h3>
            <div class=\"my-profile-name\">Mykolas Kaminskas</div>
        </div>

        <div class=\"menu-options-container\">
            <a class=\"menu-option\" href=\"#\"><i class=\"far fa-comment-alt\"></i>Messages</a>
            <a class=\"menu-option\" href=\"#\"><i class=\"fas fa-cog\"></i>Settings</a>
        </div>

        <div class=\"logout-container\">
            <a class=\"logout\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["logout"] ?? null), "html", null, true);
        echo "\">Log Out</a>
        </div>

    </div>


    <main>


        <h1>Messages</h1>

        <div class=\"line\"></div>

        <div class=\"message-box\">

            <div class=\"date-time\">

                <h5 class=\"time\">22:34</h5>
                <h5 class=\"date\">11/01/2019</h5>

            </div>

            <div class=\"message-container\">
                <h2 class=\"message-name\">18-3110-AN</h2>
                <h3 class=\"message-phone-number\">+44 234286678</h3>
            </div>

            <div class=\"line2\"></div>

             <div class=\"message-boxes\">
                <div class=\"col\">
                      <h4>Switch 1</h4>
                      <p>ON</p>
                </div>

                <div class=\"col\">
                      <h4>Switch 2</h4>
                      <p>ON</p>
                </div>

                <div class=\"col\">
                      <h4>Switch 3</h4>
                      <p>ON</p>
                </div>

                <div class=\"col\">
                      <h4>Switch 4</h4>
                      <p>ON</p>
                </div>
            </div>

            <div class=\"line2\"></div>

             <div class=\"message-boxes\">
                <div class=\"col\">
                      <h4>Temperature</h4>
                      <p>ON</p>
                </div>

                <div class=\"col\">
                      <h4>Fan</h4>
                      <p>ON</p>
                </div>

                <div class=\"col\">
                      <h4>Last Number</h4>
                      <p>ON</p>
                </div>
            </div>
            


            
        </div>



    </main>


</div>
";
    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepage.html.twig", "/Applications/MAMP/htdocs/SecureWebApp-master/SecureWebApp/includes/secure_web_app/app/templates/homepage.html.twig");
    }
}
