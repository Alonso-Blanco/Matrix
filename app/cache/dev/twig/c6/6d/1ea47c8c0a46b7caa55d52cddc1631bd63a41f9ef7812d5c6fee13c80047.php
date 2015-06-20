<?php

/* MatrixBundle:Curso:new.html.twig */
class __TwigTemplate_c66d1ea47c8c0a46b7caa55d52cddc1631bd63a41f9ef7812d5c6fee13c80047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Curso:new.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Crear nuevo Curso</h1>

\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li class=\"list-tb\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("curso");
        echo "\">
            <button class=\"button-new btn btn-primary\">Volver lista Cursos</button>
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Curso:new.html.twig";
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
