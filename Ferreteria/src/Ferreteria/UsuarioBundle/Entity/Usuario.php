<?php

namespace Ferreteria\UsuarioBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ferreteria\UsuarioBundle\Entity\Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuario implements UserInterface
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $Nombre
     *
     * @ORM\Column(name="Nombre", type="string", length=50)
     */
    private $Nombre;

    /**
     * @var string $Apellido
     *
     * @ORM\Column(name="Apellido", type="string", length=50)
     */
    private $Apellido;

    /**
     * @var string $Rol
     *
     * @ORM\Column(name="Rol", type="string", length=20)
     */
    private $Rol;

    /**
     * @var string $Salt
     *
     * @ORM\Column(name="Salt", type="string", length=20)
     */
    private $Salt;

    /**
     * @var string $Password
     *
     * @ORM\Column(name="Password", type="string", length=100)
     */
    private $Password;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }

    /**
     * Get Nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set Apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->Apellido = $apellido;
    }

    /**
     * Get Apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->Apellido;
    }

    /**
     * Set Rol
     *
     * @param string $rol
     */
    public function setRol($rol)
    {
        $this->Rol = $rol;
    }

    /**
     * Get Rol
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->Rol;
    }

    /**
     * Set Salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->Salt = $salt;
    }

    /**
     * Get Salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->Salt;
    }

    /**
     * Set Password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->Password = $password;
    }

    /**
     * Get Password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->Password;
    }
    function equals(\Symfony\Component\Security\Core\User\UserInterface $usuario)
    {
        return $this->getNombre()== $usuario->getUsername();
    }
    function eraseCredentials()
    {
        
    }
    function getRoles()
    {
        return array('ROLE_USUARIO','ROLE_ADMIN');
    }
    function getUsername()
    {
        return $this->getNombre();
    }
    
}
