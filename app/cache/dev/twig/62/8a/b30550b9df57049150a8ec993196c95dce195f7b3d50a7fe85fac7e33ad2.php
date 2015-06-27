<?php

/* :default:index.html.twig */
class __TwigTemplate_628ab30550b9df57049150a8ec993196c95dce195f7b3d50a7fe85fac7e33ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "      <div class=\"container\">
\t      <div class=\"page-header\">
\t        <h1>Sticky footer</h1>
\t      </div>
\t      <p class=\"lead\">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p>
\t      <p>Use <a href=\"../sticky-footer-navbar\">the sticky footer with a fixed navbar</a> if need be, too.</p>
\t    </div>

\t    <footer class=\"footer\">
\t      <div class=\"container\">
\t        <p class=\"text-muted\">Place sticky footer content here.</p>
\t      </div>
    \t</footer>
\t</div>
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
