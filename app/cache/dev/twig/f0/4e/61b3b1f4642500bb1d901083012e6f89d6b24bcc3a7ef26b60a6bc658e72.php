<?php

/* MatrixBundle:Usuario:login.html.twig */
class __TwigTemplate_f04e61b3b1f4642500bb1d901083012e6f89d6b24bcc3a7ef26b60a6bc658e72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MatrixBundle:Usuario:login.html.twig", 1);
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
            echo "      <form class=\"form-signin\" method=\"POST\" action=\"";
            echo $this->env->getExtension('routing')->getUrl("usuario_login");
            echo "\">
        <h2 id=\"header-lg\">Autentificación</h2>
        <label for=\"user_login\" class=\"sr-only\">Número de Cédula</label>
        <input type=\"text\" name=\"cedula\" id=\"input-lg\" class=\"form-control\" placeholder=\"Número de Cédula\" required autofocus>    
        <label for \"contrasena\" class=\"sr-only\">Contraseña</label>
\t    <input type =\"password\" name =\"contrasena\" id=\"input-lg\" class=\"form-control\" placeholder=\"Contraseña\" required/>     
       \t<button id=\"botton-lg\" class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Ingresar</button>
      </form>  
    ";
        }
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Usuario:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
