<?php

/* MatrixBundle:Grupo:new.html.twig */
class __TwigTemplate_01ebe45109ddac663826301471197470a28d8146d7592738cadf969484ecbc3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Grupo:new.html.twig", 1);
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
        echo "<h1 lass=\"header-list\">Crear Grupo</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

    <ul class=\"record_actions\">
\t    <li class=\"list-tb\">
\t        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("grupo");
        echo "\">
\t            <button class=\"button-new btn btn-primary\">Volver lista Grupos</button>
\t        </a>
\t    </li>
\t</ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Grupo:new.html.twig";
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
