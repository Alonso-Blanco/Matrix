<?php

namespace Matrix\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Matrix\Bundle\Entity\CursoRequisito;
use Matrix\Bundle\Form\CursoRequisitoType;

/**
 * CursoRequisito controller.
 *
 * @Route("/cursorequisito")
 */
class CursoRequisitoController extends Controller
{

    /**
     * Lists all CursoRequisito entities.
     *
     * @Route("/", name="cursoRequisito")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MatrixBundle:CursoRequisito')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new CursoRequisito entity.
     *
     * @Route("/", name="cursoRequisito_create")
     * @Method("POST")
     * @Template("MatrixBundle:CursoRequisito:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new CursoRequisito();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cursoRequisito_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a CursoRequisito entity.
     *
     * @param CursoRequisito $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CursoRequisito $entity)
    {
        $form = $this->createForm(new CursoRequisitoType(), $entity, array(
            'action' => $this->generateUrl('cursoRequisito_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CursoRequisito entity.
     *
     * @Route("/new", name="cursoRequisito_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new CursoRequisito();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a CursoRequisito entity.
     *
     * @Route("/{id}", name="cursoRequisito_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:CursoRequisito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CursoRequisito entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing CursoRequisito entity.
     *
     * @Route("/{id}/edit", name="cursoRequisito_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:CursoRequisito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CursoRequisito entity.');
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
    * Creates a form to edit a CursoRequisito entity.
    *
    * @param CursoRequisito $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CursoRequisito $entity)
    {
        $form = $this->createForm(new CursoRequisitoType(), $entity, array(
            'action' => $this->generateUrl('cursoRequisito_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CursoRequisito entity.
     *
     * @Route("/{id}", name="cursoRequisito_update")
     * @Method("PUT")
     * @Template("MatrixBundle:CursoRequisito:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:CursoRequisito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CursoRequisito entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cursoRequisito_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a CursoRequisito entity.
     *
     * @Route("/{id}", name="cursoRequisito_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MatrixBundle:CursoRequisito')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CursoRequisito entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cursoRequisito'));
    }

    /**
     * Creates a form to delete a CursoRequisito entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cursoRequisito_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
