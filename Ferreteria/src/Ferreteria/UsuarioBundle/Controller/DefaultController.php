<?php

namespace Ferreteria\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ferreteria\UsuarioBundle\Entity\Usuario;
use Symfony\Component\Security\Core\SecurityContext;
use Ferreteria\UsuarioBundle\Form\UsuarioType;

/**
 * Usuario controller.
 *
 * @Route("/usuario")
 */
class DefaultController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     * @Route("/login", name="usuario_login")
     * @Template()
     */
    public function loginAction()
    {
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        
        $error = $peticion->attributes->get(
        SecurityContext::AUTHENTICATION_ERROR,
        $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
        );
        
        
        
        return $this->render('UsuarioBundle:Default:login.html.twig', array(
        'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
        'error' => $error
            
        ));
    }
    
    /**
     * Lists all Usuario entities.
     *
     * @Route("/login_check", name="usuario_login_check")
     * @Template()
     */
    public function algo()
    {
        
    }
    
    /**
     * Lists all Usuario entities.
     *
     * @Route("/logout", name="usuario_logout")
     * @Template()
     */
    public function algo1()
    {
        
    }
    
    /**
     *Usuario entities.
     *
     * @Route("/registro", name="usuario_registro")
     * @Template()
     */
    public function registroAction()
    {
        $usuario = new Usuario();
        $formulario = $this->createForm(new UsuarioType(), $usuario);
    
        return $this->render(
        'UsuarioBundle:Default:registro.html.twig',
        array('formulario' => $formulario->createView())
        );
    }
    
    /**
     *Usuario entities.
     *
     * @Route("/create", name="usuario_create")
     * @Template()
     */
    public function createaction()
    {
        if ($peticion->getMethod() == 'POST') {
        
            $formulario->bindRequest($peticion);
            if ($formulario->isValid()) {
            
                $encoder = $this->get('security.encoder_factory')
                ->getEncoder($usuario);
                $usuario->setSalt(md5(time()));
                
                $passwordCodificado = $encoder->encodePassword(
                    $usuario->getPassword(),
                    $usuario->getSalt()
                    );
                
                $usuario->setPassword($passwordCodificado);
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($usuario);
                $em->flush();
            }
        }
    }
    
}
