<?php

namespace Ferreteria\AlmacenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ferreteria\AlmacenBundle\Entity\UnidadMedida;
use Ferreteria\AlmacenBundle\Form\UnidadMedidaType;

/**
 * UnidadMedida controller.
 *
 * @Route("/unidadmedida")
 */
class UnidadMedidaController extends Controller
{
    /**
     * Lists all UnidadMedida entities.
     *
     * @Route("/", name="unidadmedida")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AlmacenBundle:UnidadMedida')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a UnidadMedida entity.
     *
     * @Route("/{id}/show", name="unidadmedida_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AlmacenBundle:UnidadMedida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadMedida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new UnidadMedida entity.
     *
     * @Route("/new", name="unidadmedida_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new UnidadMedida();
        $form   = $this->createForm(new UnidadMedidaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new UnidadMedida entity.
     *
     * @Route("/create", name="unidadmedida_create")
     * @Method("post")
     * @Template("AlmacenBundle:UnidadMedida:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new UnidadMedida();
        $request = $this->getRequest();
        $form    = $this->createForm(new UnidadMedidaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('unidadmedida_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing UnidadMedida entity.
     *
     * @Route("/{id}/edit", name="unidadmedida_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AlmacenBundle:UnidadMedida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadMedida entity.');
        }

        $editForm = $this->createForm(new UnidadMedidaType(), $entity);
        

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            
        );
    }

    /**
     * Edits an existing UnidadMedida entity.
     *
     * @Route("/{id}/update", name="unidadmedida_update")
     * @Method("post")
     * @Template("AlmacenBundle:UnidadMedida:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AlmacenBundle:UnidadMedida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadMedida entity.');
        }

        $editForm   = $this->createForm(new UnidadMedidaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('unidadmedida_show', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a UnidadMedida entity.
     *
     * @Route("/{id}/delete", name="unidadmedida_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AlmacenBundle:UnidadMedida')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UnidadMedida entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('unidadmedida'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
