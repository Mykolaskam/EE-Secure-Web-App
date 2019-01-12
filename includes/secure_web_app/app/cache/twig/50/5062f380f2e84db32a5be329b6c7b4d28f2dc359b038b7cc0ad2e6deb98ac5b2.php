<?php

/* homepage.html.twig */
class __TwigTemplate_7dbd949b06f91ad45c8a226f79adfcecaab00a7d838772fdf4c8e5c3c7239e1f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "homepage.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
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
        // line 20
        echo twig_escape_filter($this->env, ($context["logout"] ?? null), "html", null, true);
        echo "\">Log Out</a>
            </div>

        </div>


        <main>


            <h1>Messages</h1>

            <div class=\"line\"></div>

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 34
            echo "                <div class=\"message-box\">

                    <div class=\"date-time\">

                        <h5 class=\"date\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "getTime", array()), "html", null, true);
            echo "</h5>

                    </div>

                    <div class=\"message-container\">
                        <h2 class=\"message-name\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "getId", array()), "html", null, true);
            echo "</h2>
                        <h3 class=\"message-phone-number\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "getSource", array()), "html", null, true);
            echo "</h3>
                    </div>

                    <div class=\"line2\"></div>

                    <div class=\"message-boxes\">
                        <div class=\"col\">
                            <h4>Switch 1</h4>
                            <p class=\"message-status\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "getSwitch1", array()), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"col\">
                            <h4>Switch 2</h4>
                            <p class=\"message-status\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "getSwitch2", array()), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"col\">
                            <h4>Switch 3</h4>
                            <p class=\"message-status\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "getSwitch3", array()), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"col\">
                            <h4>Switch 4</h4>
                            <p class=\"message-status\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "getSwitch4", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>

                    <div class=\"line2\"></div>

                    <div class=\"message-boxes\">
                        <div class=\"col\">
                            <h4>Temperature</h4>
                            <p class=\"message-status\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "getTemp", array()), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"col\">
                            <h4>Fan</h4>
                            <p class=\"message-status\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "getFan", array()), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"col\">
                            <h4>Last Number</h4>
                            <p class=\"message-status\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "getKey", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>




                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
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
        return array (  170 => 95,  155 => 86,  147 => 81,  139 => 76,  127 => 67,  119 => 62,  111 => 57,  103 => 52,  92 => 44,  88 => 43,  80 => 38,  74 => 34,  70 => 33,  54 => 20,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepage.html.twig", "/p3t/phpappfolder/includes/secure_web_app/app/templates/homepage.html.twig");
    }
}
