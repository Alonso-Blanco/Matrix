<?php

/* MatrixBundle:Grupo:index.html.twig */
class __TwigTemplate_b1aad68e8f0f244254b4ce2568ee0adbc9d3a9fa70a2d6d092d96f9e0eadafb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Grupo:index.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Lista de Grupos</h1>

    <table class=\"table-list table\">
        <thead>
            <tr>
                <th>Numero de Grupo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numerogrupo", array()), "html", null, true);
            echo "</td>
                <td>
                <ul class=\"acciones-tb\">
                    <li class=\"list-tb\">
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            <button class=\"btn btn-default\">Ver</button>
                        </a>
                    </li>
                    <li class=\"list-tb\">
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupo_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 33
        echo "        </tbody>
    </table>

        <ul>
        <li class=\"list-tb\">
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("grupo_new");
        echo "\">
                <button class=\"button-new btn btn-primary\">Crear nuevo Grupo</button>
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Grupo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  79 => 33,  65 => 25,  57 => 20,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
