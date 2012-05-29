<?php

namespace Ferreteria\PedidoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ferreteria\PedidoBundle\Entity\Pedido;
use Ferreteria\PedidoBundle\Form\PedidoType;

/**
 * Pedido controller.
 *
 * @Route("/pedido")
 */
class PedidoController extends Controller
{
    /**
     * Lists all Pedido entities.
     *
     * @Route("/", name="pedido")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PedidoBundle:Pedido')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Pedido entity.
     *
     * @Route("/{id}/show", name="pedido_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PedidoBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Pedido entity.
     *
     * @Route("/new", name="pedido_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Pedido();
        $form   = $this->createForm(new PedidoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Pedido entity.
     *
     * @Route("/create", name="pedido_create")
     * @Method("post")
     * @Template("PedidoBundle:Pedido:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Pedido();
        $request = $this->getRequest();
        $form    = $this->createForm(new PedidoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pedido_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Pedido entity.
     *
     * @Route("/{id}/edit", name="pedido_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PedidoBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $editForm = $this->createForm(new PedidoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Pedido entity.
     *
     * @Route("/{id}/update", name="pedido_update")
     * @Method("post")
     * @Template("PedidoBundle:Pedido:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PedidoBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $editForm   = $this->createForm(new PedidoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pedido_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Pedido entity.
     *
     * @Route("/{id}/delete", name="pedido_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PedidoBundle:Pedido')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pedido entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pedido'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    /**
     * 
     *
     * @Route("/busca", name="pedido_busca")
     * 
     * @Template("CompraBundle:Default:find.html.twig")
     */
    public function BuscaAction()
    {
        
    }
    
    /**
     * 
     *
     * @Route("/find", name="pedido_find")
     * @Method("post")
     * 
     */
    public function EncuentraAction()
    {
        $request= $this->getRequest();
        
        $busca= $request->request->get('busca');
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $consulta= $em->createQuery('SELECT o FROM AlmacenBundle:Producto o WHERE
            o.Nombre LIKE :nombre');
        $consulta->setParameter('nombre', '%'.$busca.'%');

        $entities = $consulta->getResult();

        return $this->render('FrontBundle:Default:busca.html.twig',array('entities' => $entities));
        
    }
}
