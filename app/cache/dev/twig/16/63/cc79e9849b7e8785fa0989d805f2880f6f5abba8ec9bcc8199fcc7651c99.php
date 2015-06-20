<?php

/* MatrixBundle:Curso:show.html.twig */
class __TwigTemplate_1663cc79e9849b7e8785fa0989d805f2880f6f5abba8ec9bcc8199fcc7651c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Curso:show.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Información del Curso</h1>

    <table class=\"table-list table record_properties\">
        <thead>
            <tr>                
                <th>Sigla</th>
                <th>Nombre del Curso</th>
                <th>Créditos</th>                
            </tr>
        </thead>
        <tbody>
            <tr>                       
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sigla", array()), "html", null, true);
        echo "</td>        
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreCurso", array()), "html", null, true);
        echo "</td>            
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creditos", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li class=\"list-tb\">
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("curso");
        echo "\"><button class=\"button-new btn btn-primary\">Volver a los Cursos</button></a>
        </li>
        <li class=\"list-tb\">
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"button-new btn btn-primary\">Editar</button></a>
        </li>
        
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

    </ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Curso:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  69 => 28,  63 => 25,  53 => 18,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }
}
