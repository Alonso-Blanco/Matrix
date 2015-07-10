<?php

/* MatrixBundle:HorarioGrupo:new.html.twig */
class __TwigTemplate_d5924cf3b947e1f5f184809d4b63db0876e24b8a10bda6600274b3613c7ed7e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:HorarioGrupo:new.html.twig", 1);
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
        echo "<h1>HorarioGrupo creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

\t<ul>
        <li class=\"list-tb\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("horariogrupo");
        echo "\">
                <button class=\"button-new btn btn-primary\">Volver a la lista</button>
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:HorarioGrupo:new.html.twig";
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
