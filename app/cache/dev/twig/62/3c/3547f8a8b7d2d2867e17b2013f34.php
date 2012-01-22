<?php

/* ByteHistoryPartnerBundle:Default:add.html.twig */
class __TwigTemplate_623c3547f8a8b7d2d2867e17b2013f34 extends Twig_Template
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
        echo "Collabs | Partenaire";
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

Ajouter partenaire


";
    }

    public function getTemplateName()
    {
        return "ByteHistoryPartnerBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
