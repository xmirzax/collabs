<?php

/* ByteHistoryStartBundle::layout.html.twig */
class __TwigTemplate_27730aac817be01f100c74e2317c8ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bytehistory/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bytehistory/css/bh_menu_style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <!--[if IE]>
        <link rel=\"stylesheet\" media=\"all\" type=\"text/css\" href=\"ie.css\" />
        <![endif]-->
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"nav\">
            <div class=\"table\">

            <ul class=\"select\"><li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\"><b>Accueil</b></a></li></ul>

            <ul class=\"select\"><li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("collaborator_index"), "html", null, true);
        echo "\"><b>Collaborateurs</b></a>
                <div class=\"select_sub\">
                        <ul class=\"sub\">
                                <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("collaborator_search"), "html", null, true);
        echo "\">Rechercher</a></li>
                                <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("collaborator_add"), "html", null, true);
        echo "\">Déposer une annonce</a></li> 
                        </ul>
                </div>
                </li>
            </ul>

            <ul class=\"select\"><li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partner_index"), "html", null, true);
        echo "\"><b>Partenaires</b></a>
                <div class=\"select_sub\">
                        <ul class=\"sub\">
                                <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partner_index"), "html", null, true);
        echo "\">Nos partenaires</a></li>
                                <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partner_add"), "html", null, true);
        echo "\">Soumettre un partenariat</a></li>
                        </ul>
                </div>
                </li>
            </ul>


            <ul class=\"select\"><li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_index"), "html", null, true);
        echo "\"><b>Newsletter</b></a>
                </li>
            </ul>
            
            <ul class=\"select\"><li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("description"), "html", null, true);
        echo "\"><b>Qui sommes-nous?</b></a>
                    <div class=\"select_sub\">
                        <ul class=\"sub\">
                                <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("description"), "html", null, true);
        echo "\">A propos</a></li>
                                <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recruitment"), "html", null, true);
        echo "\">Recrutement</a></li>

                        </ul>
                </div>
                </li>
            </ul>


            <ul class=\"select\"><li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_me"), "html", null, true);
        echo "\"><b>Contact</b></a>
                </li>
            </ul>
            
            <ul class=\"select\"><li><a href=\"login\"><b>Connexion</b></a>
                </li>
            </ul>

            </div>
        </div>
            
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                
                    <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bytehistory/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony\">
               
            </div>

            ";
        // line 74
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "flash", array("notice", ), "method")) {
            // line 75
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 76
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array("notice", ), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 79
        echo "
            ";
        // line 80
        $this->displayBlock('content_header', $context, $blocks);
        // line 89
        echo "
            <div class=\"symfony-content\">
                ";
        // line 91
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "            </div>

            ";
        // line 95
        if (array_key_exists("code", $context)) {
            // line 96
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 97
            if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
            echo $_code_;
            echo "</div>
            ";
        }
        // line 99
        echo "        </div>
    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 82
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 83
        echo "                        
                    ";
    }

    // line 80
    public function block_content_header($context, array $blocks = array())
    {
        // line 81
        echo "                <ul id=\"menu\">
                    ";
        // line 82
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 85
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 91
    public function block_content($context, array $blocks = array())
    {
        // line 92
        echo "                ";
    }

    public function getTemplateName()
    {
        return "ByteHistoryStartBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
