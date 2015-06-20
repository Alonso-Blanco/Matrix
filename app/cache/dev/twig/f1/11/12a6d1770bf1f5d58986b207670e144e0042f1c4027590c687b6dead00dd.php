<?php

/* MatrixBundle:EstudianteGrupo:asignarnorasgrupo.html.twig */
class __TwigTemplate_f11112a6d1770bf1f5d58986b207670e144e0042f1c4027590c687b6dead00dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MatrixBundle:EstudianteGrupo:asignarnorasgrupo.html.twig", 1);
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
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 6
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantegrupo_asignarnoras", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">
                <h3>Grupo: ";
            // line 7
            echo twig_escape_filter($this->env, $context["e"], "html", null, true);
            echo "</h3>
            </a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "MatrixBundle:EstudianteGrupo:asignarnorasgrupo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  40 => 7,  35 => 6,  31 => 5,  28 => 3,  11 => 1,);
    }
}
