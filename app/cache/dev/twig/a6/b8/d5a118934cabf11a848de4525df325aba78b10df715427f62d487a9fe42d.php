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
    <body class=\"body\">
        
        ";
        // line 17
        $this->displayBlock('nav', $context, $blocks);
        // line 83
        echo "        <br><br><br>
        ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
        ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Matrix";
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
            echo "               <nav class=\"navbar navbar-default navbar-fixed-top barra\">
                  <div class=\"container\">
                    <div class=\"navbar-header\">
                      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                      </button>
                    <a class=\"navbar-brand\" href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("inicio");
            echo "\">Matrix</a>
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
                echo "\">Requisitos-Cursos</a></li>
                            <li><a href=\"";
                // line 36
                echo $this->env->getExtension('routing')->getPath("cursoCorequisito");
                echo "\">Correquisitos-Cursos</a></li>
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
                            <li><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/horarioGrupo"), "html", null, true);
                echo "\">Horarios-Grupos</a></li> 
                        ";
            }
            // line 42
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "rol", array()) == "Profesor")) {
                echo " 
                            <li>
                                <a href=\"";
                // line 44
                echo $this->env->getExtension('routing')->getPath("estudiantegrupo_asignarnorasgrupo");
                echo "\">Grupos, Estudiantes y Notas
                                </a>
                            </li>
                            <li>
                                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/carrera/cursos"), "html", null, true);
                echo "\">Maya Curricular</a>
                            </li>

                        ";
            }
            // line 52
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "rol", array()) == "Estudiante")) {
                echo " 
                            <li><a href=\"";
                // line 53
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
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/curso/historial"), "html", null, true);
                echo "\">Historial Academico</a>
                              </li>
                              <li>
                                <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/curso/cursosAprobados"), "html", null, true);
                echo "\">Cursos Aprobados</a>
                              </li>
                              <li>
                                <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/carrera/cursos"), "html", null, true);
                echo "\">Maya Curricular</a>
                            </li>
                            </ul>
                          </div> -->
                       
                            <li><a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/curso/historial"), "html", null, true);
                echo "\">Historial Académico</a></li>
                            <li><a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/curso/cursosAprobados"), "html", null, true);
                echo "\">Cursos aprobados</a></li>
                            <li><a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/carrera/cursos"), "html", null, true);
                echo "\">Maya Curricular</a></li>
                        ";
            }
            // line 76
            echo "                        <li id=\"logout-nav\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("usuario_logout");
            echo "\">Cerrar Sesión</a></li>
                     </a>
                   </div><!--/.nav-collapse -->
                  </div>
            </nav>
            ";
        }
        // line 82
        echo "        ";
    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
    }

    // line 87
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
        return array (  238 => 87,  233 => 84,  229 => 82,  219 => 76,  214 => 74,  210 => 73,  206 => 72,  198 => 67,  192 => 64,  186 => 61,  175 => 53,  170 => 52,  163 => 48,  156 => 44,  150 => 42,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  113 => 32,  106 => 28,  95 => 19,  92 => 18,  89 => 17,  84 => 6,  78 => 5,  72 => 88,  70 => 87,  66 => 85,  64 => 84,  61 => 83,  59 => 17,  49 => 10,  45 => 9,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
