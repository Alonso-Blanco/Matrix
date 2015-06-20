<?php

/* MatrixBundle:Usuario:show.html.twig */
class __TwigTemplate_610d63fad19b1fb609514fe17831dcc30c26bcac0a7d3e22ccd4dc8213dc397e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Usuario:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1 class=\"header-list\">Información del Usuario</h1>

    <table class=\"table-list table record_properties\">
        <thead>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Rol</th>
            <th>Nombre Completo</th>
            <th>Cédula</th>
            <th>Carné</th>
            <th>Teléfono</th>
            <th>Dirección</th>
        </thead>
        <tbody>           
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario", array()), "html", null, true);
        echo "</td>            
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrasena", array()), "html", null, true);
        echo "</td>            
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rol", array()), "html", null, true);
        echo "</td>            
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombrecompleto", array()), "html", null, true);
        echo "</td>            
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cedula", array()), "html", null, true);
        echo "</td>            
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "carne", array()), "html", null, true);
        echo "</td>            
            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefono", array()), "html", null, true);
        echo "</td>            
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
        echo "</td>            
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li class=\"list-tb\">
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "\"><button class=\"button-new btn btn-primary\">Volver a los Usuarios</button></a>
        </li>
        <li class=\"list-tb\">
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"button-new btn btn-primary\">Editar</button></a>
        </li>
        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Usuario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  90 => 34,  84 => 31,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
