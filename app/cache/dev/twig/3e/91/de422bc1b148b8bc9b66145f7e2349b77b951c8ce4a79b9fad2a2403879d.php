<?php

/* MatrixBundle:Curso:aprobados.html.twig */
class __TwigTemplate_3e91de422bc1b148b8bc9b66145f7e2349b77b951c8ce4a79b9fad2a2403879d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Curso:aprobados.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Cursos Aprobados</h1> 
    <div class=\"col-md-4 text-center\">
    <table class=\"records_list  table table-striped\">
        <thead>
            <tr>
                <th>Nombre curso</th>
                <th>Sigla</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reporte"]) ? $context["reporte"] : $this->getContext($context, "reporte")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nombreCurso", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "sigla", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nota", array()), "html", null, true);
            echo "</td>               

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
    </div>
      

";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Curso:aprobados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  90 => 30,  86 => 29,  82 => 28,  79 => 27,  75 => 26,  62 => 15,  59 => 14,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
