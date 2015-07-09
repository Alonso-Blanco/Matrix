<?php

namespace Matrix\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Matrix\Bundle\Entity\CursoCorequisito;
use Matrix\Bundle\Form\CursoCorequisitoType;

/**
 * CursoCorequisito controller.
 *
 * @Route("/cursocorequisito")
 */
class CursoCorequisitoController extends Controller
{

    /**
     * Lists all CursoCorequisito entities.
     *
     * @Route("/", name="cursocorequisito")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MatrixBundle:CursoCorequisito')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new CursoCorequisito entity.
     *
     * @Route("/", name="cursoCorequisito_create")
     * @Method("POST")
     * @Template("MatrixBundle:CursoCorequisito:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new CursoCorequisito();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cursoCorequisito_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a CursoCorequisito entity.
     *
     * @param CursoCorequisito $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CursoCorequisito $entity)
    {
        $form = $this->createForm(new CursoCorequisitoType(), $entity, array(
            'action' => $this->generateUrl('cursoCorequisito_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new CursoCorequisito entity.
     *
     * @Route("/new", name="cursoCorequisito_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new CursoCorequisito();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a CursoCorequisito entity.
     *
     * @Route("/{id}", name="cursoCorequisito_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:CursoCorequisito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CursoCorequisito entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing CursoCorequisito entity.
     *
     * @Route("/{id}/edit", name="cursoCorequisito_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:CursoCorequisito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CursoCorequisito entity.');
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
    * Creates a form to edit a CursoCorequisito entity.
    *
    * @param CursoCorequisito $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CursoCorequisito $entity)
    {
        $form = $this->createForm(new CursoCorequisitoType(), $entity, array(
            'action' => $this->generateUrl('cursoCorequisito_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing CursoCorequisito entity.
     *
     * @Route("/{id}", name="cursoCorequisito_update")
     * @Method("PUT")
     * @Template("MatrixBundle:CursoCorequisito:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:CursoCorequisito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CursoCorequisito entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cursoCorequisito_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a CursoCorequisito entity.
     *
     * @Route("/{id}", name="cursoCorequisito_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MatrixBundle:CursoCorequisito')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CursoCorequisito entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cursocorequisito'));
    }

    /**
     * Creates a form to delete a CursoCorequisito entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cursoCorequisito_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
            'label' => 'Eliminar',
            'attr' => array('class' => 'button_delete btn btn-primary')))
            ->getForm()
        ;
    }
}
