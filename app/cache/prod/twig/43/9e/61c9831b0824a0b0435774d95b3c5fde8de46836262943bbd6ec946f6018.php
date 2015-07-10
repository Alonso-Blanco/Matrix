<?php

/* MatrixBundle:CursoRequisito:show.html.twig */
class __TwigTemplate_439e61c9831b0824a0b0435774d95b3c5fde8de46836262943bbd6ec946f6018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:CursoRequisito:show.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Curso-Requisito</h1>

    <table class=\"table-list table record_properties\">
        <thead>
            <tr>                
                <th>Curso</th>                             
            </tr>
        </thead>
        <tbody>
            <tr>                       
                <td>";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "curso", array()) . " - ") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "requisito", array())), "html", null, true);
        echo "</td>       
            </tr>
        </tbody>

     </table>
     <ul class=\"record_actions\">
        <li class=\"list-tb\">
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("cursoRequisito");
        echo "\"><button class=\"button-new btn btn-primary\">Volver a la Lista</button></a>
        </li>
        <li class=\"list-tb\">
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cursoRequisito_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\"><button class=\"button-new btn btn-primary\">Editar</button></a>
        </li>
        
        ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "

    </ul>


";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:CursoRequisito:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  59 => 24,  53 => 21,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
