<?php

/* MatrixBundle:HorarioGrupo:edit.html.twig */
class __TwigTemplate_ff0398b90b7fb13a0dad38220dcfeaa3fa998a4a41ef47d91f770000277b49a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:HorarioGrupo:edit.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Editar Horario de Grupos</h1>

 <ul class=\"record_actions\">
     ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
     <ul>     \t
     \t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        <li class=\"list-tb\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("horariogrupo");
        echo "\">
                <button class=\"button-new btn btn-primary\">Volver a la lista </button>
            </a>
        </li>
 </ul>

";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:HorarioGrupo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
