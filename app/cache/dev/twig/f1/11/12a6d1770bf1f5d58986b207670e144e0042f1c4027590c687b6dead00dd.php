<?php

/* MatrixBundle:EstudianteGrupo:asignarnorasgrupo.html.twig */
class __TwigTemplate_f11112a6d1770bf1f5d58986b207670e144e0042f1c4027590c687b6dead00dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:EstudianteGrupo:asignarnorasgrupo.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Administrar Grupos</h1>

    <div class=\"list-group\">
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["entity"]);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "        <div class=\"fila\">
            <a href=\"#\" class=\"list-group-item activable info\">
              Grupo: ";
            // line 10
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "
            </a>
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantegrupo_asignarnoras", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"opciones\">
              <button class=\"list-group-item btn btn-custom\">
                Gestionar Notas
              </button>
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:EstudianteGrupo:asignarnorasgrupo.html.twig";
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
