ESto va en el base.html.twig---------------------
 {% block nav %}
               <nav class="navbar navbar-default navbar-fixed-top">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    <a class="navbar-brand" href="#">Matrix</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav">  
                        <li><a href="{{path('usuario')}}">Usuarios</a></li>                      
                        <li><a href="{{path('curso')}}">Cursos</a></li>
                        <li><a href="{{path('carrera')}}">Carreras</a></li>
                        <li><a href="{{path('grupo')}}">Grupos</a></li> 
                        <li><a href="{{asset('app_dev.php/curso/historial')}}">Historial Académico</a></li>
                        <li><a href="{{asset('app_dev.php/curso/cursosAprobados')}}">Cursos aprobados</a></li>
                        <li id="logout-nav"><a href="{{path('usuario_logout')}}">Cerrar Sesión</a></li>
                     </a>
                   </div><!--/.nav-collapse -->
                  </div>
            </nav>
        {% endblock %}
        <br><br><br>
        {% block body %}{% endblock %}
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        {% block javascripts %}{% endblock %}
---------------------------------------------------------------------------------------------------
En curso controller-----------------------
 public function historialAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
       
        $id_usuario  = $request->get('id');

        $sql="SELECT c2.'id', c2.'nombreCurso', c2.'sigla', g2.'numerogrupo', eg2.'nota' FROM MatrixBundle:Usuario as u2 
                            INNER JOIN MatrixBundle:EstudianteGrupo as eg2
                            with u2.id = eg2.usuario
                            INNER JOIN MatrixBundle:Grupo as g2
                            with g2.id = eg2.grupo
                            INNER JOIN MatrixBundle:Curso as c2
                            with c2.id = g2.curso
                            where u2.id = :id " ;
        $result= $em->createQuery($sql)->setParameter('id', 12)->getResult();
 
        $form = $this->createFormBuilder($result)
       
        ->add('nombreCurso', 'text')
        ->add('sigla', 'text')
        ->add('numeroGrupo', 'integer')
        ->add('nota', 'integer')
        ->getForm(); 

        if ($form->isValid()) {
            $data = $form->getData();
            }
         
        return $this->render('MatrixBundle:Curso:historial.html.twig', array(
                'reporte' => $result,
                'form' => $form->createView(),
            ));
public function aprobadosAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
       
        $id_usuario  = $request->get('id');

        $sql="SELECT c2.'id', c2.'nombreCurso', c2.'sigla', g2.'numerogrupo', eg2.'nota' FROM MatrixBundle:Usuario as u2 
                            INNER JOIN MatrixBundle:EstudianteGrupo as eg2
                            with u2.id = eg2.usuario
                            INNER JOIN MatrixBundle:Grupo as g2
                            with g2.id = eg2.grupo
                            INNER JOIN MatrixBundle:Curso as c2
                            with c2.id = g2.curso
                            where u2.id = :id and eg2.nota >= 70";
        $result= $em->createQuery($sql)->setParameter('id', 12)->getResult();
 
        $form = $this->createFormBuilder($result)
       
         ->add('nombreCurso', 'text')
        ->add('sigla', 'text')
        ->add('nota', 'integer')
        ->getForm(); 

        if ($form->isValid()) {
            $data = $form->getData();
            }
         
        return $this->render('MatrixBundle:Curso:aprobados.html.twig', array(
                'reporte' => $result,
                'form' => $form->createView(),
            ));

    }
------------------------------------------------------------------------------------------------
en curso.yml
curso_historial:
    path:     /historial
    defaults: { _controller: "MatrixBundle:Curso:historial"}

curso_aprobados:
    path:     /cursosAprobados
    defaults: { _controller: "MatrixBundle:Curso:aprobados"}
-------------------------------------------------------------------------------------------------