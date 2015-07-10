<?php

/* MatrixBundle:CursoCorequisito:index.html.twig */
class __TwigTemplate_b2238e1ec52ba48a69e52ae5e2afdecda817c3d62b6df652f250ae03c8685b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:CursoCorequisito:index.html.twig", 1);
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
        echo "<h1 class=\"header-list titulo-no-centrado\">Curso Correquisitos</h1>

    <div class=\"list-group\">
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "        <div class=\"fila\">
            <a href=\"#\" class=\"list-group-item activable info\">
              ";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "curso", array()) . " - ") . $this->getAttribute($context["entity"], "corequisito", array())), "html", null, true);
            echo "
            </a>
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cursoCorequisito_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"opciones\">
              <button class=\"list-group-item btn btn-custom\">
                Editar
              </button>
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    <ul>
        <li class=\"list-tb\">
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("cursoCorequisito_new");
        echo "\"><button class=\"button-new btn btn-primary\">Crear nuevo Corequisito</button></a>
        </li>
    </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:CursoCorequisito:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  62 => 19,  49 => 12,  44 => 10,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
