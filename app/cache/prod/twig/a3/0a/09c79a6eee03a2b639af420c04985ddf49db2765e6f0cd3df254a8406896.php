<?php

/* MatrixBundle:Horario:show.html.twig */
class __TwigTemplate_a30a09c79a6eee03a2b639af420c04985ddf49db2765e6f0cd3df254a8406896 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Horario:show.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Horario</h1>

    <table class=\"table-list table tabla-horario\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Día</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hora de Inicio</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "horainicio", array()), "H:i"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hora de Fin</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "horafin", array()), "H:i"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li class=\"list-tb opciones-horario\">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("horario");
        echo "\">
                <button class=\"button-new btn btn-primary\">Volver a la lista</button>
            </a>
        </li>
        <li class=\"list-tb\">
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("horario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
                <button class=\"btn btn-default\">Editar</button>
            </a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Horario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 34,  70 => 29,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
