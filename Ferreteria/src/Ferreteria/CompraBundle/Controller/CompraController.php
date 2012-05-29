<?php

namespace Ferreteria\CompraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ferreteria\CompraBundle\Entity\Compra;
use Ferreteria\CompraBundle\Form\CompraType;
use Symfony\Component\HttpFoundation\Response;
use Ferreteria\CompraBundle\Entity\DetalleCompra;

/**
 * Compra controller.
 *
 * @Route("/compra")
 */
class CompraController extends Controller
{
    /**
     * Lists all Compra entities.
     *
     * @Route("/", name="compra")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CompraBundle:Compra')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Compra entity.
     *
     * @Route("/{id}/show", name="compra_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CompraBundle:Compra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Compra entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Compra entity.
     *
     * @Route("/new", name="compra_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Compra();
        $form   = $this->createForm(new CompraType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Compra entity.
     *
     * @Route("/create", name="compra_create")
     * @Method("post")
     * @Template("CompraBundle:Compra:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Compra();
        $request = $this->getRequest();
        $form    = $this->createForm(new CompraType(), $entity);
        $form->bindRequest($request);
        $usuario = $this->get('security.context')->getToken()->getUser();
        $entity->setUsuario($usuario);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
            $id=$entity->getId();

            return new Response($id);
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }
    
    /**
     * @Route("/detalles", name="detalle_save")
     * @Method("post")
     */
    public function DetalleAction()
    {
        
        $request= $this->getRequest();

        $idcompra=$request->request->get('compra');
        $idproducto=$request->request->get('producto');
        $cantidad=$request->request->get('cantidad');
        $costo=$request->request->get('costo');
        $entity= new DetalleCompra();
        $entity->setCompra($idcompra);
        $entity->setProducto($idproducto);
        $entity->setCantidad($cantidad);
        $entity->setCosto($costo);
        
        $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
        
    }

    /**
     * Displays a form to edit an existing Compra entity.
     *
     * @Route("/{id}/edit", name="compra_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CompraBundle:Compra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Compra entity.');
        }

        $editForm = $this->createForm(new CompraType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Compra entity.
     *
     * @Route("/{id}/update", name="compra_update")
     * @Method("post")
     * @Template("CompraBundle:Compra:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CompraBundle:Compra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Compra entity.');
        }

        $editForm   = $this->createForm(new CompraType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('compra_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Compra entity.
     *
     * @Route("/{id}/delete", name="compra_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CompraBundle:Compra')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Compra entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('compra'));
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
     * @Method("post")
     * @Template("CompraBundle:Default:find.html.twig")
     */
    public function BuscaAction()
    {
        
       return array();
    }
    
    /**
     * 
     *
     * @Route("/buscaCompra", name="compra_busca")
     * @Method("post")
     * @Template("CompraBundle:Default:findshop.html.twig")
     */
    public function BuscaCompraAction()
    {
        
       return array();
    }
    
    /**
     * 
     *
     * @Route("/find", name="compra_find")
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

        return $this->render('FrontBundle:Default:buscaCompra.html.twig',array('entities' => $entities));
        
    }
    
}
