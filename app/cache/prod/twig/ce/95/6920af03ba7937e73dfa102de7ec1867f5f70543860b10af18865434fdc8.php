<?php

/* MatrixBundle:HorarioGrupo:show.html.twig */
class __TwigTemplate_ce956920af03ba7937e73dfa102de7ec1867f5f70543860b10af18865434fdc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:HorarioGrupo:show.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Horario de Grupo</h1>

    <table class=\"table-list table tabla-horario\">
        <tbody>
            <tr>
                <th>Grupo</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "grupo", array()), "numerogrupo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Curso</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "grupo", array()), "curso", array()), "nombreCurso", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Día</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "horario", array()), "dia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hora de Inicio</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "horario", array()), "horainicio", array()), "H:i"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hora de Fin</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "horario", array()), "horafin", array()), "H:i"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li class=\"list-tb opciones-horario\">
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("horariogrupo");
        echo "\">
                <button class=\"button-new btn btn-primary\">Volver a la lista</button>
            </a>
        </li>
        <li class=\"list-tb\">
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("horariogrupo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
                <button class=\"btn btn-default\">Editar</button>
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:HorarioGrupo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  77 => 33,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
