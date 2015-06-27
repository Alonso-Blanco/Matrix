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
        // line 6
        echo "<table>
    <caption>Información de los Cursos de la Carrera ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrera"]) ? $context["carrera"] : null), "nombreCarrera", array()), "html", null, true);
        echo "</caption>
    <thead>
        <tr>
            <th>Curso</th>
            <th>Requisitos</th>
            <th>Corequisitos</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["infoCarrera"]) ? $context["infoCarrera"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 17
            echo "        <tr>
            <td>
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_show", array("id" => $this->getAttribute($this->getAttribute($context["e"], "curso", array()), "id", array()))), "html", null, true);
            echo "\">
                    e.curso.nombreCurso ~ ' - ' ~ e.curso.sigla
                </a>
            </td>
        </tr>
        <tr>
            <td>
            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["e"], "requisitos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 27
                echo "                ";
                echo twig_escape_filter($this->env, ((" " . $this->getAttribute($context["r"], "sigla", array())) . " "), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </td>
            <td>
            ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["e"], "corequisitos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 32
                echo "                ";
                echo twig_escape_filter($this->env, ((" " . $this->getAttribute($context["c"], "sigla", array())) . " "), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </td>
        </tr>
        <tr>
            <td>data</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        return array (  105 => 40,  94 => 34,  85 => 32,  81 => 31,  77 => 29,  68 => 27,  64 => 26,  54 => 19,  50 => 17,  46 => 16,  34 => 7,  31 => 6,  28 => 3,  11 => 1,);
    }
}
