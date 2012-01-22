<?php

/* ByteHistoryCollaboratorBundle:Default:index.html.twig */
class __TwigTemplate_e789fdf4fe41d42545fb4e220e022c68 extends Twig_Template
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
        echo "Collabs | Collaborateurs";
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

Collaborateurs


";
    }

    public function getTemplateName()
    {
        return "ByteHistoryCollaboratorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
