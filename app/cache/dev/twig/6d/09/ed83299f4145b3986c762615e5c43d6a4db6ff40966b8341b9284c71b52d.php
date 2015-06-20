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
        echo "<h2>Grupos del Curso ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "nombreCurso", array()), "html", null, true);
        echo "</h2>
    ";
        // line 6
        $context["grupo"] =  -1;
        // line 7
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 8
            echo "        ";
            if (((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")) != $this->getAttribute($context["e"], "numerogrupo", array()))) {
                // line 9
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantegrupo_matricula", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\">
                <h3>Grupo Número: ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "numerogrupo", array()), "html", null, true);
                echo "</h3>
            </a>
            ";
                // line 12
                $context["grupo"] = $this->getAttribute($context["e"], "numerogrupo", array());
                // line 13
                echo "        ";
            }
            // line 14
            echo "
        <p>
            ";
            // line 16
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["e"], "dia", array()) . " desde ") . twig_date_format_filter($this->env, $this->getAttribute($context["e"], "horainicio", array()), "H:i")) . " hasta ") . twig_date_format_filter($this->env, $this->getAttribute($context["e"], "horafin", array()), "H:i")), "html", null, true);
            echo "
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
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
        return array (  74 => 19,  65 => 16,  61 => 14,  58 => 13,  56 => 12,  51 => 10,  46 => 9,  43 => 8,  38 => 7,  36 => 6,  31 => 5,  28 => 3,  11 => 1,);
    }
}
