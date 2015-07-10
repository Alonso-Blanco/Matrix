<?php

/* MatrixBundle:Curso:historial.html.twig */
class __TwigTemplate_25b1369b8b175bdf3c1a84d931312abb2937be429923fa553f1efb799bb82f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Curso:historial.html.twig", 1);
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
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "<h1 class=\"header-list titulo-no-centrado\">Historial de cursos matriculados</h1> 
    <div class=\"col-md-4 text-center col-md-offset-3\">
    <table class=\"records_list  table table-striped\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Sigla</th>
                <th>Grupo</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reporte"]) ? $context["reporte"] : $this->getContext($context, "reporte")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nombreCurso", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "sigla", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "numerogrupo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nota", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
    </div>
      

";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Curso:historial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  80 => 28,  76 => 27,  62 => 15,  59 => 14,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
