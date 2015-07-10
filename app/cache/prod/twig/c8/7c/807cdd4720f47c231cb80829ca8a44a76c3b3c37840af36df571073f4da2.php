<?php

/* MatrixBundle:Carrera:show.html.twig */
class __TwigTemplate_c87c807cdd4720f47c231cb80829ca8a44a76c3b3c37840af36df571073f4da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Carrera:show.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Carrera</h1>

    <table class=\"table-list table record_properties tabla-carreras\">
        <thead>
            <th>Código de Carrera</th>
            <th>Nombre de Carrera</th>
        </thead>
        <tbody>               
            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "codigocarrera", array()), "html", null, true);
        echo "</td>            
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombrecarrera", array()), "html", null, true);
        echo "</td>            
        </tbody>
    </table>

    <ul class=\"record_actions opciones-carreras\">
    <li class=\"list-tb\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("carrera");
        echo "\">
            <button class=\"button-new btn btn-primary\">Volver a las Carreras</button>
        </a>
    </li>
    <li class=\"list-tb\">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carrera_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
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
        return "MatrixBundle:Carrera:show.html.twig";
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
