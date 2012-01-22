<?php

/* ByteHistoryUserBundle:Default:index.html.twig */
class __TwigTemplate_244cb5409d782558c35a7511c85a0a5d extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "ByteHistoryUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
