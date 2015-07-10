<?php

namespace Matrix\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Matrix\Bundle\Entity\Curso;
use Matrix\Bundle\Form\CursoType;

/**
 * Curso controller.
 *
 * @Route("/curso")
 */
class CursoController extends Controller
{

    /**
     * Lists all Curso entities.
     *
     * @Route("/", name="curso")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MatrixBundle:Curso')->findAll();

        return array(
            'entities' => $entities,
            );
    }
    /**
     * Creates a new Curso entity.
     *
     * @Route("/", name="curso_create")
     * @Method("POST")
     * @Template("MatrixBundle:Curso:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Curso();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('curso_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            );
    }

    /**
     * Creates a form to create a Curso entity.
     *
     * @param Curso $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Curso $entity)
    {
        $form = $this->createForm(new CursoType(), $entity, array(
            'action' => $this->generateUrl('curso_create'),
            'method' => 'POST',
            'attr' => array('class' => 'form')));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Curso entity.
     *
     * @Route("/new", name="curso_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Curso();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            );
    }

    /**
     * Finds and displays a Curso entity.
     *
     * @Route("/{id}", name="curso_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:Curso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Curso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            );
    }

    /**
     * Displays a form to edit an existing Curso entity.
     *
     * @Route("/{id}/edit", name="curso_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:Curso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Curso entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView()
            
            );
    }

    /**
    * Creates a form to edit a Curso entity.
    *
    * @param Curso $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Curso $entity)
    {
        $form = $this->createForm(new CursoType(), $entity, array(
            'action' => $this->generateUrl('curso_update', array('id' => $entity->getId())),
            'method' => 'PUT',
            ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Curso entity.
     *
     * @Route("/{id}", name="curso_update")
     * @Method("PUT")
     * @Template("MatrixBundle:Curso:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:Curso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Curso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('curso_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            );
    }
    /**
     * Deletes a Curso entity.
     *
     * @Route("/{id}", name="curso_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MatrixBundle:Curso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Curso entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('curso'));
    }

    /**
     * Creates a form to delete a Curso entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('curso_delete', array('id' => $id)))
        ->setMethod('DELETE')
        ->add('submit', 'submit', array(
            'label' => 'Eliminar',
            'attr' => array('class' => 'button_delete btn btn-primary')))
        ->getForm()
        ;
    }

    public function historialAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        //$id_usuario  = $request->get('id');
        $session = $request->getSession();
        $id_usuario = $session -> get('login') -> getId();

        $sql="SELECT c2.'id', c2.'nombreCurso', c2.'sigla', g2.'numerogrupo', eg2.'nota' FROM MatrixBundle:Usuario as u2 
        INNER JOIN MatrixBundle:EstudianteGrupo as eg2
        with u2.id = eg2.usuario
        INNER JOIN MatrixBundle:Grupo as g2
        with g2.id = eg2.grupo
        INNER JOIN MatrixBundle:Curso as c2
        with c2.id = g2.curso
        where u2.id = :id " ;
        $result= $em->createQuery($sql)->setParameter('id', $id_usuario)->getResult();
        
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
    }
        public function aprobadosAction(Request $request)
        {
            $em = $this->getDoctrine()->getManager();
            
            $session = $request->getSession();
            $id_usuario = $session -> get('login') -> getId();

            $sql="SELECT c2.'id', c2.'nombreCurso', c2.'sigla', g2.'numerogrupo', eg2.'nota' FROM MatrixBundle:Usuario as u2 
            INNER JOIN MatrixBundle:EstudianteGrupo as eg2
            with u2.id = eg2.usuario
            INNER JOIN MatrixBundle:Grupo as g2
            with g2.id = eg2.grupo
            INNER JOIN MatrixBundle:Curso as c2
            with c2.id = g2.curso
            where u2.id = :id and eg2.nota >= 70";
            $result= $em->createQuery($sql)->setParameter('id', $id_usuario)->getResult();
            
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
    }
