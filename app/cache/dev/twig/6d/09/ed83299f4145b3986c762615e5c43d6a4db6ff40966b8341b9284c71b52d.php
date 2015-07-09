<?php

/* MatrixBundle:EstudianteGrupo:matriculagrupo.html.twig */
class __TwigTemplate_6d09ed83299f4145b3986c762615e5c43d6a4db6ff40966b8341b9284c71b52d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:EstudianteGrupo:matriculagrupo.html.twig", 1);
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
        // line 5
        echo "<h1 class=\"header-list\">Grupos del Curso ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "nombreCurso", array()), "html", null, true);
        echo "</h1>

    <div class=\"list-group\">
    ";
        // line 8
        $context["grupo"] =  -1;
        // line 9
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 10
            echo "        ";
            if (((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")) != $this->getAttribute($context["e"], "numerogrupo", array()))) {
                // line 11
                echo "        </ul>
        <hr class=\"separador\">
            <div class=\"fila\">
                <a href=\"#\" class=\"list-group-item activable info\">
                  <p class=\"titulo-grupo\">Grupo Número: ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "numerogrupo", array()), "html", null, true);
                echo "</p>
                </a>
                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantegrupo_matricula", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\" class=\"opciones\">
                  <button class=\"list-group-item btn btn-custom\">
                    Matricular
                  </button>
                </a>
            </div>
            <h4 class=\"titulo-horario-grupo\">Horario</h4>
            <ul class=\"list-group\">
            ";
                // line 25
                $context["grupo"] = $this->getAttribute($context["e"], "numerogrupo", array());
                // line 26
                echo "        ";
            }
            // line 27
            echo "            <li class=\"list-group-item\">
                ";
            // line 28
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["e"], "dia", array()) . " desde ") . twig_date_format_filter($this->env, $this->getAttribute($context["e"], "horainicio", array()), "H:i")) . " hasta ") . twig_date_format_filter($this->env, $this->getAttribute($context["e"], "horafin", array()), "H:i")), "html", null, true);
            echo "
            </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    <hr class=\"separador\">
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:EstudianteGrupo:matriculagrupo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  78 => 28,  75 => 27,  72 => 26,  70 => 25,  59 => 17,  54 => 15,  48 => 11,  45 => 10,  40 => 9,  38 => 8,  31 => 5,  28 => 3,  11 => 1,);
    }
}
