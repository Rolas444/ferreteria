<?php

namespace Ferreteria\ProveedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ferreteria\ProveedorBundle\Entity\Representante;
use Ferreteria\ProveedorBundle\Form\RepresentanteType;

/**
 * Representante controller.
 *
 * @Route("/representante")
 */
class RepresentanteController extends Controller
{
    /**
     * Lists all Representante entities.
     *
     * @Route("/", name="representante")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('ProveedorBundle:Representante')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Representante entity.
     *
     * @Route("/{id}/show", name="representante_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('ProveedorBundle:Representante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se han encontrado datos.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Representante entity.
     *
     * @Route("/new", name="representante_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Representante();
        $form   = $this->createForm(new RepresentanteType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Representante entity.
     *
     * @Route("/create", name="representante_create")
     * @Method("post")
     * @Template("ProveedorBundle:Representante:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Representante();
        $request = $this->getRequest();
        $form    = $this->createForm(new RepresentanteType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('representante_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Representante entity.
     *
     * @Route("/{id}/edit", name="representante_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('ProveedorBundle:Representante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Sin Datos existentes.');
        }

        $editForm = $this->createForm(new RepresentanteType(), $entity);
        

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            
        );
    }

    /**
     * Edits an existing Representante entity.
     *
     * @Route("/{id}/update", name="representante_update")
     * @Method("post")
     * @Template("ProveedorBundle:Representante:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('ProveedorBundle:Representante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('no se encontraron Datos.');
        }

        $editForm   = $this->createForm(new RepresentanteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('representante_show', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Representante entity.
     *
     * @Route("/{id}/delete", name="representante_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('ProveedorBundle:Representante')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('NO hay Datos.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('representante'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
