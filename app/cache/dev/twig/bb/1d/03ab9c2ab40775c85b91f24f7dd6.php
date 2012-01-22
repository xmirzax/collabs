<?php

/* ByteHistoryConnectionBundle:Default:login.html.twig */
class __TwigTemplate_bb1d03ab9c2ab40775c85b91f24f7dd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ByteHistoryStartBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Collabs | Connexion";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        if ($this->getContext($context, "error")) {
            // line 12
            echo "    <div> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo " </div>
";
        }
        // line 14
        echo "    
    <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
        <label for=\"username\">Login:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
        <label for=\"password\">Mot de passe:</label>
        <input type=\"password\" id=\"password\" name=\"_password\"  />
        
        <input type=\"submit\" name=\"Login\" />
    </form>
    

";
    }

    public function getTemplateName()
    {
        return "ByteHistoryConnectionBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
