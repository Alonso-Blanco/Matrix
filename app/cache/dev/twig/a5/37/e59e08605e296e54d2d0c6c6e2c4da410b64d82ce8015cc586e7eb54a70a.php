<?php

/* MatrixBundle:EstudianteGrupo:matriculacurso.html.twig */
class __TwigTemplate_a537e59e08605e296e54d2d0c6c6e2c4da410b64d82ce8015cc586e7eb54a70a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:EstudianteGrupo:matriculacurso.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Cursos para Matricular</h1>


\t<div class=\"list-group\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 9
            echo "\t\t<div class=\"fila\">
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_show", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item activable info\">
              ";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($context["e"], "sigla", array()) . " - ") . $this->getAttribute($context["e"], "nombreCurso", array())), "html", null, true);
            echo "
            </a>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantegrupo_matriculagrupo", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\" class=\"opciones\">
              <button class=\"list-group-item btn btn-custom\">
                Matricular
              </button>
            </a>
        </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
</table> 
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:EstudianteGrupo:matriculacurso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  53 => 13,  48 => 11,  44 => 10,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
