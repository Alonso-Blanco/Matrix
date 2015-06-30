<?php

/* ::base.html.twig */
class __TwigTemplate_a6b8d5a118934cabf11a848de4525df325aba78b10df715427f62d487a9fe42d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/matrix/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/matrix/css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/matrix/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
        <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    </head>
    <body>
        
        ";
        // line 17
        $this->displayBlock('nav', $context, $blocks);
        // line 82
        echo "        <br><br><br>
        ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
        ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_nav($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "login"), "method", false, true), "rol", array(), "any", true, true)) {
            // line 19
            echo "               <nav class=\"navbar navbar-default navbar-fixed-top\">
                  <div class=\"container\">
                    <div class=\"navbar-header\">
                      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                      </button>
                    <a class=\"navbar-brand\" href=\"#\">Matrix</a>
                    </div>
                    <div id=\"navbar\" class=\"collapse navbar-collapse\">
                      <ul class=\"nav navbar-nav\"> 
                        ";
            // line 32
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "rol", array()) == "Administrador")) {
                echo "    
                            <li><a href=\"";
                // line 33
                echo $this->env->getExtension('routing')->getPath("usuario");
                echo "\">Usuarios</a></li>                      
                            <li><a href=\"";
                // line 34
                echo $this->env->getExtension('routing')->getPath("curso");
                echo "\">Cursos</a></li>
                            <li><a href=\"";
                // line 35
                echo $this->env->getExtension('routing')->getPath("cursoRequisito");
                echo "\">Requisitos de Cursos</a></li>
                            <li><a href=\"";
                // line 36
                echo $this->env->getExtension('routing')->getPath("cursoCorequisito");
                echo "\">Correquisitos de Cursos</a></li>
                            <li><a href=\"";
                // line 37
                echo $this->env->getExtension('routing')->getPath("carrera");
                echo "\">Carreras</a></li>
                            <li><a href=\"";
                // line 38
                echo $this->env->getExtension('routing')->getPath("grupo");
                echo "\">Grupos</a></li> 
                            <li><a href=\"";
                // line 39
                echo $this->env->getExtension('routing')->getPath("horario");
                echo "\">Horarios</a></li> 
                        ";
            }
            // line 41
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "rol", array()) == "Profesor")) {
                echo " 
                            <li>
                                <a href=\"";
                // line 43
                echo $this->env->getExtension('routing')->getPath("estudiantegrupo_asignarnorasgrupo");
                echo "\">Grupos, Estudiantes y Notas
                                </a>
                            </li>
                            <li>
                                <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/carrera/cursos"), "html", null, true);
                echo "\">Maya Curricular</a>
                            </li>

                        ";
            }
            // line 51
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "rol", array()) == "Estudiante")) {
                echo " 
                            <li><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/estudianteGrupo/matriculaCurso"), "html", null, true);
                echo "\">Matricular</a></li>
                        <!-- div class=\"dropdown\">
                             <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                    <span class=\"caret\"></span>
                                        Mis cursos
                             </button> -->
                            <!-- <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                              <li>
                                <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/curso/historial"), "html", null, true);
                echo "\">Historial Academico</a>
                              </li>
                              <li>
                                <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/curso/cursosAprobados"), "html", null, true);
                echo "\">Cursos Aprobados</a>
                              </li>
                              <li>
                                <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/carrera/cursos"), "html", null, true);
                echo "\">Maya Curricular</a>
                            </li>
                            </ul>
                          </div> -->
                       
                            <li><a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/curso/historial"), "html", null, true);
                echo "\">Historial Académico</a></li>
                            <li><a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/curso/cursosAprobados"), "html", null, true);
                echo "\">Cursos aprobados</a></li>
                            <li><a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/carrera/cursos"), "html", null, true);
                echo "\">Maya Curricular</a></li>
                        ";
            }
            // line 75
            echo "                        <li id=\"logout-nav\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("usuario_logout");
            echo "\">Cerrar Sesión</a></li>
                     </a>
                   </div><!--/.nav-collapse -->
                  </div>
            </nav>
            ";
        }
        // line 81
        echo "        ";
    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 86,  226 => 83,  222 => 81,  212 => 75,  207 => 73,  203 => 72,  199 => 71,  191 => 66,  185 => 63,  179 => 60,  168 => 52,  163 => 51,  156 => 47,  149 => 43,  143 => 41,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  95 => 19,  92 => 18,  89 => 17,  84 => 6,  78 => 5,  72 => 87,  70 => 86,  66 => 84,  64 => 83,  61 => 82,  59 => 17,  49 => 10,  45 => 9,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
