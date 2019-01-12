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
<div class=\"main-container\">


        <div class=\"side-panel\">

            <div class=\"user-profile-container\">
                <h3 class=\"ee\">EE M2M</h3>
                <div class=\"my-profile-name\">Mykolas Kaminskas</div>
            </div>

        <div class=\"menu-options-container\">
            <a class=\"menu-option\" href=\"#\"><i class=\"far fa-comment-alt\"></i>Messages</a>
            <a class=\"menu-option\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["register"] ?? null), "html", null, true);
        echo "\"><i class=\"fas fa-user-plus\"></i>Add User</a>
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
        return array (  173 => 95,  158 => 86,  150 => 81,  142 => 76,  130 => 67,  122 => 62,  114 => 57,  106 => 52,  95 => 44,  91 => 43,  83 => 38,  77 => 34,  73 => 33,  57 => 20,  50 => 16,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepage.html.twig", "/Applications/MAMP/htdocs/SecureWebApp-master/SecureWebApp/includes/secure_web_app/app/templates/homepage.html.twig");
    }
}
