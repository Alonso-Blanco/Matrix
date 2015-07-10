<?php

/* MatrixBundle:Horario:new.html.twig */
class __TwigTemplate_c3b0f0a11b95a5a053d42c32790093f0fc4aa760c1e9aa745dd4e3229d65781c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Horario:new.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Nuevo Horario</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

       <ul>
        <li class=\"list-tb\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("horario");
        echo "\">
                <button class=\"button-new btn btn-primary\">Volver a la lista</button>
            </a>
        </li>
       </ul>

";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Horario:new.html.twig";
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
