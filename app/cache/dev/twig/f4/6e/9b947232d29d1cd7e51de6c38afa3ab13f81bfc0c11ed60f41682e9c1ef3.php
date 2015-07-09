<?php

/* MatrixBundle:HorarioGrupo:index.html.twig */
class __TwigTemplate_f46e9b947232d29d1cd7e51de6c38afa3ab13f81bfc0c11ed60f41682e9c1ef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:HorarioGrupo:index.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Lista de Horarios de Grupos</h1>

    <table class=\"table-list table\">
        <thead> 
            <tr>                
                <th>Grupo</th>
                <th>Nombre del Curso</th>
                <th>Día</th>
                <th>Hora de Inicio</th>
                <th>Hora de Fin</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "grupo", array()), "numerogrupo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "grupo", array()), "curso", array()), "nombreCurso", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "horario", array()), "dia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "horario", array()), "horaInicio", array()), "H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "horario", array()), "horaFin", array()), "H:i"), "html", null, true);
            echo "</td>
                <td>
                <ul class=\"acciones-tb\">
                    <li class=\"list-tb\">
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("horariogrupo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-default\">Ver</button></a>
                    </li>
                    <li class=\"list-tb\">
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("horariogrupo_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-default\">Editar</button></a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

        <ul>
        <li class=\"list-tb\">
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("horariogrupo_new");
        echo "\"><button class=\"button-new btn btn-primary\">Asignar Horario a un Grupo</button></a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:HorarioGrupo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  94 => 36,  82 => 30,  76 => 27,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }
}
