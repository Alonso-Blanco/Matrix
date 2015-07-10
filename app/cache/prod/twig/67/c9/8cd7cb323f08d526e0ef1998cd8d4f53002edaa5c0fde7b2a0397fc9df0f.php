<?php

/* MatrixBundle:CursoRequisito:new.html.twig */
class __TwigTemplate_67c98cd7cb323f08d526e0ef1998cd8d4f53002edaa5c0fde7b2a0397fc9df0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:CursoRequisito:new.html.twig", 1);
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
        echo "<h1>Curso-Requisito</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

    <ul class=\"record_actions\">
    \t<li class=\"list-tb\">
    \t    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("cursoRequisito");
        echo "\">
    \t        <button class=\"button-new btn btn-primary\">Lista de Requisitos</button>
    \t    </a>
    \t</li>
\t</ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:CursoRequisito:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
