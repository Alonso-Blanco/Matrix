<?php

/* MatrixBundle:Horario:edit.html.twig */
class __TwigTemplate_d8f5afa192ce9c80e3702eafb91015c7f94c7c0d1d075e863513a87e35b878cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:Horario:edit.html.twig", 1);
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
        echo "<h1 class=\"header-list\">Editar Horario</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    <li>";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>

        <ul class=\"record_actions\">
             <ul>
        <li class=\"list-tb\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("horario");
        echo "\">
                <button class=\"button-new btn btn-primary\">Volver a la lista </button>
            </a>
        </li>
       </ul>
 
   
</ul>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:Horario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
