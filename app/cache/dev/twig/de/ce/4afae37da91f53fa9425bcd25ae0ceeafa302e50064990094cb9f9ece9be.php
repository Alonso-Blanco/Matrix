<?php

/* MatrixBundle:Carrera:mayacurricular.html.twig */
class __TwigTemplate_dece4afae37da91f53fa9425bcd25ae0ceeafa302e50064990094cb9f9ece9be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Carrera:mayacurricular.html.twig", 1);
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
        echo "<h1>Maya Curricular de la Carrera ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrera"]) ? $context["carrera"] : $this->getContext($context, "carrera")), "nombreCarrera", array()), "html", null, true);
        echo "</h1>

<p>
    Cursos
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</p>


<table>
    <thead>
        <tr>
            <th>Curso</th>
            <th>Requisitos</th>
            <th>Corequisitos</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 25
            echo "        <tr>
            <td>
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_show", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 28
            echo twig_escape_filter($this->env, (($this->getAttribute($context["c"], "sigla", array()) . " - ") . $this->getAttribute($context["c"], "nombreCurso", array())), "html", null, true);
            echo "
                </a>
            </td>
            <td>
            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requisitos"]) ? $context["requisitos"] : $this->getContext($context, "requisitos")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 33
                echo "                ";
                if (($this->getAttribute($context["c"], "id", array()) == $this->getAttribute($this->getAttribute($context["r"], "curso", array()), "id", array()))) {
                    // line 34
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "requisito", array()), "html", null, true);
                    echo "
                ";
                }
                // line 36
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </td>
            <td>
            ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["corequisitos"]) ? $context["corequisitos"] : $this->getContext($context, "corequisitos")));
            foreach ($context['_seq'] as $context["_key"] => $context["cr"]) {
                // line 40
                echo "                ";
                if (($this->getAttribute($context["c"], "id", array()) == $this->getAttribute($this->getAttribute($context["cr"], "curso", array()), "id", array()))) {
                    // line 41
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cr"], "corequisito", array()), "html", null, true);
                    echo "
                ";
                }
                // line 43
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </tbody>
</table>



";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Carrera:mayacurricular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 47,  127 => 44,  121 => 43,  115 => 41,  112 => 40,  108 => 39,  104 => 37,  98 => 36,  92 => 34,  89 => 33,  85 => 32,  78 => 28,  74 => 27,  70 => 25,  66 => 24,  52 => 12,  43 => 10,  39 => 9,  31 => 5,  28 => 3,  11 => 1,);
    }
}
