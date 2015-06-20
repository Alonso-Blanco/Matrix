<?php

/* MatrixBundle:Default:index.html.twig */
class __TwigTemplate_2727285ae1e71c7af35d3bcc428e64414569b5ccd5667802f2af3ef27302ef70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MatrixBundle:Default:index.html.twig", 1);
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
        echo "<div id=\"login\" class=\"container\">
\t";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method") == "")) {
            // line 6
            echo "      <form class=\"form-signin\">
        <h2 id=\"header-lg\">Autentificación</h2>
        <label for=\"inputCedula\" class=\"sr-only\">Número de Cédula</label>
        <input type=\"text\" id=\"input-lg\" class=\"form-control\" placeholder=\"Número de Cédula\" required autofocus>    
        <label for \"contrasena\" class=\"sr-only\">Contraseña</label>
\t    <input type =\"password\" name =\"contrasena\" id=\"input-lg\" class=\"form-control\" placeholder=\"Contraseña\" required/>     
       \t<button id=\"botton-lg\" class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Ingresar</button>
      </form>
    ";
        } else {
            // line 15
            echo "
\t\t<h1>Bienvenida(o)  ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "cedula", array()), "html", null, true);
            echo "</h1>
\t    <p>Eres un usuario: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "rol", array()), "html", null, true);
            echo "</p> 

    ";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  54 => 17,  50 => 16,  47 => 15,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
