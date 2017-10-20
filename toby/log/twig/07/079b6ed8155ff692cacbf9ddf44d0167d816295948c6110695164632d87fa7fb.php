<?php

/* layout.html */
class __TwigTemplate_759518a08d6ebc080f0da9b7ed3fd866d97143c1f6c00821e742bb882e62dda9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title></title>
\t<link rel=\"stylesheet\" href=\"\">
</head>
<body>
\t<h1>头部</h1>
\t<content>
\t\t";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "\t</content>
\t<h1>尾部</h1>
</body>
</html>";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  42 => 12,  35 => 15,  33 => 12,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "D:\\wampserver\\www\\toby\\application\\views\\layout.html");
    }
}
