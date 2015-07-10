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
        // line 4
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "login"), "method"), "usuario", array()) == "")) {
            // line 5
            echo "\t";
        } else {
            // line 6
            echo "\t\t<div class=\"centrado principal\">
\t\t\t<h1 class=\"header-list\">Bienvenida(o) ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "login"), "method"), "usuario", array()), "html", null, true);
            echo "</h1>
\t\t\t<h3 class=\"header-list\">Tu rol en el sistema es el de: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "login"), "method"), "rol", array()), "html", null, true);
            echo "</h3> 
\t\t\t<h3 class=\"header-list\">Tu carrera es: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "login"), "method"), "carrera", array()), "html", null, true);
            echo "</h3> 
\t\t\t
\t\t\t<br>
\t\t\t<br>
\t\t\t
\t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/matrix/images/firma-ucr-ico.png"), "html", null, true);
            echo "\" />

\t\t</div>
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
        return array (  55 => 14,  47 => 9,  43 => 8,  39 => 7,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
