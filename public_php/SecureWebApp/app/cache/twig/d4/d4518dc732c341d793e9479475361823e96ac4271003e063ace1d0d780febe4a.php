<?php

/* homepage.html.twig */
class __TwigTemplate_58cf232aaae2f321557c372e47b4e1a6e527d1d176a427d9116a53b48821a3a0 extends Twig_Template
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
        echo "    <div class=\"container\">


        <div class=\"side-panel\">

            <div class=\"user-profile-container\">
                <img class=\"my-profile-image\" src=\"media/head.png\" alt=\"your profile image\">
                <div class=\"my-profile-name\">Mykolas Kaminskas</div>
            </div>

            <div class=\"menu-options-container\">
                <a class=\"menu-option\" href=\"#\"><i class=\"far fa-comment-alt\"></i>Messages</a>
                <a class=\"menu-option\" href=\"#\"><i class=\"fas fa-cog\"></i>Settings</a>
            </div>

            <div class=\"logout-container\">
                <a class=\"logout\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/login\">Log Out</a>
            </div>

        </div>


        <main>
            

            <h1>Messages</h1>

            <div class=\"line\"></div>

            <div class=\"message-box\">

                <div class=\"profile-image-container\">
                    <img class=\"profile-picture\" src=\"media/profile.png\" alt=\"profile picture\">
                </div>

                <div class=\"message-content-container\">

                    <h2 class=\"sende-name\">Mykolas Kaminskas</h2>

                    <h3 class=\"sender-mobile\">+44 1238637452</h3>
                    <h3 class=\"sender-email\">mykolaskam@example.com</h3>

                    <div class=\"line2\"></div>

                    <p class=\"message\">Happy new year!!!</p>

                </div>

                <div class=\"date-time-container\">

                    <h3 class=\"date-time\"> 23:59 31 Dec</h3>

                </div>

            </div>

            <div class=\"message-box\">

                <div class=\"profile-image-container\">
                    <img class=\"profile-picture\" src=\"media/profile.png\" alt=\"profile picture\">
                </div>

                <div class=\"message-content-container\">

                    <h2 class=\"sende-name\">Mykolas Kaminskas</h2>

                    <h3 class=\"sender-mobile\">+44 1238637452</h3>
                    <h3 class=\"sender-email\">mykolaskam@example.com</h3>

                    <div class=\"line2\"></div>

                    <p class=\"message\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio magnam sequi
                        ullam aperiam est vitae expedita, corporis quaerat quam earum nam nobis nihil labore natus
                        similique! Nam temporibus quasi eius.</p>

                </div>

                <div class=\"date-time-container\">

                    <h3 class=\"date-time\"> 23:59 31 Dec</h3>

                </div>

            </div>

            <div class=\"message-box\">

                    <div class=\"profile-image-container\">
                        <img class=\"profile-picture\" src=\"media/profile.png\" alt=\"profile picture\">
                    </div>
    
                    <div class=\"message-content-container\">
    
                        <h2 class=\"sende-name\">Mykolas Kaminskas</h2>
    
                        <h3 class=\"sender-mobile\">+44 1238637452</h3>
                        <h3 class=\"sender-email\">mykolaskam@example.com</h3>
    
                        <div class=\"line2\"></div>
    
                        <p class=\"message\">Happy new year!!!</p>
    
                    </div>
    
                    <div class=\"date-time-container\">
    
                        <h3 class=\"date-time\"> 23:59 31 Dec</h3>
    
                    </div>
    
            </div>

            <div class=\"message-box\">

                    <div class=\"profile-image-container\">
                        <img class=\"profile-picture\" src=\"media/profile.png\" alt=\"profile picture\">
                    </div>
    
                    <div class=\"message-content-container\">
    
                        <h2 class=\"sende-name\">Mykolas Kaminskas</h2>
    
                        <h3 class=\"sender-mobile\">+44 1238637452</h3>
                        <h3 class=\"sender-email\">mykolaskam@example.com</h3>
    
                        <div class=\"line2\"></div>
    
                        <p class=\"message\">Happy new year!!!</p>
    
                    </div>
    
                    <div class=\"date-time-container\">
    
                        <h3 class=\"date-time\"> 23:59 31 Dec</h3>
    
                    </div>
    
            </div>

            <div class=\"message-box\">

                    <div class=\"profile-image-container\">
                        <img class=\"profile-picture\" src=\"media/profile.png\" alt=\"profile picture\">
                    </div>
    
                    <div class=\"message-content-container\">
    
                        <h2 class=\"sende-name\">Mykolas Kaminskas</h2>
    
                        <h3 class=\"sender-mobile\">+44 1238637452</h3>
                        <h3 class=\"sender-email\">mykolaskam@example.com</h3>
    
                        <div class=\"line2\"></div>
    
                        <p class=\"message\">Happy new year!!!</p>
    
                    </div>
    
                    <div class=\"date-time-container\">
    
                        <h3 class=\"date-time\"> 23:59 31 Dec</h3>
    
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
        return array (  60 => 20,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepage.html.twig", "/Applications/MAMP/htdocs/public_php/SecureWebApp/app/templates/homepage.html.twig");
    }
}
