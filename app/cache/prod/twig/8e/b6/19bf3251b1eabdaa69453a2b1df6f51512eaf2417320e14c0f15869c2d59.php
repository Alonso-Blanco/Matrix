<?php

/* MatrixBundle:EstudianteGrupo:asignarnoras.html.twig */
class __TwigTemplate_8eb619bf3251b1eabdaa69453a2b1df6f51512eaf2417320e14c0f15869c2d59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:EstudianteGrupo:asignarnoras.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Administrar Grupo</h1>

    <div class=\"list-group\">
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity"]) ? $context["entity"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 8
            echo "        <div class=\"fila\">
            <a href=\"#\" class=\"list-group-item activable info\">
              ";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["e"], "usuario", array()), "nombrecompleto", array()) . " - Nota Actual: ") . $this->getAttribute($context["e"], "nota", array())), "html", null, true);
            echo "
            </a>
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantegrupo_edit", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\" class=\"opciones\">
              <button class=\"list-group-item btn btn-custom\">
                Asignar Nota
              </button>
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:EstudianteGrupo:asignarnoras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  49 => 12,  44 => 10,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
