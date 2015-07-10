<?php

/* MatrixBundle:CursoCorequisito:new.html.twig */
class __TwigTemplate_810c2f2338b41f392158477848132ade0a7e49b146871cf20e3856406106c637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:CursoCorequisito:new.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Crear nuevo Correquisito</h1>

\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

    <ul class=\"record_actions\">
    \t<li class=\"list-tb\">
    \t    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("cursoCorequisito");
        echo "\">
    \t        <button class=\"button-new btn btn-primary\">Lista de Correquisitos</button>
    \t    </a>
    \t</li>
\t</ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:CursoCorequisito:new.html.twig";
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
