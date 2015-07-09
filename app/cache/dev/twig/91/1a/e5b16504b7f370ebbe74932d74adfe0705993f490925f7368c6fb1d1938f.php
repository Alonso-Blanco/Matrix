<?php

/* MatrixBundle:Inicio:inicio.html.twig */
class __TwigTemplate_911ae5b16504b7f370ebbe74932d74adfe0705993f490925f7368c6fb1d1938f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MatrixBundle:Inicio:inicio.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "usuario", array()) == "")) {
            // line 6
            echo "
\t";
        } else {
            // line 8
            echo "\t\t<h1 class=\"header-list\">Bienvenida(o) ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "usuario", array()), "html", null, true);
            echo "</h1>
\t\t<h3 class=\"header-list\">Tu rol en el sistema es el de: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "rol", array()), "html", null, true);
            echo "</h3> 
\t";
        }
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Inicio:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  37 => 8,  33 => 6,  31 => 5,  28 => 3,  11 => 1,);
    }
}
