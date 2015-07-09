<?php

namespace Matrix\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Matrix\Bundle\Entity\EstudianteGrupo;
use Matrix\Bundle\Form\EstudianteGrupoType;

/**
 * EstudianteGrupo controller.
 *
 * @Route("/estudiantegrupo")
 */
class EstudianteGrupoController extends Controller
{

    /**
     * Lists all EstudianteGrupo entities.
     *
     * @Route("/", name="estudiantegrupo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MatrixBundle:EstudianteGrupo')->findAll();

        return array(
            'entities' => $entities,
            );
    }
    /**
     * Creates a new EstudianteGrupo entity.
     *
     * @Route("/", name="estudiantegrupo_create")
     * @Method("POST")
     * @Template("MatrixBundle:EstudianteGrupo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new EstudianteGrupo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('estudiantegrupo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            );
    }

    /**
     * Creates a form to create a EstudianteGrupo entity.
     *
     * @param EstudianteGrupo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(EstudianteGrupo $entity)
    {
        $form = $this->createForm(new EstudianteGrupoType(), $entity, array(
            'action' => $this->generateUrl('estudiantegrupo_create'),
            'method' => 'POST',
            ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new EstudianteGrupo entity.
     *
     * @Route("/new", name="estudiantegrupo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new EstudianteGrupo();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            );
    }

    /**
     * Finds and displays a EstudianteGrupo entity.
     *
     * @Route("/{id}", name="estudiantegrupo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:EstudianteGrupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstudianteGrupo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            );
    }

    /**
     * Displays a form to edit an existing EstudianteGrupo entity.
     *
     * @Route("/{id}/edit", name="estudiantegrupo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:EstudianteGrupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstudianteGrupo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            );
    }

    /**
    * Creates a form to edit a EstudianteGrupo entity.
    *
    * @param EstudianteGrupo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EstudianteGrupo $entity)
    {
        $form = $this->createForm(new EstudianteGrupoType(), $entity, array(
            'action' => $this->generateUrl('estudiantegrupo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
            ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing EstudianteGrupo entity.
     *
     * @Route("/{id}", name="estudiantegrupo_update")
     * @Method("PUT")
     * @Template("MatrixBundle:EstudianteGrupo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:EstudianteGrupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstudianteGrupo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('estudiantegrupo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            );
    }
    /**
     * Deletes a EstudianteGrupo entity.
     *
     * @Route("/{id}", name="estudiantegrupo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MatrixBundle:EstudianteGrupo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EstudianteGrupo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('estudiantegrupo'));
    }

    /**
     * Creates a form to delete a EstudianteGrupo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('estudiantegrupo_delete', array('id' => $id)))
        ->setMethod('DELETE')
        ->add('submit', 'submit', array(
            'label' => 'Eliminar',
            'attr' => array('class' => 'button_delete btn btn-primary')))
        ->getForm()
        ;
    }

    /**
     * Lista cursos que un estudiante puede matricular.
     *
     * @Route("/", name="estudiantegrupo_matriculacurso")
     * @Method("GET")
     * @Template()
     */
    public function matriculaCursoAction(Request $request)
    {
        $session = $request->getSession();
        
        if(!$session -> get('login'))
        {
            return $this -> render('MatrixBundle:Usuario:login.html.twig');
        }

        $cedula = $session -> get('login') -> getCedula();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MatrixBundle:Usuario');
        $usuario = $repository-> findOneBy(array('cedula'=> $cedula));

        $carrera_id = $usuario->getCarrera()->getId();
        $usuario_id = $usuario->getId();

        $sql= "Select distinct c.'id', c.'sigla', c.'nombreCurso', c.'creditos' from MatrixBundle:Curso as c
        where 
        c.carrera = :carrera_id
        and
        c.id in 
        (Select c1.id from MatrixBundle:Curso as c1
            inner join MatrixBundle:Grupo as g1
            with c1.id = g1.curso
            )
            and
            c.id not in
            (Select c2.id from MatrixBundle:Usuario as u2
                inner join MatrixBundle:EstudianteGrupo as eg2
                with u2.id = eg2.usuario
                inner join MatrixBundle:Grupo as g2
                with g2.id = eg2.grupo
                inner join MatrixBundle:Curso as c2
                with c2.id = g2.curso
                where u2.id = :usuario_id and (eg2.nota >= 70 or eg2.nota = 0)
                )
            and           
            (c.id not in 
                (select c3.id from MatrixBundle:Curso as c3 
                    inner join MatrixBundle:CursoRequisito as cr3
                    with c3.id = cr3.curso
                    )
            or
            c.id in 
            (select c4.id from MatrixBundle:Curso as c4 
                inner join MatrixBundle:CursoRequisito as cr4
                with c4.id = cr4.curso
                where cr4.requisito in
                (Select c5.id from MatrixBundle:Usuario as u5
                    inner join MatrixBundle:EstudianteGrupo as eg5
                    with u5.id = eg5.usuario
                    inner join MatrixBundle:Grupo as g5
                    with g5.id = eg5.grupo
                    inner join MatrixBundle:Curso as c5
                    with c5.id = g5.curso
                    where u5.id = :usuario_id and eg5.nota >= 70
                    )
                )
            )";

        $result= $em
        ->createQuery($sql)
        ->setParameter('carrera_id', $carrera_id)
        ->setParameter('usuario_id', $usuario_id)
        ->getResult();
        
        $form = $this->createFormBuilder($result)
        ->add('id', 'integer')
        ->add('sigla', 'text')
        ->add('nombreCurso', 'text')
        ->add('creditos', 'integer')
        ->getForm(); 
        
        if ($form->isValid()) {
            $data = $form->getData();
        }
        
        return $this->render('MatrixBundle:EstudianteGrupo:matriculacurso.html.twig', array(
            'entity' => $result,
            'form' => $form->createView(),
            ));
    }

