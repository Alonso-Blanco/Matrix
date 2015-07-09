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
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/matrix/css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/matrix/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<h1 class=\"header-list\">Maya Curricular de la Carrera: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrera"]) ? $context["carrera"] : $this->getContext($context, "carrera")), "nombreCarrera", array()), "html", null, true);
        echo "</h1>
     <table class=\"records_list tabla-maya table table-striped\">
    <thead>
        <tr>
            <th>Curso</th>
            <th>Requisitos</th>
            <th>Corequisitos</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 27
            echo "        <tr>
            <td>
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_show", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, (($this->getAttribute($context["c"], "sigla", array()) . " - ") . $this->getAttribute($context["c"], "nombreCurso", array())), "html", null, true);
            echo "
                </a>
            </td>
            <td>
            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requisitos"]) ? $context["requisitos"] : $this->getContext($context, "requisitos")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 35
                echo "                ";
                if (($this->getAttribute($context["c"], "id", array()) == $this->getAttribute($this->getAttribute($context["r"], "curso", array()), "id", array()))) {
                    // line 36
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "requisito", array()), "html", null, true);
                    echo "
                ";
                }
                // line 38
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </td>
            <td>
            ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["corequisitos"]) ? $context["corequisitos"] : $this->getContext($context, "corequisitos")));
            foreach ($context['_seq'] as $context["_key"] => $context["cr"]) {
                // line 42
                echo "                ";
                if (($this->getAttribute($context["c"], "id", array()) == $this->getAttribute($this->getAttribute($context["cr"], "curso", array()), "id", array()))) {
                    // line 43
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cr"], "corequisito", array()), "html", null, true);
                    echo "
                ";
                }
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        return array (  145 => 49,  137 => 46,  131 => 45,  125 => 43,  122 => 42,  118 => 41,  114 => 39,  108 => 38,  102 => 36,  99 => 35,  95 => 34,  88 => 30,  84 => 29,  80 => 27,  76 => 26,  62 => 16,  59 => 14,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
