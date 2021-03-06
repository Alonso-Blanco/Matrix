<?php

/* MatrixBundle:Carrera:index.html.twig */
class __TwigTemplate_8ad265992b7ced79502b44d4bed7edaa10bc7ce5e9228eda9be21cb3261439b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Carrera:index.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Lista de Carreras</h1>

    <table class=\"table-list table records_list tabla-carreras\">
        <thead>
            <tr>                
                <th>Código Carrera</th>
                <th>Nombre Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigocarrera", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrecarrera", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul class=\"acciones-tb\">
                        <li class=\"list-tb\">
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carrera_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <button class=\"btn btn-default\">Ver</button>
                            </a>
                        </li>
                        <li class=\"list-tb\">
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carrera_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <button class=\"btn btn-default\">Editar</button>
                            </a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li class=\"list-tb opciones-carreras\">
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("carrera_new");
        echo "\">
                <button class=\"button-new btn btn-primary\">Crear nuevo Carrera</button>
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Carrera:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 40,  84 => 35,  70 => 27,  62 => 22,  55 => 18,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }
}
