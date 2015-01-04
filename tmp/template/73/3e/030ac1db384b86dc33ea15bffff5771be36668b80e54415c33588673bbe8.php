<?php

/* hello.twig */
class __TwigTemplate_733e030ac1db384b86dc33ea15bffff5771be36668b80e54415c33588673bbe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Phalanx</title>
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\"/>
    <style>body {margin-top : 5em;}</style>
</head>
<body>
    <div class=\"container\">
        <div class=\"well well-lg\">
            <h1>Hello ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " <small>from Phalanx</small></h1>
        </div>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "hello.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }
}
