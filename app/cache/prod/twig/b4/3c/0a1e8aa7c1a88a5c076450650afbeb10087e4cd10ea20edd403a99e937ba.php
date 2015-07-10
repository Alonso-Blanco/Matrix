<?php

/* MatrixBundle:Grupo:show.html.twig */
class __TwigTemplate_b43c0a1e8aa7c1a88a5c076450650afbeb10087e4cd10ea20edd403a99e937ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Grupo:show.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Información del Grupo</h1>

    <table class=\"table-list table record_properties tabla-carreras\">
        <thead>
            <th>Numero de Grupo</th>  
            <th>Curso del Grupo</th>          
        </thead>
        <tbody>            
            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numerogrupo", array()), "html", null, true);
        echo "</td>   
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "curso", array()), "html", null, true);
        echo "</td>         
        </tbody>
    </table>

    <ul class=\"record_actions opciones-carreras\">
        <li class=\"list-tb\">
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("grupo");
        echo "\">
                <button class=\"button-new btn btn-primary\">Volver a los Grupos</button>
            </a>
        </li>
        <li  class=\"list-tb\">
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
                <button class=\"button-new btn btn-primary\">Editar</button>
            </a>
        </li>
        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "
    </ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Grupo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  62 => 24,  54 => 19,  45 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
