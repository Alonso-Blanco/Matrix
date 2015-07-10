<?php

/* MatrixBundle:CursoRequisito:edit.html.twig */
class __TwigTemplate_519a3c68456157bd1b30e492e217a33ecdf1ab8a42239c2d76b86cb7c6ffa968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:CursoRequisito:edit.html.twig", 1);
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
        echo "<h1>Requisito</h1>
    <ul class=\"record_actions\">
     ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "
     <ul>     \t
     \t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "
        <li class=\"list-tb\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("cursoRequisito");
        echo "\">
                <button class=\"button-new btn btn-primary\">Volver a la lista </button>
            </a>
        </li>
 </ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:CursoRequisito:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
