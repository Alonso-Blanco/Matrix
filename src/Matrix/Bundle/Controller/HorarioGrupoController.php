<?php

namespace Matrix\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Matrix\Bundle\Entity\HorarioGrupo;
use Matrix\Bundle\Form\HorarioGrupoType;

/**
 * HorarioGrupo controller.
 *
 * @Route("/horariogrupo")
 */
class HorarioGrupoController extends Controller
{

    /**
     * Lists all HorarioGrupo entities.
     *
     * @Route("/", name="horariogrupo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MatrixBundle:HorarioGrupo')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new HorarioGrupo entity.
     *
     * @Route("/", name="horariogrupo_create")
     * @Method("POST")
     * @Template("MatrixBundle:HorarioGrupo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new HorarioGrupo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('horariogrupo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a HorarioGrupo entity.
     *
     * @param HorarioGrupo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(HorarioGrupo $entity)
    {
        $form = $this->createForm(new HorarioGrupoType(), $entity, array(
            'action' => $this->generateUrl('horariogrupo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new HorarioGrupo entity.
     *
     * @Route("/new", name="horariogrupo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new HorarioGrupo();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a HorarioGrupo entity.
     *
     * @Route("/{id}", name="horariogrupo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:HorarioGrupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HorarioGrupo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing HorarioGrupo entity.
     *
     * @Route("/{id}/edit", name="horariogrupo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:HorarioGrupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HorarioGrupo entity.');
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
    * Creates a form to edit a HorarioGrupo entity.
    *
    * @param HorarioGrupo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(HorarioGrupo $entity)
    {
        $form = $this->createForm(new HorarioGrupoType(), $entity, array(
            'action' => $this->generateUrl('horariogrupo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing HorarioGrupo entity.
     *
     * @Route("/{id}", name="horariogrupo_update")
     * @Method("PUT")
     * @Template("MatrixBundle:HorarioGrupo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MatrixBundle:HorarioGrupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HorarioGrupo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('horariogrupo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a HorarioGrupo entity.
     *
     * @Route("/{id}", name="horariogrupo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MatrixBundle:HorarioGrupo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find HorarioGrupo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('horariogrupo'));
    }

    /**
     * Creates a form to delete a HorarioGrupo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('horariogrupo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
            'label' => 'Eliminar',
            'attr' => array('class' => 'button_delete btn btn-primary')))
            ->getForm()
        ;
    }
}
