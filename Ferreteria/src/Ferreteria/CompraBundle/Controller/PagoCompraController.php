<?php

namespace Ferreteria\CompraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ferreteria\CompraBundle\Entity\PagoCompra;
use Ferreteria\CompraBundle\Form\PagoCompraType;

/**
 * PagoCompra controller.
 *
 * @Route("/pagocompra")
 */
class PagoCompraController extends Controller
{
    /**
     * Lists all PagoCompra entities.
     *
     * @Route("/", name="pagocompra")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CompraBundle:PagoCompra')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a PagoCompra entity.
     *
     * @Route("/{id}/show", name="pagocompra_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CompraBundle:PagoCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PagoCompra entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new PagoCompra entity.
     *
     * @Route("/new", name="pagocompra_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new PagoCompra();
        $form   = $this->createForm(new PagoCompraType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new PagoCompra entity.
     *
     * @Route("/create", name="pagocompra_create")
     * @Method("post")
     * @Template("CompraBundle:PagoCompra:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new PagoCompra();
        $request = $this->getRequest();
        $form    = $this->createForm(new PagoCompraType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pagocompra_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing PagoCompra entity.
     *
     * @Route("/{id}/edit", name="pagocompra_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CompraBundle:PagoCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PagoCompra entity.');
        }

        $editForm = $this->createForm(new PagoCompraType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing PagoCompra entity.
     *
     * @Route("/{id}/update", name="pagocompra_update")
     * @Method("post")
     * @Template("CompraBundle:PagoCompra:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CompraBundle:PagoCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PagoCompra entity.');
        }

        $editForm   = $this->createForm(new PagoCompraType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pagocompra_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a PagoCompra entity.
     *
     * @Route("/{id}/delete", name="pagocompra_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CompraBundle:PagoCompra')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PagoCompra entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pagocompra'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
