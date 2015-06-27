<?php

/* MatrixBundle:Curso:edit.html.twig */
class __TwigTemplate_54266f63977887619193efa1421502705fa289d4259e8421180bd1582495ee0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Curso:edit.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Editar Curso</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "

        <ul class=\"record_actions\">
    <li class=\"list-tb\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("curso");
        echo "\"><button class=\"button-new btn btn-primary\">Volver a los Cursos</button></a>
    </li>
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Curso:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