    /**
     * Lista cursos que un estudiante puede matricular.
     *
     * @Route("/", name="estudiantegrupo_matriculagrupo")
     * @Method("GET")
     * @Template()
     */
    public function matriculaGrupoAction(Request $request, $id)
    {
    
        $em = $this->getDoctrine()->getManager();
        $repository2 = $em->getRepository('MatrixBundle:Curso');
        $curso = $repository2-> find($id);
    
        $sql= "Select g.'id', g.'numerogrupo', h.'dia', h.'horainicio', h.'horafin' 
        from MatrixBundle:Curso as c
        inner join MatrixBundle:Grupo as g
        with c.id = g.curso
        inner join MatrixBundle:HorarioGrupo as hg 
        with g.id = hg.grupo
        inner join MatrixBundle:Horario as h 
        with h.id = hg.horario
        where c.id = :id
        ";
    
        $result= $em->createQuery($sql)->setParameter('id', $id)->getResult();
    
        $form = $this->createFormBuilder($result)
        ->add('idgrupo', 'integer')
        ->add('numerogrupo', 'integer')
        ->add('dia', 'text')
        ->add('horainicio', 'text')
        ->add('horafin', 'text')
        ->getForm(); 
    
        if ($form->isValid()) {
            $data = $form->getData();
        }
    
        return $this->render('MatrixBundle:EstudianteGrupo:matriculagrupo.html.twig', array(
            'entity' => $result,
            'form' => $form->createView(),
            'curso' => $curso,
            ));
    }
    
    public function matriculaAction(Request $request, $id)
    {
        $session = $request->getSession();
        $cedula = $session -> get('login') -> getCedula();
    
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MatrixBundle:Usuario');
        $usuario = $repository-> findOneBy(array('cedula'=> $cedula));
        $repository2 = $em->getRepository('MatrixBundle:Grupo');
        $grupo = $repository2-> find($id);
    
        $matricula = new estudianteGrupo();
        $matricula->setUsuario($usuario);
        $matricula->setGrupo($grupo);
        $matricula->setNota(0);
    
        $em->persist($matricula);
        $em->flush();
    
        return $this->matriculaCursoAction($request);
    }
    
    public function asignarNotasGrupoAction(Request $request)
    {
        $session = $request->getSession();
        $cedula = $session -> get('login') -> getCedula();
    
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MatrixBundle:Usuario');
        $usuario = $repository-> findOneBy(array('cedula'=> $cedula));
        $repository2 = $em->getRepository('MatrixBundle:Grupo');
        $grupos = $repository2-> findBy(array('profesor'=> $usuario));
    
        return $this->render('MatrixBundle:EstudianteGrupo:asignarnorasgrupo.html.twig', array(
            'entity' => $grupos,
            ));
    }
    
    public function asignarNotasAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MatrixBundle:Grupo');
        $grupo = $repository-> find( $id);
        $repository2 = $em->getRepository('MatrixBundle:EstudianteGrupo');
        $notas = $repository2-> findBy(array('grupo'=> $grupo));
    
        return $this->render('MatrixBundle:EstudianteGrupo:asignarnoras.html.twig', array(
            'entity' => $notas,
            ));
    }
}